FROM php:7.4-apache


RUN docker-php-ext-install mysqli pdo pdo_mysql


COPY ./app /var/www/html


CMD ["apache2-foreground"]

