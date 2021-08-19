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
                    ASSESSMENT
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="data-input.php" method="POST">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Assessment name</label>
                        <input type="text" name="assessment_name" class="form-control" placeholder="Enter the assessment name (midterm/final/assignment)">
                      </div>
                      <div class="form-group">
                        <label>Assessment weight</label>
                        <input type="text" name="assessment_weight" class="form-control" placeholder="Enter total marks of the assessment">
                      </div>
                      <div class="form-group">
                        <label>Assessment weight (converted)</label>
                        <input type="text" name="assessment_converted_weight" class="form-control" placeholder="Enter converted total marks of the assessment">
                      </div>
                      <div class="form-group">
                        <label>Total marks obtained</label>
                        <input type="text" name="total_marks_obtained" class="form-control" placeholder="Enter total marks obtained by the student">
                      </div>
                      <div class="form-group">
                        <label>Total marks obtained (converted)</label>
                        <input type="text" name="converted_total_marks_obtained" class="form-control" placeholder="Enter converted total marks obtained by the student">
                      </div>
                      <div class="form-group">
                        <label>Course</label>
                        <input type="text" name="course" class="form-control" placeholder="Enter course ID (Ex: csc101...etc)">
                      </div>
                      <div class="form-group">
                        <label>Student ID</label>
                        <input type="text" name="student_id" class="form-control" placeholder="Enter the student ID">
                      </div>
                    </div>      
                  </div>
                  <div class="footer">
                    <button formtarget="_blank" type="submit" class="btn btn-primary"><i class="fas fa-database"></i> save</button>
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
                    QUESTION
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="data-input.php" method="POST">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Question no</label>
                        <input type="text" name="question_no" class="form-control" placeholder="Enter the question number (Ex: q1...etc)">
                      </div>
                      <div class="form-group">
                        <label>Marks</label>
                        <input type="text" name="marks" class="form-control" placeholder="Enter marks assigned to the question">
                      </div>
                      <div class="form-group">
                        <label>Obtained marks</label>
                        <input type="text" name="obtained_marks" class="form-control" placeholder="Enter marks obtained my the student in the question">
                      </div>
                      <div class="form-group">
                        <label>Assessment</label>
                        <input type="text" name="question_assessment_name" class="form-control" placeholder="Enter the assessment the question belong to (Ex: midterm...etc)">
                      </div>
                      <div class="form-group">
                        <label>Student ID</label>
                        <input type="text" name="question_student_id" class="form-control" placeholder="Enter the student ID">
                      </div>
                    </div>      
                  </div>
                  <div class="footer">
                    <button formtarget="_blank" type="submit" class="btn btn-primary"><i class="fas fa-database"></i> save</button>
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