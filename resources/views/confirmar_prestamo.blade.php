@extends('layouts.plantilla-tabla-admin')

@section('title','Confirmar Prestamo')

@section('content')

@section('parte1')
<div class="row"><h4>Confirmar Prestamo</h4></div>
	<div class="row">
		<div class="col-md-8">
			<label>Buscar libro por Titulo o ISBN</label>
			<div class="row">
			<div class="col-md-8">
				<input type="search" name="q" class="  form-control">
			</div>
			<div class="col-md-4">
				<input type="submit" class="btn btn-primary">
			</div>
			<div class="col-md-4"></div></div>
			
			
		</div>
	</div>
@endsection
@section('parte2')
<div class="row form-group">
	<div class="col-md-3">
		<p>Cliente</p>
		<select class="form-control" name="id_rol" id="id_rol">
                                    <option value="1">Administrador</option>
                                    <option value="2">Voluntario</option>
                                    <option value="3">Beneficiario</option>
                                </select>
	</div>
	<div class="col-md-3">
		<p>Inicio</p>
		<input type="date" class="form-control" >
	</div>
	<div class="col-md-3">
		<p>Fin</p>
		<input type="date" class="form-control" >
	</div>
	<div class="col-md-3">
		<p></p>
		<br>
		<button class="btn btn-primary" type="submit">Procesar</button>
	</div>
</div>
<div class="row"><div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
              <th scope="col">ISBN</th>
              <th scope="col">Ejemplar</th>
              <th scope="col">Titulo</th>
              <th scope="col">Acciones</th>

            </tr>
          </thead>
          <tbody>
          
                   
          </tbody>
    </table>
  </div>
</div>

@endsection
@endsection