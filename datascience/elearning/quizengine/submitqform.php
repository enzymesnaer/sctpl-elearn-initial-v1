<?php
session_start();
require '../dbconnect.php';
mysqli_query($conn, "set character_set_results='utf8'");

if(isset($_POST)){
   $keys=array_keys($_POST);
   $order=join(",",$keys);
   $response=mysqli_query($conn,"select questionid, answer from questions_table where questionid IN($order) ORDER BY FIELD(questionid,$order)")   
   or die(mysql_error());
   $right_answer=0;
   $wrong_answer=0;
   $unanswered=0;
   
   while($result=mysqli_fetch_array($response)){
       if($result['answer']==$_POST[$result['questionid']]){
               $right_answer++;
           }else if($_POST[$result['questionid']]==5){
               $unanswered++;
           }
           else{
               $wrong_answer++;
           }
   
       
    // SAVE TEST RESULT
    
    if($right_answer==2){
        //check record exist if not insert
        $chk = "SELECT * FROM quizusers_table WHERE uid = $_SESSION[uid] and topicid = $_SESSION[topicid] and courseid = $_SESSION[courseid] and performance = 1";
        
        $response=mysqli_query($conn,$chk) or die(mysql_error());
        if(mysqli_num_rows($conn, $response) > 0){
            $attempted = 1;
            if($_SESSION['courseid'] == 2001){
            header("Location: ../mlb/index.php#quizresult?&ra=$right_answer&wa=$wrong_answer&ua=$unanswered"); 
            }
        }else{
            // update record
            $updPer = "UPDATE quizusers_table SET performance = 1 WHERE uid = $_SESSION[uid] and topicid = $_SESSION[topicid] and courseid = $_SESSION[courseid]";
            mysqli_query($conn,$updPer) or die(mysql_error());
            if($_SESSION['courseid'] == 2001){
              header("Location: ../mlb/index.php#quizresult?&ra=$right_answer&wa=$wrong_answer&ua=$unanswered");  
            }
            
        }
    }
    elseif($_SESSION['courseid'] == 2001){
      header("Location: ../mlb/index.php#quizresult?&ra=$right_answer&wa=$wrong_answer&ua=$unanswered");  
    }
   }
}
?>