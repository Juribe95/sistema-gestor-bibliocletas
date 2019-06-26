
@extends('layouts.plantilla-tabla-admin')

@section('title','Editoriales')

@section('content')


@section('parte1')
    <div class="row">
        <div class="col-md-10">
            <h4>Editoriales</h4>
        </div>
        <div class="col-md-2">
                <a href="editorial_registrar" class="btn btn-primary btn-sm" role="button" >Nueva Editorial</a>
        </div>

    </div>
@endsection


@section('parte2')
@if (session('mensaje'))
                  <div class="alert alert-success" role="alert">
                  {{ session('mensaje') }}
                  </div>
                @endif
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
              <th scope="col">Botones</th>
              <th scope="col">Nombre Editorial</th>
              
            </tr>
          </thead>
          <tbody>


            @foreach ($edit as $item)
              <tr>
              <th scope="row">
                <a href="{{ route('editorial.edit', $item) }}" class="btn btn-primary btn-sm" role="button">Editar</a>

                <form action="{{ route('editorial.eliminar', $item) }}" method="post" class="d-inline">
                  @method('DELETE')
                  @csrf
                 
                  <button class="btn btn-primary btn-sm" type="submit">Eliminar</button>
                </form>
              </th>
              <td>{{ $item-> nombre_editorial }}</td>
            </tr>
            @endforeach


                  
          </tbody>
    </table>
  </div>
@endsection

@endsection






