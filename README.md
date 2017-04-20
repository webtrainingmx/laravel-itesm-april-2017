# Laravel Blog

A repository with an example of an app to review modern principles for building server-side applications.

## Development setup

1) Clone the repository:

```
https://github.com/webtrainingmx/laravel-itesm-april-2017.git
```

2) Install **Composer** dependencies. 
If you don't have composer, please [follow these instructions](https://getcomposer.org/download/) according to your operating system.
```
composer install
```

3) Copy the file `env.example`:
```
cd /path/to/your/laravel/project/
cp .env.example .env
```

3.1) Generate an application key:
```
php artisan key:generate
```

3.2) Configure a MySQL database, user and password. So, open the file `.env` you just copied and look for:
```
# Open the file with any text editor
nano .env

# Change your database configuration
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret
```

4) Start your development server using **Artisan** command:
```
cd /path/to/your/laravel/project/

php artisan serve
```

5) Open this address: `http://127.0.0.1:8000/` in your browser to see the Laravel App.

## Useful Laravel Commands

Create scaffolding for auth
```
php artisan make:auth
php artisan migrate
```

Run a development server:
```
php artisan serve
```

Create a migration
```
php artisan make:migration create_posts_table --create=posts
```