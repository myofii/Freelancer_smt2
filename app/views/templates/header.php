<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title><?= $data['judul']?></title>
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="<?= BASEURL; ?>/css/linearicons.css">
	<link rel="stylesheet" href="<?= BASEURL; ?>/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= BASEURL; ?>/css/themify-icons.css">
	<link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
	<link rel="stylesheet" href="<?= BASEURL; ?>/css/owl.carousel.css">
	<link rel="stylesheet" href="<?= BASEURL; ?>/css/nice-select.css">
	<link rel="stylesheet" href="<?= BASEURL; ?>/css/nouislider.min.css">
	<link rel="stylesheet" href="<?= BASEURL; ?>/css/ion.rangeSlider.css" />
	<link rel="stylesheet" href="<?= BASEURL; ?>/css/ion.rangeSlider.skinFlat.css" />
	<link rel="stylesheet" href="<?= BASEURL; ?>/css/magnific-popup.css">
	<link rel="stylesheet" href="<?= BASEURL; ?>/css/main.css">
</head>

<body>

	<!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container" style="background-color: #1f6aa0">
				<a href="<?= BASEURL; ?>">	<H2 style="color:#ffffff">BUATDESAIN.ID</H2></a>
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html"><span class="glyphicon glyphicon-user"></span></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="<?= BASEURL; ?>">Beranda</a></li>
							<?php foreach ($data['category'] as $category) : ?>
								<li class="nav-item">
									<a class="nav-link" href="<?= BASEURL; ?>/category/detail/<?= $category['CategoryID'] ?>"><?= $category['CategoryName'] ?></a>
								</li>
								</li>
							<?php endforeach; ?>
							<li class="nav-item"><a class="nav-link" href="<?= BASEURL; ?>/profile"><?= $_SESSION['user']?></a></li>
							<li class="nav-item"><a class="nav-link text-danger" href="<?= BASEURL; ?>/login/logout">Keluar</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="nav-item"><a href="<?= BASEURL; ?>/cart/detail/<?= $_SESSION['id'] ?>" class="cart"><span class="ti-bag"></span></a></li>
							
						</ul>
					</div>
				</div>
			</nav>
		</div>
		
	</header>
	<!-- End Header Area -->
