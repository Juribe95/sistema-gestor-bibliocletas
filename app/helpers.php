<?php

function obtenernombre($nserie){
   $data = DB::table('libros')
   ->where('n_serie', $nserie)
   ->first();
   return $data->titulo;
}
function obtenerisbn($nserie){
   $data = DB::table('libros')
   ->where('n_serie', $nserie)
   ->first();
   return $data->ISBN;
}


function obtenerdatosUser($rut){
  $data = DB::table('users')
  ->where('rut', $rut)
  ->first();
  return $data->email;
} 

function obtener_ejemplares($nserie){
  $data = DB::table('ejemplars')
  ->where('N_Serie_Libro', $nserie)
  ->get();
  $cont = count($data);
  return $cont;
} 

function obtener_ejempl($nserie){
    $data = DB::table('ejemplars')
    ->where('N_Serie_Libro', $nserie)
    ->get();
    $cont = count($data);
    return $cont;
} 


function obtener_disponible($nserie){
    $data = DB::table('ejemplars')->where([
        ['id_Estado', '=', '1'],
        ['N_Serie_Libro', '=', $nserie],
    ])->get();
    $cont = count($data);
    return $cont;
}

function obtener_nserie($dato){
    $data = DB::table('libros')
    ->where([
        ['titulo', '=', $dato],
    ])
    ->orWhere('ISBN', '=', $dato)->first();
    return $data->n_serie;
}



function obtener_ejemp($nserie){
    $data = DB::table('ejemplars')
    ->where([
        ['N_Serie_Libro', '=', $nserie],
    ])->first();
    return $data->codigo;
}

function contador_ejemplares($nserie){
    $data = DB::table('ejemplars')->where([
        ['N_Serie_Libro', '=', $nserie],
    ])->get();
    $cont = count($data);
    return $cont;
}

function obtener_categoria($id_categoria){
   $data = DB::table('categorias')
   ->where('id', $id_categoria)
   ->first();
   return $data->nombre_categoria;
}

function update_estado_ejemplar($codigoEjem){
  $data = DB::table('ejemplars')
            ->where('codigo', $codigoEjem)
            ->update(['id_Estado' => 2]);
   return $data;
}

function update_estado_ejemplar_prestamo($codigoEjem){
  $data = DB::table('ejemplars')
            ->where('codigo', $codigoEjem)
            ->update(['id_Estado' => 1]);
   return $data;
}

function obtener_codEjemplar($id){
    $data = DB::table('prestamos')
    ->where([
        ['id', '=', $id],
    ])->first();
    return $data->prestamo_cod_ejemplar;
}








