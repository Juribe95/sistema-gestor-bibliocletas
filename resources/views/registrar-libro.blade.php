@extends('layouts.plantilla-tabla-admin')

@section('title','Registrar Libro')

@section('content')
@section('parte1')

@endsection
@section('parte2')
<div class="row">
<div class="col-md-6 offset-md-3">
<div class="card">
    <div class="card-header">
        <h4>Registrar Libro</h4>

        
    </div>

    <div class="card-body">

        <form action="{{ route('libro.insertar_libro') }}" method="POST">
            @csrf  
            <div class="form-row">
              <div class="form-group col-md-6">
                <label>ISBN</label>
                <input  class="form-control" name="ISBN" id="isbn" placeholder="ISBN">
            </div>
            <div class="form-group col-md-6">
                <label for="">Titulo</label>
                <input type="" class="form-control" name="titulo" id="titulo" placeholder="Titulo">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>N° Paginas</label>
                <input  class="form-control" name="n_paginas" id="n_paginas" placeholder="N° Paginas">
            </div>
            <div class="form-group col-md-6">
                <label>Editorial</label>
                <select class="form-control" name="id_editorial" id="">

                    @foreach ($edit as $item)
                    <option value="{{ $item->id }}">{{ $item->nombre_editorial }}</option>
                    @endforeach

                </select>

            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="">Autor</label>
                <select class="form-control" name="id_autor" id="">

                    @foreach ($autor as $aut)
                    <option value="{{ $aut->id }}">{{ $aut->nombre }} {{ $aut->apellido_paterno }}</option>
                    @endforeach

                </select>
            </div>
            
            <div class="form-group col-md-6">
                <label>Estado</label>
                <select class="form-control" name="id_estado" id="">

                    @foreach ($estado as $est)
                    <option value="{{ $est->id }}">{{ $est->nombre_estado }}</option>
                    @endforeach

                </select>
            </div>
        </div>
        <div class="form-row">
            
            <div class="form-group col-md-6">
                <label>Categoria</label>
                <select class="form-control" name="id_categoria" id="">

                    @foreach ($cate as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->nombre_categoria }}</option>
                    @endforeach

                </select>
            </div>

            
            
            
            
        </div>
        
        <div class="form-row">
            <div class="form-group col-md-6">
                <button type="submit" class="btn btn-primary">Registrar Libro</button>
            </div>
            <div class="form-group col-md-6">
                <button type="reset" class="btn btn-primary">Limpiar Campos</button>
            </div>
        </div>

        <div class="card-footer">
            @if (session('mensaje'))
            <div class="alert alert-success" role="alert">
                {{ session('mensaje') }}
            </div>
            @endif
            
        </div>

        
        
    </form>

    

    
    
</div>
</div>
</div>
</div>
@endsection
@section('parte3')

@endsection
@endsection
