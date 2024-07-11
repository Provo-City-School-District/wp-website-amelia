FROM wordpress:php8.3-apache

COPY ./custom.ini /usr/local/etc/php/conf.d/custom.ini

## Enable apache mods.
RUN a2enmod rewrite
RUN a2enmod headers

# Set ServerTokens directive to Prod
RUN echo "ServerTokens Prod" >> /etc/apache2/apache2.conf

# Set ServerName
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

## Harden File Permissions
RUN chown -R www-data:www-data /var/www/html/wp-content
RUN find /var/www/html/wp-content/ -type d -exec chmod 775 {} \;
RUN find /var/www/html/wp-content/ -type f -exec chmod 664 {} \;
RUN find /var/www/html/wp-content/ -type d -exec chmod g+s {} \;