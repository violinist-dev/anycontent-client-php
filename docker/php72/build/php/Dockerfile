FROM php:7.2-cli

RUN apt-get update && \
    apt-get install -y --no-install-recommends git zip libfreetype6-dev libjpeg62-turbo-dev && \
    docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/

RUN curl --silent --show-error https://getcomposer.org/installer | php

RUN docker-php-ext-install gd

RUN docker-php-ext-install pdo_mysql

# Endless command to keep container running
CMD tail -f /dev/null