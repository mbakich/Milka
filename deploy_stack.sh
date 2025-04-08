source .env
export ENV_FILE=.env
(docker compose -f docker-compose.yml -f docker-compose.${APP_ENV}.yml config) | sed "/published:/s/\"//g" | sed "/^name:/d" | docker stack deploy --with-registry-auth -c - $CI_PROJECT_NAME
