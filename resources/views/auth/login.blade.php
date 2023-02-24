@extends('layouts.app')

@section('content')


<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from cryptozone.dexignzone.com/xhtml/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Dec 2022 23:29:23 GMT -->
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="TRADE THE FINANCIAL MARKETS ON NEPTUNE MULTIPLE PLATFORMS">
	<meta name="author" content="TRADE THE FINANCIAL MARKETS ON NEPTUNE MULTIPLE PLATFORMS">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="TRADE THE FINANCIAL MARKETS ON NEPTUNE MULTIPLE PLATFORMS">
	<meta property="og:title" content="TRADE THE FINANCIAL MARKETS ON NEPTUNE MULTIPLE PLATFORMS">
	<meta property="og:description" content="TRADE THE FINANCIAL MARKETS ON NEPTUNE MULTIPLE PLATFORMS">
	<meta property="og:image" content="social-image.png">
	<meta name="format-detection" content="telephone=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	
	<!-- PAGE TITLE HERE -->
	<title>{{ config('app.name', 'Neptune') }}</title>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<img src="images/logo/logo-full.png" alt="">
									</div>
                                    <h4 class="text-center mb-4">Login to Webtrader</h4>
                                    
                                <strong><font color="Red">{{ $errors->first('email') }}</font></strong>
                                <strong><font color="Red">{{ $errors->first('password') }}</font></strong>
                                
                                
                                    <form method="POST" action="/login">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Account Number</strong></label>
                                            <input type="email" name="email" class="form-control" placeholder="hello@example.com">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Account Password</strong></label>
                                            <input type="password" name="password" class="form-control" value="Password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Forgot Password? <a class="text-primary" href="mailto:support@neptunefx.net">Contact support</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--**********************************
	Scripts
***********************************-->
<!-- Required vendors -->
<script src="vendor/global/global.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/deznav-init.js"></script>
<script src="js/styleSwitcher.js"></script>
</body>

<!-- Mirrored from cryptozone.dexignzone.com/xhtml/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Dec 2022 23:29:23 GMT -->
</html>

@endsection
