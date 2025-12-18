FROM php:8.2-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git curl zip unzip libzip-dev \
    libpng-dev libjpeg-dev libfreetype6-dev \
    libonig-dev libxml2-dev \
    netcat-openbsd \
    && docker-php-ext-install pdo pdo_mysql mbstring zip exif pcntl bcmath gd

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy project files
COPY . .

# Set permissions during build
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache /var/www/public/uploads \
    && chmod -R 775 /var/www/storage /var/www/bootstrap/cache /var/www/public/uploads

# Expose port 9000 (php-fpm)
EXPOSE 9000

# Copy entrypoint script
COPY docker/entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

# Set entrypoint
ENTRYPOINT ["entrypoint.sh"]

# Set default command to start php-fpm
CMD ["php-fpm"]