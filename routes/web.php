<?php

use Illuminate\Support\Facades\Auth;
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
// HOME
Route::get('/','HomeController@dashboard');
// Sub_menu
Route::post('/get_img','ContainerController@get_img');
// Lọc chất liệu
Route::post('/get_material','ProductController@get_material');
// Lọc màu sắc
Route::post('/get_color','ProductController@get_color');
// Lọc giá
Route::post('/get_price','ProductController@get_price');
// Lọc sản phẩm category
Route::post('/get_product','ProductController@get_product');
// Product
Route::get('product/categoryProduct/{id}','ProductController@categoryProduct')->name('product.categoryProduct');
Route::get('product/detailProduct/{id}', 'ProductController@detailProduct')->name('product.detailProduct');

// Post
Route::get('post/listPost/{id}','PostController@listPost')->name('post.listPost');
Route::get('post/detailPost/{id}','PostController@detailPost')->name('post.detailPost');
Route::get('post/listCatelogue','PostController@listCatelogue');
// Checkout
Route::get('/checkout','CheckoutController@checkoutClient');
Route::post('checkout/storeaddOrder','CheckoutController@storeaddOrder');
Route::get('checkout/listOrder','CheckoutController@listOrder');
// Reg
Route::get('/regis','RegController@regis');
// Page
Route::get('page/listPage/{id}','PageController@listPage')->name('page.listPage');
Route::get('page/detailPage/{id}','PageController@detailPage')->name('page.detailPage');
// UserClient
Route::post('reg/storeaddClient', 'RegController@storeaddClient')->name('reg.storeaddClient');
Route::post('reg/login', 'RegController@login')->name('reg.login');
Route::get('/regis','RegController@customerIf')->name('regis');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Cart
Route::get('cart/addCart/{id}','CartController@addCart')->name('cart.addCart');
// Route::post('cart/addCart/{id}','CartController@addCart')->name('cart.addCart');
Route::post('/update','CartController@update')->name('update');
Route::get('/cart','CartController@listCart');
Route::get('cart/remove/{rowId}','CartController@removeCart')->name('cart.remove');
// Search
Route::post('/get_search','ContainerController@get_search');