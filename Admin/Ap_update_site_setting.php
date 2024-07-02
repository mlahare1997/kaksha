<?php
	include '../config.php';
	$site_address = $_POST['site_address'];
	$site_cno = $_POST['site_cno'];
	$about_us = $_POST['about_us'];
	$site_mail = $_POST['site_mail'];
	$head_line = $_POST['head_line'];

	$image1 = $_FILES['site_logo']['name'];
	$image2 = $_FILES['about_us_img']['name'];

	$img = "img/".$_FILES['site_logo']['name'];
	$img2 = "img/".$_FILES['about_us_img']['name'];
	if (empty($image1) && empty($image2)) {
		$query =  mysqli_query($conn,"UPDATE `site_setting` SET `address`= '$site_address',`contect_no`= '$site_cno',`email`= '$site_mail',`about_us` = '$about_us',`head_line` = '$head_line'");
	}
	if (!empty($image1) && !empty($image2)) {
		move_uploaded_file($_FILES['site_logo']['tmp_name'], "img/".$_FILES['site_logo']['name']);
		move_uploaded_file($_FILES['about_us_img']['tmp_name'], "img/".$_FILES['about_us_img']['name']);
		$query =  mysqli_query($conn,"UPDATE `site_setting` SET `site_logo`= '$img',`address`= '$site_address',`contect_no`= '$site_cno',`email`= '$site_mail',`about_us` = '$about_us',`about_img` = '$img2',`head_line` = '$head_line'");
	}
	if (!empty($image1) && empty($image2)) {
		move_uploaded_file($_FILES['site_logo']['tmp_name'], "img/".$_FILES['site_logo']['name']);
		$query =  mysqli_query($conn,"UPDATE `site_setting` SET `site_logo`= '$img',`address`= '$site_address',`contect_no`= '$site_cno',`email`= '$site_mail',`about_us` = '$about_us',`head_line` = '$head_line'");
	}
	if (empty($image1) && !empty($image2)) {
		move_uploaded_file($_FILES['about_us_img']['tmp_name'], "img/".$_FILES['about_us_img']['name']);
		$query =  mysqli_query($conn,"UPDATE `site_setting` SET `address`= '$site_address',`contect_no`= '$site_cno',`email`= '$site_mail',`about_us` = '$about_us',`about_img` = '$img2',`head_line` = '$head_line'");
	}
?>