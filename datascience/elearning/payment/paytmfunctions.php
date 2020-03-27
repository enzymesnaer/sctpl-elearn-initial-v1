<?php
/********************************************
 * Paytm API Module
 *
 * Defines all the global variables and the wrapper functions
 ********************************************/
// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");


$paramList = array();
// Create an array having all required parameters for creating checksum.
$paramList["MID"] = $MID;
$paramList["ORDER_ID"] = $ORDERID;
$paramList["CUST_ID"] = $CUSTID;
$paramList["INDUSTRY_TYPE_ID"] = $INDUSTRY_TYPE_ID;
$paramList["CHANNEL_ID"] = $CHANNEL_ID;
$paramList["TXN_AMOUNT"] = $TXN_AMOUNT;
$paramList["WEBSITE"] = $WEBSITE;
$paramList["CALLBACK_URL"] = $CALLBACK_URL;
//Here checksum string will return by getChecksumFromArray() function.
$CHECKSUMHASH = getChecksumFromArray($paramList,$paytmMerchantKey);
$paramList["CHECKSUMHASH"] = $CHECKSUMHASH;



function GenerateRedirectPage()
{
	global $paramList;
	
	echo "<html>";
	echo "<head>";
	echo "<title>Merchant Check Out Page</title>";
	echo "</head>";
	echo "<body>";
	echo "	<center><h1>Please do not refresh this page...</h1></center>";
	echo "		<form method='post' action='".PAYTM_TXN_URL."' name='f1'>";
	echo "		<table border='1'>";
	echo "			<tbody>";
	echo "			";
				foreach($paramList as $name => $value) {
	echo "				<input type='hidden' name='" . $name ."' value='" . $value . "' >";
				}

	echo "			</tbody>";
	echo "		</table>";
	echo "		<script type='text/javascript'>";
	echo "			document.f1.submit();";
	echo "		</script>";
	echo "	</form>";
	echo "</body>";
	echo "</html>";
	exit;
	
}

