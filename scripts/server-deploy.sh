#!/bin/bash

git reset --hard
git pull origin/develop
composer install
php artisan migrate
yarn
yarn run prod
