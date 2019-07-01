
@extends('layouts.plantilla-tabla-admin')

@section('title','Administrar Voluntarios')

@section('content')

@section('parte1')
<div class="row">
        <div class="col-md-10">
            <h4>Administrar Voluntarios</h4>
        </div>
        <div class="col-md-2">
                <a href="{{ route('register') }}" class="btn btn-primary btn-sm" role="button" >Registrar Voluntario</a>
        </div>

    </div>
@endsection

    @section('parte2')
    <div class="table-responsive-sm">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Acciones</th>
            <th scope="col">Nombre</th>
            <th scope="col">Email</th>
            <th scope="col">Telefono</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($cd as $element)
            <tr>
              <th scope="row">
                <a href="agregar-ejemplar" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Historial</a>
                <a href="editar-libro" class="btn btn-secondary btn-sm" role="button" >Editar</a>
                <a href="eliminar-libro" class="btn btn-secondary btn-sm" role="button" >Eliminar</a>
              </th>
              <td>
                {{ 
                  $element->name, 
                  $element->apellido_paterno,
                  $element->apellido_materno
                }}
              </td>
              <td>{{ $element->email }}</td>
              <td>{{ $element->telefono }}</td>
            </tr>
          @endforeach
                            
                                  
        </tbody>
      </table>
    </div>
    @endsection
@endsection
