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

$router->get('/cars', 'CarController@index');
$router->post('/car', 'CarController@store');
$router->get('/car/{id}', 'CarController@show');
$router->put('/car/{id}', 'CarController@update');
$router->delete('/car/{id}', 'CarController@destroy');

$router->get('/clients', 'ClientController@index');
$router->post('/client', 'ClientController@store');
$router->get('/client/{id}', 'ClientController@show');
$router->put('/client/{id}', 'ClientController@update');
$router->delete('/client/{id}', 'ClientController@destroy');
