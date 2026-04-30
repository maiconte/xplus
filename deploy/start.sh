#!/bin/bash
FAKETIME_LIB=$(find /usr/lib -name "libfaketime.so.1" 2>/dev/null | head -1)
echo "⚡ Xplus — faketime: $FAKETIME_LIB"
export FAKETIME="@2050-01-01 00:00:00"
export LD_PRELOAD="$FAKETIME_LIB"
exec apache2-foreground