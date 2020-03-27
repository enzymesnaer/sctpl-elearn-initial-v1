<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- <link rel="stylesheet" type="text/css" href="dist/fullpage.css" /> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" type="text/css" href="dist/fullpage.css" /> -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <link rel="shortcut icon" href="newimage/favicon.ico" type="image/x-icon">
    <link rel="icon" href="newimage/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/internship.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/trainers.css">
    <link rel="stylesheet" href="css/timeline.css">
    <!-- <script src="js/modernizr.js"></script>
    <script src="js/jquery.flexslider-min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script> -->
    <!-- Modernizr -->
    <script>
      jQuery(document).ready(function($) {
        //create the slider
        $('.cd-testimonials-wrapper').flexslider({
          selector: ".cd-testimonials > li",
          animation: "slide",
          controlNav: false,
          slideshow: false,
          smoothHeight: true,
          start: function() {
            $('.cd-testimonials').children('li').css({
              'opacity': 1,
              'position': 'relative'
            });
          }
        });

        //open the testimonials modal page
        $('.cd-see-all').on('click', function() {
          $('.cd-testimonials-all').addClass('is-visible');
        });

        //close the testimonials modal page
        $('.cd-testimonials-all .close-btn').on('click', function() {
          $('.cd-testimonials-all').removeClass('is-visible');
        });
        $(document).keyup(function(event) {
          //check if user has pressed 'Esc'
          if (event.which == '27') {
            $('.cd-testimonials-all').removeClass('is-visible');
          }
        });

        //build the grid for the testimonials modal page
        $('.cd-testimonials-all-wrapper').children('ul').masonry({
          itemSelector: '.cd-testimonials-item'
        });
      });

    </script>

    <style>
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
        quotes: "“" "”" "‘" "’";
      }

      q:before {
        content: open-quote;
      }

      q:after {
        content: close-quote;
      }

      .btn {
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

      /* Demo Stuff End -> */

      /* <- Magic Stuff Start */

      .btn:hover {
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
            
            border-top: 2px solid #2196F3;
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


    </style>
  </head>

  <body style="">

<!-- nav bar -->


    <nav class="navbar navbar-default navbar-fixed-top" style="background-color:black; position:sticky;">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="https://suvenconsultants.com/" style=""><img src="https://suvenconsultants.com/mainpagefiles/images/sctpl_logo.png" style="display:inline; margin-left:-30px;">
              <span>Suven Consultants & Technology Pvt. Ltd.</span></a>
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> 
              </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right" style="letter-spacing:0px;">
            <li><a id="#" href="#" data-toggle="modal" data-target="#expertModal" class="head_panel" style="font-size:14px">Data-Science</a></li>
            <li><a id="#" href="#" class="head_panel" style="font-size:14px">SQL</a></li>
            <li><a id="#" href="#" class="head_panel" style="font-size:14px">Python</a></li>
            <li><a id="#" href="#" class="head_panel" style="font-size:14px">Statistics</a></li>
            <li><a id="#" href="#" class="head_panel" style="font-size:14px">Data-Analytics</a></li>
            <li><a id="#" href="#" class="head_panel" style="font-size:14px">ML</a></li>

          </ul>
        </div>
      </div>
    </nav>


    <div class="row">
      <div class="section col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="jumbotron" id="jumbotron"  style="margin-top:-65px;margin-bottom:1px;background-color:#003366; color:white;max-height:130px;">
          <div class="text-center">
            <h2 style="letter-spacing:3px;font-weight:bolder;">How To Become A Data Scientist?</h2>
          </div>
        </div>
        </div>


        <!-- <div class="container-fluid" style="margin-top:-70px;padding-top:20px;margin-bottom:-280px;">
          <div class="container">
            <div class="row" style="">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="container  hidden-xs hidden-sm">
                  <br><br><br><br><br><br><br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <h1 class="text-center" style="font-size:60px; padding-bottom: 80px; display:none;">Online Coding Internship Process</h1>
                  <div class="timeline flex-container">
                    <div class="timeline-item flex-items-default selected">
                      <div class="timeline-content text-left animated bounceIn"><br>

                        <h1 style="font-size:22px !important; line-height:30px !important;">Learn Database concepts &<br> SQL completely.</h1>
                        <p></p>
                        <div class="hexagon"></div>
                        <i class="material-icons"><img src="images/slider1.png" alt="" style="width:15%;"></i>
                      </div>
                    </div>
                    <div class="timeline-item flex-items-default">
                      <div class="timeline-content text-left"><br>
                        <h1 style="font-size:22px !important; line-height:30px !important;"> Learn Python programming<br>(Core + Advanced).</h1>
                        <p></p>
                        <div class="hexagon"></div>
                        <i class="material-icons"><img src="images/sql.png" alt="" style="width:15%;padding-right:3px;"></i>
                      </div>
                    </div>
                    <div class="timeline-item flex-items-default">
                      <div class="timeline-content text-left"><br>
                        <h1 style="font-size:22px !important; line-height:30px !important;">Learn Statistics using<br> Excel & Tableau.</h1>
                        <p></p>
                        <div class="hexagon"></div>
                        <i class="material-icons"><img src="images/python1.png" alt="" style="width:15%;padding-right:3px;"></i>
                      </div>
                    </div>
                    <div class="timeline-item flex-items-default">
                      <div class="timeline-content text-left"><br>
                        <h1 style="font-size:22px !important; line-height:28px !important;">Learn Data Analytics using R + do Internship projects here: <a href="https://internship.suven.net" target="_blank" style="text-decoration:underline;"> https://internship.suven.net</a></h1>
                        <p></p>
                        <div class="hexagon"></div>
                        <i class="material-icons"><img src="images/angular.png" alt="" style="width:15%;padding-right:3px;padding-bottom:2px;"></i>
                      </div>
                    </div>
                    <div class="timeline-item flex-items-default">
                      <div class="timeline-content text-left"><br>
                        <h1 style="font-size:22px !important;margin-top:3px; line-height:26px !important;">Learn Machine learning (in depth) using Python + do Internship projects here: <a href="https://internship.suven.net" target="_blank" style="text-decoration:underline;"> https://internship.suven.net</a></h1>
                        <p></p>
                        <div class="hexagon"></div>
                        <i class="material-icons"><img src="images/nodejsdn.png" alt="" style="width:15%;padding-right:2px;padding-bottom:1px;"></i>
                      </div>
                    </div>
                    <div class="dropdown animated bounceIn" style="left: -88px;">
                      <div class="inner">
                        <div class="arrow-down"></div>
                      </div>
                    </div>
                  </div>
                  <div class="typo-steps">
                    <h1 class="threed">&nbsp&nbsp&nbsp Step 1 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Step 2 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Step 3 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      Step 4 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Step 5 &nbsp&nbsp&nbsp&nbsp&nbsp</h1>
                  </div><br><br><br>
                </div>
                <div class="container-small hidden-lg hidden-md">
                  <section class="cd-timeline js-cd-timeline">
                    <div class="cd-timeline__container">
                      <div class="cd-timeline__block js-cd-block">
                        <div class="cd-timeline__img cd-timeline__img--picture js-cd-img">
                          <img src="images/slider1.png" alt="Picture">
                        </div>
                        <div class="cd-timeline__content js-cd-content">
                          <h1>Learn web technologies to master HTML5, CSS3, JavaScript, AJAX and PHP-MySQL.</h1>
                          <p></p>
                          <a href="#0" class="cd-timeline__read-more" style="display:none;">Read more</a>
                          <span class="cd-timeline__date" style="display:none;">Jan 14</span>
                        </div>
                      </div>


                      <div class="cd-timeline__block js-cd-block">
                        <div class="images/slider1.png">
                          <img src="images/icons/hand-holding-up-a-book.png" alt="Movie">
                        </div>
                        <div class="cd-timeline__content js-cd-content">
                          <h1>Learn SQL (the global database programming language).</h1>
                          <p></p>
                          <a href="#0" class="cd-timeline__read-more" style="display:none;">Read more</a>
                          <span class="cd-timeline__date" style="display:none;">Jan 18</span>
                        </div>
                      </div>
                      <div class="cd-timeline__block js-cd-block">
                        <div class="cd-timeline__img cd-timeline__img--picture js-cd-img">
                          <img src="images/slider1.png" alt="Picture">
                        </div>
                        <div class="cd-timeline__content js-cd-content">
                          <h1>Learn Python(Core + Advanced) programming.</h1>
                          <p></p>
                          <a href="#0" class="cd-timeline__read-more" style="display:none;">Read more</a>
                          <span class="cd-timeline__date" style="display:none;">Jan 24</span>
                        </div>
                      </div>
                      <div class="cd-timeline__block js-cd-block">
                        <div class="cd-timeline__img cd-timeline__img--location js-cd-img">
                          <img src="images/slider1.png" alt="Location">
                        </div>
                        <div class="cd-timeline__content js-cd-content">
                          <h1>Learn Bootstrap-Angular-Firebase for developing Web Apps for Web & Mobile.</h1>
                          <p></p>
                          <a href="#0" class="cd-timeline__read-more" style="display:none;">Read more</a>
                          <span class="cd-timeline__date" style="display:none;">Feb 14</span>
                        </div>
                      </div>
                      <div class="cd-timeline__block js-cd-block">
                        <div class="cd-timeline__img cd-timeline__img--location js-cd-img">
                          <img src="images/slider1.png" alt="Location">
                        </div>
                        <div class="cd-timeline__content js-cd-content">
                          <h1>Learn Node.js-MongoDB for back-end programming or Ionic-Django for Hybrid Mobile Apps</h1>
                          <p></p>
                          <a href="#0" class="cd-timeline__read-more" style="display:none;">Read more</a>
                          <span class="cd-timeline__date" style="display:none;">Feb 18</span>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
              </div>
            </div>
          </div>
        </div> -->

      </div>


<!-- TESTIMONIALS -->

      




      <section class="hidden-sm hidden-xs">
      <div class="row">
      <div class="section bg-border-radius col-md-6 col-lg-6" style="background-color:#990000;min-height:600px;">

        <div class="container" style="">
          <div class="row-fluid" style="line-height:19px;">
            <div class="col-lg-6 col-md-6" style="">
              <p style="color: white;"><img src="images/ds-logo.png" alt="" width="110" height="110" style="display:inline;float:right;"> More and more, data science is finding a way into our businesses, our communities, and in some cases, our lives.<br>But
                what exactly is <b style="font-weight:600;"> <em><q>data science</q></em></b>?
              </p>
              <p style="color: white;">
                Data science is all about uncovering findings from data. Diving in at a granular<br> level to mine and understand complex behaviors, trends, and inferences. It's about surfacing hidden insight that can help enable companies to make smarter
                business decisions. For example:
                <ul class="pseudo-ul" style="color: white;">
                  <li style="color: white;margin-right:-40px;">&nbsp;&nbsp;Netflix data mines movie viewing patterns to understand what drives user interest, and uses that to make decisions on which Netflix original series to produce.</li>
                  <li style="color: white;margin-right:-60px;">&nbsp;&nbsp;Target identifies what are major customer segments within it's base and the unique shopping behaviors within those segments, which helps to guide messaging to different market audiences.</li>
                  <li style="color: white;margin-right:-30px;">&nbsp;&nbsp;Proctor & Gamble utilizes time series models to more clearly understand future demand, which help plan for production levels more optimally.</li>
                </ul>
              </p>
              <div class="row" style="">
                <div class="col-lg-4 col-md-4"><img src="images/your-turn.jpg" alt="" width="130" height="130" style="margin-top:-5px;">
                </div>
                <div class="col-lg-8 col-md-8">
                  <p style="color: white;">LinkedIn recently picked data scientist as its most promising career of &nbsp;&nbsp;&nbsp;2019. One of the reasons it got the top spot was that the average salary &nbsp;&nbsp;&nbsp;&nbsp;for people in the role is $130,000. LinkedIn’s
                    study also looked at the &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;likelihood that people could get promotions as data scientists and gave &nbsp;&nbsp;&nbsp;a career advancement score of nine out of 10.Employees must show initiative to seize
                    the chances to excel in data science roles, of course,&nbsp;&nbsp;&nbsp; </p>
                </div>
              </div>
              <p style="color: white;">but LinkedIn’s conclusions suggest companies intend to keep data scientists on their teams for the long run. If businesses didn’t view data scientists as applicable to their&nbsp;&nbsp; future competitiveness and prosperity, they likely
                wouldn’t offer promotions.</p>
            </div>

          </div>

        </div>
      </div>
      <div class="container-fluid col-md-6 col-lg-6" style="margin-left:-70px;margin-top:-10px;">
        <section id="testimonial">
          <div class="container">

            <div class="row text-center">
              <h1><span style="margin-left:320px;float:left;font-weight:100;">Our Trainers</span></h1>
            </div>

            <div class="row">
              <div class="testimonial-part">

                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 text-right" style=":100px;margin-right:-90px;">
                  <img class="img-circle" src="images/testimonials/1per.jpg" style="width: 110px;height:110px;">
                </div>

                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12" style="width:40%;">
                  <div class="comment-box2">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque
                      eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
                    </p>
                  </div>
                </div>

              </div>
            </div>
            <div class="row" style=":-110px;">
              <div class="testimonial-part">

                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 text-right" style=":100px;margin-right:-90px;">
                  <img class="img-circle" src="images/testimonials/2per.jpg" style="width: 110px;height:110px;">
                </div>

                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12" style="width:40%;">
                  <div class="comment-box2">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque
                      eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
                    </p>
                  </div>
                </div>

              </div>
            </div>

            <div class="row" style=":-105px;">
              <div class="testimonial-part">

                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 text-right" style=":100px;margin-right:-90px;">
                  <img class="img-circle" src="images/testimonials/3per.jpg" style="width: 110px;height:110px;">
                </div>

                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12" style="width:40%;">
                  <div class="comment-box2">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque
                      eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
                    </p>
                  </div>
                </div>

              </div>
            </div>

            <div class="row" style=":-145px;">
              <div class="testimonial-part">

                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 text-right" style=":100px;margin-right:-90px;">
                  <img class="img-circle" src="images/testimonials/4per.jpg" style="width: 110px;height:110px;">
                </div>

                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12" style="width:40%;">
                  <div class="comment-box2">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque
                      eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
                    </p>
                  </div>
                </div>

              </div>
            </div>

          </div>
        </section>

      </div> 
      </div>


<!-- Failed Testimonials -->


      <!-- <div class="section">
        <div class="container">
          <div class="row col-md-12 col-lg-13" style="margin-top:-150px;">
            <div class="cd-testimonials-wrapper cd-container">
              <ul class="cd-testimonials">
                <li>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <div class="cd-author">
                    <img src="img/avatar-1.jpg" alt="Author image">
                    <ul class="cd-author-info">
                      <li>MyName</li>
                      <li>CEO, AmberCreative</li>
                    </ul>
                  </div>
                </li>

                <li>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus ea, perferendis error repudiandae numquam dolor fuga temporibus. Unde omnis, consequuntur.</p>
                  <div class="cd-author">
                    <img src="img/avatar-2.jpg" alt="Author image">
                    <ul class="cd-author-info">
                      <li>MyName</li>
                      <li>Designer, CodyHouse</li>
                    </ul>
                  </div>
                </li>

                <li>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam totam nulla est, illo molestiae maxime officiis, quae ad, ipsum vitae deserunt molestias eius alias.</p>
                  <div class="cd-author">
                    <img src="img/avatar-3.jpg" alt="Author image">
                    <ul class="cd-author-info">
                      <li>MyName</li>
                      <li>CEO, CompanyName</li>
                    </ul>
                  </div>
                </li>

              </ul>
              cd-testimonials -->
            <!-- </div> -->
            <!-- cd-testimonials-wrapper -->
          <!-- </div>
          <div class="row col-md-12 col-lg-12">
            <div class="container">

              <div class="row" style="">
                <div>

                  <div>
                    <span href="#" type="" class="col-md-offset-1 col-md-4 col-xs-12" data-toggle="" data-target=""></span>
                    <a href="" class="col-md-offset-2 col-md-4 col-xs-12 btn" style="background-image: linear-gradient(to right, #f6d365 0%, #fda085 51%, #f6d365 100%);">Request a call back</a>
                  </div>
                  </p><br><br>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->

<br>
<br>
<br>
      <div class="row">
      <div class="section col-md-11 col-lg-11" style="min-height:390px;">

        <div class="container" style="">
          <div class="row-fluid" style=":48%;line-height:19px;">
            <div class="col-lg-6 col-md-6" style="">
            <div class="container">
<h1 class="text-center"><strong><span style="color:#28a745;">Success</span><span style="color:#28a745;"></span> Stories</strong></h1><br>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  
 
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
        <div class="row">
            <div class="col-lg-offset-1 col-lg-3">
                <img src="images/testimonials/vishalgajwani.jpg" alt="" class="img-responsive img-circle center-block">    
            </div>
            <div class="col-lg-8">
                <h3> Raj Parsana</h3>
                <p><span style="color:#28a745;">BSc IT, University of Mumbai</span><br> 
                I completed my Android basic and advanced course under Rocky Jagtiani which was a great journey of learning with him and his team. Loved to work on hands on practice and projects during the course. After the course on my first interview recommended by Simran Jagtiani ma'am, I got the job as a developer at IndianParenting company.
                </p>
                <p>Selected at India Parenting as Android Developer</p>
            </div>
        </div>
    </div>

    <div class="item">
      <div class="row">
            <div class="col-lg-offset-1 col-lg-3">
                <img src="images/testimonials/vishalgajwani.jpg" alt="" class="img-responsive img-circle center-block">    
            </div>
            <div class="col-lg-8">
                <h3> Vivek Nakrani</h3>
                <p><span style="color:#28a745;">BE IT, Universal College of Engineering</span><br>
                Rocky Sir's content and training helped me gain all the skills necessary to approach interviews with confidence. Post the course I got an opportunity to work as a Web Developer at GlueLagoon Interactive. Thanks also to the faculty as they were always helpful in clearing my doubts. I liked the online learning experience and would like to take up more advanced courses too..
                </p>
                <p>Selected at GlueLagoon Interactive as Web Developer</p>
            </div>
        </div>
    </div>

    <div class="item">
        <div class="row">
            <div class="col-lg-offset-1 col-lg-3">
                <img src="images/testimonials/vishalgajwani.jpg" alt="Niraj Sharma" class="img-responsive img-circle center-block">    
            </div>
            <div class="col-lg-8">
                <h3> Samrudha Medhekar</h3>
                <p><span style="color:#28a745;">BE EXTC, PHCET Rasayni</span><br> 
                A big thanks to all SCTPL trainers, and special thanks to Rocky Jagtiani sir and Simran Jagtiani madam, for training me in software specialization courses, and helping me get placed at my first job. The training provided by SCTPL is practical and up to date with current industry standards. I highly recommend SCTPL for all students and freshers looking for a career in the IT industry..
                </p>
                <p>Selected at Sankey Solutions Pvt.Ltd as Solution Analyst</p>
            </div>
        </div>
    </div>
    
    <div class="item">
      <div class="row">
            <div class="col-lg-offset-1 col-lg-3">
                <img src="images/testimonials/vishalgajwani.jpg" alt="" class="img-responsive img-circle center-block">
            </div>
            <div class="col-lg-8">
                <h3> Anand Jadhav</h3>
                <p><span style="color:#28a745;">BE IT, Bharati Vidyapeeth COE, Navi Mumbai</span><br>
                I'm placed now in etouch a virtusa company in Thane they offered me 2.11 lpa. Thanks mam for your support and guidance. And I would like to thank Rocky Sir for good career guidance, he help me to choose better career. Keep guiding and helping freshers..

                </p>
            </div>
        </div>
    </div>
  </div>

  <ol class="carousel-indicators" style="bottom: -30px;">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

</div>
</div>
            
            </div>


              
            </div>
              </div>
              
            </div>
            <div class="row">
            <div class="col-lg-8 col-md-8">


            <div class="col-md-3">
                    <div class="card-box center-block"><img src="images/sctpl_logo.png" class="img-circle center-block" width="90" height="90" alt="">
                        <div class="card-title">
                            <h2>Lorem ipsum</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, </p>
                        </div>
                        <div class="card-link">
                            <a href="" class="c-link">Link
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-box center-block"><img src="images/sctpl_logo.png" class="img-circle center-block" width="90" height="90" alt="">
                        <div class="card-title">
                        
                            <h2>Lorem ipsum</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, </p>
                        </div>
                        <div class="card-link">
                            <a href="" class="c-link">Link
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-box center-block"><img src="images/sctpl_logo.png" class="img-circle center-block" width="90" height="90" alt="">
                        <div class="card-title">
                            <h2>Lorem ipsum</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, </p>
                        </div>
                        <div class="card-link">
                            <a href="" class="c-link">Link
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-box center-block"><img src="images/sctpl_logo.png" class="img-circle center-block" width="90" height="90" alt="">
                        <div class="card-title">
                            <h2>Lorem ipsum</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, </p>
                        </div>
                        <div class="card-link">
                            <a href="" class="c-link">Link
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

            <!-- <div class="row">
            <div class="image d-inline-block" style="display: inline;">
            <img src="images/sctpl_logo.png" class="img-circle" width="90" height="90" alt="">
            <span><p></p></span>
            </div>
            <div class="image d-inline-block" style="display: inline;">
            <img src="images/sctpl_logo.png" class="img-circle" width="90" height="90" alt="">
            <span><p></p></span>
            </div>
            <div class="image d-inline-block" style="display: inline;">
            <img src="images/sctpl_logo.png" class="img-circle" width="90" height="90" alt="">
            <span><p></p></span>
            </div>
            <div class="image d-inline-block" style="display: inline;">
            <img src="images/sctpl_logo.png" class="img-circle" width="90" height="90" alt="">
            <span><p></p></span>
            </div>
            
            </div> -->
            
            </div>
            <div class="col-lg-4 col-md-4">
                  <div>
                    <a href="" class="btn" style="margin-top:50px;margin-left:80px;margin-bottom:50px;background-image: linear-gradient(to right, #f6d365 0%, #fda085 51%, #f6d365 100%);">Request a call back</a>
                  </div>
            </div>
            </div>

          </div></div><br><br><br>



      <div class="row">
      <div class="section bg-border-radius col-md-6 col-lg-6" style="background-color:#003366;color:#ffffff;min-height:600px;margin-top:2px;">

        <div class="container" style="">
          <div class="row-fluid" style=":48%;line-height:19px;">
            <div class="col-lg-6 col-md-6" style="">
            <h1>
            Intro to SQL for Data Science
            <h1>
              <h4>
              Master the basics of querying tables in relational databases such as MySQL, Oracle, SQL Server, and PostgreSQL.
              </h4>
             <h3>Course Description</h3>
<p>The role of a data scientist is to turn raw data into actionable insights. Much of the world's raw data–from electronic medical records to customer transaction histories–lives in organized collections of tables called relational databases. Therefore, to be an effective data scientist, you must know how to wrangle and extract data from these databases using a language called SQL (pronounced ess-cue-ell, or sequel). This course teaches syntax in SQL shared by many types of databases, such as PostgreSQL, MySQL, SQL Server, and Oracle.This course teaches you everything you need to know to begin working with databases today!</p>

            <!-- <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4"></div>
            <div class="col-lg-4"></div> -->
            
            </div>


              
            </div>
            
              </div>
              
            </div><div class="col-md-6 col-lg-6" style="color:#34495e;">
        <div class="row">
        <h2>Syllabus</h2>

        </div>
        <div class="row">
        <h2>Downloads</h2>

        </div> 
        <div class="row">
        
        
        </div>    
        </div>

          </div>
          
          
          
          </div>
          

          <div class="row">
      <div class="section bg-border-radius col-md-6 col-lg-6" style="background-color:#990000;color:#ffffff;min-height:600px;margin-top:2px;">

      <div class="container" style="">
          <div class="row-fluid" style=":48%;line-height:19px;">
            <div class="col-lg-6 col-md-6" style="">
            <h1>
            Introduction to Python
            <h1>
              <h4>
              Master the basics of data analysis in Python. Expand your skill set by learning scientific computing with numpy.
              </h4>
             <h3>Course Description</h3>
<p>Python is a general-purpose programming language that is becoming more and more popular for doing data science. Companies worldwide are using Python to harvest insights from their data and get a competitive edge. Unlike any other Python tutorial, this course focuses on Python specifically for data science. In our Intro to Python class, you will learn about powerful ways to store and manipulate data as well as cool data science tools to start your own analyses.
</p>

            <div class="row">

            <div class="col-lg-4"></div>
            <div class="col-lg-4"></div>
            <div class="col-lg-4"></div>
            
            </div>


              
            </div>
              </div>
              
            </div>
      </div>

        <div class="col-md-6 col-lg-6">
        <div class="row">
        <h2>Syllabus</h2>

        </div>
        <div class="row">
        <h2>Downloads</h2>

        </div>     
        </div>

</div>


<div class="row">
      <div class="section bg-border-radius col-md-6 col-lg-6" style="background-color:#003366;color:#ffffff;min-height:600px;margin-top:2px;">

      <div class="container" style="">
          <div class="row-fluid" style=":48%;line-height:19px;">
            <div class="col-lg-6 col-md-6" style="">
            <h1>
            Probability and Statistics in Data Science using Python
            <h1>
              <h4>
              Using Python, learn statistical and probabilistic approaches to understand and gain insights from data.
              </h4>
             <h3>Course Description</h3>
<p>Reasoning about uncertainty is inherent in the analysis of noisy data. Probability and Statistics provide the mathematical foundation for such reasoning.

In this course, part of the Data Science MicroMasters program, you will learn the foundations of probability and statistics. You will learn both the mathematical theory, and get a hands-on experience of applying this theory to actual data using Jupyter notebooks.

Concepts covered included: random variables, dependence, correlation, regression, PCA, entropy and MDL.</p>

            <div class="row">

            <div class="col-lg-4"></div>
            <div class="col-lg-4"></div>
            <div class="col-lg-4"></div>
            
            </div>


              
            </div>
              </div>
              
            </div>
      </div>
      <div class="col-md-6 col-lg-6">
        <div class="row">
        <h2>Syllabus</h2>

        </div>
        <div class="row">
        <h2>Downloads</h2>

        </div>     
        </div>
      </div>




      <div class="row">
      <div class="section bg-border-radius col-md-6 col-lg-6" style="background-color:#990000;color:#ffffff;min-height:600px;margin-top:2px;">
      <div class="container" style="">
          <div class="row-fluid" style=":48%;line-height:19px;">
            <div class="col-lg-6 col-md-6" style="">
            <h1>
            Data Analysis with Python
            <h1>
              <h4>
              Master the basics .....
              </h4>
             <h3>Course Description</h3>
<p>Learn how to analyze data using Python. This course will take you from the basics of Python to exploring many different types of data. You will learn how to prepare data for analysis, perform simple statistical analysis, create meaningful data visualizations, predict future trends from data, and more!

Topics covered:

1) Importing Datasets
2) Cleaning the Data
3) Data frame manipulation
4) Summarizing the Data
5) Building machine learning Regression models
6) Building data pipelines</p>

  


              
            </div>
              </div>
              
            </div>
      </div>
      <div class="col-md-6 col-lg-6">
        <div class="row">
        <h2>Syllabus</h2>

        </div>
        <div class="row">
        <h2>Downloads</h2>

        </div>     
        </div>
      </div>



      <div class="row">
      <div class="section bg-border-radius col-md-6 col-lg-6" style="background-color:#003366;color:#ffffff;min-height:600px;margin-top:2px;">

      <div class="container" style="">
          <div class="row-fluid" style=":48%;line-height:19px;">
            <div class="col-lg-6 col-md-6" style="">
            <h1>
            Machine Learning
            <h1>
              <h4>
              Deep Dive Into The Modern AI Techniques. You will teach computer to see, draw, read, talk, play games and solve industry problems.
              </h4>
             <h3>Course Description</h3>
