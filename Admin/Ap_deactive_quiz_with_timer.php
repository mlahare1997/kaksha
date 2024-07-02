<?php
	include '../config.php';
	$quiz_id = $_POST['quiz_id'];
	echo $quiz_id;
	$sql = "UPDATE `quiz_description` SET `status`= '0' WHERE id = $quiz_id";
	$query = mysqli_query($conn,$sql);

?>