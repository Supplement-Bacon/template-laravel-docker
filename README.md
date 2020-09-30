<p align="center"><a href="https://supplement-bacon.com" target="_blank"><img src="https://supplement-bacon.com/images/cover2.png" width="600"></a></p>

# Laravel X Docker
This repository contains all you need to start the developement of Laravel applications in an containerized environment. 

 
### Technologies

| SERVICE | PHP | MariaDB |   Nginx   | Laravel |
|---------|-----|---------|-----------|---------|
| VERSION | 7.4 | 10.5    |1.17-alpine| 8.6.0   |

## Setting up Docker

```bash
$ git clone git@github.com:Supplement-Bacon/template-laravel-docker.git
$ cd template-laravel-docker

$ cp env.example .env

# Start containers
$ make start

# Display containers status
$ make status
```

## Install Laravel dependencies

```bash
$ make laravel-install
```

## Access to laravel application
```bash
http://server_domain_or_IP:8000
# OR
http://localhost:8000
```
