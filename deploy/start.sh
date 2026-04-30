#!/bin/bash

# Railway usa $PORT dinamicamente
PORT="${PORT:-80}"

# Atualiza Apache para escutar na porta correta
sed -i "s/Listen 80/Listen $PORT/" /etc/apache2/ports.conf
sed -i "s/:80>/:$PORT>/" /etc/apache2/sites-enabled/000-default.conf

exec apache2-foreground
