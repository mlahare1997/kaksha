<?php
	include '../config.php';
	$subject_id = $_POST['subject_id'];
	$row = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `coursedetail` WHERE course_title = '$subject_id'"));
	$course_id = $row['course_id'];
	$end_time = $_POST['end_time'];
	$mark_que = $_POST['mark_que'];
	//$insert_sql = "INSERT INTO `quiz_description`(`id`, `quiz_title`, `quiz_date`, `quiz_time`) VALUES (NULL,'$subject_id',NOW(),NOW())";
	//$insert_sql = "INSERT INTO `quiz_description`(`id`, `quiz_title`, `quiz_date`, `quiz_time`, `status`, `end_time`) VALUES (NULL,'$subject_id',NOW(),NOW(),'0','')";
	$insert_sql = "INSERT INTO `quiz_description`(`qid`, `quiz_title`, `quiz_date`, `quiz_time`, `status`, `end_time`, `mark_que`) VALUES (NULL,'$course_id',NOW(),NOW(),'0','$end_time','$mark_que')";
	$query = mysqli_query($conn,$insert_sql);
		echo '
			<div class="quiz_heading">
				<h4>'.$subject_id.'</h4>
			</div>
			<input type="text" name="quiz_title" value="'.$course_id.'" hidden>
			<input type="text" value="'.$end_time.'" id="timer" name="choice1" hidden>
			<textarea type="text" placeholder="Quation" name="quation"></textarea><br>
			<input type="text" placeholder="Option 1" name="choice1"><br>
			<input type="text" placeholder="Option 2" name="choice2"><br>
			<input type="text" placeholder="Option 3" name="choice3"><br>
			<input type="text" placeholder="Option 4" name="choice4"><br>
			<input type="text" placeholder="Correct Choice" name="correct_choice"><br>
			<button class="btn btn-primary px-4 mt-3" id="add_quiz_btn"><i class="fas fa-share"></i>&nbsp; Add</button>
			';
		echo '
				<form>
					<p class="text-capitalize text-secondary my-3"><strong>Note &nbsp;</strong>&nbsp; add your all quations in this quiz , then after press this activate button.after press this button then and then this quiz is show to students And In correct choice field enter the correct and in number like 1st choice 2nd...!<p>
					<div class="quiz_activation d-flex justify-content-between">
						<div class="d-flex justify-content-center">
							<button class="btn btn-danger btn-sm my-1" type="button" name="activate_btn" id="activate_btn">ACTIVATE</button>
						</div>
					</div>
				</form>
			';		
	// $find_sql = "SELECT * FROM `quiz_description`";
	// $row = mysqli_num_rows(mysqli_query($conn,$find_sql));
	// $search_sql = "SELECT * FROM `quiz_que` WHERE quiz_id = $row";
	// $query = mysqli_query($conn,$search_sql);
	// if (mysqli_num_rows($query) > 0) {
	// 	echo '<button type="button" class="bnt btn-primary btn-sm px-3 py-1 my-4">Activate</button>';
	// }

?>