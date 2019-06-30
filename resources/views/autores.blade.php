
@extends('layouts.plantilla-tabla-admin')

@section('title','Autores')

@section('content')


@section('parte1')
    <div class="row">
        <div class="col-md-10">
            <h4>Autores</h4>
        </div>
        <div class="col-md-2">
                <a href="autor_registrar" class="btn btn-primary btn-sm" role="button" >Nuevo Autor</a>
        </div>

    </div>
@endsection


@section('parte2')
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
              <th scope="col">Acciones</th>
              <th scope="col">Nombre</th>
              <th scope="col">Apellido Paterno</th>
              <th scope="col">Apellido Materno</th>
              
            </tr>
          </thead>
          <tbody>

            @foreach ($autor as $item)
              <tr>
              <th scope="row">
                <a href="{{ route('autor.edit', $item) }}" class="btn btn-primary btn-sm" role="button">Editar</a>

                <form action="{{ route('autor.eliminar', $item) }}" method="post" class="d-inline">
                  @method('DELETE')
                  @csrf
                 
                  <button class="btn btn-primary btn-sm" type="submit">Eliminar</button>
                </form>
              </th>
              <td>{{ $item-> nombre }}</td>
              <td>{{ $item-> apellido_paterno }}</td>
              <td>{{ $item-> apellido_materno }}</td>
            </tr>
            @endforeach
            
          </tbody>
    </table>
  </div>
@endsection

@endsection





