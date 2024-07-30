FROM wordpress:php8.3-apache

COPY ./custom.ini /usr/local/etc/php/conf.d/custom.ini

## Config Apache
# Enable apache mods.
# RUN a2enmod rewrite
# RUN a2enmod headers

# config changes
RUN echo "ServerTokens Prod" >> /etc/apache2/apache2.conf
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

## Harden File Permissions
RUN chown -R www-data:www-data /var/www/html/
RUN find /var/www/html/ -type d -exec chmod 775 {} \;
RUN find /var/www/html/ -type f -exec chmod 664 {} \;
RUN find /var/www/html/ -type d -exec chmod g+s {} \;