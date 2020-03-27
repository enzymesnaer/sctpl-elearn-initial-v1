<?php
include ('../dbconnect.php');
session_start();

print_r($_SESSION);

$coid = $_SESSION['courseid'];
$usid = $_SESSION['uid'];

if(@isset($_SESSION[uid])){
$checkqattempt = "SELECT * FROM quizusers_table where uid = $usid and courseid = $coid and performance = 1";
$exe = mysqli_query($conn, $checkqattempt); 
$passed = array();
$topic = array();
$i = 0;
while ($row = mysqli_fetch_assoc($exe)) {
$passed[$i]  = $row["performance"];
$topic[$i]  = $row["topicid"];
$i++;
}
}

echo @$passed[5];
echo '---------------';
echo @$passed[4];
echo '---------------';
echo @$passed[3];
echo '---------------';
echo @$passed[2];
echo '---------------';
echo @$passed[1];
echo '---------------';
echo @$passed[0];
echo 'brbr';
echo 'brbr';
echo @$topic[5];
echo '---------------';
echo @$topic[4];
echo '---------------';
echo @$topic[3];
echo '---------------';
echo @$topic[2];
echo '---------------';
echo @$topic[1];
echo '---------------';
echo @$topic[0];
?>