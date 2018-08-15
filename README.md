# RESTful API

## Requirements
Please install on your computer:
* [Docker](https://docs.docker.com/install/)
* [Docker Compose](https://docs.docker.com/compose/install/)

## Documentation
* [API Platform](https://api-platform.com/docs/core) 
* [Symfony 4](https://symfony.com/doc/)
* [Docker](https://docs.docker.com/)


## Controlling application
* `Makefile` in root directory of the project provides following targets:
    * `make up` - starts (and rebuilds if necessary) containers and installs composer dependencies.
    * `make down` - stops all related containers and network.
    * `make start` - starts builtin web server on port `8888`.
       Application URL: [http://localhost:8888](http://localhost:8888).
       Api doc: [http://localhost:8888/api](http://localhost:8888/api)
    * `make status` - prints status of builtin web server.
    * `make stop` - stops builtin web server.


## API

### Documentation
* [http://localhost:8888/api](http://localhost:8888/api)