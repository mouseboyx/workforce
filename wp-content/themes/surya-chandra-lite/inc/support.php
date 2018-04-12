<?php
/**
 * Theme supports
 *
 * @package Surya_Chandra
 */

// Load WooCommerce Support.
if ( class_exists( 'WooCommerce' ) ) :
	require_once get_template_directory() . '/inc/supports/woocommerce.php';
endif;
