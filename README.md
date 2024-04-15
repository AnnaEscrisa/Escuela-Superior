
## Sobre el proyecto

Proyecto creado para el curso Open Source Back-End Web Developer (2022). 

"Escuela Superior" es una aplicación web para una escuela ficticia que permite:
- navegación entre diversas páginas
- registro de nuevos usuarios
- inicio/cierre de sesión
- publicación de comentarios en la sección ¨noticias¨


## Tecnologías y lenguajes

Back-End
- Laravel
- PHP
- MySQL

Front-End
- HTML
- CSS
- JavaScript
- Bootstrap


## Funcionamiento

Es necesario introducir los datos de nuestra base de datos de MySQL (local o en la nube) en el archivo .env antes de inicializar la aplicación. Posteriormente, eliminar las marcas de comentario (/*) en "seeders", para que los datos existentes sean utilizados al sembrar la base de datos. Por último, ejecutar el comando "php artisan migrate --seed" para migrar las tablas existentes en la carpeta "migrations" con sus seeds correspondientes.



## Licencias y Copyright

#Laravel
The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
#Template
Template creado por Aigars Silkalns, en Colorlib. Adaptado para este proyecto.
