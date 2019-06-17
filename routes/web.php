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


Auth::routes();

//Route::get('/', 'HomeController@index')->name('home');

// pageController 
Route::get('/', 'PageController@inicio')->name('login');
Route::get('/inicio-admin', 'PageController@inicio_admin')->name('inicio-admin');

Route::get('/administrar-libros-admin', 'PageController@administrar_libros_admin')->name('/administrar-libros-admin');
Route::get('/administrar-voluntarios-admin', 'PageController@administrar_voluntarios_admin')->name('administrar-voluntarios-admin');
Route::get('/administrar-beneficiarios-admin', 'PageController@administrar_beneficiarios_admin')->name('administrar-beneficiarios-admin');
Route::get('/prestamos-devoluciones', 'PageController@prestamos_devoluciones')->name('prestamos-devoluciones');
Route::get('/categorias', 'PageController@categorias')->name('categorias');
Route::get('/autores', 'PageController@autores')->name('autores');
Route::get('/editoriales', 'PageController@editoriales')->name('editoriales');
Route::get('/reportes', 'PageController@reportes')->name('reportes');
Route::get('/inicio-beneficiario', 'PageController@inicio_beneficiario')->name('inicio-beneficiario');
Route::get('/historial-beneficiario', 'PageController@historial_beneficiario')->name('historial-beneficiario');
Route::get('/inicio-voluntario', 'PageController@inicio_voluntario')->name('inicio-voluntario');
Route::get('/catalogo-voluntario', 'PageController@catalogo_voluntario')->name('catalogo-voluntario');
Route::get('/historial-voluntario', 'PageController@historial_voluntario')->name('historial-voluntario');
Route::get('/agregar-ejemplar', 'PageController@agregar_ejemplar')->name('agregar-ejemplar');
Route::get('/editar-libro', 'PageController@editar_libro')->name('editar-libro');
Route::get('/eliminar-libro', 'PageController@eliminar_libro')->name('eliminar-libro');
Route::get('/registrar-libro', 'PageController@registrar_libro')->name('registrar-libro');


