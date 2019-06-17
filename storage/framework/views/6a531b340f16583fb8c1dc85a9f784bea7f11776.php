<?php $__env->startSection('title','Reportes'); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startSection('parte1'); ?>

    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('parte3'); ?>
    <div class="row">


      <div class="col-md-12">

        <h1>Reportes</h1>
        <?php $__env->startSection('parte3'); ?>
        <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

<table id="datatable">
  <thead>
    <tr>
      <th></th>
      <th>Jane</th>
      <th>John</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>Apples</th>
      <td>3</td>
      <td>4</td>
    </tr>
    <tr>
      <th>Pears</th>
      <td>2</td>
      <td>0</td>
    </tr>
    <tr>
      <th>Plums</th>
      <td>5</td>
      <td>11</td>
    </tr>
    <tr>
      <th>Bananas</th>
      <td>1</td>
      <td>1</td>
    </tr>
    <tr>
      <th>Oranges</th>
      <td>2</td>
      <td>4</td>
    </tr>
  </tbody>
</table>
        <?php $__env->stopSection(); ?>

        

        
      </div>

    </div>

    <?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Plantilla-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sgb\resources\views/reportes.blade.php ENDPATH**/ ?>