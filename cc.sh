#!/bin/bash
echo "Deleting Cache..."

php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

echo "Cache got renewed."
