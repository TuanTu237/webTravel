# Sử dụng một hình ảnh cơ sở với Node.js 14.x
FROM node:14

# Đặt thư mục làm thư mục làm việc trong container
WORKDIR /usr/src/app

# Sao chép tập tin package.json và package-lock.json (hoặc yarn.lock) vào thư mục làm việc
COPY package*.json ./

# Cài đặt các gói phụ thuộc từ package.json
RUN npm install

# Sao chép mã nguồn ứng dụng vào thư mục làm việc
COPY . .

# Mở cổng 3000 của container để có thể truy cập ứng dụng web
EXPOSE 3000

# Khởi chạy ứng dụng khi container được chạy
CMD ["npm", "start"]
