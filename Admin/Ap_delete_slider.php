<?php
	include '../config.php';
	$slider_id = $_POST['slider_id'];

	$delete_sql = "DELETE FROM `home_page` WHERE id = $slider_id";
	$query = mysqli_query($conn,$delete_sql);
	if ($query) {
		echo 1;
	}else{
		echo 0;
	}
?>