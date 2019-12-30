# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://poser.pugx.org/laravel/lumen-framework/d/total.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/lumen-framework/v/stable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/lumen-framework/v/unstable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://poser.pugx.org/laravel/lumen-framework/license.svg)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
## Install and Configure
Run $ composer install <br>
Run $ php artisan key:generate <br>
Run $ php artisan migrate <br>
Run $ php artisan passport:install <br>
Run $ php artisan db:seed <br>
Run $ php artisan route:list <br>

## TESTE APIS
### localhost:8000/register
#####Body :
password -> xxxxx <br>
frist_name -> xxxx  <br>
email -> xxxx <br>
password -> xxxx <br>
password_confirmation -> xxxx <br>
last_name -> xxxx <br>
city -> xxxx <br>
status -> xxxx <br>

###localhost:8000/v1/oauth/token
#####Body :
grant_type -> password <br>
client_id ->  client insert in DB with Passport install <br>
client_secret -> secredt insert in DB with Passport install <br>
username -> username_registred <br>
password -> password_registred <br>
scope -> *  <br>

###localhost:8000/test
####Headers :
Content-Type -> application/json <br>
Authorization -> Bearer Code_HERE <br>
