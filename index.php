
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <title>Luxxyride</title>

        
        
    <!--=== Bootstrap CSS ===-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!--=== Vegas Min CSS ===-->
    <link href="assets/css/plugins/vegas.min.css" rel="stylesheet">
    <!--=== Slicknav CSS ===-->
    <link href="assets/css/plugins/slicknav.min.css" rel="stylesheet">
    <!--=== Magnific Popup CSS ===-->
    <link href="assets/css/plugins/magnific-popup.css" rel="stylesheet">
    <!--=== Owl Carousel CSS ===-->
    <link href="assets/css/plugins/owl.carousel.min.css" rel="stylesheet">
    <!--=== Gijgo CSS ===-->
    <link href="assets/css/plugins/gijgo.css" rel="stylesheet">
    <!--=== FontAwesome CSS ===-->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!--=== Theme Reset CSS ===-->
    <link href="assets/css/reset.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="style.css" rel="stylesheet">
    <!--=== Responsive CSS ===-->
    <link href="assets/css/responsive.css" rel="stylesheet">


    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <style>
#modal #form{
    margin:20% 0%;
    padding: 10px 20px;
    background: #fff;
    border-radius: 20px;
}

#modal  #form .row:last-child{
    border: none;
    background: none;
}
#modal #form input{
/*    border:none;
    padding:8px;
    width: 85%*/
}        
#modal{
    background: rgba(0,0,0,0.8);
    position: fixed;
    top: 0px;
    left: 0px;
    display: none;
    width:100%;
    height: 100%;
    z-index: 10000;
    padding: 0px;
}  
#close{
    font-size:24px;
    color:#000;
    display:block;
    text-align:right;
    cursor: pointer;
}        
#funfact-area {
	background-image: url(assets/img/funfact-bg1.jpg) !important;
	background-size: cover;
	background-position: center center;
	color: #fff;
}

            input{
                padding: 10px !important;
                margin: 10px 0px  !important;
            }
 .title-line {
	/*color: #ffd000;*/
	position: relative;
}

 .title-line::after {
	background-color: #333;
	content: "";
	height: 2px;
	left: -60px;
	position: absolute;
	top: 10px;
	width: 50px;
}

 .title-line::before {
	background-color: #333;
	content: "";
	height: 2px;
	position: absolute;
	right: -60px;
	top: 10px;
	width: 50px;
}
.num{
    display: inline-block;
    height:60px;
    line-height:60px;
    width:60px;
    border: 2px solid #F68B1E;
    border-radius: 50px;
    text-align: center;
    color:#F68B1E;
}
#state{
    padding: 15px;
    border-radius: 10px;
    width: 100%;
}
#state option{
   padding: 10px; 
}
.social-icon a{
    color:#000 !important;
    background: #ffd000;
    padding: 10px;
    border-radius: 5px;
}

@media screen and (max-width:1200px){
    #form{
        padding: 10px 5px !important;
        margin: 10% 0% !important;
        width: 100% !important;
        border-radius: 4px;
        display: block;
    }
    #form .col-lg-2{
        display: none;

    }
    #form .col-lg-8 button{
       width: 80%; 
       font-size: 12px;
       padding: 5px;
    }
}
    </style>    
</head>

