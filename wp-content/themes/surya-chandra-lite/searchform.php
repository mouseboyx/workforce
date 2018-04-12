<?php
/**
 * Template for displaying search form
 *
 * @package Surya_Chandra
 */

?>

<?php $unique_id = uniqid( 'search-form-' ); ?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="<?php echo esc_attr( $unique_id ); ?>">
		<span class="screen-reader-text"><?php echo esc_html_x( 'Search for:', 'label', 'surya-chandra-lite' ); ?></span>
	</label>
	<input type="search" id="<?php echo esc_attr( $unique_id ); ?>" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'surya-chandra-lite' ); ?>" value="<?php the_search_query(); ?>" name="s" />
	<a href="#" class="btn btn-close-search"><?php echo esc_html_x( 'X', 'close search button', 'surya-chandra-lite' ); ?></a>
	<input type="submit" class="search-submit" value="&#xf002;" />
</form><!-- .search-form -->
