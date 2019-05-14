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
