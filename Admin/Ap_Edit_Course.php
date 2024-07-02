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
									<li>Edit Course</li>
								</ul>
							</div>
							<div id="back-button">
								<button class="btn btn-danger btn-sm"><a href="AP-Dashbord.php"><i class="ti-angle-double-left"></i>  Back</a></button>
							</div>
						</div>
						<div class="col-xl-12  Admin-dash-panel">
							<div class="Admin-dash">
								<h3>Admin Dashbord</h3>
								<p>Search Course,Which You Want To Update...</p>
								<div class="btn-tab px-3">
									<button type="button" id="Toggle-Tab-1"><i class="ti ti-info-alt">  </i>Detail</button>
									<button type="button" id="Toggle-Tab-2"><i class="ti ti-gallery">  </i>Benner Image</button>
									<button type="button" id="Toggle-Tab-3"><i class="ti ti-book">  </i>Course Informmation</button>
									<button type="button" id="Toggle-Tab-4"><i class="ti ti-mobile">  </i>Contect Info</button>									
								</div>
								<div>
									<div class="col-xl-12 Course-Down-Area Course-Part-1">
									<div class="col-xl-12 px-0 Admin-table1">
										<div id="Ap-Table-header">
											<p>Edit Course Detail</p>
										</div>
									</div>
									<div class="Course-Form my-4 px-3">
										<form action="" method="post" id="search_form">
											<input type="text" placeholder="Search Course..." id="course_id">
											<button class="btn btn-sm btn-info ml-1 mt-4 mb-2 px-4 py-2" type="submit" id="search"><i class="ti-search"></i>&nbsp;Search</button>											
										</form>
										<form action="" id="ap_upadte">
											
										</form>
										<div id="box1"></div>
									</div>
									</div>
									<div class="col-xl-12 Course-Down-Area Course-Part-2">
										<div class="col-xl-12 px-0 Admin-table1">
											<div id="Ap-Table-header">
												<p>Edit Course Image</p>
											</div>
										</div>
										<div class="Course-Form my-4 px-3">
											<form action="" method="post">
												<input type="text" placeholder="Search Course..." id="file_id">
												<button class="btn btn-sm btn-info ml-1 mt-4 mb-2 px-4 py-2" type="submit" id="search_file_id"><i class="ti-search"></i>&nbsp;Search</button>											
											</form>
											<form action="Ap_update_file.php" method="post" enctype="multipart/form-data" id="ap_file_update">
												
											</form>
										</div>
									</div>
									<div class="col-xl-12 Course-Down-Area Course-Part-3">
										<div class="col-xl-12 px-0 Admin-table1">
											<div id="Ap-Table-header">
												<p>Edit Course Detail</p>
											</div>
										</div>
										<div class="Course-Form my-4 px-3">
											<input type="text" placeholder="Add Course Name4">
											<input type="text" placeholder="Add Course Name4">
											<textarea class="my-4" rows="3" cols="142" style="height: 90px;">Enter Discription</textarea>
											<select name="" id="">
												<option>status</option>
											</select><br>
											<button class="btn btn-info ml-2 my-5 px-4 py-2">Save</button>
										</div>
									</div>
									
									<div class="col-xl-12 Course-Down-Area Course-Part-4">
										<div class="col-xl-12 px-0 Admin-table1">
											<div id="Ap-Table-header">
												<p>Edit Course Detail</p>
											</div>
										</div>
										<div class="Course-Form my-4 px-3">
											<input type="text" placeholder="Add Course Name5">
											<input type="text" placeholder="Add Course Name5">
											<textarea class="my-4" rows="3" cols="142">Enter Discription</textarea>
											<select name="" id="">
												<option>status</option>
											</select><br>
											<button class="btn btn-info ml-2 my-5 px-4 py-2">Save</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script>
			$('#Toggle-Tab-1').click(function(event) {
				$('.Course-Part-2,.Course-Part-3,.Course-Part-4').fadeOut();
				$('.Course-Part-1').fadeIn();
				$('#Toggle-Tab-1').css('border', '1px solid #ddd');
				$('#Toggle-Tab-2,#Toggle-Tab-3,#Toggle-Tab-4').css('border', 'none');

			});
			$('#Toggle-Tab-2').click(function(event) {
				$('.Course-Part-1,.Course-Part-3,.Course-Part-4').fadeOut();
				$('.Course-Part-2').fadeIn();
				$('#Toggle-Tab-2').css('border', '1px solid #ddd');
				$('#Toggle-Tab-1,#Toggle-Tab-3,#Toggle-Tab-4').css('border', 'none');
				
			});
			$('#Toggle-Tab-3').click(function(event) {
				$('.Course-Part-2,.Course-Part-1,.Course-Part-4').fadeOut();
				$('.Course-Part-3').fadeIn();
				$('#Toggle-Tab-3').css('border', '1px solid #ddd');
				$('#Toggle-Tab-2,#Toggle-Tab-1,#Toggle-Tab-4').css('border', 'none');
				
			});
			$('#Toggle-Tab-4').click(function(event) {
				$('.Course-Part-2,.Course-Part-3,.Course-Part-1').fadeOut();
				$('.Course-Part-4').fadeIn();
				$('#Toggle-Tab-4').css('border', '1px solid #ddd');
				$('#Toggle-Tab-2,#Toggle-Tab-3,#Toggle-Tab-1').css('border', 'none');
				
			});
			$(document).ready(function() {
				$(document).on('click','#search',function(event) {
					event.preventDefault();
					var course_id = $('#course_id').val() 
					if (course_id != "") {
						$.ajax({
							url : "Ap_load_update.php",
							type : "POST",
							data : {course_id:course_id},
							success:function(data){
								$('#ap_upadte').html(data);
							}
						});
					}else{
						alert('Please Enter Valid CourseId...');
					}
				});
				$(document).on('click', '#update_course_info', function(event) {
					$(document).on('click', '#reset_button', function(event) {
						event.preventDefault();
						console.log('ddcxcdsfdsf');
					});
					event.preventDefault();
					var update_cid = $('#update_cid').val();
					var update_ctitle =  $('#update_ctitle').val();
					var update_cdetail = $('#update_cdetail').val();
					var update_camrp = $('#update_camrp').val();
					var update_cdmrp = $('#update_cdmrp').val();
					var update_contect = $('#update_contect').val();
					$.ajax({
						url : "Ap_load_update_detail.php",
						type : "POST",
						data : {ucourse_id:update_cid,ucourse_title:update_ctitle,ucourse_detail:update_cdetail,ucourse_contect:update_contect,ucourse_amrp:update_camrp,ucourse_dmrp:update_cdmrp},
						success:function(data){
							if (data == 1) {
								alert('Course Updated...');
								$('#ap_upadte').slideUp();
								$('#search_form').trigger('reset');
								$('#search').click(function(event) {
									$('#ap_upadte').slideDown();
								});
							}else{
								alert('OOPS...Somthing Went Wrong , Cant Updated');
							}
						}
					});
				});
					// var formData = new FormData(this);

					// $.ajax({
					// 	url : "Ap_update_coursefile.php",
					// 	type : "POST",
					// 	data : formData,
					// 	contentType : false,
					// 	processData : false,
					// 	success : function(data){
					// 		$('#box2').html(data);
					// 	}
					// });
				$(document).on('click', '#search_file_id', function(event) {
					event.preventDefault();
					var file_id = $('#file_id').val();
					$.ajax({
						url : 'Ap_load_updatefile.php',
						type : 'POST',
						data : {file_id:file_id},
						success : function(data){
							$('#ap_file_update').html(data);
						}
					});
				});
				$(document).on('submit', '#ap_file_update', function(event) {
					event.preventDefault();
			        // Check file selected or not
					$.ajax({
						url : "Ap_update_file.php",
						type: 'post',
                        data: new FormData(this),
                        contentType: false,
                        processData: false,
                       	success: function(response){
                    		if(response != 0){
		                    	alert('file uploaded');

		                	}else{
		                   		alert('file not uploaded');
		                	}
              			},
					});
				});
			});
		</script>
	</body>
</html>