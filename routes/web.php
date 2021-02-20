<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Http\Controllers\KategoriController;

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

    $router->get('kategori', ['uses' => 'KategoriController@index']);

    $router->delete('kategori/{id}', ['uses' => 'KategoriController@destroy']);

    $router->post('kategori', ['uses' => 'KategoriController@create']);

    $router->put('kategori/{id}', ['uses' => 'KategoriController@update']);

    $router->get('kategori/{id}', ['uses' => 'KategoriController@show']);

    $router->post('pelanggan', ['uses' => 'PelangganController@create']);
});

$router->group(['prefix' => 'testing'], function () use ($router) {

    $router->post('penulis', ['uses' => 'PenulisController@create']);

    $router->get('penulis', ['uses' => 'PenulisController@index']);

    $router->get('penulis/{id}', ['uses' => 'PenulisController@show']);

    $router->post('tags', ['uses' => 'TipeBukuController@create']);

    $router->get('tags', ['uses' => 'TipeBukuController@index']);

    $router->post('buku', ['uses' => 'BukuController@create']);

    $router->get('buku', ['uses' => 'BukuController@index']);

    $router->get('buku/cek', ['uses' => 'BukuController@getAll']);
});
