set -e
source .env
source .env.production
swarm_artisan() {
 docker exec -ti "$CI_PROJECT_NAME""_app-api.1."$(docker service ps -f "name=${CI_PROJECT_NAME}_app-api.1" "$CI_PROJECT_NAME""_app-api" -q --no-trunc | head -n1) php artisan "$@"
}

swarm_artisan "$@"
