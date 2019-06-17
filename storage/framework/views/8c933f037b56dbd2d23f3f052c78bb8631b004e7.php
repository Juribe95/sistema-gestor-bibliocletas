<?php $__env->startSection('title','Reportes'); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startSection('parte1'); ?>
    
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('parte2'); ?>
    <div class="row">
      <div class="col-md-4">
        
      </div>

      <div class="col-md-4">
        
        <h1>Reportes</h1>

        <div id="piechart"></div>

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

        <script type="text/javascript">
        // Load google charts
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart1);

        // Draw the chart and set the chart values
        function drawChart1() {
          var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Libros Prestados', 10],
          ['Libros en biblioteca', 9],
          ['Libros sin devolver', 2],
          ['Libros Renovados', 2],
          ['Prestamos Por categoria', 4]
        ]);

          // Optional; add a title and set the width and height of the chart
          var options = {'title':'Reportes semanales', 'width':550, 'height':400};

          // Display the chart inside the <div> element with id="piechart"
          var chart = new google.visualization.PieChart(document.getElementById('piechart'));
          chart.draw(data, options);
        }
        </script>
      </div>

      <div class="col-md-4">
        

        
      </div>
    
    </div>
    
    <?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Plantilla-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\informatica3\Documents\sgb\resources\views/reportes.blade.php ENDPATH**/ ?>