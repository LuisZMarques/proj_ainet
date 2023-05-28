<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TshirtImageController;
use App\Http\Controllers\CustomerController;

Route::view('/', 'home')->name('root');

//get all models from database and return them to the view

Route::resource('categories', CategoryController::class);
Route::resource('colors', ColorController::class);
Route::resource('orderItems', OrderItemController::class);
Route::resource('prices', PriceController::class);
Route::resource('orders', OrderController::class);
Route::resource('tshirtImages', TshirtImageController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/customers', [App\Http\Controllers\CustomerController::class, 'index'])->name('customers.index');
Route::get('/catalogo', [App\Http\Controllers\TshirtImageController::class, 'index'])->name('tshirt_images.index');
Route::get('/encomendas', [App\Http\Controllers\OrderController::class, 'index'])->name('orders.index');