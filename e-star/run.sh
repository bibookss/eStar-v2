docker compose exec app php artisan key:generate
docker compose exec app bash -c "composer update"
docker compose exec app bash -c "php artisan migrate"