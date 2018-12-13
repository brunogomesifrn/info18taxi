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



Route::get('/criarconta', function () {
    return view('criarconta');
});


Route::get('/fazerlogin', function () {
    return view('login');
});
Route::get('/contato', function () {
    return view('contato');
});
Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/teste', function () {
    return view('teste');
})->middleware('auth');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout')->name('home');


Route::get('/motoristas', 'MotoristaControlador@index')->middleware('auth');
Route::get('/motorista_cadastrar', 'MotoristaControlador@create')->middleware('auth');
Route::get('/', 'MotoristaControlador@mostrar');
/*
Route::get('/', function () {
    return view('index');
});*/