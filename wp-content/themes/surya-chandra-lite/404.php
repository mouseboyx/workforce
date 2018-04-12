<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Surya_Chandra
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<div class="error-heading">
					<h2><?php esc_html_e( '404', 'surya-chandra-lite' ); ?></h2>
					<h3><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'surya-chandra-lite' ); ?></h3>
				</div><!-- .error-heading -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'surya-chandra-lite' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .page-content -->

				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-404',
					'depth'          => 1,
					'container'      => 'div',
					'container_id'   => 'quick-links-404',
					'fallback_cb'    => false,
					) );
				?>
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
