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


Route::view('/', 'Login', ['name' => 'Login']);
Route::view('/inicio-admin', 'inicio-admin', ['name' => 'inicio-admin']);
Route::view('/administrar-libros-admin', 'administrar-libros-admin', ['name' => 'administrar-libros-admin']);
Route::view('/administrar-voluntarios-admin', 'administrar-voluntarios-admin', ['name' => 'administrar-voluntarios-admin']);
Route::view('/administrar-beneficiarios-admin', 'administrar-beneficiarios-admin', ['name' => 'administrar-beneficiarios-admin']);
Route::view('/prestamos-devoluciones', 'prestamos-devoluciones', ['name' => 'prestamos-devoluciones']);
Route::view('/categorias', 'categorias', ['name' => 'categorias']);
Route::view('/autores', 'autores', ['name' => 'autores']);
Route::view('/editoriales', 'editoriales', ['name' => 'editoriales']);
Route::view('/reportes', 'reportes', ['name' => 'reportes']);
Route::view('/inicio-beneficiario', 'inicio-beneficiario', ['name' => 'inicio-beneficiario']);
Route::view('/historial-beneficiario', 'historial-beneficiario', ['name' => 'historial-beneficiario']);
Route::view('/inicio-voluntario', 'inicio-voluntario', ['name' => 'inicio-voluntario']);
Route::view('/catalogo-voluntario', 'catalogo-voluntario', ['name' => 'catalogo-voluntario']);
Route::view('/historial-voluntario', 'historial-voluntario', ['name' => 'historial-voluntario']);
Route::view('/agregar-ejemplar', 'agregar-ejemplar', ['name' => 'agregar-ejemplar']);
Route::view('/editar-libro', 'editar-libro', ['name' => 'editar-libro']);
Route::view('/eliminar-libro', 'eliminar-libro', ['name' => 'eliminar-libro']);
Route::view('/registrar-libro', 'registrar-libro', ['name' => 'registrar-libro']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
