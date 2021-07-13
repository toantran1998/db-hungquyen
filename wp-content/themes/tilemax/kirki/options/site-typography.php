<?php
$config = tilemax_kirki_config();

# Menu Typography
TILEMAX_Kirki::add_section( 'dt_menu_typo_section', array(
	'title' => esc_html__( 'Menu', 'tilemax' ),
	'panel' => 'dt_site_typography_panel',
	'priority' => 5
) );
	
	# customize-menu-typo
	TILEMAX_Kirki::add_field( $config, array(
		'type'     => 'switch',
		'settings' => 'customize-menu-typo',
		'label'    => esc_html__( 'Customize Menu Typo', 'tilemax' ),
		'section'  => 'dt_menu_typo_section',
		'default'  => tilemax_defaults( 'customize-menu-typo' ),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'tilemax' ),
			'off' => esc_attr__( 'No', 'tilemax' )
		)
	));

	# menu-typo
	TILEMAX_Kirki::add_field( $config ,array(
		'type' => 'typography',
		'settings' => 'menu-typo',
		'label'    => esc_html__('Settings', 'tilemax'),
		'section'  => 'dt_menu_typo_section',
		'output' => array(
			array( 'element' => '#main-menu > ul.menu > li > a' )
		),
		'default' => tilemax_defaults('menu-typo'),
		'active_callback' => array(
			array( 'setting' => 'customize-menu-typo', 'operator' => '==', 'value' => '1' )
		)
	));

# Body Content
TILEMAX_Kirki::add_section( 'dt_body_content_typo_section', array(
	'title' => esc_html__( 'Body', 'tilemax' ),
	'panel' => 'dt_site_typography_panel',
	'priority' => 10
) );
	
	# customize-body-content-typo
	TILEMAX_Kirki::add_field( $config, array(
		'type'     => 'switch',
		'settings' => 'customize-body-content-typo',
		'label'    => esc_html__( 'Customize Content Typo', 'tilemax' ),
		'section'  => 'dt_body_content_typo_section',
		'default'  => tilemax_defaults( 'customize-body-content-typo' ),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'tilemax' ),
			'off' => esc_attr__( 'No', 'tilemax' )
		)
	));

	# body-content-typo
	TILEMAX_Kirki::add_field( $config ,array(
		'type' => 'typography',
		'settings' => 'body-content-typo',
		'label'    => esc_html__('Settings', 'tilemax'),
		'section'  => 'dt_body_content_typo_section',
		'output' => array( 
			array( 'element' => 'body' ),
			array( 
				'element' => '.editor-styles-wrapper > *',
				'context' => array ('editor')
			)
		),
		'default' => tilemax_defaults('body-content-typo'),
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
			array( 'setting' => 'customize-body-content-typo', 'operator' => '==', 'value' => '1' )
		)
	));

