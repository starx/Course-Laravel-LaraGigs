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
    return response('<h1>Hello world</h1>');
});

Route::get('/hello/custom-status-code', function () {
    return response('<h1>Hello world</h1>', 202);
});

Route::get('/hello/plain', function () {
    return response('<h1>Hello world</h1>')
        ->header('Content-Type', 'text/plain');
});

Route::get('/hello/custom-header-value', function () {
    return response('<h1>Hello world</h1>')
        ->header('foo', 'bar');
});

Route::get('/hello/{subject}', function ($subject) {
    return response('<h1>Hello '. $subject . '</h1>');
});

/*
 *  Constraint route parameters
 */
Route::get('/hello/number/{id}', function ($id) {
    return response('<h1>Hello number '. $id . '</h1>');
})
->where('id', '[0-9]+');
