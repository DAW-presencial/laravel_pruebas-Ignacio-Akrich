### URL:  http://jakrich.ifc33b.cifpfbmoll.eu/laravel_pruebas-Ignacio-Akrich/pokebank/public
### REPOSITORIO: https://github.com/DAW-presencial/laravel_pruebas-Ignacio-Akrich/tree/main/pokebank
## CRUD:

Se encontrará una lista de pokemons con su ID, nombre y tipo (las imagenes aun no funcionan).
El usuario Administrador podrá crear, editar y eliminar pokemons.
El usuario normal podrá crear, editar, pero no podrá eliminar pokemons.

Hay un usuario de tipo admin
- Usuario: jakrich@gmail.com
- Contraseña: 12345678


## AUTOR: Juan Ignacio Akrich Vazquez

### .env 
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:eKNdSFR40fQaHyFo4c0F2P26iCtX/1Iel2zNSjBTLzc=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=pgsql
DB_HOST=51.178.152.213
DB_PORT=5432
DB_DATABASE=jakrich_pruebas
DB_USERNAME=jakrich_usr
DB_PASSWORD=abc123.

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DRIVER=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=null
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