<p>This course provides a broad introduction to machine learning, datamining, and statistical pattern recognition. Topics include: (i) Supervised learning (parametric/non-parametric algorithms, support vector machines, kernels, neural networks). (ii) Unsupervised learning (clustering, dimensionality reduction, recommender systems, deep learning). (iii) Best practices in machine learning (bias/variance theory; innovation process in machine learning and AI). The course will also draw from numerous case studies and applications, so that you'll also learn how to apply learning algorithms to building smart robots (perception, control), text understanding (web search, anti-spam), computer vision, medical informatics, audio, database mining, and other areas.!</p>

            <div class="row">

            <div class="col-lg-4"></div>
            <div class="col-lg-4"></div>
            <div class="col-lg-4"></div>
            
            </div>


              
            </div>
              </div>
              
            </div>
      </div>
      <div class="col-md-6 col-lg-6">
        <div class="row">
        <h2>Syllabus</h2>

        </div>
        <div class="row">
        <h2>Downloads</h2>

        </div>     
        </div>
      </div>





      <!-- <div class="section bg-border-radius col-md-6 col-lg-6" style="background-color:#990000;color:#ffffff;">

      <div class="container" style="">
          <div class="row-fluid" style=":48%;line-height:19px;">
            <div class="col-lg-12 col-md-12" style="">
            <h1>
            Intro to SQL for Data Science
            <h1>
              <h4>
              Master the basics of querying tables in relational databases such as MySQL, Oracle, SQL Server, and PostgreSQL.
              </h4>
             <h3>Course Description</h3>
