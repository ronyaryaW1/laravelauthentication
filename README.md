# Laravel API - Module-03 Authentication

Laravel API Project - JWT Auth implementation

## Tutorials

- [tymon/jwt-auth](https://medium.com/employbl/build-authentication-into-your-laravel-api-with-json-web-tokens-jwt-cd223ace8d1a) configuration

## Challenge
- Clone this repositories
- Install depedencies
```text
$ composer install
```
- Create .env file
```text
$ cp .env-example .env
```
- Genereate key (laravel and jwt)
```text
$ php artisan key:generate
$ php artisan jwt:secret
```
- Change default guard to api, and api guard driver to jwt in config/auth.php file
- Implement jwt auth to the router, add middleware `api.auth` to api.php file.
```php
<?php
...
$api->group(['middleware' => 'api.auth'], function ($api) {
    ...
}
...
```
- Move endpoint /me and /logout to the middleware
- Use the postman to check the API that has been modify
- Modify .env file, configure the database connection string
- Migrate database
- Follow the tutorial, create Controller, add registration method etc.
- Push project to this repositories
- Take a screenshot of your repositories link and post to the [KK4-B Google Classroom](https://classroom.google.com)
