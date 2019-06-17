@extends('Plantilla-admin')

@section('title','Agregar Ejemplar')

@section('content')
    @section('parte1')
        <h4>Añadir nuevo Ejemplar</h4>
    @endsection
    @section('parte2')
        <div class="row">

        </div>
        <div class="row">
            <div class="col-md-2">
                <h4>Codigo</h4>
            </div>
            <div class="col-md-10">
                    <input type="text">
            </div>
        </div><br>
        <div class="row">
                <div class="col-md-2">
                    <h4>Estado</h4>
                    
                </div>
                <div class="col-md-10">
                        <select class="dp">
                            <option value="volvo">Disponible</option>
                            <option value="saab">Prestado</option>
                        </select>
                </div>  
        </div>
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                    <a href="agregar-ejemplar" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Añadir Ejemplar</a>
            </div>
            <div class="col-md-4">

            </div>
                
        </div>
        
    @endsection
    @section('parte3')
        
    @endsection
@endsection
