<?php
	include '../config.php';
	$stu_id = $_POST['stu_id'];
	$course_id = $_POST['course_id'];

	$delete_sql = "DELETE FROM `apply_course_student` WHERE id = $stu_id AND course_id = $course_id";
	$query = mysqli_query($conn,$delete_sql);
	if ($query) {
		echo 1;
	}else{
		echo 0;
	}
?>