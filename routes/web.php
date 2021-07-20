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
  $router->get('kyc',  ['uses' => 'KycController@showAllKyc']);

  $router->get('kyc/{id}', ['uses' => 'KycController@showOneKyc']);

  $router->post('kyc', ['uses' => 'KycController@create']);

  $router->delete('kyc/{id}', ['uses' => 'KycController@delete']);

  $router->put('kyc/{id}', ['uses' => 'KycController@update']);
});

$router->group(['prefix' => 'api/crm'], function () use ($router) {
  $router->get('countries',  ['uses' => 'CountriesController@showAllCountries']);

  $router->get('countries/{id}', ['uses' => 'CountriesController@showOneCountries']);

  $router->post('countries', ['uses' => 'CountriesController@create']);

  $router->delete('countries/{id}', ['uses' => 'CountriesController@delete']);

  $router->put('countries/{id}', ['uses' => 'CountriesController@update']);
});

$router->group(['prefix' => 'api/crm'], function () use ($router) {
  $router->get('cities',  ['uses' => 'CitiesController@showAllCities']);

  $router->get('cities/{id}', ['uses' => 'CitiesController@showOneCities']);

  $router->post('cities', ['uses' => 'CitiesController@create']);

  $router->delete('cities/{id}', ['uses' => 'CitiesController@delete']);

  $router->put('cities/{id}', ['uses' => 'CitiesController@update']);
});
