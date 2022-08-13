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
    return view('welcome');
});

Route::get('/hello', function () {
    return response('<h1>Hello world</h1>', 200)
        ->header('Content-Type', 'text/html');
});

Route::get('/hello/plain', function () {
    return response('<h1>Hello world</h1>', 200)
        ->header('Content-Type', 'text/plain');
});

Route::get('/hello/custom-header-value', function () {
    return response('<h1>Hello world</h1>', 200)
        ->header('foo', 'bar');
});
