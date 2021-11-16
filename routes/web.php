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
|   Personal Token update Github
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::resource('produtos', App\Http\Controllers\ProdutoController::class)->middleware('auth');
Route::get('/produto/export', [App\Http\Controllers\ProdutoController::class, 'export'])->name('produtos.export');

Route::post('produto/action', [App\Http\Controllers\ProdutoController::class, 'action'])->name('produtos.action');

Route::resource('listas', App\Http\Controllers\ListaController::class)->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
