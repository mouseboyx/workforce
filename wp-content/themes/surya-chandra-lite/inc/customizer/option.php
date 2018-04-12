<?php
/**
 * Theme options
 *
 * @package Surya_Chandra
 */

$default = surya_chandra_get_default_theme_options();

// Setting show_title.
$wp_customize->add_setting( 'theme_options[show_title]', array(
	'default'           => $default['show_title'],
	'sanitize_callback' => 'surya_chandra_sanitize_checkbox',
) );
$wp_customize->add_control( 'theme_options[show_title]', array(
	'label'    => esc_html__( 'Show Site Title', 'surya-chandra-lite' ),
	'section'  => 'title_tagline',
	'type'     => 'checkbox',
	'priority' => 11,
) );

// Setting show_tagline.
$wp_customize->add_setting( 'theme_options[show_tagline]', array(
	'default'           => $default['show_tagline'],
	'sanitize_callback' => 'surya_chandra_sanitize_checkbox',
) );
$wp_customize->add_control( 'theme_options[show_tagline]', array(
	'label'    => esc_html__( 'Show Tagline', 'surya-chandra-lite' ),
	'section'  => 'title_tagline',
	'type'     => 'checkbox',
	'priority' => 11,
) );

// Add theme options panel.
$wp_customize->add_panel( 'theme_option_panel', array(
	'title'    => esc_html__( 'Theme Options', 'surya-chandra-lite' ),
	'priority' => 25,
) );

// Header section.
$wp_customize->add_section( 'section_header', array(
	'title' => esc_html__( 'Header Options', 'surya-chandra-lite' ),
	'panel' => 'theme_option_panel',
) );

// Setting header_layout.
$wp_customize->add_setting( 'theme_options[header_layout]', array(
	'default'           => $default['header_layout'],
	'sanitize_callback' => 'surya_chandra_sanitize_select',
) );

$wp_customize->add_control( new Surya_Chandra_Radio_Image_Control( $wp_customize, 'theme_options[header_layout]', array(
	'label'    => esc_html__( 'Header Layout', 'surya-chandra-lite' ),
	'section'  => 'section_header',
	'settings' => 'theme_options[header_layout]',
	'choices'  => surya_chandra_get_header_layout_options(),
) ) );

// Setting contact_number.
$wp_customize->add_setting( 'theme_options[contact_number]', array(
	'default'           => $default['contact_number'],
	'sanitize_callback' => 'sanitize_text_field',
) );
$wp_customize->add_control( 'theme_options[contact_number]', array(
	'label'   => esc_html__( 'Contact Number', 'surya-chandra-lite' ),
	'section' => 'section_header',
	'type'    => 'text',
) );

// Setting contact_email.
$wp_customize->add_setting( 'theme_options[contact_email]', array(
	'default'           => $default['contact_email'],
	'sanitize_callback' => 'sanitize_email',
) );
$wp_customize->add_control( 'theme_options[contact_email]', array(
	'label'   => esc_html__( 'Contact Email', 'surya-chandra-lite' ),
	'section' => 'section_header',
	'type'    => 'text',
) );

// Setting contact_address.
$wp_customize->add_setting( 'theme_options[contact_address]', array(
	'default'           => $default['contact_address'],
	'sanitize_callback' => 'sanitize_text_field',
) );
$wp_customize->add_control( 'theme_options[contact_address]', array(
	'label'   => esc_html__( 'Contact Address', 'surya-chandra-lite' ),
	'section' => 'section_header',
	'type'    => 'text',
) );

// Setting quote_button_text.
$wp_customize->add_setting( 'theme_options[quote_button_text]', array(
	'default'           => $default['quote_button_text'],
	'sanitize_callback' => 'sanitize_text_field',
) );
$wp_customize->add_control( 'theme_options[quote_button_text]', array(
	'label'   => esc_html__( 'Quote Button Text', 'surya-chandra-lite' ),
	'section' => 'section_header',
	'type'    => 'text',
) );

// Setting quote_button_url.
$wp_customize->add_setting( 'theme_options[quote_button_url]', array(
	'default'           => $default['quote_button_url'],
	'sanitize_callback' => 'esc_url_raw',
) );
$wp_customize->add_control( 'theme_options[quote_button_url]', array(
	'label'   => esc_html__( 'Quote Button URL', 'surya-chandra-lite' ),
	'section' => 'section_header',
	'type'    => 'url',
) );

// Social section.
$wp_customize->add_section( 'section_social', array(
	'title' => esc_html__( 'Social Options', 'surya-chandra-lite' ),
	'panel' => 'theme_option_panel',
) );

// Setting social_links.
$wp_customize->add_setting( 'theme_options[social_links]', array(
	'sanitize_callback' => 'surya_chandra_sanitize_social_links',
) );

