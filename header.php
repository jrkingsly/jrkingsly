<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">
		
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">
		
		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
			<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />
			<!--[if IE]>
				<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
			<![endif]-->
			<meta name="msapplication-TileColor" content="#f01d4f">
			<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/win8-tile-icon.png">
	    	<meta name="theme-color" content="#121212">
	    <?php } ?>
		<link href="https://fonts.googleapis.com/css?family=Saira:300,400,700|Monoton" rel="stylesheet">
		<script src="https://use.fontawesome.com/5fd4c2bd7a.js"></script>
		
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

		<!-- Drop Google Analytics here -->
		<!-- end analytics -->

	</head>
	
	<!-- Uncomment this line if using the Off-Canvas Menu --> 
		
	<body <?php body_class(); ?>>
		<div class="wrapper">

			<div class="header">
				<div class="row header-container">
					<div class="small-4 medium-4 columns">
						<div id="hamburger">
							<span></span>
							<span></span>
							<span></span>
						</div>
					</div>
					<div class="small-8 medium-4 columns">
						<a href="/"><h1 class="logo">JKR</h1></a>
					</div>
					<div class="hide-for-small-only small-4 medium-4 columns nav-social">
						<a href="https://www.facebook.com/jrkingsly" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href="https://www.linkedin.com/in/justin-rosen-01154136/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
						<a href="mailto:j11622@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
					</div>			
				</div>
				<nav id="nav">
					<div class="row">
						<div class="hide-for-small-only">
							<div class="small-12 columns">
								<?php wp_nav_menu( array( 'theme_location' => 'main-nav' ) ); ?>
							</div>
						</div>
						<div class="show-for-small-only">
							<div class="small-8 columns">
								<?php wp_nav_menu( array( 'theme_location' => 'main-nav' ) ); ?>
							</div>
							<div class="small-4 columns nav-social-mobile">
								<a href="https://www.facebook.com/jrkingsly" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href="https://www.linkedin.com/in/justin-rosen-01154136/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
						<a href="mailto:j11622@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
							</div>	
						</div>		
					</div>		
				</nav>		
			</div>
			
			<div class="body-content">	