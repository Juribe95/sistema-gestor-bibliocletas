
@extends('layouts.plantilla-tabla-admin')

@section('title','Registrar Beneficiario')

@section('content')


@section('parte1')
    <div class="row">
        <div class="col-md-10">
            <h4>Administrar Beneficiario</h4>
        </div>
        <div class="col-md-2">
                <a href="{{ route('register') }}" class="btn btn-primary btn-sm" role="button" >Registrar Beneficiario</a>
                
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
              <th scope="col">Nombre</th>
              <th scope="col">Correo Electronico</th>
              <th scope="col">Telefono</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($cd as $element)
              <tr>
              <th scope="row">
                <a href="agregar-ejemplar" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Historial</a>
                <a href="editar-libro" class="btn btn-secondary btn-sm" role="button" >Editar</a>

                <form action="{{ route('beneficiario.eliminar', $element->rut) }}" method="post" class="  d-inline">
                    @method('DELETE')
                    @csrf
                    
                    <button class="btn btn-primary btn-sm" type="submit">Eliminar</button>
                  </form>

              </th>
              <td>{{ $element->name }}</td>
              <td>{{ $element->email }}</td>
              <td>{{ $element->telefono }}</td>
            </tr>
            @endforeach
            
            
                  
          </tbody>
    </table>
  </div>
@endsection

@endsection


