<?php
/**
 * Helper functions related to customizer and options.
 *
 * @package Surya_Chandra
 */

if ( ! function_exists( 'surya_chandra_get_image_sizes_options' ) ) :

	/**
	 * Returns image sizes options.
	 *
	 * @since 1.0.0
	 *
	 * @param bool  $add_disable    True for adding No Image option.
	 * @param array $allowed        Allowed image size options.
	 * @param bool  $show_dimension True to show dimension.
	 * @return array Image size options.
	 */
	function surya_chandra_get_image_sizes_options( $add_disable = true, $allowed = array(), $show_dimension = true ) {

		global $_wp_additional_image_sizes;

		$choices = array();
		if ( true === $add_disable ) {
			$choices['disable'] = esc_html__( 'No Image', 'surya-chandra-lite' );
		}

		$choices['thumbnail'] = esc_html__( 'Thumbnail', 'surya-chandra-lite' );
		$choices['medium']    = esc_html__( 'Medium', 'surya-chandra-lite' );
		$choices['large']     = esc_html__( 'Large', 'surya-chandra-lite' );
		$choices['full']      = esc_html__( 'Full (original)', 'surya-chandra-lite' );

		if ( true === $show_dimension ) {
			foreach ( array( 'thumbnail', 'medium', 'large' ) as $key => $_size ) {
				$choices[ $_size ] = $choices[ $_size ] . ' (' . get_option( $_size . '_size_w' ) . 'x' . get_option( $_size . '_size_h' ) . ')';
			}
		}

		if ( ! empty( $_wp_additional_image_sizes ) && is_array( $_wp_additional_image_sizes ) ) {
			foreach ( $_wp_additional_image_sizes as $key => $size ) {
				$choices[ $key ] = $key;
				if ( true === $show_dimension ) {
					$choices[ $key ] .= ' (' . $size['width'] . 'x' . $size['height'] . ')';
				}
			}
		}

		if ( ! empty( $allowed ) ) {
			foreach ( $choices as $key => $value ) {
				if ( ! in_array( $key, $allowed, true ) ) {
					unset( $choices[ $key ] );
				}
			}
		}

		return $choices;
	}

endif;

if ( ! function_exists( 'surya_chandra_get_alignment_options' ) ) :

	/**
	 * Returns alignment options.
	 *
	 * @since 1.0.0
	 *
	 * @param array $allowed Allowed options.
	 *
	 * @return array Options array.
	 */
	function surya_chandra_get_alignment_options( $allowed = array() ) {

		$output = array();
		$choices = array(
			'none'   => esc_html_x( 'None', 'alignment', 'surya-chandra-lite' ),
			'left'   => esc_html_x( 'Left', 'alignment', 'surya-chandra-lite' ),
			'center' => esc_html_x( 'Center', 'alignment', 'surya-chandra-lite' ),
			'right'  => esc_html_x( 'Right', 'alignment', 'surya-chandra-lite' ),
		);

		if ( ! empty( $allowed ) ) {
			foreach ( $choices as $key => $value ) {
				if ( in_array( $key, $allowed, true ) ) {
					$output[ $key ] = $value;
				}
			}
		} else {
			$output = $choices;
		}

		return $output;
	}

endif;

if ( ! function_exists( 'surya_chandra_get_heading_alignment_options' ) ) :

	/**
	 * Returns heading alignment options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function surya_chandra_get_heading_alignment_options() {

		return surya_chandra_get_alignment_options( array( 'left', 'center', 'right' ) );
	}

endif;

if ( ! function_exists( 'surya_chandra_get_numbers_dropdown_options' ) ) :

	/**
	 * Returns numbers dropdown options.
	 *
	 * @since 1.0.0
	 *
	 * @param int $min Min.
	 * @param int $max Max.
	 * @return array Options array.
	 */
	function surya_chandra_get_numbers_dropdown_options( $min = 1, $max = 4 ) {

		$output = array();

		if ( $min <= $max ) {
			for ( $i = $min; $i <= $max; $i++ ) {
				$output[ $i ] = $i;
			}
		}

		return $output;
	}

endif;

if ( ! function_exists( 'surya_chandra_get_global_layout_options' ) ) :

	/**
	 * Returns global layout options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function surya_chandra_get_global_layout_options() {

		$output = array(
			'left-sidebar'  => esc_html__( 'Left Sidebar', 'surya-chandra-lite' ),
			'right-sidebar' => esc_html__( 'Right Sidebar', 'surya-chandra-lite' ),
			'three-columns' => esc_html__( 'Three Columns', 'surya-chandra-lite' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'surya-chandra-lite' ),
		);

		return $output;
	}

endif;

if ( ! function_exists( 'surya_chandra_get_archive_layout_options' ) ) :

	/**
	 * Returns archive layout options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function surya_chandra_get_archive_layout_options() {

		$output = array(
			'grid'   => esc_html__( 'Grid', 'surya-chandra-lite' ),
			'simple' => esc_html__( 'Simple', 'surya-chandra-lite' ),
		);

		return $output;
	}

endif;

if ( ! function_exists( 'surya_chandra_get_header_layout_options' ) ) :

	/**
	 * Returns header layout options.
	 *
	 * @since 1.0.0
	 *
	 * @param bool $add_default Whether to add default or not.
	 * @return array Options array.
	 */
	function surya_chandra_get_header_layout_options( $add_default = false ) {

		$output = array(
			'1' => array(
				'label' => esc_html__( 'One', 'surya-chandra-lite' ),
				'url'   => get_template_directory_uri() . '/images/header/layout-1.png',
				),
			'2' => array(
				'label' => esc_html__( 'Two', 'surya-chandra-lite' ),
				'url'   => get_template_directory_uri() . '/images/header/layout-2.png',
				),
			);

		if ( true === $add_default ) {
			$item = array(
				'label' => esc_html__( 'Default', 'surya-chandra-lite' ),
				'url'   => get_template_directory_uri() . '/images/header/layout-default.png',
				);
			array_unshift( $output, $item );
		}

		return $output;
	}

endif;