$wp_customize->add_control( new Surya_Chandra_Repeater_Text_Control( $wp_customize, 'theme_options[social_links]', array(
	'label'       => esc_html__( 'Social Links', 'surya-chandra-lite' ),
	'description' => esc_html__( 'Enter full URL.', 'surya-chandra-lite' ),
	'section'     => 'section_social',
	'settings'    => 'theme_options[social_links]',
) ) );

// Layout section.
$wp_customize->add_section( 'section_layout', array(
	'title' => esc_html__( 'Layout Options', 'surya-chandra-lite' ),
	'panel' => 'theme_option_panel',
) );

// Setting global_layout.
$wp_customize->add_setting( 'theme_options[global_layout]', array(
	'default'           => $default['global_layout'],
	'sanitize_callback' => 'surya_chandra_sanitize_select',
) );
$wp_customize->add_control( 'theme_options[global_layout]', array(
	'label'   => esc_html__( 'Global Layout', 'surya-chandra-lite' ),
	'section' => 'section_layout',
	'type'    => 'select',
	'choices' => surya_chandra_get_global_layout_options(),
) );

// Setting archive_layout.
$wp_customize->add_setting( 'theme_options[archive_layout]', array(
	'default'           => $default['archive_layout'],
	'sanitize_callback' => 'surya_chandra_sanitize_select',
) );
$wp_customize->add_control( 'theme_options[archive_layout]', array(
	'label'    => esc_html__( 'Archive Layout', 'surya-chandra-lite' ),
	'section'  => 'section_layout',
	'type'     => 'select',
	'choices'  => surya_chandra_get_archive_layout_options(),
) );

// Setting archive_image.
$wp_customize->add_setting( 'theme_options[archive_image]', array(
	'default'           => $default['archive_image'],
	'sanitize_callback' => 'surya_chandra_sanitize_select',
) );
$wp_customize->add_control( 'theme_options[archive_image]', array(
	'label'    => esc_html__( 'Image in Archive', 'surya-chandra-lite' ),
	'section'  => 'section_layout',
	'type'     => 'select',
	'choices'  => surya_chandra_get_image_sizes_options( false ),
) );

// Setting archive_image_alignment.
$wp_customize->add_setting( 'theme_options[archive_image_alignment]', array(
	'default'           => $default['archive_image_alignment'],
	'sanitize_callback' => 'surya_chandra_sanitize_select',
) );
$wp_customize->add_control( 'theme_options[archive_image_alignment]', array(
	'label'           => esc_html__( 'Image Alignment in Archive', 'surya-chandra-lite' ),
	'section'         => 'section_layout',
	'type'            => 'select',
	'choices'         => surya_chandra_get_alignment_options(),
	'active_callback' => 'surya_chandra_is_image_in_archive_active',
) );

// Blog section.
$wp_customize->add_section( 'section_blog', array(
	'title' => esc_html__( 'Blog Options', 'surya-chandra-lite' ),
	'panel' => 'theme_option_panel',
) );

// Setting blog_title.
$wp_customize->add_setting( 'theme_options[blog_title]', array(
	'default'           => $default['blog_title'],
	'sanitize_callback' => 'sanitize_text_field',
) );
$wp_customize->add_control( 'theme_options[blog_title]', array(
	'label'    => esc_html__( 'Blog Title', 'surya-chandra-lite' ),
	'section'  => 'section_blog',
	'type'     => 'text',
) );

// Setting excerpt_length.
$wp_customize->add_setting( 'theme_options[excerpt_length]', array(
	'default'           => $default['excerpt_length'],
	'sanitize_callback' => 'surya_chandra_sanitize_positive_integer',
) );
$wp_customize->add_control( 'theme_options[excerpt_length]', array(
	'label'       => esc_html__( 'Excerpt Length', 'surya-chandra-lite' ),
	'description' => esc_html__( 'in words', 'surya-chandra-lite' ),
	'section'     => 'section_blog',
	'type'        => 'number',
	'input_attrs' => array( 'min' => 1, 'max' => 200, 'style' => 'width: 55px;' ),
) );

// Setting read_more_text.
$wp_customize->add_setting( 'theme_options[read_more_text]', array(
	'default'           => $default['read_more_text'],
	'sanitize_callback' => 'sanitize_text_field',
) );
$wp_customize->add_control( 'theme_options[read_more_text]', array(
	'label'   => esc_html__( 'Read More Text', 'surya-chandra-lite' ),
	'section' => 'section_blog',
	'type'    => 'text',
) );

// Footer section.
$wp_customize->add_section( 'section_footer', array(
	'title' => esc_html__( 'Footer Options', 'surya-chandra-lite' ),
	'panel' => 'theme_option_panel',
) );

// Setting copyright_text.
$wp_customize->add_setting( 'theme_options[copyright_text]', array(
	'default'           => $default['copyright_text'],
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( 'theme_options[copyright_text]', array(
	'label'       => esc_html__( 'Copyright Text', 'surya-chandra-lite' ),
	'section'     => 'section_footer',
	'type'        => 'text',
) );
