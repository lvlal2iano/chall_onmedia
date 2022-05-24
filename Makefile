#!/bin/bash
DOCKER_PHP=$(shell basename $(CURDIR))_web_1
DOCKER_DB=$(shell basename $(CURDIR))_mysql_1
DB_PASSWORD=123456
DB_DATABASE=challenge_onmedia
DB_USERNAME=root
WWWGROUP=1000
WWWUSER=1000

init: ## Init the project
	clear
	docker-compose up --build --force-recreate -d --remove-orphans
	docker exec -it ${DOCKER_PHP} composer install
	docker exec -it ${DOCKER_PHP} cp -f .env.example .env
	docker exec -it ${DOCKER_PHP} php artisan key:generate
	docker exec -it ${DOCKER_PHP} php artisan migrate:fresh --seed
	docker exec -it ${DOCKER_PHP} php artisan optimize:clear
	docker exec -it ${DOCKER_PHP} composer dump-autoload --optimize
	docker exec -it ${DOCKER_PHP} npm i
	docker exec -it ${DOCKER_PHP} npm run development


stop:
	clear
	docker-compose stop

run:
	clear
	docker-compose up

ssh: ## ssh's into the PHP container
	clear
	docker exec -it ${DOCKER_PHP} bash

restart: ## Restart the containers
	make stop
	make run

