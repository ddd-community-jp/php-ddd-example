up:
	docker-compose up -d
build:
	docker-compose build
stop:
	docker-compose stop
down:
	docker-compose down
ps:
	docker-compose ps
php:
	docker-compose exec php bash
mysql:
	docker-compose exec db bash
init:
	docker-compose exec php laravel new
restart:
	docker-compose restart
test:
	docker-compose exec php vendor/bin/phpunit tests/Unit/