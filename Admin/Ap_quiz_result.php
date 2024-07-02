<?php include 'Ap_Header.php'; ?>
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
	
	<div class="container-fluid px-0">
			<div class="row">
				<div class="col-xl-12">
					<?php include 'Ap_SlideBar.php'; ?>
					<div class="Admin-Right-Area">
						<div class="Admin-Top d-flex justify-content-between">
							<div id="breadcrumbs">
								<ul>
									<li><a href="../index.php"><i class="ti-home"></i>  Home</a></li>
									<li>/</li>
									<li>Quiz Result</li>
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
										<p>Quiz Result</p>
									</div>
									<div class="container">
										<div class="row">
											<form action="" id="quiz_result">
												<input type="number" id="quiz_id" placeholder="ENTER QUIZ ID">
												<button class="search_stu_score btn btn-sm btn-info py-2 mt-4 px-3"> <i class="ti ti-search"></i>&nbsp; Search</button>
											</form>
											<div class="col-xl-12 px-0 quiz_result">
												
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
				$(document).on('click', '.search_stu_score', function(event) {
					event.preventDefault();
					load_login_resultData();						
				});
				function load_login_resultData(){
					var quiz_id = $('#quiz_id').val();
            		$.ajax({
						url : "Ap_select_stu_result.php",
						type : 'POST',
						data : {quiz_id:quiz_id},
						success : function(data){
							$('.quiz_result').html(data);
						}
					});
				}
				$(document).on("click","#delete_result_btn",function(e){
				 	if (confirm("You Want To Delete This Record ?")) {
						var id = $(this).data('id');
						$.ajax({
							url:'Ap_delete_result.php',
							type:"POST",
							data:{id:id},
							success:function(data){
								if (data ==1 ) {
									load_login_resultData();
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