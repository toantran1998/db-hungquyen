<?php
$config = tilemax_kirki_config();

TILEMAX_Kirki::add_section( 'dt_custom_js_section', array(
	'title' => esc_html__( 'Additional JS', 'tilemax' ),
	'priority' => 210
) );

	# custom-js
	TILEMAX_Kirki::add_field( $config, array(
		'type'     => 'switch',
		'settings' => 'enable-custom-js',
		'section'  => 'dt_custom_js_section',
		'label'    => esc_html__( 'Enable Custom JS?', 'tilemax' ),
		'default'  => tilemax_defaults('enable-custom-js'),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'tilemax' ),
			'off' => esc_attr__( 'No', 'tilemax' )
		)		
	));

	# custom-js
	TILEMAX_Kirki::add_field( $config, array(
		'type'     => 'code',
		'settings' => 'custom-js',
		'section'  => 'dt_custom_js_section',
		'transport' => 'postMessage',
		'label'    => esc_html__( 'Add Custom JS', 'tilemax' ),
		'choices'     => array(
			'language' => 'javascript',
			'theme'    => 'dark',
		),
		'active_callback' => array(
			array( 'setting' => 'enable-custom-js' , 'operator' => '==', 'value' =>'1')
		)
	));