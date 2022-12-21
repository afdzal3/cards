#!/bin/bash

php artisan migrate:fresh --seed
php artisan config:cache
php artisan route:cache
php artisan api:cache
php artisan view:cache