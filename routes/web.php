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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index')->name('admin.home')->middleware('is_admin');

//makanan
// Route::get('/admin/makanans', 'MakanansController@index');
// Route::get('/admin/makanans/create', 'MakanansController@create');
// Route::get('/students/{student}', 'StudentsController@show');
// Route::post('/admin/makanans', 'MakanansController@store');
// Route::delete('/students/{student}', 'StudentsController@destroy');
// Route::get('/students/{student}/edit', 'StudentsController@edit');
// Route::patch('/students/{student}', 'StudentsController@update');

Route::resource('/admin/makanans', 'MakanansController');