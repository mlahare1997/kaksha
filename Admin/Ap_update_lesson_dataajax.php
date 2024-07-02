<?php
	include '../config.php';
	$lesson_id = $_POST['lesson_id'];
	$lesson_name = $_POST['lesson_name'];
	$lesson_description = $_POST['lesson_description'];
	if(isset($_FILES['lesson_video_file']['name'])){

	   /* Getting file name */
	   $filename = $_FILES['lesson_video_file']['name'];
	   
	   /* Location */
	   $location = "lesson_video/".$filename;
	    /* Upload file */
	    move_uploaded_file($_FILES['lesson_video_file']['tmp_name'],$location);
	    $insert_sql = "UPDATE `course_lessons` SET `lesson_title`='$lesson_name',`lesson_desc`= '$lesson_description',`lesson_video_link`='$location' WHERE lesson_id = '$lesson_id'";
      	$query = mysqli_query($conn,$insert_sql);
      	if ($query) {
      		echo 1;
      	}else{
      		echo 0;
      	}
	}
?>