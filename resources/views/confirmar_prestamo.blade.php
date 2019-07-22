@extends('layouts.plantilla-tabla-admin')

@section('title','Confirmar Prestamo')

@section('content')

@section('parte1')
<div class="row"><h4>Confirmar Prestamo</h4></div>
<div class="row">
	<div class="col-md-8">
		
		

			
			
			
			
			
			
		</div>
	</div>
	@endsection
	@section('parte2')
	@if (session('mensaje'))
            <div class="alert alert-success" role="alert">
                {{ session('mensaje') }}
            </div>
            @endif
	<form action="{{ route('insertar_pedido') }}" method="POST">
		@csrf 
		<div class="row form-group">
			<div class="col-md-3">

				<p>Cliente</p>
				<select class="form-control" name="id_cliente" id="id_cliente">
					@foreach ($cd as $element)
					<option value="{{ $element->rut }}">{{ $element->name }}</option>
					@endforeach




				</select>
			</div>
			<div class="col-md-3">
				<p>Inicio</p>
				<input type="date" name="fecha_inicio" id="fecha_inicio" class="form-control" >
			</div>
			<div class="col-md-3">
				<p>Fin</p>
				<input type="date" name="fecha_fin" id="fecha_fin" class="form-control" >
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
						<th scope="col">Titulo</th>
						<th scope="col">Ejemplar</th>




					</tr>
				</thead>
				<tbody>
					@foreach ($res as $item)
					<input type="hidden" name="n_serie" id="n_serie" value="{{ $item->n_serie }}">
					@php
					$nser = $item->n_serie;
					$ejem = obtener_ejemp($nser);
					$cont = contador_ejemplares($nser);




					@endphp

					<th scope="col">{{ $item->ISBN }}</th>
					<th scope="col">{{ $item->titulo }}</th>
					<th scope="col">
						<select class="form-control" name="codigoEjem" 
						id="codigoEjem">

						@foreach ($codigoEjem as $cod)
						<option>{{ $cod->codigo }}</option>
						
						@endforeach

						</select>
					
				</th>
				
				@endforeach

			</tbody>
		</table>
	</div>
</div>
</form>


@endsection
@endsection