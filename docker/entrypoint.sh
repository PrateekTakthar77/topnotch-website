#!/bin/bash

# Wait until MySQL is ready
until nc -z mysql 3306; do
  echo "Waiting for MySQL..."
  sleep 2
done

# Run migrations (and create session table if needed)
php artisan migrate --force

# Start PHP-FPM
exec php-fpm
