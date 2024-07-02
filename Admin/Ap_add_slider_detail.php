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
									<li>Slider Setting</li>
								</ul>
							</div>
							<div id="back-button">
								<button class="btn btn-danger btn-sm"><a href="Ap_slider_setting.php"><i class="ti-angle-double-left"></i>  Back</a></button>
							</div>
						</div>
						<div class="col-xl-12  Admin-dash-panel">
							<div class="Admin-dash">
								<div class="col-xl-12 px-0 Admin-table1">
									<div id="Ap-Table-header" class="mb-2">
										<p>Add Slider Detail</p>
									</div>
									<div class="container">
										<div class="row">
											<div class="col-xl-12 add_slider_content">
												<form action="" method="post" enctype="multipart/form-data">
													<input type="text" placeholder="Enter Slider Title" name="slider_title">
													<textarea style="height: 90px; margin-top: 25px;" type="text" placeholder="Enter Slider Description" name="slider_description"></textarea>
													<input type="file" name="slider_img">
													<button class="btn btn-primary btn-sm px-3 py-2 my-4" name="submit_slider"><i class="ti-save"></i>&nbsp; Save</button>
												</form>
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
		<?php
			include '../config.php';
			if (isset($_POST['submit_slider'])) {
				$slider_title = $_POST['slider_title'];
				$slider_description = $_POST['slider_description'];
				$slider_name = $_FILES['slider_img']['name'];
				$slider_tmp = $_FILES['slider_img']['tmp_name'];
				$ex = explode(".", $slider_name);
				$exten = end($ex);
				$extension = ['jpg','png','jpeg'];
				if (in_array($exten, $extension)) {
					$folder_path = "img/".$slider_name;
					if (move_uploaded_file($slider_tmp, $folder_path)) {
						$insert_sql = "INSERT INTO `home_page`(`id`, `title`, `description`, `img`) VALUES (NULL,'$slider_title','$slider_description','$folder_path')";
						$query = mysqli_query($conn,$insert_sql);
						if ($query) {
							echo "<script>alert('Data Inserted Successfully...');</script>";
							echo "<script>window.location = 'Ap_add_slider_detail.php'</script>";
						}
					}
				}else{
					echo "<script>alert('You can Add JPEG PNG and JPG Files...');</script>";
				}
			}
			


		?>
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
		</script>
</body>
</html>