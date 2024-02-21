# Laravel 10 Docker Starter Template
Laravel 10 Starter template using PHP 8.1, nginx, redis, and mysql:8.0.26, MailHog

## Features
* [Docker](https://www.docker.com/)
* [Dockerfile and docker compose V3 with Alpine](https://hub.docker.com/_/alpine)
* [Nginx](https://www.nginx.com)
* [Laravel 10](https://laravel.com/)
* [Mysql 8.0.26](https://www.mysql.com//)
* [PHP 8.1](https://www.php.net/)
* [Pint](https://laravel.com/docs/10.x/pint)
* [Tailwind](https://tailwindcss.com/)
* [Phpmyadmin](https://www.phpmyadmin.net/)
* [MailHog](https://github.com/mailhog/MailHog)

## Getting Started
### Prerequisites
- Using UNIX-based system.
- Download and Install [Docker](https://docs.docker.com/engine/install/).

### Installation
#### 1. Clone this project

#### 2. Create `.env` file from `.env.example` in root directory and update it.
The given configuration will be used by Docker to build the containers.  

#### 3. Run command `docker compose build` on your terminal
This command will build Docker Compose containers.

#### 4. Run command `docker compose up -d ` on your terminal
This command will run Docker Compose containers.

#### 5. Run command `docker exec -it {phpcontainerid} bash` on your terminal. with 
This command will open PHP container terminal.
You can see the list of containers with "docker ps"

#### 6. Generate App Key `php artisan key:generate`
This will update the app key in .env

#### 7. Install PHP dependancies `composer install`
This will install PHP dependancies

#### 8. Run command `docker exec -it {nodejscontainerid} bash` on your terminal. with 
This command will open NodeJS container terminal.

#### 9. Install NPM dependancies `npm install`
This will install NPM dependancies

#### 10. Run vite Dev server `npm run dev`
This will start vite Dev server

#### Go to [http://localhost/](http://localhost/)
This action will open Laravel application in a web browser.  
