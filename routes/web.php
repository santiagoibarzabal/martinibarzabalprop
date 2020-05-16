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

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
  ]);

Route::get('/home', 'HomeController@index')->name('home');



// PROPIEDADES

Route::get('/propiedades', 'PropertiesController@index');

Route::get('/propiedades/buscar/{name?}/{id?}', 'PropertiesController@find')->name('filtro');


// Propiedades con AUTH

Route::group(['middleware'=>'admin'],function(){

Route::get('/propiedades/new', 'PropertiesController@create');

Route::post('/propiedades', 'PropertiesController@store');

Route::get('/propiedades/list', 'PropertiesController@list');

Route::get('/propiedades/{id}/edit', 'PropertiesController@edit');

Route::patch('/propiedades/{id}', 'PropertiesController@update');

Route::delete('/propiedades/{slug}', 'PropertiesController@destroy');

});

Route::get('/propiedades/{slug}', 'PropertiesController@show')->name('prop');

Route::post('/propiedades/{id}', 'PropformController@store');

// Categorias


// NOSOTROS

Route::get('/servicios', function () {
    return view('/about');
});

Route::get('/nosotros', function () {
    return view('/martin');
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

// Storage Link 
Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});

Route::get('/sitemap', function () {
   '<?xml version="1.0" encoding="UTF-8"?> 
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"> 
<url>
  <loc>https://ibarzabal.com.ar</loc>
</url>
<url>
  <loc>https://ibarzabal.com.ar/propiedades</loc>
</url>
<url>
  <loc>https://ibarzabal.com.ar/tasaciones</loc>
</url>
<url>
  <loc>https://ibarzabal.com.ar/busqueda</loc>
</url>
<url>
  <loc>https://ibarzabal.com.ar/nosotros</loc>
</url>
<url>
  <loc>https://ibarzabal.com.ar/contacto</loc>
</url>
<url>
  <loc>http://ibarzabal.com.ar/tel:+5491166361321</loc>
</url> '
});