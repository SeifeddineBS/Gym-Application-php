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

<!-- Slider start -->
<section id="home" class="p-0">
	<div id="main-slide" class="cd-hero">
		<ul class="cd-hero-slider">
			<li class="selected">
				<div class="overlay2">
					<img class="" src="images/slider/bg1.jpg" alt="slider">
				</div>
				<div class="cd-full-width">
					<h2>Bienvenue ! </h2>
					<h3>Bienvenue à Oxygym+</h3>
					<a  href="inscription.php"class="btn btn-primary white cd-btn">S'abonner</a>
				
					<a href="about.php" class="btn btn-primary solid cd-btn">Savoir Plus</a>
				</div> <!-- .cd-full-width -->
			</li>
			<li>
				<div class="overlay2">
					<img class="" src="images/slider/bg2.jpg" alt="slider">
				</div>
				<div class="cd-half-width">
					<h2>How Big Can You Dream?</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In consequatur cumque natus!</p>
					<a href="#0" class="cd-btn btn btn-primary solid">Take a Tour</a>
				</div> <!-- .cd-half-width -->

				<div class="cd-half-width cd-img-container">
					<img src="images/slider/bg-thumb1.png" alt="">
				</div> <!-- .cd-half-width.cd-img-container -->
			</li>
			<li>
				<div class="overlay2">
					<img class="" src="images/slider/bg3.jpg" alt="slider">
				</div>
				<div class="cd-half-width cd-img-container img-right">
					<img src="images/slider/bg-thumb2.png" alt="">
				</div> <!-- .cd-half-width.cd-img-container -->
				<div class="cd-half-width">
					<h2>Your Challenge is Our Progress</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In consequatur cumque natus!</p>
					<a href="#0" class="cd-btn btn btn-primary white">Start</a>
					<a href="#0" class="cd-btn btn secondary btn-primary solid">Learn More</a>
				</div> <!-- .cd-half-width -->
			</li>
			<li class="cd-bg-video">
				<div class="cd-full-width">
					<h2>WE ARE HERE TO MAKE IT HAPPEN</h2>
					<h3>We Making Difference To Great Things Possible</h3>

					<a href="#0" class="cd-btn btn btn-primary solid">Learn more</a>
				</div> <!-- .cd-full-width -->

				<div class="cd-bg-video-wrapper" data-video="videos/video">
					<!-- video element will be loaded using jQuery -->
				</div> <!-- .cd-bg-video-wrapper -->
			</li>
		</ul>
		<!--/ cd-hero-slider -->

		<!-- .cd-slider-nav -->

	</div>
	<!--/ Main slider end -->
</section>
<!--/ Slider end -->


<!-- Service box start -->
<section id="service" class="service angle">
	<div class="container">
		<div class="row">
			<div class="col-md-12 heading">
				<span class="title-icon float-left"><i class="fa fa-cogs"></i></span>
				<h2 class="title">Nos Services </h2>
			</div>
		</div><!-- Title row end -->

		<div class="row">
			<div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay=".5s">
				<div class="service-content text-center">
					<span class="service-icon icon-pentagon"><i >1</i></span>
				  <h3>musculation</h3>
					<p>Avec notre materielle de haute qualité vous allez vivre une experience redoutable avec nos coachs</p>
				</div>
			</div>
			<!--/ End first service -->

			<div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay=".8s">
				<div class="service-content text-center">
					<span class="service-icon icon-pentagon"><i >2</i></span>
					<h3>fitness</h3>
					<p>Notre espace vacieux vous permet la bonne pratique des cours de fitness</p>
				</div>
			</div>
			<!--/ End Second service -->

			<div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="1.1s">
				<div class="service-content text-center">
					<span class="service-icon icon-pentagon"><i >3</i></span>
					<h3>dances</h3>
					<p>Notre Salle fournis une varité de cours de dances comme le fameux cours de ZUMBA</p>
				</div>
			</div>
			<!--/ End Third service -->

			<div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="1.4s">
				<div class="service-content text-center">
					<span class="service-icon icon-pentagon"><i >4</i></span>
					<h3>vente produits</h3>
					<p>Vous trouvez dans notre boutique en ligne une varieté de choix de produits consommanle ainsi que vestimentaire</p>
				</div>
			</div>
			<!--/ End 4th service -->
		</div><!-- Content row end -->
	</div>
	<!--/ Container end -->
</section>
<!--/ Service box end -->

<!-- Portfolio start -->

 <?PHP
include "../core/coachC.php";
$coach1C=new CoachC();
$listeCoach=$coach1C->nombrecoach(); ?>
 



