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

   



