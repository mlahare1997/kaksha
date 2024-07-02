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
									<li>All Quiz</li>
								</ul>
							</div>
							<div id="back-button">
								<button class="btn btn-danger btn-sm"><a href="Ap-Dashbord.php"><i class="ti-angle-double-left"></i>  Back</a></button>
							</div>
						</div>
						<div class="col-xl-12  Admin-dash-panel">
							<div class="Admin-dash">
								<div class="col-xl-12 px-0 Admin-table1">
									<div id="Ap-Table-header" class="mb-2">
										<p>All Quiz</p>
									</div>
									<div class="container">
										<div class="row">
											<div class="col-xl-12 All_quiz_content">
												
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
			$(document).ready(function() {
				load_Quiz_Data();
				function load_Quiz_Data(){
            		$.ajax({
						url : "Ap_select_all_quiz.php",
						type : 'POST',
						success : function(data){
							$('.All_quiz_content').html(data);
						}
					});
				}
				$(document).on("click","#delete_quiz_btn",function(e){
				 	if (confirm("You Want To Delete This Record ?")) {
						var id = $(this).data('id');
						$.ajax({
							url:'Ap_delete_quiz.php',
							type:"POST",
							data:{id:id},
							success:function(data){
								if (data ==1 ) {
									load_Quiz_Data();
									$(this).closest('tr').SlideUp('slow');
								}else{
									return false;
								}

							}
						});	
					}			
				});
				$(document).on('click', '#deactivate_btn', function(event) {
					event.preventDefault();
					var id = $(this).data('id');
					$.ajax({
						url : "Ap_deactivate_quiz.php",
						type : "POST",
						data : {id:id},
						success : function(data){
							if (data == 1) {
								load_Quiz_Data();
								alert('Quiz Deactivated Successfully...');	
							}else{
								alert('Oops! Somthing Went Wrong...');
							}
							
						}
					});
				});
				$(document).on('click', '#activate_btn', function(event) {
					event.preventDefault();
					var id = $(this).data('id');
					$.ajax({
						url : "Ap_activate_quiz_p.php",
						type : "POST",
						data : {id:id},
						success : function(data){
							if (data == 1) {
								load_Quiz_Data();
								alert('Quiz Activated Successfully...');	
							}else{
								alert('Oops! Somthing Went Wrong...');
							}
							
						}
					});
				});
			});
		</script>
</body>
</html>