<body class="loader-active">

    <!--== Preloader Area Start ==-->
    <div class="preloader">
        <div class="preloader-spinner">
            <div class="loader-content">
                <img src="assets/img/preloader.gif" alt="JSOFT">
            </div>
        </div>
    </div>
    <!--== Preloader Area End ==-->

    <!--== Header Area Start ==-->
    <header id="header-area" class="fixed-top">
        <!--== Header Top Start ==-->
        <div id="header-top" class="d-none d-xl-block">
            <div class="container">
                <div class="row">
                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-5 text-left">
                        <i class="fa fa-map-marker"></i> Head Office 24 Awka Road, Anambra
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-mobile"></i> +234 800 345 678
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-clock-o"></i> Mon-Fri 09.00 - 17.00
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Social Icons Start ==-->
<!--                    <div class="col-lg-3 text-right">
                        <div class="header-social-icons">
                            <a href="#"><i class="fa fa-behance"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>-->
                    <!--== Social Icons End ==-->
                </div>
            </div>
        </div>
        <!--== Header Top End ==-->

        <!--== Header Bottom Start ==-->
        <div id="header-bottom">
            <div class="container">
                <div class="row">
                    <!--== Logo Start ==-->
                    <div class="col-lg-4">
                        <a href="index2.html" class="logo">
                            <!--<img src="assets/img/logo.png" alt="JSOFT">-->
                            <h2 style="color: #fff">Luxxy<span style="color: #ffd000;">Ride</span></h2>
                        </a>
                    </div>
                    <!--== Logo End ==-->

                    <!--== Main Menu Start ==-->
                    <div class="col-lg-8 d-none d-xl-block">
                        <nav class="mainmenu alignright">
                            <ul>
                                <li class="active"><a href="#">Home</a></li>
                                <li><a href="about.php">About</a></li>
                                <li><a href="#" onclick="document.getElementById('modal').style.display='block'">Sign In</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!--== Main Menu End ==-->
                </div>
            </div>
        </div>
        <!--== Header Bottom End ==-->
    </header>
    <!--== Header Area End ==-->

    <!--== SlideshowBg Area Start ==-->
    <section id="slideslow-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="slideshowcontent">
                        
                        
                        <div class="row" style="margin-top:15%;">
                            <div class="col-lg-12">
                                <div class="row" style="height:auto">
                                    <h2 class="col-sm-6" style="text-align: left;color: #FFD000;font-family: 'Raleway', sans-serif;font-weight: 200;font-size: 2.5em;">
                                        Need To Lease/Hire a<br> 
                                        <span class="txt-rotate" data-period="2000" data-rotate='[ "Car?", "Bus?", "Taxi?", "Heavy Duty Machinery?"]'></span></h2>
                                </div>
                                <div class="row" style="">
                                    <div class="col-sm-6" style="text-align:left;padding-left: 60px;padding-top: 20px;">
                                        <a href="#team-area" class="btn btn-warning">Hire Vehicle</a>
                                        <a href="#choose-car" class="btn btn-primary">Lease Vehicle</a>
                                    </div>
                                </div>
                            </div>
                        </div>
<script>
var TxtRotate = function(el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000;
  this.txt = '';
  this.tick();
  this.isDeleting = false;
};

TxtRotate.prototype.tick = function() {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

  var that = this;
  var delta = 300 - Math.random() * 100;

  if (this.isDeleting) { delta /= 2; }

  if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
  }

  setTimeout(function() {
    that.tick();
  }, delta);
};

