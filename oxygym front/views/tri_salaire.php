<?php
session_start();
?><!DOCTYPE html>
<html lang="zxx">

<head>
<style>
			.myButton {
				display: block;
    margin-left: auto;
    margin-right: auto ;
	box-shadow:inset 0px 1px 0px 0px #ffffff;
	background:linear-gradient(to bottom, #f9f9f9 5%, #f06060 100%);
	background-color:#f9f9f9;
	border-radius:6px;
	border:1px solid #dcdcdc;
	display:inline-block;
	cursor:pointer;
	color:#666666;
	font-family:Arial;
	font-size:24px;
	font-weight:bold;
	padding:13px 86px;
	text-decoration:none;
	text-shadow:0px 1px 0px #ffffff;
}
.myButton:hover {
	background:linear-gradient(to bottom, #f06060 5%, #f9f9f9 100%);
	background-color:#f06060;
}
.myButton:active {
	position:relative;
	top:1px;
}
			</style>
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
  <link href="cours.css" rel="stylesheet">

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
			<h2>Team</h2>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb justify-content-center">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item text-white" aria-current="page">Team</li>
				</ol>
			</nav>
		</div>
	</div><!-- Subpage title end -->
</div><!-- Banner area end -->

<!-- Main container start -->
<?PHP
include "../core/coachC.php";
$coach1C=new CoachC();
$listeCoach=$coach1C->tri_salaire();

?>
<section id="main-container">
	<div class="container">
		<div class="row">
			<div class="col-md-12 heading">
				<span class="title-icon classic float-left"><i class="fa fa-users"></i></span>
				<h2 class="title classic">Tri Salaire</h2>
			</div>
		</div>
		




        
		
		<div class="row text-center">
		<?PHP
		
		
foreach($listeCoach as $row){


	?>
			<div class="col-md-3">
				<div class="team wow slideInLeft">
					<div class="img-hexagon">
						<img src="images/team/<?PHP echo $row['image']; ?>" alt="">
						<span class="img-top"></span>
						<span class="img-bottom"></span>

					</div>
					
					<div class="team-content">
                            <h3><?PHP echo $row['nomprenom']; ?></h3>
                            <p>SPECIALITE:  <?PHP echo $row['specialite']; ?></p>
                            <p>EXPERIENCE:  <?PHP echo $row['experience']; ?>ANS</p>
							<p>AGE:  <?PHP echo $row['age']; ?>ANS</p>
							<p>SALAIRE:  <?PHP echo $row['salaire']; ?>DT</p>


                            
                        </div>
				</div>
			</div>
			<?PHP
}
?>
		
			<!--/ Team 4 end -->
		</div>
		<!--/ Content row end -->


		
	<!--/ container end -->

</section>
<!--/ Main container end -->



	<!-- Footer start -->
	


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