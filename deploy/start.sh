#!/bin/bash
# Carrega envvars do Apache
source /etc/apache2/envvars
mkdir -p $APACHE_RUN_DIR $APACHE_LOCK_DIR $APACHE_LOG_DIR 2>/dev/null || true

# Corrige MPM em runtime
a2dismod mpm_event mpm_worker mpm_prefork 2>/dev/null || true
a2enmod mpm_prefork 2>/dev/null || true

# Remove configs duplicadas de MPM
rm -f /etc/apache2/mods-enabled/mpm_event.conf
rm -f /etc/apache2/mods-enabled/mpm_event.load
rm -f /etc/apache2/mods-enabled/mpm_worker.conf
rm -f /etc/apache2/mods-enabled/mpm_worker.load

# Porta dinâmica Railway
APP_PORT=${PORT:-80}
sed -i "s/Listen 80/Listen $APP_PORT/" /etc/apache2/ports.conf
sed -i "s/:80>/:$APP_PORT>/" /etc/apache2/sites-enabled/000-default.conf

# Faketime 2050
FAKETIME_LIB=$(find /usr/lib -name "libfaketime.so.1" 2>/dev/null | head -1)
export FAKETIME="@2050-01-01 00:00:00"
export LD_PRELOAD="$FAKETIME_LIB"
echo "⚡ Porta: $APP_PORT | MPM: prefork | lib: $FAKETIME_LIB"

exec apache2 -D FOREGROUND