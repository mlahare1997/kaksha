<?php
	include '../config.php';
	$id = $_POST['id'];
	$query = mysqli_query($conn,"UPDATE `quiz_description` SET `status`= '0' WHERE qid = $id");
	if ($query) {
		echo 1;
	}else{
		echo 0;
	}

?>