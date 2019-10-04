- https://medium.com/swlh/laravel-with-docker-compose-de2190569084

```
docker-compose build

docker-compose up

docker-compose exec app ./artisan migrate
```


- To test db connection:
```
docker-compose exec app ./vendor/bin/phpunit
```