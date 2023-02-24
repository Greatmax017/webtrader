<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="TRADE THE FINANCIAL MARKETS ON
	NEPTUNE MULTIPLE PLATFORMS">
	
	<meta property="og:description" content="TRADE THE FINANCIAL MARKETS ON
	NEPTUNE MULTIPLE PLATFORMS">
	<meta property="og:image" content="social-image.png">
	<meta name="format-detection" content="telephone=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- PAGE TITLE HERE -->
	<title>Neptune Webtrader</title>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="/images/favicon.png">
	
	<link href="vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
	<link href="vendor/swiper/css/swiper-bundle.min.css" rel="stylesheet">
	<link href="fonts.googleapis.com/css2e91f.css?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.css">
	
	<!-- Style css -->
    <link href="css/style.css" rel="stylesheet">
	{{-- <link rel="stylesheet" href="{{ asset('build/assets/app-7cd5d428.css') }}">
	 <script src="{{ asset('build/assets/app-21ce4071.js') }}"></script> --}}



    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @inertiaHead
  </head>
  <body>
    @inertia
<!--*******************
        Preloader start
    ********************-->
    <div id="loader">
	</div>
    <!--*******************
        Preloader end
    ********************-->
	
    <!-- Required vendors -->
    <script src="/vendor/global/global.min.js"></script>
	<script src="/vendor/chart.js/Chart.bundle.min.js"></script>
	<script src="/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
	
	<!-- Dashboard 1 -->
	{{-- <script src="/js/dashboard/dashboard-1.js"></script> --}}
	<!-- Apex Chart -->
	
	<script src="/vendor/swiper/js/swiper-bundle.min.js"></script>
	<script src="https://s3.tradingview.com/tv.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/wnumb/1.2.0/wNumb.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.js"></script>
	<script src="/vendor/raphael/raphael.min.js"></script>
	
	
    <script src="/js/custom.js"></script>
	<script src="/js/deznav-init.js"></script>
	<script src="/js/demo.js"></script>

    {{-- <script src="/js/dashboard/tradingview-1.js"></script> --}}
	</body>
</html>