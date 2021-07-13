<?php
$config = tilemax_kirki_config();

# Footer I Layout
	TILEMAX_Kirki::add_section( 'dt_footer_layout', array(
		'title'	=> esc_html__( 'Layout', 'tilemax' ),
		'description' => esc_html__('Footer Column Layout Settings','tilemax'),
		'panel' => 'dt_site_footer_i_panel',
		'priority' => 1	
	) );
	
		# show-footer
		TILEMAX_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'show-footer',
			'label'    => esc_html__( 'Show Footer Columns ?', 'tilemax' ),
			'section'  => 'dt_footer_layout',
			'default'  => tilemax_defaults('show-footer'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'tilemax' ),
				'off' => esc_attr__( 'No', 'tilemax' )
			)
		));

		# footer-columns
		TILEMAX_Kirki::add_field( $config, array(
			'type'     => 'radio-image',
			'settings' => 'footer-columns',
			'label'    => esc_html__( 'Footer Columns Layout ?', 'tilemax' ),
			'section'  => 'dt_footer_layout',
			'transport' => 'refresh',
			'default'  => tilemax_defaults('footer-columns'),
			'choices' => array(
				'1' => TILEMAX_THEME_URI.'/kirki/assets/images/columns/one-column.png',
				'2' => TILEMAX_THEME_URI.'/kirki/assets/images/columns/one-half-column.png',
				'3' => TILEMAX_THEME_URI.'/kirki/assets/images/columns/one-third-column.png',
				'4' => TILEMAX_THEME_URI.'/kirki/assets/images/columns/one-fourth-column.png',
				'5' => TILEMAX_THEME_URI.'/kirki/assets/images/columns/one-fifth-column.png',
				'6' => TILEMAX_THEME_URI.'/kirki/assets/images/columns/one-sixth-column.png',

				'12' => TILEMAX_THEME_URI.'/kirki/assets/images/columns/onefourth-onefourth-onehalf-column.png',
				'13' => TILEMAX_THEME_URI.'/kirki/assets/images/columns/onehalf-onefourth-onefourth-column.png',
				'11' => TILEMAX_THEME_URI.'/kirki/assets/images/columns/onefourth-onehalf-onefourth-column.png',

				'7' => TILEMAX_THEME_URI.'/kirki/assets/images/columns/onefourth-threefourth-column.png',
				'8' => TILEMAX_THEME_URI.'/kirki/assets/images/columns/threefourth-onefourth-column.png',

				'9' => TILEMAX_THEME_URI.'/kirki/assets/images/columns/onethird-twothird-column.png',
				'10' => TILEMAX_THEME_URI.'/kirki/assets/images/columns/twothird-onethird-column.png',
			),
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' )
			)
		));

		# footer-darkbg
		TILEMAX_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'enable-footer-darkbg',
			'label'    => esc_html__( 'Enable Footer Dark BG', 'tilemax' ),
			'section'  => 'dt_footer_layout',
			'default'  => tilemax_defaults('enable-footer-darkbg'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'tilemax' ),
				'off' => esc_attr__( 'No', 'tilemax' )
			)
		));		


# Footer 1 Background		
	TILEMAX_Kirki::add_section( 'dt_footer_bg', array(
		'title'	=> esc_html__( 'Background', 'tilemax' ),
		'panel' => 'dt_site_footer_i_panel',
		'priority' => 2,
	) );

		# customize-footer-bg
		TILEMAX_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-footer-bg',
			'label'    => esc_html__( 'Customize Background ?', 'tilemax' ),
			'section'  => 'dt_footer_bg',
			'default'  => tilemax_defaults('customize-footer-bg'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'tilemax' ),
				'off' => esc_attr__( 'No', 'tilemax' )
			),
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' )
			)			
		));

		# footer-bg-color
		TILEMAX_Kirki::add_field( $config, array(
			'type' => 'color',
			'settings' => 'footer-bg-color',
			'label'    => esc_html__( 'Background Color', 'tilemax' ),
			'section'  => 'dt_footer_bg',
			'output' => array(
				array( 'element' => 'div.footer-widgets' , 'property' => 'background-color' )
			),
			'choices' => array( 'alpha' => true ),
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-bg', 'operator' => '==', 'value' => '1' )
			)
		));

		# footer-bg-image
		TILEMAX_Kirki::add_field( $config, array(
			'type' => 'image',
			'settings' => 'footer-bg-image',
			'label'    => esc_html__( 'Background Image', 'tilemax' ),
			'description'    => esc_html__( 'Add Background Image for footer', 'tilemax' ),
			'section'  => 'dt_footer_bg',
			'output' => array(
				array( 'element' => 'div.footer-widgets' , 'property' => 'background-image' )
			),
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-bg', 'operator' => '==', 'value' => '1' )
			)
		));

		# footer-bg-position
		TILEMAX_Kirki::add_field( $config, array(
			'type' => 'select',
			'settings' => 'footer-bg-position',
			'label'    => esc_html__( 'Background Image Position', 'tilemax' ),
			'section'  => 'dt_footer_bg',
			'output' => array(
				array( 'element' => 'div.footer-widgets' , 'property' => 'background-position' )
			),
			'default' => 'center',
			'multiple' => 1,
			'choices' => tilemax_image_positions(),
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-bg', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'footer-bg-image', 'operator' => '!=', 'value' => '' )
			)
		));

		# footer-bg-repeat
		TILEMAX_Kirki::add_field( $config, array(
			'type' => 'select',
			'settings' => 'footer-bg-repeat',
			'label'    => esc_html__( 'Background Image Repeat', 'tilemax' ),
			'section'  => 'dt_footer_bg',
			'output' => array(
				array( 'element' => 'div.footer-widgets' , 'property' => 'background-repeat' )				
			),
			'default' => 'repeat',
			'multiple' => 1,
			'choices' => tilemax_image_repeats(),
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-bg', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'footer-bg-image', 'operator' => '!=', 'value' => '' )
			)
		));

