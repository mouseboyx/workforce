<?php
/**
 * WooCommerce support.
 *
 * @package Surya_Chandra
 */

if ( ! class_exists( 'WooCommerce' ) ) {
	return;
}

/**
 * Woocommerce setup.
 *
 * @since 1.0.0
 */
function surya_chandra_woo_setup() {

	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}

add_action( 'after_setup_theme', 'surya_chandra_woo_setup', 11 );

// Wrapper.
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

add_action( 'woocommerce_before_main_content', 'surya_chandra_woo_wrapper_start', 10 );
add_action( 'woocommerce_after_main_content', 'surya_chandra_woo_wrapper_end', 10 );

/**
 * Woocommerce content wrapper start.
 *
 * @since 1.0.0
 */
function surya_chandra_woo_wrapper_start() {

	echo '<div id="primary">';
	echo '<main role="main" class="site-main" id="main">';
}

/**
 * Woocommerce content wrapper end.
 *
 * @since 1.0.0
 */
function surya_chandra_woo_wrapper_end() {

	echo '</main><!-- #main -->';
	echo '</div><!-- #primary -->';
}

/**
 * Woocommerce breadcrumb defaults.
 *
 * @since 1.0.0
 *
 * @param array $defaults Breadcrumb defaults.
 * @return array Modified breadcrumb defaults.
 */
function surya_chandra_woo_breadcrumb_defaults( $defaults ) {

	$defaults['delimiter']   = '';
	$defaults['wrap_before'] = '<div id="breadcrumb"><div class="container"><div class="breadcrumb-wrapper breadcrumbs"><ul>';
	$defaults['wrap_after']  = '</ul></div></div></div>';
	$defaults['before']      = '<li>';
	$defaults['after']       = '</li>';

	return $defaults;
}

add_filter( 'woocommerce_breadcrumb_defaults', 'surya_chandra_woo_breadcrumb_defaults' );

/**
 * Custom archive title.
 *
 * @since 1.0.0
 *
 * @param array $title Title.
 * @return array Modified title.
 */
function surya_chandra_woo_custom_archive_title( $title ) {

	if ( is_woocommerce() && ! is_singular( 'product' ) ) {
		$title = woocommerce_page_title( false );
	}

	return $title;
}

add_filter( 'surya_chandra_filter_banner_title', 'surya_chandra_woo_custom_archive_title', 11 );

/**
 * Add secondary sidebar.
 *
 * @since 1.0.0
 */
function surya_chandra_woo_add_secondary_sidebar() {

	$global_layout = surya_chandra_get_option( 'global_layout' );
	$global_layout = apply_filters( 'surya_chandra_filter_theme_global_layout', $global_layout );

	switch ( $global_layout ) {
		case 'three-columns':
			get_sidebar( 'secondary' );
			break;

		default:
			break;
	}
}

/**
 * Hooking WooCommerce.
 *
 * @since 1.0.0
 */
function surya_chandra_woo_hooking() {

	// Fix breadcrumb.
	if ( is_woocommerce() ) {
		remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
		add_action( 'surya_chandra_action_breadcrumb', 'woocommerce_breadcrumb', 10 );
		remove_action( 'surya_chandra_action_breadcrumb', 'surya_chandra_add_breadcrumb', 10 );
	}

	// Hide page title.
	add_filter( 'woocommerce_show_page_title', '__return_false' );

	// Hide product title.
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );

	// Add secondary sidebar.
	add_action( 'woocommerce_sidebar', 'surya_chandra_woo_add_secondary_sidebar', 11 );

	// Fix primary sidebar.
	$global_layout = surya_chandra_get_option( 'global_layout' );
	$global_layout = apply_filters( 'surya_chandra_filter_theme_global_layout', $global_layout );
	if ( in_array( $global_layout, array( 'no-sidebar' ), true ) ) {
		remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
	}

	// Loop columns.
	add_filter( 'loop_shop_columns', 'surya_chandra_woo_loop_columns' );
}

add_action( 'wp', 'surya_chandra_woo_hooking' );

/**
 * Modify loop columns.
 *
 * @since 1.0.0
 *
 * @param int $column Loop column.
 * @return int Modified column.
 */
function surya_chandra_woo_loop_columns( $column ) {

	$column = 3;
	return $column;
}
