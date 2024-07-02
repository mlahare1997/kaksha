<?php
	include '../config.php';
	$course_id = $_POST['file_id'];
	$select_sql = "SELECT * FROM `coursedetail` WHERE course_id = $course_id";
	$result = mysqli_query($conn,$select_sql) or die(mysqli_error($conn));
	$output="";
	if (mysqli_num_rows($result)>0) {
		
			while ($row=mysqli_fetch_assoc($result)) {
				$output .="
						   
						   <input type='text' value='{$row['course_title']}' id='course_title'name='course_title' readonly/>
						   <input type='file' id='file' name='file'/>
						   <button type='submit' class='btn btn-info my-4' id='update_course_file'><i class='ti-pencil-alt'></i>&nbsp;&nbsp;Update</button>
				";
			}
			
			mysqli_close($conn);
			echo $output;
	}else{
		echo "<h2>Record not found</h2>";

	}
?>