# My-Freestyle-tricks-laravel
1) Para correr la aplicación se debe tener instalado laravel 5.8(probado) y php 7.3(probado).
2) Se debe ejecutar el comando composer install dentro del directorio principal.
3) Renombrar el archivo "test.env.test" a ".env." .
3) Se debe crear una base de datos llamada mvf (acorde a lo indicado en el archivo .env) usando mysqlworkbench u otra herramienta similar. Dentro de esta base de datos se debe ejecutar el script tricks.sql
4) Verificado que se haya creado la tabla dentro de la base de datos debido a la ejecución del archivo .sql, se debe ejecutar dentro del directorio principal el comando php artisan serve.
5) Se debe ir a la url: http://127.0.0.1:8000/index para comprobar que la aplicación funciona correctamente.
6) En caso de no cargar la url http://127.0.0.1:8000/index , se debe ejecutar el comando: php -S localhost:8000 -t public/ .Después de esto debería poder accederse a la url antes descrita.


