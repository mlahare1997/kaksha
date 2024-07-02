<?php
	include '../config.php';
	$course_id = $_POST['course_id'];
	$select_sql = "SELECT * FROM `coursedetail` WHERE course_id = $course_id";
	$result = mysqli_query($conn,$select_sql) or die(mysqli_error($conn));
	$output="";
	if (mysqli_num_rows($result)>0) {
		$output='<form>';
			while ($row=mysqli_fetch_assoc($result)) {
				$output .="
						   <button type='submit' class='btn btn-danger btn-sm mt-1 float-right' id='reset_button'><i class='ti-reload'></i>&nbsp;&nbsp;Reset</button>
						   <input type='number' value='{$row['course_id']}' id='update_cid' readonly>
						   <input type='text' value='{$row['course_title']}' id='update_ctitle'>
						   <textarea placeholder='Enter Course Description.' class='mt-4' rows='3' cols='80' id='update_cdetail'>{$row['course_detail']}</textarea>
						   <input type='text' value='{$row['course_contect']}' id='update_contect'>
						   <input type='text' value='{$row['course_amrp']}' id='update_camrp'>
						   <input type='text' value='{$row['course_dmrp']}' id='update_cdmrp'>
						   <button type='submit' class='btn btn-info my-4' id='update_course_info'><i class='ti-pencil-alt'></i>&nbsp;&nbsp;Update</button>
				";
			}
			$output .="</form>";
			mysqli_close($conn);
			echo $output;
	}else{
		echo "<h2>Record not found</h2>";

	}
		
	
?>