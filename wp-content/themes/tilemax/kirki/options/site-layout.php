<?php
$config = tilemax_kirki_config();

TILEMAX_Kirki::add_section( 'dt_site_layout_section', array(
	'title' => esc_html__( 'Site Layout', 'tilemax' ),
	'priority' => 20
) );

	# site-layout
	TILEMAX_Kirki::add_field( $config, array(
		'type'     => 'radio-image',
		'settings' => 'site-layout',
		'label'    => esc_html__( 'Site Layout', 'tilemax' ),
		'section'  => 'dt_site_layout_section',
		'default'  => tilemax_defaults('site-layout'),
		'choices' => array(
			'boxed' =>  TILEMAX_THEME_URI.'/kirki/assets/images/site-layout/boxed.png',
			'wide' => TILEMAX_THEME_URI.'/kirki/assets/images/site-layout/wide.png',
		)
	));

	# site-boxed-layout
	TILEMAX_Kirki::add_field( $config, array(
		'type'     => 'switch',
		'settings' => 'site-boxed-layout',
		'label'    => esc_html__( 'Customize Boxed Layout?', 'tilemax' ),
		'section'  => 'dt_site_layout_section',
		'default'  => '1',
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'tilemax' ),
			'off' => esc_attr__( 'No', 'tilemax' )
		),
		'active_callback' => array(
			array( 'setting' => 'site-layout', 'operator' => '==', 'value' => 'boxed' ),
		)			
	));

	# body-bg-type
	TILEMAX_Kirki::add_field( $config, array(
		'type' => 'select',
		'settings' => 'body-bg-type',
		'label'    => esc_html__( 'Background Type', 'tilemax' ),
		'section'  => 'dt_site_layout_section',
		'multiple' => 1,
		'default'  => 'none',
		'choices'  => array(
			'pattern' => esc_attr__( 'Predefined Patterns', 'tilemax' ),
			'upload' => esc_attr__( 'Set Pattern', 'tilemax' ),
			'none' => esc_attr__( 'None', 'tilemax' ),
		),
		'active_callback' => array(
			array( 'setting' => 'site-layout', 'operator' => '==', 'value' => 'boxed' ),
			array( 'setting' => 'site-boxed-layout', 'operator' => '==', 'value' => '1' )
		)
	));

	# body-bg-pattern
	TILEMAX_Kirki::add_field( $config, array(
		'type'     => 'radio-image',
		'settings' => 'body-bg-pattern',
		'label'    => esc_html__( 'Predefined Patterns', 'tilemax' ),
		'description'    => esc_html__( 'Add Background for body', 'tilemax' ),
		'section'  => 'dt_site_layout_section',
		'output' => array(
			array( 'element' => 'body' , 'property' => 'background-image' )
		),
		'choices' => array(
			TILEMAX_THEME_URI.'/kirki/assets/images/site-layout/pattern1.jpg'=> TILEMAX_THEME_URI.'/kirki/assets/images/site-layout/pattern1.jpg',
			TILEMAX_THEME_URI.'/kirki/assets/images/site-layout/pattern2.jpg'=> TILEMAX_THEME_URI.'/kirki/assets/images/site-layout/pattern2.jpg',
			TILEMAX_THEME_URI.'/kirki/assets/images/site-layout/pattern3.jpg'=> TILEMAX_THEME_URI.'/kirki/assets/images/site-layout/pattern3.jpg',
			TILEMAX_THEME_URI.'/kirki/assets/images/site-layout/pattern4.jpg'=> TILEMAX_THEME_URI.'/kirki/assets/images/site-layout/pattern4.jpg',
			TILEMAX_THEME_URI.'/kirki/assets/images/site-layout/pattern5.jpg'=> TILEMAX_THEME_URI.'/kirki/assets/images/site-layout/pattern5.jpg',
			TILEMAX_THEME_URI.'/kirki/assets/images/site-layout/pattern6.jpg'=> TILEMAX_THEME_URI.'/kirki/assets/images/site-layout/pattern6.jpg',
			TILEMAX_THEME_URI.'/kirki/assets/images/site-layout/pattern7.jpg'=> TILEMAX_THEME_URI.'/kirki/assets/images/site-layout/pattern7.jpg',
			TILEMAX_THEME_URI.'/kirki/assets/images/site-layout/pattern8.jpg'=> TILEMAX_THEME_URI.'/kirki/assets/images/site-layout/pattern8.jpg',
			TILEMAX_THEME_URI.'/kirki/assets/images/site-layout/pattern9.jpg'=> TILEMAX_THEME_URI.'/kirki/assets/images/site-layout/pattern9.jpg',
			TILEMAX_THEME_URI.'/kirki/assets/images/site-layout/pattern10.jpg'=> TILEMAX_THEME_URI.'/kirki/assets/images/site-layout/pattern10.jpg',
			TILEMAX_THEME_URI.'/kirki/assets/images/site-layout/pattern11.jpg'=> TILEMAX_THEME_URI.'/kirki/assets/images/site-layout/pattern11.jpg',
			TILEMAX_THEME_URI.'/kirki/assets/images/site-layout/pattern12.jpg'=> TILEMAX_THEME_URI.'/kirki/assets/images/site-layout/pattern12.jpg',
			TILEMAX_THEME_URI.'/kirki/assets/images/site-layout/pattern13.jpg'=> TILEMAX_THEME_URI.'/kirki/assets/images/site-layout/pattern13.jpg',
			TILEMAX_THEME_URI.'/kirki/assets/images/site-layout/pattern14.jpg'=> TILEMAX_THEME_URI.'/kirki/assets/images/site-layout/pattern14.jpg',
			TILEMAX_THEME_URI.'/kirki/assets/images/site-layout/pattern15.jpg'=> TILEMAX_THEME_URI.'/kirki/assets/images/site-layout/pattern15.jpg',
		),
		'active_callback' => array(
			array( 'setting' => 'body-bg-type', 'operator' => '==', 'value' => 'pattern' ),
			array( 'setting' => 'site-layout', 'operator' => '==', 'value' => 'boxed' ),
			array( 'setting' => 'site-boxed-layout', 'operator' => '==', 'value' => '1' )
		)						
	));

	# body-bg-image
	TILEMAX_Kirki::add_field( $config, array(
		'type' => 'image',
		'settings' => 'body-bg-image',
		'label'    => esc_html__( 'Background Image', 'tilemax' ),
		'description'    => esc_html__( 'Add Background Image for body', 'tilemax' ),
		'section'  => 'dt_site_layout_section',
		'output' => array(
			array( 'element' => 'body' , 'property' => 'background-image' )
		),
		'active_callback' => array(
			array( 'setting' => 'body-bg-type', 'operator' => '==', 'value' => 'upload' ),
			array( 'setting' => 'site-layout', 'operator' => '==', 'value' => 'boxed' ),
			array( 'setting' => 'site-boxed-layout', 'operator' => '==', 'value' => '1' )
		)
	));

	# body-bg-position
	TILEMAX_Kirki::add_field( $config, array(
		'type' => 'select',
		'settings' => 'body-bg-position',
		'label'    => esc_html__( 'Background Position', 'tilemax' ),
		'section'  => 'dt_site_layout_section',
		'output' => array(
			array( 'element' => 'body' , 'property' => 'background-position' )
		),
		'default' => 'center',
		'multiple' => 1,
		'choices' => tilemax_image_positions(),
		'active_callback' => array(
			array( 'setting' => 'body-bg-type', 'operator' => 'contains', 'value' => array( 'pattern', 'upload') ),
			array( 'setting' => 'site-layout', 'operator' => '==', 'value' => 'boxed' ),
			array( 'setting' => 'site-boxed-layout', 'operator' => '==', 'value' => '1' )
		)
	));

	# body-bg-repeat
	TILEMAX_Kirki::add_field( $config, array(
		'type' => 'select',
		'settings' => 'body-bg-repeat',
		'label'    => esc_html__( 'Background Repeat', 'tilemax' ),
		'section'  => 'dt_site_layout_section',
		'output' => array(
			array( 'element' => 'body' , 'property' => 'background-repeat' )
		),
		'default' => 'repeat',
		'multiple' => 1,
		'choices' => tilemax_image_repeats(),
		'active_callback' => array(
			array( 'setting' => 'body-bg-type', 'operator' => 'contains', 'value' => array( 'pattern', 'upload' ) ),
			array( 'setting' => 'site-layout', 'operator' => '==', 'value' => 'boxed' ),
			array( 'setting' => 'site-boxed-layout', 'operator' => '==', 'value' => '1' )
		)
	));	