<?php

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group([ "prefix" => 'admin', 'middleware' => 'auth' ], function() use($router){
    $router->get('info', [ 'uses' => 'AuthController@info']);

    $router->get('datos-personales', [ 'uses' => 'DatosPersonalesController@index']);
    $router->get('datos-personales/{id}', [ 'uses' => 'DatosPersonalesController@show']);

});

$router->get('oficio', [ 'uses' => 'OficioController@index']);
$router->post('datos-personales', [ 'uses' => 'DatosPersonalesController@store']);