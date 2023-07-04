# Sử dụng hình ảnh base có sẵn chứa PHP và Apache
FROM php:7.4-apache

# Cài đặt các gói phụ thuộc cần thiết
RUN apt-get update && \
    apt-get install -y \
        libpng-dev \
        libjpeg-dev \
        libfreetype6-dev \
        zip \
        unzip

# Cài đặt các extension PHP cần thiết
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

# Thiết lập thư mục làm việc của Apache
WORKDIR /var/www/html

# Sao chép các tệp Laravel vào container
COPY . .

# Cài đặt các gói Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Cài đặt các phụ thuộc của Laravel bằng Composer
RUN composer install

# Thiết lập quyền cho các thư mục và tệp của Laravel
RUN chown -R www-data:www-data /var/www/html/storage
RUN chown -R www-data:www-data /var/www/html/bootstrap/cache

# Mở cổng 80 của container
EXPOSE 80

# Lệnh khi container được khởi chạy
CMD ["apache2-foreground"]
