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



Route::get('/', 'HomeController@index')->name('home');
Auth::routes(['verify' => true]);

// pageController
//Route::get('/', 'PageController@inicio')->name('login');
Route::get('/inicio-admin', 'PageController@inicio_admin')->name('inicio-admin')->middleware('verified');

Route::get('/administrar-libros-admin', 'PageController@administrar_libros_admin')->name('administrar-libros-admin');
Route::get('/administrar-voluntarios-admin', 'PageController@administrar_voluntarios_admin')->name('administrar-voluntarios-admin');
Route::get('/administrar-beneficiarios-admin', 'PageController@administrar_beneficiarios_admin')->name('administrar-beneficiarios-admin');
Route::get('/prestamos-devoluciones', 'PageController@prestamos_devoluciones')->name('prestamos-devoluciones');
Route::get('/categorias', 'PageController@categorias')->name('categorias');
Route::get('/autores', 'PageController@autores')->name('autores');
Route::get('/editoriales', 'PageController@editoriales')->name('editoriales');
Route::get('/reportes', 'PageController@reportes')->name('reportes');
Route::get('/inicio-Beneficiario', 'PageController@inicio_beneficiario')->name('inicio-beneficiario');
Route::get('/historial-beneficiario', 'PageController@historial_beneficiario')->name('historial-beneficiario');
Route::get('/inicio-voluntario', 'PageController@inicio_voluntario')->name('inicio-voluntario');

Route::get('/catalogo-voluntario', 'PageController@catalogo_voluntario')->name('catalogo-voluntario');
Route::get('/catalogo-beneficiario', 'PageController@catalogo_beneficiario')->name('catalogo-beneficiario');

Route::get('/historial-voluntario', 'PageController@historial_voluntario')->name('historial-voluntario');
Route::get('/agregar-ejemplar', 'PageController@agregar_ejemplar')->name('agregar-ejemplar');
Route::get('/editar-libro', 'PageController@editar_libro')->name('editar-libro');
Route::get('/eliminar-libro', 'PageController@eliminar_libro')->name('eliminar-libro');
Route::get('/registrar-libro', 'PageController@registrar_libro')->name('registrar-libro');
Route::get('/categoria_registrar', 'PageController@categoria_registrar')->name('categoria_registrar');
Route::get('/autor_registrar', 'PageController@autor_registrar')->name('autor_registrar');
Route::get('/editorial_registrar', 'PageController@editorial_registrar')->name('editorial_registrar');

Route::get('/nuevo_prestamo', 'PageController@nuevo_prestamo')->name('nuevo_prestamo');
Route::get('/confirmar_prestamo', 'PageController@confirmar_prestamo')->name('confirmar_prestamo');

Route::get('/dev', 'PageController@obtenernombre')->name('obtenernombre');



//buscar datos
Route::post('/administrar-libros-admin/{n_serie}', 'PageController@enviarnserie')->name('enviarnserie');


//rutas editar
Route::get('/categoria_edit/{id}', 'PageController@categoria_edit')->name('categoria.edit');
Route::put('/categoria_edit/{id}', 'PageController@update_categoria')->name('categorias.update');

Route::get('/autor/autor_edit/{id}', 'PageController@autor_edit')->name('autor.edit');
Route::put('/autor/autor_edit/{id}', 'PageController@update_autor')->name('autor.update');

Route::get('/editoriales/editorial_edit/{id}', 'PageController@editorial_edit')->name('editorial.edit');
Route::put('/editoriales/editorial_edit/{id}', 'PageController@update_editorial')->name('editorial.update');

Route::post('/agregar-ejemplar/{n_serie}', 'PageController@recu_nserie')->name('ejemplar_edit');
Route::put('/agregar-ejemplar/{n_serie}', 'PageController@update_ejemplar')->name('update.ejemplar');





//rutas de insertar db

Route::post('/registrar-libro', 'PageController@insertar_libro')->name('libro.insertar_libro');

Route::post('/categoria_registrar', 'PageController@insertar_cate')->name('categorias.insertar_cate');
Route::post('/autor_registrar', 'PageController@insertar_autor')->name('autors.insertar_autor');
Route::post('/editorial_registrar', 'PageController@insertar_edit')->name('editorial.insertar_edit');
Route::post('/agregar-ejemplar/', 'PageController@insertar_ejemplar')->name('ejemplar.insertar_ejemplar');


Route::post('/catalogo-beneficiario', 'PageController@recu_ejemplar')->name('recu_ejemplar');


//rutas para eliminar
Route::delete('/categorias/categoria_eliminar/{id}', 'PageController@cagoria_eliminar')->name('categoria.eliminar');
Route::delete('/autor/autor_eliminar/{id}', 'PageController@autor_eliminar')->name('autor.eliminar');
Route::delete('/editoriales/editorial_eliminar/{id}', 'PageController@editorial_eliminar')->name('editorial.eliminar');



//Route::resource('/categorias', 'CategoriaController');
//Route::resource('/agregar-ejemplar', 'NotaController');
//Route::resource('/administrar-libros-admin', 'LibrosController');
