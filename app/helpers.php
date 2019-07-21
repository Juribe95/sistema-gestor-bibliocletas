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

function obtener_books($nserie){
    $data = DB::table('libros')
    ->where('titulo', $nserie)
    ->get();
    return $data;
}






