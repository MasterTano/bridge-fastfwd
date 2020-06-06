FROM php:7.4-fpm-alpine

# Install php extensions
RUN docker-php-ext-install \
    pdo \
    pdo_mysql

WORKDIR /var/www/html
