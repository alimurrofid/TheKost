## Installation
### Building yourself

1. Clone the repository 
```sh
git clone https://github.com/alimurrofid/TheKost.git
```

2. Install Composer
```sh
composer install
```

3. Copy .env.example to .env
```sh
copy .env.example .env
```

4. Generate Key
```sh
php artisan key:generate
```

5. Create the symbolic link
```sh
php artisan storage:link
```

6. Migration database
```sh
php artisan migrate
```

7. Seeding database
```sh
php artisan db:seed
```

8. Run project
```sh
php ser
```
