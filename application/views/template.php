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
			<link rel="stylesheet" type="text/css" href="<?=base_url()?>assetskalender/css.css">
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
						<div class="content">
							<div class="calendar-container">
							<div class="calendar"> 
								<div class="year-header"> 
								<span class="left-button" id="prev"> &lang; </span> 
								<span class="year" id="label"></span> 
								<span class="right-button" id="next"> &rang; </span>
								</div> 
								<table class="months-table"> 
								<tbody>
									<tr class="months-row">
									<td class="month">Jan</td> 
									<td class="month">Feb</td> 
									<td class="month">Mar</td> 
									<td class="month">Apr</td> 
									<td class="month">May</td> 
									<td class="month">Jun</td> 
									<td class="month">Jul</td>
									<td class="month">Aug</td> 
									<td class="month">Sep</td> 
									<td class="month">Oct</td>          
									<td class="month">Nov</td>
									<td class="month">Dec</td>
									</tr>
								</tbody>
								</table> 
								
								<table class="days-table"> 
								<td class="day">Sun</td> 
								<td class="day">Mon</td> 
								<td class="day">Tue</td> 
								<td class="day">Wed</td> 
								<td class="day">Thu</td> 
								<td class="day">Fri</td> 
								<td class="day">Sat</td>
								</table> 
								<div class="frame"> 
								<table class="dates-table"> 
									<tbody class="tbody">             
									</tbody> 
								</table>
								</div> 
								<button class="button" id="add-button">Add Event</button>
							</div>
							</div>
							<div class="events-container">
							</div>
							<div class="dialog" id="dialog">
								<h2 class="dialog-header"> Add New Event </h2>
								<form class="form" id="form">
								<div class="form-container" align="center">
									<label class="form-label" id="valueFromMyButton" for="name">Event name</label>
									<input class="input" type="text" id="name" maxlength="36">
									<label class="form-label" id="valueFromMyButton" for="count">Number of people to invite</label>
									<input class="input" type="number" id="count" min="0" max="1000000" maxlength="7">
									<input type="button" value="Cancel" class="button" id="cancel-button">
									<input type="button" value="OK" class="button" id="ok-button">
								</div>
								</form>
							</div>
						</div>
						<!-- Dialog Box-->
						<script
							src="https://code.jquery.com/jquery-3.2.1.min.js"
							integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
							crossorigin="anonymous">
						</script>
						<script type="text/javascript" src="<?=base_url()?>assetskalender/js.js"></script>
						</div>
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
		</body>
	</html>
