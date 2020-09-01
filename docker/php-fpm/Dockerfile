FROM php:7.4-fpm

RUN apt update
RUN apt install -y \
        git \
        libzip-dev \
        libicu-dev \
        libpq-dev

RUN docker-php-ext-install zip \
    pdo \
    pdo_pgsql \
    pgsql

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/app
