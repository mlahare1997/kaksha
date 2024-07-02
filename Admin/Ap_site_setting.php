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
									<li>Site Setting</li>
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
										<p>Site Setting</p>
									</div>
									<div class="col-xl-12 col-sm-12 search_course ">
										<form enctype="multipart/form-data" id="update_site_data" action="Ap_update_site_setting.php" method="post">
											<?php
												$query = mysqli_query($conn,"SELECT * FROM `site_setting`");
												$row = mysqli_fetch_assoc($query);
												if (mysqli_num_rows($query)) {
													echo '
														<div class="d-flex justify-content-between align-items-center mb-1">
														<label class="text-secondary">Your Site Logo : </label>
														<input type="file" name="site_logo" placeholder="Enter Site Logo..." value="" class="w-50"><img src="'.$row['site_logo'].'" alt="" width="180" height="60"></div>
														<input type="text" placeholder="Enter Address" name="site_address" value="'.$row['address'].'">
														<input type="text" placeholder="Enter Contect no" name="site_cno" value="'.$row['contect_no'].'">
														<input type="text" placeholder="Enter Email" name="site_mail" value="'.$row['email'].'">
														<div class="d-flex align-items-center justify-content-between"><label class="text-secondary">About us Title Page : </label><input type="file" name="about_us_img"class="w-50"><img src="'.$row['about_img'].'" alt="" width="180" height="60"></div>
														<input type="text" placeholder="Enter About Us Page Headline" value="'.$row['head_line'].'" name="head_line">
														<textarea name="about_us" style="height:120px;">'.$row['about_us'].'</textarea>
														<button type="submit" class="btn btn-info btn-sm mt-4 px-3 py-2 mb-3" name="search_course">Upload</button>
													';
												}
											?>
											
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
			$("#update_site_data").on('submit',(function(e){ e.preventDefault();
					$.ajax({
						url: "Ap_update_site_setting.php",
						type: "POST",
						data: new FormData(this),
						contentType: false, cache: false, processData:false,
						success: function(data){
							alert('Data Uploaded Successfully...');
							window.location = 'Ap_site_setting.php'; 
						},
						error: function(){}
					});
				}));
		</script>
	</body>
</html>


























