<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\frontController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',[
    frontController::class,
    'home'
])->name('adminHome');