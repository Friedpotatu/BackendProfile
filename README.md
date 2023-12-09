## Instrucciones paso a paso para levantar el backend

Paso 1: Descargar e instalar un gestor de base de datos.

Recomiendo [XAMP](https://www.apachefriends.org/es/index.html).

Iniciar los servicios de Apache y MySQL.

Paso 2: Clonar o descargar este repositorio en su computador.

Paso 3: copiar el .env.example y renombrarlo .env

Luego modificar el DB_DATABASE= por el nombre que le quiera dar a su base de datos.

Si ya ha trabajado con otra base de datos recuerde modificar el puerto, username y/o contraseña.

Paso 4: Instalar dependencias en la raíz del proyecto y commandos para levantar el backend

Se requiere que su pc tenga instalado [Composer](https://getcomposer.org/), [Node y NPM]((https://nodejs.org/en))

Luego ejecutar con una terminal en la raíz del proyecto los siguientes comandos: 

- composer install
- php artisan key:generate
- php artisan migrate
- php artisan db:seed --class=UsersTableSeeder
- php artisan serve --host=0.0.0.0

Ya con esto el backend debería estar funcionando correctamente.
