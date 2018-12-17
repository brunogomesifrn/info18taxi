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
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/', 'MotoristaControlador@mostrar')->name('index');
Route::get('/Cadastro', 'MotoristaControlador@mostrarform')->name('form_cadastro_motorista');


Route::group(['prefix' => 'motorista', 'middleware' => 'auth'], function() 
{
	Route::get('/motoristas', 'MotoristaControlador@index')->name('motoristas_index');
	Route::get('/motorista_cadastrar', 'MotoristaControlador@create')->name('motoristas_cadastrar_post');
	Route::get('/motorista_editar', 'MotoristaControlador@edit')->name('motoristas_edit_post');
	Route::get('/motorista_editar/{id}', 'MotoristaControlador@show')->name('motoristas_edit');
	Route::get('/motorista_excluir/{id}', 'MotoristaControlador@destroy')->name('motoristas_destroy_post');
    
    Route::get('/', 'MotoristaControlador@avaliacao')->name('motoristas_avaliacao');
});



/*
Route::get('/', function () {
    return view('index');
});*/