<?php

require_once get_template_directory() . '/kirki/kirki-utils.php';
require_once get_template_directory() . '/kirki/include-kirki.php';
require_once get_template_directory() . '/kirki/kirki.php';

$config = tilemax_kirki_config();

add_action('customize_register', 'tilemax_customize_register');
function tilemax_customize_register( $wp_customize ) {

	$wp_customize->remove_section( 'colors' );
	$wp_customize->remove_section( 'header_image' );
	$wp_customize->remove_section( 'background_image' );
	$wp_customize->remove_section( 'static_front_page' );

	$wp_customize->remove_section('themes');
	$wp_customize->get_section('title_tagline')->priority = 10;
}

add_action( 'customize_controls_print_styles', 'tilemax_enqueue_customizer_stylesheet' );
function tilemax_enqueue_customizer_stylesheet() {
	wp_register_style( 'tilemax-customizer-css', TILEMAX_THEME_URI.'/kirki/assets/css/customizer.css', NULL, NULL, 'all' );
	wp_enqueue_style( 'tilemax-customizer-css' );	
}

add_action( 'customize_controls_print_footer_scripts', 'tilemax_enqueue_customizer_script' );
function tilemax_enqueue_customizer_script() {
	wp_register_script( 'tilemax-customizer-js', TILEMAX_THEME_URI.'/kirki/assets/js/customizer.js', array('jquery', 'customize-controls' ), false, true );
	wp_enqueue_script( 'tilemax-customizer-js' );
}

# Theme Customizer Begins
TILEMAX_Kirki::add_config( $config , array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

	# Site Identity	
		# use-custom-logo
		TILEMAX_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'use-custom-logo',
			'label'    => esc_html__( 'Logo ?', 'tilemax' ),
			'section'  => 'title_tagline',
			'priority' => 1,
			'default'  => tilemax_defaults('use-custom-logo'),
			'description' => esc_html__('Switch to Site title or Logo','tilemax'),
			'choices'  => array(
				'on'  => esc_attr__( 'Logo', 'tilemax' ),
				'off' => esc_attr__( 'Site Title', 'tilemax' )
			)			
		) );

		# custom-logo
		TILEMAX_Kirki::add_field( $config, array(
			'type' => 'image',
			'settings' => 'custom-logo',
			'label'    => esc_html__( 'Logo', 'tilemax' ),
			'section'  => 'title_tagline',
			'priority' => 2,
			'default' => tilemax_defaults( 'custom-logo' ),
			'active_callback' => array(
				array( 'setting' => 'use-custom-logo', 'operator' => '==', 'value' => '1' )
			)
		));

		# custom-dark-logo
		TILEMAX_Kirki::add_field( $config, array(
			'type' => 'image',
			'settings' => 'custom-dark-logo',
			'label'    => esc_html__( 'Dark Logo', 'tilemax' ),
			'section'  => 'title_tagline',
			'priority' => 3,
			'default' => tilemax_defaults( 'custom-dark-logo' ),
			'active_callback' => array(
				array( 'setting' => 'use-custom-logo', 'operator' => '==', 'value' => '1' )
			)
		));	


		# site-title-color
		TILEMAX_Kirki::add_field( $config, array(
			'type' => 'color',
			'settings' => 'custom-title',
			'label'    => esc_html__( 'Site Title Color', 'tilemax' ),
			'section'  => 'title_tagline',
			'priority' => 4,
			'active_callback' => array(
				array( 'setting' => 'use-custom-logo', 'operator' => '!=', 'value' => '1' )
			),
			'output' => array(
				array( 'element' => '#logo .logo-title > h1 a, #logo .logo-title h2' , 'property' => 'color' )
			),
			'choices' => array( 'alpha' => true ),
		));
	
	# Site Layout
	require_once get_template_directory() . '/kirki/options/site-layout.php';

	# Site Skin
	require_once get_template_directory() . '/kirki/options/site-skin.php';

	# Site Breadcrumb
	TILEMAX_Kirki::add_panel( 'dt_site_breadcrumb_panel', array(
		'title' => esc_html__( 'Site Breadcrumb', 'tilemax' ),
		'description' => esc_html__('Site Breadcrumb','tilemax'),
		'priority' => 25
	) );
	require_once get_template_directory() . '/kirki/options/site-breadcrumb.php';
	
	# Site Header
	TILEMAX_Kirki::add_panel( 'dt_site_header_panel', array(
		'title' => esc_html__( 'Site Header', 'tilemax' ),
		'description' => esc_html__('Site Header','tilemax'),
		'priority' => 30
	) );
	require_once get_template_directory() . '/kirki/options/site-header.php';

	# Site Menu
	TILEMAX_Kirki::add_panel( 'dt_site_menu_panel', array(
		'title' => esc_html__( 'Site Menu', 'tilemax' ),
		'description' => esc_html__('Site Menu','tilemax'),
		'priority' => 35
	) );
	require_once get_template_directory() . '/kirki/options/site-menu/navigation.php';		

	# Site Footer I
		TILEMAX_Kirki::add_panel( 'dt_site_footer_i_panel', array(
			'title' => esc_html__( 'Site Footer I', 'tilemax' ),
			'priority' => 40
		) );
		require_once get_template_directory() . '/kirki/options/site-footer-i.php';

	# Site Footer II
	TILEMAX_Kirki::add_panel( 'dt_site_footer_ii_panel', array(
		'title' => esc_html__( 'Site Footer II', 'tilemax' ),
		'priority' => 45
	) );
	#require_once get_template_directory() . '/kirki/options/site-footer-ii.php';

	# Site Footer Copyright
	TILEMAX_Kirki::add_panel( 'dt_footer_copyright_panel', array(
		'title' => esc_html__( 'Site Copyright', 'tilemax' ),
		'priority' => 50
	) );
	require_once get_template_directory() . '/kirki/options/site-footer-copyright.php';

	# Additional JS
	require_once get_template_directory() . '/kirki/options/custom-js.php';

	# Typography
	TILEMAX_Kirki::add_panel( 'dt_site_typography_panel', array(
		'title' => esc_html__( 'Typography', 'tilemax' ),
		'description' => esc_html__('Typography Settings','tilemax'),
		'priority' => 220
	) );	
	require_once get_template_directory() . '/kirki/options/site-typography.php';	
# Theme Customizer Ends