<?php
/**
 * Support for Site Origin builder
 *
 * @package Surya_Chandra
 */

if ( ! function_exists( 'surya_chandra_register_so_widgets_folder' ) ) :

	/**
	 * Register widget folders.
	 *
	 * @since 1.0.0
	 *
	 * @param array $folders Folders.
	 * @return array Modified folders.
	 */
	function surya_chandra_register_so_widgets_folder( $folders ) {

		$folders[] = trailingslashit( get_template_directory() ) . 'inc/so-widgets/';
		return $folders;
	}

endif;

add_filter( 'siteorigin_widgets_widget_folders', 'surya_chandra_register_so_widgets_folder' );

if ( ! function_exists( 'surya_chandra_add_tab_in_so_builder_widgets_panel' ) ) :

	/**
	 * Add tab in builder widgets section.
	 *
	 * @since 1.0.0
	 *
	 * @param array $tabs Tabs.
	 * @return array Modified tabs.
	 */
	function surya_chandra_add_tab_in_so_builder_widgets_panel( $tabs ) {

		$tabs['surya-chandra'] = array(
			'title'  => esc_html__( 'Surya Chandra Widgets', 'surya-chandra-lite' ),
			'filter' => array(
				'groups' => array( 'surya-chandra' ),
			),
		);

		return $tabs;
	}

endif;

add_filter( 'siteorigin_panels_widget_dialog_tabs', 'surya_chandra_add_tab_in_so_builder_widgets_panel' );

if ( ! function_exists( 'surya_chandra_group_theme_widgets_in_so_builder' ) ) :

	/**
	 * Grouping theme widgets in builder.
	 *
	 * @since 1.0.0
	 *
	 * @param array $widgets Widgets array.
	 * @return array Modified widgets array.
	 */
	function surya_chandra_group_theme_widgets_in_so_builder( $widgets ) {

		if ( isset( $GLOBALS['wp_widget_factory'] ) && ! empty( $GLOBALS['wp_widget_factory']->widgets ) ) {

			$all_widgets = array_keys( $GLOBALS['wp_widget_factory']->widgets );

			foreach ( $all_widgets as $widget ) {
				if ( false !== strpos( $widget, 'Surya_Chandra_' ) ) {
					$widgets[ $widget ]['groups'] = array( 'surya-chandra' );
					$widgets[ $widget ]['icon']   = 'dashicons dashicons-awards';
				}
			}
		}

		return $widgets;
	}

endif;

add_filter( 'siteorigin_panels_widgets', 'surya_chandra_group_theme_widgets_in_so_builder' );

if ( ! function_exists( 'surya_chandra_custom_fields_class_prefixes' ) ) :

	/**
	 * Class prefixes.
	 *
	 * @since 1.0.0
	 *
	 * @param array $class_prefixes Array of prefixes.
	 * @return array Modified array.
	 */
	function surya_chandra_custom_fields_class_prefixes( $class_prefixes ) {

		$class_prefixes[] = 'Surya_Chandra_Field_';
		return $class_prefixes;
	}
endif;

add_filter( 'siteorigin_widgets_field_class_prefixes', 'surya_chandra_custom_fields_class_prefixes' );

if ( ! function_exists( 'surya_chandra_custom_fields_class_paths' ) ) :

	/**
	 * Class paths.
	 *
	 * @since 1.0.0
	 *
	 * @param array $class_paths Array of class paths.
	 * @return array Modified array.
	 */
	function surya_chandra_custom_fields_class_paths( $class_paths ) {

		$class_paths[] = trailingslashit( get_template_directory() ) . 'inc/so-fields/';
		return $class_paths;
	}
endif;

add_filter( 'siteorigin_widgets_field_class_paths', 'surya_chandra_custom_fields_class_paths' );

if ( ! function_exists( 'surya_chandra_customize_default_row_style_fields' ) ) :

	/**
	 * Row style fields.
	 *
	 * @since 1.0.0
	 *
	 * @param array $fields Array of fields.
	 * @return array Modified array.
	 */
	function surya_chandra_customize_default_row_style_fields( $fields ) {

		$fields['row_stretch']['default'] = 'full';

		return $fields;
	}
endif;

add_filter( 'siteorigin_panels_row_style_fields', 'surya_chandra_customize_default_row_style_fields' );

if ( ! function_exists( 'surya_chandra_customize_builder_widget_style_fields' ) ) :

	/**
	 * Customize widget style fields.
	 *
	 * @since 1.0.0
	 *
	 * @param array $fields  Style fields.
	 * @param int   $post_id Post ID.
	 * @param array $args    Arguments.
	 * @return array Modified fields.
	 */
	function surya_chandra_customize_builder_widget_style_fields( $fields, $post_id, $args ) {

		$fields['widget_title_color'] = array(
			'name'     => esc_html__( 'Widget Title Color', 'surya-chandra-lite' ),
			'type'     => 'color',
			'default'  => '#000',
			'group'    => 'design',
			'priority' => 1,
		);
		$fields['widget_subtitle_color'] = array(
			'name'     => esc_html__( 'Widget Subtitle Color', 'surya-chandra-lite' ),
			'type'     => 'color',
			'default'  => '#4f5d75',
			'group'    => 'design',
			'priority' => 1,
		);

		return $fields;
	}

endif;

