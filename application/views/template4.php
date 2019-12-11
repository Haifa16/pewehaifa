<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<style>
            table{
                background:#ffffff
            }
        	table, th, td {
			border: 1px solid black;
			border-collapse: collapse;
			}
			th, td {
			padding: 5px;
			padding-top:2px; padding-bottom:2px;
            text-align: left;   } 
            
            .button {
            float:right;
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 8px 16px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
            margin: 2px 2px;
            -webkit-transition-duration: 0.4s; /* Safari */
            transition-duration: 0.4s;
            cursor: pointer;
            }

            .button1 {
            background-color: white; 
            color: black; 
            border: 2px solid #4CAF50;
            }

            .button1:hover {
            background-color: #4CAF50;
            color: white;
            }
		</style>
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
			<section class="banner-area relative">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row fullscreen align-items-center justify-content-center" style="height: 735px;">
						<div class="col-lg-12">
                            <h2>Tabel Pengeluaran</h2>
                            <button class="button button1">Excel</button>
                        <table style="width:100%">
                        <tr>
                            <th>NO</th>
                            <th>Keperluan</th>
                            <th>Tanggal</th>
                            <th>Nominal</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Membayar tempat foto kelas</td>
                            <td>20 September 2019</td>
                            <td>Rp 70000</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Membayar tempat foto kelas</td>
                            <td>20 September 2019</td>
                            <td>Rp 70000</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Membayar tempat foto kelas</td>
                            <td>20 September 2019</td>
                            <td>Rp 70000</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Membayar tempat foto kelas</td>
                            <td>20 September 2019</td>
                            <td>Rp 70000</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Membayar tempat foto kelas</td>
                            <td>20 September 2019</td>
                            <td>Rp 70000</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Membayar tempat foto kelas</td>
                            <td>20 September 2019</td>
                            <td>Rp 70000</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Membayar tempat foto kelas</td>
                            <td>20 September 2019</td>
                            <td>Rp 70000</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Membayar tempat foto kelas</td>
                            <td>20 September 2019</td>
                            <td>Rp 70000</td>
                        </tr>
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
