<?php
  include('config/connect.php');
  $course = $_POST['course'];
  $studentId = $_POST['id'];
  
  //$sqlCourse = "SELECT * FROM plochart1";

  //make quaries and get results
  //$result = mysqli_query($conn, $sqlCourse);

  // $plos = '';
  // $achievedMarks = '';

  // while($rows = mysqli_fetch_array($result)){
  //   $plo = $rows['ploNo'];
  //   $achievedMark = $rows['achievedMarks'];

  //   $plos = $plos.'"'.$plo.'",';
  //   $achievedMarks = $achievedMarks.$achievedMark.',';
  // }

  // $plos = trim($plos, ",");
  // $achievedMarks = trim($achievedMarks, ",");

  $query1 = "CREATE VIEW studentplo AS 
	            SELECT c.achievedMarks, c.ploNo
    	          FROM tbl_co AS c
    		            WHERE c.courseTitle = '$course' AND c.studentId = $studentId AND c.achievedMarks >= 40";
  mysqli_query($conn, $query1);

  $query2 = "SELECT * FROM studentplo";

  $result1 = mysqli_query($conn, $query2);
  $plos = '';
  $achievedMarks = '';

  while($rows = mysqli_fetch_array($result1)){
    $plo = $rows['ploNo'];
    $achievedMark = $rows['achievedMarks'];

    $plos = $plos.'"'.$plo.'",'; 
    $achievedMarks = $achievedMarks.$achievedMark.',';
  }

  $plos = trim($plos, ",");
  $achievedMarks = trim($achievedMarks, ",");

  $query3 = "SELECT AVG(c.achievedMarks) AS achievedMarks, c.ploNo
	            FROM tbl_co AS c
    	          JOIN studentplo AS p1
        	          ON c.ploNo = p1.ploNo
            	        WHERE c.courseTitle = '$course'
                        GROUP BY c.coNo
                	        ORDER BY c.ploNo";

  $result2 = mysqli_query($conn, $query3);
  //$plos2 = '';
  $avgMarks = '';

  while($rows = mysqli_fetch_array($result2)){
    //$plo = $rows['ploNo'];
    $avgMark = $rows['achievedMarks'];

    //$plos2 = $plos2.'"'.$plo.'",'; 
    $avgMarks = $avgMarks.$avgMark.',';
  }
  
  //$plos2 = trim($plos2, ",");
  $avgMarks = trim($avgMarks, ",");

  $query4 = "DROP VIEW studentplo";
  mysqli_query($conn, $query4);
  //  while ($row = $result->fetch_assoc()) {
  //    echo $row['achievedMarks']." ".$row['ploNo']."<br>";
  //  }

  //echo $result;
    
  //fetch the resulting rows as array
  //$courseArray = mysqli_fetch_all($result, MYSQLI_ASSOC);

  // foreach($courseArray as $course){
  //      $courseId = $course['courseId']."<br>";
  // }

  //fee reslut from memory
  //mysqli_free_result($result);

  //close connection
  mysqli_close($conn);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chart 1.1</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <!-- AREA CHART -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Area Chart</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="areaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            
          </div>
          <!-- /.col (LEFT) -->
          <div class="col-md-6">
            <!-- BAR CHART -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Bar Chart</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
          <!-- /.col (RIGHT) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Add Content Here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  // var barChartCanvas = document.getElementById("barChart");
  // var barChartData = {
  //   labels  : [<?php echo $plos?>],
  //   datasets: [{
  //     label               : 'PLO',
  //     backgroundColor     : 'rgba(60,141,188,0.9)',
  //     borderColor         : 'rgba(60,141,188,0.8)',
  //     pointRadius         : false,
  //     pointColor          : '#3b8bba',
  //     pointStrokeColor    : 'rgba(60,141,188,1)',
  //     pointHighlightFill  : '#fff',
  //     pointHighlightStroke: 'rgba(60,141,188,1)',
  //     data: [<?php echo $achievedMarks?>]
  //   }]
  // }
  // var barChartOptions = {
  //     responsive              : true,
  //     maintainAspectRatio     : false,
  //     datasetFill             : false
  //   }

  //   new Chart(barChartCanvas, {
  //     type: 'bar',
  //     data: barChartData,
  //     options: barChartOptions
  //   })


  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

    var areaChartData = {
      labels  : [<?php echo $plos?>],
      datasets: [
        {
          label               : 'Individual Student',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius         : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [<?php echo $achievedMarks?>]
         },
          {
           label               : 'All Students',
           backgroundColor     : 'rgba(210, 214, 222, 1)',
           borderColor         : 'rgba(210, 214, 222, 1)',
           pointRadius         : false,
           pointColor          : 'rgba(210, 214, 222, 1)',
           pointStrokeColor    : '#c1c7d1',
           pointHighlightFill  : '#fff',
           pointHighlightStroke: 'rgba(220,220,220,1)',
           data                : [<?php echo $avgMarks?>]
         },
      ]
    }

    var areaChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    }

    // This will get the first returned node in the jQuery collection.
    new Chart(areaChartCanvas, {
      type: 'line',
      data: areaChartData,
      options: areaChartOptions
    })


    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = $.extend(true, {}, areaChartData)
    var temp0 = areaChartData.datasets[0]
    var temp1 = areaChartData.datasets[1]
    barChartData.datasets[0] = temp1
    barChartData.datasets[0] = temp0

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    new Chart(barChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    })
  })
</script>
</body>
</html>