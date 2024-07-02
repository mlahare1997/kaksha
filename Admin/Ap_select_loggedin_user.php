<?php
	include '../config.php';
	$get = $_GET['stu_id'];
	$load_data = "";
	$select_sql = "SELECT * FROM `login` WHERE id = $get";
	$query = mysqli_query($conn,$select_sql);
	if (mysqli_num_rows($query) > 0) {
		$load_data.="";
		while ($row = mysqli_fetch_assoc($query)) {
			$load_data.='
						<div class="col-xl-3">
							<label for="crop_img" style="border-radius: 50%;" class="crop_user_img btn py-2 btn-primary"><span class="fas fa-camera"></span></label>';
			if ($row['profile_img'] != "") {
				$load_data.='<div><img src="../'.$row['profile_img'].'" alt="" height="450" class="img-thumbnail w-100 img-fluid"></div>';
			}else{
				$load_data.='<div><img src="img/Ap3.jpg" alt="" height="450" class="img-thumbnail w-100 img-fluid"></div>';
			}				
			$load_data.='	<div class="stu_profile_detail">
								<h5>'.$row['username'].'</h5>
								<span>User Id : RP12'.$row['id'].'</span>
								<hr>
								<span>Email : <br><span>'.$row['email'].'</span></span>
								
							</div>
						</div>
						<div class="col-xl-9 px-5">
							<form id="loggedin_user">
								<b>User Id : &emsp;  </b><input type="number" value="'.$row['id'].'" readonly id="alu_id"><br>
								<b>Username : </b><input type="text" value="'.$row['username'].'" id="alu_username"><br>
								<b>Email Id : &emsp;</b><input type="text" value="'.$row['email'].'" id="alu_email"><br>
								<b>Password : &nbsp</b><input type="text" value="'.$row['password'].'" id="alu_password"><br>
								<b>Status :&emsp;&emsp;</b><input type="text" value="'.$row['status'].'" id="alu_status"><br>	
								<p class="mt-3 pl-0"><b>Note&nbsp;:</b><span>&nbsp;In Status Input Field,You Can add 1 Or 0,1 means Activate And 0 means Deactivate.</span></p>
								<button class="btn btn-primary mt-2" id="alu_save" type="submit"><i class="ti-pencil-alt"></i>&nbsp;&nbsp;Update</button>
							</form>
						</div>
				
			';
		}
		
	}
	echo $load_data;

?>
