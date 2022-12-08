<?php

use App\Http\Controllers\PizzaController;
use http\Env\Request;
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

Route::get('/pizzas', [PizzaController::class, 'index']);
Route::get('/details/{id}/{name}', [PizzaController::class, 'show']);



