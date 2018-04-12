<?php
/**
 * Theme Customizer
 *
 * @package Surya_Chandra
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function surya_chandra_customize_register( $wp_customize ) {

	// Load custom controls.
	require trailingslashit( get_template_directory() ) . 'inc/customizer/controls.php';

	// Register custom section types.
	$wp_customize->register_section_type( 'Surya_Chandra_Customize_Section_Upsell' );

	// Load customize helpers.
	require trailingslashit( get_template_directory() ) . 'inc/helper/options.php';

	// Load customize option.
	require trailingslashit( get_template_directory() ) . 'inc/customizer/option.php';

	// Load customize sanitize.
	require trailingslashit( get_template_directory() ) . 'inc/customizer/sanitize.php';

	// Load customize callback.
	require trailingslashit( get_template_directory() ) . 'inc/customizer/callback.php';

	$wp_customize->get_setting( 'blogname' )->transport        = 'refresh';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'refresh';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';
		$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'surya_chandra_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'surya_chandra_customize_partial_blogdescription',
		) );
	}

	// Register sections.
	$wp_customize->add_section(
		new Surya_Chandra_Customize_Section_Upsell(
			$wp_customize,
			'theme_upsell',
			array(
				'title'    => esc_html__( 'Surya Chandra', 'surya-chandra-lite' ),
				'pro_text' => esc_html__( 'Buy Pro from ThemeForest', 'surya-chandra-lite' ),
				'pro_url'  => 'https://themeforest.net/item/surya-chandra-responsive-multipurpose-wordpress-theme/20908840?ref=wenthemes',
				'priority'  => 1,
			)
		)
	);
}

add_action( 'customize_register', 'surya_chandra_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function surya_chandra_customize_partial_blogname() {

	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function surya_chandra_customize_partial_blogdescription() {

	bloginfo( 'description' );
}

/**
 * Customizer control scripts and styles.
 *
 * @since 1.0.0
 */
function surya_chandra_customizer_control_scripts() {

	$min = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

	wp_enqueue_style( 'surya-chandra-customize-controls', get_template_directory_uri() . '/css/customize-controls' . $min . '.css' );
	wp_enqueue_script( 'surya-chandra-customize-controls', get_template_directory_uri() . '/js/customize-controls' . $min . '.js', array( 'customize-controls' ) );
}

add_action( 'customize_controls_enqueue_scripts', 'surya_chandra_customizer_control_scripts', 0 );
