@extends('layouts.plantilla-tabla-admin')

@section('title','Agregar Ejemplar')

@section('content')
    
    @section('parte2')

    <div class="row mt-4">
            <div class="col-md-6 offset-md-3 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Agregar Ejemplar</h4>
                    </div>

                    <div class="card-body">

                    <form action="{{ route('ejemplar.insertar_ejemplar') }}" method="POST">
                        
                        @csrf

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Codigo</label>
                            <div class="col-md-6">
                                <input id="codigo" type="text" class="form-control" name="codigo" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Estado</label>
                            <div class="col-md-6">
                        
                                <select name="id_Estado" class="form-control">
                                @foreach ($esta as $est)
                                  <option value="{{ $est->id }} " >{{ $est->nombre_estado }}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Nombre Libro</label>
                            <div class="col-md-6">
                                <select name="N_Serie_Libro" class="form-control">
                                @foreach ($nserie as $ns)
                                  <option value="{{ $ns->n_serie }} " >{{ $ns->titulo }}</option>
                                @endforeach
                                </select>
                                
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary ">Ingresar</button>
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

                                @error('nombre_categoria')
                                    <div class="alert alert-warning" role="alert">
                                        El Nombre de Categoria es obligatorio
                                    </div>
                                @enderror



                    </div>
                        

                         
                        
                </div>
            </div>
        </div>



        
    @endsection
@endsection
