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

Route::get('/addproduct',[
    frontController::class,
    'addproduct'
])->name('addproduct');

Route::post('/saveproduct',[
    frontController::class,
    'saveproduct'
])->name('saveproduct');

Route::get('/productlist',[
    frontController::class,
    'productlist'
])->name('productlist');

Route::get('/editproduct/{id}',[
    frontController::class,
    'editproduct'
])->name('editproduct');

Route::post('/updateproduct',[
    frontController::class,
    'updateproduct'
])->name('updateproduct');