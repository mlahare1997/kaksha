<?php
	include '../config.php';
	$id = $_POST['id'];

	$delete_sql = "DELETE FROM `quiz_description` WHERE qid = $id";
	$query = mysqli_query($conn,$delete_sql);
	if ($query) {
		echo 1;
	}else{
		echo 0;
	}
?>