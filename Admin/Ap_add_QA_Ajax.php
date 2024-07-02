<?php
	include '../config.php';
	$quiz_title = $_POST['quiz_title'];
	//echo $quiz_title;
	// $select_sql = "SELECT * FROM `quiz_description`";
	// $query = mysqli_query($conn,$select_sql);
	// $que_count = mysqli_num_rows($query);
	$select_sql = "SELECT * FROM `quiz_description`";
	$quiz_id = mysqli_num_rows(mysqli_query($conn,$select_sql));
	$que_sql = "SELECT * FROM `quiz_que`";
	$query = mysqli_query($conn,$que_sql);
	$que_id = mysqli_num_rows($query) + 1;
	//echo $quiz_id;//quiz count
	$quation = $_POST['quation'];
	
	$choice = array();
	$choice[1] = $_POST['choice1'];
	$choice[2] = $_POST['choice2'];
	$choice[3] = $_POST['choice3'];
	$choice[4] = $_POST['choice4'];
	$correct_choice = $_POST['correct_choice'];	

		$insert_sql = "INSERT INTO `quiz_que`(`quation_id`, `quation_text`, `quiz_id`) VALUES (NULL,'$quation',$quiz_id)";
		$query = mysqli_query($conn,$insert_sql);
		$is_correct = "";
		foreach ($choice as $option => $value) {
			if ($correct_choice == $option) {
					$is_correct = 1;
				}else{
					$is_correct = 0;
				}
			$insert_sql = "INSERT INTO `quiz_ans`(`ans_id`, `ans_text`, `aquation_id`, `is_correct`) VALUES (NULL,'$value',$que_id,$is_correct)";
			$query = mysqli_query($conn,$insert_sql);	
			if ($query) {
				echo 1;
			}else{
				echo 0;
			}
		}


	
?>