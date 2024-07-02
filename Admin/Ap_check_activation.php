<?php
	include '../config.php';
	$select_sql = "SELECT * FROM `login` WHERE status != 1";
	$query = mysqli_query($conn,$select_sql);
	if (mysqli_num_rows($query) != 0) {
		echo 1;
	}else{
		echo 0;
	}

?>