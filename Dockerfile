FROM php:7.2-apache

# Enable mod_rewrite
RUN a2enmod rewrite
