<?php
$config = tilemax_kirki_config();

# Breadcrumb Settings
TILEMAX_Kirki::add_section( 'dt_site_breadcrumb_section', array(
	'title' => esc_html__( 'Breadcrumb', 'tilemax' ),
	'priority' => 24,	
) );

# Breadcrumb Typography

	# customize-breadcrumb-title-typo
	TILEMAX_Kirki::add_field( $config, array(
		'type'     => 'switch',
		'settings' => 'customize-breadcrumb-title-typo',
		'label'    => esc_html__( 'Customize Title ?', 'tilemax' ),
		'section'  => 'dt_site_breadcrumb_section',
		'default'  => tilemax_defaults('customize-breadcrumb-title-typo'),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'tilemax' ),
			'off' => esc_attr__( 'No', 'tilemax' )
		)			
	));
	
	# breadcrumb-title-typo
	TILEMAX_Kirki::add_field( $config, array(
		'type'     => 'typography',
		'settings' => 'breadcrumb-title-typo',
		'label'    => esc_html__( 'Title Typography', 'tilemax' ),
		'section'  => 'dt_site_breadcrumb_section',
		'output' => array(
			array( 'element' => '.main-title-section h1, h1.simple-title' )
		),
		'default' => tilemax_defaults( 'breadcrumb-title-typo' ),
		'choices'  => array(
			'variant' => array(
				'100',
				'100italic',
				'200',
				'200italic',
				'300',
				'300italic',
				'regular',
				'italic',
				'500',
				'500italic',
				'600',
				'600italic',
				'700',
				'700italic',
				'800',
				'800italic',
				'900',
				'900italic'
			),
		),		
		'active_callback' => array(
			array( 'setting' => 'customize-breadcrumb-title-typo', 'operator' => '==', 'value' => '1' )
		)		
	));		
	
	# customize-breadcrumb-typo
	TILEMAX_Kirki::add_field( $config, array(
		'type'     => 'switch',
		'settings' => 'customize-breadcrumb-typo',
		'label'    => esc_html__( 'Customize Link ?', 'tilemax' ),
		'section'  => 'dt_site_breadcrumb_section',
		'default'  => tilemax_defaults('customize-breadcrumb-typo'),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'tilemax' ),
			'off' => esc_attr__( 'No', 'tilemax' )
		)			
	));
	
	# breadcrumb-typo
	TILEMAX_Kirki::add_field( $config, array(
		'type'     => 'typography',
		'settings' => 'breadcrumb-typo',
		'label'    => esc_html__( 'Link Typography', 'tilemax' ),
		'section'  => 'dt_site_breadcrumb_section',
		'output' => array(
			array( 'element' => 'div.breadcrumb a' )
		),
		'default' => tilemax_defaults( 'breadcrumb-typo' ),
		'choices'  => array(
			'variant' => array(
				'100',
				'100italic',
				'200',
				'200italic',
				'300',
				'300italic',
				'regular',
				'italic',
				'500',
				'500italic',
				'600',
				'600italic',
				'700',
				'700italic',
				'800',
				'800italic',
				'900',
				'900italic'
			),
		),
		'active_callback' => array(
			array( 'setting' => 'customize-breadcrumb-typo', 'operator' => '==', 'value' => '1' )
		)		
	));