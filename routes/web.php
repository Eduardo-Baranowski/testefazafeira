<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;

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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('produto', [App\Http\Controllers\ProdutoController::class, 'index'])->name('pages.produto');
    Route::get('infoproduto/{id}', [App\Http\Controllers\ProdutoController::class, 'infoproduto'])->name('pages.infoproduto');
    Route::get('favoritarproduto/{id}', [App\Http\Controllers\ProdutoController::class, 'favoritarproduto'])->name('pages.favoritarproduto');
    Route::get('painel', [App\Http\Controllers\ProdutoController::class, 'painel'])->name('pages.painel');
    Route::post('storeproduto', [App\Http\Controllers\ProdutoController::class, 'storeproduto'])->name('pages.storeproduto');
    Route::post('storedesejo', [App\Http\Controllers\ProdutoController::class, 'storedesejo'])->name('pages.storedesejo');
    Route::get('/{produto}/deleteprod', [App\Http\Controllers\ProdutoController::class, 'delete'])->name('pages.deleteprod');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
