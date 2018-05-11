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

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('users',  ['uses' => 'UserController@showAllUsers']);
    $router->get('users/{id}', ['uses' => 'UserController@showOneUser']);
    $router->post('users', ['uses' => 'UserController@create']);
    $router->post('users/auth', ['uses' => 'UserController@authenticate']);
    $router->delete('users/{id}', ['uses' => 'UserController@delete']);
    $router->put('users/{id}', ['uses' => 'UserController@update']);  
    
    $router->get('markets',  ['uses' => 'MarketsController@showAllMarkets']);
    $router->post('markets',  ['uses' => 'MarketsController@create']);
    

    $router->post('promotions',  ['uses' => 'PromotionsController@create']);
    $router->put('promotions/inativar/{id}',  ['uses' => 'PromotionsController@changeState']);
    $router->get('promotions',  ['uses' => 'PromotionsController@getPromotions']);


    
  });