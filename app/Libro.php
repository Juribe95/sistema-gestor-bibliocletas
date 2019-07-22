<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
   public function scopeBusqueda($query,$dato="")
     {
		$resultado= $query->where('titulo','like','%'.$dato.'%')
            ->orWhere('ISBN','like', '%'.$dato.'%');
                                
        
        return  $resultado;
     }
}
