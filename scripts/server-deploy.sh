#!/bin/bash

git fetch --all
git checkout origin/develop
composer install
# php artisan migrate
yarn
yarn run prod
