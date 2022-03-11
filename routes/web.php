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
    return view('auth.login');
});

/* Route::resource('compras', ComprasController::class);
Route::resource('compra', ComprasController::class);
Route::resource('customer', ComprasController::class);
Route::resource('compras', 'ComprasController'); */
//Route::resource('customer', 'ComprasController');


 Route::resources([
    'compras' => 'App\Http\Controllers\ComprasController',
    'posts' => 'App\Http\Controllers\ComprasController'
]); 

//route::get('/lista/{productId}', 'App\Http\Controllers\avancesController@lista')->name('productos.lista');
route::get('/lista', 'App\Http\Controllers\avancesController@todosProductos')->name('productos.lista');
route::get('/detalle/categoria/{id}', 'App\Http\Controllers\avancesController@buscarCategoria')->name('productos.categoria');

//route::get('/lista', 'App\Http\Controllers\avancesController@selectorCategoria')->name('productos.lista');
route::get('/detalle/{id}', 'App\Http\Controllers\avancesController@show')->name('productos.detalle');

Route::resources([
    'ordenes' => 'App\Http\Controllers\OrdenesController',
    'posts' => 'App\Http\Controllers\OrdenesController'
]); 







Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
