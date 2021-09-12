<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>performance-trend-miscellaneous</title>

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
            <h3><b>Miscellaneous PLO Performance Trends</b></h3>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
  
    <section>
    <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">
                  Percentage count of students who achieved all the PLOs they have attempted over
                  chosen semester(s) for selected department(s)
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="plo-chart-5.1.php" method="POST">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- dropdown -->
                      <div class="form-group">
                       <label>Select Department(s)</label>
                       <select name="department" class="select2bs4" data-placeholder="Select Department(s)" style="width: 100%;">
                        <option value="CSE">CSE</option>
                        <option value="EEE">EEE</option>
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
                  Average count of PLOs achieved over choosen semester(s) for selected deparment(s)
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="plo-chart-5.2.php" method="POST">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- dropdown -->
                      <div class="form-group">
                       <label>Select Department(s)</label>
                       <select name="department" class="select2bs4" data-placeholder="Select Department(s)" style="width: 100%;">
                        <option value="CSE">CSE</option>
                        <option value="EEE">EEE</option>
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
                For a selected instructor, a chart showing the percentage of students who
                achieved each PLO in the course/s taught by that instructor within a
                chosen time frame.
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="plo-chart-5.3.php" method="POST">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- dropdown -->
                      <div class="form-group">
                       <label>Select a Faculty</label>
                       <select name="faculty" data-placeholder="Select a Faculty" class="select2bs4" style="width: 100%;">
                        <option value="Sadita Ahmed">Sadita Ahmed</option>
                        <option value="Sadita Ahmed">Javed Hossain</option>
                        <option value="Kamrul Hasan">Kamrul Hasan</option>
                        <option value="Abu Sayeed">Abu Sayeed</option>
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