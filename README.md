# CRUD operations on users / departments

## How to install and run the web application

-   clone the repo
    -   `git clone https://github.com/ibra4/users-crud.git`
-   run `composer install`
-   configure `.env` file, if it's not created, copy it from .`env.example`
    -   set database connection params
-   Run migrations and seeds
    -   `php artisan migrate:fresh --seed`
    -   now there's a dummy data created by seeders (for testing)
-   Run the application
    -   `php artisan serve`
    -   the application should be run on [http:127.0.0.1:8000](http:127.0.0.1:8000)
-   Login as Admin:
    -   email: admin@crud.com
    -   password: 12345678
-   Login as normal user:
    -   email: user@crud.com
    -   password: 12345678
