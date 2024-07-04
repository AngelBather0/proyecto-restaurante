# Turismo
composer install
cp .env.example .env
php artisan key:generate
php artisan storage:link
composer require laravel/jetstream
composer require stichoza/google-translate-php
