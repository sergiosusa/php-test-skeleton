FROM nginx:1.16.0-alpine

RUN adduser -u 1000 -D -S -G www-data www-data

COPY configuration/nginx.conf /etc/nginx/nginx.conf
COPY configuration/default.conf /etc/nginx/conf.d/default.conf

