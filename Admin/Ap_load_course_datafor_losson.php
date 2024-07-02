<?php
	include '../config.php';
	$course_id = $_POST['course_id'];
	$load_lesson_title = "";
	$load_lesson_data = "";
	$query = mysqli_query($conn,"SELECT * FROM `coursedetail` WHERE course_id = $course_id");
	$result = mysqli_fetch_assoc($query);
	if (mysqli_num_rows($query)) {
		$load_lesson_title.= '
						<div class="d-flex justify-content-end">
							<button class="btn btn-danger btn-sm mb-2"><a href="Ap_add_lessons.php?course_id='.$course_id.'" class="fas fa-plus-square text-light">&nbsp; Add</a></button>
						</div>
						<div id="Ap-Table-header">
							<p>&nbsp;&nbsp;'.$result["course_id"].'&emsp; '.$result['course_title'].'</p>
						</div>';
		echo $load_lesson_title;		
	}else{
		echo "<h4>This Course is Not Available...</h4>";
	}
	$select_sql = "SELECT `course_id`, `course_title`, `lesson_title`, `lesson_desc`, `lesson_id`, `lesson_video_link` FROM `course_lessons` WHERE course_id = $course_id";
	$query = mysqli_query($conn,$select_sql);
	if (mysqli_num_rows($query) > 0) {
		$load_lesson_data.='
						<table class="table table-hover lesson_table px-4">
						<tr>
							<th>Lesson Id</th>
							<th>Lesson Title</th>
							<th>Lesson Description</th>
							<th>Update</th>
							<th>Delete</th>

						</tr>
						
						';
		while ($row = mysqli_fetch_assoc($query)) {
			$load_lesson_data.= '<tr>
									  <td>'.$row['lesson_id'].'</td>
									  <td>'.$row['lesson_title'].'</td>
									  <td>RP12'.$row['lesson_desc'].'</td>
									  <td><a id="view_btn" data-id="'.$row['lesson_id'].'" href="Ap_update_lesson_data.php?lesson_id='.$row['lesson_id'].'" class="fas fa-edit"></a></td>
									  <td><span class="fas fa-trash" id="delete_btn" data-id="'.$row['lesson_id'].'"></span></td>
								 </tr>
								  
								  
							';
		}
		$load_lesson_data.="</table>";
		echo $load_lesson_data;
	}
	?>




