add_filter( 'siteorigin_panels_widget_style_fields', 'surya_chandra_customize_builder_widget_style_fields', 10, 3 );

if ( ! function_exists( 'surya_chandra_custom_widget_common_styles' ) ) :

	/**
	 * Custom widget style CSS.
	 *
	 * @since 1.0.0
	 *
	 * @param array   $css         CSS.
	 * @param array   $panels_data Panel data.
	 * @param WP_Post $post_id     Post ID.
	 * @param array   $layout_data Layout data.
	 * @return array Modified CSS.
	 */
	function surya_chandra_custom_widget_common_styles( $css, $panels_data, $post_id, $layout_data ) {

		if ( ! empty( $layout_data ) ) {
			foreach ( $layout_data as $ri => $row ) {
				if ( empty( $row['cells'] ) ) {
					continue;
				}

				foreach ( $row['cells'] as $ci => $cell ) {

					if ( empty( $cell['widgets'] ) ) {
						continue;
					}

					foreach ( $cell['widgets'] as $wi => $widget ) {

						if ( empty( $widget['panels_info'] ) ) {
							continue;
						}

						if ( ! empty( $widget['panels_info']['style']['widget_title_color'] ) ) {
							$css->add_widget_css( $post_id, $ri, $ci, $wi, ' .widget-title', array(
								'color' => $widget['panels_info']['style']['widget_title_color'],
							) );
						}

						if ( ! empty( $widget['panels_info']['style']['widget_subtitle_color'] ) ) {
							$css->add_widget_css( $post_id, $ri, $ci, $wi, ' .widget-subtitle', array(
								'color' => $widget['panels_info']['style']['widget_subtitle_color'],
							) );
						}
					}
				}
			}
		}

		return $css;
	}

endif;

add_filter( 'siteorigin_panels_css_object', 'surya_chandra_custom_widget_common_styles', 10, 4 );

if ( ! function_exists( 'surya_chandra_panels_row_style_attributes' ) ) :

	/**
	 * Add custom attributes in row.
	 *
	 * @since 1.0.0
	 *
	 * @param array $attr  Attributes.
	 * @param array $style Widget style.
	 * @return array Modified attributes.
	 */
	function surya_chandra_panels_row_style_attributes( $attr, $style ) {

		if ( isset( $style['row_stretch'] ) && 'full' === $style['row_stretch'] ) {
			$attr['class'][] = 'panel-row-style-full-width';
		}

		if ( isset( $style['row_stretch'] ) && 'full-stretched' === $style['row_stretch'] ) {
			$attr['class'][] = 'panel-row-style-full-stretched';
		}

		if ( isset( $style['background_image_attachment'] ) && ! empty( $style['background_image_attachment'] ) ) {
			$attr['class'][] = 'background-overlay-enabled';
		}

		return $attr;
	}

endif;

add_filter( 'siteorigin_panels_row_style_attributes', 'surya_chandra_panels_row_style_attributes', 10, 2 );

if ( ! function_exists( 'surya_chandra_customize_so_features_template_file' ) ) :

	/**
	 * Customize so features template files.
	 *
	 * @since 1.0.0
	 *
	 * @param string $filename Filename.
	 * @return string Modified filename.
	 */
	function surya_chandra_customize_so_features_template_file( $filename ) {

		$filename = trailingslashit( get_template_directory() ) . 'inc/so-widgets/features/tpl/default.php';
		return $filename;
	}

endif;

add_filter( 'siteorigin_widgets_template_file_sow-features', 'surya_chandra_customize_so_features_template_file' );

if ( ! function_exists( 'surya_chandra_customize_so_features_form_fields' ) ) :

	/**
	 * Customize so features form fields.
	 *
	 * @since 1.0.0
	 *
	 * @param array $form_options Form options.
	 * @param array $widget Widget details.
	 * @return array Modified form options.
	 */
	function surya_chandra_customize_so_features_form_fields( $form_options, $widget ) {

		$extra_fields = array(
			'title' => array(
				'type' => 'text',
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
			);

		$form_options = array_merge( $extra_fields, $form_options );
		return $form_options;
	}

endif;

add_filter( 'siteorigin_widgets_form_options_sow-features', 'surya_chandra_customize_so_features_form_fields', 10, 2 );

if ( ! function_exists( 'surya_chandra_customize_so_widgets_status' ) ) :

	/**
	 * Make widgets active.
	 *
	 * @since 1.0.0
	 *
	 * @param array $active Array of widgets.
	 * @return array Modified array.
	 */
	function surya_chandra_customize_so_widgets_status( $active ) {

		$active['sow-google-map']             = true;
		$active['google-map']                 = true;
		$active['sow-testimonial']            = true;
		$active['testimonial']                = true;
		$active['sow-features']               = true;
		$active['features']                   = true;
		$active['sow-hero']                   = true;
		$active['hero']                       = true;
		$active['surya-chandra-cta']          = true;
		$active['cta']                        = true;
		$active['surya-chandra-latest-news']  = true;
		$active['latest-news']                = true;
		$active['surya-chandra-recent-posts'] = true;
		$active['recent-posts']               = true;
		$active['surya-chandra-special-page'] = true;
		$active['special-page']               = true;

		return $active;
	}

endif;

add_filter( 'siteorigin_widgets_active_widgets', 'surya_chandra_customize_so_widgets_status' );