<p>The role of a data scientist is to turn raw data into actionable insights. Much of the world's raw data–from electronic medical records to customer transaction histories–lives in organized collections of tables called relational databases. Therefore, to be an effective data scientist, you must know how to wrangle and extract data from these databases using a language called SQL (pronounced ess-cue-ell, or sequel). This course teaches syntax in SQL shared by many types of databases, such as PostgreSQL, MySQL, SQL Server, and Oracle.This course teaches you everything you need to know to begin working with databases today!</p>

            <div class="row">

            <div class="col-lg-4"></div>
            <div class="col-lg-4"></div>
            <div class="col-lg-4"></div>
            
            </div>


              
            </div>
              </div>
              
            </div>
      </div> -->
      </section>
      <section class="hidden-lg hidden-md">
      <div class="row">
      <div class="section bg-border-radius col-sm-12 col-xs-12" style="background-color:#990000;min-height:600px;margin-top:2px;">

        <div class="container" style="">
          <div class="row-fluid" style="line-height:19px;">
            <div class="col-lg-6 col-md-6" style="">
              <p style="color: white;"><img src="images/ds-logo.png" alt="" width="110" height="110" style="display:inline;float:right;"> More and more, data science is finding a way into our businesses, our communities, and in some cases, our lives.<br>But
                what exactly is <b style="font-weight:600;"> <em><q>data science</q></em></b>?
              </p>
              <p style="color: white;">
                Data science is all about uncovering findings from data. Diving in at a granular<br> level to mine and understand complex behaviors, trends, and inferences. It's about surfacing hidden insight that can help enable companies to make smarter
                business decisions. For example:
                <ul class="pseudo-ul" style="color: white;">
                  <li style="color: white;margin-right:-40px;">&nbsp;&nbsp;Netflix data mines movie viewing patterns to understand what drives user interest, and uses that to make decisions on which Netflix original series to produce.</li>
                  <li style="color: white;margin-right:-60px;">&nbsp;&nbsp;Target identifies what are major customer segments within it's base and the unique shopping behaviors within those segments, which helps to guide messaging to different market audiences.</li>
                  <li style="color: white;margin-right:-30px;">&nbsp;&nbsp;Proctor & Gamble utilizes time series models to more clearly understand future demand, which help plan for production levels more optimally.</li>
                </ul>
              </p>
              <div class="row" style="">
                <div class="col-lg-4 col-md-4"><img src="images/your-turn.jpg" alt="" width="130" height="130" style="margin-top:-5px;">
                </div>
                <div class="col-lg-8 col-md-8">
                  <p style="color: white;">LinkedIn recently picked data scientist as its most promising career of &nbsp;&nbsp;&nbsp;2019. One of the reasons it got the top spot was that the average salary &nbsp;&nbsp;&nbsp;&nbsp;for people in the role is $130,000. LinkedIn’s
                    study also looked at the &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;likelihood that people could get promotions as data scientists and gave &nbsp;&nbsp;&nbsp;a career advancement score of nine out of 10.Employees must show initiative to seize
                    the chances to excel in data science roles, of course,&nbsp;&nbsp;&nbsp; </p>
                </div>
              </div>
              <p style="color: white;">but LinkedIn’s conclusions suggest companies intend to keep data scientists on their teams for the long run. If businesses didn’t view data scientists as applicable to their&nbsp;&nbsp; future competitiveness and prosperity, they likely
                wouldn’t offer promotions.</p>
            </div>

          </div>

        </div>
      </div>
      </div>


