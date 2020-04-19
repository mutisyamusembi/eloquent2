FROM php:7.3-apache

RUN apt-get update && apt-get upgrade -y && \
    apt-get install -y --no-install-recommends git zip

RUN curl --silent --show-error https://getcomposer.org/installer | php

RUN docker-php-ext-install mysqli pdo pdo_mysql

COPY ./composer.json /app

EXPOSE 80