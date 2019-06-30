@extends('layouts.plantilla-tabla-admin')

@section('content')
@section('parte2')
	<div class="row mt-4">
			<div class="col-md-6 offset-md-3 mt-4">
				<div class="card">
					<div class="card-header">
						<h4>Editar Autor</h4>
					</div>

					<div class="card-body">

					<form action="{{ route('autor.update', $aut->id) }}" method="POST">
						@method('PUT')
						@csrf

						

						<div class="form-group row">
						    <label class="col-md-4 col-form-label text-md-right">Nombre</label>
							<div class="col-md-6">
						    <input id="nombre" type="text" class="form-control" name="nombre" value="{{ $aut->nombre }}">
						    </div>
					    </div>
					    <div class="form-group row">
						    <label class="col-md-4 col-form-label text-md-right">Apellido Paterno</label>
							<div class="col-md-6">
						    <input id="apellido_paterno" type="text" class="form-control" name="apellido_paterno" value="{{ $aut->apellido_paterno }}">
						    </div>
					    </div>
					    <div class="form-group row">
						    <label class="col-md-4 col-form-label text-md-right">Apellido Materno</label>
							<div class="col-md-6">
						    <input id="apellido_materno" type="text" class="form-control" name="apellido_materno" value="{{ $aut->apellido_materno }}">
						    </div>
					    </div>
						<div class="form-group row mb-0">
						<div class="col-md-8 offset-md-4">
						<button type="submit" class="btn btn-primary">Modificar</button>
						</div>
						</div>
					</form>
					</div>
					<div class="card-footer">
						@if (session('mensaje'))
							<div class="alert alert-success" role="alert">
								{{ session('mensaje') }}
							</div>
						@endif



					</div>
						

						 
						
				</div>
			</div>
		</div>
@endsection
	

	

		
	
@endsection