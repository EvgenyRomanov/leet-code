init: down build up

test:
	@docker compose run --rm app-php-cli composer test

build:
	docker compose build --pull

up:
	docker compose up -d

down:
	docker compose down --remove-orphans

app:
	@docker compose run --rm app-php-cli composer app

.PHONY: test build up down app
