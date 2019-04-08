# PHP Test Skeleton

Empty php skeleton ready to use to start any test.

This is part of the episode #2: "¿Cómo pasar las pruebas técnicas?" of my podcast ["¿Qué me estás container?"](https://open.spotify.com/show/1FBSbmyYqo9AYbFehaoIWu?si=IIgpjIByTqGp7yfuUhqUAA).

## Prerequisites

- [Docker](https://www.docker.com/get-started)
- [Docker Compose](https://docs.docker.com/compose/install/)

## Includes

- Docker infrastructure / Nginx + PHP + Mysql (using Docker Compose to orchestrate containers).
- Basic standard project structure with an simple example.

## Usage

- Go to the project root and execute ``docker-compose up -d`` to build and run the docker containers.
- To execute enter to php-fpm container to execute php scripts run ``docker exec -it test_fpm bash``. 

That's it! 


### Author

Sergio Susa (https://sergiosusa.com)

If you want to support my work, consider to use [this](stores/my-amazon-affiliate.user.js) script when you buy on amazon spain.
