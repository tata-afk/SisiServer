FROM php:8.2-apache

WORKDIR /var/www/html

RUN apt-get update && \
    apt-get install -y libpng-dev libzip-dev libxml2-dev unzip && \
    docker-php-ext-install pdo pdo_mysql gd mysqli

RUN apt-get install -y libssl-dev && \
    pecl install redis && \
    docker-php-ext-enable redis pdo_mysql gd

EXPOSE 80

CMD ["apache2-foreground"]