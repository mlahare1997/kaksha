<?php
	include '../config.php';
	$select_sql = "SELECT * FROM `apply_course_student`";
	$query = mysqli_query($conn,$select_sql);
	$table_content = "";
	if (mysqli_num_rows($query) > 0) {
		$table_content.="<table class='load_Stu_table table table-hover'>
						<tr>
							<th>Img</th>
							<th>Id</th>
							<th>Full Name</th>
							<th>Email Id</th>
							<th>Course Id</th>
							<th>Payment</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
						";
		while ($row = mysqli_fetch_assoc($query)) {
			$table_content.= '<tbody style="overflow-x"><tr>
								  <td><img src="../'.$row['profile_img'].'" /></td>
								  <td>'.$row['id'].'</td>
								  <td>'.$row['fullname'].'</td>
								  <td>'.$row['email_id'].'</td>
								  <td>'.$row['course_id'].'</td>
								  <td>'.$row['payment'].'</td>
								  <td><a id="view_btn" data-id="'.$row['course_id'].'" href="Ap_student_profile.php?stu_id='.$row['id'].'&course_id='.$row['course_id'].'" class="fas fa-edit"></a></td>
								  <td><span class="fas fa-trash" id="delete_student_btn" data-stu_id="'.$row['id'].'" data-course_id="'.$row['course_id'].'"></span></td>
							</tbody>';
		}
		$table_content.="</table>";
		echo $table_content;
	}
?>