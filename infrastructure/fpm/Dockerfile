ARG ALPINE_VERSION="3.8"
ARG COMPOSER_VERSION="1.8.5"

FROM composer:${COMPOSER_VERSION} AS composer

FROM alpine:${ALPINE_VERSION}
ARG ALPINE_VERSION
ARG PHP_VERSION="7.2"

# Install system dependencies
RUN true \
 && apk add --no-cache \
        ca-certificates \
        tini \
;

# Install PHP
ADD https://dl.bintray.com/php-alpine/key/php-alpine.rsa.pub /etc/apk/keys/php-alpine.rsa.pub
RUN true \
 && echo "@php https://dl.bintray.com/php-alpine/v${ALPINE_VERSION}/php-${PHP_VERSION}" >> /etc/apk/repositories \
 && apk add --no-cache \
        php7-cli@php \
        php7-curl@php \
        php7-json@php \
        php7-mbstring@php \
        php7-opcache@php \
        php7-openssl@php \
        php7-phar@php \
        php7-zip@php \
        php7-fpm@php \
        php7-dom@php \
;

# Install Composer
COPY --from=composer /usr/bin/composer /usr/bin/composer
RUN true \
 && composer global require --quiet \
        hirak/prestissimo \
 && composer clear-cache --quiet \
;

RUN mkdir -p /run/php

EXPOSE 9000
ENTRYPOINT /usr/sbin/php-fpm7 --nodaemonize
