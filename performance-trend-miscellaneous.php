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
<!-- date-range-picker -->
<script src="plugins/daterangepicker/daterangepicker.js"></script>
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
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
  // DropzoneJS Demo Code End
</script>
</body>
</html>