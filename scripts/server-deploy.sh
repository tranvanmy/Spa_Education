#!/bin/bash

git reset --hard
git pull origin develop
composer install
php artisan migrate
php artisan config:cache
php artisan view:cache
yarn
yarn run prod
