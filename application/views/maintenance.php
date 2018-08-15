<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>KONSULTHINK - <?= $title; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link rel="shortcut icon" href="favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/animate.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/icomoon.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/flexslider.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">

	<script src="<?= base_url(); ?>assets/js/modernizr-2.6.2.min.js"></script>

	<style type="text/css">
		#scene {
			height: 100vh;
			left: 0;
			position: fixed;
			top: 0;
			width: 100%;
		}
	</style>

	<!--[if lt IE 9]>
		<script src="<?= base_url(); ?>assets/js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		<div style="width: 100%; text-align: center; padding-top: 150px;">
			<img src="<?= base_url(); ?>assets/images/logo.png" style="width: 200px;">
		</div>
		<div style="width: 100%; text-align: center; font-weight: bold; font-size: 72px; padding-top: 20px;">COMING SOON</div>
		<div style="width: 100%; text-align: center; font-weight: bold; font-size: 36px;">We will be back with a better view</div>

		<div id="scene">
			<div class="paralax-scene-item layer hidden-xs rectangle-cs-1 pos-1" data-depth="0.20"></div>
			<div class="paralax-scene-item layer hidden-xs rectangle-cs-2 pos-2" data-depth="0.50"></div>
			<div class="paralax-scene-item layer hidden-xs rectangle-cs-3 pos-3" data-depth="0.30"></div>
			<div class="paralax-scene-item layer hidden-xs rectangle-cs-2 pos-4" data-depth="0.40"></div>
			<div class="paralax-scene-item layer hidden-xs rectangle-cs-3 pos-5" data-depth="0.10"></div>
			<div class="paralax-scene-item layer hidden-xs rectangle-cs-1 pos-6" data-depth="0.30"></div>

			<div class="paralax-scene-item layer hidden-xs rectangle-cs-1 pos-7" data-depth="0.40"></div>
			<div class="paralax-scene-item layer hidden-xs rectangle-cs-2 pos-8" data-depth="0.70"></div>
			<div class="paralax-scene-item layer hidden-xs rectangle-cs-3 pos-9" data-depth="0.10"></div>
	    </div>
	</body>

	<script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/jquery.easing.1.3.js"></script>
	<script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/jquery.waypoints.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/jquery.flexslider-min.js"></script>
	<script src="<?= base_url(); ?>assets/js/sticky-kit.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/jquery.parallax.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/main.js"></script>

	<script type="text/javascript">
		$(function() {
			if($(window).width() > 768){
	            $('#scene').parallax();
	        }
		});
	</script>
</html>