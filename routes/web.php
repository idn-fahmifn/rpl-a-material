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

/*
Routing Paling Dasar.

kenapa ga pake -r?

kalau yang pake laravel dibawah v.6 gausah pake composer require laravelui

tapi langsung run php artisan make:auth
*/

Route::get('/profile', function(){
    return view('dimas');
});

Route::get('/contoh', 'ContohController@ambil');
Route::resource('example','ExampleController');

Route::match(['get', 'post'], '/contoh', function(){
    return redirect('/');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/task', 'TaskController@index');
Route::get('/task/create', 'TaskController@create');
Route::post('/savetask','TaskController@store');  
Route::get('/taskedit/{id}','TaskController@edit');
Route::put('/taskupdate/{id}','TaskController@update');
Route::get('/task/{id}', 'TaskController@detail');
Route::get('/delete/{id}', 'TaskController@destroy');

Route::resource('profile', 'ProfileController');


Route::view('/tampilan', 'template.template');
