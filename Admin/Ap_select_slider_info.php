<?php
	include '../config.php';
	$select_sql = "SELECT * FROM `home_page`";
	$query = mysqli_query($conn,$select_sql);
	$table_content = "";
	if (mysqli_num_rows($query) > 0) {
		$table_content.='<table class="table table-responsive table-hover">
						<div class="d-flex justify-content-end"><button class="btn btn-danger btn-sm mb-2"><a href="Ap_add_slider_detail.php" class="text-light fas fa-plus">&nbsp; Add</a></button></div>
						<tr>
							<th>Img</th>
							<th>Id</th>
							<th>Title</th>
							<th>Description</th>
							<th>Img Name</th>
							<th>View</th>
							<th>Delete</th>
						</tr>
						';
		while ($row = mysqli_fetch_assoc($query)) {
			$table_content.= '<tr>
								  <td><img src="'.$row['img'].'" /></td>
								  <td>'.$row['id'].'</td>
								  <td>'.$row['title'].'</td>
								  <td style="width:400px;">'.$row['description'].'</td>
								  <td><p style="width:100px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">'.$row['img'].'</p></td>
								  <td><a id="view_btn" href="Ap_edit_slider_detail.php?slider_id='.$row['id'].'" class="fas fa-edit"></a></td>
								  <td><span class="fas fa-trash" id="delete_slider_btn" data-slider_id="'.$row['id'].'"></span></td>
							';
		}
		$table_content.="</table>";
		echo $table_content;
	}
?>