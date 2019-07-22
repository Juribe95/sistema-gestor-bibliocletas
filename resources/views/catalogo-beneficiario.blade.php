
@extends('plantilla-beneficiario')

@section('title','Catalogo de Libros')

@section('content')


@section('parte1')
    <div class="row d-inline">
        <div class="col-md-10">
            <h4>Catalogo de Libros</h4>
        </div>
        <div class="col-md-2 d-inline">
                

        </div>

    </div>
    <div class="form-row">
      <form action="{{ route('buscarLBeneficiario') }}" >
      <label>Buscar libro por Titulo o ISBN</label>
      <div class="row">
        <div class="col-md-8">
          <input type="text" name="dato_buscado" id="dato_buscado" class="  form-control">
        </div>
        <div class="col-md-4">
          <input type="submit"  class="btn btn-primary btn-flat">
        </div>
        <div class="col-md-4"></div></div>
        @if (session('mensaje'))
            <div class="alert alert-success" role="alert">
                {{ session('mensaje') }}
            </div>
            @endif
      </form>
    </div>
@endsection


@section('parte2')
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
              
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