<!-- Failed Testimonials -->


      <!-- <div class="section">
        <div class="container">
          <div class="row col-md-12 col-lg-13" style="margin-top:-150px;">
            <div class="cd-testimonials-wrapper cd-container">
              <ul class="cd-testimonials">
                <li>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <div class="cd-author">
                    <img src="img/avatar-1.jpg" alt="Author image">
                    <ul class="cd-author-info">
                      <li>MyName</li>
                      <li>CEO, AmberCreative</li>
                    </ul>
                  </div>
                </li>

                <li>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus ea, perferendis error repudiandae numquam dolor fuga temporibus. Unde omnis, consequuntur.</p>
                  <div class="cd-author">
                    <img src="img/avatar-2.jpg" alt="Author image">
                    <ul class="cd-author-info">
                      <li>MyName</li>
                      <li>Designer, CodyHouse</li>
                    </ul>
                  </div>
                </li>

                <li>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam totam nulla est, illo molestiae maxime officiis, quae ad, ipsum vitae deserunt molestias eius alias.</p>
                  <div class="cd-author">
                    <img src="img/avatar-3.jpg" alt="Author image">
                    <ul class="cd-author-info">
                      <li>MyName</li>
                      <li>CEO, CompanyName</li>
                    </ul>
                  </div>
                </li>

              </ul>
              cd-testimonials -->
            <!-- </div> -->
            <!-- cd-testimonials-wrapper -->
          <!-- </div>
          <div class="row col-md-12 col-lg-12">
            <div class="container">

              <div class="row" style="">
                <div>

                  <div>
                    <span href="#" type="" class="col-md-offset-1 col-md-4 col-xs-12" data-toggle="" data-target=""></span>
                    <a href="" class="col-md-offset-2 col-md-4 col-xs-12 btn" style="background-image: linear-gradient(to right, #f6d365 0%, #fda085 51%, #f6d365 100%);">Request a call back</a>
                  </div>
                  </p><br><br>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->



      <div class="row">
      <div class="section bg-border-radius col-md-12 col-lg-12" style="background-color:#003366;color:#ffffff;min-height:600px;margin-top:2px;">

        <div class="container" style="">
          <div class="row-fluid" style=":48%;line-height:19px;">
            <div class="col-lg-6 col-md-6" style="">
            <h1>
            Intro to SQL for Data Science
            <h1>
              <h4>
              Master the basics of querying tables in relational databases such as MySQL, Oracle, SQL Server, and PostgreSQL.
              </h4>
             <h3>Course Description</h3>
