<p align="center"><a href="https://supplement-bacon.com" target="_blank"><img src="https://supplement-bacon.com/images/bacon-circle.png" width="200"></a><br><h1>Supplement Bacon</h1></p>

# Laravel X Docker

This repository contains all you need to start the developement of Laravel applications in an containerized environment. 

 
### Technologies

| SERVICE | PHP | MariaDB |   Nginx   | Laravel |
|---------|-----|---------|-----------|---------|
| VERSION | 7.4 | 10.5    |1.17-alpine| 8.6.0   |

## Setting up Docker

```bash
$ git clone git@github.com:Supplement-Bacon/template-laravel-docker.git

$ cp .env.dist .env

$ docker-compose build app
$ docker-compose up -d

# Display containers status
$ docker-compose ps
```

## Install Laravel dependencies

```bash
$ docker-compose exec app composer install
$ docker-compose exec app php artisan key:generate
```

# Access to laravel application
```bash
http://server_domain_or_IP:8000
# OR
http://localhost:8000
```

## CI/CD
Will be added soon ...
