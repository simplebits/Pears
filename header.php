<!DOCTYPE html>
<html lang="en">
<head>
<title>Pears <?php wp_title('/', true, 'left'); ?></title>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />

<!-- hide css from IE6 but load for everyone else -->
<!--[if gte IE 7]><!-->
<link rel="stylesheet/less" media="screen, projection" href="<?php echo get_template_directory_uri(); ?>/css/screen.less" />
<!-- <![endif]-->

<link rel="shortcut icon" href="/favicon.png" /> 

<!-- enable HTML5 elements in IE7+8 -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/less.js"></script>
</head>

<body <?php body_class(); ?>>

<header role="banner" class="group">
	<a href="<?php bloginfo('siteurl'); ?>/" id="logo">
		Pears <em>are common patterns of markup &amp; style</em>
	</a>
</header>

<div class="wrap group">
	<div class="main" role="main">
