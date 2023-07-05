# Sử dụng hình ảnh base có sẵn chứa PHP và Apache
FROM php:8.0-apache

# Install Node.js và npm
RUN apt-get update && apt-get install -y \
    curl \
    && curl -sL https://deb.nodesource.com/setup_14.x | bash - \
    && apt-get install -y nodejs

WORKDIR /app

COPY . /app

RUN npm install

RUN npm run build

EXPOSE 80

CMD npm run start
