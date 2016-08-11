<!doctype html>
<html class="no-js" lang="">
    <head>
      <head>
		   <?php
    		  $pagetitle = "Ginger's | Blogs";
    		  include('sections/header-info.php')
    		?>
      </head>
    </head>
    <body>


	<!-- header start -->
	<?php include('sections/nav.php')?>
	<!-- header end -->
	<!-- breadcrumb-area start -->
	<div class="breadcrumb-area pages-area" style="background-image: url('img/blog/blogs_topBG.png')">
		<div class="container">
			<div class="row">
				<div class="col-md-12 breadcrumb-padding pages-p">
					<div class="breadcrumb-title">
						<h1>   </h1>
					</div>
					<div class="breadcrumb-list">
						<ul class="breadcrumb">
							<li>You are here: </li>
							<li><a href="index.php">Home</a></li>
							<li>Blog</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- breadcrumb-area end -->
	<!-- blog-area start -->
	<?php include('sections/all_blogs_page/blogs_area.php')?>
	<!-- blog-area end -->

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
