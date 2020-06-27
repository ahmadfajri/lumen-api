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

$router->get('/', 'ProdukController@index');
$router->post('/produk', 'ProdukController@create');
$router->get('/produk/{id}', 'ProdukController@show');
$router->put('/produk/{id}', 'ProdukController@update');
$router->delete('/produk/{id}', 'ProdukController@destroy');
