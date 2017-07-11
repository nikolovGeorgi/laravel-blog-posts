## Simple CRUD example using Laravel & AngularJS

This example manages blog posts

- Single page app for adding/editing/deleting posts

- Posts contain
    * title
    * body
    * author
    * timestamp

## To get started
    - Clone the Git Repo
    - Run 
        * $ npm i
    - Set up DataBase Connection
        * open .env.example for an example and coppy it to .env after edit is complete
    - Set up the Key
        * $ php artisan key:generate
    - Load the website
        * $ php artisan serve
        * load localhost:8000 in browser

    - In case of boostrap autoload error
        * $ composer update --no-scripts
        * run php artisan serve once again