<!-- Counter Strat -->
<section class="ts_counter p-0">
	<div class="container-fluid">
		<div class="row facts-wrapper wow fadeInLeft text-center">
			<div class="facts one col-md-3 col-sm-6">
				<span class="facts-icon"><i class="fa fa-user"></i></span>
				<div class="facts-num">
					<span class="counter"><?php
					foreach($listeCoach as $row){
					echo $row['ncoach'];} ?></span>
				</div>
				<h3>Coachs</h3>
			</div>

			<div class="facts two col-md-3 col-sm-6">
				<span class="facts-icon"><i class="fa fa-institution"></i></span>
				<div class="facts-num">
				<span class="counter">3</span>
	</div>
				<h3>salles</h3>
			</div>

			<div class="facts three col-md-3 col-sm-6">
				<span class="facts-icon"><i class="fa fa-suitcase"></i></span>
				<div class="facts-num">
					<span class="counter">4</span>
				</div>
				<h3>Produits</h3>
			</div>

			<div class="facts four col-md-3 col-sm-6">
			<span class="facts-icon"><i class="fa fa-user"></i></span>
				<div class="facts-num">
					<span class="counter">4</span>
				</div>
				<h3>Clients</h3>
			</div>

		</div>
	</div>
	<!--/ Container end -->
</section>
<!--/ Counter end -->

<!-- Feature box start -->
<section id="feature" class="feature">
	<div class="container">
		<div class="row">
			<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
				<span class="feature-icon float-left"><i class="fa fa-heart-o"></i></span>
				<div class="feature-content">
				  <h3>une hygienne impecable</h3>
				</div>
			</div>
			<!--/ End first featurebox -->

			<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
				<span class="feature-icon float-left"><i class="fa fa-codepen"></i></span>
				<div class="feature-content">
				  <h3>Variete de cours</h3>
				</div>
			</div>
			<!--/ End 2nd featurebox -->

			<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
				<span class="feature-icon float-left"><i class="fa fa-film"></i></span>
				<div class="feature-content">
				  <h3>Coachs experimentées</h3>
				</div>
			</div>
			<!--/ End 3rd featurebox -->
		</div><!-- Content row end -->

		<div class="gap-40"></div>

		<div class="row">
			<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
				<span class="feature-icon float-left"><i class="fa fa-newspaper-o"></i></span>
				<div class="feature-content">
				  <h3>Fitness</h3>
				</div>
			</div>
			<!--/ End 1st featurebox -->

			<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
				<span class="feature-icon float-left"><i class="fa fa-desktop"></i></span>
				<div class="feature-content">
				  <h3>Musculations</h3>
				</div>
			</div>
			<!--/ End 2nd featurebox -->

			<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
				<span class="feature-icon float-left"><i class="fa fa-pagelines"></i></span>
				<div class="feature-content">
				  <h3>varieté de materielle</h3>
				</div>
			</div>
			<!--/ End 3rd featurebox -->

		</div><!-- Content row end -->

		<div class="gap-40"></div>

		<div class="row">
			<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
				<span class="feature-icon float-left"><i class="fa fa-recycle"></i></span>
				<div class="feature-content">
				  <h3>Grand reseau de salles</h3>
				</div>
			</div>
			<!--/ End first featurebox -->

			<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
				<span class="feature-icon float-left"><i class="fa fa-diamond"></i></span>
				<div class="feature-content">
				  <h3>espace vacieux</h3>
				</div>
			</div>
			<!--/ End first featurebox -->

			<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
				<span class="feature-icon float-left"><i class="fa fa-whatsapp"></i></span>
				<div class="feature-content">
				  <h3>temps de travail</h3>
					</div>
			</div>
			<!--/ End first featurebox -->
		</div><!-- Content row end -->

	</div>
	<!--/ Container end -->
</section>
<!--/ Feature box end -->


<section id="image-block" class="image-block p-0">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 ts-padding"
				style="height:650px;background:url(images/image-block-bg.jpg) 50% 50% / cover no-repeat;">
			</div>
			<div class="col-md-6 ts-padding img-block-right">
				<div class="img-block-head text-center">
					<h3>Pourquoi notre salle?</h3>
					<p>Offrant un service de qualité et équipée d’appareils à la pointe de la technologie, California Gym s’est donnée pour mission d’inspirer, motiver et encadrer des personnes de tout âge pour les aider à s’entrainer et améliorer leur bien-être. La chaîne fournit à ses adhérents des conditions propices à la pratique du sport et leur offre un environnement convivial où se tissent de vrais liens sociaux autour d’un même centre d’intérêt : Le sport et la santé.


					</p>
				</div>

				<div class="gap-30"></div>

				<div class="image-block-content">
					<span class="feature-icon float-left"><i class="fa fa-bicycle"></i></span>
					<div class="feature-content">
						<h3>VARIETE DE COURS</h3>
					</div>
				</div>
				<!--/ End 1st block -->

				<div class="image-block-content">
					<span class="feature-icon float-left"><i class="fa fa-diamond"></i></span>
					<div class="feature-content">
						<h3>Reservation en ligne</h3>
					</div>
				</div>
				<!--/ End 1st block -->

				<div class="image-block-content">
					<span class="feature-icon float-left"><i class="fa fa-street-view"></i></span>
					<div class="feature-content">
						<h3>Achat en ligne</h3>
					</div>
				</div>
				<!--/ End 1st block -->

			</div>
		</div>
	</div>
