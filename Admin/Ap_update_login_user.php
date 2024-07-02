<?php
	include '../config.php';
	$alu_id = $_POST['alu_id'];
	$alu_username = $_POST['alu_username'];
	$alu_email = $_POST['alu_email'];
	$alu_password = $_POST['alu_password'];
	$alu_status = $_POST['alu_status'];
	$update_sql = "UPDATE `login` SET `username`= '$alu_username',`email`= '$alu_email',`password`= '$alu_password',`status`= $alu_status WHERE id= $alu_id";
	$query = mysqli_query($conn,$update_sql);
	if ($query) {
		echo 1;
	}else{
		echo 0;
	}
?>