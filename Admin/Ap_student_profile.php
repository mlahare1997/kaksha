<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" >
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/themify-icons.css">
	<link href="cropperjs/cropper.min.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="../css/AP_Stylecss.css">
</head>
<body>
	<?php 	
			include '../config.php';
			include 'Ap_Header.php';
	 ?>
	<div class="container-fluid">
			<div class="row">
				<div class="col-xl-12 px-0">
					<?php include 'Ap_SlideBar.php'; ?>
					<div class="Admin-Right-Area">
						<div class="Admin-Top d-flex justify-content-between">
							<div id="breadcrumbs">
								<ul>
									<li><a href="../index.php"><i class="ti-home"></i>  Home</a></li>
									<li>/</li>
									<li>User Profile</li>
								</ul>
							</div>
							<div id="back-button">
								<button class="btn btn-danger btn-sm"><a href="Ap_login_user.php"><i class="ti-angle-double-left"></i>  Back</a></button>
							</div>
						</div>
						<div class="col-xl-12  Admin-dash-panel">
							<div class="Admin-dash">
								<div class="col-xl-12 px-0 Admin-table1">
									<div id="Ap-Table-header" class="mb-5">
										<p>User Profile</p>
									</div>
									<div class="login_student_input col-sm-12 col-xl-12 col-lg-12 col-md-12 d-flex mb-5">
										<?php
											include '../config.php';
											$get1 = $_GET['stu_id'];
											$get2 = $_GET['course_id'];
											$load_data = "";
											$sql = "SELECT * FROM `coursedetail` WHERE course_id = $get2";
											$row = mysqli_fetch_assoc(mysqli_query($conn,$sql));
											$course_title = $row['course_title'];
											$select_sql = "SELECT * FROM `apply_course_student` WHERE id = $get1 AND course_id = $get2";
											$query = mysqli_query($conn,$select_sql);
											if (mysqli_num_rows($query) > 0) {
												$load_data.="";
												$row = mysqli_fetch_assoc($query);
													$load_data.='
																<div class="col-xl-3">';
													if($row['profile_img'] != "") {
														$load_data.='<div><img src="../'.$row['profile_img'].'" alt="" height="450" class="img-thumbnail w-100 img-fluid"></div>';
													}else if($row['profile_img'] == ""){
														$load_data.='<div><img src="img/avtar3.png" alt="" height="450" class="img-thumbnail w-100 img-fluid"></div>';
													}				
													$load_data.='	<div class="stu_profile_detail">
																		<h5>'.$row['fullname'].'</h5>
																		<span>User Id : '.$row['id'].'</span>
																		<hr>
																		<span>Email : <br><span>'.$row['email_id'].'</span></span>
																	</div>
																</div>
																<div class="col-xl-9 px-5">
																	<form id="loggedin_student" method="post">
																		<b>Student Id : &emsp;  </b><input type="number" value="'.$row['id'].'" readonly name="stu_id"><br>
																		<b>Surname : &emsp;&emsp;</b><input type="text" value="'.$row['surname'].'" name="stu_surname"><br>
																		<b>Fname : &emsp;&emsp;&emsp;</b><input type="text" value="'.$row['fname'].'" name="stu_fname"><br>
																		<b>Lname : &emsp;&emsp;&emsp;</b><input type="text" value="'.$row['lname'].'" name="stu_lname"><br>
																		<b>Full Name : &nbsp&emsp;</b><input type="text" value="'.$row['fullname'].'" name="stu_fullname"><br>
																		<b>Email Id : &nbsp&emsp;&emsp;</b><input type="text" value="'.$row['email_id'].'" name="stu_email_id"><br>
																		<b>Mo No. : &nbsp&emsp;&emsp;&nbsp;</b><input type="text" value="'.$row['contect_number'].'" name="stu_co_no"><br>
																		<b>Course Id :&emsp;&emsp;</b><input type="text" value="'.$row['course_id'].'" name="stu_cid" readonly><br>	
																		<b>Course Info :&emsp;</b><input type="text" value="'.$course_title.'" name="stu_ctitle" readonly><br>	
																		<p class="mt-3 pl-0"><b>Note&nbsp;:</b><span>&nbsp;In Status Input Field,You Can add 1 Or 0,1 means Activate And 0 means Deactivate.</span></p>
																		<button class="btn btn-primary mt-2" id="stu_save" type="button"><i class="ti-pencil-alt"></i>&nbsp;&nbsp;Update</button>
																	</form>
																</div>
														
													';
											}
											echo $load_data;

										?>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
		<!-- PHOTO UPDATE MODALBOX -->
		<script>
			$(document).on('click', '#stu_save', function(event) {
				event.preventDefault();
				alert('okk');
				$.ajax({
					url : "Ap_stu_proData_update.php",
					type : "POST",
					data : $('#loggedin_student input').serialize(),
					success : function(data){
						if (data == 1) {
							alert('Data Updated Successfully...');
						}else{
							alert('Oops...!Somthing Went Wrong.');
						}

					}
				});
			});	
		</script>

    </div>
</div>

</script>
</body>
</html>