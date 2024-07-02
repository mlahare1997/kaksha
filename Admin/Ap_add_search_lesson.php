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
									<li>Add Course</li>
								</ul>
							</div>
							<div id="back-button">
								<button class="btn btn-danger btn-sm"><a href="AP-Dashbord.php"><i class="ti-angle-double-left"></i>  Back</a></button>
							</div>
						</div>
						<div class="col-xl-12 col-sm-12 Admin-dash-panel lesson_field">
							<div class="Admin-dash px-4">
								<div class="col-xl-12 col-sm-12 px-0 Admin-table1">
									<div id="Ap-Table-header">
										<p>Add Lessons</p>
									</div>
									<div class="col-xl-12 col-sm-12 search_course">
										<form action="" method="post">
											<input type="text" id="course_id" placeholder="Enter Course Id..." value="" class="w-100"><br>
											<button type="submit" class="btn btn-info btn-sm mt-4 px-3 py-2" id="search_course">Search</button>
										</form>
									</div>
									<div id="load_table_data">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script>
			function load_Lessondata(){
				var course_id = $('#course_id').val();
				$.ajax({
					url : 'Ap_load_course_datafor_losson.php',
					type : 'POST',
					data : {course_id:course_id},
					success : function (data){
						$('#load_table_data').html(data);
					}
				});
			}
			$(document).ready(function() {
				$(document).on('click', '#search_course', function(event) {
					event.preventDefault();
					load_Lessondata();
				});
				$(document).on("click","#delete_btn",function(e){
				 	if (confirm("You Want To Delete This Record ?")) {
						var id = $(this).data('id');
						$.ajax({
							url:'Ap_delete_lesson.php',
							type:"POST",
							data:{id:id},
							success:function(data){
								if (data ==1 ) {
									load_Lessondata();
									load_login_Data();
									$(this).closest('tr').SlideUp('slow');
								}else{
									return false;
								}

							}
						});	
					}			
				});
			});
			
		</script>
	</body>
</html>


























