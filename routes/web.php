<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
// |
*/


Route::get('/dashboard', function () {
    return view('backend.pase.home');
})->name('backend.pase.home');


Route::get('/home',[ShopController::class,'index'])->name('shop.index');
Route::get('/cart',[ShopController::class,'getCart'])->name('shop.getCart');
Route::get('/{idProduct}/add-to-cart', [ShopController::class,'addToCart'])->name('add-to-cart');

 
// Route::get('/cart',[CartController::class,'getCart'])->name('shop.getCart');

Route::get('carts', function() {
    return view('frontend.website.cart');
})->name('frontend.website.cart');

Route::get('/product', function () {
    return view('frontend.website.product');
})->name('product');

Route::get('/product',[ProductsController::class,'index'])->name('website.product');
Route::get('/product/{id}',[ProductsController::class,'detail'])->name('website.detail');


Route::get('/customers', function () {
    return view('backend.index');
});

route::get('/admin', function() {
    return view('backend.pase.home');
});




Route::group(['prefix' => 'categories'], function () {
    Route::get('/', [CategoriesController::class, 'index'])->name('backend.categories.index');
    Route::get('/create', [CategoriesController::class, 'create'])->name('categories.create');
    Route::get('/show/{id}', [CategoriesController::class, 'show'])->name('categories.show');
    Route::post('/store', [CategoriesController::class, 'store'])->name('categories.store');
    Route::get('/{id}/edit', [CategoriesController::class, 'edit'])->name('categories.edit');
    Route::post('/{id}/update', [CategoriesController::class, 'update'])->name('categories.update');
    Route::delete('/{id}/delete', [CategoriesController::class, 'destroy'])->name('categories.destroy');
    Route::get('/filterByCity', [CategoriesController::class, 'filterByCity'])->name('categories.filterByCity');
    Route::get('/search', [CategoriesController::class, 'search'])->name('categories.search');

});

Route::group(['prefix' => 'adminProducts'], function () {
    Route::get('/', [ProductsController::class, 'admin'])->name('backend.products.index');
    Route::get('/create', [ProductsController::class, 'create'])->name('products.create');
    Route::get('/show/{id}', [ProductsController::class, 'show'])->name('products.show');
    Route::post('/store', [ProductsController::class, 'store'])->name('products.store');
    Route::get('/{id}/edit', [ProductsController::class, 'edit'])->name('products.edit');
    Route::post('/{id}/update', [ProductsController::class, 'update'])->name('products.update');
    Route::delete('/{id}/delete', [ProductsController::class, 'destroy'])->name('products.destroy');
    Route::get('/filterByCity', [ProductsController::class, 'filterByCity'])->name('products.filterByCity');
    Route::get('/search', [ProductsController::class, 'search'])->name('products.search');

});

Route::group(['prefix' => 'orders'], function () {
    Route::get('/', [OrdersController::class, 'index'])->name('orders.index');
    Route::get('/create', [OrdersController::class, 'create'])->name('orders.create');
    Route::get('/show/{id}', [OrdersController::class, 'show'])->name('orders.show');
    Route::post('/store', [OrdersController::class, 'store'])->name('orders.store');
    Route::get('/{id}/edit', [OrdersController::class, 'edit'])->name('orders.edit');
    Route::post('/{id}/update', [OrdersController::class, 'update'])->name('orders.update');
    Route::delete('/{id}/delete', [OrdersController::class, 'destroy'])->name('orders.destroy');
    Route::get('/filterByCity', [OrdersController::class, 'filterByCity'])->name('orders.filterByCity');
    Route::get('/search', [OrdersController::class, 'search'])->name('orders.search');

});
Route::group(['prefix' => 'customers'], function () {
    Route::get('/', [CustomersController::class, 'index'])->name('customers.index');
    Route::get('/create', [customersController::class, 'create'])->name('customers.create');
    Route::get('/show/{id}', [customersController::class, 'show'])->name('customers.show');
    Route::post('/store', [customersController::class, 'store'])->name('customers.store');
    Route::get('/{id}/edit', [customersController::class, 'edit'])->name('customers.edit');
    Route::post('/{id}/update', [customersController::class, 'update'])->name('customers.update');
    Route::delete('/{id}/delete', [customersController::class, 'destroy'])->name('customers.destroy');
    Route::get('/filterByCity', [customersController::class, 'filterByCity'])->name('customers.filterByCity');
    Route::get('/search', [customersController::class, 'search'])->name('customers.search');

});



Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('/postLogin', [LoginController::class, 'postLogin'])->name('postLogin');

Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/postRegister', [RegisterController::class, 'postRegister'])->name('postRegister');
