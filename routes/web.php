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
    return view('/about');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



// PROPIEDADES

Route::get('/properties', 'PropertiesController@index');

Route::get('/properties/find/{category}', 'PropertiesController@find');

// Propiedades con AUTH

Route::group(['middleware'=>'admin'],function(){

Route::get('/properties/new', 'PropertiesController@create');

Route::post('/properties', 'PropertiesController@store');

Route::get('/properties/list', 'PropertiesController@list');

Route::get('/properties/{id}/edit', 'PropertiesController@edit');

Route::patch('/properties/{id}', 'PropertiesController@update');

Route::delete('/properties/{id}', 'PropertiesController@destroy');

Route::get('/properties/{id}', 'PropertiesController@show');

});

// Categorias


// NOSOTROS

Route::get('/nosotros', function () {
    return view('/about');
});

// CONTACTO

Route::get('/contacto', 'ContactsController@create');
Route::post('/contacto', 'ContactsController@store');

// BUSQUEDA 

Route::get('/busqueda', 'SearchsController@create');
Route::post('/busqueda', 'SearchsController@store');

// TASACIONES

Route::get('/tasaciones', 'PricingsController@create');
Route::post('/tasaciones', 'PricingsController@store');


