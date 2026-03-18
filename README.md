## System for internal announcements in a company	
Full Stack Laravel application for creating and distributing internal announcements to employees. Supports categories, targeted users, timed announcements, and a notification system.

### 221258 Александар Јанев
### 221277 Љупчо Јованов
<br>
<br>

<strong>How to start the project:</strong>


composer install <br>
copy .env.example .env <br>
php artisan key:generate <br>
php artisan migrate <br>
php artisan db:seed <br>
php artisan serve <br>
<br><br>
<strong>Login info</strong>

email: admin@company.com <br>
password: password
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


## Docker setup

This project now includes:
- `Dockerfile` for Laravel + Apache + Vite build
- `docker-compose.yml` for the app and MySQL 8.0
- `.env.docker.example` with Docker-ready app/database settings

### First time start with Docker

1. Build and start the containers.
2. Run the migrations and seed the database.
3. Open the app at `http://localhost:8000`.

```powershell
docker compose up -d --build
docker compose exec app php artisan migrate --seed
```

### Useful Docker commands

```powershell
docker compose down
docker compose down -v
docker compose exec app php artisan test
```

### Docker database connection

The Laravel app connects to the MySQL container with these values:
- Host: `mysql`
- Port: `3306`
- Database: `laravel_db`
- Username: `laravel_user`
- Password: `password`

If you want different values, edit `.env.docker.example` and `docker-compose.yml` together before running the containers.

