<?php
/**
 * Default theme options
 *
 * @package Surya_Chandra
 */

if ( ! function_exists( 'surya_chandra_get_default_theme_options' ) ) :

	/**
	 * Get default theme options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Default theme options.
	 */
	function surya_chandra_get_default_theme_options() {

		$defaults = array();

		// Title tagline.
		$defaults['show_title']   = true;
		$defaults['show_tagline'] = true;

		// Header.
		$defaults['header_layout']     = 1;
		$defaults['contact_number']    = '';
		$defaults['contact_email']     = '';
		$defaults['contact_address']   = '';
		$defaults['quote_button_text'] = '';
		$defaults['quote_button_url']  = '';

		// Layout.
		$defaults['global_layout']           = 'right-sidebar';
		$defaults['archive_layout']          = 'grid';
		$defaults['archive_image']           = 'large';
		$defaults['archive_image_alignment'] = 'center';

		// Blog.
		$defaults['blog_title']     = esc_html__( 'Blog', 'surya-chandra-lite' );
		$defaults['excerpt_length'] = 40;
		$defaults['read_more_text'] = esc_html__( 'Read More', 'surya-chandra-lite' );

		// Footer.
		$defaults['copyright_text'] = esc_html__( 'Copyright &copy; All rights reserved.', 'surya-chandra-lite' );

		// Pass through filter.
		$defaults = apply_filters( 'surya_chandra_filter_default_theme_options', $defaults );
		return $defaults;
	}

endif;
