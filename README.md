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

## Documentation
* [http://localhost:8888/api](http://localhost:8888/api)

## API

## Setting up environment in PHPStorm

### Remote PHP interpreter
* Open `Preferences | Language & Frameworks | PHP`
* Set `PHP language level` to `7.2` 
* Set `CLI Interpreter`: click on `...`
    * On the left panel click on `+` to add new interpreter
    * Select `From Docker, Vagrant, VM, Remote ...`
    * Click on radio button `Docker Compose`
        * Be sure that following settings are selected:
            * `Server`: `Docker`
            * `Configuration file(s)`: `./docker-compose.yml`
            * `Service`: `php`
            * `Environment variables`: <Empty>
            * `PHP interpreter path`: `php`
        * Click `OK`
    * After instalation check you should see information about installed versions of PHP, Xdebug
    * Change name of the PHP Interpreter from `cli` to `PHP 7.2 (Docker)`
    * Select checkbox `Visible only for this project`
    * Click `OK`
* Click `OK`

### Setting up PHPUnit by Remote PHP Interpreter
* Open `Preferences | Languages & Frameworks | PHP | Test Frameworks`
* On the left panel click `+` to add new interpreter
* Select `PHPUnit by Remote Interpreter`
* From the dropdown list select `PHP 7.2 (Docker)` and click `OK`
* Under `PHPUnit library` select `Path to phpunit.phar` radio button and set `/usr/share/code/bin/phpunit` as `Path to phpunit.phar`
* Set `/usr/share/code/phpunit.xml.dist` as `Default configuration file`
* Confirm setting with click on `OK`
* Now you can run PHPUnit from IDE by right clicking on the `tests` directory und clicking on `Run 'tests'`

