<?php
session_start();
# Logout 
//clear session from globals
$_SESSION = array();
unset($_SESSION['uid']);
//clear session from disk
session_destroy();
header('location:index.php');
?>