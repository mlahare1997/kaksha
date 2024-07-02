<?php
	include '../config.php';
	$id = $_POST['id'];

	$delete_sql = "DELETE FROM `quiz_score` WHERE id = $id";
	$query = mysqli_query($conn,$delete_sql);
	if ($query) {
		echo 1;
	}else{
		echo 0;
	}
?>