<?php
session_start();
include('../dbconnect.php');
$duration = '';

$sql = "select * from timer";
$result = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_array($result))
{
	$duration = $row['duration'];
}
$_SESSION['duration'] = $duration;
$_SESSION['start_time'] = date("Y-m-d H:i:s");

$end_time = date('Y-m-d H:i:s', strtotime('+'.$_SESSION["duration"].'minutes',strtotime($_SESSION["start_time"])));

$_SESSION['end_time'] = $end_time;

?>
<?php 
require '../dbconnect.php';
$name = $_POST['name'];
$uid = $_POST['uid'];
$topicid = $_POST['topicid'];
$courseid = $_POST['courseid'];
$topicname = $_POST['topicname'];
$date_submit = date('d-m-Y');
$username = $_SESSION['name'];
$_SESSION['name']= $name;
$_SESSION['uid'] = $uid;
$_SESSION['topicid'] = $topicid;
$_SESSION['courseid'] = $courseid;
$_SESSION['topicname'] = $topicname;  

 if($_POST['uid'] != null){

     $check_exist = "Select * from quizusers_table where uid = $uid and topicid = $topicid and courseid = $courseid";
     $execute = mysqli_query($conn,$check_exist);
     $row_exist = @mysqli_num_rows($execute);
     $result=mysqli_fetch_array($execute);
     

     if($row_exist > 0){
        echo "";
     }else{

    // for first time test make entry
     mysqli_query($conn, "INSERT INTO quizusers_table (uid, name, score, topicid, courseid, date_submit, performance) VALUES ('$uid','$name', 0, '$topicid', '$courseid', '$date_submit', 0)") or die(mysql_error());
      $_SESSION['name']= $name;
      $_SESSION['uid'] = $uid;
      $_SESSION['topicid'] = $topicid;
      $_SESSION['courseid'] = $courseid;
      $_SESSION['topicname'] = $topicname; 
      $_SESSION['isretest'] = 0; 
     }
 
    }else{
      echo "";
    }

$userid = $_SESSION['uid'];
$courseid = $_SESSION['courseid'];
$topicid = $_SESSION['topicid'];
$username = $_SESSION['name'];

    //CHECK COURSE ID AND INITIALIZE COURSE NAME

if($_SESSION['uid'] != null || $_SESSION['uid'] != ""){
    
    if($courseid == 2001 || $courseid == 1001){

        $coursename = "Machine Learning Beginner";    

        if($topicid == 1){
            $topicname = $_SESSION['topicname'];

        }elseif($topicid == 2){
            $topicname = $_SESSION['topicname'];

        }elseif($topicid == 3){
            $topicname = $_SESSION['topicname'];
            
        }elseif($topicid == 4){
            $topicname = $_SESSION['topicname'];
            
        }elseif($topicid == 5){
            $topicname = $_SESSION['topicname'];
            
        }elseif($topicid == 6){
            $topicname = $_SESSION['topicname'];
        }elseif($topicid == 7){
            $topicname = $_SESSION['topicname'];
        }elseif($topicid == 8){
            $topicname = $_SESSION['topicname'];
        }elseif($topicid == 9){
            $topicname = $_SESSION['topicname'];
        }elseif($topicid == 10){
            $topicname = $_SESSION['topicname'];
        }elseif($topicid == 11){
            $topicname = $_SESSION['topicname'];
        }elseif($topicid == 12){
            $topicname = $_SESSION['topicname'];
        }elseif($topicid == 13){
            $topicname = $_SESSION['topicname'];
        }else{
            echo "";
        }
        
    }else if($courseid == 2002 || 1002){
        $coursename = "Machine Learning Intermediate";
        // nest here
    }else if($courseid == 3){
        // $coursename = "-------------";    
        // $courseid = 3;
    }else if($courseid == 4){
        // $coursename = "MMLLBB";
        // $courseid = 4;
    }else if($courseid == 5){
        // $courseid = 5;
        // $coursename = "MMLLII";
    }else if($courseid == 6){
        // $courseid = 11;
        // $coursename = "Web Application (PHP-MySQL) Coding Intenship";
    }else if($courseid == 7){
        // $courseid = 6;
        // $coursename = "Data Analytics using Python Coding Intenship";
    }else if($courseid == 8){
        // $courseid = 7;
        // $coursename = "Chatbots using Google ML Engine Coding Internship";
    }else if($courseid == "Java"){
        // $courseid = 8;
        // $coursename = "Financial Applications using Java Coding Internship";
    }
    else if($courseid == "Sentiment Analysis (ML)"){
        // $courseid = 9;
        // $coursename = "Sentiment Analysis using NLP Libraries Coding Internship";
    }
    else if($courseid == "Market Basket Analysis"){
        // $courseid = 10;
        // $coursename = "Market Basket Analysis using Association Rule Mining Coding Internship";
    }else{
        echo '';
    }
  }
   

