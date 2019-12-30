<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

/** @var TYPE_NAME $router */
$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->group([
    'middleware' => 'client_credentials'
], function (\Laravel\Lumen\Routing\Router $router) {
    $router->get('/test', function () {
        return 'it worked';
    });
});


$router->post('/register','UsersController@register');

