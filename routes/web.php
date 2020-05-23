<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/','HomeController@index');

Auth::routes();


Route::group(['middleware' => ['auth', 'is_admin']], function() {
  Route::get('/admin', 'AdminController@index')->name('admin.home');
  Route::resource('/admin/makanans', 'MakanansController');
  Route::resource('/admin/minumans', 'MinumansController');
  Route::get('/admin/transaksis', 'TransaksisController@index');
});

Route::group(['middleware' => ['auth', 'is_user']], function() {
  Route::get('/home', 'HomeController@userHome')->name('home');
  Route::get('/history','HomeController@history');

  //makanan
  Route::get('/makanans','HomeController@makanan');
  Route::get('/makanans/nama-asc','HomeController@makananNameAsc');
  Route::get('/makanans/nama-desc','HomeController@makananNameDesc');
  Route::get('/makanans/harga-asc','HomeController@makananPriceAsc');
  Route::get('/makanans/harga-desc','HomeController@makananPriceDesc');
  Route::post('/makanans/search','HomeController@makananSearch');
  Route::get('/makanan/{makanan}', 'HomeController@showMakanan');

  //minuman
  Route::get('/minumans','HomeController@minuman');
  Route::get('/minumans/nama-asc','HomeController@minumanNameAsc');
  Route::get('/minumans/nama-desc','HomeController@minumanNameDesc');
  Route::get('/minumans/harga-asc','HomeController@minumanPriceAsc');
  Route::get('/minumans/harga-desc','HomeController@minumanPriceDesc');
  Route::post('/minumans/search','HomeController@minumanSearch');
  Route::get('/minuman/{minuman}', 'HomeController@showMinuman');

  //cart
  Route::get('/add-to-cart/{makanan}','CartController@addMakanan')->name('cart.add');
  Route::get('/add-cart/{minuman}','CartController@addMinuman')->name('add.cart');
  Route::get('/cart','CartController@index')->name('cart.index');
  Route::get('/cart/destroy/{itemId}','CartController@destroy')->name('cart.destroy');
  Route::patch('/cart/update/{itemId}','CartController@update')->name('cart.update');
  Route::post('/checkout','CartController@checkout');
  Route::get('/rating','HomeController@rating');
});
