<?php
	include '../config.php';
	$course_id = $_POST['course_id'];
	$course_title = $_POST['course_title'];
	$lesson_name = $_POST['lesson_name'];
	$lesson_description = $_POST['lesson_description'];
	if(isset($_FILES['lesson_video_file']['name'])){

	   /* Getting file name */
	   $filename = $_FILES['lesson_video_file']['name'];
	   
	   /* Location */
	   $location = "lesson_video/".$filename;
	    /* Upload file */
	      if(move_uploaded_file($_FILES['lesson_video_file']['tmp_name'],$location)){
	      	$insert_sql = "INSERT INTO `course_lessons`(`course_id`, `course_title`, `lesson_title`, `lesson_desc`, `lesson_id`, `lesson_video_link`) VALUES ($course_id,'$course_title','$lesson_name','$lesson_description',NULL,'$location')";
	      	$query = mysqli_query($conn,$insert_sql);
	      	if ($query) {
	      		echo 1;
	      	}else{
	      		echo 0;
	      	}
	      }
	}
?>