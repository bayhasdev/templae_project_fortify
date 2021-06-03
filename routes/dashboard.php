<?php

use Illuminate\Support\Facades\Route;

/*-------------------------------------------------------------------------- 
| dashboard Routes 
--------------------------------------------------------------------------*/ 

Route::get('dashboard', function () {
    return view('dashboard.home');
})->middleware('auth')->name('dashboard');
 
