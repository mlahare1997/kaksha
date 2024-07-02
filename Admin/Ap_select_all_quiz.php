<?php
	include '../config.php';
	$select_sql = "SELECT * FROM `quiz_description`";
	$query = mysqli_query($conn,$select_sql);
	$table_content = "";
	if (mysqli_num_rows($query) > 0) {
		$table_content.="
					<button class='btn btn-danger btn-sm float-right mb-3'><a href='Ap_quiz_result.php' class='text-light'><span class='far fa-eye'></span>&nbsp; View Score</a></button>
					<table class='table table-hover'>
						<tr>
							<th>Id</th>
							<th>Quiz Id</th>
							<th>Quiz Date & Time</th>
							<th>Quiz Time</th>
							<th>Mark</th>
							<th>Status</th>
							<th>Delete</th>
							<th>Status</th>
						</tr>
						";
		while ($row = mysqli_fetch_assoc($query)) {
			$table_content.= '<tr>
								  <td>'.$row['qid'].'</td>
								  <td>'.$row['quiz_title'].'</td>
								  <td>'.$row['quiz_date']." ".$row['quiz_time'].'</td>
								  <td>'.$row['end_time'].'</td>
								  <td>'.$row['mark_que'].'</td>
								  <td>'.$row['status'].'</td>
								  <td><span class="fas fa-trash" id="delete_quiz_btn" data-id="'.$row['qid'].'"></span></td>
			 ';
			if ($row['status'] == "1") {
				$table_content.= '
				  <td><span class="far fa-pause-circle" id="deactivate_btn" data-id="'.$row['qid'].'"></span></td>
				';	
			}else if ($row['status'] == "0"){
				$table_content.= '
				  <td><span class="far fa-play-circle" id="activate_btn" data-id="'.$row['qid'].'"></span></td>
				';
			}
			
		}
		$table_content.="</table>";
		echo $table_content;
	}
?>