## Installation

1. Install PHP dependencies 
    ```
    composer install
    ```

1. Run migration
    ```
    php artisan migrate
    ```

1. Create user
    ```
    php artisan user:create
    ```

1. Start Docker
    ```
    docker-compose up -d --build
    ```

## Urls

Generate ID
    ```
    /api/generate
    ```

Retrieve ID
    ```
    /api/retrieve/{id}
    ```

## Commands

Manually create a new User
    ```
    php artisan user:create
    ```

Manually generate a new id for Ids table
    ```
    php artisan ids:generate
    ```

Manually show id from Ids table
    ```
    php artisan ids:retrieve {id}
    ```

Generate txt report for Ids table and save it to report folder
    ```
    php artisan report:generate
    ```

Send txt report
    ```
    php artisan report:send
    ```