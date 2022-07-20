<?php

use App\Http\Controllers\ProductController;
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

Route::get('/', [ProductController::class,'read'] )->name('product.index');
Route::get('/cadastro', [ProductController::class,'create'] )->name('product.create');
Route::post('/cadastro', [ProductController::class,'insert'] );

Route::get('/show/{id}', [ProductController::class,'show'] )->name('product.show');
Route::post('/edit/{id}', [ProductController::class,'edit'] )->name('product.edit');


Route::get('/delete/{id}', [ProductController::class,'delete'] )->name('product.delete');

