<?php
/**
 * Header template
 *
 * @package Surya_Chandra
 */

?>

<header id="masthead" class="site-header">
	<div class="container">

		<?php surya_chandra_render_site_branding(); ?>

		<div id="header-right">
			<a href="#" class="search-icon"><i class="fa fa-search"></i></a>
		</div><!-- #header-right -->

		<div id="main-navigation">
			<nav id="site-navigation" class="main-navigation">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'fallback_cb'    => 'surya_chandra_primary_navigation_fallback',
				) );
				?>
			</nav><!-- #site-navigation -->
		</div><!-- #main-navigation -->

		<div class="search-box-wrap">
			<div class="container">
				<?php get_search_form(); ?>
			</div><!-- .container -->
		</div><!-- .search-box-wrap -->
	</div><!-- .container -->
</header><!-- #masthead -->

