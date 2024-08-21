# QucikFixBackend

QuickFix Backend

Install Dependencies

run composer install

This command will read the composer.json file and install all the dependencies required for the project.

Update Composer Dependencies:

If composer install fails due to missing extensions or other issues, try:

run composer update

This command updates your dependencies to their latest compatible versions and may resolve any dependency conflicts.

Generate an Application Key

php artisan key:generate

This command will generate a unique application key and update the APP_KEY value in your .env file.

Migrate the Database

php artisan migrate

This will create the necessary tables in your database.

Start the Development Server

php artisan serve

Open your web browser and go to http://localhost:8000 to see your Laravel application running.

# installations

composer require fruitcake/laravel-cors

# config

php artisan vendor:publish --tag="cors"

added init.php file to config
because of the install/init/check controller
