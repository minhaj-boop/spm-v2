<?php 
      include('config/connect.php');
      $studentId = $_POST['id'];
    
      $query = "SELECT co.ploNo, co.achievedMarks, co.studentId,co.courseTitle
                    FROM tbl_co AS co 
                        WHERE co.studentId='$studentId'";
      mysqli_query($conn, $query);
        
      $result = mysqli_query($conn, $query);
    //fetch the resulting rows as array
    $table = mysqli_fetch_all($result, MYSQLI_ASSOC);

      //fee reslut from memory
      mysqli_free_result($result);
    
      //close connection
      mysqli_close($conn);

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<title>plo-table-1.3</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="Table_Fixed_Header/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Table_Fixed_Header/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Table_Fixed_Header/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Table_Fixed_Header/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Table_Fixed_Header/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Table_Fixed_Header/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Table_Fixed_Header/css/util.css">
	<link rel="stylesheet" type="text/css" href="Table_Fixed_Header/css/main.css">
<!--===============================================================================================-->
</head>
<body>	
	<div class="limiter">
		<div class="container-table100">
        <h4 style="background-color:coral; border-radius: 3px;"><b>Passing Threshold = 40 % </b></h4>
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">PLO NO</th>
									<th class="cell100 column2"><i class="fas fa-percent"></i></th>
									<th class="cell100 column3">Student ID</th>
									<th class="cell100 column4">Course Title</th>
								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
							<tbody>
                                <?php foreach($table as $tb):?>
								<tr class="row100 body">
									<td class="cell100 column1"><?php echo $tb['ploNo'] ?></td>
                                    <?php if($tb['achievedMarks'] >= 40.0) {?>
                                        <td style="color:chartreuse;" class="cell100 column2"><?php echo $tb['achievedMarks'] ?> <i class="fas fa-percentage"></i></td>
                                        <?php } else {?>
                                            <td style="color:red;" class="cell100 column2"><?php echo $tb['achievedMarks'] ?> <i class="fas fa-percentage"></i></td>
                                            <?php }?>
									<td class="cell100 column3"><?php echo $tb['studentId'] ?></td>
									<td class="cell100 column4"><?php echo $tb['courseTitle'] ?></td>
								</tr>
                                <?php endforeach;?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>


<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})
		});
			
		
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>