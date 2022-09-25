HOW TO RUN SETUP
git clone <url>
cd into directory
composer update
rename .env.example to .env
edit database name in .env
php artisan migrate --seed
php artisan key:generate
php artisan serve
