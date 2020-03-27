<?php ob_start(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<style>
    .jumbotron{
        margin:5%;
        background-color:#fff;
        border-radius:5px;
        border: 1px solid #fff;
        box-shadow: 0px 0px 10px silver;
    }
    .highlightme>p,h5{
            
             /*margin-top: 32px;*/
         text-align: center; 
        
    }
    .highlightme>strong,h5{
        
        display: inline-block;
  padding: 0px;
  border: solid 1px rgba(0, 0, 0, 0);
  -webkit-border-radius: 3px;
          border-radius: 3px;
  -webkit-animation: highlight 0.9s infinite;
          animation: highlight 0.9s infinite;
  -webkit-animation-delay: 0.9s;
          animation-delay: 0.9s;
    }
    @-webkit-keyframes highlight {
    0% {
      margin: 0px;
      padding: 0px;
      border: solid 1px rgba(0, 128, 0, 0);
      color: rgb(0, 0, 0);
    }
    50% {
      margin: -2px;
      padding: 2px;
      border: solid 1px rgba(0, 128, 0, 1);
      color: rgb(0, 128, 0);
    }
    100% {
      margin: -4px;
      padding: 4px;
    }
} 

@keyframes highlight {
    0% {
      margin: 0px;
      padding: 0px;
      border: solid 1px rgba(0, 128, 0, 0);
      color: rgb(0, 0, 0);
    }
    50% {
      margin: -2px;
      padding: 2px;
      border: solid 1px rgba(0, 128, 0, 1);
      color: rgb(0, 128, 0);
    }
    100% {
      margin: -4px;
      padding: 4px;
    }
}

</style>
<?php
require 'dbconnect.php';
if($_POST['action'] == 'login')
{   
    $errordetails;
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']); 
    //$pwd = password_hash("$password", PASSWORD_DEFAULT); 
    
    $sql = "SELECT * FROM `users_table` WHERE email = '$email' and password = '$password' LIMIT 1";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $name = @$row['name'];
    $count = mysqli_num_rows($result);
    	
    if($count == 1) {
     session_start();
    
    $_SESSION["uid"] = $row["uid"];
    $_SESSION['name'] = $row['name'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['email'] = $row['email'];
            
    header("location:index.php");
    exit();
    
    }
    else{
        
        $errordetails = 'Incorrect details !!!<br>Try Again.';
        echo "<script type='text/javascript'>
				$(document).ready(function(){
				$('#errorModal').modal('show');
				});
				</script>";
        }
    }    

else if($_POST['action'] == 'register')
{
    $name = $_POST['name'];
    $email = $_POST['emailid'];
    $password = $_POST['password'];

    $contact = $_POST['contact'];

    
    $user_check_query = "select email from users_table Where email='$email' LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);

 
    if (isset($user['email']) && $user['email'] == $email) 
	{
      $errordetails = 'User Already Exist With Same Account Crendentials.';
        echo "<script type='text/javascript'>
				$(document).ready(function(){
				$('#errorModal').modal('show');
				});
				</script>";
    }
    else{
        //$str_username = str_replace(' ', '', $name);
        //$str_username = strtolower($str_username."@sctpl"); 
        $str_username = substr($email, 0, strpos($email, '@'));
        $username = strtolower($str_username."@sctpl"); 
        $insert_users = "insert into users_table(uid,username,name,email,password,contact) 
        values('','$username','$name','$email','$password','$contact')";
        //$exe_insert_users = mysqli_query($conn,$insert_users);
    
        if(mysqli_query($conn,$insert_users))
        {
            echo "<script type='text/javascript'>
				$(document).ready(function(){
				$('#registerModal').modal('show');
				});
				</script>";
                
            // Fetch Testimonials Data From Database
            // $fetch_testimonials = "Select * from tbl_testimonials order by rand() limit 1";
            // $result_testimonials = mysqli_query($conn,$fetch_testimonials);
            
            //Automailer code start here 
            // $username = 'internship@suvenconsultants.com';  
            // $emailid = 'internship@suvenconsultants.com';                  
            // $password = 'onlineinternship';
            // $subject = 'Thank you for registering with us : Online Coding Internship';
            
            // $body_msg = '
            //             <h3 style="color:#07b107;"><b>Welcome to India\'s first and largest Online Internship Platform</b></h3>
            //             <p>Dear '.$name.',</p> 
            //             <p><b>We are happy to have you here.</b></p>
            //             <p>This is an absolute Open-source , free platform where industry professionals provide simple but meaningful problem statements.</p>
            //             <p>The objective is to allow every student a chance to experience coding Internships from <b>UI / UX</b>  
            //             to  <b>Data Analytics</b>  to  <b>kaggle problem solving using ML.</b></p>
                        
            //             <p>Presently their are following domains to choose from :</p>
                        
            //             <b>1> UI / UX Coding Internships </b>: Here one would master HTML5, CSS3, Javascript,  Bootstrap and make front-end replicas of 
            //             <b>uber-eats, samsung and hotstar.</b><br><br>
            //             <b>2></b> Coding Internships for developing <b>Web & Mobile Apps</b> using <b>Angular</b> : Here on would master the <b>worlds most popular JavaScript framework - 
            //             Angular</b>. Their are total of <b>3</b> Web and Mobile Applications to be coded.<br><br>
            //             <b>3></b> Coding Internships for backend development using <b>Core PHP</b> & <b>JavaScript</b> : Their are in total <b>2</b> Web Applications to be coded.<br><br>
            //             <b>4></b> Coding Internships for backend development using <b>Python</b> & <b>Django</b> : Their are in total <b>4</b> Web Applications to be coded.<br><br>
            //             <b>5> Data Analytics</b> (using Python) <b>Coding Internships</b> : Here one would start with Data cleaning, Data transformation, Data exploration and visualization.
            //                 In certain cases you would be expected to make a <b>mathematical model for Predictions</b>. Each participant in this domain has to <b>write a blog article</b> explaining about the data analysis he has done and his conclusions thereby. 
            //                 You may share your code through a <b>github</b> link on the blog.<br><br>
            //             <b>6> Coding simple Financial Apps using Java</b> :  
            //             Here you would get an opportunity to code two commercially use-able Java Desktop Applications (approximating 2500 LOC) using swing library.<br><br>
            //             <b>7> Building Chat-bots using Google ML Engine</b> : Here you would explore Google DialogFlow Chat-bot engine to develop 2 chat-bots one for Online Food Ordering (just like Zomato) and the other for Pathology Diagnostic Center. 
            //             You would be taking your chat-bot live integrating with your face-book account.<br><br>
            //             <b>8> Sentiment Analysis using NLP libraries:</b> Predict the sentiment for a number of movie reviews obtained from the Internet Movie Database (IMDb) using both unsupervised and supervised ML model.<br><br>
            //             <b>9> Market Basket Analysis using Association Rule - Mining</b> : Here you would find customer purchase behavior patterns which can be exploited for selling more items to the customer in the future using Association rule mining.<br><br>
                            
            //             <b>10> Very Soon we would coming up with :</b>
            //             <ul>
            //             <li>Predictive Analysis in Biomedical and Health Applications using R - <span style="color:#07b107;">2 weeks Coding Internship</span></li>
            //             <li>Building desktop based Library Management System using C++ - <span style="color:#07b107;">2 weeks Coding Internship</span></li>
            //             </ul>';
                        
            //             while($row_testimonials = mysqli_fetch_assoc($result_testimonials))
            //             {
            //                 $body_msg.= '<br><div style="border:1px solid black;border-radius:10px;width:75%;padding:10px;">
            //                         <center><img src="https://internship.suvenconsultants.com/images/testimonials/'.$row_testimonials['image'].'" style="height:120px;width:120px;border-radius:50%;"></center>
            //                         <center><h3><b>'.$row_testimonials['name'].' - </b> <small>'.$row_testimonials['designation'].'</small></h3></center>
            //                         <center><p>'.$row_testimonials['review'].'</p></center>
            //                       </div>';
            //             }            
                        
            // $body_msg.= '<p>We wish you all the best to start one of many <b>coding Internships</b>. Once you finish your Internship , you would earn an Internship Certificate like this :</p>
                         
            //             <img src="https://internship.suvenconsultants.com/images/certificate_sample.PNG"/>
                        
            //             <p>So what are you waiting for ?  Lets start coding !!</p>
            //             <p>Here is your <a href="https://internship.suvenconsultants.com/profile.php" target="_blank"><b>Profile link.</b></a>  All the best.</p> 
        				// <br>
        				// ';
        
            // $body_msg.= '
            //             <p>Best Regards<br>
            //               Rocky Jagtiani<br>
            //               BE(IS), PGDST (NCST) , ME(IT)<br>
            //               <b>Head of Training & Development</b><br>
            //               Suven Consultants & Technology Pvt ltd.<br>
            //               <p><b>Official Member to: </b></p>
        				//   <img src="https://suvenconsultants.com/mainpagefiles/images/member.png" width="200px"/>';
        				  
	

            //     $mail = new PHPMailer();
            
            //     $mail->isSMTP();
            
            //     $mail->SMTPAuth = true; 
                
            //     $mail->SMTPKeepAlive = true;   
                
            //     $mail->Mailer = “smtp”;
            
            //     $mail->SMTPSecure = 'ssl';
            
            //     $mail->Host = 'mail.suvenconsultants.com';
            
            //     $mail->Port = 465;
            
            //     $mail->Username = $username;
            
            //     $mail->Password = $password;
            
            //     $mail->setFrom('internship@suvenconsultants.com', 'Online Coding Internship');
            
            //     $mail->addReplyTo('internship@suvenconsultants.com', 'Online Coding Internship');
            
            //     $mail->addAddress($email);
            
            //     $mail->IsHTML(true);    
            
            //     $mail->Subject = $subject;
            
            //     $mail->msgHTML($body_msg);
            
            //     if (!$mail->send()) {
            
            //     echo "". $mail->ErrorInfo;    
            //     } 
            //     else {
            //     echo "";
            //     } 
                
        }else{
            $errordetails = 'Not Registered... Try Again !!!.';
            echo "<script type='text/javascript'>
				$(document).ready(function(){
				$('#errorModal').modal('show');
				});
				</script>";
        }
    }    
}

else if($_POST["action"] == 'update_profile')
    {
        $id = $_POST["id"];
        $profile_pic= $_FILES['img_edit']['name'];
        $name = $_POST["name"];
        $position = $_POST["position"]; 
        $what_doing = $_POST["what_doing"];
        $work_on = $_POST["work_on"];
        $want_become = $_POST["want_become"];
        
        move_uploaded_file($_FILES['img_edit']['tmp_name'],"images/users/".$_FILES['img_edit']['name']);
        
        if($profile_pic == '' || $profile_pic == null)
        {
    		$updateprofile = "Update `users_table` 
                Set name = '$name', position = '$position', am_doing = '$what_doing', working_on = '$work_on', want_become = '$want_become' 
                where uid = '$id' ";
        }else{
    		$updateprofile = "Update `users_table` 
                Set profile_pic = '$profile_pic', name = '$name', position = '$position', am_doing = '$what_doing', working_on = '$work_on', want_become = '$want_become' 
                where uid = '$id' ";            
        }

		                
		$response = mysqli_query($conn,$updateprofile);
		if($response){
		    header("location: $previous");
		    //echo 'Updated';
		}
		else{
		    echo 'Not Updated';
		}
}

else{
 echo "Try after some time...";   
}
// include('footer.php');
?>

<div class="modal fade" id="errorModal" tabindex="-1" role="dialog" onclick="closeModal()">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center" style="background: linear-gradient(90deg,#70d467 0,#6fbbfa);">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h2 class="modal-title" id="myModalLabel1"><b>Suven E Learning</b></h2>
            </div>
            <div class="modal-body text-center" id="displayContent">
                <?php
                echo "<h3>".$errordetails."</h3>";
                ?>
            </div>
            <div class="modal-footer" text-center> 
                <button class="btn btn-info" class="close" data-dismiss="modal">Close</button>   
        	</div>
    	</div>
	</div>
</div>

<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" onclick="closeModal()">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center" style="background: linear-gradient(90deg,#70d467 0,#6fbbfa);">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h2 class="modal-title" id="myModalLabel1"><b>Suven Data Science Online</b></h2>
            </div>
            <div class="modal-body text-center" id="displayContent">
                <h3 style="font-size:20px;">Thank you for registering</h3>
                <p><strong>
                <h5 style="font-size:15px; line-height:35px;"><b>PS</b> : Please <b>check your <span style="text-decoration:underline;">spam</span> folder,</b> if mails not seen in Inbox.</h4>
                <h4 style="font-size:20px;">A Registration mail has been sent to <?php echo $email; ?></h4>
                </strong></p>
                
            </div>
            <div class="modal-footer" text-center style="margin-top:-15px;"> 
                <button class="btn btn-info" class="close" data-dismiss="modal">Close</button>   
        	</div>
    	</div>
	</div>
</div>

<script>
    function closeModal(){
        window.history.back();
    }    
</script>