<p>The role of a data scientist is to turn raw data into actionable insights. Much of the world's raw data–from electronic medical records to customer transaction histories–lives in organized collections of tables called relational databases. Therefore, to be an effective data scientist, you must know how to wrangle and extract data from these databases using a language called SQL (pronounced ess-cue-ell, or sequel). This course teaches syntax in SQL shared by many types of databases, such as PostgreSQL, MySQL, SQL Server, and Oracle.This course teaches you everything you need to know to begin working with databases today!</p>

            <!-- <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4"></div>
            <div class="col-lg-4"></div> -->
            
            </div>


              
            </div>
              </div>
              
            </div>

          </div></div>



          <div class="row">
      <div class="section bg-border-radius col-md-12 col-lg-12" style="background-color:#990000;color:#ffffff;min-height:600px;margin-top:2px;">

      <div class="container" style="">
          <div class="row-fluid" style=":48%;line-height:19px;">
            <div class="col-lg-6 col-md-6" style="">
            <h1>
            Introduction to Python
            <h1>
              <h4>
              Master the basics of data analysis in Python. Expand your skill set by learning scientific computing with numpy.
              </h4>
             <h3>Course Description</h3>
<p>Python is a general-purpose programming language that is becoming more and more popular for doing data science. Companies worldwide are using Python to harvest insights from their data and get a competitive edge. Unlike any other Python tutorial, this course focuses on Python specifically for data science. In our Intro to Python class, you will learn about powerful ways to store and manipulate data as well as cool data science tools to start your own analyses.
</p>

            <div class="row">

            <div class="col-lg-4"></div>
            <div class="col-lg-4"></div>
            <div class="col-lg-4"></div>
            
            </div>


              
            </div>
              </div>
              
            </div>
      </div>
