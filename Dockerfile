# Sử dụng hình ảnh base có sẵn chứa PHP và Apache
FROM php:8.0-apache


WORKDIR /app

COPY . /app

RUN npm install

RUN npm run build

EXPOSE 80

CMD npm run start
