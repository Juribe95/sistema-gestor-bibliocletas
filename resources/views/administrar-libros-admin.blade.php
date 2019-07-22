
@extends('layouts.plantilla-tabla-admin')

@section('title','Administrar Libros')

@section('content')


@section('parte1')
<div class="form-inline">
  <div class="col-ms-8">
    <h4>Administrar Libros</h4>
  </div>
  <div class="col-md-4">
    <a href="registrar-libro" class="btn btn-primary btn-sm" role="button" >Registrar Libro</a>

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
        <th scope="col">Acciones</th>
        <th scope="col">ISBN</th>
        <th scope="col">Titulo</th>
        <th scope="col">Ejemplar</th>
        <th scope="col">Disponibles</th>
        <th scope="col">Categoria</th>
      </tr>
    </thead>
    <tbody>

      @foreach ($libs as $item)
      
      @php
      $nser = $item->n_serie;
      $id_categoria = $item->id_categoria;
      $ejemp = obtener_ejempl($nser);
      $esta = obtener_disponible($nser);
      $nombre_categoria = obtener_categoria($id_categoria);
      @endphp
      
      <tr>
        <th scope="row">

          <a href="{{ route('ejemplar_edit', $item) }}" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Añadir Ejemplar</a>

          <a href="" class="btn btn-primary btn-sm" role="button">Editar</a>
                  {{-- {{ route('libro.eliminar', $item) }}
                  {{ route('libro.edit', $item) }}

                  --}}
                  <form action="{{ route('libro.eliminar', $item->n_serie) }}" method="post" class="d-inline">
                    @method('DELETE')
                    @csrf
                    
                    <button class="btn btn-primary btn-sm" type="submit">Eliminar</button>
                  </form>
                </th>
                <td>{{ $item-> ISBN }}</td>
                <td>{{ $item-> titulo }}</td>
                <td>{{ $ejemp }}</td>
                <td>{{ $esta }}</td>
                <td>{{ $nombre_categoria }}</td>
                
              </tr>
              @endforeach

              
              
            </tbody>
          </table>
        </div>
        @endsection

        @endsection


