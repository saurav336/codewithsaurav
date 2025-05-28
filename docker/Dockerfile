FROM php:8.4-fpm

<<<<<<< HEAD

=======
>>>>>>> acb3841 (PHP Functions)
RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
<<<<<<< HEAD
    unzip 

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer


WORKDIR /var/www
=======
    vim \
    unzip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN docker-php-ext-install pdo pdo_mysql

WORKDIR /var/www
>>>>>>> acb3841 (PHP Functions)
