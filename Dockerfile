# Tệp Dockerfile cho Laravel với Apache
FROM php:7.4-apache

WORKDIR /var/www/html

# Cài đặt các phụ thuộc
RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip

# Cài đặt PHP extensions
RUN docker-php-ext-install pdo pdo_mysql

# Cài đặt Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy mã nguồn của ứng dụng vào container
COPY . .

# Cài đặt các gói Composer
RUN composer install

# Cài đặt Laravel Key
RUN php artisan key:generate

# Chạy Apache trong foreground mode khi container khởi động
CMD ["apache2-foreground"]
