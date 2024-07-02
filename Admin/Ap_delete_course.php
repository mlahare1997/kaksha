<?php
	include '../config.php';
	$course_id = $_POST['course_id'];

	$delete_sql = "DELETE FROM `coursedetail` WHERE course_id = $course_id";
	$query = mysqli_query($conn,$delete_sql);
	$delete_sql = "DELETE FROM `apply_course_student` WHERE course_id = $course_id";
	$query = mysqli_query($conn,$delete_sql);
	$delete_sql = "DELETE FROM `course_lessons` WHERE course_id = $course_id";
	$query = mysqli_query($conn,$delete_sql);
	if ($query) {
		echo 1;
	}else{
		echo 0;
	}
?>