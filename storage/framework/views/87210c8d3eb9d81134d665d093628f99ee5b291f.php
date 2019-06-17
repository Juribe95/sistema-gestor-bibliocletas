<?php $__env->startSection('title','Administrar Voluntarios'); ?>

<?php $__env->startSection('content'); ?>

<?php $__env->startSection('parte1'); ?>
<div class="row">
        <div class="col-md-10">
            <h4>Administrar Voluntarios</h4>
        </div>
        <div class="col-md-2">
                <a href="registrar-voluntario" class="btn btn-primary btn-sm" role="button" >Registrar Voluntario</a>
        </div>

    </div>
<?php $__env->stopSection(); ?>

    <?php $__env->startSection('parte2'); ?>
    <div class="table-responsive-sm">
            <table class="table">
                    <thead>
                            <tr>
                              <th scope="col">Nombre Completo</th>
                              <th scope="col">Direccion</th>
                              <th scope="col">Correo Electronico</th>
                              <th scope="col">Telefono</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">Juan Uribe</th>
                              <td>Pedro Aguirre Cerda 555</td>
                              <td>@inacapmail.cl</td>
                              <td>912345678</td>
                            </tr>
                            <tr>
                                    <th scope="row">Juan Uribe</th>
                                    <td>Pedro Aguirre Cerda 555</td>
                                    <td>@inacapmail.cl</td>
                                    <td>912345678</td>
                                  </tr>
                                  <tr>
                                        <th scope="row">Juan Uribe</th>
                                        <td>Pedro Aguirre Cerda 555</td>
                                        <td>@inacapmail.cl</td>
                                        <td>912345678</td>
                                      </tr>
                          </tbody>
            </table>
          </div>
    <?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Plantilla-tabla-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\informatica3\Documents\sgb\resources\views/administrar-voluntarios-admin.blade.php ENDPATH**/ ?>