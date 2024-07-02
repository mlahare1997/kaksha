<?php
	include '../config.php';
	$select_sql = "SELECT * FROM `review`";
	$query = mysqli_query($conn,$select_sql);
	$table_content = "";
	if (mysqli_num_rows($query) > 0) {
		$table_content.="<table class='col-xl-12 col-lg-12 col-md-12 col-sm-12 table-responsive  table table-hover'>
						<tr>
							<th>Img</th>
							<th>Review id</th>
							<th>Username</th>
							<th>User Emailid</th>
							<th>Message</th>
							<th>Rating</th>
							<th>Delete</th>
						</tr>
						";
		while ($row = mysqli_fetch_assoc($query)) {
			$table_content.= '<tr>
								  <td><img src="'.$row['review_img'].'"></td>
								  <td>'.$row['review_id'].'</td>
								  <td>'.$row['username'].'</td>
								  <td>'.$row['email'].'</td>
								  <td>'.$row['massage'].'</td>
								  <td>'.$row['rating'].'</td>
								  <td><span class="fas fa-trash" id="delete_review_btn" data-id="'.$row['review_id'].'"></span></td>
							';
		}
		$table_content.="</table>";
		echo $table_content;
	}
?>