<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LogoutController;

require __DIR__.'/auth.php';



Route::middleware(['auth'])->group(function () {
    Route::get('/', [ProductController::class,'read'] )->name('product.index');
    Route::get('/cadastro', [ProductController::class,'create'] )->name('product.create');
    Route::post('/cadastro', [ProductController::class,'insert'] );
    
    Route::get('/show/{id}', [ProductController::class,'show'] )->name('product.show');
    Route::post('/edit/{id}', [ProductController::class,'edit'] )->name('product.edit');
    
    
    Route::get('/delete/{id}', [ProductController::class,'delete'] )->name('product.delete');

    Route::post('/logout', [LogoutController::class,'logout'] )->name('adm.logout');


});


