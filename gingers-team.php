<!doctype html>
<html class="no-js" lang="">
    <head>
		  <?php
  		  $pagetitle = "Ginger's | Meet The Team";
  		  include('sections/header-info.php')
		  ?>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->

	<!-- header start -->
	<?php include('sections/nav.php')?>
	<!-- header end -->
	<!-- breadcrumb-area start -->
	<div class="team-pages-area ">
		<div class="container">
			<div class="row">
				<div class="col-md-12 breadcrumb-padding pages-p">
<!--
					<div class="breadcrumb-title">
						<h1>Meet The Team</h1>
					</div>
-->
				</div>
			</div>
		</div>
	</div>
	<!-- breadcrumb-area end -->

  <?php
    $hs = "Hair Stylist";
    $nt = "Nail Technician";
  ?>

	<!-- team-one-area start-->
	<div class="team-one-area team-two-bottom-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="team-heading">
						<h2>Meet The Team</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<?php include('sections/team/ginger-moon.php')?>
				<?php include('sections/team/shelly-smith.php')?>
				<?php include('sections/team/andrea-holt.php')?>
			</div>

			<div class="row">
				<?php include('sections/team/tony-sims.php')?>
				<?php include('sections/team/tricia-walton.php')?>
				<?php include('sections/team/beverly-hood.php')?>
			</div>
			<div class="row">
				<?php include('sections/team/melissa-stuts.php')?>
			</div>
		</div>
	</div>
	<!-- team-one-area end-->

	<!-- footer start -->
	<?php include('sections/footer.php')?>
	<!-- footer end -->

		<!-- JS -->

		<!-- jquery js -->
        <script src="js/vendor/jquery-1.11.2.min.js"></script>

		<!-- bootstrap js -->
        <script src="js/bootstrap.min.js"></script>

		<!-- owl.carousel.min js -->
        <script src="js/owl.carousel.min.js"></script>

		<!-- meanmenu js -->
        <script src="js/jquery.meanmenu.js"></script>

		<!-- jquery.countdown js -->
        <script src="js/jquery.countdown.min.js"></script>

		<!-- parallax js -->
        <script src="js/parallax.js"></script>

		<!-- jquery.collapse js -->
        <script src="js/jquery.collapse.js"></script>

		<!-- jquery.easing js -->
        <script src="js/jquery.easing.1.3.min.js"></script>

		<!-- jquery.scrollUp js -->
        <script src="js/jquery.scrollUp.min.js"></script>

		<!-- knob circle js -->
        <script src="js/jquery.knob.js"></script>

		<!-- jquery.appear js -->
		<script src="js/jquery.appear.js"></script>

		<!-- jquery.mixitup js -->
		<script src="js/jquery.mixitup.min.js"></script>

		<!-- fancybox js -->
		<script src="js/fancybox/jquery.fancybox.pack.js"></script>

		<!-- jquery.counterup js -->
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/waypoints.min.js"></script>

		<!-- rs-plugin js -->
		<script type="text/javascript" src="lib/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="lib/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
		<script src="lib/rs-plugin/rs.home.js"></script>

		<!-- wow js -->
        <script src="js/wow.js"></script>
		<script>
			new WOW().init();
		</script>

		<!-- plugins js -->
        <script src="js/plugins.js"></script>

		<!-- main js -->
        <script src="js/main.js"></script>

    </body>
</html>
