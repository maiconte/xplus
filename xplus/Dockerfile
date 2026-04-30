FROM php:7.4-apache

RUN apt-get update && apt-get install -y \
    curl libfaketime \
    && rm -rf /var/lib/apt/lists/*

RUN cd /tmp \
    && curl -fsSL -o ioncube.tar.gz \
       https://downloads.ioncube.com/loader_downloads/ioncube_loaders_lin_x86-64.tar.gz \
    && tar -xzf ioncube.tar.gz \
    && PHP_EXT_DIR=$(php -r "echo ini_get('extension_dir');") \
    && cp ioncube/ioncube_loader_lin_7.4.so "$PHP_EXT_DIR/" \
    && echo "zend_extension=$PHP_EXT_DIR/ioncube_loader_lin_7.4.so" \
       > /usr/local/etc/php/conf.d/00-ioncube.ini \
    && rm -rf /tmp/ioncube*

RUN echo "memory_limit = 256M" >> /usr/local/etc/php/php.ini

# Esvazia os arquivos de MPM indesejados na imagem (não apenas remove symlinks)
RUN echo "" > /etc/apache2/mods-available/mpm_event.load \
    && echo "" > /etc/apache2/mods-available/mpm_event.conf \
    && echo "" > /etc/apache2/mods-available/mpm_worker.load \
    && echo "" > /etc/apache2/mods-available/mpm_worker.conf \
    && rm -f /etc/apache2/mods-enabled/mpm_event.conf \
             /etc/apache2/mods-enabled/mpm_event.load \
             /etc/apache2/mods-enabled/mpm_worker.conf \
             /etc/apache2/mods-enabled/mpm_worker.load \
             /etc/apache2/mods-enabled/mpm_prefork.conf \
             /etc/apache2/mods-enabled/mpm_prefork.load \
    && ln -sf /etc/apache2/mods-available/mpm_prefork.conf \
              /etc/apache2/mods-enabled/mpm_prefork.conf \
    && ln -sf /etc/apache2/mods-available/mpm_prefork.load \
              /etc/apache2/mods-enabled/mpm_prefork.load \
    && a2enmod rewrite headers \
    && sed -i 's/AllowOverride None/AllowOverride All/g' \
       /etc/apache2/apache2.conf

COPY landing/ /var/www/html/
COPY painelactive/ /var/www/html/painelactive/

RUN chown -R www-data:www-data /var/www/html/ \
    && chmod -R 777 /var/www/html/painelactive/api/data/ 2>/dev/null || true

EXPOSE 80
CMD ["apache2-foreground"]
