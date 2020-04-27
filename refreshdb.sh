#!/bin/bash

php artisan cache:clear && php artisan config:clear && php artisan migrate:fresh && php artisan passport:install --force && php artisan db:seed --class=PermissionSeeder && php artisan serve --host=127.0.0.1
