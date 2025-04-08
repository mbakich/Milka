set -e
source .env
export ENV_FILE=.env
docker-compose  -f docker-compose.yml -f docker-compose.production.yml build
docker-compose  -f docker-compose.yml -f docker-compose.production.yml push
