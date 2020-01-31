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
Route::get('/buy', function () {
    return view('buy');
});
Route::get('/addproduct', function () {
    return view('addproduct');
});
Route::get('/allsell', function () {
    return view('allsell');
});
Route::get('/productpage', function () {
    return view('productpage');
});
Auth::routes();
Route::get('/buylist', 'buyproduct@list');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/list', 'acctype@list');
Route::post('/products', 'products@saveproduct');
Route::get('/allselled', 'allselled@allselllist');
Route::post('/showproduct',"showproduct@show");