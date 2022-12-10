<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PizzaController;
use http\Env\Request;
use Illuminate\Support\Facades\Auth;
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

Route::get('/pizzas', [PizzaController::class, 'index'])/*to protect my routes without auth didn't enter*/ ->middleware('auth');
Route::get('/pizzas/create', [PizzaController::class, 'create']);
Route::get('/pizzas/show/{id}', [PizzaController::class, 'show']);
Route::get('/pizzas/showall', [PizzaController::class, 'showall']);

Route::post('/pizzas', [PizzaController::class, 'store']);

Route::delete('/pizzas/{id}', [PizzaController::class, 'destroy']);


/*
 * Laravel defulte Auth Ui
    1 - composer require laravel/ui
    2 - php artisan ui vue --auth
    3 - npm install
    4 - npm run dev
 * */
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
