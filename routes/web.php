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

Route::get('/', function () {
    return view('index');
});
Auth::routes();

Route::group(['namespace' => 'App\Http\Controllers'], function(){
    Route::get('/home', 'HomeController@index')->name('home');

    Route::group(['middleware' => 'RoleAdmin'], function(){
        Route::get('/admin', 'HomeController@admin');

        Route::get('/category', 'CategoryController@index');
        Route::post('/category', 'CategoryController@store')->name('storeCategory');
        Route::get('/category/edit/{id}', 'CategoryController@edit')->name('editCategory');
        Route::put('/category/edit/{id}', 'CategoryController@update')->name('updateCategory');
        Route::delete('/category/delete/{id}', 'CategoryController@destroy')->name('deleteCategory');

        Route::get('/item', 'ItemController@index');
        Route::post('/item', 'ItemController@store')->name('storeItem');
        Route::get('/item/edit/{id}', 'ItemController@edit')->name('editItem');
        Route::put('/item/edit/{id}', 'ItemController@update')->name('updateItem');
        Route::delete('/item/delete/{id}', 'ItemController@destroy')->name('deleteItem');
    });

    Route::group(['middleware' => 'RoleUser'], function(){
        Route::get('/user', 'HomeController@user');
    });
});