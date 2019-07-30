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
    $hell['hello'] = "hello";
    $hell['things'] = ['pizza', 'hotdogs', 'icecream', 'golf clubs'];
    return view('welcome', $hell);
});
