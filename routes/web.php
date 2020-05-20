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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@userHome')->name('home');

Route::group(['middleware' => ['auth', 'is_admin']], function() {
  Route::get('/admin', 'AdminController@index')->name('admin.home');
  Route::resource('/admin/makanans', 'MakanansController');
  Route::resource('/admin/minumans', 'MinumansController');
  Route::get('/admin/transaksis', 'TransaksisController@index');
});
