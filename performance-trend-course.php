<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>performance-trend-course</title>

    <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="plugins/dropzone/min/dropzone.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><b>PLO PERFORMANCE TRENDS FOR SELECTED COURSE/s</b></h3>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
  
    <section>
    <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">
                 Comparison of the PLO achieved percentage for
                 each PLO among the instructors who have taken a course
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="plo-chart-2.1.php" method="POST">
                  <div class="row">
                    <div class="col-md-6">
                      <!-- dropdown -->
                      <div class="form-group">
                       <label>Course/s</label>
                       <select name="course" class="select2bs4" data-placeholder="Select course/s" style="width: 100%;">
                        <option value="CSC101">CSC101</option>
                        <option value="CSE201">CSE201</option>
                        <option value="CSE104">CSE104</option>
                        <option value="CSE303">CSE303</option>
                        <option value="CSE214">CSE214</option>
                        <option value="CSE315">CSE315</option>
                       </select>
                      </div>
                      <div class="form-group">
                       <label>Semester/s</label>
                       <select name="semester" class="select2bs4" data-placeholder="Select semester/s" style="width: 100%;">
                        <option value="summer2017">summer2017</option>
                        <option value="autumn2017">autumn2017</option>
                        <option value="autumn2019">autumn2019</option>
                        <option value="autumn2020">autumn2020</option>
                        <option value="summer2019">summer2019</option>
                       </select>
                      </div>
                    </div>      
                  </div>
                  <div class="footer">
                    <button formtarget="_blank" type="submit" class="btn btn-primary"><i class="nav-icon fas fa-chart-pie"></i> Generate Chart</button>
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
                 Comparison of PLO achievement percentage among course/s which have
                 the same PLO/s that was/were selected
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="plo-chart-2.2.php" method="POST">
                 <div class="row">
                    <div class="col-md-6">
                      <!-- dropdown -->
                      <div class="form-group">
                       <label>Course/s</label>
                       <select name="course" class="select2bs4" data-placeholder="Select course/s" style="width: 100%;">
                        <option value="CSC101">CSC101</option>
                        <option value="CSE201">CSE201</option>
                        <option value="CSE303">CSE303</option>
                        <option value="CSE203">CSE203</option>
                        <option value="CSE301">CSE301</option>
                        <option value="CSE401">CSE401</option>
                        <option value="CSE404">CSE404</option>
                       </select>
                      </div>
                      <div class="form-group">
                       <label>Semester/s</label>
                       <select name="semester" class="select2bs4" data-placeholder="Select PLO/s" style="width: 100%;">
                       <option value="summer2017">summer2017</option>
                        <option value="autumn2017">autumn2017</option>
                        <option value="autumn2019">autumn2019</option>
                        <option value="autumn2020">autumn2020</option>
                        <option value="summer2019">summer2019</option>
                       </select>
                      </div>
                      <div class="form-group">
                       <label>PLO/s</label>
                       <select name="plo" class="select2bs4" data-placeholder="Select PLO/s" style="width: 100%;">
                        <option value="plo1">PLO 1</option>
                        <option value="plo2">PLO 2</option>
                        <option value="plo3">PLO 3</option>
                        <option value="plo4">PLO 4</option>
                        <option value="plo5">PLO 5</option>
                        <option value="plo6">PLO 6</option>
                        <option value="plo7">PLO 7</option>
                        <option value="plo8">PLO 8</option>
                        <option value="plo9">PLO 9</option>
                        <option value="plo10">PLO 10</option>
                        <option value="plo11">PLO 11</option>
                        <option value="plo12">PLO 12</option>
                        <option value="plo13">PLO 13</option>
                       </select>
                      </div>
                    </div>      
                  </div>
                  <div class="footer">
                    <button formtarget="_blank" type="submit" class="btn btn-primary"><i class="nav-icon fas fa-chart-pie"></i> Generate Chart</button>
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
    </div>
    <!-- /.card -->
    </section>
    <section>
    <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">
                  Percentage of students who
                  achieved each of the PLOs and that of those who failed
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="plo-chart-2.3.php" method="POST">
                  <div class="row">
                    <div class="col-md-6">
                      <!-- dropdown -->
                      <div class="form-group">
                       <label>Course/s</label>
                       <select name="course" class="select2bs4" data-placeholder="Select course/s" style="width: 100%;">
                        <option value="CSC101">CSC101</option>
                        <option value="CSE201">CSE201</option>
                        <option value="CSE104">CSE104</option>
                        <option value="CSE303">CSE303</option>
                        <option value="CSE214">CSE214</option>
                        <option value="CSE315">CSE315</option>
                       </select>
                      </div>
                      <div class="form-group">
                       <label>Semester/s</label>
                       <select name="semester" class="select2bs4" data-placeholder="Select semester/s" style="width: 100%;">
                        <option value="summer2017">summer2017</option>
                        <option value="autumn2017">autumn2017</option>
                        <option value="autumn2019">autumn2019</option>
                        <option value="autumn2020">autumn2020</option>
                        <option value="summer2019">summer2019</option>
                       </select>
                      </div>
                    </div>      
                  </div>
                  <div class="footer">
                    <button formtarget="_blank" type="submit" class="btn btn-primary"><i class="nav-icon fas fa-chart-pie"></i> Generate Chart</button>
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
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- bootstrap color picker -->
<script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- BS-Stepper -->
<script src="plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- dropzonejs -->
<script src="plugins/dropzone/min/dropzone.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    //Initialize Select2 Elementsgit 
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
  })
 </script>
</body>
</html>