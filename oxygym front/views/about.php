<?php
session_start();
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Oxygym+</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
	<!-- FontAwesome -->
  <link rel="stylesheet" href="plugins/fontawesome/font-awesome.min.css">
	<!-- Animation -->
	<link rel="stylesheet" href="plugins/animate.css">
	<!-- Prettyphoto -->
	<link rel="stylesheet" href="plugins/prettyPhoto.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="plugins/owl/owl.carousel.css">
	<link rel="stylesheet" href="plugins/owl/owl.theme.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="plugins/flex-slider/flexslider.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="plugins/cd-hero/cd-hero.css">
	<!-- Style Swicther -->
	<link id="style-switch" href="css/presets/preset3.css" media="screen" rel="stylesheet" type="text/css">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="plugins/html5shiv.js"></script>
      <script src="plugins/respond.min.js"></script>
    <![endif]-->

  <!-- Main Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
  
  <!--Favicon-->
	<link rel="icon" href="img/favicon/favicon-32x32.png" type="image/x-icon" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/favicon/favicon-144x144.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/favicon/favicon-72x72.png">
	<link rel="apple-touch-icon-precomposed" href="img/favicon/favicon-54x54.png">

</head>

<body>

	<!-- Style switcher start -->
	<div class="style-switch-wrapper">
		<div class="style-switch-button">
			<i class="fa fa-sliders"></i>
		</div>
		<h3>Style Options</h3>
		<button id="preset1" class="btn btn-sm btn-primary"></button>
		<button id="preset2" class="btn btn-sm btn-primary"></button>
		<button id="preset3" class="btn btn-sm btn-primary"></button>
		<button id="preset4" class="btn btn-sm btn-primary"></button>
		<button id="preset5" class="btn btn-sm btn-primary"></button>
		<button id="preset6" class="btn btn-sm btn-primary"></button>
		<br/><br/>
		<a class="btn btn-sm btn-primary close-styler float-right">Close X</a>
	</div>
	<!-- Style switcher end -->

	<div class="body-inner">

<!-- Header start -->
<header id="header" class="fixed-top header" role="banner">
	<a class="navbar-brand navbar-bg" href="index.php"><img class="img-fluid float-right" src="images/logo.png" alt="logo"></a>
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-dark">
			<button class="navbar-toggler ml-auto border-0 rounded-0 text-white" type="button" data-toggle="collapse"
				data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fa fa-bars"></span>
			</button>

			<div class="collapse navbar-collapse text-center" id="navigation">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="index.php">Acceuil</a></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="portfolio.php">Nos Produits</a></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="abonnement.php">Abonnement</a></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="coachs.php">Nos Coachs</a></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="cours.php">Nos Cours</a></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="salles.php">Nos Salles</a></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="about.php">A propos</a></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contact.php">Contactez nous</a></a>
					</li>
					<li class="nav-item">
					<?php if(isset ($_SESSION["id"])) { ?>
Welcome <?php echo $_SESSION["name"]; ?>. Click here to <a href="logout.php" tite="Logout">Logout.
<?php
}else {

	?>
	<a class="nav-link" href="login.php">LOGIN</a></a>
	<?php
}
?>
</li>
				</ul>
			</div>
		</nav>
	</div>
</header>
<!--/ Header end -->

<div id="banner-area">
	<img src="images/banner/banner1.jpg" alt="" />
	<div class="parallax-overlay"></div>
	<!-- Subpage title start -->
	<div class="banner-title-content">
		<div class="text-center">
			<h2>A PROPOS</h2>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb justify-content-center">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item text-white" aria-current="page">A PROPOS</li>
				</ol>
			</nav>
		</div>
	</div><!-- Subpage title end -->
</div><!-- Banner area end -->

<!-- Main container start -->
<section id="main-container">
	<div class="container">
		<!-- Company Profile -->
		<!--<div class="row">
			<div class="col-md-12 heading text-center">
				<h2 class="title2">About Our Company
					<span class="title-desc">A Quality Experience Team with 4 years experience</span>
				</h2>
			</div>-->
		</div><!-- Title row end -->

		<div class="row about-wrapper-top">
			<div class="col-md-6 ts-padding about-message">
				<h3>QUI SOMMES NOUS ?</h3>
				<p>La chaîne OXYGYM+ compte 6 clubs dont cinq sont répartis sur le Grand Tunis et le sixième se trouve à Sousse. La chaîne projette d’élargir progressivement son réseau afin que vous trouviez toujours un club à proximité de votre lieu de travail ou de votre domicile.
