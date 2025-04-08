docker-compose exec app-api rm -r storage/docs/
set -e
docker-compose exec app-api  vendor/bin/phpunit 
docker-compose exec app-api php artisan scribe:generate
