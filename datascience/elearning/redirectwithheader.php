<?php
session_start();
if($_GET['ln'] == 4){
$_SESSION['ctype'] = 2;
$_SESSION['courseid'] = 2001;    
$_SESSION['pkgcourseid'] = 0002;
header('Location: ./mlb');
}
?>