window.onload = function() {
  var elements = document.getElementsByClassName('txt-rotate');
  for (var i=0; i<elements.length; i++) {
    var toRotate = elements[i].getAttribute('data-rotate');
    var period = elements[i].getAttribute('data-period');
    if (toRotate) {
      new TxtRotate(elements[i], JSON.parse(toRotate), period);
    }
  }
  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
  document.body.appendChild(css);
};    
</script>

                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== SlideshowBg Area End ==-->
    <section id="service-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>What We Do</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <!-- Single Service Start -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="media">
                            <div class="service-icon">
                                <span></span>
                                <img src="assets/img/services/service-icon-1.png" alt="JSOFT">
                            </div>
                            <div class="media-body">
                                <h4>RENTAL CAR</h4>
                                <p>You can be a celebrity for a full night and half days with a nice one of our amazing Limousines, Hummers.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Service Start -->

                <!-- Single Service Start -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="media">
                            <div class="service-icon">
                                <span></span>
                                <img src="assets/img/services/service-icon-2.png" alt="JSOFT">
                            </div>
                            <div class="media-body">
                                <h4>TRAVELING MADE EASY</h4>
                                <p>You can be a celebrity for a full night and half days with a nice one of our amazing Limousines, Hummers.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Service Start -->

                <!-- Single Service Start -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="media">
                            <div class="service-icon">
                                <span></span>
                                <img src="assets/img/services/service-icon-3.png" alt="JSOFT">
                            </div>
                            <div class="media-body">
                                <h4>TAXI SERVICE</h4>
                                <p>You can be a celebrity for a full night and half days with a nice one of our amazing Limousines, Hummers.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Service Start -->

                <!-- Single Service Start -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="media">
                            <div class="service-icon">
                                <span></span>
                                <img src="assets/img/services/service-icon-4.png" alt="JSOFT">
                            </div>
                            <div class="media-body">
                                <h4>TOWING SERVICES</h4>
                                <p>You can be a celebrity for a full night and half days with a nice one of our amazing Limousines, Hummers.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Service Start -->

                <!-- Single Service Start -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="media">
                            <div class="service-icon">
                                <span></span>
                                <img src="assets/img/services/service-icon-5.png" alt="JSOFT">
                            </div>
                            <div class="media-body">
                                <h4>OTHER SERVICE</h4>
                                <p>You can be a celebrity for a full night and half days with a nice one of our amazing Limousines, Hummers.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Service Start -->

                <!-- Single Service Start -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="media">
                            <div class="service-icon">
                                <span></span>
                                <img src="assets/img/services/service-icon-6.png" alt="JSOFT">
                            </div>
                            <div class="media-body">
                                <h4>CALL FOR A DRIVER</h4>
                                <p>You can be a celebrity for a full night and half days with a nice one of our amazing Limousines, Hummers.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Service Start -->
            </div>
            
            
            
            
            <div class="row">
                <!-- Single Service Start -->
                <div class="col-lg-6 col-md-6">
                    <img src="assets/img/car hire.jpg" alt="" style="height:350px;width:90%;margin:10px;"/>
                    <h4>RENTAL CAR</h4>
                    <p>You can be a celebrity for a full night and half days with a nice one of our amazing Limousines, Hummers.</p>
                </div>
                <!-- Single Service Start -->

                <!-- Single Service Start -->
                <div class="col-lg-6 col-md-6">
                    <img src="assets/img/local taxi.jpg" alt="" style="height:350px;width:90%;margin:10px;"/>
                                <h4>TRAVELING MADE EASY</h4>
                                <p>You can be a celebrity for a full night and half days with a nice one of our amazing Limousines, Hummers.</p>

                </div>
                <!-- Single Service Start -->

                <!-- Single Service Start -->
                <div class="col-lg-6 col-md-6">
                    <img src="assets/img/bus hire.jpg" alt="" style="height:350px;width:90%;margin:10px;"/>
                                <h4>TAXI SERVICE</h4>
                                <p>You can be a celebrity for a full night and half days with a nice one of our amazing Limousines, Hummers.</p>

                </div>
                <!-- Single Service Start -->

                <!-- Single Service Start -->
                <div class="col-lg-6 col-md-6">
                    <img src="assets/img/heavy duty.jpg" alt="" style="height:350px;width:90%;margin:10px;"/>
                                <h4>TOWING SERVICES</h4>
                                <p>You can be a celebrity for a full night and half days with a nice one of our amazing Limousines, Hummers.</p>

                </div>
                <!-- Single Service Start -->

                <!-- Single Service Start -->

                <!-- Single Service Start -->

                <!-- Single Service Start -->
                <!-- Single Service Start -->
            </div>
            
            
            
            
            
            
        </div>
    </section>
    <!--== Services Area End ==-->
    <!--== About Us Area Start ==-->
    <section id="about-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>About us</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <!-- About Content Start -->
                <div class="col-lg-6">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="about-content">
                                <p>Lorem simply dummy is a texted of the printing costed and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About Content End -->

                <!-- About Video Start -->
                <div class="col-lg-6">
                    <div class="about-image">
                        <img src="assets/img/home-2-about.jpg" alt="JSOFT">
                    </div>
                </div>
                <!-- About Video End -->
            </div>

            <!-- About Fretutes Start -->
            <div class="about-feature-area">
                <div class="row">
                    <!-- Single Fretutes Start -->
                    <div class="col-lg-4">
                        <div class="about-feature-item active">
                            <i class="fa fa-clock-o"></i>
                            <h3>24/7 SERVICE</h3>
                            <p>Loremed ipsumed is a compnayes odsoyel dolor sit amet, consectetur adipisicing elit. Nesciunted all of.</p>
                        </div>
                    </div>
                    <!-- Single Fretutes End -->

                    <!-- Single Fretutes Start -->
                    <div class="col-lg-4">
                        <div class="about-feature-item">
                            <i class="fa fa-phone"></i>
                            <h3>ACTIVE CUSTOMER CARE SERVICE</h3>
                            <p>Loremed ipsumed is a compnayes odsoyel dolor sit amet, consectetur adipisicing elit. Nesciunted all of.</p>
                        </div>
                    </div>
                    <!-- Single Fretutes End -->

                    <!-- Single Fretutes Start -->
                    <div class="col-lg-4">
                        <div class="about-feature-item">
                            <i class="fa fa-car"></i>
                            <h3>TRANSPORT WITH EASE</h3>
                            <p>Loremed ipsumed is a compnayes odsoyel dolor sit amet, consectetur adipisicing elit. Nesciunted all of.</p>
                        </div>
                    </div>
                    <!-- Single Fretutes End -->
                </div>
            </div>
            <!-- About Fretutes End -->
        </div>
    </section>
    <!--== About Us Area End ==-->



    <!--== Services Area Start ==-->
    <section id="service-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Our Services</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

			<!-- Service Content Start -->
			<div class="row">
				<div class="col-lg-11 m-auto text-center">
					<div class="service-container-wrap">
						<!-- Single Service Start -->
						<div class="service-item">
							<i class="fa fa-taxi"></i>
							<h3>RENTAL CAR</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.</p>
						</div>
						<!-- Single Service End -->

						<!-- Single Service Start -->
						<div class="service-item">
							<i class="fa fa-cog"></i>
							<h3>CAR LEASING</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.</p>
						</div>
						<!-- Single Service End -->

						<!-- Single Service Start -->
						<div class="service-item">
							<i class="fa fa-map-marker"></i>
							<h3>TAXI SERVICE</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.</p>
						</div>
						<!-- Single Service End -->

						<!-- Single Service Start -->
						<div class="service-item">
							<i class="fa fa-life-ring"></i>
							<h3>BUS HIRE</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.</p>
						</div>
						<!-- Single Service End -->

						<!-- Single Service Start -->
						<div class="service-item">
							<i class="fa fa-bath"></i>
							<h3>HEAVY DUTY MACHINE HIRE</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.</p>
						</div>
						<!-- Single Service End -->

						<!-- Single Service Start -->
						<div class="service-item">
							<i class="fa fa-phone"></i>
							<h3>CALL FOR A DRIVER</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.</p>
						</div>
						<!-- Single Service End -->
					</div>
				</div>
			</div>
			<!-- Service Content End -->
        </div>
    </section>
    <!--== Services Area End ==-->

    <!--== Fun Fact Area Start ==-->
    <section id="funfact-area" class="overlay section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-11 col-md-12 m-auto">
                    <div class="funfact-content-wrap">
                        <div class="row">
                            <!-- Single FunFact Start -->
                            <div class="col-lg-4 col-md-6">
                                <div class="single-funfact">
                                    <div class="funfact-icon">
                                        <i class="fa fa-smile-o"></i>
                                    </div>
                                    <div class="funfact-content">
                                        <p><span class="counter">550</span>+</p>
                                        <h4>HAPPY CLIENTS</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Single FunFact End -->

                            <!-- Single FunFact Start -->
                            <div class="col-lg-4 col-md-6">
                                <div class="single-funfact">
                                    <div class="funfact-icon">
                                        <i class="fa fa-car"></i>
                                    </div>
                                    <div class="funfact-content">
                                        <p><span class="counter">250</span>+</p>
                                        <h4>CARS FOR HIRE</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Single FunFact End -->

                            <!-- Single FunFact Start -->
                            <div class="col-lg-4 col-md-6">
                                <div class="single-funfact">
                                    <div class="funfact-icon">
                                        <i class="fa fa-bank"></i>
                                    </div>
                                    <div class="funfact-content">
                                        <p><span class="counter">50</span>+</p>
                                        <h4>office in cities</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Single FunFact End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Fun Fact Area End ==-->

    <!--== Choose Car Area Start ==-->
    <section id="choose-car" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Lease your Car/Vehicle</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Open an account with us, to lease your vehicle</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>            

        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                
                    <div class="row">
                        <div class="col-sm-12">
                            <span class="fa fa-user-circle" style="font-size:3em;display:block;text-align:center"></span>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-sm-8" id="msg"></div>
                    </div>                

                    <div class="row">
                        <div class="col-sm-12">
                            <input type="text" placeholder="Email" class="form-control" style="background:white;" id="reg_email">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <input type="text" placeholder="Username" class="form-control" style="background:white;" id="reg_usern">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <input type="password" placeholder="Password" class="form-control" id="reg_pass">
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-sm-12">
                            <button type="button" onclick="validate()" class="btn btn-default" style="width: 50%;">SIGN UP</button>
                        </div>
                    </div> 

                    <div class="row">
                        <div class="col-sm-12" style="text-align:center;margin:20px 0px">
                            <span class="title-line">OR</span>
                        </div>
                    </div>             


                    <div class="row" style="border-radius:5px;border:none;margin:20px 0%;width:100%;padding:4px;background:#3A63BE;color:#fff">
                        <div class="col-sm-2">
                            <span class="fa fa-facebook" style="font-size:24px;line-height: 30px;"></span> 
                        </div>
                        <div class="col-sm-8">
                            <button type="button" class="btn btn-default" style="font-weight:bold;color:#fff;background:#3A63BE;border:none;">CONTINUE WITH FACEBOOK</button>
                        </div>
                    </div>

                    <div class="row" style="border-radius:5px;border:none;margin:20px 0%;width:100%;padding:4px;background:#C94130;color:#fff">
                        <div class="col-sm-2">
                            <span class="fa fa-google-plus" style="font-size:24px;line-height: 30px;"></span> 
                        </div>
                        <div class="col-sm-8">
                            <button type="button" class="btn btn-default" style="font-weight:bold;color:#fff;background:#C94130;border:none;">CONTINUE WITH GOOGLE</button>
                        </div>
                    </div>
                

              
            </div>
        </div>
            
        </div>
    </section>
    <!--== Choose Car Area End ==-->

    <!--== Pricing Area Start ==-->
    <section id="pricing-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Leasing Your Vehicle</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <!-- Pricing Table Conatent Start -->
            <div class="row">
                <!-- Single Pricing Table -->
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-pricing-table" style="border-radius: 20px">
                        <h3 class="num">1</h3>
                        <h5 style="margin:10px 0px;">SIGN UP</h5>
                        <p>You sign up with your email,username and password. Or sign up using facebook or google</p>
                    </div>
                </div>
                <!-- Single Pricing Table -->

                <!-- Single Pricing Table -->
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-pricing-table"  style="border-radius: 20px">
                        <h3 class="num">2</h3>
                        <h5 style="margin:10px 0px;">LOGIN</h5>
                        <p>Login Using Facebook or Google. You can choose to supply your email and password to login</p>
                    </div>
                </div>
                <!-- Single Pricing Table -->

                <!-- Single Pricing Table -->
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-pricing-table" style="border-radius: 20px">
                        <h3 class="num">3</h3>
                        <h5 style="margin:10px 0px;">FINISH REGISTRATION</h5>
                        <p>Supply your personal and vehicle details. Upload vehicle papers, drivers license and passport.</p>
                    </div>
                </div>
                <!-- Single Pricing Table -->
            </div>
            <!-- Pricing Table Conatent End -->
        </div>
    </section>
    <!--== Pricing Area End ==-->

    <!--== Team Area Start ==-->
    <section id="team-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>hire vehicle</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p id="instruct">Please Select Your State.</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4 text-center">
                    <select id="state">
                        <option selected disabled>--Select State--</option>
                            <option disabled>	Abia State	</option>
                            <option disabled>	Adamawa State	</option>
                            <option disabled>	Akwa Ibom State	</option>
                            <option>	Anambra State	</option>
                            <option disabled>	Bauchi State	</option>
                            <option disabled>	Bayelsa State	</option>
                            <option disabled>	Benue State	</option>
                            <option disabled>	Borno State	</option>
                            <option disabled>	Cross River State	</option>
                            <option disabled>	Delta State	</option>
                            <option disabled>	Ebonyi State	</option>
                            <option disabled>	Edo State	</option>
                            <option disabled>	Ekiti State	</option>
                            <option disabled>	Enugu State	</option>
                            <option disabled>	Gombe State	</option>
                            <option disabled>	Imo State	</option>
                            <option disabled>	Jigawa State	</option>
                            <option disabled>	Kaduna State	</option>
                            <option disabled>	Kano State	</option>
                            <option disabled>	Katsina State	</option>
                            <option disabled>	Kebbi State	</option>
                            <option disabled>	Kogi State	</option>
                            <option disabled>	Kwara State	</option>
                            <option disabled>	Lagos State	</option>
                            <option disabled>	Nasarawa State	</option>
                            <option disabled>	Niger State	</option>
                            <option disabled>	Ogun State	</option>
                            <option disabled>	Ondo State	</option>
                            <option disabled>	Osun State	</option>
                            <option disabled>	Oyo State	</option>
                            <option disabled>	Plateau State	</option>
                            <option disabled>	Rivers State	</option>
                            <option disabled>	Sokoto State	</option>
                            <option disabled>	Taraba State	</option>
                            <option disabled>	Yobe State	</option>
                            <option disabled>	Zamfara State	</option>
                            <option disabled>	FCT Abuja	</option>
                    </select>
                </div>
                
                <div class="col-lg-4"></div>
            </div>
