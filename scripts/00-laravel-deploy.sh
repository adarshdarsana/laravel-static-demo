#!/usr/bin/env bash
echo "Running composer..."
composer install --no-dev --optimize-autoloader --working-dir=/var/www/html

echo "Caching config, routes, and views..."
php artisan config:cache
php artisan route:cache
php artisan view:cache
