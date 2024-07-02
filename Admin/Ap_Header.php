<?php include '../session_check.php';
if (!(isset($_SESSION['admin_id']))) {
	echo "<script>alert('Please Login In Admin Account...');window.location = '../index.php';</script>";
}
 ?>
	<div class="container-fluid Admin-Panel">
		<div class="row">
			<div class="col-xl-12  Admin-Header-Top" style="z-index: 200;">
				<div class="Admin-Header-Top-section d-flex align-items-center justify-content-between">
					<div class="logo bg-light ml-2 py-0 px-2">
						<?php $row = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `site_setting`"));
							echo '<a href="../index.php"><img src="'.$row['site_logo'].'" height="45px" width="170px" alt=""></a>';
						 ?>
						
					</div>
					<div class="Search-Bar col-xl-5 col-lg-6 col-md-8 col-sm-12 d-flex">
							<input type="text" class="col-xl-12" id="search_menu_box" placeholder="Search...">
							<button type="submit" id="search_menu"><i class="ti ti-search"></i></button>
							<button type="submit" id="close_btn"><i class="ti ti-close"></i></button>
					</div>
					<span class="ti ti-fullscreen"></span>
					<div class="My-Account d-flex ">
						<?php
							include '../config.php';
							if (!isset($_SESSION)) {
								session_start();
							}
							if (isset($_SESSION['admin_username'])) {
								$admin_id = $_SESSION['admin_id'];
								$sql = "SELECT * FROM `login` WHERE id = $admin_id";
								$query = mysqli_query($conn,$sql);
								$row = mysqli_fetch_assoc($query);
								if ($row['profile_img'] != "") {
									echo '<img class="img border-0" src="../'.$row['profile_img'].'" alt="">';
								}else{
									echo '<img class="img border-0" src="img/avtar3.png" alt="">';
								}
								echo '
										<a href="../my_profile.php" class="text-light mt-1"><span>'.$_SESSION['admin_username'].'<i class="ti  ti-angle-double-down "></i></span></a>
									';
							}else{
								return false;
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="Ap_course_sub_list" style="">
		<ul class="m-0 p-0 ul_tag">
			<a href="index.php"><li>Home</li></a>
			<a href="my_profile.php"><li>My Profile</li></a>
			<a href="AP-Dashbord.php"><li>Dashbord</li></a>
			<a href="Ap_site_setting.php"><li>Site Setting</li></a>
			<a href="Ap_slider_setting.php"><li>Slider Setting</li></a>
			<a href="Ap_all_student.php"><li>Loggedin Users</li></a>
			<a href="Ap_login_user.php"><li>All Students</li></a>
			<a href="Ap_show_all_course.php"><li>All Courses</li></a>
			<a href="Ap-Add-Course.php"><li>Add Courses</li></a>
			<a href="Ap_add_search_lesson.php"><li>Add Course Lessons</li></a>
			<a href="Ap_all_quiz.php"><li>All Quiz</li></a>
			<a href="Ap_add_quiz.php"><li>Add Quiz</li></a>
			<a href="Ap_quiz_result.php"><li>Quiz Result</li></a>
			<a href="Ap_fee_recipe.php"><li>Fee Receipt</li></a>
			<a href="Ap_check_fee_recipe.php"><li>Check Fee Receipt</li></a>
			<a href="Ap_show_feedback.php"><li>Feedback</li></a>
			<a href="Ap_show_review.php"><li>Review</li></a>
		</ul>
	</div>
	<script type="text/javascript" src="../js/Admin_script.js"></script>