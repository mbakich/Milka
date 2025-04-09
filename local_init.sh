#!/bin/bash
set -e
source .env
docker_artisan() {
 docker-compose exec app-api php artisan "$@"
}

docker_artisan migrate
docker_artisan db:seed
