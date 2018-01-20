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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//route to Main Landing page
Route::get('/mainlanding', function () {
    return view('mainlanding');
});


//route to New Test page
Route::get('/createtest', function () {
    return view('createtest');
});

//route to View Test page
Route::get('/view', function () {
    return view('view');
});