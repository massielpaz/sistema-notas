FROM php:8.2.1-apache

RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable mysqli

RUN a2enmod rewrite

RUN apt-get update && apt-get upgrade -y

RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer

ENV PHP_TIMEZONE America/Managua    