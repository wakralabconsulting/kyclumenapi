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

$router->group(['prefix' => 'api/crm'], function () use ($router) {
  $router->get('cr',  ['uses' => 'CrController@showAllCr']);

  $router->get('cr/{id}', ['uses' => 'CrController@showOneCr']);

  $router->post('cr', ['uses' => 'CrController@create']);

  $router->delete('cr/{id}', ['uses' => 'CrController@delete']);

  $router->put('cr/{id}', ['uses' => 'CrController@update']);
});

$router->group(['prefix' => 'api/crm'], function () use ($router) {
  $router->get('le',  ['uses' => 'LeController@showAllLe']);

  $router->get('le/{id}', ['uses' => 'LeController@showOneLe']);

  $router->post('le', ['uses' => 'LeController@create']);

  $router->delete('le/{id}', ['uses' => 'LeController@delete']);

  $router->put('le/{id}', ['uses' => 'LeController@update']);
});
