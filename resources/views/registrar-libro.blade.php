@extends('Plantilla-admin')

@section('title','Registrar Libro')

@section('content')
    @section('parte1')
    <div class="container">

        <h4>Registrar Libro</h4>
        <div class="row">

            <div class="col-2">

            </div>

            <div class="col-8">
            <form>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label>ISBN</label>
                            <input  class="form-control" id="" placeholder="ISBN">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="">Titulo</label>
                            <input type="" class="form-control" id="" placeholder="Titulo">
                          </div>
                        </div>
                        <div class="form-row">
                                <div class="form-group col-md-6">
                                        <label>N° Paginas</label>
                                        <input  class="form-control" id="" placeholder="N° Paginas">
                                      </div>
                                      <div class="form-group col-md-6">
                                        <label for="">Año Publicación</label>
                                        <input type="" class="form-control" id="" placeholder="Año Publicación">
                                      </div>
                        </div>
                        <div class="form-row">
                                <div class="form-group col-md-6">
                                        <label>Editorial</label>
                                        <select class="form-control" name="editorial" id="">
                                            <option value="select">Seleccione Editorial</option>
                                        </select>

                                      </div>
                                      <div class="form-group col-md-6">
                                        <label for="">Autor</label>
                                        <select class="form-control" name="Autor" id="">
                                                <option value="select">Seleccione Autor</option>
                                            </select>
                                      </div>
                        </div>
                        <div class="form-row">
                                <div class="form-group col-md-6">
                                        <label>Estado</label>
                                        <select class="form-control" name="Estado" id="">
                                                <option value="select">Seleccione Estado</option>
                                            </select>
                                      </div>
                                      <div class="form-group col-md-6">
                                        <label for="">Idioma</label>
                                        <select class="form-control" name="Idioma" id="">
                                                <option value="select">Seleccione Idioma</option>
                                            </select>
                                      </div>
                        </div>
                        <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Categoria</label>
                                    <select class="form-control" name="Categoria" id="">
                                        <option value="select">Seleccione Categoria</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">

                                </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <button type="submit" class="btn btn-primary">Registrar Libro</button>
                            </div>
                            <div class="form-group col-md-6">
                                <button type="submit" class="btn btn-primary">Limpiar Campos</button>
                            </div>
                    </div>

                        
                        
                      </form>
            </div>

            <div class="col-2">

            </div>
        </div>



    </div>
    @endsection
    @section('parte2')

    @endsection
    @section('parte3')

    @endsection
@endsection
