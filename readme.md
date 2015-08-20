## Doctrine Workshop for Laracon

To get started, you need PHP 5.5 or higher and a database of choice (I used MySQL). Run through the following steps:

- Copy `.env.example` to `.env` and configure it for your database.
- `composer install`
- Run `./artisan migrations:migrate` (That's not a typo of the Laravel migrations, we're using Doctrine migrations).
- Run `./artisan key:generate` to setup
- `./artisan serve`
- Navigate to [localhost:8000](http://localhost:8000/) and you should see a success message
