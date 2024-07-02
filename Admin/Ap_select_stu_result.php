<?php
	include '../config.php';
	$quiz_id = $_POST['quiz_id'];
	$result = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `quiz_score` WHERE quiz_id = $quiz_id ORDER BY stu_score"));
	$select_sql = "SELECT * FROM `quiz_score` WHERE quiz_id = $quiz_id ORDER BY stu_score";
	$query = mysqli_query($conn,$select_sql);
	$table_content = "";
	if (mysqli_num_rows($query) > 0) {
		$table_content.="
					<div id='Ap-Table-header' class='mb-2'>
						<p>".$result['subject_id']." ".$result['subject_name']."</p>
					</div>
					<table class='table table-hover mt-3'>
						<tr>
							<th><p id='th_heading'>Student Id</p></th>
							<th><p id='th_heading'>Student Name</p></th>
							<th><p id='th_heading'>Quiz Id</p></th>
							<th><p id='th_heading'>Total Que</p></th>
							<th><p id='th_heading'>Total Mark</p></th>
							<th><p id='th_heading'>Student Score</p></th>
							<th><p id='th_heading'>Attempt Quation</p></th>
							<th><p id='th_heading'>Right Quation</p></th>
							<th><p id='th_heading'>Wrong Quation</p></th>
							<th><p id='th_heading'>Date & Time</p></th>
							<th><p id='th_heading'>Delete</p></th>
						</tr>
						";
		while ($row = mysqli_fetch_assoc($query)) {
			$table_content.= '<tr>
								  <td>'.$row['stu_id'].'</td>
								  <td id="stu_name_column">'.$row['stu_name'].'</td>
								  <td>'.$row['quiz_id'].'</td>
								  <td>'.$row['total_que'].'</td>
								  <td>'.$row['total_mark'].'</td>
								  <td>'.$row['stu_score'].'</td>
								  <td>'.$row['attemp_que'].'</td>
								  <td>'.$row['right_que'].'</td>
								  <td>'.$row['wrong_que'].'</td>
								  <td>'.$row['date'].'</td>
								   <td><span class="fas fa-trash" id="delete_result_btn" data-id="'.$row['id'].'"></span></td>
							';
		}
		$table_content.="</table>";
		echo $table_content;
	}
?>