@extends('layouts.plantilla-tabla-admin')

@section('content')
	
	@section('parte2')
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<div class="card">
					<div class="card-header">
						<h4>Registrar Autor</h4>

						
					</div>

					<div class="card-body">

						<form action="{{ route('autors.insertar_autor') }}" method="POST">
							@csrf
{{--  --}}
							
	                        <div class="form-group row">
	                            <label class="col-md-4 col-form-label text-md-right">Nombre</label>

	                            <div class="col-md-6">
	                                <input id="nombre_autor" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}">
	                            </div>
	                        </div>
	                        <div class="form-group row">
	                            <label class="col-md-4 col-form-label text-md-right">Apellido Paterno</label>

	                            <div class="col-md-6">
	                                <input id="apellido_paterno" type="text" class="form-control" name="apellido_paterno" value="{{ old('apellido_paterno') }}">
	                            </div>
	                        </div>
	                        <div class="form-group row">
	                            <label class="col-md-4 col-form-label text-md-right">Apellido Materno</label>

	                            <div class="col-md-6">
	                                <input id="apellido_materno" type="text" class="form-control" name="apellido_materno" value="{{ old('apellido_materno') }}">
	                            </div>
	                        </div>
							<div class="form-group row mb-0">
		                            <div class="col-md-8 offset-md-4">
		                                <button type="submit" class="btn btn-primary">Ingresar</button>
		                            </div>
		                        </div>
							</div>
							<div class="card-footer">
								@if (session('mensaje'))
									<div class="alert alert-success" role="alert">
										{{ session('mensaje') }}
									</div>
								@endif
								@error('nombre')
									<div class="alert alert-success" role="alert">
										El nombre es obligatorio
									</div>
								@enderror
								@error('apellido_paterno')
									<div class="alert alert-success" role="alert">
										El Apellido Paterno es obligatorio
									</div>
								@enderror
								@error('apellido_materno')
									<div class="alert alert-success" role="alert">
										El Apellido Materno es obligatorio
									</div>
								@enderror
							</div>
						</form>

						 
						
					</div>
				</div>
			</div>
		</div>
	@endsection
@endsection