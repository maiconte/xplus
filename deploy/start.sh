#!/bin/bash

echo "=== MPM files found ==="
ls /etc/apache2/mods-enabled/mpm* 2>/dev/null || echo "nenhum encontrado"

echo "=== Removendo todos MPMs ==="
rm -f /etc/apache2/mods-enabled/mpm_*

echo "=== Criando apenas prefork ==="
ln -sf /etc/apache2/mods-available/mpm_prefork.conf /etc/apache2/mods-enabled/mpm_prefork.conf
ln -sf /etc/apache2/mods-available/mpm_prefork.load /etc/apache2/mods-enabled/mpm_prefork.load

echo "=== MPM após fix ==="
ls /etc/apache2/mods-enabled/mpm* 2>/dev/null

echo "=== Testando config Apache ==="
apache2ctl -t 2>&1 || true

echo "=== Subindo Apache ==="
exec apache2-foreground
