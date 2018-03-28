<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/css/mdb.min.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>
		<!-- header -->
		<header class="header-container">
			<!-- nav -->

			<nav class="navbar navbar-expand-md navbar-light">
				<form class="form-inline my-2 my-lg-0" id="searchbar">
				      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				    </form>
				<div class="container-fluid nowrap">
	      			<a class="navbar-brand" href="<?php echo home_url(); ?>/home">
	      				<div class="header-logos">
	      					<img class="img-fluid" id="workforce-logo" src="http://workforce.test/wp-content/uploads/2018/03/workforce-logo-2.png" alt="Workforce Partnership">
	      					<img class="img-fluid" id="kworks-logo" src="http://workforce.test/wp-content/uploads/2018/03/kansas-works-2.png" alt="Kansas Works">
	      				</div>
	      			</a>
	      			<button class="navbar-toggler" id="toggle-btn" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
	        			<span class="navbar-toggler-icon"></span>
	      			</button>

		      		<div class="collapse navbar-collapse align-end" id="navbarCollapse">

		      			<?php
					        wp_nav_menu( array(
					            'theme_location'    => 'primary',
					            'depth'             => 2,
					            'container'         => 'div',
					            'container_class'   => 'collapse navbar-collapse',
					            'container_id'      => 'bs-example-navbar-collapse-1',
					            'menu_class'        => 'nav navbar-nav',
					            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
					            'walker'            => new WP_Bootstrap_Navwalker()
							) );
				        ?>
		      		</div>
		      </div>
    		</nav>
		</header>
			<!-- /header -->
			<!-- wrapper -->
		<div class="wrapper">
