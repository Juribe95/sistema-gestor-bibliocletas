
@extends('plantilla-tabla-admin')

@section('title','Autores')

@section('content')


@section('parte1')
    <div class="row">
        <div class="col-md-10">
            <h4>Autores</h4>
        </div>
        <div class="col-md-2">
                <a href="#" class="btn btn-primary btn-sm" role="button" >Nuevo Autor</a>
        </div>

    </div>
@endsection


@section('parte2')
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
              <th scope="col">Botones</th>
              <th scope="col">Nombre Autor</th>
              
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">
                <a href="agregar-ejemplar" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Editar</a>
                <a href="agregar-ejemplar" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Eliminar</a>
              </th>
              <td>Juan Perez</td>
              
              
            </tr>
            <tr>
                    <th scope="row">
                      <a href="agregar-ejemplar" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Editar</a>
                      <a href="agregar-ejemplar" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Eliminar</a>
                    </th>
                    <td>Juan Pino</td>
                    
                    
                  </tr>
                  <tr>
                        <th scope="row">
                          <a href="agregar-ejemplar" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Editar</a>
                          <a href="agregar-ejemplar" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Eliminar</a>
                        </th>
                        <td>Juan Parra</td>
                        
                        
                      </tr>
          </tbody>
    </table>
  </div>
@endsection

@endsection





