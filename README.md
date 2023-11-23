# lab-authorization
# Lab authorisation basic

## Travail à faire

- Améliorer l'athourisation de [`lab-authorization-basic`](https://github.com/Jalil-Betroji/lab-authorization-basic.git), en ajoutant un rôle et des permissions à chaque utilisateur

## Packages

- spatie/laravel-permission

## Commands

1. Install the Spatie package:

    ```bash
    composer require spatie/laravel-permission
    ```

2. Publish the configuration file and generate permission tables:

    ```bash
    php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"
    ```

3. Run migrations to update the database schema:

    ```bash
    php artisan migrate
    ```

4. Seed the database with initial data:

    ```bash
    php artisan db:seed
    ```