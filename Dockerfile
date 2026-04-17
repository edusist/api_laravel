FROM php:8.4-apache

RUN docker-php-ext-install pdo pdo_mysql

# (opcional mas recomendado)
RUN a2enmod rewrite

# (opcional) define diretório do Laravel
WORKDIR /var/www/html/public

# 🔧 CORREÇÃO IMPORTANTE
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf