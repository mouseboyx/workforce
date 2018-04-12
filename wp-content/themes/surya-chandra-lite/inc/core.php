<?php
/**
 * Core functions
 *
 * @package Surya_Chandra
 */

if ( ! function_exists( 'surya_chandra_get_option' ) ) :

	/**
	 * Get theme option.
	 *
	 * @since 1.0.0
	 *
	 * @param string $key Option key.
	 * @return mixed Option value.
	 */
	function surya_chandra_get_option( $key = '' ) {

		$default_options = surya_chandra_get_default_theme_options();

		if ( empty( $key ) ) {
			return;
		}

		$theme_options = (array) get_theme_mod( 'theme_options' );
		$theme_options = wp_parse_args( $theme_options, $default_options );

		$value = null;

		if ( isset( $theme_options[ $key ] ) ) {
			$value = $theme_options[ $key ];
		}

		return $value;
	}

endif;
