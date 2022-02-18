<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\avancesController;


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

Route::resource('product', avancesController::class);

/* Route::resources([
    'product' => 'App\Http\Controllers\avancesController',
    'posts' => 'App\Http\Controllers\avancesController'
]); */

//route::get('/lista/{productId}', 'App\Http\Controllers\avancesController@lista')->name('productos.lista');
route::get('/lista', 'App\Http\Controllers\avancesController@todosProductos')->name('productos.lista');
route::get('/detalle/{id}', 'App\Http\Controllers\avancesController@show')->name('productos.detalle');





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
