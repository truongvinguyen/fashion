<?php

use Illuminate\Support\Facades\Route;

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
//index
Route::get('/', [App\Http\Controllers\Indexcongtroller::class, 'index'])->name('');
Route::get('/san-pham', [App\Http\Controllers\Shopcontroller::class, 'all'])->name('');

//cart
Route::get('/add-to-cart/{id}', [App\Http\Controllers\CartController::class, 'add_to_cart'])->name('card.add');
Route::get('/delete-cart/{id}', [App\Http\Controllers\CartController::class, 'DeleteItem'])->name('deleteCart');
Route::get('/view-cart', [App\Http\Controllers\CartController::class, 'list_cart'])->name('');
Route::get('/delete-list-cart/{id}', [App\Http\Controllers\CartController::class, 'DeleteItemlist'])->name('deleteCart');
Route::get('/save-cart-item/{id}/{quanty}', [App\Http\Controllers\CartController::class, 'save_cart'])->name('');

//checkout
Route::get('/login-checkout', [App\Http\Controllers\CheckoutController::class, 'index'])->name('');
Route::post('/add-customer', [App\Http\Controllers\CheckoutController::class, 'add_customer'])->name('');
Route::get('/checkout', [App\Http\Controllers\CheckoutController::class, 'checkout'])->name('');
Route::post('/save-checkout', [App\Http\Controllers\CheckoutController::class, 'save_checkout'])->name('');
Route::get('/logout-checkout', [App\Http\Controllers\CheckoutController::class, 'logout'])->name('');
Route::post('/login-account', [App\Http\Controllers\CheckoutController::class, 'login_account'])->name('');
Route::get('/payment', [App\Http\Controllers\CheckoutController::class, 'payment'])->name('');

//admin
Auth::routes();
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/product', [App\Http\Controllers\HomeController::class, 'allproduct'])->name('allproduct');
Route::get('/admin/product/add-product', [App\Http\Controllers\HomeController::class, 'addproduct'])->name('addproduct');
Route::post('/admin/product/save-product', [App\Http\Controllers\HomeController::class, 'saveproduct'])->name('save_product');
Route::get('/admin/product/edit-product/{id}', [App\Http\Controllers\HomeController::class, 'editproduct'])->name('editproduct');
Route::post('/admin/product/edit-product-save/{id}', [App\Http\Controllers\HomeController::class, 'saveproductsave'])->name('saveproductsave');
Route::get('/delete-product/{id}', [App\Http\Controllers\HomeController::class, 'deleteproduct'])->name('deleteproduct');
Route::get('/admin/category', [App\Http\Controllers\HomeController::class, 'allcat'])->name('allcat');
Route::get('/admin/category/add-category', [App\Http\Controllers\HomeController::class, 'addcat'])->name('addcat');
Route::post('/admin/category/save-category', [App\Http\Controllers\HomeController::class, 'saveCat'])->name('savecat');
Route::get('/product/search-product', [App\Http\Controllers\HomeController::class, 'search'])->name('search');



Route::group(['prefix' => 'laravel-filemanager', 'middleware'], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
