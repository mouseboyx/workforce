<?php
/**
 * Info setup
 *
 * @package Surya_Chandra
 */

if ( ! function_exists( 'surya_chandra_info_setup' ) ) :

	/**
	 * Info setup.
	 *
	 * @since 1.0.0
	 */
	function surya_chandra_info_setup() {

		$config = array(

			// Welcome content.
			'welcome_content' => sprintf( esc_html__( '%1$s is now installed and ready to use. We want to make sure you have the best experience using the theme and that is why we gathered here all the necessary information for you. Thanks for using our theme!', 'surya-chandra-lite' ), 'Surya Chandra' ),

			// Tabs.
			'tabs' => array(
				'getting-started' => esc_html__( 'Getting Started', 'surya-chandra-lite' ),
				'support'         => esc_html__( 'Support', 'surya-chandra-lite' ),
				'useful-plugins'  => esc_html__( 'Useful Plugins', 'surya-chandra-lite' ),
				'demo-content'    => esc_html__( 'Demo Content', 'surya-chandra-lite' ),
				'upgrade-to-pro'  => esc_html__( 'Upgrade to Pro', 'surya-chandra-lite' ),
				),

			// Quick links.
			'quick_links' => array(
				'theme_url' => array(
					'text' => esc_html__( 'Theme Details', 'surya-chandra-lite' ),
					'url'  => 'https://wenthemes.com/item/wordpress-themes/surya-chandra-lite/',
					),
				'demo_url' => array(
					'text' => esc_html__( 'View Demo', 'surya-chandra-lite' ),
					'url'  => 'https://demo.wenthemes.com/surya-chandra-lite/',
					),
				'documentation_url' => array(
					'text' => esc_html__( 'View Documentation', 'surya-chandra-lite' ),
					'url'  => 'https://docs.wenthemes.com/themes/surya-chandra-lite/',
					),
				),

			// Getting started.
			'getting_started' => array(
				'one' => array(
					'title'       => esc_html__( 'Theme Documentation', 'surya-chandra-lite' ),
					'icon'        => 'dashicons dashicons-format-aside',
					'description' => esc_html__( 'Please check our full documentation for detailed information on how to setup and customize the theme.', 'surya-chandra-lite' ),
					'button_text' => esc_html__( 'View Documentation', 'surya-chandra-lite' ),
					'button_url'  => 'https://docs.wenthemes.com/themes/surya-chandra-lite/',
					'button_type' => 'link',
					'is_new_tab'  => true,
					),
				'two' => array(
					'title'       => esc_html__( 'Static Front Page', 'surya-chandra-lite' ),
					'icon'        => 'dashicons dashicons-admin-generic',
					'description' => esc_html__( 'To achieve custom home page other than blog listing, you need to create and set static front page.', 'surya-chandra-lite' ),
					'button_text' => esc_html__( 'Static Front Page', 'surya-chandra-lite' ),
					'button_url'  => admin_url( 'customize.php?autofocus[section]=static_front_page' ),
					'button_type' => 'primary',
					),
				'three' => array(
					'title'       => esc_html__( 'Theme Options', 'surya-chandra-lite' ),
					'icon'        => 'dashicons dashicons-admin-customizer',
					'description' => esc_html__( 'Theme uses Customizer API for theme options. Using the Customizer you can easily customize different aspects of the theme.', 'surya-chandra-lite' ),
					'button_text' => esc_html__( 'Customize', 'surya-chandra-lite' ),
					'button_url'  => wp_customize_url(),
					'button_type' => 'primary',
					),
				'four' => array(
					'title'       => esc_html__( 'Page Builder', 'surya-chandra-lite' ),
					'icon'        => 'dashicons dashicons-admin-settings',
					'description' => esc_html__( 'Page Builder by SiteOrigin is integrated in the theme to achieve different layouts. Please make sure both Page Builder by SiteOrigin and SiteOrigin Widgets Bundle plugins are installed and activated.', 'surya-chandra-lite' ),
					),
				'five' => array(
					'title'       => esc_html__( 'Demo Content', 'surya-chandra-lite' ),
					'icon'        => 'dashicons dashicons-layout',
					'description' => sprintf( esc_html__( 'To import sample demo content, %1$s plugin should be installed and activated. After plugin is activated, visit Import Demo Data menu under Appearance.', 'surya-chandra-lite' ), esc_html__( 'One Click Demo Import', 'surya-chandra-lite' ) ),
					'button_text' => esc_html__( 'Demo Content', 'surya-chandra-lite' ),
					'button_url'  => admin_url( 'themes.php?page=surya-chandra-lite-info&tab=demo-content' ),
					'button_type' => 'secondary',
					),
				'six' => array(
					'title'       => esc_html__( 'Theme Preview', 'surya-chandra-lite' ),
					'icon'        => 'dashicons dashicons-welcome-view-site',
					'description' => esc_html__( 'You can check out the theme demos for reference to find out what you can achieve using the theme and how it can be customized.', 'surya-chandra-lite' ),
					'button_text' => esc_html__( 'View Demo', 'surya-chandra-lite' ),
					'button_url'  => 'https://demo.wenthemes.com/surya-chandra-lite/',
					'button_type' => 'link',
					'is_new_tab'  => true,
					),
				),

			// Support.
			'support' => array(
				'one' => array(
					'title'       => esc_html__( 'Contact Support', 'surya-chandra-lite' ),
					'icon'        => 'dashicons dashicons-sos',
					'description' => esc_html__( 'Got theme support question or found bug or got some feedbacks? Best place to ask your query is the dedicated Support forum for the theme.', 'surya-chandra-lite' ),
					'button_text' => esc_html__( 'Contact Support', 'surya-chandra-lite' ),
					'button_url'  => 'https://wordpress.org/support/theme/surya-chandra-lite/',
					'button_type' => 'link',
					'is_new_tab'  => true,
					),
				'two' => array(
					'title'       => esc_html__( 'Theme Documentation', 'surya-chandra-lite' ),
					'icon'        => 'dashicons dashicons-format-aside',
					'description' => esc_html__( 'Please check our full documentation for detailed information on how to setup and customize the theme.', 'surya-chandra-lite' ),
					'button_text' => esc_html__( 'View Documentation', 'surya-chandra-lite' ),
					'button_url'  => 'https://docs.wenthemes.com/themes/surya-chandra-lite/',
					'button_type' => 'link',
					'is_new_tab'  => true,
					),
				'three' => array(
					'title'       => esc_html__( 'Child Theme', 'surya-chandra-lite' ),
					'icon'        => 'dashicons dashicons-admin-tools',
					'description' => esc_html__( 'For advanced theme customization, it is recommended to use child theme rather than modifying the theme file itself. Using this approach, you wont lose the customization after theme update.', 'surya-chandra-lite' ),
					'button_text' => esc_html__( 'Learn More', 'surya-chandra-lite' ),
					'button_url'  => 'https://developer.wordpress.org/themes/advanced-topics/child-themes/',
					'button_type' => 'link',
					'is_new_tab'  => true,
					),
				),

			// Useful plugins.
			'useful_plugins' => array(
				'description' => esc_html__( 'Theme supports some helpful WordPress plugins to enhance your site. But, please enable only those plugins which you need in your site. For example, enable WooCommerce only if you are using e-commerce.', 'surya-chandra-lite' ),
				),

			// Demo content.
			'demo_content' => array(
				'description' => sprintf( esc_html__( 'To import demo content for this theme, %1$s plugin is needed. Please make sure plugin is installed and activated. After plugin is activated, you will see Import Demo Data menu under Appearance.', 'surya-chandra-lite' ), '<a href="https://wordpress.org/plugins/one-click-demo-import/" target="_blank">' . esc_html__( 'One Click Demo Import', 'surya-chandra-lite' ) . '</a>' ),
				),

			// Upgrade content.
			'upgrade_to_pro' => array(
				'description' => esc_html__( 'If you want more advanced features then you can upgrade to the premium version of the theme.', 'surya-chandra-lite' ),
				'button_text' => esc_html__( 'Buy Pro from ThemeForest', 'surya-chandra-lite' ),
				'button_url'  => 'https://themeforest.net/item/surya-chandra-responsive-multipurpose-wordpress-theme/20908840?ref=wenthemes',
				'button_type' => 'primary',
				'is_new_tab'  => true,
				),
			);

		Surya_Chandra_Info::init( $config );
	}

endif;

add_action( 'after_setup_theme', 'surya_chandra_info_setup' );
