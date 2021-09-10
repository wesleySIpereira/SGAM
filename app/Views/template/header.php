<!DOCTYPE html>
<html class="fixed js flexbox flexboxlegacy csstransforms csstransforms3d no-overflowscrolling no-mobile-device custom-scroll" style=""><head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>SGAM |<?= $titulo;?> |<?= $subtitulo; ?></title>
		<meta name="keywords" content="HTML5 Admin Template">
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendor/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendor/font-awesome/css/font-awesome.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendor/magnific-popup/magnific-popup.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendor/bootstrap-datepicker/css/datepicker3.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/stylesheets/theme.css">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/stylesheets/skins/default.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="<?php echo base_url(); ?>/assets/vendor/modernizr/modernizr.js"></script>
		<script src="<?php echo base_url()?>/assets/javascripts/forms/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="<?php echo base_url()?>/assets/javascripts/jquery.validate.js"></script>
		<script src="<?php echo base_url()?>/assets/javascripts/forms/jquery.mask.js"></script>
		<script src="<?php echo base_url()?>/assets/javascripts/forms/mascaras.js"></script>
		<script src="<?php echo base_url()?>/assets/javascripts/forms/validation.js"></script>
		<!-- Adicionando Javascript -->
  
	</head>
	<body onload="msg()">
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="../" class="logo">
						<img src="<?php echo base_url(); ?>/assets/images/logo.png" alt="Porto Admin" height="35">
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
			
				<!-- start: search & user box -->
				<div class="header-right">
			
					
			
					<span class="separator"></span>
			
					
			
					
			
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="<?php echo base_url(); ?>/assets/images/!logged-user.jpg" alt="Joseph Doe" class="img-circle" data-lock-picture="<?php echo base_url(); ?>/assets/images/!logged-user.jpg">
							</figure>
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
								<span class="name">----</span>
								<span class="role">administrator</span>
							</div>
			
							<i class="fa custom-caret"></i>
						</a>
			
					<!--	<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								<li>
									<a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fa fa-user"></i> My Profile</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock"></i> Lock Screen</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="pages-signin.html"><i class="fa fa-power-off"></i> Logout</a>
								</li>
							</ul>
						</div> -->
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
				
					<div class="sidebar-header">
						
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>
				
					<div class="nano has-scrollbar">
						<div class="nano-content" tabindex="0" style="right: -12px;">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
									<li>
										<a href="<?= base_url();?>/index.php/pessoa/">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Dashboard</span>
										</a>
									</li>
									
									<li class="nav-parent nav-active">
										<a>
											<i class="fa fa-copy" aria-hidden="true"></i>
											<span>Fichas</span>
										</a>
										<ul class="nav nav-children" style="">
											<li>
												<a href="<?= base_url();?>/index.php/pessoa">
													 Cadastrar 
												</a>
											</li>
										
											<li>
												<a href="<?= base_url();?>/index.php/pessoa/show">
													 Gerir Fichas
												</a>
											</li>

											<li>
												<a href="<?= base_url();?>/index.php/pessoa/etiqueta">
													 Gerar etiquetas
												</a>
											</li>
										</ul>
									</li>
									<li class="nav-parent nav-active">
										<a>
											<i class="fa fa-copy" aria-hidden="true"></i>
											<span>Documentos</span>
										</a>
										<ul class="nav nav-children" style="">
											<li>
												<a href="<?= base_url();?>/index.php/documento/">
													Gerir Locais
												</a>

											</li>
											<li>
												<a href="<?= base_url();?>/index.php/documento/prateleira">
													Cadastrar Prateleira
												</a>
												
											</li>
											<li>
												<a href="<?= base_url();?>/index.php/documento/pasta">
													Cadastrar Pasta
												</a>
												
											</li>
											<li>
												<a href="<?= base_url();?>/index.php/documento/doc">
													Cadastrar Documento
												</a>
												
											</li>
											
										</ul>
									</li>
									
									
									
									
									<li class="nav-parent nav-active">
										<a>
											<i class="fa fa-copy" aria-hidden="true"></i>
											<span>Info</span>
										</a>
										<ul class="nav nav-children" style="">
											<li>
												<a href="<?= base_url();?>/index.php/pessoa">
													Sobre
												</a>
											</li>
										
											
										</ul>
									</li>
									
								</ul>
							</nav>
				
							<hr class="separator">
				
							
				
							
				
							
						</div>
				
					<div class="nano-pane" style="display: none; opacity: 1; visibility: visible;"><div class="nano-slider" style="height: 260px; transform: translate(0px);"></div></div></div>
				
				</aside>
				<!-- end: sidebar -->
<!-- FINAL HEADER  -->
