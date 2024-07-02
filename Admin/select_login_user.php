<?php
	include '../config.php';
	$select_sql = "SELECT * FROM `login`";
	$query = mysqli_query($conn,$select_sql);
	$table_content = "";
	if (mysqli_num_rows($query) > 0) {
		$table_content.="<table class='table table-hover'>
						<tr>
							<th>Profile</th>
							<th>Username</th>
							<th>Email Id</th>
							<th>Id</th>
							<th>View</th>
							<th>Delete</th>
						</tr>
						";
		while ($row = mysqli_fetch_assoc($query)) {
			$table_content.= '<tr>
								  <td><img id="profile_img" style="height: 38px;width: 38px;border-radius: 50%;" src="../'.$row['profile_img'].'" /></td>
								  <td>'.$row['username'].'</td>
								  <td>'.$row['email'].'</td>
								  <td>'.$row['id'].'</td>
								  <td><a id="view_btn" data-id="'.$row['id'].'" href="Ap_login_user_profile.php?stu_id='.$row['id'].'" class="fas fa-edit"></a></td>
								  <td><span class="fas fa-trash" id="delete_btn" data-id="'.$row['id'].'"></span></td>
							';
		}
		$table_content.="</table>";
		echo $table_content;
	}
?>
