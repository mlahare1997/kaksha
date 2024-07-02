<!DOCTYPE html>
<html>
	<head>
		<title>Kaksha</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1" >
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet">
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
									<li>Edit Lessons</li>
								</ul>
							</div>
							<div id="back-button">
								<button class="btn btn-danger btn-sm"><a href="Ap_add_search_lesson.php"><i class="ti-angle-double-left"></i>  Back</a></button>
							</div>
						</div>
						<div class="col-xl-12 col-sm-12 Admin-dash-panel lesson_update_field">
							<div class="Admin-dash px-4">
								<div class="col-xl-12 col-sm-12 px-0 Admin-table1">
									<?php
										include '../config.php';
										if (isset($_GET['lesson_id'])) {
											$lesson_id = $_GET['lesson_id'];
											$select_sql = "SELECT * FROM `course_lessons` WHERE lesson_id = '$lesson_id'";
											$row = mysqli_fetch_assoc(mysqli_query($conn,$select_sql));
											echo '	<div id="Ap-Table-header">
														<p>&nbsp;'.$row['course_id'].'.&emsp;'.$row['course_title'].'</p>
													</div>
													<div class="col-xl-12 col-sm-12 search_course">
														<form action="Ap_update_lesson_dataajax.php" id="Ap_update_lesson_dataajax" method="post" enctype="multipart/form-data">
															<input type="number" name="lesson_id" value="'.$row['lesson_id'].'" class="w-100" readonly><br>
															<input type="text" value="'.$row['lesson_title'].'" name="lesson_name" class="w-100"><br>
															<textarea style="height:80px;" name="lesson_description" class="w-100 mt-4 mb-4" cols="30" rows="3">'.$row['lesson_desc'].'</textarea>
															<div class="col-xl-5 col-lg-6 col-md-10 col-sm-12">
																<iframe src="'.$row['lesson_video_link'].'" frameborder="0" width="100%" height="195"></iframe><br><br>
															</div>
															<input type="file" name="lesson_video_file">
															<button type="submit" class="btn btn-info btn-sm mt-4 px-3 py-2" id="search_course">Search</button>
														</form>
													</div>
												';
										}else{
											echo "<h2>Oops...! Record Not Found...</h2>";
										}
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
			//$url = "";
			// if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
			// 	//$url = 'https://';
			// }else{
			// 	$url.= $_SERVER['HTTP_HOST'];
			// 	$url.= $_SERVER['REQUEST_URI'];
			// }
			// echo '<script>alert("'.$url.'")</script>';
		?>
		<script>
			$(document).ready(function() {
				$(document).ready(function() {
				$("#Ap_update_lesson_dataajax").on('submit',(function(e){ 
					e.preventDefault();
					$.ajax({
						url: "Ap_update_lesson_dataajax.php",
						type: "POST",
						data: new FormData(this),
						contentType: false, cache: false, processData:false,
						success: function(data){
							if (data == 1) {
								alert('Updated Successfully...');
								

							}else{
								alert('note good');
							}
							
						},
						error: function(){}
					});
				}));
			});
			});
		</script>
	</body>
</html>


























