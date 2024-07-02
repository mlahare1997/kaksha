<?php
	include '../config.php';
	$course_id = $_POST['ucourse_id'];
	$course_title = $_POST['ucourse_title'];
	$course_detail = $_POST['ucourse_detail'];
	$course_contect = $_POST['ucourse_contect'];
	$course_amrp = $_POST['ucourse_amrp'];
	$course_dmrp = $_POST['ucourse_dmrp'];

	$sql="UPDATE `coursedetail` SET course_title='$course_title',course_detail='$course_detail',course_contect='$course_contect',course_amrp = '$course_amrp',course_dmrp = '$course_dmrp' WHERE course_id='$course_id'";
	if (mysqli_query($conn,$sql)) {
		echo 1;
	}else{
		echo 0;
	}
		
	
?>