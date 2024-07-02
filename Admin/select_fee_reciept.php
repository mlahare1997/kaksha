<?php
	include '../config.php';
	$select_sql = "SELECT * FROM `fee_recipe`";
	$query = mysqli_query($conn,$select_sql);
	$table_content = "";
	if (mysqli_num_rows($query) > 0) {
		$table_content.="<table class='table table-hover'>
			<button class='float-right mb-2 bnt btn-danger btn-sm'><a href='Ap_check_fee_recipe.php' class='text-light'><span class='ti-eye'></span>View More</a></button>
						<tr>
							<th>StuId</th>
							<th>ORDERID</th>
							<th>TXNAMO.</th>
							<th>PAYMENT<br>MODE</th>
							<th>CURRENCY</th>
							<th>TXNDATE</th>
							<th>STATUS</th>
							<th>BNKTXNID</th>
							<th>BNK</th>
						</tr>
						";
		while ($row = mysqli_fetch_assoc($query)) {
			$table_content.= '<tr>
								  <td>'.$row['stu_id'].'</td>
								  <td>'.$row['order_id'].'</td>
								  <td>'.$row['txnamount'].'</td>
								  <td>'.$row['payment_mode'].'</td>
								  <td>'.$row['currency'].'</td>
								  <td>'.$row['txn_date'].'</td>
								  <td>'.$row['status'].'</td>
								  <td>'.$row['banktxnid'].'</td>
								  <td>'.$row['bankname'].'</td>
								  <td><span class="fas fa-trash" id="delete_btn" data-id="'.$row['id'].'"></span></td>
							';
		}
		$table_content.="</table>";
		echo $table_content;
	}
?>
