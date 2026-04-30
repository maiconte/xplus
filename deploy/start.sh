#!/bin/bash
source /etc/apache2/envvars
mkdir -p $APACHE_RUN_DIR $APACHE_LOCK_DIR $APACHE_LOG_DIR 2>/dev/null || true
FAKETIME_LIB=$(find /usr/lib -name "libfaketime.so.1" 2>/dev/null | head -1)
echo "⚡ Xplus — data 2050 | lib: $FAKETIME_LIB"
export FAKETIME="@2050-01-01 00:00:00"
export LD_PRELOAD="$FAKETIME_LIB"
sed -i "s/Listen 80/Listen 80/" /etc/apache2/ports.conf 2>/dev/null || true
exec apache2 -D FOREGROUND