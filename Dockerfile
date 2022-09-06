FROM php:8.1-apache
WORKDIR /var/www/html

EXPOSE 80
RUN docker-php-ext-install mysqli