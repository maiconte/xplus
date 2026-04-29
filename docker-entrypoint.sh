#!/bin/sh
# ============================================================
# Xplus — Entrypoint
# Garante permissões corretas e inicializa a estrutura de dados
# antes de subir o Apache.
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

echo "[xplus] Ambiente pronto. Iniciando Apache..."
exec apache2-foreground