</div>


<div class="row">
      <div class="section bg-border-radius col-md-12 col-lg-12" style="background-color:#003366;color:#ffffff;min-height:600px;margin-top:2px;">

      <div class="container" style="">
          <div class="row-fluid" style=":48%;line-height:19px;">
            <div class="col-lg-6 col-md-6" style="">
            <h1>
            Probability and Statistics in Data Science using Python
            <h1>
              <h4>
              Using Python, learn statistical and probabilistic approaches to understand and gain insights from data.
              </h4>
             <h3>Course Description</h3>
<p>Reasoning about uncertainty is inherent in the analysis of noisy data. Probability and Statistics provide the mathematical foundation for such reasoning.

In this course, part of the Data Science MicroMasters program, you will learn the foundations of probability and statistics. You will learn both the mathematical theory, and get a hands-on experience of applying this theory to actual data using Jupyter notebooks.

Concepts covered included: random variables, dependence, correlation, regression, PCA, entropy and MDL.</p>

            <div class="row">

            <div class="col-lg-4"></div>
            <div class="col-lg-4"></div>
            <div class="col-lg-4"></div>
            
            </div>


              
            </div>
              </div>
              
            </div>
      </div></div>




      <div class="row">
      <div class="section bg-border-radius col-md-12 col-lg-12" style="background-color:#990000;color:#ffffff;min-height:600px;margin-top:2px;">
      <div class="container" style="">
          <div class="row-fluid" style=":48%;line-height:19px;">
            <div class="col-lg-6 col-md-6" style="">
            <h1>
            Data Analysis with Python
            <h1>
              <h4>
              Master the basics .....
              </h4>
             <h3>Course Description</h3>
