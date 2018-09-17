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
    return view('page.principal');
});

/* Rutas para la pagina en español*/

/*Route::get('/', function () {
    return view('es.inicio');
})->name('es-inicio');*/

/*Nosotros en español e ingles*/
Route::get('nosotros', function () {
    return view('es.nosotros');
})->name('es-nosotros');

Route::get('en-nosotros', function () {
    return view('en.nosotros');
})->name('en-nosotros');


/*Productos en español e ingles*/
Route::get('productos', function () {
    return view('es.productos');
})->name('es-productos');

Route::get('en-productos', function () {
    return view('en.productos');
})->name('en-productos');

/*Contacto en español e ingles*/
Route::get('contacto', function () {
    return view('es.contacto');
})->name('es-contacto');

Route::get('en-contacto', function () {
    return view('en.contacto');
})->name('en-contacto');

/*Locomotora en español e ingles*/


Route::get('locomotoras', function () {
    return view('es.locomotoras');
})->name('es-locomotoras');

Route::get('en-locomotoras', function () {
    return view('en.locomotoras');
})->name('en-locomotoras');

/*Vagones en español e ingles*/
Route::get('vagones', function () {
    return view('es.vagones');
})->name('es-vagones');

Route::get('en-vagones', function () {
    return view('en.vagones');
})->name('en-vagones');

/*Palas en español e ingles*/
Route::get('palas', function () {
    return view('es.palas');
})->name('es-palas');

Route::get('en-palas', function () {
    return view('en.palas');
})->name('en-palas');

/*Metalmecanica en español e ingles*/
Route::get('metalmecanica', function () {
    return view('es.metalmecanica');
})->name('es-metalmecanica');

Route::get('en-metalmecanica', function () {
    return view('en.metalmecanica');
})->name('en-metalmecanica');

/*Seervicios en español e ingles*/

Route::get('servicios', function () {
    return view('es.servicios');
})->name('es-servicios');

Route::get('en-servicios', function () {
    return view('en.servicios');
})->name('en-servicios');

/* -----------------------------------  */

/* Rutas para las locomotoras */
Route::get('wr8', function () {
    return view('es.loco.wr8');
})->name('es-wr8');

Route::get('wr9', function () {
    return view('es.loco.wr9');
})->name('es-wr9');

Route::get('wr19', function () {
    return view('es.loco.wr19');
})->name('es-wr19');

Route::get('wr20', function () {
    return view('es.loco.wr20');
})->name('es-wr20');

Route::get('wr25', function () {
    return view('es.loco.wr25');
})->name('es-wr25');

Route::get('wr35', function () {
    return view('es.loco.wr35');
})->name('es-wr35');

Route::get('wr50', function () {
    return view('es.loco.wr50');
})->name('es-wr50');

Route::get('wr30t', function () {
    return view('es.loco.wr30t');
})->name('es-wr30t');

Route::get('wr60t', function () {
    return view('es.loco.wr60t');
})->name('es-wr60t');

Route::get('wr90t', function () {
    return view('es.loco.wr90t');
})->name('es-wr90t');

Route::get('wr120t', function () {
    return view('es.loco.wr120t');
})->name('es-wr120t');

Route::get('wr150t', function () {
    return view('es.loco.wr150t');
})->name('es-wr150t');


Route::get('/', 'HomeController@index')->name('es-inicio');
Route::get('/en', 'HomeController@enindex')->name('en-inicio');



/* Rutas para la pagina del administrador*/
//-- CRUD --//
//vista para la

Route::get('/noticias','Admin\NoticiasController@index')->name('noticias.view');

//Para la edición
Route::get('/noticias/{id}','Admin\NoticiasController@edit')->name('noticias.edit');

//Para guardar la edicion
Route::post('/noticias/{id}/update','Admin\NoticiasController@update')->name('noticias.update');


//Para la creacion
Route::get('/create/noticias','Admin\NoticiasController@create')->name('noticias.create');

//Para Guardar en la base de datos
Route::post('/noticias','Admin\NoticiasController@store')->name('noticias.store');

//para borrar la noticia
Route::delete('/noticias/{id}','Admin\NoticiasController@delete')->name('noticias.delete');