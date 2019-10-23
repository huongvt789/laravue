> Environment

Nginx: 1.12
PHP: 7.1
Mysql: 5.7

> Setup Environment development using Laradock

Laradock

Create folder vue: mkdir vue

Cd to vue: cd vue

Clone: project: git clone https://github.com/huongvt789/laravue.git vue-src

Clone laradock: git clone https://github.com/Laradock/laradock.git

cd laradock

Run "cp env-example .env"

Config file .env of laradock

    APP_CODE_PATH_HOST=../vue-src/

    DATA_PATH_HOST=../data

    PHP_VERSION=7.1

    WORKSPACE_SSH_PORT=2222 (Change port if it used)

    ##=====Config nginx=====##
    NGINX_HOST_HTTP_PORT=8088 (Change port if it used)

    NGINX_HOST_HTTPS_PORT=443 (Change port if it used)


    ##=====Config mysql=====##
    MYSQL_VERSION=5.7

    MYSQL_DATABASE=vue

    MYSQL_USER=root

    MYSQL_PASSWORD=root

    MYSQL_PORT=3306 (Change port if it used)

    MYSQL_ROOT_PASSWORD=root
Run "docker-compose build nginx mysql workspace php-fpm"

Run "docker-compose up -d nginx mysql"

cd /your-project-folder-path

Run "cp .env.example .env" 

Config file .env of laravel

    DB_CONNECTION=mysql
    DB_HOST=192.168.1.xxx(your IP address)
    DB_PORT=3306 (DB_PORT value must be the same with MYSQL_PORT value in file .env of laradock) 
    DB_DATABASE=revest (DB_DATABASE value must be the same with MYSQL_DATABASE value in file .env of laradock) 
    DB_USERNAME=root (DB_USERNAME value must be the same with MYSQL_USER value in file .env of laradock)
    DB_PASSWORD=root (DB_PASSWORD value must be the same with MYSQL_PASSWORD value in file .env of laradock)
Run chmod -Rf 777 .

Ignore git permission: git config core.fileMode false

Run "docker ps" (list docker container)

Run "docker exec -it container_id bash" (container id of workspace. Please run docker ps to see container id)

Run following command:

    "composer install"
    "composer dumpautoload" 
    "php artisan migrate --seed"
> Test vue is running.

cd laradock
docker-compose exec workspace bash
npm run watch
-> Go to brower and reload your page -> Get result.
