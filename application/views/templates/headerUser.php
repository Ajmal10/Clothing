<!DOCTYPE html>
<html lang="zxx">
<head> 
	<title><?= $title; ?></title>
	<meta charset="UTF-8">
	<meta name="description" content=" Divisima | eCommerce Template">
	<meta name="keywords" content="divisima, eCommerce, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
					<div class="col-xl-6 col-lg-5">
						<form action="<?= base_url('category/search_User')?>" method="post" class="header-search-form">
							<input type="text" class="form-control" placeholder="Search on Clothing Something . . ." name="keyword" autofocus>
							<button type="submit" name="submit"><i class="flaticon-search"></i></button>
						</form>
					</div>
					<div class="col-xl-4 col-lg-5">
						<div class="user-panel">
							<div class="up-item">
								<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown">
									<img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $user['image']; ?>" style="width: 30px;">
									<!-- <span class="mr-2 d-none d-lg-inline text-gray-100 "></span> -->
									<?= $user['name']; ?> 
									</a>
								<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
									<a class="dropdown-item" href="<?= base_url('user') ?>	">
									<i class="flaticon-profile"></i>
									My Profile
									</a>
				                <div class="dropdown-divider"></div>
				                <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
				                  <i class="flaticon-logout"></i>
				                  Logout
				                </a>
				              </div>
				          </div>
							<!-- <div class="up-item">
								<div class="shopping-card">
									<i class="flaticon-bag"></i>
									<!-- <span><?php $keranjang = 'Shopping Cart '.$this->cart->total_items(). ' items' ?>0</span> -->
									<!-- <span><?=$this->cart->total_items()?></span> -->

									<!-- <?php echo anchor('user/detailKeranjang', $keranjang) ?> -->

									 
								<!-- </div>  -->
								<div class="up-item">
								<div class="shopping-card">
									<i class="flaticon-bag"></i>
									<span><?= $keranjang=$this->cart->total_items() ?>
										<?php  anchor('user/detailKeranjang', $keranjang) ?>
									</span>

									 
								</div>
								<a href="<?= base_url('user/detailKeranjang') ?>">Shopping Cart</a>
							</div>
								<!-- <a href="#">Shopping Cart</a> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="main-navbar">
			<div class="container">
				<!-- menu -->
				<ul class="main-menu">
					<li><a href="<?= base_url('');?>home/index2">Home</a></li>
					<li><a href="<?= base_url()?>category/indexUser">Category</a></li>
				</ul>
			</div>
		</nav>
	</header>
	<!-- Header section end -->

