#!/usr/bin/env bash

# /*
#    * This bash  run  setup and production env laravel application
# */


command php artisan clear-compiled
command php artisan cache:clear
command php artisan config:cache
command php artisan optimize
command php artisan config:clear
command php artisan migrate
command php artisan db:seed


