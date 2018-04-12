<?php
/**
 * Special page widget
 *
 * Widget Name: Surya Chandra Special Page
 * Description: Displays single page.
 * Author: WEN Themes
 * Author URI: https://wenthemes.com
 *
 * @package Surya_Chandra
 */

/**
 * Special page widget class.
 *
 * @since 1.0.0
 */
class Surya_Chandra_Special_Page_Widget extends SiteOrigin_Widget {

	/**
	 * Constructor.
	 *
	 * @since 1.0.0
	 */
	function __construct() {

		parent::__construct(
			'surya-chandra-special-page',
			esc_html__( 'Surya Chandra: Special Page', 'surya-chandra-lite' ),
			array(
				'description' => esc_html__( 'Displays single page.', 'surya-chandra-lite' ),
			),
			array(),
			false,
			plugin_dir_path( __FILE__ )
		);
	}

	/**
	 * Get widget form.
	 *
	 * @since 1.0.0
	 *
	 * @return array Widget form.
	 */
	function get_widget_form() {

		return array(
			'title' => array(
				'type'  => 'text',
				'label' => esc_html__( 'Title', 'surya-chandra-lite' ),
				),
			'subtitle' => array(
				'type'  => 'text',
				'label' => esc_html__( 'Subtitle', 'surya-chandra-lite' ),
				),
			'heading_alignment' => array(
				'label'   => esc_html__( 'Title/subtitle Alignment', 'surya-chandra-lite' ),
				'type'    => 'select',
				'default' => 'center',
				'options' => surya_chandra_get_heading_alignment_options(),
				),
			'special_page_id' => array(
				'label'           => esc_html__( 'Select Page:', 'surya-chandra-lite' ),
				'type'            => 'page-dropdown',
				'show_option_none' => esc_html__( '&mdash; Select &mdash;', 'surya-chandra-lite' ),
				),
			'featured_image' => array(
				'label'   => esc_html__( 'Featured Image', 'surya-chandra-lite' ),
				'type'    => 'select',
				'default' => 'medium',
				'options' => surya_chandra_get_image_sizes_options(),
				),
			'featured_image_alignment' => array(
				'label'   => esc_html__( 'Image Alignment', 'surya-chandra-lite' ),
				'type'    => 'select',
				'default' => 'left',
				'options' => surya_chandra_get_alignment_options(),
				),
			);
	}

}

siteorigin_widget_register( 'surya-chandra-special-page', __FILE__, 'Surya_Chandra_Special_Page_Widget' );
