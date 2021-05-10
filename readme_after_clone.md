What to do after cloning project

1 - Run "composer install" in the root folder.
2 - Rename .env.example to .env
3 - Run "php artisan key:generate"
4 - Run "php artisan serve" and check if there are no 500 errors returning from browser.
5 - Make sure the database exists in the local machine
6 - Run "php artisan migrate" to run all the migrations.