<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
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






//Route::resource('products', ProductController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [ClientController::class, 'home']);
Route::get('/shop', [ClientController::class, 'shop']);
Route::get('/cart', [ClientController::class, 'cart']);
Route::get('/checkout', [ClientController::class, 'checkout']);
Route::get('/login', [ClientController::class, 'login']);
Route::get('/signin', [ClientController::class, 'signin']);

// Admin Panel
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard.index');

Route::resource('categories', CategoryController::class);
Route::resource('sliders', SliderController::class);
Route::resource('products', ProductController::class);
Route::resource('orders', OrderController::class);

Route::put('/activate_product', [ProductController::class, 'activate_product']);
Route::put('/deactivate_product', [ProductController::class, 'deactivate_product']);

// Route::get('/products', [ProductController::class, 'products']);
// Route::get('/addproduct', [ProductController::class, 'addProduct']);

// Route::get('/sliders', [SliderController::class, 'sliders']);
// Route::get('/addslider', [SliderController::class, 'addSlider']);

// Route::get('/orders', [OrderController::class, 'orders']);


Route::get('/about', [PagesController::class, 'about']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
