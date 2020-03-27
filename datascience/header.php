<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="google-site-verification" content="PI-ZP6ua4nWrRzz9ZBRHSIioHv3CgSlf9FWicBdYJ5s" />
  <meta property="og:image" content="https://internship.suvenconsultants.com/images/banner_image_compressed.png"/>
  <meta name="description" content="Online Coding Internship in HTML-CSS Javascript Bootstrap Angular Django Data Analytics ML Java" />
    <title>  Online Coding Internship - Suven Consultants & Technology Pvt. Ltd. </title>
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/internship.css">
  <link rel="stylesheet" href="css/font-awesome.css">

<style>
@media only screen and (max-width: 768px) {
	#hiringModal p{
		font-size: 8px;
		text-align: justify;
	}
}
@media only screen and (min-width: 768px) {
	#hiringModal p{
		font-size: 12px;
		text-align: justify;
	}
} 
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
    bottom: 10px;
    font-size:13px;
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
</style>  
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <a class="navbar-brand" href="https://suvenconsultants.com/"><img src="https://suvenconsultants.com/mainpagefiles/images/sctpl_logo.png" style="display:inline;">
              <span>Suven Consultants & Technology Pvt. Ltd.</span></a>
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> 
              </button>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <!--<ul class="nav navbar-nav">
                <li><a href="#">Home</a></li>
                <li><a href="#">Page 1</a></li>
                <li><a href="#">Page 2</a></li> 
                <li><a href="#">Page 3</a></li> 
              </ul>-->
              <ul class="nav navbar-nav navbar-right">
                <!--<li><a id="#" href="https://mentor.suvenconsultants.com" target="_blank" class="head_panel" style="font-size:15px">Our mentors</a></li>-->
                <li><a id="#" href="#expertModal" data-toggle="modal" data-target="#expertModal" class="head_panel" style="font-size:14px">Industry Expert</a></li>
                <li><a id="#" href="https://internship.suvenconsultants.com/domains" class="head_panel" style="font-size:14px">Domains</a></li>
                <li><a id="#" href="faq.php" class="head_panel" style="font-size:14px"><b>FAQ</b></a></li>
                <!--<li><a href="http://onlineinternship.suvenconsultants.com"  style="cursor:pointer;font-size:20px"><span class="glyphicon glyphicon-home"></span></a></li>-->
        		<?php
                    if(isset($_SESSION['uid'])){
                    echo '';
                    }else{
                       echo '<li><button class="btn btn-success" data-toggle="modal" data-target="#authenticationModal" style="margin-left:13px;margin-top:15px;"><b>Log In</b></button></li>'; 
                    }
                ?>
        		<?php
        		if(isset($_SESSION['uid'])){
        		    echo '<li class="dropdowns">
                            <div class="inset" class="dropdown-toggle" data-toggle="dropdown">';
                            if($_SESSION['profile'] == '' || $_SESSION['profile'] == null){
                                echo '<img src="images/users/default-user.png" 
                                class="img-responsive" data-toggle="tooltip" title="'.$_SESSION['name'].'&#010;'.$_SESSION['email'].'" style="cursor:pointer;">';
                            }else{
                                echo '<img src="images/users/'.$_SESSION["profile"].'" 
                                class="img-responsive" data-toggle="tooltip" title="'.$_SESSION['name'].'&#010;'.$_SESSION['email'].'" style="cursor:pointer;">';
                            }    
                                
                        echo '</div>
                            <ul class="dropdown-menu hidden-sm hidden-xs" style="padding:5px;">
                                <li class="text-center"><p><b>'.$_SESSION['name'].'</b></p>
                                <p>'.$_SESSION['email'].'</p></li>
                                <a href="profile.php?userID='.$_SESSION['uid'].'" class="btn btn-info btn-sm center-block">Profile</a>
                                <li class="divider"></li>
                                <a href="logout.php" class="btn btn-danger btn-sm center-block">Logout</a>
                            </ul>
                            <ul class="dropdown-menu hidden-lg hidden-md" style="padding:5px;">
                                <a href="profile.php?userID='.$_SESSION['uid'].'" class="btn btn-info btn-sm">Profile</a>&nbsp;&nbsp;<a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
                            </ul></li>';    
        		}    
                ?>
              </ul>
            </div>
          </div>
        </nav>
