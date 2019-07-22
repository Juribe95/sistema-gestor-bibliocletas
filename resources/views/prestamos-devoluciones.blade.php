
@extends('layouts.plantilla-tabla-admin')

@section('title','Prestamos y Devoluciones')

@section('content')


@section('parte1')
<div class="row">
  <div class="col-md-10">
    <h4>Prestamos y Devoluciones</h4>
  </div>
  <div class="col-md-2">
    
    <a href="{{ route('nuevo_prestamo') }}" class="btn btn-primary btn-sm" role="button" >Nuevo Prestamo</a>
  </div>

</div>
@endsection


@section('parte2')
<div class="table-responsive">
  @if (session('mensaje'))
                  <div class="alert alert-success" role="alert">
                  {{ session('mensaje') }}
                  </div>
                @endif
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
      
     @php

     $nserie = $element->prestamo_n_serie;
     $rut = $element->usuario_rut;
     $namelibro = obtenernombre($nserie);
     $correo = obtenerdatosUser($rut);
     $is = obtenerisbn($nserie);
     @endphp
      
       <tr>
        <th scope="row">
          <form action="{{ route('prestamo.eliminar', $element->id) }}" method="post" class="d-inline">
                  @method('DELETE')
                  @csrf
                 
                  <button class="btn btn-primary btn-sm" type="submit">Devolver</button>
                </form>
        </th>
        <td>{{ $is }}</td>
        <td>
          {{ $namelibro }}
      </td>
        <td>{{ $correo }}</td>
        <td>{{ $element->fecha_prestamo }}</td>
        <td>{{ $element->fecha_devolucion }}</td>
      </tr>
     @endforeach
        
      

    </tbody>
  </table>
</div>
@endsection

@endsection



