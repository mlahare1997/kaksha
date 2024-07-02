<?php
	include '../config.php';
	$id = $_POST['id'];
	$delete_sql = "DELETE FROM `course_lessons` WHERE lesson_id = $id";
	$query = mysqli_query($conn,$delete_sql);
	if ($query) {
		echo 1;
	}else{
		echo 0;
	}
?>