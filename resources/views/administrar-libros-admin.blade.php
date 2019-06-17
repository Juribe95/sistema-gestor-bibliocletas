
@extends('Plantilla-admin')

@section('title','login')

@section('content')
    @section('parte1')

    @endsection

    @section('parte2')
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
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
    @endsection
@endsection
