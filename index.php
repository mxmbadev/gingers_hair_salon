<!doctype html>
<html class="no-js" lang="">
    <head>
		  <?php
  		  $pagetitle = "SalonGingers.com | Hair and Skin Care";
  		  include('sections/header-info.php')
  		?>
    </head>
    <body class="home-4">




	<?php include('sections/nav.php')?>


	<?php include('sections/owl_carousel.php')?>

	<!-- About-Us Area -->
	<div id="about" style="padding: 120px 0px 50px 0px;">
    <div class="container">
  		<div class="row">
  			<div class="col-md-12">
  				<div class="section-heading-4 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
  					<div class="section-title-4">
  						<h1><strong>About</strong> US</h1>
  					</div>
  					<p> Ginger's is a full service salon with professional, courteous employees. We strive to offer the best service in all areas, such as Hair, Nails, Massage and much more. Feel free to come by and get the look you have been wishing for!   </p>
  				</div>
  			</div>
  		</div>
    </div>
	</div>
	<!-- End About-Us Area -->
	<!-- service-area start -->
	<!-- service-area end -->
	<!-- features-area start -->
	<?php include('sections/services2.php')?>
	<!-- features-area end -->
	<!-- upcoming-product-area start -->

	<!-- upcoming-product-area start -->
	<!-- counter-area start -->

	<!-- counter-area end -->
	<!-- category-area start -->

	<!-- category-area end -->
	<!-- video-area start -->

	<!-- video-area end -->
	<!-- free-shipping-area start -->

	<!-- free-shipping-area end -->
	<!-- popular-brand-area start -->

	<!-- popular-brand-area end -->
	<!-- latest-blog-area start -->

	<!-- latest-blog-area end -->
	<!-- footer start -->
	<?php include('sections/footer.php')?>
	<!-- footer end -->

		<!-- JS -->
    <!-- Smooth Scrolling -->
        <script type="text/javascript" src="js/smooth_scrolling.js"></script>

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
		<script>
			var vid = document.getElementById("bg");
			vid.loop = true;
			vid.muted = true
		</script>
		<script>

    $(document).ready(function(){
      $('a').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
        && location.hostname == this.hostname) {
          var $target = $(this.hash);
          $target = $target.length && $target
          || $('[name=' + this.hash.slice(1) +']');
          if ($target.length) {
            var targetOffset = $target.offset().top;
            $('html,body')
            .animate({scrollTop: targetOffset}, 1000);
           return false;
          }
        }
      });
    });
		</script>

		<!-- plugins js -->
        <script src="js/plugins.js"></script>

		<!-- main js -->
        <script src="js/main.js"></script>

    </body>

</html>
