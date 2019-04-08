FROM ubuntu:latest

ENV DEBIAN_FRONTEND noninteractive

RUN \
    apt-get update && \
    apt-get install -y software-properties-common && \
    LC_ALL=C.UTF-8 add-apt-repository -y -u ppa:ondrej/php && \
    apt-get update && \
    apt-get install -y curl php7.2-cli php7.2-fpm php7.2-common php7.2-curl php7.2-gd php7.2-mysql php7.2-sqlite3 php7.2-soap php7.2-xml php7.2-zip php7.2-gettext php7.2-mbstring php7.2-intl php7.2-imap imagemagick php-imagick php-xdebug graphicsmagick git && \
    apt-get autoremove -y

RUN rm /etc/php/7.2/cli/conf.d/20-xdebug.ini
COPY xdebug.ini /etc/php/7.2/mods-available/xdebug.ini

RUN ln -s /etc/php/7.2/mods-available/xdebug.ini /etc/php/7.2/cli/conf.d/20-xdebug.ini

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN mkdir -p /run/php

EXPOSE 9000
ENTRYPOINT /usr/sbin/php-fpm7.2 --nodaemonize
