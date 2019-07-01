
@extends('plantilla-voluntario')

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
@endsection


@section('parte2')
<div class="table-responsive">
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
              <tr>
              <th scope="row">

                <a href="" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Reservar</a>

                
                <form action="" method="post" class="d-inline">
                  @method('DELETE')
                  @csrf
                </form>
              </th>
              <td>{{ $item-> ISBN }}</td>
              <td>{{ $item-> titulo }}</td>
              <td>{{ $cont }}
                {{-- <select name="enviars" class="form-control">
                  @foreach ($enviars as $element)
                    <option value="{{ $element->codigo }} " >{{ $element->codigo }}</option>
                  @endforeach
                </select> --}}
                
              </td>
            </tr>
            @endforeach

            
            
          </tbody>
    </table>
  </div>
@endsection

@endsection


