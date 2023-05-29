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

//Encomendas
Route::get('/encomendas', [App\Http\Controllers\OrderController::class, 'index'])->name('orders.index');
Route::get('/encomendas/criar', [App\Http\Controllers\OrderController::class, 'create'])->name('orders.create');
Route::get('/encomendas/{order}/editar', [App\Http\Controllers\OrderController::class, 'edit'])->name('orders.edit');

Route::post('/encomendas', [App\Http\Controllers\OrderController::class, 'store'])->name('orders.store');
Route::put('/encomendas/{order}', [App\Http\Controllers\OrderController::class, 'update'])->name('orders.update');
Route::delete('/encomendas/{order}', [App\Http\Controllers\OrderController::class, 'destroy'])->name('orders.destroy');

//Clientes
Route::get('/clientes', [App\Http\Controllers\CustomerController::class, 'index'])->name('customers.index');
Route::get('/clientes/criar', [App\Http\Controllers\CustomerController::class, 'create'])->name('customers.create');
Route::get('/clientes/{customer}/editar', [App\Http\Controllers\CustomerController::class, 'edit'])->name('customers.edit');

Route::post('/clientes', [App\Http\Controllers\CustomerController::class, 'store'])->name('customers.store');
Route::put('/clientes/{customer}', [App\Http\Controllers\CustomerController::class, 'update'])->name('customers.update');
Route::delete('/clientes/{customer}', [App\Http\Controllers\CustomerController::class, 'destroy'])->name('customers.destroy');

//Imagens Tshirt
Route::get('/tshirt_images', [App\Http\Controllers\TshirtImageController::class, 'index'])->name('tshirt_images.index');
Route::get('/tshirt_images/criar', [App\Http\Controllers\TshirtImageController::class, 'create'])->name('tshirt_images.create');
Route::get('/tshirt_images/{tshirtImage}/editar', [App\Http\Controllers\TshirtImageController::class, 'edit'])->name('tshirt_images.edit');

Route::post('/tshirt_images', [App\Http\Controllers\TshirtImageController::class, 'store'])->name('tshirt_images.store');
Route::put('/tshirt_images/{tshirtImage}', [App\Http\Controllers\TshirtImageController::class, 'update'])->name('tshirt_images.update');
Route::delete('/tshirt_images/{tshirtImage}', [App\Http\Controllers\TshirtImageController::class, 'destroy'])->name('tshirt_images.destroy');

//Preços

Route::get('/precos', [App\Http\Controllers\PriceController::class, 'index'])->name('prices.index');
Route::get('/precos/criar', [App\Http\Controllers\PriceController::class, 'create'])->name('prices.create');
Route::get('/precos/{price}/editar', [App\Http\Controllers\PriceController::class, 'edit'])->name('prices.edit');

Route::post('/precos', [App\Http\Controllers\PriceController::class, 'store'])->name('prices.store');
Route::put('/precos/{price}', [App\Http\Controllers\PriceController::class, 'update'])->name('prices.update');
Route::delete('/precos/{price}', [App\Http\Controllers\PriceController::class, 'destroy'])->name('prices.destroy');

//Categorias

Route::get('/categorias', [App\Http\Controllers\CategoryController::class, 'index'])->name('categories.index');
Route::get('/categorias/criar', [App\Http\Controllers\CategoryController::class, 'create'])->name('categories.create');
Route::get('/categorias/{category}/editar', [App\Http\Controllers\CategoryController::class, 'edit'])->name('categories.edit');

Route::post('/categorias', [App\Http\Controllers\CategoryController::class, 'store'])->name('categories.store');
Route::put('/categorias/{category}', [App\Http\Controllers\CategoryController::class, 'update'])->name('categories.update');
Route::delete('/categorias/{category}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('categories.destroy');

//Cores

Route::get('/cores', [App\Http\Controllers\ColorController::class, 'index'])->name('colors.index');
Route::get('/cores/criar', [App\Http\Controllers\ColorController::class, 'create'])->name('colors.create');
Route::get('/cores/{color}/editar', [App\Http\Controllers\ColorController::class, 'edit'])->name('colors.edit');

Route::post('/cores', [App\Http\Controllers\ColorController::class, 'store'])->name('colors.store');
Route::put('/cores/{color}', [App\Http\Controllers\ColorController::class, 'update'])->name('colors.update');
Route::delete('/cores/{color}', [App\Http\Controllers\ColorController::class, 'destroy'])->name('colors.destroy');

//Itens de Encomenda

Route::get('/orderItems', [App\Http\Controllers\OrderItemController::class, 'index'])->name('orderItems.index');
Route::get('/orderItems/criar', [App\Http\Controllers\OrderItemController::class, 'create'])->name('orderItems.create');
Route::get('/orderItems/{orderItem}/editar', [App\Http\Controllers\OrderItemController::class, 'edit'])->name('orderItems.edit');

Route::post('/orderItems', [App\Http\Controllers\OrderItemController::class, 'store'])->name('orderItems.store');
Route::put('/orderItems/{orderItem}', [App\Http\Controllers\OrderItemController::class, 'update'])->name('orderItems.update');
Route::delete('/orderItems/{orderItem}', [App\Http\Controllers\OrderItemController::class, 'destroy'])->name('orderItems.destroy');



