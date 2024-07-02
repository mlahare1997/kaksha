<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");

	// following files need to be included
	require_once("../PaytmKit/lib/config_paytm.php");
	require_once("../PaytmKit/lib/encdec_paytm.php");

	$ORDER_ID = "";
	$requestParamList = array();
	$responseParamList = array();

	if (isset($_POST["ORDER_ID"]) && $_POST["ORDER_ID"] != "") {

		// In Test Page, we are taking parameters from POST request. In actual implementation these can be collected from session or DB. 
		$ORDER_ID = $_POST["ORDER_ID"];

		// Create an array having all required parameters for status query.
		$requestParamList = array("MID" => PAYTM_MERCHANT_MID , "ORDERID" => $ORDER_ID);  
		
		$StatusCheckSum = getChecksumFromArray($requestParamList,PAYTM_MERCHANT_KEY);
		
		$requestParamList['CHECKSUMHASH'] = $StatusCheckSum;

		// Call the PG's getTxnStatusNew() function for verifying the transaction status.
		$responseParamList = getTxnStatusNew($requestParamList);
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Transaction status query</title>
<meta name="GENERATOR" content="Evrsoft First Page">
</head>
<body>
	<!-- =========================================================================================== -->
	<?php include 'Ap_Header.php'; ?>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-12 px-0">
					<?php include 'Ap_SlideBar.php'; ?>
					<div class="Admin-Right-Area">
						<div class="Admin-Top d-flex justify-content-between">
							<div id="breadcrumbs">
								<ul>
									<li><a href="../index.php"><i class="ti-home"></i>  Home</a></li>
									<li>/</li>
									<li>Add Course</li>
								</ul>
							</div>
							<div id="back-button">
								<button class="btn btn-danger btn-sm"><a href="AP-Dashbord.php"><i class="ti-angle-double-left"></i>  Back</a></button>
							</div>
						</div>
						<div class="col-xl-12 col-sm-12 Admin-dash-panel lesson_field">
							<div class="Admin-dash px-4">
								<div class="col-xl-12 col-sm-12 px-0 Admin-table1">
									<div id="Ap-Table-header">
										<p>Add Lessons</p>
									</div>
									<div class="col-xl-12 col-sm-12 search_course">
										<form action="" method="post">
											<input id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off" value="<?php echo $ORDER_ID ?>" style="width: 100%;height: 45px;border: 1px solid #ddd;padding-left: 16px;"><br>
											<input value="Status Query" type="submit" class="btn btn-info btn-sm mt-4 px-3 py-2"	onclick=""><br><br>
											<?php
												if (isset($responseParamList) && count($responseParamList)>0 )
												{ 
												?>
												<h2 class="text-center text-secondary mb-3">FEE RECEPT STATUS</h2>
												<table class=" col-xl-10 mx-auto table table-hover">
													<tbody>
														<?php
															foreach($responseParamList as $paramName => $paramValue) {
														?>
														<tr >
															<td><label><?php echo $paramName?></label></td>
															<td><?php echo $paramValue?></td>
														</tr>
														<?php
															}
														?>
													</tbody>
												</table>
												<?php
												}
												?>
<!-- 											<button type="submit"  id="search_course">Search</button>
 -->										</form>
									</div>
									<div id="load_table_data">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<!-- =========================================================================================== -->
	<!--  -->
</body>
</html>