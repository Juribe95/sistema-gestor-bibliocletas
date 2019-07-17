<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    


    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function inicio()
    {
        return view('auth.login');
    }

    public function inicio_admin()
    {
        return view('inicio-admin');
    }

    public function administrar_libros_admin()
    {
        $libs = App\Libro::all();
        $eje = App\Ejemplar::all();
        

        $cont = $eje->count();
        
        return view('administrar-libros-admin', compact('libs', 'cont'));
    }
   
    public function administrar_voluntarios_admin()
    {
        $vol= App\User::all();
        $cd = DB::select('select * from users where id_rol = ?', [2]);
        return view('administrar-voluntarios-admin', compact('cd'));
    }

    public function administrar_beneficiarios_admin()
    {
        $vol= App\User::all();
        $cd = DB::select('select * from users where id_rol = ?', [3]);

        return view('administrar-beneficiarios-admin', compact('cd'));
    }

    public function prestamos_devoluciones()
    {
        $newp = App\Prestamo::all();
        $lib = App\Libro::all();
        
        return view('prestamos-devoluciones', compact('newp', 'lib'));
}
    public function categorias()
    {
        $cate = App\Categoria::all();
        return view('categorias', compact('cate'));
    }

    public function autores()
    {
        $autor = App\Autor::all();
        return view('autores', compact('autor'));
    }

    public function editoriales()
    {
        $edit = App\Editorial::all();
        return view('editoriales', compact('edit'));
    }

    public function reportes()
    {
        return view('reportes');
    }

    public function inicio_beneficiario()
    {
        return view('inicio-beneficiario');
    }

    public function historial_beneficiario()
    {
        return view('historial-beneficiario');
    }

    public function inicio_voluntario()
    {
        return view('inicio-voluntario');
    }

    public function catalogo_voluntario()
    {
        $libs = App\Libro::all();
        $eje = App\Ejemplar::all();

        $cont = $eje->count();
        
        return view('catalogo-voluntario', compact('libs', 'cont'));
    }

    public function catalogo_beneficiario()
    {
        $libs = App\Libro::all();
        $eje = App\Ejemplar::all();

        $cont = $eje->count();
        
        return view('catalogo-beneficiario', compact('libs', 'cont'));
    }

    public function historial_voluntario()
    {
        return view('historial-voluntario');
    }

    public function agregar_ejemplar()
    {
        
        $nserie = App\Libro::all();
        $esta = App\Estado::all();
        return view('agregar-ejemplar', compact('esta', 'nserie'));
    }

    public function editar_libro()
    {
        return view('editar-libro');
    }

    public function eliminar_libro()
    {
        return view('eliminar-libro');
    }

    public function registrar_libro()
    {
        $edit = App\Editorial::all();
        $autor = App\Autor::all();
        $estado = App\Estado::all();
        $cate = App\Categoria::all();

        return view('registrar-libro', compact('edit', 'autor', 'estado', 'cate'));
    }

    public function categoria_registrar()
    {
        return view('categoria_registrar');
    }

    public function autor_registrar()
    {
        return view('autor_registrar');
    }

    public function editorial_registrar()
    {
        return view('editorial_registrar');
    }



// Prestamo de libros

    public function nuevo_prestamo()
    {
        
        return view('nuevo_prestamo');
    }



    public function confirmar_prestamo()
    {
        return view('confirmar_prestamo');
    }


