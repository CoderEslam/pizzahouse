<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
/*Route::get('/pizzas', function () {
    //Content-Type: text/html
//    return view('pizzas');
//    return 'Eslam';
    //Content-Type: application/json
    return ['name' => 'Eslam', 'work' => 'android develper']; // => it's an array but laravel turn into json
});*/

Route::get('/pizzas', function () {

    $pizzas = [['type' => 'tyjr5je754j',
        'base' => 'chees crust',
        'price' => 10],
        ['type' => 'sfbdfabdg',
            'base' => 'chees crust',
            'price' => 10],
        ['type' => 'nbrgnrnfh',
            'base' => 'chees crust',
            'price' => 10]];

    $data = ['type' => 'hawailan',
        'base' => 'chees crust',
        'price' => 10]; // get data from database
    //Content-Type: text/html
    return view('pizzas', ['pizzas' => $pizzas]);
});



