#!/bin/bash
# Start Laravel Server
php -d variables_order=GPCS artisan serve

# Keep the terminal open
read -p "Press any key to continue . . ."
