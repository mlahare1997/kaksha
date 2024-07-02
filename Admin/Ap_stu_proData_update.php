<?php
	include '../config.php';
	$stu_id = $_POST['stu_id'];
	$stu_surname = $_POST['stu_surname'];
	$stu_fname = $_POST['stu_fname'];
	$stu_lname = $_POST['stu_lname'];
	$stu_fullname = $_POST['stu_fullname'];
	$stu_email_id = $_POST['stu_email_id'];
	$stu_co_no = $_POST['stu_co_no'];
	$stu_cid = $_POST['stu_cid'];
	$stu_ctitle = $_POST['stu_ctitle'];

	$update_sql = "UPDATE `apply_course_student` SET `surname`= '$stu_surname',`fname`= '$stu_fname',`lname`= '$stu_lname',`contect_number`='$stu_co_no',`email_id`= '$stu_email_id',`fullname`= '$stu_fullname' WHERE id = $stu_id AND course_id = $stu_cid";
	$query = mysqli_query($conn,$update_sql);
	if ($query) {
		echo 1;
	}else{
		echo 0;
	}

?>