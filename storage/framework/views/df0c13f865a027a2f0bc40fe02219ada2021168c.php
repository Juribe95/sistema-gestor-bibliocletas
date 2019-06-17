<?php $__env->startSection('title','Agregar Ejemplar'); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startSection('parte1'); ?>
        <h4>Añadir nuevo Ejemplar</h4>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('parte2'); ?>
        <div class="row">

        </div>
        <div class="row">
            <div class="col-md-2">
                <h4>Codigo</h4>
            </div>
            <div class="col-md-10">
                    <input type="text">
            </div>
        </div><br>
        <div class="row">
                <div class="col-md-2">
                    <h4>Estado</h4>
                    
                </div>
                <div class="col-md-10">
                        <select class="dp">
                            <option value="volvo">Disponible</option>
                            <option value="saab">Prestado</option>
                        </select>
                </div>  
        </div>
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                    <a href="agregar-ejemplar" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Añadir Ejemplar</a>
            </div>
            <div class="col-md-4">

            </div>
                
        </div>
        
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('parte3'); ?>
        
    <?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Plantilla-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\informatica3\Documents\sgb\resources\views/agregar-ejemplar.blade.php ENDPATH**/ ?>