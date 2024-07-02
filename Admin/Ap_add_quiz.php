<?php include 'Ap_Header.php'; ?>
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
		<link rel="stylesheet" href="../css/AP_Stylecss.css">
	</head>
	<body>
	<?php 
		include '../config.php';
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
									<li>Add Quiz</li>
								</ul>
							</div>
							<div id="back-button">
								<button class="btn btn-danger btn-sm"><a href="Ap-Dashbord.php"><i class="ti-angle-double-left"></i>  Back</a></button>
							</div>
						</div>
						<div class="col-xl-12 col-sm-12 Admin-dash-panel lesson_field">
							<div class="Admin-dash mb-5 pb-2">
								<div class="col-xl-12 col-sm-12 px-0 Admin-table1">
									<div id="Ap-Table-header" class="mb-3">
										<p>Add Quiz</p>
									</div>
									<div class="col-xl-12 quiz_area px-1 h-100">
										<div id="select_list_area" class="w-100">
					                    </div>
					                    <form class="load_quiz_fields px-0" id="insert_quiz">
					                    	
					                    </form>
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
		            loadSublist();
		            function loadSublist(){
		                $.ajax({
		                    url : "Ap_Quiz_load_sub_list.php",
		                    type : "POST",
		                    success : function(data){
		                        $('#select_list_area').html(data);
		                    }
		                });
		            }
		            $(document).on('click', '.send_quiz_title', function(event) {
		            	event.preventDefault();//end_time
		            	var subject_id = $('#select_sub_list').val();//mark_que
		            	var end_time = $('.end_time').val();//mark_que
		            	var mark_que = $('.mark_que').val();//mark_que
		            	if($('#select_sub_list')[0].selectedIndex <= 0){
							alert('Please , Select Any One Subject!...');
						}else{
							if (end_time == "" || mark_que == "") {
								alert("All Fields are Required");
							}else{
								$.ajax({
				            		url : "Ap_add_QA.php",
				            		type : "POST",
				            		data : {subject_id:subject_id,end_time:end_time,mark_que:mark_que},
				            		success : function(data){
				            			$('.load_quiz_fields').html(data);
				            		}
				            	});
							}
						}
		            });
		            $(document).on('click', '#add_quiz_btn', function(event) {
						event.preventDefault();
						$.ajax({
							url : 'Ap_add_QA_Ajax.php',
							type : "POST",
							data : $('#insert_quiz input,#insert_quiz textarea').serialize(),
							success : function(data){
								alert('Data Uploaded Successfully...');
								$('#insert_quiz').trigger('reset');
							}
						});	
						
					});
					$(document).on('click', '#activate_btn', function(event) {
						event.preventDefault();
						$.ajax({
							url : 'Ap_activate_quiz.php',
							type : 'POST',
							success : function(data){
								$('.timer').html(data);
								alert('Your Quiz , Activated Successfully...!');	
							}
						});
					});
		        });
		</script>
	</body>
</html>