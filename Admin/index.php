<!DOCTYPE html>
<html>
	<head>
		<title>Kaksha</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1" >
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/themify-icons.css">
		<link rel="stylesheet" href="../css/AP_Stylecss.css">
	</head>
	<body>
		<?php include 'Ap_Header.php'; ?>
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
									<li>Dashbord</li>
								</ul>
							</div>
							<div id="back-button">
								<button class="btn btn-danger btn-sm"><a href="index.php"><i class="ti-angle-double-left"></i>  Back</a></button>
							</div>
						</div>
						<div class="col-xl-12 col-12 Admin-dash-panel">
							<div class="Admin-dash">
								<h3>Admin Dashbord</h3>
								<p>Hello,Mr Admin Hear You Can See All the Data About Your Web...</p>
								<div class="Admin-panel-gallery col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex">
									<div class="col-xl-6 col-xs-6 d-flex px-0" id="dash_box">
										<div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 col-xs-12 px-1">
											<div class="Admin-panel-gallery-img">
												<a href="Ap_show_all_course.php">
													<img src="img/Ap1.jpg"class="img-fluid">
													<span id="title_para">All Courses<p id="num_para"><?php echo mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `coursedetail`")); ?></p></span>
												</a>
											</div>
										</div>
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 px-1">
											<div class="Admin-panel-gallery-img">
												<a href="Ap_all_student.php">
													<img src="img/Ap2.jpg"class="img-fluid">
													<span id="title_para">All Students<p id="num_para"><?php echo mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `apply_course_student`")); ?></p></span>
												</a>
											</div>
										</div>										
									</div>
									<div class="col-xl-6 d-flex col-sm-12 px-0" id="dash_box">
										<div class="col-xl-6 col-md-6  col-lg-6 col-sm-12 col-xs-12 px-1">
											<div class="Admin-panel-gallery-img">
												<a href="Ap_login_user.php">
													<img src="img/Ap3.jpg"class="img-fluid">
													<span id="title_para">Loggedin User<p id="num_para"><?php echo mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `login`")); ?></p></span>
												</a>
											</div>
										</div>
										<div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 col-xs-12 px-1">
											<div class="Admin-panel-gallery-img">
												<a href="Ap_add_search_lesson.php">
													<img src="img/Ap4.jpg"class="img-fluid">
													<span id="title_para">Total Lessons<p id="num_para"><?php echo mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `course_lessons`")); ?></p></span>
												</a>
											</div>
										</div>										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>