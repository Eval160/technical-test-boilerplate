php bin/console doctrine:database:drop --force --quiet --if-exists --no-interaction
php bin/console doctrine:database:create --if-not-exists --quiet --no-interaction
php bin/console doctrine:migrations:migrate --verbose --no-interaction --allow-no-migration
php bin/console doctrine:fixtures:load --quiet --no-interaction --no-debug --append
php bin/console cache:clear
php bin/console cache:warmup
php-fpm &
nginx -g "daemon off;"