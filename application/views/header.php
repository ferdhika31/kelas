<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php echo $this->config->item('title');?></title>
		<!-- Sets initial viewport load and disables zooming  -->
		<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
		<!-- SmartAddon.com Verification -->
		<meta name="smartaddon-verification" content="936e8d43184bc47ef34e25e426c508fe" />
		<meta name="keywords" content="Flat UI Design, UI design, UI, user interface, web interface design, user interface design, Flat web design, Bootstrap, Bootflat, Flat UI colors, colors">
		<meta name="description" content="The complete style of the Bootflat Framework.">
		<link rel="shortcut icon" href="<?php echo base_url('assets/favicon_16.ico');?>"/>
		<link rel="bookmark" href="<?php echo base_url('assets/favicon_16.ico');?>"/>
		<!-- site css -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/site.min.css');?>">
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700,400italic,600italic,700italic,800italic,300italic" rel="stylesheet" type="text/css">
		<!-- <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'> -->
		<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
		<![endif]-->
		<script type="text/javascript" src="<?php echo base_url('assets/js/site.min.js');?>"></script>
	</head>
	<body style="background-color: #f1f2f6;">
		<div class="docs-header">
			<!--nav-->
			<nav class="navbar navbar-default navbar-custom" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="<?php echo site_url();?>"><img src="<?php echo base_url('assets/img/logo.png');?>" height="40"></a>
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a class="nav-link" href="<?php echo site_url(); ?>">
									Home
								</a>
							</li>
							<li>
								<a class="nav-link<?php echo ($stt=="bangkuSatu")?" current":"";?>" href="<?php echo site_url('bangku');?>">
									Bangku1
								</a>
							</li>
							<li>
								<a class="nav-link<?php echo ($stt=="bangkuDua")?" current":"";?>" href="<?php echo site_url('bangku/dua');?>">
									Bangku2
								</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>