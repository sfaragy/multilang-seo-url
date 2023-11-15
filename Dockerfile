FROM php:8.0-apache
RUN a2enmod rewrite
COPY httpd.conf /usr/local/apache2/conf/