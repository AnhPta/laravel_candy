<?php

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
// Route::get('/', [
//     'uses'=> 'FrontendController@index',
//     'as' => 'frontend.index'
// ]);
// Route::get('/home', [
//     'uses'=> 'FrontendController@index',
//     'as' => 'frontend.index'
// ]);

// Route::get('/registers', [
//     'uses'=> 'FrontendController@registers',
//     'as' => 'signup'
// ]);
// Route::post('/registers',[
//     'uses'=> 'FrontendController@postregisters',
//     'as' => 'signup'
// ]);

// Route::get('/cart', [
//     'uses'=> 'FrontendController@cart',
//     'as' => 'frontend.cart'
// ]);

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
