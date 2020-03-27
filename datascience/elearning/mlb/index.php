<?php 
@session_start();
include 'header.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Data Science | Machine Learning | Python | Data Analytics | R | Suven Consultants</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" type="text/css" href="dist/fullpage.css" /> -->
    <meta property="og:image" itemprop="image" content="https://suvenconsultants.com/datascience/elearning/mymeta.jpg">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" type="text/css" href="dist/fullpage.css" /> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="../assets/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../assets/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="shortcut icon" href="../assets/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../assets/favicon.ico" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <link rel="shortcut icon" href="../assets/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../assets/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/internship.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" href="../css/trainers.css">
    <link rel="stylesheet" href="../css/timeline.css">


    <!-- Modernizr -->
    <script src="../js/main.js"></script>
    <script>
      $(window).on("load", function() {
        if ($.cookie('subscribe') == null) {
          setTimeout(function() {
            $('#subscribeModal').modal('show');
          }, 2000);
        }
      });

    </script>
    <script type="text/javascript">
      $(document).on('click', '#subscribeme', function() {
        var formdata = $("#subscribeForm").serialize();
        console.log(formdata);
        var subdata_e = document.getElementById("subscribe_email").value;
        var subdata_n = document.getElementById("subscribe_name").value;
        var subdata_c = document.getElementById("subscribe_contact").value;

        if ((subdata_e == "" || subdata_e == null) && (subdata_c == "" || subdata_c == null) && (subdata_n == "" || subdata_n == null)) {
          alert("Please enter all details");
        } else {
          $('#subscribeModal').modal('hide');
          $.ajax({
            url: 'subscribeus.php',
            method: 'POST',
            data: formdata,
            success: function(response) {
              $("#displayinModal").html(response);
              $('#actionsModal').modal('show');
            }
          });
        }

      });

    </script>



    <script type="text/javascript">
      document.addEventListener('contextmenu', event => event.preventDefault());
    </script>

    <style>
      html,
      body {
        max-width: 100%;
        overflow-x: hidden;
      }

      .pseudo-ul li::before {
        content: "✓";
        font-weight: 2000;
      }

      .social-links a.twitter {
        background: url(../social-icons/twitter-gray.png);
      }

      .social-links a.flickr {
        background: url(../social-icons/flickr-gray.png);
      }

      .social-links a.vimeo {
        background: url(../social-icons/vimeo-gray.png);
      }

      .social-links a.linkedin {
        background: url(../social-icons/linkedin-gray.png);
      }

      .social-links a.facebook {
        background: url(../social-icons/facebook-gray.png);
      }

      .social-links a.paypal {
        background: url(../social-icons/paypal-gray.png);
      }

      .social-links a.email {
        background: url(../social-icons/email-gray.png);
      }

      .social-links a.yahoo {
        background: url(../social-icons/yahoo-gray.png);
      }

      .social-links a.github {
        background: url(../social-icons/github-gray.png);
      }

      .social-links a.googleplus {
        background: url(../social-icons/googleplus-gray.png);
      }

      .social-links a.apple {
        background: url(../social-icons/apple-gray.png);
      }

      .social-links a.myspace {
        background: url(../social-icons/myspace-gray.png);
      }

      .social-links a.youtube {
        background: url(../social-icons/youtube-gray.png);
      }

      .social-links a.skype {
        background: url(../social-icons/skype-gray.png);
      }

      .social-links a.tumblr {
        background: url(../social-icons/tumblr-gray.png);
      }

      .social-links a.google {
        background: url(../social-icons/google-gray.png);
      }


      .social-links a.twitter:hover {
        background: url(../social-icons/twitter.png);
      }

      .social-links a.flickr:hover {
        background: url(../social-icons/flickr.png);
      }

      .social-links a.vimeo:hover {
        background: url(../social-icons/vimeo.png);
      }

      .social-links a.linkedin:hover {
        background: url(../social-icons/linkedin.png);
      }

      .social-links a.facebook:hover {
        background: url(../social-icons/facebook.png);
      }

      .social-links a.paypal:hover {
        background: url(../social-icons/paypal.png);
      }

      .social-links a.email:hover {
        background: url(../social-icons/email.png);
      }

      .social-links a.yahoo:hover {
        background: url(../social-icons/yahoo.png);
      }

      .social-links a.github:hover {
        background: url(../social-icons/github.png);
      }

      .social-links a.googleplus:hover {
        background: url(../social-icons/googleplus.png);
      }

      .social-links a.apple:hover {
        background: url(../social-icons/apple.png);
      }

      .social-links a.youtube:hover {
        background: url(../social-icons/youtube.png);
      }

      .social-links a.skype:hover {
        background: url(../social-icons/skype.png);
      }

      .social-links a.tumblr:hover {
        background: url(../social-icons/tumblr.png);
      }

      .social-links a.aim:hover {
        background: url(../social-icons/aim.png);
      }

      .social-links a.google:hover {
        background: url(../social-icons/google.png);
      }

      #footer a {
        color: white;
        text-decoration: none;
      }

      .one a {
        margin-right: 30px;
        margin-bottom: 20px;
      }

      .two a {
        margin-right: 15px;
        margin-bottom: 20px;
      }

      /*For the footer of all page*/

      /**/

      .training {
        background-color: #fff;
        border: 1px solid silver;
        box-shadow: 0px 0px 10px silver;
        border-radius: 10px;
        padding-top: 5px;
        padding-left: 5px;
        padding-right: 5px;
        padding-bottom: -5px;
        position: fixed;
        bottom: 50px;
        right: 10px;
        z-index: 999;
        line-height: 10px;
      }

      .syllabus {
        padding: 100px;
      }

      .freshers {
        background-color: #fff;
        border: 1px solid silver;
        box-shadow: 0px 0px 10px silver;
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px;
        padding-top: 10px;
        padding-left: 10px;
        padding-right: 5px;
        padding-bottom: -10px;
        position: fixed;
        bottom: 50px;
        left: 0px;
        z-index: 999;
        line-height: 10px;
      }


      /* xs < 768 */
      @media screen and (max-width: 767px) {
        .training {
          font-size: 10px;
          line-height: 1px;
          bottom: 90px;
        }

        .freshers {
          font-size: 10px;
          line-height: 10px;
          bottom: 30px;
          padding-top: 5px;
          padding-left: 5px;
          padding-right: 5px;
          padding-bottom: -10px;
        }
      }

      /* sm */
      @media screen and (min-width: 768px) {
        .training {
          font-size: 12px;
        }

        .freshers {
          font-size: 10px;
          line-height: 10px;
          bottom: 30px;
          padding-top: 5px;
          padding-left: 5px;
          padding-right: 5px;
          padding-bottom: -10px;
        }
      }

      /* md */
      @media screen and (min-width: 992px) {
        .training {
          font-size: 14px;
          line-height: 10px;
        }

        .freshers {
          font-size: 14px;
          line-height: 20px;
          bottom: 40px;
          padding-top: 10px;
          padding-left: 10px;
          padding-right: 5px;
          padding-bottom: -10px;
        }
      }

      /* lg */
      @media screen and (min-width: 1200px) {
        .training {
          font-size: 14px;
          line-height: 10px;
        }

        .freshers {
          font-size: 14px;
          line-height: 20px;
          bottom: 40px;
          padding-top: 10px;
          padding-left: 10px;
          padding-right: 5px;
          padding-bottom: -10px;
        }
      }

      .codeint {
        font-size: 11px;
        background-color: #fff;
        border: 1px solid silver;


        box-shadow: 0px 0px 10px silver;
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px;
        padding-top: 10px;
        padding-left: 10px;
        padding-right: 5px;


        padding-bottom: 5px;
        position: fixed;
        bottom: 130px;
        left: 0px;
        z-index:

          999;
        line-height: 10px;
      }

      .navbar-default {
        background-image: -webkit-linear-gradient(top, #34495e 0, #34495e 100%);
        background-image: -o-linear-gradient(top, #34495e 0, #34495e 100%);
        background-image: -webkit-gradient(linear, left top, left bottom, from(#34495e), to(#34495e));
        background-image: linear-gradient(to bottom, #34495e 0, #34495e 100%);
        background-repeat: repeat-x;
        filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
        border-radius: 0px;
        -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, .15), 0 1px 5px rgba(0, 0, 0, .075);
        box-shadow: inset 0 1px 0 rgba(255, 255, 255, .15), 0 1px 5px rgba(0, 0, 0, .075);
      }

      .navbar-default {
        background-color: #f8f8f8;
        border-color: #e7e7e7;
      }

      * {
        box-sizing: border-box;
      }

      *:before,
      *:after {
        box-sizing: border-box;
      }

      .bg-border-radius {
        : -48%;
        overflow: hidden;
        border-radius: 0px 180px 180px 0px;
        background-color: #0080C1;
      }

      q {
        quotes: "“""”""‘""’";
      }

      q:before {
        content: open-quote;
      }

      q:after {
        content: close-quote;
      }

      .btn-default {
        margin: 3px;
        padding: 20px;
        text-align: center;
        text-transform: uppercase;
        transition: 0.5s;
        background-size: 200% auto;
        color: white;
        /* text-shadow: 0px 0px 10px rgba(0,0,0,0.2);*/
        box-shadow: 0 0 20px #eee;
        border-radius: 10px;
        left: 250px;
      }

      .syllabus {
        margin-top: -80px;
      }

      .container {
        margin: 0;
        padding: 0;
      }

      /* Demo Stuff End -> */

      /* <- Magic Stuff Start */

      .btn-default:hover {
        background-position: right center;
        /* change the direction of the change here */
      }

      .btn-1 {
        background-image: linear-gradient(to right, #f6d365 0%, #fda085 51%, #f6d365 100%);
      }

      .card-box {
        /* min-height: 0; */
        position: relative;
        padding: 10px;
        margin-bottom: 20px;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        position: relative;
        cursor: pointer;
        text-align: center;
        margin-top: -48px;
      }

      .card-box:hover {
        background: linear-gradient(to right, #1fa2ff17 0%, #12d8fa2b 51%, #1fa2ff36 100%);
      }

      .card-box:after {
        display: block;
        content: '';
        width: 100%;
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
      }

      .card-title h2 {
        margin: 0;
        padding-top: 5%;
        color: #2196F3;
        font-family: 'Oswald', sans-serif;
        text-transform: uppercase;
        font-size: 24px;
        line-height: 1;
        margin-bottom: 15px;
      }

      .card-title p {
        margin: 0;
        margin-bottom: 10px;
        font-size: 16px;
      }

      .card-link a {
        text-decoration: none;
        font-family: 'Oswald', sans-serif;
        color: #FF5722;
        font-size: 15px;
      }

      .bg-border-radius {
        overflow: hidden;
        border-radius: 0px 100px 100px 0px;
        background-color: #0080C1;
      }

      @media only screen and (max-width: 600px) {
        .bg-border-radius {
          width: 95%;
        }
      }

      .strikethrough-diagonal {
        position: relative;
        color: red;
        font-weight: 500;
      }

      .strikethrough-diagonal:before {
        position: absolute;
        content: '';
        left: 0;
        top: 45%;
        right: 0;
        border-top: 1px solid;
        border-color: inherit;
        -webkit-transform: skewY(-10deg);
        -moz-transform: skewY(-10deg);
        transform: skewY(-10deg);
      }

      .well {
        background: #228B22;
        color: #fff;
      }



      .checkmark {
        display: inline-block;
        position: relative;
        opacity: 0;
      }

      .checkmark:after {
        content: '';
        display: block;
        width: 7px;
        height: 12px;
        border: solid #fcba03;
        border-width: 0 2.5px 2.5px 0;
        border-color: #fcba03;
        transform: rotate(45deg);
      }

      .checkmark-animation {
        animation: pop-up .5s ease .5s;
        animation-fill-mode: forwards;
      }

      .invalid {
        opacity: 0;
        position: relative;
        text-align: center;
        font-family: monospace;
        color: #ED574A;
        animation: pop-up .7s ease .4s;
        animation-fill-mode: forwards;
      }

      @keyframes pop-up {
        from {
          top: 10px;
          opacity: 0;
        }

        to {
          top: 0px;
          opacity: 1;
        }
      }

      .subjects1 .label,
      .label-primary {
        background: #55aef7 !important;
        color: white;
        border-radius: 0.25em;
        margin-left: 6px;
        padding: 5px 15px 5px 15px !important;
        color: white;
        border-radius: 0.25em;
        height: 40px;
        font-size: 13px;
      }


      #authenticationModal .modal-header li a {
        background-color: #2ecc71;
        border-radius: 0px;
        color: #fff;
      }


      #authenticationModal .modal-header li a:hover {
        background-color: #2ecc71;
        border-radius: 0px;
        color: #fff;
      }

      #authenticationModal .modal-header .active a {
        background-color: #34495e !important;
        border-radius: 0px;
        color: #fff;
        font-weight: bold;
      }

      #authenticationModal .modal-content {
        border-radius: 0px !important;
      }


      #registration {
        margin-top: -1%;
      }

    </style>
  </head>
    <!--MAIN BODY CONTENT START-->
    
      <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
        <link href="https://fonts.googleapis.com/css?family=Istok+Web&display=swap" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Sen&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>

        <style>
          .indie {
            font-family: 'Sen', sans-serif;
          }

          html,
          body {
            background-color: #FFF !important;
          }

          .lessons {
            margin: -5%;
            padding: 10%;
            padding-left: 30px;
          }

          .selen {
            border: 1px solid gainsboro;
            border-radius: 5px;
            padding: 45px;
            padding-left: 70px;
            padding-top: 0px !important;
            margin-right: -73px;
          }

          ol {
            font-weight: bolder;
            font-size: 16px;
            margin-top: 20px;
          }

          .subhr {
            width: 104%;
            border: 1px solid gainsboro;
            position: absolute;
            margin-left: -9.5%;
            padding: 0;
          }

          /*Circular Svg*/
          
          #svg circle {
                  stroke-dashoffset: 565.48;
                  transition: stroke-dashoffset 1s linear;
                  stroke: #666;
                  stroke-width: 1em;
                  color: green;
                }
                #svg #bar {
                  stroke: #ff9f1e;
                }
                #cont {
                  display: block;
                  height: 200px;
                  width: 200px;
                  margin: 2em auto;
                  box-shadow: 0 0 1em black;
                  border-radius: 100%;
                  position: relative;
                }
                #cont:after {
                  position: absolute;
                  display: block;
                  height: 160px;
                  width: 160px;
                  left: 50%;
                  top: 50%;
                  box-shadow: inset 0 0 1em black;
                  content: attr(data-pct) "%";
                  margin-top: -80px;
                  margin-left: -80px;
                  border-radius: 100%;
                  line-height: 160px;
                  font-size: 2em;
                  text-shadow: 0 0 0.5em black;
                }
                
                /*input {*/
                /*  color: #000;*/
                /*}*/
                
                
                /*html {*/
                /*  height: 100%;*/
                /*}*/
                /*body {*/
                /*  font-family: "Source Sans Pro", Helvetica, Arial, sans-serif;*/
                /*  background-color: #0d0d0d;*/
                /*  color: #fff;*/
                /*  height: 100%;*/
                /*  padding-top: 2em;*/
                /*  text-align: center;*/
                /*}*/
          /*Circle ends*/

          .fiximg {
            margin-left: 36% !important;
            margin-bottom: 4px;
          }

          .text-success {
            padding-left: 57px !important;
          }

          body {
            font-family: 'Istok Web', sans-serif;
          }

          .studtestim {
            margin-top: 161%;
            margin-bottom: -10px;
          }


          @media screen and (max-width: 600px) {
            .smhead {
              float: left;

              color: gray;
              margin-left: -10px !important;
              margin-right: -110px !important;
              margin-bottom: 0;
              margin-top: 10px;
              font-size: 30px;
            }

            .container-fluid>.navbar-collapse,
            .container-fluid>.navbar-header,
            .container>.navbar-collapse,
            .container>.navbar-header {
              margin-right: -30px;
              margin-left: -15px;
            }

            .smheadnxt {
              font-size: 30px !important;
              margin-left: 10px !important;
              margin-top: -12px !important;
              margin-right: -10px !important;
              padding: 60px !important;
            }

            .text-left {
              text-align: center !important;
            }

            .indie1 {
              font-size: 15px;
              margin-top: -37px !important;
              margin-right: -400px !important;
              margin-left: -60px !important;
              color: #3c763d;
              display: block;
              position: absolute;
              left: -10px;
            }


            .smallicon {

              padding: 20px;
              margin-left: 5px;
            }

            .subhr {
              width: 4000%;
              border: 1px solid gainsboro;
              position: absolute;
              margin-left: -460%;
              padding: 0;
              margin-bottom: 5px !important;
            }

            .lessons {
              margin: -7%;
              padding-top: 20%;
              padding-bottom: 10%;
              padding-left: 0px !important;
              /* font-size: 11px !important; */
              margin-top: -5%;
              margin-bottom: 0%;
              /* text-align: justify; */
            }

            .smhr {
              margin-top: 80% !important;
            }

            .col-lg-12,
            .col-md-12 {
              position: relative;
              min-height: 1px;
              padding-right: 0;
              padding-left: 30px;
            }

            .shifthimg {
              margin-top: 10px !important;
            }

            .topicheadings {
              padding-right: 20% !important;
            }


          }
          
          .modal {
         overflow-y: auto !important;
         overflow-x: auto !important;
        }
        
        .modal-open {
         overflow: auto !important;
        }
        
        .modal-open[style] {
        padding-right: 0px !important;
        margin-right: 0px !important;
        }
        
        .loader,
        .loader:before,
        .loader:after {
          border-radius: 50%;
          width: 2.5em;
          height: 2.5em;
          -webkit-animation-fill-mode: both;
          animation-fill-mode: both;
          -webkit-animation: load7 1.8s infinite ease-in-out;
          animation: load7 1.8s infinite ease-in-out;
        }
        .loader {
          color: #000;
          font-size: 10px;
          margin: 80px auto;
          position: relative;
          text-indent: -9999em;
          -webkit-transform: translateZ(0);
          -ms-transform: translateZ(0);
          transform: translateZ(0);
          -webkit-animation-delay: -0.16s;
          animation-delay: -0.16s;
        }
        .loader:before,
        .loader:after {
          content: '';
          position: absolute;
          top: 0;
        }
        .loader:before {
          left: -3.5em;
          -webkit-animation-delay: -0.32s;
          animation-delay: -0.32s;
        }
        .loader:after {
          left: 3.5em;
        }
        @-webkit-keyframes load7 {
          0%,
          80%,
          100% {
            box-shadow: 0 2.5em 0 -1.3em;
          }
          40% {
            box-shadow: 0 2.5em 0 0;
          }
        }
        @keyframes load7 {
          0%,
          80%,
          100% {
            box-shadow: 0 2.5em 0 -1.3em;
          }
          40% {
            box-shadow: 0 2.5em 0 0;
          }
        }


        </style>
        
      </head>

      <body >
        <div>
          <img class="img-responsive shifthimg" style="margin:0px;min-width:100%;" height="60px" src="https://yt3.ggpht.com/MVb4FIpLMFN3HJ7RpIzIZK3IN9wLPjdZDYc8f-Q1smrBxFHKZAvSUTXA28aT5Palwslgkc9bzA=w2560-fcrop64=1,00005a57ffffa5a8-k-c0xffffffff-no-nd-rj">
        </div>
        <span class="container hidden-sm hidden-xs">
          <span class="col-lg-3 col-md-3 col-sm-12 col-xs-12 hidden-xs hidden-sm">
            <div class="studtestim">
              <br><br><br><br>
              <!--Testimonials start-->
              <div class="container text-center text-justify">
                <h3 class="text-success"><span style="font-weight:bolder; padding-left:25px;margin-bottom:-20px;">Testimonials</span><br><span style="font-weight:bolder;"></span></h3><br>
                <div class="">
                  <div class="row">
                    <div class="row" style="padding-left:4%;margin-top:-10px;">
                      <div class="row">
                        <span class="col-md-3">
                          <img src="../assets/imgm/testimonials/samiksha.jpg" class="img-circle fiximg" alt="" width=80 height=80>
                        </span><br><br><br><br>
                        <div class="row">
                          <span class="text-center text-primary col-lg-3 colmd-3 col-sm-3 col-xs-3" style="font-size:11px;padding:21px;margin-top:-1%;margin-left:-25%;">
                            <p><b class="text-info applypads" style="font-weight: bolder;font-size:1.3rem;">Pratiksha
                                Patil</b></p>
                            <p class="text-info" style="font-size:11px;margin-top:-10px;">Rocky Sir, and his team helped me in
                              understanding all core ML concepts.</p>
                            <p class="text-info" style="font-size:11px;margin-top:-10px;font-weight: bolder;font-size:1.3rem;">BTech(CS) | Jr.
                              Data Analyst</p><br>
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="row" style="padding-left:4%;">
                      <div class="row">
                        <span class="col-md-3">
                          <img src="../assets/imgm/testimonials/nidhi.jpg" class="img-circle fiximg" alt="" width=80 height=80>
                        </span><br><br><br><br>
                        <div class="row">
                          <span class="text-center text-primary col-lg-3 col-md-3 col-sm-3 col-xs-3" style="font-size:11px;padding:21px;margin-top:-1%;margin-left:-25%;">
                            <p><b class="text-info applypads" style="font-weight: bolder;font-size:1.3rem;">Nidhi Shah</b></p>
                            <p class="text-info" style="font-size:11px;margin-top:-10px;">The Jupyter Notebooks made by
                              SuvenML team is awesome. I enjoyed learning at SuvenML.</p>
                            <p class="text-info" style="font-size:11px;margin-top:-10px;font-weight: bolder;font-size:1.3rem;">BSci(CS) | Jr.
                              Data Scientist </p><br>
                          </span></div>
                      </div>
                    </div>
                    <div class="row" style="padding-left:4%;">
                      <div class="row">
                        <span class="col-md-3">
                          <img src="../assets/imgm/testimonials/shrivats.jpg" class="img-circle fiximg" alt="" width=80 height=80>
                        </span><br><br><br><br>
                        <div class="row">
                          <span class="text-center text-primary col-lg-3 colmd-3 col-sm-3 col-xs-3" style="font-size:11px;padding:21px;margin-top:-1%;margin-left:-25%;">
                            <p><b class="text-info applypads" style="font-weight: bolder;font-size:1.3rem;">Sameeksha
                                Shrivastava</b></p>
                            <p class="text-info" style="font-size:11px;margin-top:-10px;">Each course at Suven is awesome. I
                              have done almost all.</p>
                            <p class="text-info" style="font-size:11px;margin-top:-10px;font-weight: bolder;font-size:1.3rem;">System Engineer |
                              5+ Years Work Exp.</p><br>
                          </span></div>
                      </div>
                    </div>
                    <div class="row" style="padding-left:4%;">
                      <div class="row">
                        <span class="col-md-3">
                          <img src="../assets/imgm/testimonials/akash.jpg" class="img-circle fiximg" alt="" width=80 height=80>
                        </span><br><br><br><br>
                        <div class="row">
                          <span class="text-center text-primary col-lg-3 colmd-3 col-sm-3 col-xs-3" style="font-size:11px;padding:21px;margin-top:-1%;margin-left:-25%;">
                            <p><b class="text-info applypads" style="font-weight: bolder;font-size:1.3rem;">Aahan Gupta</b>
                            </p>
                            <p class="text-info" style="font-size:11px;margin-top:-10px;">Learning from their courses enabled
                              me fully to take part and excel in kaggle competitions. Great content , great teaching.</p>
                            <p class="text-info" style="font-size:11px;margin-top:-10px;font-weight: bolder;font-size:1.3rem;">BE(CS) | Data
                              Scientist</p><br>
                          </span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </span>
          <span class="col-lg-9 col-md-9" style="padding-right:0%;margin-right:-10%;">
            <br>
            <span style="display:inline;">
              <span style="float:left;color:gray; margin-left: -30px;margin-right: -19px;margin-bottom: -19px;" class="smhead">
                <img src="http://localhost/Suven-Elearning/datascience/elearning/images/machinelearn.png" width="135" height="130" class="rounded img-fluid float-left smallicon" alt="...">
              </span>
              <h1 class="text-left smheadnxt" style="margin-left:-28px;margin-top:42px; font-weight:bolder;font-size: 46px;">
                Machine Learning <span style="color:#3c763d">Beginner</span></h1>
              <div class="indie indie1" style="font-size: 18px;margin-top: -1px;margin-right: 350px;color:#3c763d;display: block;position: absolute;left: 103px;">
                Supervised &amp;
                Unsupervised ML, ML
                pipeline, Basic Data Exploration, Train-Test-Split, Encoding Categorical data, Feature Scaling, Decision
                (CART) Trees, Random Forest, Naive Bayes
                Classification, Principal Component Analysis, k-Means
                Clustering and deploying ML models on FLASK.<br><br>
                <span style="font-size:16px"><b>Pre-requisite for this course :</b> You should know <b>Python</b> for <b>Data
                    Science</b>. </span>
              </div>
            </span>

            <hr class="smhr" style="min-width:100%;margin-top:21%;border:solid 0.5px silver;margin-left:-30px;">
            <div class="col-lg-12 col-md-12">
              <span class="col-lg-9 col-md-9">
                <div class="container-fluid" style="width: 105%;margin-left:-10%;">
                  <span style="width:100%;margin-left:-15px;">
                    <span style="font-family: zeitung, sans-serif;font-size: 20px;font-weight: 600;margin-bottom: 15px;-webkit-box-flex: 1;flex-grow: 1;padding-left: 28px;"><b>Lesson</b></span>
                    <span style="float: right;margin-right: 4px;font-size: 20px;font-weight: 600;"><b>Notebook</b>&nbsp;&nbsp;&nbsp;
                      <span style="float:right;font-size: 20px;font-weight: 600;"><b>Quiz</b></span></span>
                  </span>
                  <!--PHP CODE FOR RETRIVING ALL NOTEBOOK URLS BY CHECKING C_TYPE-->
                  <?php
            require '../dbconnect.php';
            
            
            // FIRST CHECK WHETHER USER HAS MADE SUCCESSFUL PAYMENT
            $paymentchk = "SELECT * FROM `user_course_orders` WHERE userid = $_SESSION[uid] AND courseid = $_SESSION[courseid] AND status = 'SUCCESS'";
            $exe = mysqli_query($conn, $paymentchk);
            $row_cnt = mysqli_num_rows($exe);
            if($row_cnt > 0){
                $paid = 1;
                $_SESSION['paid'] = 1;
            
            if(isset($paid) && isset($_SESSION['uid'])){
            // RETRIVING ALL NOTE BOOKS
            $getnbks = "SELECT topicid, notebookurl FROM topics_table WHERE courseid = ".$_SESSION['courseid']." ORDER BY topicid ASC";
            
            $exe = mysqli_query($conn, $getnbks);
            $i = 0;
            while ($row = mysqli_fetch_assoc($exe)) {
                 @${topicid.$i} = $row["topicid"];
                 @${notebookurl.$i} = $row["notebookurl"];
                 $i++;
            }
            } 
            }else{
            $_SESSION['paid'] = 0;
            if(isset($_SESSION['uid']) && (!isset($paid))){
                $i = 0;
                while($i<=13) {
                 @${notebookurl.$i} = 'http://localhost/Suven-Elearning/datascience/elearning/payment/buy_now.php';
                 $i++;
                }
            }
            }
            ?>


            <!--CHECK QUIZ ATTEMPT AND UPDATE ACCORDINGLY-->
            <?php
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
            ?>

            
                <!--PHP ENDS-->
                <ol type="" class="selen">
                  <!-- TOPIC 1 -->
                  <li class="lessons">
                    <div style="width:100%;margin-top:-10px;">
                      <span class="hidden-sm hidden-xs" style="font-size:18px;"><b>Supervised & Unsupervised ML</b></span>
                      <span class="topicheadings hidden-xs hidden-sm" style="float: right;margin-top:5px">
                          <?php if(isset($_SESSION['uid'])){ echo '<a href="https://colab.research.google.com/drive/1lXf-vXSldsM-FW-vh2DGl4hOIiGf0s4_" target="_blank"><img width=50 height=50 src="../images/icons/doc.png"></a>';}else{ echo '<a data-toggle="modal" data-target="#authenticationModal" style="cursor:pointer;margin-left:10px;"><img width=50 height=50 src="../images/icons/doc.png"></a>';}?>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <?php
              if(isset($passed[0]) && $passed[0] == 1 && $topic[0] == 1){
              echo '<a href="#0" type="button" id="" class="">
                  <span style="float:right;position:relative;margin-bottom:-21px;"><img width=47 height=47 src="../images/icons/checkdone.png">
                  </span>
                  </a>';
                ?>
                <?php    
                }elseif(($_SESSION['uid'] != null && $_SESSION['uid'] != "") && isset($_SESSION['paid']) && $_SESSION['paid'] != 1){
                echo '<form id="quiz1" method="post">
                <input type="hidden" name="uid" value="'.$_SESSION['uid'].'"/> 
                <input type="hidden" name="name" value="'.$_SESSION['name'].'"/>
                <input type="hidden" name="email" value="'.$_SESSION['email'].'"/>
                <input type="hidden" name="courseid" value="'.$_SESSION['courseid'].'"/>
                <input type="hidden" name="topicid" value="1"/>
                <input type="hidden" name="topicname" value="Supervised & Unsupervised ML"/>
                <a href="#0" type="button" id="btnadd1" class="">
                  <span style="float:right;position:relative;margin-top: -50px;margin-left: 95px;"><img width=47 height=47 src="../images/icons/quiz.png">
                  </span>
                </a>
                </form>
                ';?>
                <?php
                }elseif(($_SESSION['uid'] != null && $_SESSION['uid'] != "") && isset($_SESSION['paid']) && $_SESSION['paid'] == 1 ){
                echo '<form id="quiz1" method="post">
                <input type="hidden" name="uid" value="'.$_SESSION['uid'].'"/> 
                <input type="hidden" name="name" value="'.$_SESSION['name'].'"/>
                <input type="hidden" name="email" value="'.$_SESSION['email'].'"/>
                <input type="hidden" name="courseid" value="'.$_SESSION['courseid'].'"/>
                <input type="hidden" name="topicid" value="1"/>
                <input type="hidden" name="topicname" value="Supervised & Unsupervised ML"/>
                <a href="#0" type="button" id="btnadd1" class="">
                  <span style="float:right;position:relative;margin-top: -50px;margin-left: 95px;""><img width=47 height=47 src="../images/icons/quiz.png">
                  </span>
                </a>
                </form>
                ';
                }
                else{
                    echo '
                    <button class="" data-toggle="modal" data-target="#authenticationModal" style="border:none;outline:none;background: white; padding:none;"><span style="float:right;position:relative;margin-bottom:-21px;"><img width=47 height=47 src="../images/icons/quiz.png"></span></button>    
                    ';
                }
                 ?>

                        </span>
                      </div>
                      <div><span style="margin-bottom: -23px;font-size:11px;margin-top:2px;margin-right:30%;color:#3c763d;font-weight:500;display: block;"><span class="indie indie2 hidden-xs hidden-sm" style="font-size:17px;">You would perfectly understand
                            the applications of Machine learning. Be able to distinguish between Supervised and Unsupervised
                            Machine learning algorithms.</span>
                        </span></div>
                    </li>
                    <hr class="subhr">

                    <!-- TOPIC 2 -->
                    <li class="lessons">
                      <div style="width:100%;margin-top:-10px;">
                        <span class="topicheadings  hidden-sm hidden-xs"><b>ML Pipeline</b></span>

                       <span class="topicheadings hidden-xs hidden-sm" style="float: right;margin-top:5px"><?php if(isset($_SESSION['uid'])){ echo '<a href="https://colab.research.google.com/drive/1OuHfxds3XASI7rof_rTNeh9v7gx8UD-j" target="_blank"><img width=50 height=50 src="../images/icons/doc.png"></a>';}else{ echo '<a data-toggle="modal" data-target="#authenticationModal" style="cursor:pointer;margin-left:10px;"><img width=50 height=50 src="../images/icons/doc.png"></a>';}?>
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <?php
                if(isset($passed[1]) && $passed[1] == 1  && isset($topic[1]) && $topic[1] == 2){
                echo '<a href="#0" type="button" id="" class="">
                    <span style="float:right;position:relative;margin-bottom:-21px;"><img width=47 height=47 src="../images/icons/checkdone.png">
                    </span>
                    </a>';
                ?>
                 <?php    
                }elseif(($_SESSION['uid'] != null && $_SESSION['uid'] != "") && isset($_SESSION['paid']) && $_SESSION['paid'] != 1){
                echo '<form id="quiz2" method="post">
                <input type="hidden" name="uid" value="'.$_SESSION['uid'].'"/> 
                <input type="hidden" name="name" value="'.$_SESSION['name'].'"/>
                <input type="hidden" name="email" value="'.$_SESSION['email'].'"/>
                <input type="hidden" name="courseid" value="'.$_SESSION['courseid'].'"/>
                <input type="hidden" name="topicid" value="2"/>
                <input type="hidden" name="topicname" value="ML PipeLine"/>
                <a href="#0" type="button" id="btnadd2" class="">
                  <span style="float:right;position:relative;margin-top: -50px;margin-left: 95px;"><img width=47 height=47 src="../images/icons/quiz.png">
                  </span>
                </a>
                </form>
                ';?>
                <?php
                }elseif(($_SESSION['uid'] != null && $_SESSION['uid'] != "") && isset($_SESSION['paid']) && $_SESSION['paid'] == 1 ){
                echo '<form id="quiz2" method="post">
                <input type="hidden" name="uid" value="'.$_SESSION['uid'].'"/> 
                <input type="hidden" name="name" value="'.$_SESSION['name'].'"/>
                <input type="hidden" name="email" value="'.$_SESSION['email'].'"/>
                <input type="hidden" name="courseid" value="'.$_SESSION['courseid'].'"/>
                <input type="hidden" name="topicid" value="2"/>
                <input type="hidden" name="topicname" value="ML PipeLine"/>
                <a href="#0" type="button" id="btnadd2" class="">
                  <span style="float:right;position:relative;margin-top: -50px;margin-left: 95px;"><img width=47 height=47 src="../images/icons/quiz.png">
                  </span>
                </a>
                </form> ';
                
                 ?>
                 <?php
                }else{
                    echo '
                    <button class="" data-toggle="modal" data-target="#authenticationModal" style="border:none;background: white;outline:none;padding:none;"><span style="float:right;position:relative;margin-bottom:-21px;"><img width=47 height=47 src="../images/icons/quiz.png"></span></button>    
                    ';
                }
                 ?>
                        </span>
                      </div>
                      <div><span style="margin-bottom: -23px;font-size:11px;margin-top:2px;margin-right:30%;color:#3c763d;font-weight:500;display: block;"><span class="indie indie2 hidden-xs hidden-sm" style="font-size:17px;">Any Machine Learning problem has
                            to solved through a series of steps from "data cleaning" to "making the ML model". You would learn
                            these steps through solving a simple Case Study completely.

                          </span></span></div>
                    </li>
                    <hr class="subhr">

                    <!-- TOPIC 3 -->
                    <li class="lessons">
                      <div style="width:100%;margin-top:-10px;">
                        <span class="topicheadings  hidden-sm hidden-xs"><b>Basic Data Exploration</b></span>
                         <span class="topicheadings hidden-xs hidden-sm" style="float: right;margin-top:5px"><?php if(isset($_SESSION['uid'])){ echo '<a href="'.$notebookurl2.'" target="_blank"><img width=50 height=50 src="../images/icons/doc.png"></a>';}else{ echo '<a data-toggle="modal" data-target="#authenticationModal" style="cursor:pointer;margin-left:10px;"><img width=50 height=50 src="../images/icons/doc.png"></a>';}?>
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <?php
                if(isset($passed[2]) && $passed[2] == 1 && isset($topic[2]) && $topic[2] == 3){
                echo '<a href="#0" type="button" id="" class="">
                    <span style="float:right;position:relative;margin-bottom:-21px;"><img width=47 height=47 src="../images/icons/checkdone.png">
                    </span>
                    </a>';
                ?>
                <?php    
                }elseif(($_SESSION['uid'] != null && $_SESSION['uid'] != "") && isset($_SESSION['paid']) && $_SESSION['paid'] != 1){
                echo '<a href="http://localhost/Suven-Elearning/datascience/elearning/payment/buy_now.php" target="_blank"  class="">
                  <span style="float:right;position:relative;margin-bottom:-21px;"><img width=47 height=47 src="../images/icons/quiz.png">
                  </span>
                </a>
                ';?>
                <?php
                }elseif(($_SESSION['uid'] != null && $_SESSION['uid'] != "") && isset($_SESSION['paid']) && $_SESSION['paid'] == 1 ){
                echo '<form id="quiz3" method="post">
                <input type="hidden" name="uid" value="'.$_SESSION['uid'].'"/> 
                <input type="hidden" name="name" value="'.$_SESSION['name'].'"/>
                <input type="hidden" name="email" value="'.$_SESSION['email'].'"/>
                <input type="hidden" name="courseid" value="'.$_SESSION['courseid'].'"/>
                <input type="hidden" name="topicid" value="3"/>
                <input type="hidden" name="topicname" value="Basic Data Exploration"/>
                <a href="#0" type="button" id="btnadd3" class="">
                  <span style="float:right;position:relative;margin-top: -50px;margin-left: 95px;"><img width=47 height=47 src="../images/icons/quiz.png">
                  </span>
                </a>
                </form> ';
                
                 ?>
                 <?php
                }else{
                    echo '
                    <button class="" data-toggle="modal" data-target="#authenticationModal" style="border:none;background: white;outline:none;padding:none;"><span style="float:right;position:relative;margin-bottom:-21px;"><img width=47 height=47 src="../images/icons/quiz.png"></span></button>    
                    ';
                }
                 ?>

                        </span>
                      </div>
                      <div><span style="margin-bottom: -23px;font-size:11px;margin-top:2px;margin-right:30%;color:#3c763d;font-weight:500;display: block;"><span class="indie indie2 hidden-xs hidden-sm" style="font-size:17px;">You would be able perform basic
                            "Data Exploration" thereby gaining statistics information of the data. This helps in deciding what
                            type of ML Algo should we apply to our data.
                          </span></span></div>
                    </li>
                    <hr class="subhr">

                    <!-- TOPIC 4 -->
                    <li class="lessons">
                      <div style="width:100%;margin-top:-10px;">
                        <span class="topicheadings  hidden-sm hidden-xs"><b>Train Test Split</b></span>
                         <span class="topicheadings hidden-xs hidden-sm" style="float: right;margin-top:5px"><?php if(isset($_SESSION['uid'])){ echo '<a href="'.$notebookurl3.'" target="_blank"><img width=50 height=50 src="../images/icons/doc.png"></a>';}else{ echo '<a data-toggle="modal" data-target="#authenticationModal" style="cursor:pointer;margin-left:10px;"><img width=50 height=50 src="../images/icons/doc.png"></a>';}?>
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <?php
                if(isset($passed[3]) && $passed[3] == 1  && isset($topic[3]) && $topic[3] == 4){
                echo '<a href="#0" type="button" id="" class="">
                    <span style="float:right;position:relative;margin-bottom:-21px;"><img width=47 height=47 src="../images/icons/checkdone.png">
                    </span>
                    </a>';
                ?>
                <?php    
                }elseif(($_SESSION['uid'] != null && $_SESSION['uid'] != "") && isset($_SESSION['paid']) && $_SESSION['paid'] != 1){
                echo '<a href="http://localhost/Suven-Elearning/datascience/elearning/payment/buy_now.php" target="_blank"  class="">
                  <span style="float:right;position:relative;margin-bottom:-21px;"><img width=47 height=47 src="../images/icons/quiz.png">
                  </span>
                </a>
                ';?>
                <?php
                }elseif(($_SESSION['uid'] != null && $_SESSION['uid'] != "") && isset($_SESSION['paid']) && $_SESSION['paid'] == 1 ){
                echo '<form id="quiz4" method="post">
                <input type="hidden" name="uid" value="'.$_SESSION['uid'].'"/> 
                <input type="hidden" name="name" value="'.$_SESSION['name'].'"/>
                <input type="hidden" name="email" value="'.$_SESSION['email'].'"/>
                <input type="hidden" name="courseid" value="'.$_SESSION['courseid'].'"/>
                <input type="hidden" name="topicid" value="4"/>
                <input type="hidden" name="topicname" value="Train Test Split"/>
                <a href="#0" type="button" id="btnadd4" class="">
                  <span style="float:right;position:relative;margin-top: -50px;margin-left: 95px;"><img width=47 height=47 src="../images/icons/quiz.png">
                  </span>
                </a>
                </form> ';
                
                 ?>
                 <?php
                }else{
                    echo '
                    <button class="" data-toggle="modal" data-target="#authenticationModal" style="border:none;background: white;outline:none;padding:none;"><span style="float:right;position:relative;margin-bottom:-21px;"><img width=47 height=47 src="../images/icons/quiz.png"></span></button>    
                    ';
                }
                 ?>

                        </span>
                      </div>
                      <div><span style="margin-bottom: -23px;font-size:11px;margin-top:2px;margin-right:30%;color:#3c763d;font-weight:500;display: block;"><span class="indie indie2 hidden-xs hidden-sm" style="font-size:17px;">In Machine Learning if we use the
                            entire data for training, then how should we test our own Model ? You would understand Why and How
                            to Split the data. Usually its 80% for Training and 20% for Testing the Model. You would learn
                            this through solving a Linear Regression problem completely.
                          </span></span></div>
                    </li>
                    <hr class="subhr">

                    <!-- TOPIC 5 -->
                    <li class="lessons">
                      <div style="width:100%;margin-top:-10px;">
                        <span class="topicheadings  hidden-sm hidden-xs"><b>Encoding Categorical data</b></span>
                        <span class="topicheadings hidden-xs hidden-sm" style="float: right;margin-top:5px"><?php if(isset($_SESSION['uid'])){ echo '<a href="'.$notebookurl4.'" target="_blank"><img width=50 height=50 src="../images/icons/doc.png"></a>';}else{ echo '<a data-toggle="modal" data-target="#authenticationModal" style="cursor:pointer;margin-left:10px;"><img width=50 height=50 src="../images/icons/doc.png"></a>';}?>
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <?php
                if(isset($passed[4]) && $passed[4] == 1  && isset($topic[4]) && $topic[4] == 5){
                echo '<a href="#0" type="button" id="" class="">
                    <span style="float:right;position:relative;margin-bottom:-21px;"><img width=47 height=47 src="../images/icons/checkdone.png">
                    </span>
                    </a>';
                ?>
                <?php    
                }elseif(($_SESSION['uid'] != null && $_SESSION['uid'] != "") && isset($_SESSION['paid']) && $_SESSION['paid'] != 1){
                echo '<a href="http://localhost/Suven-Elearning/datascience/elearning/payment/buy_now.php" target="_blank"  class="">
                  <span style="float:right;position:relative;margin-bottom:-21px;"><img width=47 height=47 src="../images/icons/quiz.png">
                  </span>
                </a>
                ';?>
                <?php
                }elseif(($_SESSION['uid'] != null && $_SESSION['uid'] != "") && isset($_SESSION['paid']) && $_SESSION['paid'] == 1 ){
                echo '<form id="quiz5" method="post">
                <input type="hidden" name="uid" value="'.$_SESSION['uid'].'"/> 
                <input type="hidden" name="name" value="'.$_SESSION['name'].'"/>
                <input type="hidden" name="email" value="'.$_SESSION['email'].'"/>
                <input type="hidden" name="courseid" value="'.$_SESSION['courseid'].'"/>
                <input type="hidden" name="topicid" value="5"/>
                <input type="hidden" name="topicname" value="Encoding Categorical data"/>
                <a href="#0" type="button" id="btnadd5" class="">
                  <span style="float:right;position:relative;margin-top: -50px;margin-left: 95px;"><img width=47 height=47 src="../images/icons/quiz.png">
                  </span>
                </a>
                </form>';
                
                 ?>
                 <?php
                }else{
                    echo '
                    <button class="" data-toggle="modal" data-target="#authenticationModal" style="border:none;background: white;outline:none;padding:none;"><span style="float:right;position:relative;margin-bottom:-21px;"><img width=47 height=47 src="../images/icons/quiz.png"></span></button>    
                    ';
                }
                 ?>

                        </span>
                      </div>
                      <div><span style="margin-bottom: -23px;font-size:11px;margin-top:2px;margin-right:30%;color:#3c763d;font-weight:500;display: block;"><span class="indie indie2 hidden-xs hidden-sm" style="font-size:17px;">All Machine Learning algorithms
                            can only understand numeric data. You would learn different types of categorical data and ways to
                            convert them into numeric values.
                          </span></span></div>
                    </li>
                    <hr class="subhr">

                    <!-- TOPIC 6 -->
                    <li class="lessons">
                      <div style="width:100%;margin-top:-10px;">
                        <span class="topicheadings  hidden-sm hidden-xs"><b>Feature Scaling</b></span>
                     <span class="topicheadings hidden-xs hidden-sm" style="float: right;margin-top:5px"><?php if(isset($_SESSION['uid'])){ echo '<a href="'.$notebookurl5.'" target="_blank"><img width=50 height=50 src="../images/icons/doc.png"></a>';}else{ echo '<a data-toggle="modal" data-target="#authenticationModal" style="cursor:pointer;margin-left:10px;"><img width=50 height=50 src="../images/icons/doc.png"></a>';}?>
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <?php
                if(isset($passed[5]) && $passed[5] == 1  && isset($topic[5]) && $topic[5] == 6){
                echo '<a href="#0" type="button" id="" class="">
                    <span style="float:right;position:relative;margin-bottom:-21px;"><img width=47 height=47 src="../images/icons/checkdone.png">
                    </span>
                    </a>';
                ?>
                 <?php    
                }elseif(($_SESSION['uid'] != null && $_SESSION['uid'] != "") && isset($_SESSION['paid']) && $_SESSION['paid'] != 1){
                echo '<a href="http://localhost/Suven-Elearning/datascience/elearning/payment/buy_now.php" target="_blank"  class="">
                <span style="float:right;position:relative;margin-bottom:-21px;"><img width=47 height=47 src="../images/icons/quiz.png">
                  
                  </span>
                </a>
                ';?>
                <?php
                }elseif(($_SESSION['uid'] != null && $_SESSION['uid'] != "") && isset($_SESSION['paid']) && $_SESSION['paid'] == 1 ){
                echo '<form id="quiz6" method="post">
                <input type="hidden" name="uid" value="'.$_SESSION['uid'].'"/> 
                <input type="hidden" name="name" value="'.$_SESSION['name'].'"/>
                <input type="hidden" name="email" value="'.$_SESSION['email'].'"/>
                <input type="hidden" name="courseid" value="'.$_SESSION['courseid'].'"/>
                <input type="hidden" name="topicid" value="6"/>
                <input type="hidden" name="topicname" value="Feature Scaling"/>
                <a href="#0" type="button" id="btnadd6" class="">
                  <span style="float:right;position:relative;margin-top: -50px;margin-left: 95px;"><img width=47 height=47 src="../images/icons/quiz.png">
                  </span>
                </a>
                </form>';
                
                 ?>
                 <?php
                }else{
                    echo '
                    <button class="" data-toggle="modal" data-target="#authenticationModal" style="border:none;background: white;outline:none;padding:none;"><span style="float:right;position:relative;margin-bottom:-21px;"><img width=47 height=47 src="../images/icons/quiz.png"></span></button>    
                    ';
                }
                 ?>

                        </span>
                      </div>
                      <div><span style="margin-bottom: -23px;font-size:11px;margin-top:2px;margin-right:30%;color:#3c763d;font-weight:500;display: block;"><span class="indie indie2 hidden-xs hidden-sm" style="font-size:17px;">At times numeric features are
                            very wide spread something like youtube_Video_views. You would learn 3 different ways on scaling
                            or normalizing them.
                          </span></span></div>
                    </li>
                    <hr class="subhr">

                    <!-- TOPIC 7 -->
                    <li class="lessons">
                      <div style="width:100%;margin-top:-10px;">
                        <span class="topicheadings  hidden-sm hidden-xs"><b>Decision (CART) Trees</b></span>
                        <span class="topicheadings hidden-xs hidden-sm" style="float: right;margin-top:5px"><?php if(isset($_SESSION['uid'])){ echo '<a href="'.$notebookurl6.'" target="_blank"><img width=50 height=50 src="../images/icons/doc.png"></a>';}else{ echo '<a data-toggle="modal" data-target="#authenticationModal" style="cursor:pointer;margin-left:10px;"><img width=50 height=50 src="../images/icons/doc.png"></a>';}?>
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <?php
                if(isset($passed[6]) && $passed[6] == 1  && isset($topic[6]) && $topic[6] == 7){
                echo '<a href="#0" type="button" id="" class="">
                    <span style="float:right;position:relative;margin-bottom:-21px;"><img width=47 height=47 src="../images/icons/checkdone.png">
                    </span>
                    </a>';
                ?>
                <?php    
                }elseif(($_SESSION['uid'] != null && $_SESSION['uid'] != "") && isset($_SESSION['paid']) && $_SESSION['paid'] != 1){
                echo '<a href="http://localhost/Suven-Elearning/datascience/elearning/payment/buy_now.php" target="_blank"  class="">
                <span style="float:right;position:relative;margin-bottom:-21px;"><img width=47 height=47 src="../images/icons/quiz.png">
                  
                  </span>
                </a>
                ';?>
                <?php
                }elseif(($_SESSION['uid'] != null && $_SESSION['uid'] != "") && isset($_SESSION['paid']) && $_SESSION['paid'] == 1 ){
                echo '<form id="quiz7" method="post">
                <input type="hidden" name="uid" value="'.$_SESSION['uid'].'"/> 
                <input type="hidden" name="name" value="'.$_SESSION['name'].'"/>
                <input type="hidden" name="email" value="'.$_SESSION['email'].'"/>
                <input type="hidden" name="courseid" value="'.$_SESSION['courseid'].'"/>
                <input type="hidden" name="topicid" value="7"/>
                <input type="hidden" name="topicname" value="Decision (CART) Trees"/>
                <a href="#0" type="button" id="btnadd7" class="">
                  <span style="float:right;position:relative;margin-top: -50px;margin-left: 95px;"><img width=47 height=47 src="../images/icons/quiz.png">
                  </span>
                </a>
                </form>';
                
                 ?>
                 <?php
                }else{
                    echo '
                    <button class="" data-toggle="modal" data-target="#authenticationModal" style="border:none;background: white;outline:none;padding:none;"><span style="float:right;position:relative;margin-bottom:-21px;"><img width=47 height=47 src="../images/icons/quiz.png"></span></button>    
                    ';
                }
                 ?>

                        </span>
                      </div>
                      <div><span style="margin-bottom: -23px;font-size:11px;margin-top:2px;margin-right:30%;color:#3c763d;font-weight:500;display: block;"><span class="indie indie2 hidden-xs hidden-sm" style="font-size:17px;">You would learn how to apply and
                            solve problems by using Decision Trees for Regression & Classification both.
                          </span></span></div>
                    </li>
                    <hr class="subhr">

                    <!-- TOPIC 8 -->
                    <li class="lessons">
                      <div style="width:100%;margin-top:-10px;">
                        <span class="topicheadings  hidden-sm hidden-xs"><b>Random Forest</b></span>
                        <span class="topicheadings hidden-xs hidden-sm" style="float: right;margin-top:5px"><?php if(isset($_SESSION['uid'])){ echo '<a href="'.$notebookurl7.'" target="_blank"><img width=50 height=50 src="../images/icons/doc.png"></a>';}else{ echo '<a data-toggle="modal" data-target="#authenticationModal" style="cursor:pointer;margin-left:10px;"><img width=50 height=50 src="../images/icons/doc.png"></a>';}?>
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <?php
                if(isset($passed[7]) && $passed[7] == 1  && isset($topic[7]) && $topic[7] == 8){
                echo '<a href="#0" type="button" id="" class="">
                    <span style="float:right;position:relative;margin-bottom:-21px;"><img width=47 height=47 src="../images/icons/checkdone.png">
                    </span>
                    </a>';
                ?>
                <?php    
                }elseif(($_SESSION['uid'] != null && $_SESSION['uid'] != "") && isset($_SESSION['paid']) && $_SESSION['paid'] != 1){
                echo '<a href="http://localhost/Suven-Elearning/datascience/elearning/payment/buy_now.php" target="_blank"  class="">
                <span style="float:right;position:relative;margin-bottom:-21px;"><img width=47 height=47 src="../images/icons/quiz.png">
                  </span>
                </a>
                ';?>
                <?php
                }elseif(($_SESSION['uid'] != null && $_SESSION['uid'] != "") && isset($_SESSION['paid']) && $_SESSION['paid'] == 1 ){
                echo '<form id="quiz8" method="post">
                <input type="hidden" name="uid" value="'.$_SESSION['uid'].'"/> 
                <input type="hidden" name="name" value="'.$_SESSION['name'].'"/>
                <input type="hidden" name="email" value="'.$_SESSION['email'].'"/>
                <input type="hidden" name="courseid" value="'.$_SESSION['courseid'].'"/>
                <input type="hidden" name="topicid" value="8"/>
                <input type="hidden" name="topicname" value="Random Forest"/>
                <a href="#0" type="button" id="btnadd8" class="">
                  <span style="float:right;position:relative;margin-top: -50px;margin-left: 95px;"><img width=47 height=47 src="../images/icons/quiz.png">
                  </span>
                </a>
                </form> ';
                
                 ?>
                 <?php
                }else{
                    echo '
                    <button class="" data-toggle="modal" data-target="#authenticationModal" style="border:none;background: white;outline:none;padding:none;"><span style="float:right;position:relative;margin-bottom:-21px;"><img width=47 height=47 src="../images/icons/quiz.png"></span></button>    
                    ';
                }
                 ?>

                        </span>
                      </div>
                      <div><span style="margin-bottom: -23px;font-size:11px;margin-top:2px;margin-right:30%;color:#3c763d;font-weight:500;display: block;"><span class="indie indie2 hidden-xs hidden-sm" style="font-size:17px;">A single decision tree can do a
                            fine job but we can improve its performance by using many Decision trees. This method of using
                            many ML algorithms is called ensemble method. You would learn Random Forest ensemble method and
                            solve some problems.
                          </span></span></div>
                    </li>
                    <hr class="subhr">

                    <!-- TOPIC 9 -->
                    <li class="lessons">
                      <div style="width:100%;margin-top:-10px;">
                        <span class="topicheadings  hidden-sm hidden-xs"><b>Naive Bayes Classification</b></span>
                         <span class="topicheadings hidden-xs hidden-sm" style="float: right;margin-top:5px"><?php if(isset($_SESSION['uid'])){ echo '<a href="'.$notebookurl8.'" target="_blank"><img width=50 height=50 src="../images/icons/doc.png"></a>';}else{ echo '<a data-toggle="modal" data-target="#authenticationModal" style="cursor:pointer;margin-left:10px;"><img width=50 height=50 src="../images/icons/doc.png"></a>';}?>
                         
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <?php
                if(isset($passed[8]) && $passed[8] == 1 && isset($topic[8]) && $topic[8] == 9){
                echo '<a href="#0" type="button" id="" class="">
                    <span style="float:right;position:relative;margin-bottom:-21px;"><img width=47 height=47 src="../images/icons/checkdone.png">
                    </span>
                    </a>';
                ?>
                 <?php    
                }elseif(($_SESSION['uid'] != null && $_SESSION['uid'] != "") && isset($_SESSION['paid']) && $_SESSION['paid'] != 1){
                echo '<a href="http://localhost/Suven-Elearning/datascience/elearning/payment/buy_now.php" target="_blank"  class="">
                  <span style="float:right;position:relative;margin-bottom:-21px;"><img width=47 height=47 src="../images/icons/quiz.png">
                  </span>
                </a>
                ';?>
                <?php
                }elseif(($_SESSION['uid'] != null && $_SESSION['uid'] != "") && isset($_SESSION['paid']) && $_SESSION['paid'] == 1 ){
                echo '<form id="quiz9" method="post">
                <input type="hidden" name="uid" value="'.$_SESSION['uid'].'"/> 
                <input type="hidden" name="name" value="'.$_SESSION['name'].'"/>
                <input type="hidden" name="email" value="'.$_SESSION['email'].'"/>
                <input type="hidden" name="courseid" value="'.$_SESSION['courseid'].'"/>
                <input type="hidden" name="topicid" value="9"/>
                <input type="hidden" name="topicname" value="Naive Bayes Classification"/>
                <a href="#0" type="button" id="btnadd9" class="">
                  <span style="float:right;position:relative;margin-top: -50px;margin-left: 95px;"><img width=47 height=47 src="../images/icons/quiz.png">
                  </span>
                </a>
                </form> ';
                
                 ?>
                 <?php
                }else{
                    echo '
                    <button class="" data-toggle="modal" data-target="#authenticationModal" style="border:none;background: white;outline:none;padding:none;"><span style="float:right;position:relative;margin-bottom:-21px;"><img width=47 height=47 src="../images/icons/quiz.png"></span></button>    
                    ';
                }
                 ?>

                        </span>
                      </div>
                      <div><span style="margin-bottom: -23px;font-size:11px;margin-top:2px;margin-right:30%;color:#3c763d;font-weight:500;display: block;"><span class="indie indie2 hidden-xs hidden-sm" style="font-size:17px;">You would learn in simplest
                            possible ways about "Bayes" theorem and apply the Naive Bayes theorem to solve a Machine learning
                            problem.
                          </span></span></div>
                    </li>
                    <hr class="subhr">

                    <!-- TOPIC 10 -->
                    <li class="lessons">
                      <div style="width:100%;margin-top:-10px;">
                        <span class="topicheadings  hidden-sm hidden-xs"><b>Principal Component Analysis</b></span>
                         <span class="topicheadings hidden-xs hidden-sm" style="float: right;margin-top:5px"><?php if(isset($_SESSION['uid'])){ echo '<a href="'.$notebookurl9.'" target="_blank"><img width=50 height=50 src="../images/icons/doc.png"></a>';}else{ echo '<a data-toggle="modal" data-target="#authenticationModal" style="cursor:pointer;margin-left:10px;"><img width=50 height=50 src="../images/icons/doc.png"></a>';}?>
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <?php
                if(isset($passed[9]) && $passed[9] == 1 && isset($topic[9]) && $topic[9] == 10){
                echo '<a href="#0" type="button" id="" class="">
                    <span style="float:right;position:relative;margin-bottom:-21px;"><img width=47 height=47 src="../images/icons/checkdone.png">
                    </span>
                    </a>';
                ?>
                 <?php    
                }elseif(($_SESSION['uid'] != null && $_SESSION['uid'] != "") && isset($_SESSION['paid']) && $_SESSION['paid'] != 1){
                echo '<a href="http://localhost/Suven-Elearning/datascience/elearning/payment/buy_now.php" target="_blank"  class="">
                  <span style="float:right;position:relative;margin-bottom:-21px;"><img width=47 height=47 src="../images/icons/quiz.png">
                  </span>
                </a>
                ';?>
                <?php
                }elseif(($_SESSION['uid'] != null && $_SESSION['uid'] != "") && isset($_SESSION['paid']) && $_SESSION['paid'] == 1 ){
                echo '<form id="quiz10" method="post">
                <input type="hidden" name="uid" value="'.$_SESSION['uid'].'"/> 
                <input type="hidden" name="name" value="'.$_SESSION['name'].'"/>
                <input type="hidden" name="email" value="'.$_SESSION['email'].'"/>
                <input type="hidden" name="courseid" value="'.$_SESSION['courseid'].'"/>
                <input type="hidden" name="topicid" value="10"/>
                <input type="hidden" name="topicname" value="Principal Component Analysis"/>
                <a href="#0" type="button" id="btnadd10" class="">
                  <span style="float:right;position:relative;margin-top: -50px;margin-left: 95px;"><img width=47 height=47 src="../images/icons/quiz.png">
                  </span>
                </a>
                </form>';
                
                 ?>
                 <?php
                }else{
                    echo '
                    <button class="" data-toggle="modal" data-target="#authenticationModal" style="border:none;background: white;outline:none;padding:none;"><span style="float:right;position:relative;margin-bottom:-21px;"><img width=47 height=47 src="../images/icons/quiz.png"></span></button>    
                    ';
                }
                 ?>
                        </span>
                      </div>
                      <div><span style="margin-bottom: -23px;font-size:11px;margin-top:2px;margin-right:30%;color:#3c763d;font-weight:500;display: block;"><span class="indie indie2 hidden-xs hidden-sm" style="font-size:17px;">You would learn about
                            dimensionality reduction, i.e how to shortlist most important features which influence the target
                            variable. Most of the times very few features actually influence the target variable.
                          </span></span></div>
                    </li>
                    <hr class="subhr">

                    <!-- TOPIC 11 -->
                    <li class="lessons">
                      <div style="width:100%;margin-top:-10px;">
                        <span class="topicheadings  hidden-sm hidden-xs"><b>k-Means Clustering</b></span>
                      <span class="topicheadings hidden-xs hidden-sm" style="float: right;margin-top:5px"><?php if(isset($_SESSION['uid'])){ echo '<a href="'.$notebookurl10.'" target="_blank"><img width=50 height=50 src="../images/icons/doc.png"></a>';}else{ echo '<a data-toggle="modal" data-target="#authenticationModal" style="cursor:pointer;margin-left:10px;"><img width=50 height=50 src="../images/icons/doc.png"></a>';}?>
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <?php
                if(isset($passed[10]) && $passed[10] == 1 && isset($topic[10]) && $topic[10] == 11){
                echo '<a href="#0" type="button" id="" class="">
                    <span style="float:right;position:relative;margin-bottom:-21px;"><img width=47 height=47 src="../images/icons/checkdone.png">
                    </span>
                    </a>';
                ?>
                <?php    
                }elseif(($_SESSION['uid'] != null && $_SESSION['uid'] != "") && isset($_SESSION['paid']) && $_SESSION['paid'] != 1){
                echo '<a href="http://localhost/Suven-Elearning/datascience/elearning/payment/buy_now.php" target="_blank"  class="">
                  <span style="float:right;position:relative;margin-bottom:-21px;"><img width=47 height=47 src="../images/icons/quiz.png">
                  </span>
                </a>
                ';?>
                <?php
                }elseif(($_SESSION['uid'] != null && $_SESSION['uid'] != "") && isset($_SESSION['paid']) && $_SESSION['paid'] == 1 ){
                echo '<form id="quiz11" method="post">
                <input type="hidden" name="uid" value="'.$_SESSION['uid'].'"/> 
                <input type="hidden" name="name" value="'.$_SESSION['name'].'"/>
                <input type="hidden" name="email" value="'.$_SESSION['email'].'"/>
                <input type="hidden" name="courseid" value="'.$_SESSION['courseid'].'"/>
                <input type="hidden" name="topicid" value="11"/>
                <input type="hidden" name="topicname" value="k-Means Clustering"/>
                <a href="#0" type="button" id="btnadd11" class="">
                  <span style="float:right;position:relative;margin-top: -50px;margin-left: 95px;"><img width=47 height=47 src="../images/icons/quiz.png">
                  </span>
                </a>
                </form> ';
                
                 ?>
                 <?php
                }else{
                    echo '
                    <button class="" data-toggle="modal" data-target="#authenticationModal" style="border:none;background: white;outline:none;padding:none;"><span style="float:right;position:relative;margin-bottom:-21px;"><img width=47 height=47 src="../images/icons/quiz.png"></span></button>    
                    ';
                }
                 ?>

                        </span>
                      </div>
                      <div><span style="margin-bottom: -23px;font-size:11px;margin-top:2px;margin-right:30%;color:#3c763d;font-weight:500;display: block;"><span class="indie indie2 hidden-xs hidden-sm" style="font-size:17px;">Clustering is an Unsupervised
                            Machine Learning Algorithm. You would learn how to select important features and divide the data
                            set into clusters. Post Clustering we can label the data and possibly use it to apply some
                            Supervised ML model.
                          </span></span></div>
                    </li>
                    <hr class="subhr">

                    <!-- TOPIC 12 -->
                    <div class="lessons">
                      <div style="width:100%;margin-top:-10px;">
                        <span class=" hidden-sm hidden-xs"><b style="font-size:25px;font-weight:bolder;color:green;">Bonus
                            topic :</b><b> K Nearest Neighbors (KNN) <br>Supervised Classification Algo</b></span>
             <span class="topicheadings hidden-xs hidden-sm" style="float: right;margin-top:-25px"><?php if(isset($_SESSION['uid'])){ echo '<a href="'.$notebookurl11.'" target="_blank"><img width=50 height=50 src="../images/icons/doc.png"></a>';}else{ echo '<a data-toggle="modal" data-target="#authenticationModal" style="cursor:pointer;margin-left:10px;"><img width=50 height=50 src="../images/icons/doc.png"></a>';}?>
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <?php
                if(isset($passed[11]) && $passed[11] == 1 && isset($topic[11]) && $topic[11] == 12){
                echo '<a href="#0" type="button" id="" class="">
                    <span style="float:right;position:relative;margin-bottom:-21px;"><img width=47 height=47 src="../images/icons/checkdone.png">
                    </span>
                    </a>';
                ?>
                <?php    
                }elseif(($_SESSION['uid'] != null && $_SESSION['uid'] != "") && isset($_SESSION['paid']) && $_SESSION['paid'] != 1){
                echo '<a href="http://localhost/Suven-Elearning/datascience/elearning/payment/buy_now.php" target="_blank"  class="">
                  <span style="float:right;position:relative;margin-bottom:-21px;"><img width=47 height=47 src="../images/icons/quiz.png">
                  </span>
                </a>
                ';?>
                <?php
                }elseif(($_SESSION['uid'] != null && $_SESSION['uid'] != "") && isset($_SESSION['paid']) && $_SESSION['paid'] == 1 ){
                echo '<form id="quiz12" method="post">
                <input type="hidden" name="uid" value="'.$_SESSION['uid'].'"/> 
                <input type="hidden" name="name" value="'.$_SESSION['name'].'"/>
                <input type="hidden" name="email" value="'.$_SESSION['email'].'"/>
                <input type="hidden" name="courseid" value="'.$_SESSION['courseid'].'"/>
                <input type="hidden" name="topicid" value="12"/>
                <input type="hidden" name="topicname" value="K Nearest Neighbors"/>
                <a href="#0" type="button" id="btnadd12" class="">
                  <span style="float:right;position:relative;margin-top: -50px;margin-left: 95px;"><img width=47 height=47 src="../images/icons/quiz.png">
                  </span>
                </a>
                </form> ';
                
                 ?>
                 <?php
                }else{
                    echo '
                    <button class="" data-toggle="modal" data-target="#authenticationModal" style="border:none;background: white;outline:none;padding:none;"><span style="float:right;position:relative;margin-bottom:-21px;"><img width=47 height=47 src="../images/icons/quiz.png"></span></button>    
                    ';
                }
                 ?>

                        </span>
                      </div>
                      <div><span style="margin-bottom: -23px;font-size:11px;margin-top:2px;margin-right:30%;color:#3c763d;font-weight:500;display: block;"><span class="indie indie2 hidden-xs hidden-sm" style="font-size:17px;">
                          </span></span></div>
                    </div>
                    <hr class="subhr">


                    <!-- TOPIC 13 -->
                    <li class="lessons">
                      <div style="width:100%;margin-top:-10px;">
                        <span class="topicheadings hidden-sm hidden-xs"><b>Deploying ML models on FLASK</b></span>
                       <span class="topicheadings hidden-xs hidden-sm" style="float: right;margin-top:5px"><?php if(isset($_SESSION['uid'])){ echo '<a href="'.$notebookurl12.'" target="_blank"><img width=50 height=50 src="../images/icons/doc.png"></a>';}else{ echo '<a data-toggle="modal" data-target="#authenticationModal" style="cursor:pointer;margin-left:10px;"><img width=50 height=50 src="../images/icons/doc.png"></a>';}?>
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <?php
                if(isset($passed[12]) && $passed[12] == 1 && isset($topic[12]) && $topic[12] == 13){
                echo '<a href="#0" type="button" id="" class="">
                    <span style="float:right;position:relative;margin-bottom:-21px;"><img width=47 height=47 src="../images/icons/checkdone.png">
                    </span>
                    </a>';
                ?>
                 <?php    
                }elseif(($_SESSION['uid'] != null && $_SESSION['uid'] != "") && isset($_SESSION['paid']) && $_SESSION['paid'] != 1){
                echo '<a href="http://localhost/Suven-Elearning/datascience/elearning/payment/buy_now.php" target="_blank"  class="">
                  <span style="float:right;position:relative;margin-bottom:-21px;"><img width=47 height=47 src="../images/icons/quiz.png">
                  </span>
                </a>
                ';?>
                <?php
                }elseif(($_SESSION['uid'] != null && $_SESSION['uid'] != "") && isset($_SESSION['paid']) && $_SESSION['paid'] == 1 ){
                echo '<form id="quiz13" method="post">
                <input type="hidden" name="uid" value="'.$_SESSION['uid'].'"/> 
                <input type="hidden" name="name" value="'.$_SESSION['name'].'"/>
                <input type="hidden" name="email" value="'.$_SESSION['email'].'"/>
                <input type="hidden" name="courseid" value="'.$_SESSION['courseid'].'"/>
                <input type="hidden" name="topicid" value="13"/>
                <input type="hidden" name="topicname" value="Deploying ML models on FLASK"/>
                <a href="#0" type="button" id="btnadd13" class="">
                  <span style="float:right;position:relative;margin-top: -50px;margin-left: 95px;"><img width=47 height=47 src="../images/icons/quiz.png">
                  </span>
                </a>
                </form> ';?>
<?php
                }else{
                    echo '
                    <button class="" data-toggle="modal" data-target="#authenticationModal" style="border:none;background: white;outline:none;padding:none;"><span style="float:right;position:relative;margin-bottom:-21px;"><img width=47 height=47 src="../images/icons/quiz.png"></span></button>    
                    ';
                }
                 ?>

                        </span>
                      </div>

                      <div><span style="margin-bottom: -23px;font-size:11px;margin-top:2px;margin-right:30%;color:#3c763d;font-weight:500;display: block;"><span class="indie indie2 hidden-xs hidden-sm" style="font-size:17px;">You would learn how to put your
                            ML model to good use. You would host your pickle file (i.e the ML model) over FLASK (web
                            application framework). In this way your friends , teachers and your Boss (at work) would be able
                            to use your ML model for predicting, classifying or recommending.
                          </span></span></div>
                    </li>
                  </ol>


                </div>
              </span>

              <span class="col-lg-3 col-md-3">
                <div class="container-fluid"><br><br>
                  <span style="width:100%;" class="text-center hidden-xs hidden-sm">
                    <span class="topicheadings"><b style="margin-left:37%;font-weight:bolder; font-size:25px;color:green;">Your</b></span><br>
                    <span class="topicheadings"><b style="margin-left:24%;font-weight:bolder; font-size:25px;color:green;">Progress</b></span>
                    <br>
                  </span>



                  <!--Progress Bar Starts Here-->
                  <div class="svgresized hidden-xs hidden-sm" style="margin-left:0px;margin-left:0px;text-align: center;">
                    <div class="box">
        <div id="cont" data-pct="0">
        <svg id="svg" width="200" height="200" viewPort="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <circle r="90" cx="100" cy="100" fill="transparent" stroke-dasharray="565.48" stroke-dashoffset="0"></circle>
          <circle id="bar" r="90" cx="100" cy="100" fill="transparent" stroke-dasharray="565.48" stroke-dashoffset="0"></circle>
        </svg>
        </div>
        </div>
        <?php
        $sql = "SELECT COUNT(DISTINCT topicid) as progress FROM quizusers_table where uid = $_SESSION[uid] and courseid = $_SESSION[courseid] and performance = 1 ORDER BY topicid ASC";
        $exe = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($exe)) {
            $actual = $row["progress"];
            $percent = ($row["progress"]/13)*100;
            echo '<script type="text/javascript">
                    var percent = '.$percent.';
                  </script>';
        }
        ?>
        <script type="text/javascript">
        
        $(document).ready(function() {
            setTimeout(function(){ update(percent); }, 1000);
        });
        
        function update(pct){
              var val = Math.round(pct);
              var $circle = $("#svg #bar");
            
              if (isNaN(val)) {
                val = 0;
              } else {
                var r = $circle.attr("r");
                var c = Math.PI * (r * 2);
            
                if (val < 0) {
                  val = 0;
                }
                if (val > 100) {
                  val = 100;
                }
            
                var pct = ((100 - val) / 100) * c;
            
                $circle.css({ strokeDashoffset: pct });
            
                $("#cont").attr("data-pct", val);
            
        }
            
        }
        
        </script>
                  <div><br><br>


                    <!-- Begin Fixed RIght Share -->
                    <div class="col-md-3 col-xs-12 meright hidden-xs hidden-sm" style="float:right;position:absolute;">

                      <h3 class="text-success text-center shiftme"><span style="font-weight:bolder; font-size:25px;margin-left:-47px;">Instructors</span></h3>
                      <div class="">
                        <div class="row">

                          <div class="">
                            <div class="row" style="margin-right: -85px;margin-left: -27px;margin-top:10px;">
                              <span class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 22%;">
                                <img src="http://localhost/Suven-Elearning/datascience/images/testimonials/1per.jpg" class="img-circle fiximg" alt="" width=80 height=80>
                              </span>
                              <div class="row">
                                <span class="text-justify text-primary col-lg-12 col-md-12 col-sm-12 col-xs-12" style="font-size: 13px; margin-left:24px;">

                                  <b class="text-info applypads" style="font-weight: bolder;font-size:1.2rem;">Rocky
                                    Jagtiani</b> Technology trainer to companies like Accenture , Morgan Stanley, EY. Have
                                  trained more than 18000 candidates in 0-3 years work-ex category.<br><br><br><br>

                                </span></div>
                            </div>
                          </div>

                          <div class="">
                            <div class="row" style="margin-right: -85px;margin-left: -27px;">
                              <span class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 22%;">
                                <img src="http://localhost/Suven-Elearning/datascience/images/testimonials/2per.jpg" class="img-circle fiximg" alt="" width=80 height=80>
                              </span>
                              <div class="row">
                                <span class="text-justify text-primary col-lg-12 col-md-12 col-sm-12 col-xs-12" style="font-size:13px; margin-left:24px;">

                                  <b class="text-info applypads" style="font-weight: bolder;font-size:1.2rem;">Niraj
                                    Sharma</b> Presently Data Analyst at NeoSoft (CMM level 5). An expert in R programming. An
                                  active contributor at Kaggle Data Analytics using R competitions.<br><br><br><br>

                                </span></div>
                            </div>
                          </div><br>

                        </div>
                      </div>
                    </div>
                    <!-- End Fixed Right Share -->



                  </div>
                </div>
              </span>
            </div>
          </span>
          <!--<span class="col-lg-2 col-md-2" >B-->
          <!--</span>-->
        </span>



        <div class="hidden-lg hidden-md container-fluid">
          <div class="row formainheading">
            <div class="row">
              <div class="col-sm-3">
                <span style="float:left;" class="img-responsive img-fluid">
                  <img src="http://localhost/Suven-Elearning/datascience/elearning/images/machinelearn.png" width="135" height="130" class="rounded img-fluid float-left" alt="...">
                </span>
              </div>
              <div class="col-sm-9">
                <h1 class="" style="font-weight:bolder;font-size: 26px;margin-top:36px;">Machine Learning <span style="color:#3c763d">Beginner</span></h1>

              </div>
            </div>

            <div class="row" style="margin: 0% 2% 0% 2%;">
              <span class="col-sm-12 col-xs-12">

                <span style="font-size: 14px;color:#3c763d;">
                  Supervised & Unsupervised ML, ML pipeline, Basic Data Exploration, Train-Test-Split, Encoding Categorical
                  data, Feature Scaling, Decision (CART) Trees, Random Forest, Naive Bayes Classification, Principal Component
                  Analysis, k-Means Clustering and deploying ML models on FLASK.

                  <br>
                  <br>
                  <span style="font-size:16px"><b>Pre-requisite for this course :</b> You should know <b>Python</b> for
                    <b>Data Science</b>. </span>
                </span>

              </span>
            </div>
            <br><br>

          </div>
          <div class="row fortabularcontent">
            <table class="table">
              <thead>
                <tr style="font-size:18px;">
                  <th><b>Lesson</b></th>
                  <th><b>Notebook</b></th>
                  <th><b>Quiz</b></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><b>1.</b>&nbsp;&nbsp;Supervised & Unsupervised ML</td>
                  <td><span class="" data-toggle="modal" data-target="#exampleModal">
                      <a href="#0" target="">
                        <img width=50 height=50 src="../images/icons/doc.png">
                      </a></span></td>
                  <td><span class="" data-toggle="modal" data-target="#exampleModal">
                      <a href="#0" target="">
                        <img width=47 height=47 src="../images/icons/quiz.png">
                      </a></span></td>
                </tr>
                <tr>
                  <td><b>2.</b>&nbsp;&nbsp;ML Pipeline</td>
                  <td><span class="" data-toggle="modal" data-target="#exampleModal">
                      <a href="#0" target="">
                        <img width=50 height=50 src="../images/icons/doc.png">
                      </a></span></td>
                  <td><span class="" data-toggle="modal" data-target="#exampleModal">
                      <a href="#0" target="">
                        <img width=47 height=47 src="../images/icons/quiz.png">
                      </a></span></td>
                </tr>
                <tr>
                  <td><b>3.</b>&nbsp;&nbsp;Basic Data Exploration</td>
                  <td><span class="" data-toggle="modal" data-target="#exampleModal">
                      <a href="#0" target="">
                        <img width=50 height=50 src="../images/icons/doc.png">
                      </a></span></td>
                  <td><span class="" data-toggle="modal" data-target="#exampleModal">
                      <a href="#0" target="">
                        <img width=47 height=47 src="../images/icons/quiz.png">
                      </a></span></td>
                </tr>
                <!--**********************-->

                <tr>
                  <td><b>4.</b>&nbsp;&nbsp;Train Test Split</td>
                  <td><span class="" data-toggle="modal" data-target="#exampleModal">
                      <a href="#0" target="">
                        <img width=50 height=50 src="../images/icons/doc.png">
                      </a></span></td>
                  <td><span class="" data-toggle="modal" data-target="#exampleModal">
                      <a href="#0" target="">
                        <img width=47 height=47 src="../images/icons/quiz.png">
                      </a></span></td>
                </tr>
                <tr>
                  <td><b>5.</b>&nbsp;&nbsp;Encoding Categorical data</td>
                  <td><span class="" data-toggle="modal" data-target="#exampleModal">
                      <a href="#0" target="">
                        <img width=50 height=50 src="../images/icons/doc.png">
                      </a></span></td>
                  <td><span class="" data-toggle="modal" data-target="#exampleModal">
                      <a href="#0" target="">
                        <img width=47 height=47 src="../images/icons/quiz.png">
                      </a></span></td>
                </tr>
                <tr>
                  <td><b>6.</b>&nbsp;&nbsp;Feature Scaling</td>
                  <td><span class="" data-toggle="modal" data-target="#exampleModal">
                      <a href="#0" target="">
                        <img width=50 height=50 src="../images/icons/doc.png">
                      </a></span></td>
                  <td><span class="" data-toggle="modal" data-target="#exampleModal">
                      <a href="#0" target="">
                        <img width=47 height=47 src="../images/icons/quiz.png">
                      </a></span></td>
                </tr>
                <!--**********************-->

                <tr>
                  <td><b>7.</b>&nbsp;&nbsp;Decision (CART) Trees</td>
                  <td><span class="" data-toggle="modal" data-target="#exampleModal">
                      <a href="#0" target="">
                        <img width=50 height=50 src="../images/icons/doc.png">
                      </a></span></td>
                  <td><span class="" data-toggle="modal" data-target="#exampleModal">
                      <a href="#0" target="">
                        <img width=47 height=47 src="../images/icons/quiz.png">
                      </a></span></td>
                </tr>
                <tr>
                  <td><b>8.</b>&nbsp;&nbsp;Random Forest</td>
                  <td><span class="" data-toggle="modal" data-target="#exampleModal">
                      <a href="#0" target="">
                        <img width=50 height=50 src="../images/icons/doc.png">
                      </a></span></td>
                  <td><span class="" data-toggle="modal" data-target="#exampleModal">
                      <a href="#0" target="">
                        <img width=47 height=47 src="../images/icons/quiz.png">
                      </a></span></td>
                </tr>
                <tr>
                  <td><b>9.</b>&nbsp;&nbsp;Naive Bayes Classification</td>
                  <td><span class="" data-toggle="modal" data-target="#exampleModal">
                      <a href="#0" target="">
                        <img width=50 height=50 src="../images/icons/doc.png">
                      </a></span></td>
                  <td><span class="" data-toggle="modal" data-target="#exampleModal">
                      <a href="#0" target="">
                        <img width=47 height=47 src="../images/icons/quiz.png">
                      </a></span></td>
                </tr>
                <!--**********************-->

                <tr>
                  <td><b>10.</b>&nbsp;&nbsp;Principal Component Analysis</td>
                  <td><span class="" data-toggle="modal" data-target="#exampleModal">
                      <a href="#0" target="">
                        <img width=50 height=50 src="../images/icons/doc.png">
                      </a></span></td>
                  <td><span class="" data-toggle="modal" data-target="#exampleModal">
                      <a href="#0" target="">
                        <img width=47 height=47 src="../images/icons/quiz.png">
                      </a></span></td>
                </tr>





                <tr>
                  <td><b>11.</b>&nbsp;&nbsp;k-Means Clustering</td>
                  <td><span class="" data-toggle="modal" data-target="#exampleModal">
                      <a href="#0" target="">
                        <img width=50 height=50 src="../images/icons/doc.png">
                      </a></span></td>
                  <td><span class="" data-toggle="modal" data-target="#exampleModal">
                      <a href="#0" target="">
                        <img width=47 height=47 src="../images/icons/quiz.png">
                      </a></span></td>
                </tr>
                <tr>
                  <td><b style="color:green;">Bonus topic</b> : K Nearest Neighbors (KNN)
                    Classification Algo</td>
                  <td><span class="" data-toggle="modal" data-target="#exampleModal">
                      <a href="#0" target="">
                        <img width=50 height=50 src="../images/icons/doc.png">
                      </a></span></td>
                  <td><span class="" data-toggle="modal" data-target="#exampleModal" style="display:none;">
                      <a href="#0" target="">
                        <img width=47 height=47 src="../images/icons/quiz.png">
                      </a></span></td>
                </tr>


                <tr>
                  <td><b>12.</b>&nbsp;&nbsp;Deploying ML models on FLASK</td>
                  <td><span class="" data-toggle="modal" data-target="#exampleModal">
                      <a href="#0" target="">
                        <img width=50 height=50 src="../images/icons/doc.png">
                      </a></span></td>
                  <td><span class="" data-toggle="modal" data-target="#exampleModal">
                      <a href="#0" target="">
                        <img width=47 height=47 src="../images/icons/quiz.png">
                      </a></span></td>
                </tr>

              </tbody>

            </table>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <center>
                      <p>For Google Colab Notebooks
                        larger screen size is required.<br>
                        Please switch to desktop mode.</p>
                    </center>
                  </div>
                  <!--<div class="modal-footer align-items-center justify-content-center">-->
                  <!--  <center><button type="button" onclick="location.reload();" class="btn btn-danger" data-dismiss="modal">Close</button></center>-->
                  <!--</div>-->
                </div>
              </div>
            </div>

          </div>
        </div>


        <!-- QUIZ MODAL -->

        <div style="top:-2%;" class="modal fade" id="quizModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header1>
    
              </div>
              <div class="modal-body" id="QuizTrigger">

              </div>
              
              <!--<div class="modal-footer" style="text-align: center;">-->
              <!--  <button type="button" onclick="location.reload();" class="btn btn-danger" data-dismiss="modal">Close</button>-->
              <!--</div>-->
              
            </div>
          </div>
        </div>

        <div style="top:12%;" class="modal fade" id="quizresult" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header1>
        
              </div>
              <div class="modal-body" id="quizresbody">
                <div class="container" style="padding-left:41%;padding-top:3%;margin-bottom:-7%;">
                <b style="font-weight:bolder;font-size:18px;color:green;">Right Answers : <span id="urlra"></span></b><br>
                <b style="font-weight:bolder;font-size:18px;color:green;">Wrong Answers : <span id="urlwa"></span></b><br>
                <b style="font-weight:bolder;font-size:18px;color:green;">Not Attempted : <span id="urlua"></span></b><br>
                </div>
                <div class="container" style="margin-left:-16%;">
                    <div class="loader">Loading...</div>
                </div>

                <script type="text/javascript">
                  var urlobj = new URL(window.location);
                  var url = urlobj.href;
                  let params = new URLSearchParams(url);
                  ra = params.get('ra');
                  wa = params.get('wa');
                  ua = params.get('ua');
                  console.log(ra);
                  console.log(ua);
                  document.querySelector("#urlra").innerHTML = ra;
                  document.querySelector("#urlwa").innerHTML = wa;
                  document.querySelector("#urlua").innerHTML = ua;
                  if (ra == 0 || wa == 0 || ua == 0) {
                    setTimeout(function() {
                      window.location.assign("./index.php");
                    }, 3000);
                  }

                </script>

              </div>
              <!--<div class="modal-footer" style="text-align: center;">-->
              <!--  <button type="button" onclick="location.reload();" class="btn btn-danger" data-dismiss="modal">Close</button>-->
              <!--</div>-->
            </div>
          </div>
        </div>


        <!-- AJAX FOR INDIVIDUAL QUIZ -->
        <script>
          $(document).ready(function() {
            if (window.location.href.indexOf('#quizresult') != -1) {
              $('#quizresult').modal('show');
            }
          });

          // Ajax Call For TOPICID 1
          $(document).on('click', '#btnadd1', function() {
            var formdata = $("#quiz1").serialize();
            console.log(formdata);
            $.ajax({
              url: '../quizengine/questions.php',
              method: 'post',
              data: formdata,
              success: function(data) {
                $("#quizModal").modal('show');
                $("#QuizTrigger").html(data);
              }
            });
          });

          // Ajax Call For TOPICID 2
          $(document).on('click', '#btnadd2', function() {
            var formdata = $("#quiz2").serialize();
            // var data = $("#projectForm").serialize();
            console.log(formdata);
            $.ajax({
              url: '../quizengine/questions.php',
              method: 'post',
              data: formdata,
              success: function(data) {
                $("#quizModal").modal('show');
                $("#QuizTrigger").html(data);
              }
            });
          });

          // Ajax Call For TOPICID 3
          $(document).on('click', '#btnadd3', function() {
            var formdata = $("#quiz3").serialize();
            // var data = $("#projectForm").serialize();
            console.log(formdata);
            $.ajax({
              url: '../quizengine/questions.php',
              method: 'post',
              data: formdata,
              success: function(data) {
                $("#quizModal").modal('show');
                $("#QuizTrigger").html(data);
              }
            });
          });

          // Ajax Call For TOPICID 4
          $(document).on('click', '#btnadd4', function() {
            var formdata = $("#quiz4").serialize();
            // var data = $("#projectForm").serialize();
            console.log(formdata);
            $.ajax({
              url: '../quizengine/questions.php',
              method: 'post',
              data: formdata,
              success: function(data) {
                $("#quizModal").modal('show');
                $("#QuizTrigger").html(data);
              }
            });
          });

          // Ajax Call For TOPICID 5
          $(document).on('click', '#btnadd5', function() {
            var formdata = $("#quiz5").serialize();
            // var data = $("#projectForm").serialize();
            console.log(formdata);
            $.ajax({
              url: '../quizengine/questions.php',
              method: 'post',
              data: formdata,
              success: function(data) {
                $("#quizModal").modal('show');
                $("#QuizTrigger").html(data);
              }
            });
          });

          // Ajax Call For TOPICID 6
          $(document).on('click', '#btnadd6', function() {
            var formdata = $("#quiz6").serialize();
            // var data = $("#projectForm").serialize();
            console.log(formdata);
            $.ajax({
              url: '../quizengine/questions.php',
              method: 'post',
              data: formdata,
              success: function(data) {
                $("#quizModal").modal('show');
                $("#QuizTrigger").html(data);
              }
            });
          });

          // Ajax Call For TOPICID 7
          $(document).on('click', '#btnadd7', function() {
            var formdata = $("#quiz7").serialize();
            // var data = $("#projectForm").serialize();
            console.log(formdata);
            $.ajax({
              url: '../quizengine/questions.php',
              method: 'post',
              data: formdata,
              success: function(data) {
                $("#quizModal").modal('show');
                $("#QuizTrigger").html(data);
              }
            });
          });

          // Ajax Call For TOPICID 8
          $(document).on('click', '#btnadd8', function() {
            var formdata = $("#quiz8").serialize();
            // var data = $("#projectForm").serialize();
            console.log(formdata);
            $.ajax({
              url: '../quizengine/questions.php',
              method: 'post',
              data: formdata,
              success: function(data) {
                $("#quizModal").modal('show');
                $("#QuizTrigger").html(data);
              }
            });
          });

          // Ajax Call For TOPICID 9
          $(document).on('click', '#btnadd9', function() {
            var formdata = $("#quiz9").serialize();
            // var data = $("#projectForm").serialize();
            console.log(formdata);
            $.ajax({
              url: '../quizengine/questions.php',
              method: 'post',
              data: formdata,
              success: function(data) {
                $("#quizModal").modal('show');
                $("#QuizTrigger").html(data);
              }
            });
          });

          // Ajax Call For TOPICID 10
          $(document).on('click', '#btnadd10', function() {
            var formdata = $("#quiz10").serialize();
            // var data = $("#projectForm").serialize();
            console.log(formdata);
            $.ajax({
              url: '../quizengine/questions.php',
              method: 'post',
              data: formdata,
              success: function(data) {
                $("#quizModal").modal('show');
                $("#QuizTrigger").html(data);
              }
            });
          });

          // Ajax Call For TOPICID 11
          $(document).on('click', '#btnadd11', function() {
            var formdata = $("#quiz11").serialize();
            // var data = $("#projectForm").serialize();
            console.log(formdata);
            $.ajax({
              url: '../quizengine/questions.php',
              method: 'post',
              data: formdata,
              success: function(data) {
                $("#quizModal").modal('show');
                $("#QuizTrigger").html(data);
              }
            });
          });

          // Ajax Call For TOPICID 12
          $(document).on('click', '#btnadd12', function() {
            var formdata = $("#quiz12").serialize();
            // var data = $("#projectForm").serialize();
            console.log(formdata);
            $.ajax({
              url: '../quizengine/questions.php',
              method: 'post',
              data: formdata,
              success: function(data) {
                $("#quizModal").modal('show');
                $("#QuizTrigger").html(data);
              }
            });
          });

          // Ajax Call For TOPICID 13
          $(document).on('click', '#btnadd13', function() {
            var formdata = $("#quiz13").serialize();
            // var data = $("#projectForm").serialize();
            console.log(formdata);
            $.ajax({
              url: '../quizengine/questions.php',
              method: 'post',
              data: formdata,
              success: function(data) {
                $("#quizModal").modal('show');
                $("#QuizTrigger").html(data);
              }
            });
          });

        </script>




        <!--MAIN BODY CONTENT ENDS-->
        <!-- Login & Registration Modal -->
        <?php
   if(!isset($_SESSION['uid'])){

    echo '<div class="modal fade" id="subscribeModal" tabindex="-1" role="dialog" aria-labelledby="Subscribe us">
    <div class="modal-dialog modal-smll" role="modal">
        <div class="modal-content">
          <div class="modal-content">
            <div class="modal-header text-center">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span class="badge" style="background-color:#000">x</span>
              </button>
              <h4 class="modal-title" id="myModalLabel" style=""><b>Allow my team to send you some great resources.</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-group" action="" id="subscribeForm">
                <br>
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <input type="hidden" name="action_mail" value="subscribeme"/>
                    <input type="text" class="form-control input-lg" name="subscribe_name" id="subscribe_name" placeholder="Enter Your Full Name"><br>
                    <input type="email" class="form-control input-lg" name="subscribe_email" id="subscribe_email" placeholder="Enter Your Email Id">
                    <p class="text-center">Allow my Data Science team to call and understand your study requirements.</p>
                    <input type="number" name="subscribe_contact" id="subscribe_contact" class="form-control input-lg" placeholder="Enter Your Contact Number">
                  </div>
                </div>
                <div class="row">
                <button type="button" id="subscribeme" class="btn btn-success btn-lg center-block block-center" style="padding-top:15px;border-radius:0px;">Subscribe</button>
                </div>
              </form>
            </div>
          </div>
        </div>
    </div>
  </div>

  <!--Action Resultant Modal -->
  <div class="modal fade" id="actionsModal" tabindex="-1" role="dialog" aria-lebelledby="Subscribe us">
  <div class="modal-content">
        <div class="modal-header text-center">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="badge" style="background-color:#000;">×</span></span></button>
              <h4 class="modal-title" id="myModalLabel" style="color:#28a745;"><b>Would get in touch with you very soon</b></h4>
        </div>
        <div class="modal-body text-center" id="displayinModal">
        </div>
  </div>
  </div>';
   }
  ?>
        <div class="modal" id="authenticationModal">
          <div class="modal-dialog modal-md">
            <div class="modal-content">
              <div class="modal-header" style="padding: 0px;">
                <ul class="nav nav-pills nav-justified">
                  <li class="active"><a href="#login" data-toggle="pill">Login</a></li>
                  <li><a href="#registration" data-toggle="pill">Register</a></li>
                </ul>
              </div>
              <div class="modal-body">

                <!--<h3 class="text-center"><img src="images/sctpl_logo.png" height="32px" width="32px" /> Suven Consultants & Technology Pvt. Ltd.</h3><br>-->
                <div class="tab-content" style="border:none;">
                  <div id="login" class="tab-pane fade in active">
                    <!--<form name="loginForm" action="authentication.php" method="post" onsubmit="">-->
                    <form name="loginForm" action="./authentication.php" method="post" onsubmit="return validateLogin()">
                      <input type="hidden" name="action" value="login" />
                      <div class="form-group">
                        <label>Email ID:</label>
                        <input type="email" class="form-control" name="email" placeholder="Email ID" required="required">
                      </div>
                      <div class="form-group">
                        <label>Password:</label>
                        <input type="password" class="form-control" name="password" placeholder="Password" required="required" minlength="6">
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-success center-block">Login <span class="glyphicon glyphicon-log-in"></span></button>
                      </div>
                      <p class="text-center">
                        <a href="#registration" data-toggle="pill">New to our online courses? Register </a>
                      </p>
                    </form>
                  </div>
                  <div id="registration" class="tab-pane fade">
                    <!--<form name="registerForm" action="authentication.php" method="post" onsubmit="">-->
                    <form name="registerForm" action="./authentication.php" method="post" onsubmit="return validateRegister()">
                      <input type="hidden" name="action" value="register" />
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                          <label>Full Name:</label>
                          <input type="text" class="form-control" name="name" placeholder="Enter your full name" required="required">
                          <p>This name would be used for certification purpose.</p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                          <label>Email ID:</label>
                          <input type="email" class="form-control" name="emailid" placeholder="Enter your Email ID" required="required">
                          <p>This would be your default login username</p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                          <label>Password:</label>
                          <input type="password" class="form-control" name="password" id="password" placeholder="Password (minimum 8 characters)" required="required" minlength="8">
                          <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                          <label>Confirm Password:</label>
                          <input type="password" class="form-control" name="confirm_password" placeholder="Confirm password" required="required">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                          <label>Contact No.:</label>
                          <input type="tel" class="form-control" name="contact" placeholder="Enter your contact no." required="required">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 form-group">
                          <p>Our team would connect with you to understand your study requirements very soon.</p>
                        </div>
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-success center-block">Register <i class="fa fa-user-plus"></i></button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
        </span></span>
        <!-- Login & Registration Modal Ends -->
        <?php include 'footer.php';?>
      </body>
    </html>