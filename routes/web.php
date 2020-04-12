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
//ini route biasa
$router->get('/hello', function () {
    return "<h1>Halo</h1><p>Selamat Datang di Kota Surabaya</p>";
});

//ini route untuk data dinamis
$router->get('/hello/{name}', function ($name) {
    return "<h1>hallo</h1><p>Selamat " .$name .", Selamat Datang di Surabaya</p>";
});

///ini route untuk middleware cek umur
$router->get("/belajarMiddleware/{umur}", ['middleware' => 'checkumur', function($umur) {
    return "Umur anda adalah " . $umur;
}]);