<p>Learn how to analyze data using Python. This course will take you from the basics of Python to exploring many different types of data. You will learn how to prepare data for analysis, perform simple statistical analysis, create meaningful data visualizations, predict future trends from data, and more!

Topics covered:

1) Importing Datasets
2) Cleaning the Data
3) Data frame manipulation
4) Summarizing the Data
5) Building machine learning Regression models
6) Building data pipelines</p>

  


              
            </div>
              </div>
              
            </div>
      </div></div>



      <div class="row">
      <div class="section bg-border-radius col-md-12 col-lg-12" style="background-color:#003366;color:#ffffff;min-height:600px;margin-top:2px;">

      <div class="container" style="">
          <div class="row-fluid" style=":48%;line-height:19px;">
            <div class="col-lg-6 col-md-6" style="">
            <h1>
            Machine Learning
            <h1>
              <h4>
              Deep Dive Into The Modern AI Techniques. You will teach computer to see, draw, read, talk, play games and solve industry problems.
              </h4>
             <h3>Course Description</h3>
<p>This course provides a broad introduction to machine learning, datamining, and statistical pattern recognition. Topics include: (i) Supervised learning (parametric/non-parametric algorithms, support vector machines, kernels, neural networks). (ii) Unsupervised learning (clustering, dimensionality reduction, recommender systems, deep learning). (iii) Best practices in machine learning (bias/variance theory; innovation process in machine learning and AI). The course will also draw from numerous case studies and applications, so that you'll also learn how to apply learning algorithms to building smart robots (perception, control), text understanding (web search, anti-spam), computer vision, medical informatics, audio, database mining, and other areas.!</p>

            <div class="row">

            <div class="col-lg-4"></div>
            <div class="col-lg-4"></div>
            <div class="col-lg-4"></div>
            
            </div>


              
            </div>
              </div>
              
            </div>
      </div></div>





      <!-- <div class="section bg-border-radius col-md-6 col-lg-6" style="background-color:#990000;color:#ffffff;">

      <div class="container" style="">
          <div class="row-fluid" style=":48%;line-height:19px;">
            <div class="col-lg-12 col-md-12" style="">
            <h1>
            Intro to SQL for Data Science
            <h1>
              <h4>
              Master the basics of querying tables in relational databases such as MySQL, Oracle, SQL Server, and PostgreSQL.
              </h4>
             <h3>Course Description</h3>
