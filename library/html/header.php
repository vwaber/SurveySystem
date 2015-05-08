<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">

<link rel="stylesheet" href="<?php echo CSSPATH ?>church.css" type="text/css" media="screen">
<link rel="stylesheet" href="<?php echo CSSPATH ?>church_brown.css" type="text/css" media="screen">
<link rel="stylesheet" href="<?php echo CSSPATH ?>church_shortcodes.css" type="text/css" media="screen">
<link rel="shortcut icon" href="<?php echo CSSPATH ?>icon.jpg" >

<title><?php if(defined('PAGE_TITLE')) { echo PAGE_TITLE; } else { echo DEFAULT_TITLE;} ?></title>
<style type="text/css" media="all">
<!--
	a:hover{text-decoration:none;}
-->
</style>
</head>

<body>
<div class="multibg"></div>
<div class="body_inner">
	<div id="header"> <!-- Header Section contains memnu and church title -->
		<div id="header_inner">
			<div class="logo">
				<a rel="home" href="http://oslc2.cc/">Our Savior Lutheran Church</a>
			</div>
			<div id="header_extras"></div>
			<div id="primary_menu"></div>
		</div><!-- Close header_inner -->
	</div><!-- Close header -->
	
	<div id="intro"> <!-- Intro section contains Page Title-->
		<div id="intro_inner">
			<h1 class="intro_title">
				<?php if(defined('PAGE_TITLE')) { echo PAGE_TITLE; } else { echo DEFAULT_TITLE;} ?><!-- Page Title -->
			</h1>
		</div><!-- Close intro_inner -->
	</div><!-- Close intro -->
	
	<div id="content"> <!-- Content area for the page-->
		<div id="content_inner">
			<div id="main">
				<div id="main_inner">
					<!-- Actual Content Goes here -->