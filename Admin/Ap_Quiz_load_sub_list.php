<?php
	include '../config.php';
	$sql = "SELECT * FROM `coursedetail`";
	$query = mysqli_query($conn,$sql);
	$select_list = "";
	if (mysqli_num_rows($query) > 0) {
		$select_list.= ' 
							 <select class="w-100" name="select_sub_list" id="select_sub_list" style="height:40px;border:1px solid #ddd; outline:none;padding-left:16px;">
							 <option value="" disabled selected>Choose option</option>
		';
		while ($row = mysqli_fetch_assoc($query)) {
			$select_list.='
							 <option style="padding-left:16px;" value="'.$row['course_title'].'">'.$row['course_title'].'</option>
						  ';
		}
		$select_list.='
							<input type="number" placeholder="Enter Time of Quiz (IN MINUTE)" style="height:40px;border:1px solid #ddd; outline:none;padding-left:16px; width:100%; margin-top:16px;" class="end_time" required>
							<input type="number" class="mark_que" placeholder="Enter Mark Of Quation (ONE QUATION)" style="height:40px;border:1px solid #ddd; outline:none;padding-left:16px; width:100%; margin-top:16px;" required>
							</select><br><br>
							<button type="submit" class="btn btn-info px-3 send_quiz_title"><i class="ti-search"></i>&nbsp; Search</button>
					  ';

	}
	echo $select_list;
?>