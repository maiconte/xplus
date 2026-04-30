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

RUN echo "memory_limit = 256M" >> /usr/local/etc/php/php.ini \
    && echo "upload_max_filesize = 64M" >> /usr/local/etc/php/php.ini \
    && echo "post_max_size = 64M" >> /usr/local/etc/php/php.ini

RUN a2dismod mpm_event mpm_worker 2>/dev/null || true \
    && a2enmod mpm_prefork rewrite headers \
    && sed -i 's/AllowOverride None/AllowOverride All/g' \
       /etc/apache2/apache2.conf

COPY landing/ /var/www/html/
COPY painelactive/ /var/www/html/painelactive/

RUN chown -R www-data:www-data /var/www/html/ \
    && chmod -R 777 /var/www/html/painelactive/api/data/ 2>/dev/null || true

COPY deploy/start.sh /start.sh
RUN chmod +x /start.sh

EXPOSE 80
ENV PORT=80
CMD ["/start.sh"]