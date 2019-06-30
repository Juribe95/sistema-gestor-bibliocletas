
@extends('layouts.plantilla-tabla-admin')

@section('title','Reportes')

@section('content')
    @section('parte1')

    @endsection
    @section('parte3')
    <div class="row">


      <div class="col-md-12">

        <h1>Reportes</h1>
        @section('parte3')
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
        @endsection

        {{--  <div id="piechart"></div>  --}}

        {{--  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

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
        </script>  --}}
      </div>

    </div>

    @endsection
@endsection