<p>The role of a data scientist is to turn raw data into actionable insights. Much of the world's raw data–from electronic medical records to customer transaction histories–lives in organized collections of tables called relational databases. Therefore, to be an effective data scientist, you must know how to wrangle and extract data from these databases using a language called SQL (pronounced ess-cue-ell, or sequel). This course teaches syntax in SQL shared by many types of databases, such as PostgreSQL, MySQL, SQL Server, and Oracle.This course teaches you everything you need to know to begin working with databases today!</p>

            <div class="row">

            <div class="col-lg-4"></div>
            <div class="col-lg-4"></div>
            <div class="col-lg-4"></div>
            
            </div>


              
            </div>
              </div>
              
            </div>
      </div> -->
      </section>
      <div class="row">
      <div class="section" style="background-color:#34495e;color:#ffffff">

      <?php
      include("footer.php");
      ?>
     </div>
     </div>
   
    <!-- <script type="text/javascript" src="dist/fullpage.js"></script> -->
    <!-- <script type="text/javascript">
      var myFullpage = new fullpage('#fullpage', {
        sectionsColor: [],
        anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage', '5thpage', '6thpage', '7thpage', 'lastPage'],
        menu: '#menu',
        lazyLoad: true
      });

    </script> -->
    <script type="text/javascript" src="js/timeline.js"></script>
  </body>

</html>
