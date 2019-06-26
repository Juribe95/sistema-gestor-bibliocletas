@extends('layouts.plantilla-tabla-admin')

@section('content')
@section('parte2')
	<div class="row mt-4">
			<div class="col-md-6 offset-md-3 mt-4">
				<div class="card">
					<div class="card-header">
						<h4>Editar Categoria</h4>
					</div>

					<div class="card-body">

					<form action="{{ route('categorias.update', $cate->id) }}" method="POST">
						@method('PUT')
						@csrf

						

						<div class="form-group row">
					    <label class="col-md-4 col-form-label text-md-right">Nombre Categoria</label>
						<div class="col-md-6">
					    <input id="nombre_categoria" type="text" class="form-control" name="nombre_categoria" value="{{ $cate->nombre_categoria }}">
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