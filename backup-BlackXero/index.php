<html>
<head>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<title>Home | Mobiles</title>
<link rel="icon" type="image/jpg" href="images/icon.jpg" />

	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link rel="stylesheet" href="/css/w3.css">
		

	</head>
<body>
<div class="top">
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="+918769339951"><i class="fa fa-phone"></i> +918769339951</a></li>
								<li><a href="mobiles.com"><i class="fa fa-envelope"></i> Tripathiraghu@mobiles.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="http://www.facebook.com/tripathiraghu"><i class="fa fa-facebook"></i></a></li>
								<li><a href="http://www.twitter.com/tripathi_raghu_"><i class="fa fa-twitter"></i></a></li>
								<li><a href="http://wwww.instagram.com/raghavtripathi70/"><i class="fa fa-instagram"></i></a></li>
								<li><a href="https://www.youtube.com/channel/UCv3Hg6jb18wOxIIftbrSkiQ"><i class="fa fa-youtube"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		</header>
<div id="header">			
	<a href="index.html">	<img src="images/head banner.png" align="left"></a>
		<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="account.html"><i class="fa fa-user"></i> Account</a></li>
								<li><a href="wishlist.htm"><i class="fa fa-star"></i> Wishlist</a></li>
								<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li><a href="login.html" class="inactive"><i class="fa fa-lock"></i> Login</a></li>
							</ul>
						</div>
		</div>
<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav navbar-collapse collapse" style="height: 1px;">
								<li><a href="index.html" class="active">Home</a></li>
								<li class="dropdown"><a href="shop.html">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="Under Rs.10,000.html">Under Rs.10,000 </a></li>
										<li><a href="Under Rs.20,000.html">Under Rs.20,000</a></li> 
										<li><a href="Under Rs.35,000.html">Under Rs.35,000</a></li> 
										<li><a href="Under Rs.50,000.html">Under Rs.50,000</a></li> 
										<li><a href="Above Rs.50,000.html">Above Rs.50,000</a></li> 
                                    </ul>
                                </li> 
								
								<li class="dropdown"><a href="Contact US.html">Contact Us<i class="fa fa-angle-down"></i></a>
								  <ul role="menu" class="sub-menu">
                                        <li><a href="call us.html">call us </a></li>
										<li><a href="mail us.html">mail us</a></li> 
										<li><a href="give feedback.html">Give Feedback</a></li> 
                                    </ul>
                                </li> 
							</ul>
							
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
						
							<input type="text" placeholder="Search">
						</div>
					</div>
				</div>
			</div>
		</div>		
</div>
</div>
<p>
</p>
<!--slider-->
<div class="container">
<div class="row">
	<div class="col-md-12">
<div class="slideshow-container">

<div class="mySlides fade">

  <div class="numbertext"></div>
  <a href="ad1.html">
  	<img src="images\deals banner\micromax.JPG" class="img img-responsive"></a>
  <div class="text"></div>

</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
 <a href="ad2.html"> <img src="images\deals banner\oneplus3t.jpg" class="img img-responsive"></a>
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
<a href="ad3.html">  <img src="images\deals banner\iphone 8.jpg" class="img img-responsive"></a>
  <div class="text"></div>
</div>
</div>
</div>
</div>
</div>



<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<!-- script for slider-->
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 1500); 
}
</script>
<!--end of slider And Script -->

<!--brand logo Start-->

<a href="apple.html"><img src="images\company\apple.jpg" style=" margin-left:20px;     box-shadow: 6px 6px 19px 0px black;"></a>
<a href="oneplus.html"><img src="images\company\oneplus.jpg" style=" margin-left:20px;   box-shadow: 6px 6px 19px 0px black;"></a>
<a href="samsung.html"><img src="images\company\samsung.jpg" style=" margin-left:20px;    box-shadow: 6px 6px 19px 0px black;"></a>
<a href="vivo.html"><img src="images\company\vivo.jpg" style=" margin-left:20px;    box-shadow: 6px 6px 19px 0px black;"></a>
<a href="mi.html"><img src="images\company\mi.jpg" style=" margin-left:20px;   box-shadow: 6px 6px 19px 0px black;"></a>
<a href="nokia.html"><img src="images\company\nokia.jpg" style=" margin-left:20px;  margin-top:10px;     box-shadow: 6px 6px 19px 0px black;" ></a>
<a href="oppo.html"><img src="images\company\oppo.jpg" style=" margin-left:20px; margin-top:10px;   box-shadow: 6px 6px 19px 0px black;"></a>
<a href="lenova.html"><img src="images\company\lenovo.jpg" style=" margin-left:20px; margin-top:10px;      box-shadow: 6px 6px 19px 0px black;"></a>
<a href="moto.html"><img src="images\company\moto.jpg" style=" margin-left:20px; margin-top:10px;     box-shadow: 6px 6px 19px 0px black;"></a>
<a href="micromax.html"><img src="images\company\micromax.jpg" style=" margin-left:20px; margin-top:10px;    box-shadow: 6px 6px 19px 0px black;"></a>
<!--brands logo end-->

<!--price range start-->
<!--under-->

<br/>
<br/>
<!--footer start -->
<a id="scrollUp" href="#top" style="position: fixed; z-index: 2147483647; display: block;"><i class="fa fa-angle-up"></i></a>
<footer id="footer">
<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="online help.html">Online Help</a></li>
								<li><a href="Contact Us.html">Contact Us</a></li>
								<li><a href="Order Status.html">Order Status</a></li>
								<li><a href="Change Location.html">Change Location</a></li>
								<li><a href="FAQ’s.html">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quick Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="samsung.html">Samsung</a></li>
								<li><a href="apple.html">Apple</a></li>
								<li><a href="nokia.html">Nokia</a></li>
								<li><a href="vivo.html">Vivo</a></li>
								<li><a href="oppo.html">Oppo</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="terms of use.html">Terms of Use</a></li>
								<li><a href="privect policy.html">Privecy Policy</a></li>
								<li><a href="refund policy.html">Refund Policy</a></li>
								<li><a href="billing system.html">Billing System</a></li>
								<li><a href="ticket system.html">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Mobiles</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="Company information.html">Company Information</a></li>
								<li><a href="careers.html">Careers</a></li>
								<li><a href="storel ocation.html">Store Location</a></li>
								<li><a href="affillate program.html">Affillate Program</a></li>
								<li><a href="Copyright.html">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>Mail Us</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address">
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br>our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>

<a href="copyright,html"><h5 align="right" style="margin-right:90px; font-size:20px;">@copyright by Tripathi raghu</h5></a>
<br/>
</footer>
		<!-- footer end-->
  <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>