<?php
/**
 * CTA widget
 *
 * Widget Name: Surya Chandra CTA
 * Description: A simple call to action widget.
 * Author: WEN Themes
 * Author URI: https://wenthemes.com
 *
 * @package Surya_Chandra
 */

/**
 * CTA widget class.
 *
 * @since 1.0.0
 */
class Surya_Chandra_CTA_Widget extends SiteOrigin_Widget {

	/**
	 * Constructor.
	 *
	 * @since 1.0.0
	 */
	function __construct() {

		parent::__construct(
			'surya-chandra-cta',
			esc_html__( 'Surya Chandra: CTA', 'surya-chandra-lite' ),
			array(
				'description' => esc_html__( 'A simple call to action widget.', 'surya-chandra-lite' ),
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
				'type'  => 'textarea',
				'label' => esc_html__( 'Subtitle', 'surya-chandra-lite' ),
				),
			'primary_button_text' => array(
				'type'    => 'text',
				'label'   => esc_html__( 'Primary Button Text', 'surya-chandra-lite' ),
				'default' => esc_html__( 'Learn More', 'surya-chandra-lite' ),
				),
			'primary_button_url' => array(
				'type'    => 'link',
				'label'   => esc_html__( 'Primary Button URL', 'surya-chandra-lite' ),
				'default' => '#',
				),
			'secondary_button_text' => array(
				'type'  => 'text',
				'label' => esc_html__( 'Secondary Button Text', 'surya-chandra-lite' ),
				),
			'secondary_button_url' => array(
				'type'  => 'link',
				'label' => esc_html__( 'Secondary Button URL', 'surya-chandra-lite' ),
				),
			'settings' => array(
				'type'   => 'section',
				'label'  => esc_html__( 'Settings', 'surya-chandra-lite' ),
				'hide'   => false,
				'fields' => array(
					'cta_layout' => array(
						'type'    => 'radio',
						'label'   => esc_html__( 'Select Layout', 'surya-chandra-lite' ),
						'default' => 1,
						'options' => array(
							1 => esc_html__( 'Layout 1', 'surya-chandra-lite' ),
							2 => esc_html__( 'Layout 2', 'surya-chandra-lite' ),
							),
						),
					'cta_title_color' => array(
						'type'    => 'color',
						'label'   => esc_html__( 'Title Color', 'surya-chandra-lite' ),
						'default' => '#FFF',
						),
					'cta_subtitle_color' => array(
						'type'    => 'color',
						'label'   => esc_html__( 'Subtitle Color', 'surya-chandra-lite' ),
						'default' => '#CCC',
						),
					'cta_background_color' => array(
						'type'        => 'color',
						'label'       => esc_html__( 'Background Color', 'surya-chandra-lite' ),
						'default'     => '#00AEF0',
						'description' => esc_html__( 'Applies to Layout 1 only.', 'surya-chandra-lite' ),
						),
					),
				),

			);
	}

	/**
	 * Less variables.
	 *
	 * @since 1.0.0
	 *
	 * @param array $instance Widget instance.
	 * @return array Less variables.
	 */
	function get_less_variables( $instance ) {
		if ( empty( $instance ) ) {
			return array();
		}

		return array(
			'cta_title_color'      => $instance['settings']['cta_title_color'],
			'cta_subtitle_color'   => $instance['settings']['cta_subtitle_color'],
			'cta_background_color' => $instance['settings']['cta_background_color'],
		);
	}

}

siteorigin_widget_register( 'surya-chandra-cta', __FILE__, 'Surya_Chandra_CTA_Widget' );
