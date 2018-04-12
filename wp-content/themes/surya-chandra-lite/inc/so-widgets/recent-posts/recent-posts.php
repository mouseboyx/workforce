<?php
/**
 * Recent posts widget
 *
 * Widget Name: Surya Chandra Recent Posts
 * Description: Displays recent posts.
 * Author: WEN Themes
 * Author URI: https://wenthemes.com
 *
 * @package Surya_Chandra
 */

/**
 * Recent posts widget class.
 *
 * @since 1.0.0
 */
class Surya_Chandra_Recent_Posts_Widget extends SiteOrigin_Widget {

	/**
	 * Constructor.
	 *
	 * @since 1.0.0
	 */
	function __construct() {

		parent::__construct(
			'surya-chandra-recent-posts',
			esc_html__( 'Surya Chandra: Recent Posts', 'surya-chandra-lite' ),
			array(
				'description' => esc_html__( 'Displays recent posts.', 'surya-chandra-lite' ),
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
			'featured_image' => array(
				'label'   => esc_html__( 'Featured Image', 'surya-chandra-lite' ),
				'type'    => 'select',
				'default' => 'thumbnail',
				'options' => surya_chandra_get_image_sizes_options( true, array( 'disable', 'thumbnail' ), false ),
				),
			'image_width' => array(
				'label'       => esc_html__( 'Image Width', 'surya-chandra-lite' ),
				'description' => esc_html__( 'in px', 'surya-chandra-lite' ),
				'type'        => 'number',
				'default'     => 70,
				),
			'disable_date' => array(
				'label'   => esc_html__( 'Disable Date', 'surya-chandra-lite' ),
				'type'    => 'checkbox',
				'default' => false,
				),
			);
	}

}

siteorigin_widget_register( 'surya-chandra-recent-posts', __FILE__, 'Surya_Chandra_Recent_Posts_Widget' );
