<p align="center"><a href="https://veganhacktivists.org/" target="_blank"><img src="https://i.imgur.com/xSHDo4E.pngE" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Vegan Hacktivists Challenge

This project is an implementation of [this challenge](https://gist.github.com/GRardB/7e2990bbea8c2e50e2b501b712d8c169).
Random trivia questions courtesy of [opentdb](https://opentdb.com/).

### Requirements

- [composer](https://getcomposer.org/download/)

(not strictly required but the project was developed/tested with docker)
- [docker](https://docs.docker.com/get-docker/)
- [docker-compose](https://docs.docker.com/compose/install/)

### Build

```
composer install
./vendor/bin/sail up -d
./vendor/bin/sail artisan migrate:fresh
```

## License

The project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
