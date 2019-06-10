# My-Freestyle-tricks-laravel
1) Para correr la aplicación se debe tener instalado laravel 5.8(probado) y php 7.3(probado).
2) Se debe ejecutar el comando composer install dentro del directorio principal.
3) Se debe crear un archivo llamado ".env" con la estructura EXACTA que se detalla más abajo(sin cambiar ninguna variable, aunque si se puede).
3) Se debe crear una base de datos llamada mft usando mysqlworkbench u otra herramienta similar. Dentro de esta base de datos se debe ejecutar el script tricks.sql
4) Verificado que se haya creado la tabla dentro de la base de datos debido a la ejecución del archivo .sql, se debe ejecutar dentro del directorio principal el comando php artisan serve.
5) Se debe ir a la url: http://127.0.0.1:8000/index para comprobar que la aplicación funciona correctamente.
6) En caso de no cargar la url http://127.0.0.1:8000/index , se debe ejecutar el comando: php -S localhost:8000 -t public/ .Después de esto debería poder accederse a la url antes descrita.


ESTRUCTURA ARCHIVO ".env"

APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:grIs635md6mSPS1U2WJDkE7cp7X6KWXdE/uYR09vruU=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE="MVF"
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"


