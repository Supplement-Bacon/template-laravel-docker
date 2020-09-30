<p align="center"><a href="https://supplement-bacon.com" target="_blank"><img src="https://supplement-bacon.com/images/cover2.png" width="600"></a></p>

# Laravel X Docker - API Edition
This repository contains all you need to start the developement of REST API using the Laravel framework in an containerized environment.
Laravel Passport provides a full OAuth2 server implementation.
Using the OpenAPI standard allow to create a nice and sweet API documentation displayed by Swagger

 
### Technologies

| SERVICE | PHP | MariaDB |   Nginx   | Laravel |
|:-------:|:---:|:-------:|:---------:|:-------:|
| VERSION | 7.4 | 10.5    |1.17-alpine| 8.6.0   |

## Setting up Docker

```bash
$ git clone git@github.com:Supplement-Bacon/template-laravel-docker.git --branch api-edition --single-branch

$ cp env.example .env

# Start containers
$ make start

# Display containers status
$ make status
```

## Install Laravel dependencies

```bash
$ make laravel-install

# Generate passport keys
$ make passport-install
```

## Access to laravel application
```bash
http://localhost:8000

# Access to documentation
http://localhost:8000/api/documentation
```

## Generate Swagger documentation
By default, Swagger generate the documention each time you access to it, which could be useful during development stage.
To disable this, set the `L5_SWAGGER_GENERATE_ALWAYS` in `.env` to `false`
```bash
$ make swagger-generate
```
