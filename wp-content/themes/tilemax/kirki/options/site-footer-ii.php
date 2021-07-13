<?php
$config = tilemax_kirki_config();

# Footer II Layout
	TILEMAX_Kirki::add_section( 'dt_footer_ii_layout', array(
		'title'	=> esc_html__( 'Layout', 'tilemax' ),
		'description' => esc_html__('Footer Column Layout Settings','tilemax'),
		'panel' => 'dt_site_footer_ii_panel',
		'priority' => 1	
	) );
		# show-footer-ii
		TILEMAX_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'show-footer-ii',
			'label'    => esc_html__( 'Show Footer Columns ?', 'tilemax' ),
			'section'  => 'dt_footer_ii_layout',
			'default'  => tilemax_defaults('show-footer-ii'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'tilemax' ),
				'off' => esc_attr__( 'No', 'tilemax' )
			)
		));

		# footer-ii-columns
		TILEMAX_Kirki::add_field( $config, array(
			'type'     => 'radio-image',
			'settings' => 'footer-ii-columns',
			'label'    => esc_html__( 'Footer Columns Layout ?', 'tilemax' ),
			'section'  => 'dt_footer_ii_layout',
			'default'  => tilemax_defaults('footer-ii-columns'),
			'choices' => array(
				'1' => TILEMAX_THEME_URI.'/kirki/assets/images/columns/one-column.png',
				'2' => TILEMAX_THEME_URI.'/kirki/assets/images/columns/one-half-column.png',
				'3' => TILEMAX_THEME_URI.'/kirki/assets/images/columns/one-third-column.png',
				'4' => TILEMAX_THEME_URI.'/kirki/assets/images/columns/one-fourth-column.png',
			),
			'active_callback' => array(
				array( 'setting' => 'show-footer-ii', 'operator' => '==', 'value' => '1' )
			)
		));

