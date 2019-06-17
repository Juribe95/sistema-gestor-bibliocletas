
@extends('plantilla-tabla-admin')

@section('title','Administrar Libros')

@section('content')


@section('parte1')
    <div class="row">
        <div class="col-md-10">
            <h4>Administrar Libros</h4>
        </div>
        <div class="col-md-2">
                <a href="registrar-libro" class="btn btn-primary btn-sm" role="button" >Registrar Libro</a>
        </div>

    </div>
@endsection


@section('parte2')
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
              <th scope="col">Botones</th>
              <th scope="col">ISBN</th>
              <th scope="col">Titulo</th>
              <th scope="col">Ejemplar</th>
              <th scope="col">Disponibles</th>
              <th scope="col">Categoria</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">
                <a href="agregar-ejemplar" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Añadir Ejemplar</a>
                <a href="editar-libro" class="btn btn-secondary btn-sm" role="button" >Editar</a>
                <a href="eliminar-libro" class="btn btn-secondary btn-sm" role="button" >Eliminar</a>
              </th>
              <td>654984651</td>
              <td>Caperucita roja</td>
              <td>5</td>
              <td>2</td>
              <td>Infantil</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="agregar-ejemplar" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Añadir Ejemplar</a>
                <a href="editar-libro" class="btn btn-secondary btn-sm" role="button" aria-pressed="true">Editar</a>
                <a href="#" class="btn btn-secondary btn-sm" role="button" aria-pressed="true">Eliminar</a>
             
            </th>
              <td>6848462824</td>
              <td>Harry Potter</td>
              <td>3</td>
              <td>3</td>
              <td>Fantasia</td>
            </tr>
            <tr>
              <th scope="row">
                <a href="agregar-ejemplar" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Añadir Ejemplar</a>
                <a href="editar-libro" class="btn btn-secondary btn-sm" role="button" aria-pressed="true">Editar</a>
                <a href="eliminar-libro" class="btn btn-secondary btn-sm" role="button" aria-pressed="true">Eliminar</a>
              </th>
              <td>468465468</td>
              <td>Los 3 Cerditos</td>
              <td>6</td>
              <td>1</td>
              <td>Infantil</td>
            </tr>
          </tbody>
    </table>
  </div>
@endsection

@endsection


