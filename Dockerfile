FROM php:7.4-fpm

# 安装MySQLi扩展
RUN docker-php-ext-install mysqli
