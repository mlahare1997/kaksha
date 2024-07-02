<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" >
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet">
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
									<li>All Students</li>
								</ul>
							</div>
							<div id="back-button">
								<button class="btn btn-danger btn-sm"><a href="AP-Dashbord.php"><i class="ti-angle-double-left"></i>  Back</a></button>
							</div>
						</div>
						<div class="col-xl-12  Admin-dash-panel">
							<div class="Admin-dash">
								<div class="col-xl-12 px-0 Admin-table1">
									<div id="Ap-Table-header" class="mb-2">
										<p>All Students</p>
									</div>
									<div class="container">
										<div class="row">
											<div class="col-xl-12 table_content">
												
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
				load_student_Data();
				function load_student_Data(){
            		$.ajax({
						url : "select_all_students.php",
						type : 'POST',
						success : function(data){
							$('.table_content').html(data);
						}
					});
				}
				$(document).on("click","#delete_student_btn",function(e){
				 	if (confirm("You Want To Delete This Record ?")) {
						var stu_id = $(this).data('stu_id');
						var course_id = $(this).data('course_id');
						$.ajax({
							url:'Ap_delete_student_ajax.php',
							type:"POST",
							data:{stu_id:stu_id,course_id:course_id},
							success:function(data){
								if (data ==1 ) {
									load_student_Data();
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