<script>
    arr=[];
    x=0
    state =document.getElementById('state');
    state.addEventListener('change',function(){
        sel =state.options[state.selectedIndex].value;
        sel=sel.trim();
        switch(sel){
            case "Anambra State":
                document.getElementById('anam').style.display="block";
                document.getElementById('instruct').innerHTML="Please Call the Numbers to Order For Vehicle";
                break
            default:
                
                
        }
    });
    </script>            
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <ul id="anam" class="list-group" style="margin-top:10px;display:none;">
                        <li class="list-group-item"><span class="fa fa-phone" style="color: #FFD000;font-weight: bold;"></span> 08032454345</li>
                        <li  class="list-group-item"><span class="fa fa-phone" style="color: #FFD000;font-weight: bold;"></span> 08045676543</li>
                    </ul>
                </div>
                <div class="col-lg-4"></div>
            </div>

        </div>
    </section>
    <!--== Team Area End ==-->



    <!--== Articles Area Start ==-->
    <section id="tips-article-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Testimonials</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>-->
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <!-- Articles Content Wrap Start -->
            <div class="row">
                <!-- Single Articles Start -->
                <div class="col-lg-12">
                    <article class="single-article">
                        <div class="row">
                            <!-- Articles Thumbnail Start -->
                            <div class="col-lg-5">
                                <div class="article-thumb">
                                    <img src="assets/img/article/arti-thumb-1.jpg" alt="JSOFT">
                                </div>
                            </div>
                            <!-- Articles Thumbnail End -->

                        </div>
                    </article>
                </div>
                <!-- Single Articles End -->

             </div>
            <!-- Articles Content Wrap End -->
        </div>
    </section>
    <!--== Articles Area End ==-->

    <!--== Footer Area Start ==-->
    <section id="footer-area">
        <!-- Footer Widget Start -->
        <div class="footer-widget-area">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h2>Review</h2>
                            <div class="widget-body">
                                <!--<img src="assets/img/logo.png" alt="JSOFT">-->
