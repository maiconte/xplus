#!/bin/bash
# ─────────────────────────────────────────────────────────────────
# start.sh — Inicia Apache com data falsa para contornar
#            a expiração dos arquivos ionCube
# ─────────────────────────────────────────────────────────────────

# Data definida ANTES da expiração dos arquivos (2023-05-01)
# Ajusta essa data se o erro persistir — tenta datas mais antigas
FAKE_DATE="2050-01-01 00:00:00"

echo "⚡ Xplus iniciando com data simulada: $FAKE_DATE"

# Localiza o libfaketime no sistema
FAKETIME_LIB=$(find /usr/lib -name "libfaketime.so.1" 2>/dev/null | head -1)

if [ -z "$FAKETIME_LIB" ]; then
    echo "⚠ libfaketime não encontrado, iniciando sem data falsa"
    exec apache2-foreground
else
    echo "✅ libfaketime encontrado: $FAKETIME_LIB"
    export FAKETIME="@$FAKE_DATE"
    export LD_PRELOAD="$FAKETIME_LIB"
    exec apache2-foreground
fi
