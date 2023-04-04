# Use the official PHP image with Nginx
FROM php:8.2-fpm

# Install necessary PHP extensions and tools
RUN pecl install mongodb \
    && docker-php-ext-enable mongodb

# Copy project files to the container
COPY . /var/www/html/

# Set the working directory
WORKDIR /var/www/html