### php configuration
1. >=5.4
2. short_open_tag = On

### mysql 
CREATE DATABASE mobly;

### configure app - change db credentials
cp .env.example .env

### dependencies
1. compass
2. bower
3. composer
4. ant

### install automatic...
./install.sh

### Or manually...

### populate db
php artisan migrate:refresh

php artisan db:seed

### install composer dependencies
ant composer

### install bower dependencies
cd public/

bower install

### compile css
ant compile

### run tests
ant phpunit

### check coding synthax
ant phpcs

### start app with php webserver embed
php -S localhost:7777 public/
