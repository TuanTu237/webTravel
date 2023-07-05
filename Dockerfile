
# Sử dụng PHP image chứa Apache, bạn có thể thay đổi phiên bản PHP tùy chọn tại đây
FROM php:7.4-apache

# Cài đặt các gói cần thiết và mở extension cho Laravel
RUN apt-get update \
    && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev zip unzip git \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

# Copy toàn bộ mã nguồn Laravel vào thư mục /var/www/html
COPY . /var/www/html

# Đặt thư mục làm việc cho Apache
WORKDIR /var/www/html

# Copy file .env mặc định, bạn có thể sửa đổi file .env này khi chạy container nếu cần thiết
COPY .env.example .env

# Cài đặt composer để quản lý các phụ thuộc PHP
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Chạy composer install để cài đặt các phụ thuộc Laravel
RUN composer install

# Tạo key mới cho ứng dụng Laravel
RUN php artisan key:generate

# Mở cổng 80 để Apache lắng nghe
EXPOSE 80

# Bắt đầu Apache server khi chạy container
CMD ["apache2-foreground"]
