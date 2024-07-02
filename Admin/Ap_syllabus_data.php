<?php
	include '../config.php';
	$course_id = $_POST['course_id'];
	$load_lesson_title = "";
	$load_lesson_data = "";
	$query = mysqli_query($conn,"SELECT * FROM `coursedetail` WHERE course_id = $course_id");
	$result = mysqli_fetch_assoc($query);
	if (mysqli_num_rows($query) != 0) {
		$chk_query = mysqli_query($conn,"SELECT * FROM `course_syllabus` WHERE c_id = $course_id");
		if (mysqli_num_rows($chk_query) == 0) {
			$load_lesson_title.= '
				<div class="d-flex justify-content-end">
					<button class="btn btn-danger btn-sm mb-2"><a href="Ap_add_syllabus.php?course_id='.$course_id.'" class="fas fa-plus-square text-light">&nbsp; Add</a></button>
				</div>';			
		}
		$load_lesson_title.= '<div id="Ap-Table-header">
				<p>&nbsp;&nbsp;'.$result["course_id"].'&emsp; '.$result['course_title'].'</p>
			</div>';
		echo $load_lesson_title;		
		$select_sql = "SELECT * FROM `course_syllabus` WHERE c_id = $course_id";
		$query = mysqli_query($conn,$select_sql);
		if (mysqli_num_rows($query) > 0) {
			$load_lesson_data.='
							<table class="table table-hover lesson_table px-4">
							<tr>
								<th>Course Id</th>
								<th>Course Description</th>
								<th>Course Syllabus</th>
								<th>Update</th>
								<th>Delete</th>

							</tr>
							
							';
			while ($row = mysqli_fetch_assoc($query)) {
				$load_lesson_data.= '<tr>
										  <td>'.$row['c_id'].'</td>
										  <td>'.$row['c_detail'].'</td>
										  <td>RP12'.$row['course_syllabus'].'</td>
										  <td><a id="view_btn" data-id="'.$row['id'].'" href="Ap_update_cdetail.php?course_id='.$row['c_id'].'" class="fas fa-edit"></a></td>
										  <td><span class="fas fa-trash" id="delete_cdetail_btn" data-cid="'.$row['id'].'"></span></td>
									 </tr>
									  
									  
								';
			}
			$load_lesson_data.="</table>";
			echo $load_lesson_data;
		}else{
			echo "<h4>Ooops!Data Not Found...</h4>";
		}
	}else{
		echo "<h4>Ooops!Data Not Found...</h4>";
	}


?>