# Footer II Background		
	TILEMAX_Kirki::add_section( 'dt_footer_ii_bg', array(
		'title'	=> esc_html__( 'Background', 'tilemax' ),
		'panel' => 'dt_site_footer_ii_panel',
		'priority' => 2,
	) );

		# customize-footer-ii-bg
		TILEMAX_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-footer-ii-bg',
			'label'    => esc_html__( 'Customize Background ?', 'tilemax' ),
			'section'  => 'dt_footer_ii_bg',
			'default'  => tilemax_defaults('customize-footer-ii-bg'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'tilemax' ),
				'off' => esc_attr__( 'No', 'tilemax' )
			),
			'active_callback' => array(
				array( 'setting' => 'show-footer-ii', 'operator' => '==', 'value' => '1' )
			)			
		));

		# footer-ii-bg-color
		TILEMAX_Kirki::add_field( $config, array(
			'type' => 'color',
			'settings' => 'footer-ii-bg-color',
			'label'    => esc_html__( 'Background Color', 'tilemax' ),
			'section'  => 'dt_footer_ii_bg',
			'output' => array(
				array( 'element' => 'ul.menu' , 'property' => 'background-color' )
			),
			'choices' => array( 'alpha' => true ),
			'active_callback' => array(
				array( 'setting' => 'show-footer-ii', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-ii-bg', 'operator' => '==', 'value' => '1' )
			)
		));

		# footer-ii-bg-image
		TILEMAX_Kirki::add_field( $config, array(
			'type' => 'image',
			'settings' => 'footer-ii-bg-image',
			'label'    => esc_html__( 'Background Image', 'tilemax' ),
			'description'    => esc_html__( 'Add Background Image for footer', 'tilemax' ),
			'section'  => 'dt_footer_ii_bg',
			'output' => array(
				array( 'element' => 'ul.menu' , 'property' => 'background-image' )
			),
			'active_callback' => array(
				array( 'setting' => 'show-footer-ii', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-ii-bg', 'operator' => '==', 'value' => '1' )
			)
		));

		# footer-ii-bg-position
		TILEMAX_Kirki::add_field( $config, array(
			'type' => 'select',
			'settings' => 'footer-ii-bg-position',
			'label'    => esc_html__( 'Background Image Position', 'tilemax' ),
			'section'  => 'dt_footer_ii_bg',
			'output' => array(),
			'default' => 'center',
			'multiple' => 1,
			'choices' => tilemax_image_positions(),
			'active_callback' => array(
				array( 'setting' => 'show-footer-ii', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-ii-bg', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'footer-ii-bg-image', 'operator' => '!=', 'value' => '' )
			)
		));

		# footer-ii-bg-repeat
		TILEMAX_Kirki::add_field( $config, array(
			'type' => 'select',
			'settings' => 'footer-ii-bg-repeat',
			'label'    => esc_html__( 'Background Image Repeat', 'tilemax' ),
			'section'  => 'dt_footer_ii_bg',
			'output' => array(),
			'default' => 'repeat',
			'multiple' => 1,
			'choices' => tilemax_image_repeats(),
			'active_callback' => array(
				array( 'setting' => 'show-footer-ii', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-ii-bg', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'footer-ii-bg-image', 'operator' => '!=', 'value' => '' )
			)
		));

# Footer II Typography
	TILEMAX_Kirki::add_section( 'dt_footer_ii_typo', array(
		'title'	=> esc_html__( 'Typography', 'tilemax' ),
		'panel' => 'dt_site_footer_ii_panel',
		'priority' => 3,
	) );

		# customize-footer-ii-title-typo
		TILEMAX_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-footer-ii-title-typo',
			'label'    => esc_html__( 'Customize Title ?', 'tilemax' ),
			'section'  => 'dt_footer_ii_typo',
			'default'  => tilemax_defaults('customize-footer-ii-title-typo'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'tilemax' ),
				'off' => esc_attr__( 'No', 'tilemax' )
			),
			'active_callback' => array(
				array( 'setting' => 'show-footer-ii', 'operator' => '==', 'value' => '1' )
			)			
		));

		# footer-ii-title-typo
		TILEMAX_Kirki::add_field( $config, array(
			'type'     => 'typography',
			'settings' => 'footer-ii-title-typo',
			'label'    => esc_html__( 'Title Typography', 'tilemax' ),
			'section'  => 'dt_footer_ii_typo',
			'output' => array(
				array( 'element' => '' )
			),
			'default' => tilemax_defaults( 'footer-ii-title-typo' ),
			'active_callback' => array(
				array( 'setting' => 'show-footer-ii', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-ii-title-typo', 'operator' => '==', 'value' => '1' )
			)		
		));

		# Divider
		TILEMAX_Kirki::add_field( $config ,array(
			'type'=> 'custom',
			'settings' => 'footer-ii-title-typo-divider',
			'section'  => 'dt_footer_ii_typo',
			'default'  => '<div class="customize-control-divider"></div>',
			'active_callback' => array(
				array( 'setting' => 'show-footer-ii', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-ii-title-typo', 'operator' => '==', 'value' => '1' )
			)			
		));

		# customize-footer-ii-content-typo
		TILEMAX_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-footer-ii-content-typo',
			'label'    => esc_html__( 'Customize Content ?', 'tilemax' ),
			'section'  => 'dt_footer_ii_typo',
			'default'  => tilemax_defaults('customize-footer-ii-content-typo'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'tilemax' ),
				'off' => esc_attr__( 'No', 'tilemax' )
			),
			'active_callback' => array(
				array( 'setting' => 'show-footer-ii', 'operator' => '==', 'value' => '1' )
			)			
		));

		# footer-ii-content-typo
		TILEMAX_Kirki::add_field( $config, array(
			'type'     => 'typography',
			'settings' => 'footer-ii-content-typo',
			'label'    => esc_html__( 'Content Typography', 'tilemax' ),
			'section'  => 'dt_footer_ii_typo',
			'output' => array(
				array( 'element' => '' )
			),
			'default' => tilemax_defaults( 'footer-ii-content-typo' ),
			'active_callback' => array(
				array( 'setting' => 'show-footer-ii', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-ii-content-typo', 'operator' => '==', 'value' => '1' )
			)		
		));		