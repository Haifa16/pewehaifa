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
		<title>Simples</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,400,300,500,600" rel="stylesheet">
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="<?=base_url()?>assets2/css/linearicons.css">
			<link rel="stylesheet" href="<?=base_url()?>assets2/css/owl.carousel.css">
			<link rel="stylesheet" href="<?=base_url()?>assets2/css/font-awesome.min.css">
			<link rel="stylesheet" href="<?=base_url()?>assets2/css/nice-select.css">
			<link rel="stylesheet" href="<?=base_url()?>assets2/css/magnific-popup.css">
			<link rel="stylesheet" href="<?=base_url()?>assets2/css/bootstrap.css">
			<link rel="stylesheet" href="<?=base_url()?>assets2/css/main.css">
			<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="<?=base_url()?>assetskalender/css.css">
			<style>
				label{margin-left: 20px;}
				#datepicker{width:180px; margin: 0 20px 20px 20px;}
				#datepicker > span:hover{cursor: pointer;}
			</style>
		</head>
		<body>
			<!-- Start Header Area -->
			<header class="default-header">
				<div class="container">
					<div class="header-wrap">
						<div class="header-top d-flex justify-content-between align-items-center">
							<div class="logo">
								<a href="index.html"><img src="assets/img/logo.png" alt=""></a>
							</div>
							<div class="main-menubar d-flex align-items-center">
								<nav class="hide">
									<a href="<?php echo base_url('index.php/masuk_kelas')?>">Kalender</a>
									<a href="<?php echo base_url('index.php/kas')?>">Kas</a>
									<a href="<?php echo base_url('index.php/event')?>">Event</a>
									<a href="<?php echo base_url('index.php/pembukuan')?>">Pembukuan</a>
									<a href="<?php echo base_url('index.php/total')?>">Total</a>
								</nav>
								<div class="menu-bar"><span class="lnr lnr-menu"></span></div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<!-- End Header Area -->
			<!-- Start Banner Area -->
			<section class="banner-area relative">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row fullscreen align-items-center justify-content-center" style="height: 735px;">
						<div class="col-lg-20">
						<label>Select Date: </label><br>
						<input type="date" name="kalender" id="kalender">
						<!-- Dialog Box-->
						<script
							src="https://code.jquery.com/jquery-3.2.1.min.js"
							integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
							crossorigin="anonymous">
						</script>
					</div>
				</div>
			<div></div></section>
			<!-- End Banner Area -->
			<script src="<?=base_url()?>assets2/js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
			<script src="<?=base_url()?>assets2/js/vendor/bootstrap.min.js"></script>
			<script src="<?=base_url()?>assets2/js/jquery.ajaxchimp.min.js"></script>
			<script src="<?=base_url()?>assets2/js/owl.carousel.min.js"></script>
			 <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
			<script src="<?=base_url()?>assets2/js/jquery.nice-select.min.js"></script>
			<script src="<?=base_url()?>assets2/js/jquery.magnific-popup.min.js"></script>
			<script src="<?=base_url()?>assets2/js/main.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
			<script>
				var a = $("#datepicker").datepicker();
				console.log(a.getDate());

			</script>
		</body>
	</html>
