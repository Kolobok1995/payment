init:

	sudo docker-compose run payment-node-cli node install \
	sudo docker-compose run payment-node-cli npm install \
	sudo docker-compose run payment-node-cli npm run build \
	sudo docker-compose run payment-php-fpm php artisan migrate \
	sudo docker-compose up