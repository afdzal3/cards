docker-compose up -d

docker-compose exec -it  main /var/www/html/artisan migrate:refresh --seed
