<?php $__env->startSection('title','Registrar Beneficiario'); ?>

<?php $__env->startSection('content'); ?>


<?php $__env->startSection('parte1'); ?>
    <div class="row">
        <div class="col-md-10">
            <h4>Administrar Beneficiario</h4>
        </div>
        <div class="col-md-2">
                <a href="registrar-beneficiario" class="btn btn-primary btn-sm" role="button" >Registrar Beneficiario</a>
        </div>

    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('parte2'); ?>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
              <th scope="col">Botones</th>
              <th scope="col">Nombre</th>
              <th scope="col">Direccion</th>
              <th scope="col">Correo Electronico</th>
              <th scope="col">Telefono</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">
                <a href="agregar-ejemplar" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Historial</a>
                <a href="editar-libro" class="btn btn-secondary btn-sm" role="button" >Editar</a>
                <a href="eliminar-libro" class="btn btn-secondary btn-sm" role="button" >Eliminar</a>
              </th>
              <td>Juan Perez</td>
              <td>2</td>
              <td>jperez@gmail.com</td>
              <td>912345678</td>
              
            </tr>
            <tr>
                    <th scope="row">
                      <a href="agregar-ejemplar" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Historial</a>
                      <a href="editar-libro" class="btn btn-secondary btn-sm" role="button" >Editar</a>
                      <a href="eliminar-libro" class="btn btn-secondary btn-sm" role="button" >Eliminar</a>
                    </th>
                    <td>Juan Perez</td>
                    <td>2</td>
                    <td>jperez@gmail.com</td>
                    <td>912345678</td>
                    
                  </tr>
                  <tr>
                        <th scope="row">
                          <a href="agregar-ejemplar" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Historial</a>
                          <a href="editar-libro" class="btn btn-secondary btn-sm" role="button" >Editar</a>
                          <a href="eliminar-libro" class="btn btn-secondary btn-sm" role="button" >Eliminar</a>
                        </th>
                        <td>Juan Perez</td>
                        <td>2</td>
                        <td>jperez@gmail.com</td>
                        <td>912345678</td>
                        
                      </tr>
          </tbody>
    </table>
  </div>
<?php $__env->stopSection(); ?>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('plantilla-tabla-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sgb\resources\views/administrar-beneficiarios-admin.blade.php ENDPATH**/ ?>