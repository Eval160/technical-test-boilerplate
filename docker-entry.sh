php bin/console doctrine:database:create --no-interaction
php bin/console doctrine:migrations:migrate --no-interaction
php bin/console doctrine:fixtures:load --no-interaction
php bin/console cache:clear
php bin/console cache:warmup
php-fpm &
nginx -g "daemon off;"