up:
	@docker-compose up -d
	@docker-compose exec cli composer install

down:
	@docker-compose down

start:
	@docker-compose up -d
	@docker-compose exec cli bin/console server:start 0.0.0.0:8888

status:
	@docker-compose up -d
	@docker-compose exec cli bin/console server:status

stop:
	@docker-compose up -d
	@docker-compose exec cli bin/console server:stop
