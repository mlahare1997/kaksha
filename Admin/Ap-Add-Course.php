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
									<li>Add Course</li>
								</ul>
							</div>
							<div id="back-button">
								<button class="btn btn-danger btn-sm"><a href="AP-Dashbord.php"><i class="ti-angle-double-left"></i>  Back</a></button>
							</div>
						</div>
						<div class="col-xl-12  Admin-dash-panel">
							<div class="Admin-dash">
								<h3>Admin Dashbord</h3>
								<p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>
								<div class="btn-tab px-3">
									<button type="button" id="Toggle-Tab-1"><i class="ti ti-info-alt">  </i>Detail</button>
									<button type="button" id="Toggle-Tab-2"><i class="ti ti-book">  </i>Syllabus & More</button>
								</div>
								<div>
									<div class="col-xl-12 Course-Down-Area Course-Part-1">
									<div class="col-xl-12 px-0 Admin-table1">
										<div id="Ap-Table-header">
											<p>Course Detail</p>
										</div>
									</div>
									<div class="Course-Form my-4 px-3">
										<form enctype="multipart/form-data" id="uploadForm" action="Add_course.php" method="post">
											<input type="text" id="course_title" name="course_title" placeholder="Enter name">
											<textarea class="mt-4 w-100" rows="3" style="height: 90px;margin-bottom: 0;" placeholder="Enter Discription" name="course_detail" id="course_detail"></textarea>
											<input type="text" id="course_contect" name="course_contect" placeholder="Enter contect">
											<input type="text" id="course_amrp" name="course_amrp" placeholder="Enter Your Price">
											<input type="text" id="course_dmrp" name="course_dmrp" placeholder="Enter Market Price">
											<div id="file_div">
												<label for="course_file" class="btn btn-info btn-sm">Upload</label>
												<input type="file" id="course_file" name="course_file">			
											</div>
											<button type="submit" class="btn btn-info btn-sm py-2 px-3 my-4">Upload Detail</button>
										</form>
									</div>
									</div>
									<div class="col-xl-12 Course-Down-Area Course-Part-2">
										<div class="col-xl-12 px-0 Admin-table1">
											<div id="Ap-Table-header">
												<p>Course Details</p>
											</div>
										</div>
										<div class="Course-Form my-4 px-3 pt-3">
											<input type="text" id="course_id" placeholder="Search Course Id...">
											<button class="search_cbtn btn btn-info my-3 px-4 py-2">Save</button>
										</div>
										<div id="load_syllabus_data"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script>
			function loadSyllabusdata(){
				var course_id = $('#course_id').val();
				$.ajax({
					url : 'Ap_syllabus_data.php',
					type : 'POST',
					data : {course_id:course_id},
					success : function (data){
						$('#load_syllabus_data').html(data);
					}
				});
			}
			$(document).on('click', '.search_cbtn', function(event) {
				event.preventDefault();
				loadSyllabusdata();
			});
			$(document).on("click","#delete_cdetail_btn",function(e){
			 	if (confirm("You Want To Delete This Record ?")) {
					var id = $(this).data('cid');
					$.ajax({
						url:'Ap_delete_cdetail.php',
						type:"POST",
						data:{id:id},
						success:function(data){
							if (data ==1 ) {
								loadSyllabusdata();
								$(this).closest('tr').SlideUp('slow');
							}else{
								return false;
							}

						}
					});	
					loadSyllabusdata();
				}			
			});
			$('#Toggle-Tab-1').click(function(event) {
				$('.Course-Part-2').fadeOut();
				$('.Course-Part-1').fadeIn();
				$('#Toggle-Tab-1').css('border', '1px solid #ddd');
				$('#Toggle-Tab-2,#Toggle-Tab-3,#Toggle-Tab-4').css('border', 'none');

			});
			$('#Toggle-Tab-2').click(function(event) {
				$('.Course-Part-1').fadeOut();
				$('.Course-Part-2').fadeIn();
				$('#Toggle-Tab-2').css('border', '1px solid #ddd');
				$('#Toggle-Tab-1,#Toggle-Tab-3,#Toggle-Tab-4').css('border', 'none');
				
			});
			$(document).ready(function() {
				$(document).on('click', '#course_save', function(event) {
				    var form_data = new FormData();                  
					event.preventDefault();
					$.ajax({
						url: "Add_course.php",
						type: "POST",
						data: form_data,
						contentType: false, 
						cache: false, 
						processData:false,
						success: function(data){
							if (data == 1) {
								$('.alert').hide();
								alert("Data inserted successfully");
							}else{
								alert("Data cant inserted successfully");
							}
						},
						error: function(){}
					});
				});
				$("#uploadForm").on('submit',(function(e){ e.preventDefault();
					$.ajax({
						url: "Add_course.php",
						type: "POST",
						data: new FormData(this),
						contentType: false, cache: false, processData:false,
						success: function(data){
								alert("Data inserted successfully");
								$('#uploadForm').trigger('reset');
						},
						error: function(){}
					});
				}));
			});
		</script>
	</body>
</html>