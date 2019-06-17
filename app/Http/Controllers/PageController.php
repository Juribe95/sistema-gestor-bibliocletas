<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PageController extends Controller
{
   public function inicio(){
   	return view ('auth.login');
   }

   public function inicio_admin(){
   	return view ('inicio-admin');
   }

   public function administrar_libros_admin(){
   	return view ('administrar-libros-admin');
   }
   
   public function administrar_voluntarios_admin(){
   	return view ('administrar-voluntarios-admin');
   }

   public function administrar_beneficiarios_admin(){
   	return view ('administrar-beneficiarios-admin');
   }

   public function prestamos_devoluciones(){
   	return view ('prestamos-devoluciones');
   }

   public function categorias(){
   	$cate = App\Categoria::all();
   	return view ('categorias', compact('cate'));
   }

   public function autores(){
   	return view ('autores');
   }

   public function editoriales(){
   	return view ('editoriales');
   }

   public function reportes(){
   	return view ('reportes');
   }

   public function inicio_beneficiario(){
   	return view ('inicio-beneficiario');
   }

   public function historial_beneficiario(){
   	return view ('historial-beneficiario');
   }

   public function inicio_voluntario(){
   	return view ('inicio-voluntario');
   }

   public function catalogo_voluntario(){
   	return view ('catalogo-voluntario');
   }

   public function historial_voluntario(){
   	return view ('historial-voluntario');
   }

   public function agregar_ejemplar(){
   	return view ('agregar-ejemplar');
   }

   public function editar_libro(){
   	return view ('editar-libro');
   }

   public function eliminar_libro(){
   	return view ('eliminar-libro');
   }

   public function registrar_libro(){
   	return view ('registrar-libro');
   }



}
