<?php
	include '../config.php';
	$sql = "SELECT * FROM `quiz_description`";
	$query = mysqli_query($conn,$sql);
	$quiz_id = mysqli_num_rows($query);
	echo '<input type="number" value="'.$quiz_id.'" hidden id="quiz_id">';
	$activate_sql = "UPDATE `quiz_description` SET `quiz_date`= NOW(),`quiz_time`= NOW(),`status`= '1' WHERE qid = $quiz_id";
	$query = mysqli_query($conn,$activate_sql);
?>