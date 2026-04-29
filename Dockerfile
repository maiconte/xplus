FROM php:7.4-apache

# ─── libfaketime para contornar expiração do ionCube ──────────────
RUN apt-get update && apt-get install -y \
    curl libfaketime \
    && rm -rf /var/lib/apt/lists/*

# ─── ionCube Loader 7.4 ───────────────────────────────────────────
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

# ─── PHP configs ──────────────────────────────────────────────────
RUN echo "memory_limit = 256M" >> /usr/local/etc/php/php.ini \
    && echo "upload_max_filesize = 64M" >> /usr/local/etc/php/php.ini \
    && echo "post_max_size = 64M" >> /usr/local/etc/php/php.ini

# ─── Apache mod_rewrite ───────────────────────────────────────────
RUN a2enmod rewrite \
    && sed -i 's/AllowOverride None/AllowOverride All/g' \
       /etc/apache2/apache2.conf

# ─── Copia arquivos ───────────────────────────────────────────────
COPY landing/ /var/www/html/
COPY painelactive/ /var/www/html/painelactive/

RUN chown -R www-data:www-data /var/www/html/ \
    && chmod -R 777 /var/www/html/painelactive/api/data/ 2>/dev/null || true

# ─── Script de start com data falsa via libfaketime ───────────────
COPY deploy/start.sh /start.sh
RUN chmod +x /start.sh

EXPOSE 80
CMD ["/start.sh"]