<!--                                <p>Lorem ipsum dolored is a sit ameted consectetur adipisicing elit. Nobis magni assumenda distinctio debitis, eum fuga fugiat error reiciendis.</p>

                                <div class="newsletter-area">
                                    <form action="index.html">
                                        <input type="email" placeholder="Subscribe Our Newsletter">
                                        <button type="submit" class="newsletter-btn"><i class="fa fa-send"></i></button>
                                    </form>
                                </div>-->

                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->

                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h2>Follow us</h2>
                            <div class="widget-body">
                                <div class="social-icon">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-whatsapp"></i></a>
                                    <a href="#"><i class="fa fa-telegram"></i></a>
                                </div>                                
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->

                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h2>get touch</h2>
                            <div class="widget-body">
                                <p>Lorem ipsum doloer sited amet, consectetur adipisicing elit. nibh auguea, scelerisque sed</p>

                                <ul class="get-touch">
                                    <li><i class="fa fa-map-marker"></i> Head Office 24 Awka Road, Anambra</li>
                                    <li><i class="fa fa-mobile"></i> +234 800 345 678</li>
                                    <li><i class="fa fa-envelope"></i> luxxyride@support.com</li>
                                </ul>
                                <a href="https://goo.gl/maps/b5mt45MCaPB2" class="map-show" target="_blank">Show Location</a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->
                </div>
            </div>
        </div>
        <!-- Footer Widget End -->

        <!-- Footer Bottom Start -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
    </section>
    <!--== Footer Area End ==-->

    <!--== Scroll Top Area Start ==-->
    <div class="scroll-top">
        <span class="fa fa-arrow-circle-up" style="font-size:60px;color: #ffd000;"></span>
    </div>
    

    
    
    
    
    
        <div class="container-fluid" id="modal">
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <!--<form method="post" onsubmit="return post()">-->
                    <div id="form">
                         <span id="close" class="fa fa-times" onclick="document.getElementById('modal').style.display='none'"></span>
                         
                    <div class="row">
                        <div class="col-lg-12">
                            <span class="fa fa-user-circle" style="font-size:3em;display:block;text-align:center"></span>
                        </div>
                    </div> 

                    <div class="row">
                        <div class="col-lg-12">
                            <input type="text" placeholder="Email" class="form-control" style="background:white;" id="email">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <input type="password" placeholder="Password" class="form-control" id="password">
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-lg-12">
                            <button type="button" onclick="post_data()" class="btn btn-default" style="width: 50%;background:#000;color:#fff;" onclick="location.assign('lease/dashboard.php')">LOGIN</button>
                        </div>
                    </div>             


                    <div class="row" style="border-radius:5px;border:none;margin:20px 0%;width:100%;padding:4px;background:#3A63BE;color:#fff">
                        <div class="col-lg-2">
                            <span class="fa fa-facebook" style="font-size:24px;line-height: 30px;"></span> 
                        </div>
                        <div class="col-lg-8">
                            <button type="button" class="btn btn-default" style="font-weight:bold;color:#fff;background:#3A63BE;border:none;">CONTINUE WITH FACEBOOK</button>
                        </div>
                    </div>

                    <div class="row" style="border-radius:5px;border:none;margin:20px 0%;width:100%;padding:4px;background:#C94130;color:#fff">
                        <div class="col-lg-2">
                            <span class="fa fa-google-plus" style="font-size:24px;line-height: 30px;"></span> 
                        </div>
                        <div class="col-lg-8">
                            <button type="button" class="btn btn-default" style="font-weight:bold;color:#fff;background:#C94130;border:none;">CONTINUE WITH GOOGLE</button>
                        </div>
                    </div>
                         
                    <div class="row">
                        <div class="col-sm-12" id="status">
                        </div>
                    </div>

                        
                    </div>    
                    <!--</form>-->
                </div>
                <div class="col-sm-4">
                   
                </div>
            </div>            
        </div>        
    
    

    <!--== Scroll Top Area End ==-->

    <!--=======================Javascript============================-->
    <!--=== Jquery Min Js ===-->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <!--=== Jquery Migrate Min Js ===-->
    <script src="assets/js/jquery-migrate.min.js"></script>
    <!--=== Popper Min Js ===-->
    <script src="assets/js/popper.min.js"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--=== Gijgo Min Js ===-->
    <script src="assets/js/plugins/gijgo.js"></script>
    <!--=== Vegas Min Js ===-->
    <script src="assets/js/plugins/vegas.min.js"></script>
    <!--=== Isotope Min Js ===-->
    <script src="assets/js/plugins/isotope.min.js"></script>
    <!--=== Owl Caousel Min Js ===-->
    <script src="assets/js/plugins/owl.carousel.min.js"></script>
    <!--=== Waypoint Min Js ===-->
    <script src="assets/js/plugins/waypoints.min.js"></script>
    <!--=== CounTotop Min Js ===-->
    <script src="assets/js/plugins/counterup.min.js"></script>
    <!--=== YtPlayer Min Js ===-->
    <script src="assets/js/plugins/mb.YTPlayer.js"></script>
    <!--=== Magnific Popup Min Js ===-->
    <script src="assets/js/plugins/magnific-popup.min.js"></script>
    <!--=== Slicknav Min Js ===-->
    <script src="assets/js/plugins/slicknav.min.js"></script>

    <!--=== Mian Js ===-->
    <script src="assets/js/main.js"></script>

