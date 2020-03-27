<?php
session_start();
?>
<?php 
include('../dbconnect.php');

if(!empty($_SESSION['name'])){

    $right_answer=0;
    $wrong_answer=0;
    $unanswered=0; 
    $performance;
    $qresult;
    
   $keys=array_keys($_POST);
   $order=join(",",$keys);

   //$query="select * from questions id IN($order) ORDER BY FIELD(id,$order)";
  // echo $query;exit;

   $response=mysqli_query($con,"select id,answer from questions where id IN($order) ORDER BY FIELD(id,$order)")   or die(mysql_error());

   while($result=mysqli_fetch_array($response)){
       if($result['answer']==$_POST[$result['id']]){
               $right_answer++;
           }else if($_POST[$result['id']]==5){
               $unanswered++;
           }
           else{
               $wrong_answer++;
           }
   }
    $name=$_SESSION['name'];  
    $uid = $_SESSION['uid'];
    $category_id = $_SESSION['category_id'];
    $sub_category_id = $_SESSION['sub_category_id'];
    
    if($right_answer == 6){
        $performance = "Noteworthy";
    }else if($right_answer == 7 || $right_answer == 8){
        $performance = "Enviable";        
    }else if($right_answer == 9 || $right_answer == 10){
        $performance = "Commendable";        
    }else{
        $performance = "Not cleared";
    }
    
    if($right_answer >= 6){
        $qresult = "Successful";
    }else{
        $qresult = "Unsuccessful";
    }
    
    $result_percentage = ($right_answer / 10) * 100;
    $category_name = $_SESSION['category_name'];
    $project_name = $_SESSION['pr_name'];
    $username = $_SESSION['name'];
    
    date_default_timezone_set('Asia/Kolkata');
    $test_datetime = date('d-m-Y', strtotime("+2 day"));
    mysqli_query($con,"update tbl_quiz_users set score='$right_answer', performance = '$performance' where uid='$uid' and category_id = $category_id and sub_category_id = $sub_category_id");
    
    mysqli_query($con,"Update tbl_projects_users Set performance = '$performance', score = '$result_percentage', retest_deadline = '$test_datetime' where uid = '$uid' and domain_name = '$category_name' and project_no = '$sub_category_id'");
?>
<style>
    .well{
       background:linear-gradient(90deg,#70d467 0,#6fbbfa);
       color:#fff;
       font-size:25px !important;
   }
   .jumbotron{
        background-color:#fff !important;
        box-shadow: 0px 0px 15px silver;
    }
</style>
		<div class="well">
            <h3 class="text-center"><strong>
                <?php echo "AI Engine Assessment of $project_name Project under $category_name Domain for $username";?>
                </strong></h3>
        </div>
        <br>   

        <div class="container result">
            <div class="jumbotron">
            <div class="row"> 
                  <div class="col-lg-12 col-xs-12"> 
                       <div class="table-responsive hidden-sm hidden-xs">
                        <table class="table table-striped table-hover table-condensed table-bordered">   
                        <tr>
                            <td><p>Total no. of right answers : <label class="label label-success"><?php echo $right_answer;?></label></p></td>
                            <td><p>Score: 
                            <label class="label label-success"><?php echo $right_answer."/10 - ".$result_percentage."%"; ?></label>
                            </p></td>
                        </tr>
                        <tr>
                            <td><p>Total no. of wrong answers : <label class="label label-danger"><?php echo $wrong_answer;?></label></p></td>
                            <td><p>Result: <b><?php echo $qresult; ?></b></p></td>
                        </tr>
                        <tr>
                            <td><p>Total no. of Unanswered Questions : <label class="label label-info"><?php echo $unanswered;?></label></p></td>
                            <td><p>Performance: <b><?php echo $performance; ?></b></p></td>
                        </tr> 
                        <tr>
                            <td colspan="2" class="text-center">
                                <p>Congrats on submitting <b><?php echo $project_name; ?></b> Project under <b><?php echo $category_name; ?></b> Domain.
                                You need to submit all projects in this <b><?php echo $category_name; ?></b> Domain to earn your Internship Certificate</p>
                                <p>See your <a href="https://internship.suvenconsultants.com/profile.php#myprojects">updated Profile here.</a></p>
                            </td>
                        </tr>
                        </table>                
                       </div> 
                       
                       <div class="table-responsive hidden-lg hidden-md">
                        <table class="table table-striped table-hover table-condensed table-bordered">   
                        <tr>
                            <td><p style="color:#000000;">Right answers : <label class="label label-success"><?php echo $right_answer;?></label></p></td>
                        </tr>
                        <tr>
                            <td><p style="color:#000000;">Wrong answers : <label class="label label-danger"><?php echo $wrong_answer;?></label></p></td>
                        </tr>
                        <tr>
                            <td style="color:#000000;"><p>Unanswered Questions : <label class="label label-info"><?php echo $unanswered;?></label></p></td>
                        </tr>
                        <tr>
                            <td><p style="color:#000000;">Score: 
                            <label class="label label-success"><?php echo $right_answer."/10 - ".$result_percentage."%"; ?></label>
                            </p></td>
                        </tr>
                        <tr>
                            <td><p style="color:#000000;">Result: <b><?php echo $qresult; ?></b></p></td>
                        </tr>
                        <tr>
                            <td><p style="color:#000000;">Performance: <b><?php echo $performance; ?></b></p></td>
                        </tr>    
                        <tr>
                            <td>
                                <p style="font-size:11px;color:#000000;">Congrats on submitting <b><?php echo $project_name; ?></b> Project under <b><?php echo $category_name; ?></b> Domain.
                                You need to submit more projects in this <b><?php echo $category_name; ?></b> Domain to earn your Internship Certificate</p>
                                <p>See your <a href="https://internship.suvenconsultants.com/profile.php#myprojects">updated Profile here.</a></p>
                            </td>
                        </tr>
                        </table>                
                       </div> 
                   </div>

            </div>  
            </div>  
            <div class="row">    

            </div>
        </div>
<?php
    include('footer.php');
?>

    <script src="jquery-1.10.2.min.js"></script>
    <script src="jquery.validate.min.js"></script>

    </body>
</html>
<?php }else{

//  header( 'Location: index.php' ) ;

}?>