
@extends('plantilla-tabla-admin')

@section('title','Editoriales')

@section('content')


@section('parte1')
    <div class="row">
        <div class="col-md-10">
            <h4>Editoriales</h4>
        </div>
        <div class="col-md-2">
                <a href="#" class="btn btn-primary btn-sm" role="button" >Nueva Editorial</a>
        </div>

    </div>
@endsection


@section('parte2')
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
              <th scope="col">Botones</th>
              <th scope="col">Nombre Editorial</th>
              
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">
                <a href="agregar-ejemplar" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Editar</a>
                <a href="agregar-ejemplar" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Eliminar</a>
              </th>
              <td>Mc Graw</td>
              
              
            </tr>
            <tr>
                    <th scope="row">
                      <a href="agregar-ejemplar" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Editar</a>
                      <a href="agregar-ejemplar" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Eliminar</a>
                    </th>
                    <td>Santillama</td>
                    
                    
                  </tr>
                  <tr>
                        <th scope="row">
                          <a href="agregar-ejemplar" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Editar</a>
                          <a href="agregar-ejemplar" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Eliminar</a>
                        </th>
                        <td>era</td>
                        
                        
                      </tr>
          </tbody>
    </table>
  </div>
@endsection

@endsection






