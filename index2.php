<?php
require('fun.php');
?>
<!DOCTYPE html>

<html lang="en">
	<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AUTO GENIUS</title>

    <link rel="stylesheet" href="css/bootstrap1.min.css"/>
    <link rel="stylesheet" href="css/font-awesome1.min.css"/>
    <link rel="stylesheet" href="css/animate1.css"/>

		<link rel="stylesheet" href="css/style1.css" />

    <script type="text/javascript" src="js/jquery1-1.11.2.min.js"></script>
    <script type="text/javascript" src="js/bootstrap1.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZXJBVDf7R4JqmSpopVPoduIGWx1IwpBM"></script>
    <script type="text/javascript" src="js/plugins1.js"></script>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

	</head>
	<body>
	<div class="svg-wrap">
      <svg width="64" height="64" viewBox="0 0 64 64">
        <path id="arrow-left" d="M26.667 10.667q1.104 0 1.885 0.781t0.781 1.885q0 1.125-0.792 1.896l-14.104 14.104h41.563q1.104 0 1.885 0.781t0.781 1.885-0.781 1.885-1.885 0.781h-41.563l14.104 14.104q0.792 0.771 0.792 1.896 0 1.104-0.781 1.885t-1.885 0.781q-1.125 0-1.896-0.771l-18.667-18.667q-0.771-0.813-0.771-1.896t0.771-1.896l18.667-18.667q0.792-0.771 1.896-0.771z"></path>
      </svg>

      <svg width="64" height="64" viewBox="0 0 64 64">
        <path id="arrow-right" d="M37.333 10.667q1.125 0 1.896 0.771l18.667 18.667q0.771 0.771 0.771 1.896t-0.771 1.896l-18.667 18.667q-0.771 0.771-1.896 0.771-1.146 0-1.906-0.76t-0.76-1.906q0-1.125 0.771-1.896l14.125-14.104h-41.563q-1.104 0-1.885-0.781t-0.781-1.885 0.781-1.885 1.885-0.781h41.563l-14.125-14.104q-0.771-0.771-0.771-1.896 0-1.146 0.76-1.906t1.906-0.76z"></path>
      </svg>
    </div>


    <!-- MAIN CONTENT -->

   <div class="container-fluid">

    <!-- HEADER -->

    <section id="header">

      <!-- NAVIGATION -->
      <nav class="navbar navbar-fixed-top navbar-default bottom">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#header">AUTO GENIUS</a>
          </div><!-- /.navbar-header -->

          <div class="collapse navbar-collapse" id="menu">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#header">Home</a></li>
              <li><a href="#about">About</a></li>              
              <li><a href="#portfolio">Portfolio</a></li>
			  <li><a href="SINGUP.html">Register</a></li>
			  <li><a href="login.html">Login</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div> <!-- /.navbar-collapse -->
        </div> <!-- /.container -->
      </nav>

      <!-- SLIDER -->
      <div class="header-slide">
        <section>
          <div id="loader" class="pageload-overlay" data-opening="M 0,0 0,60 80,60 80,0 z M 80,0 40,30 0,60 40,30 z">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 80 60" preserveAspectRatio="none">
              <path d="M 0,0 0,60 80,60 80,0 Z M 80,0 80,60 0,60 0,0 Z"/>
            </svg>
          </div> <!-- /.pageload-overlay -->
          
          <div class="image-slide bg-fixed">
            <div class="overlay">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">

                    <div class="slider-content">
                      <h1></h1>
                      <p>BEST IN BUSSINESS</p>
                    </div>

                  </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
              </div> <!-- /.container -->
            </div> <!-- /.overlay -->
          </div> <!-- /.image-slide -->

          <nav class="nav-slide">
            <a class="prev" href="#prev">
              <span class="icon-wrap">
                <svg class="icon" width="32" height="32" viewBox="0 0 64 64">
                  <use xlink:href="#arrow-left">
                </svg>
              </span>
              <div>
                <span>Prev Photo</span>
                <h3>...</h3>
                <p>...</p>
                <img alt="Previous thumb">
              </div>
            </a>
            <a class="next" href="#next">
              <span class="icon-wrap">
                <svg class="icon" width="32" height="32" viewBox="0 0 64 64">
                  <use xlink:href="#arrow-right">
                </svg>
              </span>
              <div>
                <span>Next Photo</span>
                <h3>...</h3>
                <p>...</p>
                <img alt="Next thumb">
              </div>
            </a>
          </nav>
        </section>

        <script type="text/javascript">
        var dataHeader = [
                            {
                              bigImage :"images/index2.jpg",
                              title : "Minimal & Efficient",
							 
                            },
                            {
                              bigImage :"images/body.jpg",
                              title : "Book your spot at your convenience",
                              
                            },
                            {
                              bigImage :"images/auto.jpg",
                              title : "Achieve great Satisfaction",
                              
                            }
                        ],
            loaderSVG = new SVGLoader(document.getElementById('loader'), {speedIn : 200, speedOut : 200, easingIn : mina.easeinout});
            loaderSVG.show()
        </script>

      </div><!-- /.header-slide -->
    </section>

    <!-- HEADER END -->


    <!-- ABOUT -->

    <section id="about" class="light">
      <header class="title">
        <h2>About <span>Us</span></h2>
        <p>We provide the most<strong>EFFICIENT</strong> service.We have the best mechanics and advisors which are best in the bussiness</p>
      </header>

      <div class="container">
        <div class="row table-row">
          <div class="col-sm-6 hidden-xs">
            <div class="section-content">
              <div class="big-image" style="background-image:url(images/1.jpg)"></div>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="section-content">
              <div class="about-content left animated" data-animate="fadeInLeft">
                <div class="about-icon"><i class="fa fa-code"></i></div>
                <div class="about-detail">
                  <h4>Road side Assistance</h4>
                  <p>Sudden unexpected breakdown? Call us and avail immediate assistance, 24x7 call 1800 102 1800.</p>
                </div>
              </div>

              <div class="about-content left animated" data-animate="fadeInLeft">
                <div class="about-icon"><i class="fa fa-desktop"></i></div>
                <div class="about-detail">
                  <h4>Car Care</h4>
                  <p>Maintenance tips to keep your car in good shape.</p>
                </div>
              </div>

              <div class="about-content left animated" data-animate="fadeInLeft">
                <div class="about-icon"><i class="fa fa-cube"></i></div>
                <div class="about-detail">
                  <h4>Spot pickup and Delivery</h4>
                  <p>Picking and Delivering at your convininece.</p>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- /.row table-row -->
      </div> <!-- /.container -->
    </section>
	
	
	    <!-- PORTFOLIO -->

    <section id="portfolio" class="light">
      <header class="title">
        <h2>Portfolio</h2>
          <strong>Flexibility</strong>
        <p>Match your vehicle to your need. Enjoy the ability to change vehicles as your life changes.
 No long-term commitments, pause your subscription when you are not satisfied with our service</p>
          <br>
          <br>
          <br>
            <strong>One-Payment</strong> 
            <p>We give you access to vehicles with insurance, service, routine maintenance, and concierge delivery services are all covered.</p>
        
        <br>
        <br>
        <br>
        <strong>Completely Online</strong>
            <p>We come to you. Your concierge will flip your vehicles wherever you need, simple scheduling done through our mobile app.

                Direct communication to our concierges through your mobile phone. The vehicle needs service? Let us know, we will handle that.</p>
      </header>

      <div class="container-fluid">
        <div class="row">
          <ul id="filters" class="list-inline">
            <li data-filter="all" class="filter">All</li>
            <li data-filter=".branding" class="filter">Mechanical</li> 
            <li data-filter=".graphic" class="filter">Washing</li> 
            <li data-filter=".printing" class="filter">Painting</li> 
           
          </ul>
        </div>

        <div class="row">
          <div class="container-portfolio">
            <!-- PORTFOLIO OBJECT -->
            <script type="text/javascript">
            var portfolio = [
                    {
                      category : "branding",
                      image : "images/p-1.jpg",
                      title : " <span>Restoration</span>",
                      link : "#none",
                      text : "Restoring a dead engine."
                    },
                    {
                      category : "graphic",
                      image : "images/p-2.jpg",
                      title : "Clean <span>Culture</span>",
                      link : "#none",
                      text : "Well equipped washing."
                    },
                    {
                      category : "graphic",
                      image : "images/p-3.jpg",
                      title : "Be <span>Clean</span>",
                      link : "#none",
                      text : ""
                    },
                    {
                      category : "video",
                      image : "images/p-4.jpg",
                      title : "Racing<span>DNA</span>",
                      link : "#none",
                      text :"Working on Racing cars."
                    },
                    {
                      category : "branding",
                      image : "images/p-5.jpg",
                      title :  "Racing<span>DNA</span>",
                      link : "#none",
                      text :"Working on Racing cars."
                    },
                    {
                      category : "printing",
                      image : "images/p-6.jpg",
                      title : "paint <span>job</span>",
                      link : "#none",
                      text : "Best paint job in town."
                    {
                      category : "printing",
                      image : "images/p-7.jpg",
                      title : "IG <span>Shop</span>",
                      link : "#none",
                      text : "Lorem ipsum Dolor in minim fugiat ut nisi occaecat fugiat. Lorem ipsum Quis tempor Ut enim officia deserunt consectetur."
                    },
                    {
                      category : "printing",
                      image : "images/p-8.jpg",
                      title : "Tana <span>Samawa</span>",
                      link : "#none",
                      text : "Lorem ipsum Dolor in minim fugiat ut nisi occaecat fugiat. Lorem ipsum Quis tempor Ut enim officia deserunt consectetur."
                    }
                ];
            </script>
          </div>
        </div>
      </div>
    </section>


    <!-- TEAM -->

   
	    <!-- INFO -->

    <section id="info" class="dark">
      <header class="title">
        <h2>Our <span>Experties</span></h2>
        <p></p>
      </header>

      <div class="container experties">
        <div class="row">
          <div class="col-md-6">
            <div class="skill">
              <ul class="skill-bar list-unstyled">
                <li><span class="percentage" data-value="98%"></span><em>Satisfied Customers</em></li>
                <li><span class="percentage" data-value="95%"></span><em>genuinty</em></li>
                <li><span class="percentage" data-value="90%"></span><em>Achivements</em></li>
              </ul>
            </div>
          </div>

          <div class="col-md-6">
            <div class="skill">
              <ul class="skill-bar list-unstyled">
                <li><span class="percentage" data-value="95%"></span><em>Customer Relation</em></li>
                <li><span class="percentage" data-value="90%"></span><em>Best Feedbacks</em></li>
                <li><span class="percentage" data-value="43%"></span><em>Logo</em></li>
              </ul>
            </div>
          </div>
        </div>
      </div> <!-- /.container -->
    </section>	
	

    <section class="separator blue">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="counter animated" data-animate="fadeInUp" data-delay="0">
              <div class="counter-icon">
                <i class="fa fa-group"></i>
              </div>
              <div class="counter-content">
                <span class="value" data-from="0" data-to="500"></span>
                <small>Clients</small>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="counter animated" data-animate="fadeInUp" data-delay="500">
              <div class="counter-icon">
                <i class="fa fa-leaf"></i>
              </div>
              <div class="counter-content">
                <span class="value" data-from="0" data-to="20"></span>
                <small>Awards</small>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="counter animated" data-animate="fadeInUp" data-delay="1000">
              <div class="counter-icon">
                <i class="fa fa-gears"></i>
              </div>
              <div class="counter-content">
                <span class="value" data-from="0" data-to="20"></span>
                <small>Employees</small>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="counter animated" data-animate="fadeInUp" data-delay="1500">
              <div class="counter-icon">
                <i class="fa fa-inbox"></i>
              </div>
              <div class="counter-content">
                <span class="value" data-from="0" data-to="1298"></span>
                <small>Cars</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- FOOTER CONTACT -->

     <section id="contact" class="dark">
      <header class="title">
        <h2>Contact <span>Us</span></h2>
        <p></p>
      </header>

      <div class="container">
        <div class="row">
          <div class="col-md-8 animated" data-animate="fadeInLeft">
            <form action="contact.php" method="post">
              <div class="row">
                <div class="col-md-6">
                  <input type="text" class="form-control" name="cname" id="cname" placeholder="Your Name">
                </div>
                <div class="col-md-6">
                  <input type="email" class="form-control" id="cemail" name="cemail" placeholder="Your Email">
                </div>
                <div class="col-md-12">
                  <textarea class="form-control" rows="3" id="ccomment" name="ccomment" placeholder="Tell Us Everything"></textarea>
                </div>
                <div class="col-md-12">
                  <button class="btn btn-default submit" type="submit">Send Message</button>
                </div>
              </div>
            </form>
          </div>

          <div class="col-md-4 animated" data-animate="fadeInRight">
            <address>
                <span><i class="fa fa-map-marker fa-lg"></i> Edapalli,Kochi</span>
                <span><i class="fa fa-phone fa-lg"></i> +919544627462</span>
                <span><i class="fa fa-envelope-o fa-lg"></i> <a href="mailto:contact@example.com">autogenius&#64;gmail.com</a></span>
                <span><i class="fa fa-globe fa-lg"></i> <a href="http://support.example.com">autogenius.com</a></span>
            </address>
          </div>
		  
        </div>
      </div>
    </section>

    <section id="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <p>AUTO GENIUS <i class="fa fa-heart"></i> <a href=""></a></p>
            <p><small></small></p>
          </div>
        </div>
      </div>
    </section>

   </div><!-- /.container-fluid -->
    
    <!-- SCRIPT -->
    <script type="text/javascript" src="js/main1.js"></script>
	</body>
</html>