# Footer I Typography
	TILEMAX_Kirki::add_section( 'dt_footer_typo', array(
		'title'	=> esc_html__( 'Typography', 'tilemax' ),
		'panel' => 'dt_site_footer_i_panel',
		'priority' => 3,
	) );

		# customize-footer-title-typo
		TILEMAX_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-footer-title-typo',
			'label'    => esc_html__( 'Customize Title ?', 'tilemax' ),
			'section'  => 'dt_footer_typo',
			'default'  => tilemax_defaults('customize-footer-title-typo'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'tilemax' ),
				'off' => esc_attr__( 'No', 'tilemax' )
			),
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' )
			)			
		));

		# footer-title-typo
		TILEMAX_Kirki::add_field( $config, array(
			'type'     => 'typography',
			'settings' => 'footer-title-typo',
			'label'    => esc_html__( 'Title Typography', 'tilemax' ),
			'section'  => 'dt_footer_typo',
			'output' => array(
				array( 'element' => 'div.footer-widgets h3.widgettitle' )
			),
			'default' => tilemax_defaults( 'footer-title-typo' ),
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-title-typo', 'operator' => '==', 'value' => '1' )
			)		
		));

		# Divider
		TILEMAX_Kirki::add_field( $config ,array(
			'type'=> 'custom',
			'settings' => 'footer-title-typo-divider',
			'section'  => 'dt_footer_typo',
			'default'  => '<div class="customize-control-divider"></div>',
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-title-typo', 'operator' => '==', 'value' => '1' )
			)			
		));

		# customize-footer-content-typo
		TILEMAX_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-footer-content-typo',
			'label'    => esc_html__( 'Customize Content ?', 'tilemax' ),
			'section'  => 'dt_footer_typo',
			'default'  => tilemax_defaults('customize-footer-content-typo'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'tilemax' ),
				'off' => esc_attr__( 'No', 'tilemax' )
			),
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' )
			)			
		));

		# footer-content-typo
		TILEMAX_Kirki::add_field( $config, array(
			'type'     => 'typography',
			'settings' => 'footer-content-typo',
			'label'    => esc_html__( 'Content Typography', 'tilemax' ),
			'section'  => 'dt_footer_typo',
			'output' => array(
				array( 'element' => 'div.footer-widgets .widget' )
			),
			'default' => tilemax_defaults( 'footer-content-typo' ),
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-content-typo', 'operator' => '==', 'value' => '1' )
			)		
		));

		# footer-content-a-color		
		TILEMAX_Kirki::add_field( $config, array(
			'type'     => 'color',
			'settings' => 'footer-content-a-color',
			'label'    => esc_html__( 'Anchor Color', 'tilemax' ),
			'section'  => 'dt_footer_typo',
			'choices' => array( 'alpha' => true ),
			'output' => array(
				array( 'element' => '.footer-widgets a, #footer a' )
			),
			'default' => tilemax_defaults( 'footer-content-a-color' ),
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-content-typo', 'operator' => '==', 'value' => '1' )
			)		
		));

		# footer-content-a-hover-color
		TILEMAX_Kirki::add_field( $config, array(
			'type'     => 'color',
			'settings' => 'footer-content-a-hover-color',
			'label'    => esc_html__( 'Anchor Hover Color', 'tilemax' ),
			'section'  => 'dt_footer_typo',
			'choices' => array( 'alpha' => true ),			
			'output' => array(
				array( 'element' => '.footer-widgets a:hover, #footer a:hover' )
			),
			'default' => tilemax_defaults( 'footer-content-a-hover-color' ),
			'active_callback' => array(
				array( 'setting' => 'show-footer', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-content-typo', 'operator' => '==', 'value' => '1' )
			)		
		));