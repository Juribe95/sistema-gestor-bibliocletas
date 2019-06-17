<?php $__env->startSection('title','Prestamos y Devoluciones'); ?>

<?php $__env->startSection('content'); ?>


<?php $__env->startSection('parte1'); ?>
    <div class="row">
        <div class="col-md-10">
            <h4>Prestamos y Devoluciones</h4>
        </div>
        <div class="col-md-2">
                <a href="#" class="btn btn-primary btn-sm" role="button" >Nuevo Prestamo</a>
        </div>

    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('parte2'); ?>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
              <th scope="col">Botones</th>
              <th scope="col">ISBN</th>
              <th scope="col">Libro</th>
              <th scope="col">Cliente Electronico</th>
              <th scope="col">Inicio Prestamo</th>
              <th scope="col">Fin Prestamo</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">
                <a href="agregar-ejemplar" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Devuelto</a>
              </th>
              <td>6549846561</td>
              <td>Caperucita roja</td>
              <td>Juan Perez</td>
              <td>01-05-2019</td>
              <td>29-05-2019</td>
              
            </tr>
            <tr>
                    <th scope="row">
                      <a href="agregar-ejemplar" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Devuelto</a>
                    </th>
                    <td>6549846561</td>
                    <td>Caperucita roja</td>
                    <td>Juan Perez</td>
                    <td>01-05-2019</td>
                    <td>29-05-2019</td>
                    
                  </tr>
                  <tr>
                        <th scope="row">
                          <a href="agregar-ejemplar" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Devuelto</a>
                        </th>
                        <td>6549846561</td>
                        <td>Caperucita roja</td>
                        <td>Juan Perez</td>
                        <td>01-05-2019</td>
                        <td>29-05-2019</td>
                        
                      </tr>
          </tbody>
    </table>
  </div>
<?php $__env->stopSection(); ?>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('plantilla-tabla-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\informatica3\Documents\sgb\resources\views/prestamos-devoluciones.blade.php ENDPATH**/ ?>