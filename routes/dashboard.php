<?php

use Illuminate\Support\Facades\Route;

/*-------------------------------------------------------------------------- 
| dashboard Routes 
--------------------------------------------------------------------------*/ 
 

Route::middleware('auth')->name('dashboard.')->prefix('dashboard')->group(function () {

    Route::get('/', function () {
        return view('dashboard.home');
    })->name('home');

    Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
});
 
