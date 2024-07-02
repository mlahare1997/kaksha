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
		<link rel="stylesheet" href="../css/themify-icons.css">
		<link rel="stylesheet" href="../css/AP_Stylecss.css?v=<?php echo(time()); ?>">
		<style>
			.ti{
				font-family: 'themify'!important;
			}
			.far,.fas{
				font-family: "fontawesome";
			}
			:is(.Side-Bar,.Admin-Right-Area,table,.Admin-dash)::-webkit-scrollbar{
			width: 10px;
			height: 10px;
			}
			:is(.Side-Bar,.Admin-Right-Area,table,.Admin-dash)::-webkit-scrollbar-thumb{
					width: 10px;
					height: 10px;
					border-radius: 10px;
					height: 100px;
					box-shadow: inset 0 0 5px grey;
					background: #f4f4f4;
			}
			:is(.Side-Bar,.Admin-Right-Area,table,.Admin-dash)::-webkit-scrollbar-track{
					border-radius: 10px;
					background: #ddd;
					box-shadow: inset 0 0 5px #ccc;
			}
			.Admin-dash{
				overflow-x: scroll;
			}
			.Side-Bar{
				height: 100vh;
				z-index: 150;
			}
			@media (max-width: 768px){
				.Admin-Right-Area{
					width: 100%;
					margin-top: 100px;
				}
				.Side-Bar{
					display: none;
					position: absolute;
					top: 25px;
					z-index:
					margin-top: 0;
				}
				#dash_box,.Admin-panel-gallery{
					flex-direction: column;
				}
			}
			@media (min-width: 769px) and (max-width: 900px){
				.Side-Bar{
					display: none;
					position: absolute;
					top: 25px;
					z-index:
					margin-top: 0;
						}
				.Admin-Right-Area{
					width: 100%;
					margin-top: 100px;
				}
				.Admin-panel-gallery{
					flex-direction: column;
				}
			}
			@media (min-width: 901px) and (max-width: 1200px){
				.Admin-panel-gallery{
					flex-direction: column;
					}
				.slide_menu_btn,
				.close_slide_btn{
					display: none;
				}
			}
			@media (min-width: 1000px){
				.slide_menu_btn,
				.close_slide_btn{
					display: none;
					}
			}
			.slide_menu_btn{
				position: absolute;
				top: 105px;
				background: #E66030;
				font-weight: 900;
				border: none;
				outline: none;
				height: 40px;
				width: 40px;
				left: 0;
				z-index: 40;
			}
			.ti-arrow-right{
				color: #e5e5e5;
				font-weight: 900;
			}
			.ti-arrow-left{
				color: #000;
				font-weight: 900;
			}
			.close_slide_btn{
				position: absolute;
				top: 0;
				right: 0;
				height: 35px;
				width: 35px;
				border-radius: 0px;
				outline: none;
				border: none;
			}
		</style>
	</head>
	<body>
		<button class="slide_menu_btn"><span class="ti-arrow-right"></span></button>
		<div class="Side-Bar" style="z-index: 50;">
			<div class="Account-Info d-flex align-items-center ">
				<?php
					include '../config.php';
					$admin_id = $_SESSION['admin_id'];
					$sql = "SELECT * FROM `login` WHERE id = $admin_id";
					$row = mysqli_fetch_assoc(mysqli_query($conn,$sql));
					if ($row['profile_img'] != "") {
						echo '<img id="Account-Profile" src="../'.$row['profile_img'].'" alt="">';
					}else{
						echo '<img id="Account-Profile" src="img/avtar3.png" alt="">';
					}
					echo '<div id="Account-Id">'.$_SESSION['admin_username'].'<div>'.$_SESSION['admin_email'].'</div></div>';
				?>
				<button class="close_slide_btn btn btn-light btn-sm"><span class="ti-arrow-left"></span></button>
			</div>
			<div class="Slide-Navs">
				<ul>
					<a href="AP-Dashbord.php">
						<li id="Dashbord-li"><i class="ti ti-bar-chart-alt"></i> Dashbord<i class="ti ti-angle-right"></i></li>
					</a>
					<a href="Ap_site_setting.php">
						<li><i class="ti ti-settings"></i> Site Settings <i class="ti ti-angle-right"></i></li>
					</a>
					<a href="Ap_slider_setting.php">
						<li><i class="ti ti-image"></i> Slider<i class="ti ti-angle-right"></i></li>
					</a>
					<a id="User-drop">
						<li><i class="ti ti-user"></i> Users<i class="ti ti-angle-right"></i></li>
					</a>
					<!--  User Drop-Down Start -->
					<div id="User-Drop-Menu">
						<ul>
							<a href="Ap_all_student.php">
								<li id="Drop-Links">All Students</li>
							</a>
							<a href="Ap_login_user.php">
								<li id="Drop-Links">Loggedin Users</li>
							</a>
						</ul>
					</div>
					<!--  User Drop-Down End -->
					<!-- --------------------------------------- -->
					<!--  All Corse Drop-Down Start -->
					<a id="All-courses-drop">
						<li><i class="ti ti-book"></i> All Courses<i class="ti ti-angle-right"></i></li>
					</a>
					<div id="Ac-Drop-Menu">
						<ul>
							<a href="Ap_show_all_course.php">
								<li id="Drop-Links">All Course</li>
							</a>
							<a href="Ap-Add-Course.php">
								<li id="Drop-Links">Add Course</li>
							</a>
							<a href="Ap_Edit_Course.php">
								<li id="Drop-Links">Edit Course</li>
							</a>
						</ul>
					</div>
					<a id="All-courses-drop" href="Ap_add_search_lesson.php">
						<li><i class="ti ti-files"></i> Add Lesson<i class="ti ti-angle-right"></i></li>
					</a>
					<!-- QUIZ SECTION START-->
					<a id="Quiz-drop">
						<li><i class="ti ti-book"></i> Quiz<i class="ti ti-angle-right"></i></li>
					</a>
					<div id="Quiz-Drop-Menu">
						<ul>
							<a href="Ap_all_quiz.php">
								<li id="Drop-Links">All Quiz</li>
							</a>
							<a href="Ap_add_quiz.php">
								<li id="Drop-Links">Add Quiz</li>
							</a>
							<a href="Ap_quiz_result.php">
								<li id="Drop-Links">Quiz Result</li>
							</a>
						</ul>
					</div>
					<!-- QUIZ SECTION END -->
					<!-- <a id="All-courses-drop" href="Ap_quiz_result.php">
										<li><span class="far fa-plus"></span>&nbsp;&nbsp; Add Quiz<i class="ti ti-angle-right"></i></li>
					</a> -->
					<!--  All Corse Drop-Down End -->
					<!-- --------------------------------------- -->
					<a href="Ap_fee_recipe.php">
						<li><i class="ti ti-receipt"></i> Fee Receipt<i class="ti ti-angle-right"></i></li>
					</a>
					<a href="Ap_check_fee_recipe.php">
						<li><i class="ti ti-eye"></i> Fee Receipt<i class="ti ti-angle-right"></i></li>
					</a>
					<a href="Ap_show_feedback.php">
						<li><i class="ti ti-comment-alt"></i> Feedback<i class="ti ti-angle-right"></i></li>
					</a>
					<a href="Ap_show_review.php">
						<li><i class="ti ti-star"></i> Review<i class="ti ti-angle-right"></i></li>
					</a>
				</ul>
			</div>
		</div>
		<script type="text/javascript" src="../js/Admin_script.js"></script>
	</body>
</html>