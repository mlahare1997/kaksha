<?php
	include '../config.php';
	$select_sql = "SELECT * FROM `feedback`";
	$query = mysqli_query($conn,$select_sql);
	$table_content = "";
	if (mysqli_num_rows($query) > 0) {
		$table_content.="<table class='table table-hover'>
						<tr>
							<th>Feedback Id</th>
							<th>User Id</th>
							<th>User Emailid</th>
							<th>Feedback Message</th>
							<th>Delete</th>
						</tr>
						";
		while ($row = mysqli_fetch_assoc($query)) {
			$table_content.= '<tr>
								  <td>'.$row['feedback_id'].'</td>
								  <td>'.$row['id'].'</td>
								  <td>'.$row['email'].'</td>
								  <td>'.$row['feedback_msg'].'</td>
								  <td><span class="fas fa-trash" id="delete_feedback_btn" data-id="'.$row['feedback_id'].'"></span></td>
							';
		}
		$table_content.="</table>";
		echo $table_content;
	}
?>
