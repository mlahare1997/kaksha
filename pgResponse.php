<?php
include 'session_check.php';
if (!(isset($_SESSION['id'])) && !(isset($_SESSION['admin_id']))) {
    echo "<script>alert('Please Login Our Site...');window.location = 'index.php';</script>";
}

$stu_id = $_GET['si'];
$_SESSION['id'] = $stu_id;
$stu_data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `login` WHERE id = $stu_id"));
$stu_username = $stu_data['username'];
$_SESSION['username'] = $stu_username;
$stu_email = $stu_data['email'];
$_SESSION['email'] = $stu_email;
if (isset($_SESSION['id'])) {
    include 'Header_top.php';
}

include 'Navbar.php';
include 'Header_search.php';
include 'config.php';
if (isset($_POST) && count($_POST) > 0) {
    echo "";
}

$course_id = $_GET['course_id'];
$sql = "SELECT * FROM `coursedetail` WHERE course_id = $course_id";
$row = mysqli_fetch_assoc(mysqli_query($conn, $sql));
$course_price = $row['course_amrp'];
$stu_id = $_SESSION['id'];
$stu_username = $_SESSION['username'];
$stu_email = $_SESSION['email'];

// Update the `apply_course_student` table
$update_sql = "UPDATE `apply_course_student` SET `payment`= '1' WHERE id = $stu_id AND course_id = $course_id";
$query = mysqli_query($conn, $update_sql);
if (!$query) {
    echo "Query error: " . mysqli_error($conn);
}

// Insert the payment details into the `fee_recipe` table
$ORDERID = "ORDS" . rand(10000, 99999999);
$TXNID = uniqid();
$TXNAMOUNT = $course_price;
$PAYMENTMODE = "NB";
$CURRENCY = "INR";
$TXNDATE = date("Y-m-d H:i:s");
$STATUS = "TXN_SUCCESS";
$RESPMSG = "Payment Successful";
$GATEWAYNAME = "Razorpay";
$BANKTXNID = uniqid();
$BANKNAME = "Bank of Example";

$order_query = "INSERT INTO `fee_recipe`
                (`id`, `stu_id`, `stu_email`, `order_id`, `txnid`, `txnamount`, `payment_mode`, `currency`, `txn_date`, `status`, `respmsg`, `gatewayname`, `banktxnid`, `bankname`)
                VALUES (NULL, '$stu_id', '$stu_email', '$ORDERID', '$TXNID', '$TXNAMOUNT', '$PAYMENTMODE', '$CURRENCY', '$TXNDATE', '$STATUS', '$RESPMSG', '$GATEWAYNAME', '$BANKTXNID', '$BANKNAME')";

$query = mysqli_query($conn, $order_query);
if ($query) {
    echo "Payment Successful! Thank You...";
} else {
    echo "Error: " . $order_query . "<br>" . mysqli_error($conn);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.green.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/style.css?v=<?php echo (time()); ?>">
    <title>Document</title>
</head>
<body>
</body>
</html>