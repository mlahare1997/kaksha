<?php
	include('config.php');
	$course_title = $_POST['course_title'];
	echo $course_title;
	if(isset($_FILES['file']['name'])){

	   /* Getting file name */
	    $filename = $_FILES['file']['name'];
	   
	   /* Location */
	   $location = "img/".$filename;
	   $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
	   $imageFileType = strtolower($imageFileType);

	   /* Valid extensions */
	   $valid_extensions = array("jpg","jpeg","png");

	   $response = 0;
	   /* Check file extension */
	   if(in_array(strtolower($imageFileType), $valid_extensions)) {
	      /* Upload file */
	      if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
	         $response = $location;

	         $update_sql = "UPDATE `coursedetail` SET `course_file`= '$location' WHERE course_title = '$course_title'";
	         $query = mysqli_query($conn,$update_sql) or die(mysqli_error($conn));
	         if ($query) {
	         	echo "FILE UPLODEDE SUCCESSFULLY";
	         }else{
	         	echo "Error";
	         }
	      }
	   }else{
	   		echo "<script></script>";
	   }

	   echo $response;
	   exit;
	}
		

?>