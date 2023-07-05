



# Sử dụng hình ảnh base có sẵn chứa PHP và Apache
FROM php:8.0-apache


WORKDIR /usr/src/app

COPY package.json ./

RUN npm install

RUN npm run build

EXPOSE 1000

CMD npm run start
