<!DOCTYPE html>
<html>
	<head>
		<title>Kaksha</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1" >
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/themify-icons.css">
		<link rel="stylesheet" href="css/AP_Stylecss.css?v=<?php echo(time()); ?>">
	</head>
	<body>
		<?php 
			include 'Ap_Header.php';
			include '../config.php';
			$course_id = $_GET['course_id'];
			$sql = "SELECT * FROM `coursedetail` WHERE course_id = $course_id";
			$query = mysqli_query($conn,$sql);
			$row = mysqli_fetch_assoc($query);
			$course_title = $row['course_title'];
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
									<li>Add Course</li>
								</ul>
							</div>
							<div id="back-button">
								<button class="btn btn-danger btn-sm"><a href="Ap_add_search_lesson.php"><i class="ti-angle-double-left"></i>  Back</a></button>
							</div>
						</div>
						<div class="col-xl-12 col-sm-12 Admin-dash-panel lesson_field">
							<div class="Admin-dash mb-5 pb-2">
								<div class="col-xl-12 col-sm-12 px-0 Admin-table1">
									<form id="loesson_video_form" action="" method="post">
										<div id="Ap-Table-header">
											<p>Course Detail</p>
										</div>
										<div class="col-xl-12 col-sm-12 search_course mb-4">
											<input type="text" name="course_id" placeholder="Enter Course Id..." value="<?php echo($course_id); ?>" class="w-100"><br>
											<input type="text" name="course_title" placeholder="Enter Course Id..." value="<?php echo($course_title); ?>" class="w-100"><br>
										</div>
										<div id="Ap-Table-header">
											<p>Add Course Detail</p>
										</div>
										<div class="lesson_form">
											<textarea id="" rows="20" placeholder="Enter Course Detail" name="course_detail" style="height: 150px;"></textarea>
											<textarea id="" rows="20" placeholder="Enter Course Syllabus" name="course_syllabus" style="height: 150px;"></textarea>
											<button class="add_syllabus btn btn-info my-2" type="submit" name="add_syllabus"> <i class="ti-save"></i>&nbsp; Save</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php 
			//include '../J_query.php'; 
			if (isset($_POST['add_syllabus'])) {
				$course_id = $_POST['course_id'];
				$course_detail = $_POST['course_detail'];
				$course_syllabus = $_POST['course_syllabus'];

				$query = mysqli_query($conn,"INSERT INTO `course_syllabus`(`id`, `c_id`, `c_detail`, `course_syllabus`) VALUES (NULL,$course_id,'$course_detail','$course_syllabus')");
				if ($query) {
					echo "<script>alert('Data Added Successfully...');</script>";
					echo "<script>window.location = 'Ap-Add-Course.php';</script>";
				}else{
					echo "<script>alert('Somthing Went Wrong...');</script>";
				}
			}
		?>
	</body>
</html>