// Fin Prestamo de libros





    public function cap_libro($n_serie)
    {

        $esta = App\Estado::all();
        $n_serie = App\Libro::findOrFail($n_serie);
        return view('agregar-ejemplar', compact('n_serie', 'esta'));
    }

    //Libros

    public function insertar_libro(Request $request)
    {
       //return $request->all();

        $request->validate([
         'ISBN'=>['required','min:10','max:13'],
         'titulo'=>['required'],
         'n_paginas'=>['required'],
         'id_editorial'=>['required'],
         'id_estado'=>['required'],
         'id_autor'=>['required'],
         'id_categoria'=>['required']
        ]);

        $nuevo_libro = new App\Libro;
       //$nueva_cate->id = $request->id;
        $nuevo_libro->ISBN = $request->ISBN;
        $nuevo_libro->titulo = $request->titulo;
        $nuevo_libro->n_paginas = $request->n_paginas;
        $nuevo_libro->id_editorial = $request->id_editorial;
        $nuevo_libro->id_estado = $request->id_estado;
        $nuevo_libro->id_autor = $request->id_autor;
        $nuevo_libro->id_categoria = $request->id_categoria;
        $nuevo_libro->save();

        return back()->with('mensaje', 'Libro Insertado');
    }

    //End Libros
    
   
   

   // funciones para la bases de datos


    //categoria

    public function insertar_cate(Request $request)
    {
       //return $request->all();

        $request->validate([
         'nombre_categoria'=>['required','unique:categorias']
        ]);
        

        $nueva_cate = new App\Categoria;
        //$nueva_cate->id = $request->id;
        $nueva_cate->nombre_categoria = $request->nombre_categoria;
        $nueva_cate->save();

        return back()->with('mensaje', 'Categoria Agregada');
    }




    public function update_categoria(Request $request, $id)
    {

        $cate = App\Categoria::findOrFail($id);
        $cate->nombre_categoria = $request->nombre_categoria;

        $cate->save();

        return back()->with('mensaje', 'Categoria Modificada');
    }

    public function categoria_edit($id)
    {
           $cate = App\Categoria::findOrFail($id);
           return view('categoria_edit', compact('cate'));
    }

    public function cagoria_eliminar($id)
    {

        $cateElim = App\Categoria::findOrFail($id);
        $cateElim->delete();

        return back()->with('mensaje', 'Categoria Eliminada');
    }

    //end categoria



    //autor



    public function insertar_autor(Request $request)
    {
        //return $request->all();
        $request->validate([
         'nombre'=>'required',
         'apellido_paterno'=>'required',
         
        ]);

        $nuevo_autor = new App\Autor;
        $nuevo_autor->nombre = $request->nombre;
        $nuevo_autor->apellido_paterno = $request->apellido_paterno;
        $nuevo_autor->apellido_materno = $request->apellido_materno;
        $nuevo_autor->save();

        return back()->with('mensaje', 'Autor Agregado');
    }

    public function recu_ejemplar(Request $request)
    {
        return $request->all();
    }



    public function update_autor(Request $request, $id)
    {

        $aut = App\Autor::findOrFail($id);
        $aut->nombre = $request->nombre;
        $aut->apellido_paterno = $request->apellido_paterno;
        $aut->apellido_materno = $request->apellido_materno;
        $aut->save();

        return back()->with('mensaje', 'Datos del Autor Modificados');
    }

    public function autor_edit($id)
    {
           $aut = App\Autor::findOrFail($id);
           return view('autor/autor_edit', compact('aut'));
    }


    public function autor_eliminar($id)
    {

        $autElim = App\Autor::findOrFail($id);
        $autElim->delete();

        return back()->with('mensaje', 'Autor Eliminado');
    }



//end autor




    //editoriales


    public function insertar_edit(Request $request)
    {
       //return $request->all();

        $request->validate([
         'nombre_editorial'=>['required','unique:editorials']
        ]);


        $nueva_edit = new App\Editorial;
        $nueva_edit->nombre_editorial = $request->nombre_editorial;
        $nueva_edit->save();

        return back()->with('mensaje', 'Editorial Agregada');
    }


    public function update_editorial(Request $request, $id)
    {

        $edit = App\Editorial::findOrFail($id);
        $edit->nombre_editorial = $request->nombre_editorial;
        $edit->save();

        return back()->with('mensaje', 'Datos de la Editorial Modificados');
    }

    public function editorial_edit($id)
    {
           $edit = App\Editorial::findOrFail($id);
           return view('/editoriales/editorial_edit', compact('edit'));
    }


    public function editorial_eliminar($id)
    {

        $editElim = App\Editorial::findOrFail($id);
        $editElim->delete();

        return back()->with('mensaje', 'Editorial Eliminada');
    }

    //end editoriales

    

    //añadir ejemplares


    public function insertar_ejemplar(Request $request)
    {
           //return $request->all();

           $request->validate([
           'codigo'=>['required','unique:ejemplars']
           ]);

           $ejem = new App\Ejemplar;
           $ejem->codigo = $request->codigo;
           $ejem->id_Estado = $request->id_Estado;
           $ejem->N_Serie_Libro = $request->N_Serie_Libro;
           $ejem->save();

           return back()->with('mensaje', 'Se agregegó un nuevo ejemplar');
    }



    public function update_ejemplar(Request $request, $n_serie)
    {

        $ejem = App\Ejemplar::findOrFail($n_serie);
        $ejem->n_serie = $request->N_Serie_Libro;
        $ejem->save();

        return back()->with('mensaje', 'Datos de la Editorial Modificados');
    }

    public function recu_nserie($n_serie)
    {
            
            $ejem = App\Ejemplar::findOrFail($n_serie);
           return view('agregar-ejemplar', compact('ejem'));
    }



    // end ejemplares



    //funciones de Libros



    public function enviarnserie($n_serie)
    {

        $nserie = App\Ejemplar::findOrFail($n_serie);
        $contejem = DB::select('select codigo from ejemplars where N_Serie_Libro = ?', [$nserie]);
        $contejem = $contejem->count();
        return view('administrar-libros-admin', compact('contejem'));


    }

    //End Libos
}
