# Tệp Dockerfile cho Laravel
FROM php:7.4-fpm

WORKDIR /var/www/html

# Cài đặt các phụ thuộc
RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip

# Cài đặt PHP extensions
RUN docker-php-ext-install pdo pdo_mysql

# Copy mã nguồn của ứng dụng vào container
COPY . .

# Cài đặt Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Cài đặt các gói Composer
RUN composer install

# Cài đặt Laravel Key
RUN php artisan key:generate

# Chạy Laravel trên cổng 9000
EXPOSE 9000
CMD ["php-fpm", "-F"]
