<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductsController;

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

Route::get('/', [PagesController::class, 'index']);

Route::get('/about', [PagesController::class, 'about']);

// Route::get('/products', [PagesController::class, 'shop']);

// Route::get('/products/create', [ProductsController::class, 'create']);

// Route::get('/products/edit/{id}', [ProductsController::class, 'edit']);

// Route::get('/products/{id}', [ProductsController::class, 'show']);

// Route::post('/products', [ProductsController::class, 'store']);

// Route::put('/products', [ProductsController::class, 'update']);

// Route::delete('/products/{id}', [ProductsController::class, 'destroy'])->name('products.delete');

Route::resource('products', ProductController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
