<!DOCTYPE html>
<html lang="en">
<head>
	<title><?=$judul;?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Samira hotel template project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/styles/bootstrap-4.1.2/bootstrap.min.css">
	<link href="<?=base_url()?>assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url()?>assets/plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/styles/responsive.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/styles/contact.css">


	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/styles/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/styles/dataTables.bootstrap4.min.css">

	<link href="css/addons-pro/stepper.min.css" rel="stylesheet">

	<style type="text/css">

		/* Steps */
		.step {
			position: relative;
			min-height: 1em;
			color: gray;
		}
		.step + .step {
			margin-top: 1.5em
		}
		.step > div:first-child {
			position: static;
			height: 0;
		}
		.step > div:not(:first-child) {
			margin-left: 1.5em;
			padding-left: 1em;
		}
		.step.step-active {
			color: #4285f4
		}
		.step.step-active .circle {
			background-color: #4285f4;
		}

		/* Circle */
		.circle {
			background: gray;
			position: relative;
			width: 1.5em;
			height: 1.5em;
			line-height: 1.5em;
			border-radius: 100%;
			color: #fff;
			text-align: center;
			box-shadow: 0 0 0 3px #fff;
		}

		/* Vertical Line */
		.circle:after {
			content: ' ';
			position: absolute;
			display: block;
			top: 1px;
			right: 50%;
			bottom: 1px;
			left: 50%;
			height: 100%;
			width: 1px;
			transform: scale(1, 2);
			transform-origin: 50% -100%;
			background-color: rgba(0, 0, 0, 0.25);
			z-index: -1;
		}
		.step:last-child .circle:after {
			display: none
		}

		/* Stepper Titles */
		.title {
			line-height: 1.5em;
			font-weight: bold;
		}
		.caption {
			font-size: 0.8em;
		}
	</style>

</head>
<body>

	<div class="super_container">

		<!-- Header -->

		<header class="header">
			<div class="header_content">

				<!-- Logo -->
				<div class="logo_container d-flex flex-column align-items-center justify-content-center">
					<div class="logo">
						<a href="#" class="text-center">
							<div class="logo_subtitle">Booking</div>
							<div class="logo_title">Udinus Sport Center</div>
							<div class="logo_stars">
								<ul class="d-flex flex-row align-items-start justfy-content-start">
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
								</ul>
							</div>
						</a>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="header_inner d-flex flex-row align-items-center justify-content-start">
								<nav class="main_nav">
									<ul class="d-flex flex-row align-items-center justify-content-start">
										<li <?php if($menu=='home'){ ?> class="active" <?php } ?>><a href="<?=base_url('home')?>"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>home</span></div></a></li>
										<li <?php if($menu=='jadwal'){ ?> class="active" <?php } ?>><a href="<?=base_url('home/jadwal')?>"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>Jadwal</span></div></a></li>
										<li <?php if($menu=='fasilitas'){ ?> class="active" <?php } ?>><a href="<?=base_url('home/fasilitas')?>"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>Fasilitas</span></div></a></li>
										<li <?php if($menu=='prosedur'){ ?> class="active" <?php } ?>><a href="<?=base_url('home/prosedur')?>"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>Prosedur</span></div></a></li>
										<li <?php if($menu=='kontak'){ ?> class="active" <?php } ?>><a href="<?=base_url('home/kontak')?>"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>Kontak</span></div></a></li>
									</ul>
								</nav>
								<a href="#" class="button_container header_button ml-auto"><div class="button text-center"><span>Doni</span></div></a>
								<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
								<div class="header_review"><a href="#">Add your review</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<!-- Menu -->

		<div class="menu">
			<div class="background_image" style="background-image:url(<?=base_url()?>/assets/images/menu.jpg)"></div>
			<div class="menu_content d-flex flex-column align-items-center justify-content-center">
				<ul class="menu_nav_list text-center">
					<li><a href="<?=base_url('home');?>">Home</a></li>
					<li><a href="<?=base_url('home/jadwal');?>">Jadwal</a></li>
					<li><a href="<?=base_url('home/fasilitas');?>">Fasilitas</a></li>
					<li><a href="<?=base_url('home/prosedur');?>">prosedur</a></li>
					<li><a href="<?=base_url('home/kontak');?>">Kontak</a></li>
				</ul>
				<div class="menu_review"><a href="#">Add your review</a></div>
			</div>
		</div>