Quel que soit votre âge, vos objectifs ou votre niveau de pratique, vous trouverez dans nos clubs les moyens d’atteindre votre but et ce, grâce à un encadrement personnalisé et adapté à vos besoins spécifiques</p>
				<!--<p>Curabitur metus felis, venenatis eu ultricies vel, vehicula eu urna. Phasellus eget augue id est fringilla
					feugiat id a tellus. Sed hendrerit quam sed ante euismod posuere element ante."</p>-->
			</div>
			<!--/ About message end -->
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3190.552253554134!2d10.184972214782675!3d36.90105826971639!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12e2cb75e286a46d%3A0xdc3e4f05df2ac39b!2sOxygene%20Plus%20La%20Petite%20Ariana!5e0!3m2!1sfr!2stn!4v1576074880977!5m2!1sfr!2stn" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
			<div class="col-md-6 ts-padding about-img"

 				style="height:374px;/ cover no-repeat;"
			</div>
			<!--/ About image end -->
		</div>
		<!--/ Content row end -->

		<div class="row about-wrapper-bottom">
			<!--<div class="col-md-6 ts-padding about-img"
				style="height:374px;background:url(images/pages/about-2.jpg) 50% 50% / cover no-repeat;">
			</div>-->
			<!--/ About image end -->
			<!--<div class="col-md-6 ts-padding about-message">
				<h3>What We Do</h3>
				<p>"Cras mattis consectetur purus sit amet fermentum. Etiam porta sem malesuada magna mollis euismod. Aenean eu
					leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis.
				</p>
				<ul class="unstyled arrow">
					<li><a href="#">Etiam porta sem malesuada</a></li>
					<li><a href="#">Pellentesque ornare sem lacinia</a></li>
					<li><a href="#">Cras mattis consectetur purus</a></li>
					<li><a href="#">Sed hendrerit quam sed ante</a></li>
				</ul>
			</div>-->
			<!--/ About message end -->
		</div>
		<!--/ Content row end -->
		<!-- Company Profile -->
	</div>
	<!--/ 1st container end -->
	<div class="gap-60"></div>

	<!-- Counter Strat -->
	<div class="ts_counter_bg parallax parallax2">
		<div class="parallax-overlay"></div>
		<div class="container">
			<div class="row wow fadeInLeft text-center">
				<div class="facts col-md-3 col-sm-6">
				<span class="facts-icon"><i class="fa fa-user"></i></span>
				<div class="facts-num">
					<span class="counter">4</span>
				</div>
				<h3>Coachs</h3>
				</div>

				<div class="facts col-md-3 col-sm-6">
				<span class="facts-icon"><i class="fa fa-institution"></i></span>
				<div class="facts-num">
				<span class="counter">3</span>
	</div>
				<h3>salles</h3>
				</div>

				<div class="facts col-md-3 col-sm-6">
				<span class="facts-icon"><i class="fa fa-suitcase"></i></span>
				<div class="facts-num">
					<span class="counter">4</span>
				</div>
				<h3>Produits</h3>
				</div>

				<div class="facts col-md-3 col-sm-6">
				<span class="facts-icon"><i class="fa fa-user"></i></span>
				<div class="facts-num">
					<span class="counter">4</span>
				</div>
				<h3>Clients</h3>
				</div>
				<div class="gap-40"></div>
				<div class="col-12 text-center"><a href="#" class="btn btn-primary solid">See Our Portfolio</a></div>
			</div>
			<!--/ row end -->
		</div>
		<!--/ Container end -->
	</div>
	<!--/ Counter end -->

	<div class="gap-60"></div>

	
</section>
<!--/ Main container end -->

<div class="gap-40"></div>

				


	<!-- Copyright start -->
	<section id="copyright" class="copyright angle">
	  <div class="container">
	    <div class="row">
	      <div class="col-md-12 text-center">
	        <ul class="footer-social unstyled">
	          <li>
	            <a title="Twitter" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-twitter"></i></span>
	            </a>
	            <a title="Facebook" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-facebook"></i></span>
	            </a>
	            <a title="Google+" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-google-plus"></i></span>
	            </a>
	            <a title="linkedin" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-linkedin"></i></span>
	            </a>
	            <a title="Pinterest" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-pinterest"></i></span>
	            </a>
	            <a title="Skype" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-skype"></i></span>
	            </a>
	            <a title="Dribble" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-dribbble"></i></span>
	            </a>
	          </li>
	        </ul>
	      </div>
	    </div>
	    <!--/ Row end -->
	    <div class="row">
	      <div class="col-md-12 text-center">
	        <div class="copyright-info">
	          &copy; Copyright 2019 Themefisher. <span>Designed by <a
	              href="https://themefisher.com">Themefisher.com</a></span>
	        </div>
	      </div>
	    </div>
	    <!--/ Row end -->
	    <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix position-fixed">
	      <button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-double-up"></i></button>
	    </div>
	  </div>
	  <!--/ Container end -->
	</section>
	<!--/ Copyright end -->

</div><!-- Body inner end -->

<!-- jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- Style Switcher -->
<script type="text/javascript" src="plugins/style-switcher.js"></script>
<!-- Owl Carousel -->
<script type="text/javascript" src="plugins/owl/owl.carousel.js"></script>
<!-- PrettyPhoto -->
<script type="text/javascript" src="plugins/jquery.prettyPhoto.js"></script>
<!-- Bxslider -->
<script type="text/javascript" src="plugins/flex-slider/jquery.flexslider.js"></script>
<!-- CD Hero slider -->
<script type="text/javascript" src="plugins/cd-hero/cd-hero.js"></script>
<!-- Isotope -->
<script type="text/javascript" src="plugins/isotope.js"></script>
<script type="text/javascript" src="plugins/ini.isotope.js"></script>
<!-- Wow Animation -->
<script type="text/javascript" src="plugins/wow.min.js"></script>
<!-- Eeasing -->
<script type="text/javascript" src="plugins/jquery.easing.1.3.js"></script>
<!-- Counter -->
<script type="text/javascript" src="plugins/jquery.counterup.min.js"></script>
<!-- Waypoints -->
<script type="text/javascript" src="plugins/waypoints.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="plugins/google-map/gmap.js"></script>

<!-- Main Script -->
<script src="js/script.js"></script>

</body>

</html>