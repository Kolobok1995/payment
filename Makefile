init:
	sudo docker-compose run payment-node-cli npm update;
	sudo docker-compose run payment-composer composer install;
	sudo cp .env.example .env;
	sudo docker-compose up -d;
	sudo docker-compose run payment-php-fpm php artisan migrate;
	sudo chmod -R 777 .
	sudo docker-compose run payment-node-cli npm run build;