TILEMAX_Kirki::add_section( 'dt_headings_typo_section', array(
	'title' => esc_html__( 'Headings', 'tilemax' ),
	'panel' => 'dt_site_typography_panel',
	'priority' => 1
) );

	# H1
	# customize-body-h1-typo
	TILEMAX_Kirki::add_field( 'tilemax_kirki_config', array(
		'type'     => 'switch',
		'settings' => 'customize-body-h1-typo',
		'label'    => esc_html__( 'Customize H1 Tag', 'tilemax' ),
		'section'  => 'dt_headings_typo_section',
		'default'  => tilemax_defaults( 'customize-body-h1-typo' ),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'tilemax' ),
			'off' => esc_attr__( 'No', 'tilemax' )
		)
	));

	# h1 tag typography	
	TILEMAX_Kirki::add_field( 'tilemax_kirki_config' ,array(
		'type' => 'typography',
		'settings' => 'h1',
		'label'    =>esc_html__('H1 Tag Settings', 'tilemax'),
		'section'  => 'dt_headings_typo_section',
		'output' => array( 
			array( 'element' => 'h1' ),
			array( 
				'element' => '.editor-post-title__block .editor-post-title__input, .editor-styles-wrapper .wp-block h1, body#tinymce.wp-editor.content h1',
				'context' => array ('editor')
			),
		),
		'default' => tilemax_defaults('h1'),
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
			array( 'setting' => 'customize-body-h1-typo', 'operator' => '==', 'value' => '1' )
		)
	));

	# H1 Divider
	TILEMAX_Kirki::add_field( 'tilemax_kirki_config' ,array(
		'type'=> 'custom',
		'settings' => 'customize-body-h1-typo-divider',
		'section'  => 'dt_headings_typo_section',
		'default'  => '<div class="customize-control-divider"></div>'
	));

	# H2
	# customize-body-h2-typo
	TILEMAX_Kirki::add_field( 'tilemax_kirki_config', array(
		'type'     => 'switch',
		'settings' => 'customize-body-h2-typo',
		'label'    => esc_html__( 'Customize H2 Tag', 'tilemax' ),
		'section'  => 'dt_headings_typo_section',
		'default'  => tilemax_defaults( 'customize-body-h2-typo' ),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'tilemax' ),
			'off' => esc_attr__( 'No', 'tilemax' )
		)
	));

	# h2 tag typography	
	TILEMAX_Kirki::add_field( 'tilemax_kirki_config' ,array(
		'type' => 'typography',
		'settings' => 'h2',
		'label'    =>esc_html__('H2 Tag Settings', 'tilemax'),
		'section'  => 'dt_headings_typo_section',
		'output' => array( 
			array( 'element' => 'h2' ),
			array( 
				'element' => '.editor-styles-wrapper .wp-block h2',
				'context' => array ('editor')
			),
		),
		'default' => tilemax_defaults('h2'),
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
			array( 'setting' => 'customize-body-h2-typo', 'operator' => '==', 'value' => '1' )
		)
	));

	# H2 Divider
	TILEMAX_Kirki::add_field( 'tilemax_kirki_config' ,array(
		'type'=> 'custom',
		'settings' => 'customize-body-h2-typo-divider',
		'section'  => 'dt_headings_typo_section',
		'default'  => '<div class="customize-control-divider"></div>'
	));

	# H3
	# customize-body-h3-typo
	TILEMAX_Kirki::add_field( 'tilemax_kirki_config', array(
		'type'     => 'switch',
		'settings' => 'customize-body-h3-typo',
		'label'    => esc_html__( 'Customize H3 Tag', 'tilemax' ),
		'section'  => 'dt_headings_typo_section',
		'default'  => tilemax_defaults( 'customize-body-h3-typo' ),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'tilemax' ),
			'off' => esc_attr__( 'No', 'tilemax' )
		)
	));

	# h3 tag typography	
	TILEMAX_Kirki::add_field( 'tilemax_kirki_config' ,array(
		'type' => 'typography',
		'settings' => 'h3',
		'label'    =>esc_html__('H3 Tag Settings', 'tilemax'),
		'section'  => 'dt_headings_typo_section',
		'output' => array( 
			array( 'element' => 'h3' ),
			array( 
				'element' => '.editor-styles-wrapper .wp-block h3',
				'context' => array ('editor')
			),
		),
		'default' => tilemax_defaults('h3'),
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
			array( 'setting' => 'customize-body-h3-typo', 'operator' => '==', 'value' => '1' )
		)
	));

	# H3 Divider
	TILEMAX_Kirki::add_field( 'tilemax_kirki_config' ,array(
		'type'=> 'custom',
		'settings' => 'customize-body-h3-typo-divider',
		'section'  => 'dt_headings_typo_section',
		'default'  => '<div class="customize-control-divider"></div>'
	));

	# H4
	# customize-body-h4-typo
	TILEMAX_Kirki::add_field( 'tilemax_kirki_config', array(
		'type'     => 'switch',
		'settings' => 'customize-body-h4-typo',
		'label'    => esc_html__( 'Customize H4 Tag', 'tilemax' ),
		'section'  => 'dt_headings_typo_section',
		'default'  => tilemax_defaults( 'customize-body-h4-typo' ),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'tilemax' ),
			'off' => esc_attr__( 'No', 'tilemax' )
		)
	));

	# h4 tag typography	
	TILEMAX_Kirki::add_field( 'tilemax_kirki_config' ,array(
		'type' => 'typography',
		'settings' => 'h4',
		'label'    =>esc_html__('H4 Tag Settings', 'tilemax'),
		'section'  => 'dt_headings_typo_section',
		'output' => array( 
			array( 'element' => 'h4' ),
			array( 
				'element' => '.editor-styles-wrapper .wp-block h4',
				'context' => array ('editor')
			),
		),
		'default' => tilemax_defaults('h4'),
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
			array( 'setting' => 'customize-body-h4-typo', 'operator' => '==', 'value' => '1' )
		)
	));

	# H4 Divider
	TILEMAX_Kirki::add_field( 'tilemax_kirki_config' ,array(
		'type'=> 'custom',
		'settings' => 'customize-body-h4-typo-divider',
		'section'  => 'dt_headings_typo_section',
		'default'  => '<div class="customize-control-divider"></div>'
	));

	# H5
	# customize-body-h5-typo
	TILEMAX_Kirki::add_field( 'tilemax_kirki_config', array(
		'type'     => 'switch',
		'settings' => 'customize-body-h5-typo',
		'label'    => esc_html__( 'Customize H5 Tag', 'tilemax' ),
		'section'  => 'dt_headings_typo_section',
		'default'  => tilemax_defaults( 'customize-body-h5-typo' ),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'tilemax' ),
			'off' => esc_attr__( 'No', 'tilemax' )
		)
	));

	# h5 tag typography	
	TILEMAX_Kirki::add_field( 'tilemax_kirki_config' ,array(
		'type' => 'typography',
		'settings' => 'h5',
		'label'    =>esc_html__('H5 Tag Settings', 'tilemax'),
		'section'  => 'dt_headings_typo_section',
		'output' => array( 
			array( 'element' => 'h5' ),
			array( 
				'element' => '.editor-styles-wrapper .wp-block h5',
				'context' => array ('editor')
			),
		),
		'default' => tilemax_defaults('h5'),
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
			array( 'setting' => 'customize-body-h5-typo', 'operator' => '==', 'value' => '1' )
		)
	));

	# H5 Divider
	TILEMAX_Kirki::add_field( 'tilemax_kirki_config' ,array(
		'type'=> 'custom',
		'settings' => 'customize-body-h5-typo-divider',
		'section'  => 'dt_headings_typo_section',
		'default'  => '<div class="customize-control-divider"></div>'
	));

	# H6
	# customize-body-h6-typo
	TILEMAX_Kirki::add_field( 'tilemax_kirki_config', array(
		'type'     => 'switch',
		'settings' => 'customize-body-h6-typo',
		'label'    => esc_html__( 'Customize H6 Tag', 'tilemax' ),
		'section'  => 'dt_headings_typo_section',
		'default'  => tilemax_defaults( 'customize-body-h6-typo' ),
		'choices'  => array(
			'on'  => esc_attr__( 'Yes', 'tilemax' ),
			'off' => esc_attr__( 'No', 'tilemax' )
		)
	));

	# h6 tag typography	
	TILEMAX_Kirki::add_field( 'tilemax_kirki_config' ,array(
		'type' => 'typography',
		'settings' => 'h6',
		'label'    =>esc_html__('H6 Tag Settings', 'tilemax'),
		'section'  => 'dt_headings_typo_section',
		'output' => array( 
			array( 'element' => 'h6' ),
			array( 
				'element' => '.editor-styles-wrapper .wp-block h6',
				'context' => array ('editor')
			),
		),
		'default' => tilemax_defaults('h6'),
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
			array( 'setting' => 'customize-body-h6-typo', 'operator' => '==', 'value' => '1' )
		)
	));