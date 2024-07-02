<?php
	include '../config.php';
	$select_sql = "SELECT * FROM `coursedetail`";
	$query = mysqli_query($conn,$select_sql);
	$table_content = "";
	if (mysqli_num_rows($query) > 0) {
		$table_content.='
						<div><button class="btn btn-danger float-left btn-sm mb-2"><a href="Ap-Add-course.php" class="text-light"><span class="fas fa-plus"></span>&nbsp; Add<a></button></div>
						<div><button class="btn btn-danger float-right btn-sm mb-2"><a href="Ap_Edit_course.php" class="text-light"><i class="ti-pencil"></i>&nbsp; Edit<a></button></div>
						<table class="table table-hover">
						<tr>
							<th>Img</th>
							<th>Id</th>
							<th>Title</th>
							<th>Description</th>
							<th>AMRP</th>
							<th>contect Info.</th>
							<th>Delete</th>
						</tr>
						';
		while ($row = mysqli_fetch_assoc($query)) {
			$table_content.= '<tr>
								  <td><img src="'.$row['course_file'].'" /></td>
								  <td>'.$row['course_id'].'</td>
								  <td>'.$row['course_title'].'</td>
								  <td><p style="white-space: nowrap;width: 300px;overflow: hidden;text-overflow: ellipsis;color:#000;">'.$row['course_detail'].'</p></td>
								  <td>'.$row['course_amrp'].'</td>
								  <td>'.$row['course_contect'].'</td>
								  <td><span class="fas fa-trash" id="delete_course_btn" data-course_id="'.$row['course_id'].'"></span></td>
							';
		}
		$table_content.="</table>";
		echo $table_content;
	}
?>