if(!empty($_SESSION['name'])){
?>

<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="google-site-verification" content="PI-ZP6ua4nWrRzz9ZBRHSIioHv3CgSlf9FWicBdYJ5s" />
  <title> Elearning@Suven </title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script
  src="https://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.js"></script>

<style>
.ai_div{
    border: 1px solid turquoise;
    padding: 10px;
    margin: 10px;
    border-radius: 5px;
    min-height: 300px;
    max-height: 100%;
}
.address_modal{
	height: 200px;
}
.address_modal p{
	font-size: 13px;
}
.training{
    background-color:#fff;
    border: 1px solid silver;
    box-shadow: 0px 0px 10px silver;
    border-radius: 10px;
    padding-top:10px;
    padding-left:10px;
    padding-right:10px;
    padding-bottom:-10px;
    position: fixed;
    font-size:13px;
    bottom: 10px;
    right: 10px;
    z-index: 999;
    line-height:10px;
}
.inset {
  margin-left:12px;     
  margin-top:10px;    
  width: 40px;
  height: 40px;
  border-radius: 50%;
  box-shadow:
    inset 0 0 0 2px rgba(255,255,255,0.6), 
    0 1px 1px rgba(0,0,0,0.1);
  background-color: transparent !important;
  z-index: 999;
}

.inset img {
  border-radius: inherit;
  width: inherit;
  height: inherit;
  display: block;
  position: relative;
  z-index: 998;
}
.well{
       background:linear-gradient(90deg,#70d467 0,#6fbbfa);
       color:#fff;
       font-size:20px !important;
}
.jumbotron{
        background-color:#fff !important;
        box-shadow: 0px 0px 15px silver;
        margin-top: -35px !important;
        margin-bottom: 5px !important;
        padding-bottom: 10px !important;
        padding-top: 10px !important;
}

.jumbotron p{
    font-size: 17px !important;
}

body{
    -webkit-user-select: none;
    -moz-user-select: -moz-none;
    -ms-user-select: none;
      user-select: none;
} 
label {
    font-weight: normal !important;
}
#pageloader
{
  background: linear-gradient(90deg,#70d467 0,#6fbbfa);
  display: none;
  height: 100%;
  position: fixed;
  width: 100%;
  z-index: 9999;
}

#pageloader img
{
  left: 50%;
  margin-left: -32px;
  margin-top: -32px;
  position: absolute;
  top: 50%;
}
</style> 
<style>
    .well {
       background:linear-gradient(90deg,#70d467 0,#6fbbfa);
       color:#fff;
       font-size:25px !important;
   }
   .mainjb{
        background-color:#fff !important;
        box-shadow: 0px 0px 15px silver;
    }
    .mainjb h3{
        margin-top:-10px;
    }
    .mainjb p{
        font-size:15px;
        color:black;
    }
</style>
</head>
<body>

<script>
		setInterval(function()
			{
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.open("GET","../quizengine/response.php",false);
				xmlhttp.send(null);
				//document.getElementById("response").innerHTML = xmlhttp.responseText;
				
				if(xmlhttp.responseText == "Time Over"){
					document.login.submit();
				}else{
					document.getElementById("response").innerHTML = xmlhttp.responseText;
				}
			},1000);
</script>	


		<div class="well">
            <h3 class="text-center">
              <strong>
                <?php 
                echo "Quiz Assessment of $topicname chapter under $coursename Subject for $username";
                ?>
              </strong>
            </h3>
        </div>
        <br>	
        <div class="container-fluid">
		<div class="jumbotron">
	    <div style="float:right;"><b>Time Left:</b> <span id="response"></span></div>
		
		<div class="container question">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <form class="form-horizontal" role="form" action="../quizengine/submitqform.php" id='submitqform' method="post">
        <!-- INCLUDE NEW CODE HERE -->
        <?php
        include('../dbconnect.php');
        mysqli_query($conn, "set character_set_results='utf8'");

        $res = mysqli_query($conn,"SELECT * FROM questions_table WHERE topicid= $topicid and courseid = $courseid ORDER BY questionid ASC limit 2") or die(mysqli_error($conn));
        
        $rows = mysqli_num_rows($res);
        $i=1;
                while($result=mysqli_fetch_array($res)){?>

                    <?php if($i==1){?>         
                    <div id='question<?php echo $i;?>' class='cont'>

                    <p class='questions' id="qname<?php echo $i;?>"> <?php echo $i?>.<?php echo $result['questiondefn'];?></p>
                    <label>
                    <input type="radio" value="1" id='radio1_<?php echo $result['questionid'];?>' name='<?php echo $result['questionid'];?>'/> <?php echo $result['option1'];?>
                    </label>
                    <br/>
                    <label>
                    <input type="radio" value="2" id='radio1_<?php echo $result['questionid'];?>' name='<?php echo $result['questionid'];?>'/> <?php echo $result['option2'];?>
                    </label>
                    <br/>
                    <label>
                    <input type="radio" value="3" id='radio1_<?php echo $result['questionid'];?>' name='<?php echo $result['questionid'];?>'/> <?php echo $result['option3'];?>
                    </label>
                    <br/>

                    <label>
                    <input type="radio" checked='checked' style='display:none' value="5" id='radio1_<?php echo $result['questionid'];?>' name='<?php echo $result['questionid'];?>'/>                                                                      
                    </label>
                    <button id='next<?php echo $i;?>' class='next btn btn-info' type='button'>Next</button>
                    </div>     

                     <?php }elseif($i<1 || $i<$rows){?>

                    <div id='question<?php echo $i;?>' class='cont'>
                    <p class='questions' id="qname<?php echo $i;?>"> <?php echo $i?>.<?php echo $result['questiondefn'];?></p>
                    
                    <label>
                    <input type="radio" value="1" id='radio1_<?php echo $result['questionid'];?>' name='<?php echo $result['questionid'];?>'/> <?php echo $result['option1'];?>
                    </label>
                    <br/>
                    <label>
                    <input type="radio" value="2" id='radio1_<?php echo $result['questionid'];?>' name='<?php echo $result['questionid'];?>'/> <?php echo $result['option2'];?>
                    </label>
                    <br/>
                    <label>
                    <input type="radio" value="3" id='radio1_<?php echo $result['questionid'];?>' name='<?php echo $result['questionid'];?>'/> <?php echo $result['option3'];?>
                    </label>
                    <br/>

                    <label>
                    <input type="radio" checked='checked' style='display:none' value="5" id='radio1_<?php echo $result['questionid'];?>' name='<?php echo $result['questionid'];?>'/>                                                                      
                    </label>
                    <br/>
                    <button id='pre<?php echo $i;?>' class='previous btn btn-info' type='button'>Previous</button>                    
                    <button id='next<?php echo $i;?>' class='next btn btn-info' type='button' >Next</button>
                    </div>

                   <?php }elseif($i==$rows){?>
                    <div id='question<?php echo $i;?>' class='cont'>
                    <p class='questions' id="qname<?php echo $i;?>"><?php echo $i?>.<?php echo $result['questiondefn'];?></p>
                    <label>
                    <input type="radio" value="1" id='radio1_<?php echo $result['questionid']; ?>' name='<?php echo $result['questionid']; ?>'/> <?php echo $result['option1'];?>
                    </label>
                    <br/>
                    <label>
                    <input type="radio" value="2" id='radio1_<?php echo $result['questionid']; ?>' name='<?php echo $result['questionid']; ?>'/> <?php echo $result['option2'];?>
                    </label>
                    <br/>
                    <label>
                    <input type="radio" value="3" id='radio1_<?php echo $result['questionid']; ?>' name='<?php echo $result['questionid']; ?>'/> <?php echo $result['option3'];?>
                    </label>
                    <br/>
                    <label>
                    <input type="radio" checked='checked' style='display:none' value="5" id='radio1_<?php echo $result['questionid'];?>' name='<?php echo $result['questionid'];?>'/>                                                                      
                    </label>
                    <br/>
                    <button id='pre<?php echo $i;?>' class='previous btn btn-info' type='button'>Previous</button>
                    <button id='nextsubmit' class='next btn btn-success' type='submit'>Finish</button>
                    </div>
					<?php } $i++;} ?>
				</form>
			</div>
		</div>
		<hr>
            <h3 class="hidden-sm hidden-xs text-center"><span class="label label-info ">Note : Do not refresh this web page during the test. Else it would give Erratic output.</span></h3>
            <p class="hidden-lg hidden-md text-center" style="font-size:13px;"><span class="label label-info ">Note : Do not refresh this web page during the test.<br><br> Else it would give Erratic output.</span></h3>

        </div>
    </div>

<script>
		
		$('.cont').addClass('hide');
		count=$('.questions').length;
		 $('#question'+1).removeClass('hide');

		 $(document).on('click','.next',function(){
		     element=$(this).attr('id');
		     last = parseInt(element.substr(element.length - 1));
		     nex=last+1;
		     $('#question'+last).addClass('hide');

		     $('#question'+nex).removeClass('hide');
		 });

		 $(document).on('click','.previous',function(){
             element=$(this).attr('id');
             if(element == 'pre10')
             {
                 last = parseInt(element.substr(element.length - 2));
                 pre=last-1;
                 $('#question'+last).addClass('hide');
    
                 $('#question'+pre).removeClass('hide');                 
             }else{
                 last = parseInt(element.substr(element.length - 1));
                 pre=last-1;
                 $('#question'+last).addClass('hide');
    
                 $('#question'+pre).removeClass('hide');   
             }

         });

		</script>
		<script type='text/javascript'>
  // document.onkeydown = function (e) {
  //   e.preventDefault();		
  // }
</script>
	</body>
</html>
<?php }else{
//  header( 'Location: index.php' ) ;
}
?>