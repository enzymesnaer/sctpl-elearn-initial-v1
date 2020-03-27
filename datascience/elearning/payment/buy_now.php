   <?php 
session_start();
require_once('../dbconnect.php');

$indcourseid= $_SESSION['courseid'];
$pkgcourseid= $_SESSION['pkgcourseid'];

if($_SESSION['courseid'] == 1001){
$_SESSION['ccode'] = 'MLB';
}elseif($_SESSION['courseid'] == 1002){
$_SESSION['ccode'] = 'MLI';
}elseif($_SESSION['courseid'] == 2001){
$_SESSION['ccode'] = 'MLB';
}elseif($_SESSION['courseid'] == 2002){
$_SESSION['ccode'] = 'MLI';
}else{
$_SESSION['ccode'] = '';
}


// echo '<pre>';
//     print_r($_SESSION);
// echo '</pre>'; 

if(isset($_POST['coupon'])){

	$query="select percent from discount_coupons where code='".$_POST['coupon']."' 
	and sysdate() BETWEEN valid_from and valid_to";
	$resultset = mysqli_query($conn, $query);
	$row = mysqli_fetch_array($resultset);
	if($row){
		echo $row[0];
	}else{
		echo 0;
	}
			
	exit();
}

if(isset($_SESSION['ccode']) && isset($_SESSION['ctype'])){
	$coursecode = $_SESSION['ccode'];
	$coursetyp = $_SESSION['ctype'];
	$coursename="";
	$query="";
	$row1="";
	$row2="";
	$row="";
	
	//populate the individual coursedata
	$query=
	"select c.courseid,c.coursename,c.price 
	 from 
	 course_table c 
	where c.courseid not in 
	(select courseid from package_courses)
	and c.code='$coursecode'";
	
	$resultset = mysqli_query($conn, $query);
	$row1 = mysqli_fetch_array($resultset);

	// populate important variables from the resultset
	$indcourseid=$row1[0];
	$indcoursename=$row1[1];
	$indcourseprice=$row1[2];
	
	$query=
	"select c.courseid,p.name,
	c.coursename,p.id,a.price,a.discount 
	from 
	course_table c 
	join package_courses p
	join all_packages a
	where c.courseid=p.courseid
	and a.id=p.id
	and c.code='$coursecode'";
	
	$resultset = mysqli_query($conn, $query);
	$row2 = mysqli_fetch_array($resultset);
		
	// populate important variables from the resultset
	$pkgcourseid=$row2[0];
	$pkgcoursename=$row2[1].' including '.$row2[2];
	$pkgid=$row2[3];
	$pkgcourseprice=$row2[4];
	$pkgdiscount=$row2[5];
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding:0px 8px 8px 8px;
  margin-top: -10px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 10%;
  margin-bottom: 10px;
  padding: 7px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.lbl {
  background-color: #FFFFFF;
  color: black;
  width: 10%;
  border-radius: 3px;
}

.cpl {
  margin-left: 30px;
  color:green;
  padding: 7px 0;
  font-size: 20px;

}

.cplinfo {
  margin-left: 5px;
  color:green;
  padding: 7px 0;
  font-size: 20px;

}

.amt {
  margin-left: 50px;
  color:green;
  padding: 7px 0;
  font-size: 26px;
  font-weight : bold;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 20%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btnapl {
  background-color: #4CAF50;
  color: white;
  padding: 5px;
  margin: 10px 0;
  margin-left:15px;
  border: none;
  width: 10%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>

<h2 align="center">Get 3 months of unlimited total access to the entire course of</h2>
<h2 align="center">Suven Data Science Official Courses On-Demand.</h2>
<div class="row col-50">
  <div class="col-25">
    <div class="container">
      <form action="./payment.php" method="POST">
      
        <div class="row">
          <div class="col-50">
            <h3>Details</h3>
			
			<?php if($indcourseid !="") {?>
			<!--individual course begin-->
            <label for="course"><i class="fa fa-user">
			</i>&nbsp;&nbsp; <span id="indCourse"><?php echo $indcoursename?></span></label>
            <input type="radio" value="<?php echo $indcourseid?>" data-toggle="showindcourse" data-discount="cpntext" data-amount="indAmount"<?php if($coursetyp==1){ echo "checked=true ";}?>name="course">
				<span>&nbsp;&nbsp;&nbsp;Rs.<span id="indAmount"><?php echo $indcourseprice?></span>/-</span></input>
			<div class="col-100">
			</br>
			</div>
			<div class="col-100">
			</br>
			</div>
			<!--individual course end-->
			<?php }?>
			
			<?php if($pkgcourseid !="") {?>			
			<!--package course begin -->
            <label for="course"><i class="fa fa-user">
			</i>&nbsp;&nbsp;<span id="trackCourse"><?php echo $pkgcoursename?></span></label>
            <input type="radio" value="<?php echo $pkgcourseid?>" data-toggle="showpkgcourse" data-discount="pkgdiscountpct" data-amount="trackAmount" <?php if($coursetyp==2){ echo "checked=true ";}?> name="course">
				<span>&nbsp;&nbsp;&nbsp;Rs.<span id="trackAmount"><?php echo $pkgcourseprice ?></span>/-</span></input>
			<div class="col-100">
			</br>
			</div>
			<div class="col-100">
			</br>
			</div>
			<!--package course end -->
			<?php }?>

			<?php if($indcourseid !="") {?>			
			<!--individual course discount begin -->
			<div id="showindcourse" class="toHide">
            <label for="couponcode"><i class="fa fa-user"></i> &nbsp;&nbsp;Apply Coupon</label>
            <input type="text" id="coupon" name="couponcode" class="lbl" />        
			<input type="button" value="Apply" class="btnapl " onclick="applycoupon();">
			<span id="indtext" class="cpl">successfully applied the discount of <span id="cpntext">0</span>%</span>
			<div class="col-100">
			</br>
			</div>
			</div>	
			<!--individual course discount end -->
			<?php }?>
			
			<?php if($pkgcourseid !="") {?>			
			<!--package course discount begin -->
			<div id="showpkgcourse" class="toHide">
				<span id="coupontext" class="cplinfo">successfully applied the discount of <span id="pkgdiscountpct"><?php echo $pkgdiscount?></span><span>%</span></span>
			</div>
			<!--package course discount end -->
			<?php }?>
			
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
          </div>
          
        </div>
		<div class="col-100">
		<input type="hidden" id="hdntotAmount" name="hdAmt" value="0"/>
		<input type="hidden" id="hdnDiscount" name="hdDisc" value="0"/>		
        <input type="submit" value="Continue to checkout" class="btn "><span class="amt">
		<span>Rs.</span><span id ="totAmount">00000</span><span>/-</span></span>
		</div>
      </form>
    </div>
  </div>
</div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.0/jquery.cookie.min.js"></script>
<script>
function applycoupon(){
	
	var coupon=$('#coupon').val();
	var orig_amt=0;
	var disc_amt=0;

	$.ajax({
		type:'POST',
		url:'buy_now.php',
		data:'coupon='+coupon,
		success:function(res){
			if(res != 0){
				$('#cpntext').text(res);
				$('#hdnDiscount').val(parseInt(res));
				$('#indtext').show();
				// reduce the total amount by the percent discount
				orig_amt=$('#totAmount').text();
				if($.isNumeric(orig_amt) && $.isNumeric(res)){
					disc_amt=parseInt(orig_amt)*((100-parseInt(res))/100);
					//alert(disc_amt);
					if(disc_amt>0){
						$('#totAmount').text(disc_amt);
						// update corresponding hidden field too
						$('#hdntotAmount').val(disc_amt);
					}
				}
			}
		}
	});	
	
}

$(function() {
	// hide the div on load of the page
	div=$("input[name='course']:checked").attr('data-toggle');
	$('.toHide').hide();
	$('#'+div).show();
	
	//set the total amount
	div=$("input[name='course']:checked").attr('data-amount');
	amt=$('#'+div).text();
	$('#totAmount').text(amt);
	$('#hdntotAmount').val(amt);
	
	//hide individual discount msg on load 
	$('#indtext').hide();
	
	//load the discount hidden field on start
	div=$("input[name='course']:checked").attr('data-discount');
	pkgdisc=$('#'+div).text();
	$('#hdnDiscount').val(pkgdisc);
	
    $("[name=course]").click(function(){
            $('.toHide').hide();
			div=$(this).attr('data-toggle');
            $('#'+div).show('slow');
			
			// set the total amount 
			div=$(this).attr('data-amount');
			amt=$('#'+div).text();		
			$('#totAmount').text(amt);
			$('#hdntotAmount').val(amt);
			
			// set the total discount 
			div=$(this).attr('data-discount');
			dsc=$('#'+div).text();	
			$('#hdnDiscount').val(dsc);			
			
    });
 });
</script>
</html>
