
@extends('plantilla-tabla-admin')

@section('title','Categoria')

@section('content')


@section('parte1')
    <div class="row">
        <div class="col-md-10">
            <h4>Categoria</h4>
        </div>
        <div class="col-md-2">
                <a href="#" class="btn btn-primary btn-sm" role="button" >Nueva Categoria</a>
        </div>

    </div>
@endsection


@section('parte2')
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
              <th scope="col">Botones</th>
              <th scope="col">Nombre Categoria</th>
              
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">
                <a href="agregar-ejemplar" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Editar</a>
                <a href="agregar-ejemplar" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Eliminar</a>
              </th>
              <td>Infantil</td>
              
              
            </tr>
            <tr>
                    <th scope="row">
                      <a href="agregar-ejemplar" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Editar</a>
                      <a href="agregar-ejemplar" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Eliminar</a>
                    </th>
                    <td>Familia</td>
                    
                    
                  </tr>
                  <tr>
                        <th scope="row">
                          <a href="agregar-ejemplar" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Editar</a>
                          <a href="agregar-ejemplar" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Eliminar</a>
                        </th>
                        <td>Comedia</td>
                        
                        
                      </tr>
          </tbody>
    </table>
  </div>
@endsection

@endsection




