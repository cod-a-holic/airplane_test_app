# INSTALLATION

Build and run docker images
```shell script
cd docker/
docker-compose -f docker-compose.yaml build
docker-compose -f docker-compose.yaml up -d
```

After docker started, to install dependencies, create and fill database
```shell script
docker exec -it docker_php-fpm_1 bash
composer install
./bin/console d:d:c
./bin/console d:mi:mi
```

To get "Aeropakt" hangar airplanes check: http://localhost:8080/api/v1/hangars/Aeropakt/airplanes

# Tests

```shell script
docker exec -it docker_php-fpm_1 bash
./bin/phpunit
```