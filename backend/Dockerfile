FROM php:7.3-cli
RUN pecl install grpc protobuf && docker-php-ext-enable grpc
COPY . /app
WORKDIR /app
CMD ["php", "src/server.php"]
