# Descipcion del proyecto:

Creacion de un sistema de registro de notas, usando las tecnologias de:
* Laravel9 (PHP)
* MariaDB
* Boostrap
* jQuery

# Instalar composer (Administrador de librerias PHP)

> php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
> php composer-setup.php
> php -r "unlink('composer-setup.php');"

# Instalar Laravel
> Instalar la extension ZIP: apt-get install -y libzip-dev zip && docker-php-ext-install zip
> composer create-project laravel/laravel example-app
> a2enmod rewrite
 
# Instalar Boostrap (Estilo basico de la pagina): 

> npm install bootstrap@5.2.3

# Instalar jQuery (Libreria Javascript para controlar la pagina del lado del cliente)

> npm install jquery


# Instalar XDebug dentro del container de PHP

> pecl install xdebug
> docker-php-ext-enable xdebug

# Generar una migracion (Crear una tabla)

> php artisan make:migration nombre_de_la_tabla

_Nota: Cuando una migracion falla, es posible borrarla desde HeidiSQL y volver a crear la migracion_ 

# Migrar la tabla (Crearla en la base de datos)
> php artisan migrate


# Pasos para instalar usando Docker

- Crear dos carpetas dentro de la carpeta C:/ llamada containers
- Dentro de la carpeta C:/containers crear dos carpetas. Una llamada php_apache y la otra mariadb_notas
- Clonar el repositorio en C:/containers/php_apache
- Iniciar una terminañ e ingresar a la carpeta C:/containers/php_apache/docker
- Dentro de esta carpeta ejecutar el comando docker compose up -d
- Una vez creados los contenedores. Ejecutar el comando docker exec -it php-apache-notas /bin/bash
- Instalar el proyecto usando el comando composer install
- Crear el archivo .env usando de base el .env.example
- Cambiar los parametros: 


```
APP_NAME=SistamaNotas
APP_ENV=local
APP_KEY=base64:uz1fR+wnMHeKgrt89OQB7sAmIbExznkstr6ag2fYgCY=
APP_DEBUG=true
APP_URL=http://localhost:6996/public

DB_CONNECTION=mysql
DB_HOST=maria-db-notas
DB_PORT=3306
DB_DATABASE=laravel_notas
DB_USERNAME=root
DB_PASSWORD=secret

```

- Instalar las migraciones usando el comando php artisan migrate

Para ngresar al sitio usar la siguiente url http://localhost:6996/public

_En caso de que no se inicie el contenedor verificar que el XAMP u otro servicio de base de datos, apache este apagado al momento de iniciar el proyecto_