#!/bin/sh
# ============================================================
# Xplus — Entrypoint
# Garante permissões corretas, configura faketime para bypass
# do ionCube expiry e inicializa o Apache.
# ============================================================

set -e

DATA_DIR="/var/www/html/painelactive/api/data"

# ─── Garante que a pasta de dados existe com permissões corretas ──
if [ ! -d "$DATA_DIR" ]; then
    mkdir -p "$DATA_DIR"
fi

chown -R www-data:www-data "$DATA_DIR"
chmod -R 777 "$DATA_DIR"

# ─── Garante que o .htaccess de proteção do banco existe ─────────
HTACCESS="$DATA_DIR/.htaccess"
if [ ! -f "$HTACCESS" ]; then
    cat > "$HTACCESS" << 'EOF'
# Bloqueia acesso direto aos arquivos de banco de dados
<FilesMatch "\.(db|sqlite|sqlite3)$">
    Order Allow,Deny
    Deny from all
</FilesMatch>

# Bloqueia listagem de diretório
Options -Indexes
EOF
    chown www-data:www-data "$HTACCESS"
fi

# ─── Configura faketime via LD_PRELOAD ───────────────────────────
# O ionCube verifica a data do sistema; aqui travamos em uma data 
# passada para que os arquivos codificados não mostrem "expired file".
FAKETIME_LIB_PATH="/etc/faketime_lib_path"
if [ -f "$FAKETIME_LIB_PATH" ]; then
    FAKETIME_LIB=$(cat "$FAKETIME_LIB_PATH")
    if [ -n "$FAKETIME_LIB" ] && [ -f "$FAKETIME_LIB" ]; then
        # Define a data fake (2022 para garantir bypass da expiração)
        FAKE_DATE="2022-01-01 00:00:00"
        
        # Exporta para o shell atual
        export LD_PRELOAD="$FAKETIME_LIB"
        export FAKETIME="@$FAKE_DATE"
        
        # Injeta no envvars do Apache para que os workers herdem
        echo "export LD_PRELOAD=\"$FAKETIME_LIB\"" >> /etc/apache2/envvars
        echo "export FAKETIME=\"@$FAKE_DATE\"" >> /etc/apache2/envvars
        
        echo "[xplus] Faketime ativo: data simulada em $FAKE_DATE (bypass ionCube expiry)"
    fi
fi

echo "[xplus] Ambiente pronto. Iniciando Apache..."
exec apache2-foreground
