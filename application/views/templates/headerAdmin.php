<!DOCTYPE html>
<html lang="zxx">
<head> 
	<title><?= $title; ?></title>
	<meta charset="UTF-8">

	<!-- Favicon -->
	<link href="<?= base_url('assets/img/favicon.ico')?>" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>"/>
	<link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.min.css')?>"/>
	<link rel="stylesheet" href="<?= base_url('assets/css/flaticon.css')?>"/>
	<link rel="stylesheet" href="<?= base_url('assets/css/slicknav.min.css')?>"/>
	<link rel="stylesheet" href="<?= base_url('assets/css/jquery-ui.min.css')?>"/>
	<link rel="stylesheet" href="<?= base_url('assets/css/owl.carousel.min.css')?>"/>
	<link rel="stylesheet" href="<?= base_url('assets/css/animate.css')?>"/>
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>"/>


	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body> 
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 text-center text-lg-left">
						<!-- logo -->
						<a href="./index.html" class="site-logo">
							<img src="<?= base_url('assets/')?>img/Clothing.png" alt="">
						</a>
					</div>
					<div class="col-xl-6 col-lg-5"></div>
					<div class="col-xl-4 col-lg-5">
						<div class="user-panel float-right">
							<div class="up-item">
									<i class="flaticon-logout"></i>		
								<a href="<?= base_url()?>Auth/logout">Logout</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
