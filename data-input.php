<?php 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data-input</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><b>DATA ENTRY</b></h3>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section>
    <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">
                    CO (Course Outcome)
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="data-input.php" method="POST">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Student ID</label>
                        <input type="text" name="studentId" class="form-control" placeholder="Enter the student ID for CO records">
                      </div>
                      <div class="form-group">
                        <label>Course Title</label>
                        <input type="text" name="courseTitle" class="form-control" placeholder="Enter the title of the course the CO belongs to">
                      </div>
                      <div class="form-group">
                        <label>Achieved Marks in the CO</label>
                        <input type="text" name="COAchievedMarks" class="form-control" placeholder="Enter the achieved marks of the CO">
                      </div>
                      <div class="form-group">
                        <label>CO Number</label>
                        <input type="text" name="coNo" class="form-control" placeholder="Enter the CO no">
                      </div>
                      <div class="form-group">
                        <label>PLO Number</label>
                        <input type="text" name="ploNo" class="form-control" placeholder="Enter number of the PLO the CO is mapped with">
                      </div>
                    </div>      
                  </div>
                  <div class="footer">
                    <button  type="submit" class="btn btn-primary"><i class="fas fa-database"></i> save</button>
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
    </div>
    <!-- /.card -->
    </section>
    <section>
    <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">
                    PLO (Program Learning Outcome)
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="data-input.php" method="POST">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>PLO Number</label>
                        <input type="text" name="ploNo" class="form-control" placeholder="Enter PLO no (Ex: plo1, plo2...etc)">
                      </div>
                      <div class="form-group">
                        <label>Program ID</label>
                        <input type="text" name="programId" class="form-control" placeholder="Enter the program id the PLO belongs to (EX: CSE, EEE, CSC..etc)">
                      </div>
                    </div>      
                  </div>
                  <div class="footer">
                    <button  type="submit" class="btn btn-primary"><i class="fas fa-database"></i> save</button>
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
    </div>
    <!-- /.card -->
    </section>
</div>

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="dist/js/demo.js"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="dist/js/pages/dashboard.js"></script> -->
</body>
</html>