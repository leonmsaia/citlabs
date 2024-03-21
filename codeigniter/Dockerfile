FROM php:7.4-apache
RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN a2enmod rewrite
COPY ./codeigniter/ /var/www/html/
RUN chown -R www-data:www-data /var/www/html/
EXPOSE ${CODEIGNITER_PORT}
RUN service apache2 restart
CMD ["apache2-foreground"]