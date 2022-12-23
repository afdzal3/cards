docker-compose up -d

sleep 10
docker-compose exec -it  main /var/www/html/artisan migrate:refresh --seed
