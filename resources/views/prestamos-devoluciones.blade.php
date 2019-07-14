
@extends('layouts.plantilla-tabla-admin')

@section('title','Prestamos y Devoluciones')

@section('content')


@section('parte1')
<div class="row">
  <div class="col-md-10">
    <h4>Prestamos y Devoluciones</h4>
  </div>
  <div class="col-md-2">
    <a href="nuevo_prestamo" class="btn btn-primary btn-sm" role="button" >Nuevo Prestamo</a>
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
        <th scope="col">Libro</th>
        <th scope="col">Correo Electronico</th>
        <th scope="col">Inicio Prestamo</th>
        <th scope="col">Fin Prestamo</th>
      </tr>
    </thead>
    <tbody>

     @foreach ($newp as $element)
       <tr>
        <th scope="row">
          <a href="#" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Devuelto</a>
        </th>
        <td>ISBN</td>
        <td>Caperucita roja</td>
        <td>Juan Perez</td>
        <td>{{ $element->fecha_prestamo }}</td>
        <td>{{ $element->fecha_devolucion }}</td>
      </tr>
     @endforeach
        
      

    </tbody>
  </table>
</div>
@endsection

@endsection



