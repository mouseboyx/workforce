<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Surya_Chandra
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			// Author bio.
			if ( 'post' === get_post_type() ) :
				get_template_part( 'template-parts/author-bio' );
			endif;

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
	/**
	 * Hook - surya_chandra_action_sidebar.
	 *
	 * @hooked: surya_chandra_add_sidebar - 10
	 */
	do_action( 'surya_chandra_action_sidebar' );
?>

<?php get_footer();
