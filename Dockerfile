FROM php:8.4-apache

RUN docker-php-ext-install pdo pdo_mysql

# (opcional mas recomendado)
RUN a2enmod rewrite

# (opcional) define diretório do Laravel
WORKDIR /var/www/html