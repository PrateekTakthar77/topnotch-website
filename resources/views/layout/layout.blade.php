<!DOCTYPE html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="x-ua-compatible" content="ie=edge" />
		<title>Top Notch Energy Solutions</title>
		<meta name="description" content="TOP NOTCH ENERGY SOLUTIONS" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png" />
		<!-- Place favicon.ico in the root directory -->
		<!-- CSS here -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/animate.min.css" />
		<link rel="stylesheet" href="assets/css/magnific-popup.css" />
		<link rel="stylesheet" href="assets/css/fontawesome-all.min.css" />
		<link rel="stylesheet" href="assets/css/flaticon.css" />
		<link rel="stylesheet" href="assets/css/odometer.css" />
		<link rel="stylesheet" href="assets/css/swiper-bundle.css" />
		<link rel="stylesheet" href="assets/css/aos.css" />
		<link rel="stylesheet" href="assets/css/default.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>
		<!--Preloader-->
		<div id="preloader">
			<div id="loader" class="loader">
				<div class="loader-container">
					<!-- <div class="loader-icon"><img src="assets/img/logo/preloader.png" alt="Preloader" /></div> -->
					<img width="250" height="81" src="/assets/img/banner/Top-Notch-Logo-1-250x81.png" 
      						class="custom-logo" alt="Top Notch Energy Solutions Logo" decoding="async">
				</div>
			</div>
		</div>
		<!--Preloader-end -->
		<!-- Scroll-top -->
		<button class="scroll__top scroll-to-target" data-target="html">
			<i class="fas fa-angle-up"></i>
		</button>

        @include('layout.header')
        
        <main class="fix">
            @yield('content')
        </main>

        @include('layout.footer')

        <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
		<script src="assets/js/bootstrap.bundle.min.js"></script>
		<script src="assets/js/jquery.magnific-popup.min.js"></script>
		<script src="assets/js/jquery.odometer.min.js"></script>
		<script src="assets/js/jquery.appear.js"></script>
		<script src="assets/js/gsap.js"></script>
		<script src="assets/js/ScrollTrigger.js"></script>
		<script src="assets/js/SplitText.js"></script>
		<script src="assets/js/gsap-animation.js"></script>
		<script src="assets/js/jquery.parallaxScroll.min.js"></script>
		<script src="assets/js/swiper-bundle.js"></script>
		<script src="assets/js/ajax-form.js"></script>
		<script src="assets/js/wow.min.js"></script>
		<script src="assets/js/aos.js"></script>
		<script src="assets/js/main.js"></script>
		<script>
			const circles = document.querySelectorAll(".circle");
			circles.forEach((circle) => {
				circle.innerHTML = circle.textContent.replace(/\S/g, "<span>$&</span>");
				const elements = circle.querySelectorAll("span");
				for (let i = 0; i < elements.length; i++) {
					elements[i].style.transform = "rotate(" + i * 17 + "deg)";
				}
			});
		</script>
	</body>
</html>
