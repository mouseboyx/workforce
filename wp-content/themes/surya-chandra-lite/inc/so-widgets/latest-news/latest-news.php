<?php
/**
 * Latest news widget
 *
 * Widget Name: Surya Chandra Latest News
 * Description: Displays latest posts in grid.
 * Author: WEN Themes
 * Author URI: https://wenthemes.com
 *
 * @package Surya_Chandra
 */

/**
 * Latest news widget class.
 *
 * @since 1.0.0
 */
class Surya_Chandra_Latest_News_Widget extends SiteOrigin_Widget {

	/**
	 * Constructor.
	 *
	 * @since 1.0.0
	 */
	function __construct() {

		parent::__construct(
			'surya-chandra-latest-news',
			esc_html__( 'Surya Chandra: Latest News', 'surya-chandra-lite' ),
			array(
				'description' => esc_html__( 'Displays latest posts in grid.', 'surya-chandra-lite' ),
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
			'post_category' => array(
				'label'           => esc_html__( 'Select Category:', 'surya-chandra-lite' ),
				'type'            => 'taxonomy-dropdown',
				'show_option_all' => esc_html__( 'All Categories', 'surya-chandra-lite' ),
				),
			'post_number' => array(
				'label'   => esc_html__( 'Number of Posts', 'surya-chandra-lite' ),
				'type'    => 'number',
				'default' => 3,
				),
			'post_column' => array(
				'label'   => esc_html__( 'Number of Columns', 'surya-chandra-lite' ),
				'type'    => 'select',
				'default' => 3,
				'options' => surya_chandra_get_numbers_dropdown_options( 2, 4 ),
				),
			'featured_image' => array(
				'label'   => esc_html__( 'Featured Image', 'surya-chandra-lite' ),
				'type'    => 'select',
				'default' => 'large',
				'options' => surya_chandra_get_image_sizes_options( false ),
				),
			'more_text' => array(
				'label'   => esc_html__( 'More Text', 'surya-chandra-lite' ),
				'type'    => 'text',
				'default' => esc_html__( 'Know More', 'surya-chandra-lite' ),
				),
			'excerpt_length' => array(
				'label'       => esc_html__( 'Excerpt Length', 'surya-chandra-lite' ),
				'description' => esc_html__( 'in words', 'surya-chandra-lite' ),
				'type'        => 'number',
				'default'     => 15,
				),
			'explore_button_text' => array(
				'label'   => esc_html__( 'Explore Button Text', 'surya-chandra-lite' ),
				'type'    => 'text',
				'default' => esc_html__( 'Explore More', 'surya-chandra-lite' ),
				),
			'explore_button_url' => array(
				'label'   => esc_html__( 'Explore Button URL', 'surya-chandra-lite' ),
				'type'    => 'link',
				'default' => '',
				),
			);
	}

}

siteorigin_widget_register( 'surya-chandra-latest-news', __FILE__, 'Surya_Chandra_Latest_News_Widget' );