</body>

</html>

<script>
    function validate(){
        var email= document.getElementById('reg_email');
        var psw= document.getElementById('reg_pass');
        var usern= document.getElementById('reg_usern');
        
        if(usern.value==""||email.value==""||psw.value==""){
            document.getElementById('msg').innerHTML="<div class='alert alert-danger'>Please fill in fields</div>";
            result="false";
        }
        else{
          result="true";  
        }
        
        if(result=="true"){
            usernValue = usern.value.replace("&","^");
            emailValue = email.value.replace("&","^");
            pswValue = psw.value.replace("&","^");
            register(usernValue,emailValue,pswValue);
        }
    
    }            
    function register(usern,email,psw){
                    var xmlhttp;
                    if(window.XMLHttpRequest){
                                    xmlhttp = new XMLHttpRequest();// object for updates

                            }
                    else{
                                    xmlhttp = new ActiveObject("Microsoft.XMLHTTP");
                            }
	xmlhttp.onreadystatechange = function(){
                        if(xmlhttp.readyState==4 && xmlhttp.status==200){
                           
                                document.getElementById("msg").innerHTML = xmlhttp.responseText;
                            

                        }//end if		
		}

        data="email="+email+"&psw="+psw+"&username="+usern;
        xmlhttp.open('POST','register.php',true);// open the file
        xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
        xmlhttp.send(data); //send the parameters

			

    }
    
    function post_data(){
                    var xmlhttp;
                    if(window.XMLHttpRequest){
                                    xmlhttp = new XMLHttpRequest();// object for updates

                            }
                    else{
                                    xmlhttp = new ActiveObject("Microsoft.XMLHTTP");
                            }
	xmlhttp.onreadystatechange = function(){
                        if(xmlhttp.readyState==4 && xmlhttp.status==200){
                            if(xmlhttp.responseText=='success'){
                                location.href="lease/dashboard.php"
                            }
                            else{
                                document.getElementById("status").innerHTML = xmlhttp.responseText;
                                
                            }
                            

                        }//end if		
		}
        var email= document.getElementById('email');
        var psw= document.getElementById('password');


            email = email.value.replace("&","^");
            psw = psw.value.replace("&","^");
            
            
        data="email="+email+"&psw="+psw;
        xmlhttp.open('POST','login.php',true);// open the file
        xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
        xmlhttp.send(data); //send the parameters

			

    }    
</script>
