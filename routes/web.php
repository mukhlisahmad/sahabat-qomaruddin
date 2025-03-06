<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// landingpage
Route::get('/', [App\Http\Controllers\Landingpage::class, 'index'])->name('root.landingpage');