</section>
<!--/ Image block end -->

<?PHP
$listeCoach=$coach1C->afficherCoach();

?>
<!-- Team start -->
<section id="main-container">
	<div class="container">
		<div class="row">
			<div class="col-md-12 heading">
				<span class="title-icon classic float-left"><i class="fa fa-users"></i></span>
				<h2 class="title classic">Notre equipe</h2>
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

</section><!--/ Team end -->



<!-- Pricing table start -->
<section id="pricing" class="pricing">
	<div class="container">

		<!-- Pricing table start -->
		<div class="row">
			<div class="col-md-12 heading">
				<span class="title-icon classic float-left"><i class="fa fa-university"></i></span>
				<h2 class="title classic">ABONNEMENTS</h2>
			</div>
		</div><!-- Title row end -->

		<div class="row">
			<!-- plan start -->
			<div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay=".5s">
				<div class="plan text-center">
					<span class="plan-name">MUSCULATION <small>(Par mois)</small></span>
					<p class="plan-price"><sup class="currency">DT</sup><strong>50</strong><sub>.00</sub></p>
					<ul class="list-unstyled">
						<li>Musculation</li>
						<li>Cardio</li>
						<!--<li>100 Domain Hosting</li>
						<li>SSL Shopping Cart</li>
						<li>24/7 Live Support</li>-->
					</ul>
					<a class="btn btn-primary" href="#.">Commander</a>
				</div>
			</div><!-- plan end -->

			<!-- plan start -->
			<div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="1s">
				<div class="plan text-center">
					<span class="plan-name">AEROBIQUE <small>(Par mois)</small></span>
					<p class="plan-price"><sup class="currency">DT</sup><strong>50</strong><sub>.00</sub></p>
					<ul class="list-unstyled">
						<li>Aérobique</li>
						<li>Cardio</li>
						<!--<li>100 Domain Hosting</li>
						<li>SSL Shopping Cart</li>
						<li>24/7 Live Support</li>-->
					</ul>
					<a class="btn btn-primary" href="#.">Commander</a>
				</div>
			</div><!-- plan end -->

			<!-- plan start -->
			<div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="1.4s">
				<div class="plan text-center featured">
					<span class="plan-name">ZUMBA <small>(Par mois)</small></span>
					<p class="plan-price"><sup class="currency">DT</sup><strong>70</strong><sub>.00</sub></p>
					<ul class="list-unstyled">
						<li>Cours Zumba</li>
						<li>Cardio</li>
						<!--<li>100 Domain Hosting</li>
						<li>SSL Shopping Cart</li>
						<li>24/7 Live Support</li>-->
					</ul>
					<a class="btn btn-primary" href="#.">Commander</a>
				</div>
			</div><!-- plan end -->

			<!-- plan start -->
			<div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="1.6s">
				<div class="plan text-center">
					<span class="plan-name">DANCE ORIENTALE <small>(Par mois)</small></span>
					<p class="plan-price"><sup class="currency">DT</sup><strong>85</strong><sub>.00</sub></p>
					<ul class="list-unstyled">
						<li>Cours Dance Orientale</li>
						<li>Cardio</li>
						<!--<li>100 Domain Hosting</li>
						<li>SSL Shopping Cart</li>
						<li>24/7 Live Support</li>-->
					</ul>
					<a class="btn btn-primary" href="#.">Commander</a>
				</div>
			</div><!-- plan end -->
		</div>
		<!--/ Content row end -->
		<div class="gap-60"></div>
		<div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="1.8s">
				<div class="plan text-center">
					<span class="plan-name">SPINNING <small>(Par mois)</small></span>
					<p class="plan-price"><sup class="currency">DT</sup><strong>65</strong><sub>.00</sub></p>
					<ul class="list-unstyled">
						<li>Cours Spinning</li>
						<li>Cardio</li>
						<!--<li>100 Domain Hosting</li>
						<li>SSL Shopping Cart</li>
						<li>24/7 Live Support</li>-->
					</ul>
					<a class="btn btn-primary" href="#.">Commander</a>
				</div>
			</div><!-- plan end -->
		</div>

	<!--/  Container end-->
</section>
<!--/ Pricing table end -->


<!-- Clients start -->
<div style="margin-bottom: 10%"></div>


<!--/ Clients end -->

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