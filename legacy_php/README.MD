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