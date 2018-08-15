<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<? if ($metatag == ''): ?>
		<title>KONSULTHINK - <?= $title; ?></title>
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="author" content="" />

		<meta property="og:title" content=""/>
		<meta property="og:url" content=""/>
		<meta property="og:site_name" content=""/>
		<meta property="og:description" content=""/>
		<meta name="twitter:title" content="" />
		<meta name="twitter:url" content="" />
	<? else: ?>
		<title><?= $metatag->name; ?></title>
		<meta name="description" content="<?= $metatag->description; ?>" />
		<meta name="keywords" content="<?= $metatag->keywords; ?>" />
		<meta name="author" content="<?= $metatag->author; ?>" />

		<meta property="og:title" content="<?= $metatag->name; ?>"/>
		<meta property="og:url" content="<?= current_url(); ?>"/>
		<meta property="og:site_name" content="<?= $metatag->name; ?>"/>
		<meta property="og:description" content="<?= $metatag->description; ?>"/>
		<meta name="twitter:title" content="<?= $metatag->name; ?>" />
		<meta name="twitter:url" content="<?= current_url(); ?>" />
	<? endif; ?>

	<link rel="shortcut icon" href="favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/animate.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/icomoon.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/flexslider.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">

	<script src="<?= base_url(); ?>assets/js/modernizr-2.6.2.min.js"></script>

	<!--[if lt IE 9]>
		<script src="<?= base_url(); ?>assets/js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<div id="konsulthink-page">
		<a href="#" class="js-konsulthink-nav-toggle konsulthink-nav-toggle"><i></i></a>
		<aside id="konsulthink-aside" role="complementary" class="border js-fullheight">
			<h1 id="konsulthink-logo">
				<a href="<?= base_url(); ?>preview/">
					<img src="<?= base_url(); ?>assets/images/logo.png" style="width: 100px;">
				</a>
			</h1>
			<nav id="konsulthink-main-menu" role="navigation">
				<ul>
					<? foreach ($arr_header as $header): ?>
						<? if ($lang == $setting->setting__system_language || $header->name_lang == ''): ?>
							<li <? if ($header_id == $header->id): ?>class="konsulthink-active"<? endif; ?>><a href="<?= base_url(); ?>preview/<?= $header->link; ?>"><?= $header->name; ?></a></li>
						<? else: ?>
							<li <? if ($header_id == $header->id): ?>class="konsulthink-active"<? endif; ?>><a href="<?= base_url(); ?>preview/<?= $header->link; ?>"><?= $header->name_lang; ?></a></li>
						<? endif; ?>
					<? endforeach; ?>
				</ul>
			</nav>

			<div class="konsulthink-footer">
				<p>
					<small><?= $setting->system_copyright; ?></small>
					<br>
					<small>Developed by <a href="<?= $setting->system_vendor_link; ?>" target="_blank"><?= $setting->system_vendor_name; ?></a></small>
				</p>
				<ul>
					<? if ($setting->setting__social_media_facebook_link != ''): ?>
						<li><a href="<?= $setting->setting__social_media_facebook_link; ?>"><i class="icon-facebook2"></i></a></li>
					<? endif; ?>

					<? if ($setting->setting__social_media_twitter_link != ''): ?>
						<li><a href="<?= $setting->setting__social_media_twitter_link; ?>" target="_blank"><i class="icon-twitter2"></i></a></li>
					<? endif; ?>

					<? if ($setting->setting__social_media_instagram_link != ''): ?>
						<li><a href="<?= $setting->setting__social_media_instagram_link; ?>" target="_blank"><i class="icon-instagram"></i></a></li>
					<? endif; ?>

					<? if ($setting->setting__social_media_linkedin_link != ''): ?>
						<li><a href="<?= $setting->setting__social_media_linkedin_link; ?>" target="_blank"><i class="icon-linkedin2"></i></a></li>
					<? endif; ?>
				</ul>

				<? if ($setting->setting__website_enabled_dual_language > 0): ?>
					<ul>
						<li <? if ($setting->setting__system_language == $lang): ?>class="active"<? endif; ?>><a onclick="changeLanguage('<?= $setting->setting__system_language; ?>');"><?= $setting->setting__system_language; ?></a></li>
						<li <? if ($setting->setting__system_language2 == $lang): ?>class="active"<? endif; ?>><a onclick="changeLanguage('<?= $setting->setting__system_language2; ?>');"><?= $setting->setting__system_language2; ?></a></li>
					</ul>
				<? endif; ?>
			</div>

		</aside>