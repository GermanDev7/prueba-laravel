<?php

use GuzzleHttp\Middleware;
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

Auth::routes();

Route::group(['middleware' => 'auth'], function () {

    /// Rutas Productos
    Route::get('/', [App\Http\Controllers\ProductoController::class, 'index'])->name('productos.index');
    Route::get('/productos', [App\Http\Controllers\ProductoController::class, 'index'])->name('productos.index');
    Route::resource('/productos', App\Http\Controllers\ProductoController::class);

    //Rutas Ventas

    Route::resource('/ventas', App\Http\Controllers\VentaController::class);
    
});

