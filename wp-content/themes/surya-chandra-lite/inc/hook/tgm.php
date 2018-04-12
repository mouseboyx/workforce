<?php
/**
 * Recommended plugins
 *
 * @package Surya_Chandra
 */

if ( ! function_exists( 'surya_chandra_recommended_plugins' ) ) :

	/**
	 * Recommend plugins.
	 *
	 * @since 1.0.0
	 */
	function surya_chandra_recommended_plugins() {

		$plugins = array(
			array(
				'name'     => esc_html__( 'Page Builder by SiteOrigin', 'surya-chandra-lite' ),
				'slug'     => 'siteorigin-panels',
				'required' => false,
			),
			array(
				'name'     => esc_html__( 'SiteOrigin Widgets Bundle', 'surya-chandra-lite' ),
				'slug'     => 'so-widgets-bundle',
				'required' => false,
			),
			array(
				'name'     => esc_html__( 'Contact Form 7', 'surya-chandra-lite' ),
				'slug'     => 'contact-form-7',
				'required' => false,
			),
			array(
				'name'     => esc_html__( 'WooCommerce', 'surya-chandra-lite' ),
				'slug'     => 'woocommerce',
				'required' => false,
			),
			array(
				'name'     => esc_html__( 'One Click Demo Import', 'surya-chandra-lite' ),
				'slug'     => 'one-click-demo-import',
				'required' => false,
			),
		);

		tgmpa( $plugins );

	}

endif;

add_action( 'tgmpa_register', 'surya_chandra_recommended_plugins' );
