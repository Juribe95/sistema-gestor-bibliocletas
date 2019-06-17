<?php $__env->startSection('title','Editar Libro'); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startSection('parte1'); ?>
    <div class="container">

        <h4>Editar Libro</h4>
        <div class="row">

            <div class="col-2">

            </div>

            <div class="col-8">
            <form>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label>ISBN</label>
                            <input  class="form-control" disabled="true" id="" placeholder="6516816465168161">
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
                       <button type="submit" class="btn btn-primary">Modificar Libro</button>
                    </div>

                        
                        
                      </form>
            </div>

            <div class="col-2">

            </div>
        </div>



    </div>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('parte2'); ?>

    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('parte3'); ?>

    <?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Plantilla-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\informatica3\Documents\sgb\resources\views/editar-libro.blade.php ENDPATH**/ ?>