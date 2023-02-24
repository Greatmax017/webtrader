<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="Highest quality, pre-trade bond data available via one-connection, from the leading Sell-Side market makers in fixed income.">
	<meta name="author" content="Highest quality, pre-trade bond data available via one-connection, from the leading Sell-Side market makers in fixed income.">
	<meta name="robots" content="Highest quality, pre-trade bond data available via one-connection, from the leading Sell-Side market makers in fixed income.">
	<meta name="description" content="Highest quality, pre-trade bond data available via one-connection, from the leading Sell-Side market makers in fixed income.">
	<meta property="og:title" content="  :Highest quality, pre-trade bond data available via one-connection, from the leading Sell-Side market makers in fixed income.">
	<meta property="og:description" content="Highest quality, pre-trade bond data available via one-connection, from the leading Sell-Side market makers in fixed income.">
	
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




</head>
<body>
 
 <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="/dashboard" class="brand-logo">
				<img src="images/logo/logo.png" class="logo-abbr" alt="">
				<img src="images/logo/logo-text.png" class="brand-title" alt="">
				<img src="images/logo/logo-color.png" class="logo-color" alt="">
				<img src="images/logo/logo-text-color.png" class="brand-title color-title" alt="neptune">
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
					<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
						<rect x="22" y="11" width="4" height="4" rx="2" fill="#2A353A"/>
						<rect x="11" width="4" height="4" rx="2" fill="#2A353A"/>
						<rect x="22" width="4" height="4" rx="2" fill="#2A353A"/>
						<rect x="11" y="11" width="4" height="4" rx="2" fill="#2A353A"/>
						<rect x="11" y="22" width="4" height="4" rx="2" fill="#2A353A"/>
						<rect width="4" height="4" rx="2" fill="#2A353A"/>
						<rect y="11" width="4" height="4" rx="2" fill="#2A353A"/>
						<rect x="22" y="22" width="4" height="4" rx="2" fill="#2A353A"/>
						<rect y="22" width="4" height="4" rx="2" fill="#2A353A"/>
					</svg>		
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		
		
	 <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
							<div class="dashboard_bar">
                                Economic Calendar
                            </div>
                        </div>
                        <div class="navbar-nav header-right">
							
							<div class="dz-side-menu">	
								<div class="search-coundry d-flex align-items-center">
									<img src="images/United.png" alt="">
									<select class="default-select dashboard-select image-select">
									  <option data-display="Eng">Eng</option>
									  <option value="2">Af</option>
									   <option value="2">Al</option>
									</select>
								</div>
									
								<ul>
									<li class="nav-item dropdown header-profile">
										<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
											<img src="/images/profile/pic1.jpg" alt="">
										</a>
										
									</li>
								</ul>	
							</div>	
                        </div>
                    </div>
				</nav>
			</div>
		</div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
					<li><a class=" " href="/dashboard" aria-expanded="false">
							<i class="material-icons">trending_up</i>
							<span class="nav-text">Terminal</span>
						</a>
						
					</li>
					<li><a class=" " href="/calendar" aria-expanded="false">
						<i class="material-icons">grid_view</i>
						<span class="nav-text">Calender</span>
					</a>
					
				</li>
				
				<li>
					
					
					<a href="/dashboard" class="logout" aria-expanded="false">
					<i class="bi bi-power"></i>
				
					<span class="nav-text" >Logout</span>
					<!-- <button type="submit">Logout</button> -->
					
					
					
					</a>
			
			</li>
					
				</ul>
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-8">
						<div class="row">
							<!-- <div class="col-xl-12">
								<div class="card bubles">
									<div class="card-body">
										<div class="buy-coin  bubles-down">
											<div>
												<h2>Buy & Sell 100+ Coins Instantly</h2>
												<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>
												<a href="exchange.html" class="btn btn-primary">Buy Coin</a>
											</div>
											<div class="coin-img">
												<img src="images/coin.png" class="img-fluid" alt="">
											</div>
										</div>
									</div>
								</div>
							</div> -->
							
						<!-- tradingview chart  -->
   							<div class="col-xl-12">
								
							</div>
							<!-- chart ends here -->
							
							
<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
    <div class="tradingview-widget-container__widget"></div>
   
    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-events.js" async>
    {
    "colorTheme": "light",
    "isTransparent": true,
    "width": "700",
    "height": "800",
    "locale": "en",
    "importanceFilter": "-1,0,1",
    "currencyFilter": "USD,EUR,ITL,NZD,CHF,AUD,FRF,JPY,ZAR,TRL,CAD,DEM,MXN,ESP,GBP"
  }
    </script>
  </div>
  <!-- TradingView Widget END -->

							
						</div>
					</div>
					<!-- first content ends  -->

					
				
					



				


				</div>
            </div>
        </div>
		
        <!--**********************************
            Content body end
        ***********************************-->
		
		
		
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer out-footer">
            <div class="copyright">
               <p>Copyright © Developed by <a href="/" target="_blank">Neptunefx</a> 2023 </p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->
		
        <!--**********************************
           Support ticket button end
        ***********************************-->


	</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->





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