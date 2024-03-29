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

Route::get('', function () {
    return view('/index');
});
Route::get('/page', function(){
    return view('page');
});
Route::get('/contact', function(){
    return view('contact');
});
Route::get('/become-donor', function(){
    return view('become-donor');
});
Route::get('/contacts', function(){
    return view('contacts');
});
