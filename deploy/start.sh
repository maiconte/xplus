#!/bin/bash
source /etc/apache2/envvars
mkdir -p $APACHE_RUN_DIR $APACHE_LOCK_DIR $APACHE_LOG_DIR 2>/dev/null || true

# Railway define a porta dinamicamente
APP_PORT=${PORT:-80}
echo "⚡ Porta: $APP_PORT"

# Configura Apache para usar a porta do Railway
sed -i "s/Listen 80/Listen $APP_PORT/" /etc/apache2/ports.conf
sed -i "s/:80>/:$APP_PORT>/" /etc/apache2/sites-enabled/000-default.conf

# Ativa faketime 2050
FAKETIME_LIB=$(find /usr/lib -name "libfaketime.so.1" 2>/dev/null | head -1)
export FAKETIME="@2050-01-01 00:00:00"
export LD_PRELOAD="$FAKETIME_LIB"

exec apache2 -D FOREGROUND