<?php 
session_start();

$paytmMerchantKey ="_22i8jB4ZN4hCtto";

// Create an array having all required parameters for creating checksum.
$MID = "WHnxVm73856087122017";
$ORDERID = "ORD" . rand(10000,999999);
$CUSTID = "CUST".rand(11111,99999);
$INDUSTRY_TYPE_ID = "Retail";
$CHANNEL_ID = "WEB";
$WEBSITE = "WEBSTAGING";
$CALLBACK_URL = 'http://localhost/Suven-Elearning/datascience/elearning/payment/paytmresponse.php';
$TXN_AMOUNT = "";
$courseId = 0;
$userid=$_SESSION['uid'];


if(isset($_POST['course']) && isset($_POST['hdAmt']) && isset($_POST['hdDisc'])){
	$courseId   = $_POST['course'];
	$TXN_AMOUNT = $_POST['hdAmt'];
	$discount   = $_POST['hdDisc'];
	//$TXN_AMOUNT = $_POST['course_type'];
	require_once('paytmfunctions.php');

	require '../dbconnect.php';
	
	$query="select id from package_courses where courseid='$courseId'";
	$resultset = mysqli_query($conn,$query);
	
	if(mysqli_num_rows($resultset) > 0) {
	
		$query="insert into user_course_orders(userid,courseid,orderid,pct_discount)
								select '$userid',courseid,'$ORDERID',$discount
									from package_courses
								where id in 
								(select id from package_courses 
								 where courseid='$courseId')";
								 
		if(mysqli_query($conn,$query)){
			echo "Customer order created ";
			GenerateRedirectPage();
		}else{
			echo mysqli_error($conn);
		}
								 
	}else{							 
		$query = "insert into user_course_orders (userid,courseid,orderid,pct_discount) values ($userid,$courseId,'$ORDERID',$discount)";

		if(mysqli_query($conn,$query)){
			echo "Customer order created ";
			GenerateRedirectPage();
		}else{
			echo mysqli_error($conn);
		}		
	}
	
}

?>