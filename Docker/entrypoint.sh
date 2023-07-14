#!/bin/bash

if [ ! -f "vendor/autoload.php" ]; then
    composer install
else
    echo "composer not runned!"
fi

if [ ! -f ".env" ]; then
    echo "creando env file de env $APP_ENV"
    cp .env.example .env
else
    echo "env file existe!!"
fi

php artisan migrate:fresh --seed
php artisan key:generate

npm run build
php artisan serve --port=$PORT --host=0.0.0.0 --env=.env

exec docker-php-entrypoint "$@"