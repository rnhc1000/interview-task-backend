#! /bin/bash
cd ./docker/

docker compose up -d
docker compose run workspace composer install
docker compose run workspace cp -n .env.example .env