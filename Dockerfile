FROM php:7.4-apache

# ─── Dependências do sistema ───────────────────────────────────────
RUN apt-get update && apt-get install -y --no-install-recommends \
    curl unzip wget libsqlite3-dev \
    && docker-php-ext-install pdo pdo_sqlite \
    && rm -rf /var/lib/apt/lists/*

# ─── ionCube Loader (necessário para os arquivos PHP do painel) ────
RUN cd /tmp \
    && curl -fsSL -o ioncube.tar.gz \
       https://downloads.ioncube.com/loader_downloads/ioncube_loaders_lin_x86-64.tar.gz \
    && tar -xzf ioncube.tar.gz \
    && PHP_EXT_DIR=$(php -r "echo ini_get('extension_dir');") \
    && cp ioncube/ioncube_loader_lin_7.4.so "$PHP_EXT_DIR/" \
    && echo "zend_extension=$PHP_EXT_DIR/ioncube_loader_lin_7.4.so" \
       > /usr/local/etc/php/conf.d/00-ioncube.ini \
    && rm -rf /tmp/ioncube* \
    && php -v

# ─── Configurações PHP ─────────────────────────────────────────────
RUN { \
    echo "memory_limit = 256M"; \
    echo "upload_max_filesize = 64M"; \
    echo "post_max_size = 64M"; \
    echo "max_execution_time = 300"; \
    echo "expose_php = Off"; \
    echo "display_errors = Off"; \
    echo "log_errors = On"; \
    echo "error_log = /var/log/apache2/php_errors.log"; \
} >> /usr/local/etc/php/php.ini

# ─── Apache: ativa mod_rewrite e headers ──────────────────────────
RUN a2enmod rewrite headers \
    && sed -i 's/AllowOverride None/AllowOverride All/g' \
       /etc/apache2/apache2.conf

# ─── Copia os arquivos do projeto ─────────────────────────────────
COPY landing/     /var/www/html/
COPY painelactive/ /var/www/html/painelactive/

# ─── Permissões ───────────────────────────────────────────────────
RUN chown -R www-data:www-data /var/www/html/ \
    && find /var/www/html -type d -exec chmod 755 {} \; \
    && find /var/www/html -type f -exec chmod 644 {} \;

# ─── Pasta de dados com permissão de escrita ──────────────────────
RUN mkdir -p /var/www/html/painelactive/api/data \
    && chmod -R 777 /var/www/html/painelactive/api/data

# ─── Entrypoint ───────────────────────────────────────────────────
COPY docker-entrypoint.sh /usr/local/bin/docker-entrypoint.sh
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

EXPOSE 80

HEALTHCHECK --interval=30s --timeout=10s --start-period=20s --retries=3 \
    CMD curl -f http://localhost/ || exit 1

ENTRYPOINT ["/usr/local/bin/docker-entrypoint.sh"]
