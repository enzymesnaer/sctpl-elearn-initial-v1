<?php

/* Sample Response 
 * ORDERID=>ORD43179022 
 * MID=>WHnxVm73856087122017 
 * TXNID=>20200226111212800110168377201329367 
 * TXNAMOUNT=>21.00 
 * PAYMENTMODE=>NB 
 * CURRENCY=>INR 
 * TXNDATE=>2020-02-26 16:32:36.0 
 * STATUS=>TXN_SUCCESS 
 * RESPCODE=>01 
 * RESPMSG=>Txn Success 
 * GATEWAYNAME=>ICICI 
 * BANKTXNID=>14174422135 
 * BANKNAME=>ICICI 
 * CHECKSUMHASH=>x+XtCfl2JOjSSNpqil6sDaJO4NMaUhz9RKXq/xXAn1Jz/MyKdpT0ry1teT5rjcMdnOFYLfuCcHGT30M4Xf+o3NzCj99Uk2Tm3tjwRweXHF8=
 * */
 
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");


$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : "";
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum);


if($isValidChecksum == "TRUE") {
    
	echo "<b>Checksum matched and following are the transaction details:</b>" . "<br/>";
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		echo "<b>Transaction status is success</b>" . "<br/>";
		echo "creating transaction entries in the database";
		require '../dbconnect.php';
		
		$txnid      = $_POST['TXNID'];
		$orderid    = $_POST['ORDERID'];
		$txnamount  = $_POST['TXNAMOUNT'];
		$paymentmode= $_POST['PAYMENTMODE'];
		$currency   = $_POST['CURRENCY'];
		$txndate    = $_POST['TXNDATE'];
		$statuscode = $_POST['STATUS'];
		$respcode   = $_POST['RESPCODE'];
		$respmsg    = $_POST['RESPMSG'];
		$gatewayname= $_POST['GATEWAYNAME'];
		$banktxnid  = $_POST['BANKTXNID'];
		$bankname   = $_POST['BANKNAME'];

		$add_trans = "INSERT INTO all_payment_transactions".
		"(`txnid`, `orderid`, `txn_amount`, `payment_mode`,".
		" `currency`, `txn_date`, `status_code`, `response_code`,".
		" `response_msg`, `gateway_name`, `bank_txnid`, `bank_name`)".
		" VALUES".	
		"('$txnid','$orderid',$txnamount,'$paymentmode',".
		"'$currency','$txndate','$statuscode','$respcode',".
		"'$respmsg','$gatewayname`','$banktxnid','$bankname')";
		
		
		if(mysqli_query($conn,$add_trans)){
			echo "trans record created ";
		}else{
			echo mysqli_error($conn);
		}
		
		if($statuscode=="TXN_SUCCESS"){
			$update_orders="update user_course_orders set status='SUCCESS' Where orderid='$orderid'";
			if(mysqli_query($conn,$update_orders)){
				echo "order record updated ";
				// header('Location: ../'.strtolower($_SESSION['ccode']).'?ctype='.$_SESSION['ctype'].'');
				
			}else{
			echo mysqli_error($conn);
		}

		}
		echo "----------------------------------------------";
		

	}
	else {
		echo "<b>Transaction status is failure</b>" . "<br/>";
	}

	if (isset($_POST) && count($_POST)>0 )
	{ 
		foreach($_POST as $paramName => $paramValue) {
				echo "<br/>" . $paramName . " = " . $paramValue;
		}
	}
	

}
else {
	echo "<b>Checksum mismatched.</b>";
	//Process transaction as suspicious.
}
