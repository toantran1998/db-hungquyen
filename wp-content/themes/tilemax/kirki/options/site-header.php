<?php
$config = tilemax_kirki_config();

# Header Settings
	TILEMAX_Kirki::add_section( 'dt_site_header_section', array(
		'title' => esc_html__( 'Header Style', 'tilemax' ),
		'panel' => 'dt_site_header_panel',
		'priority' => 1
	) );

		# header-type
		TILEMAX_Kirki::add_field( $config, array(
			'type'     => 'radio-image',
			'settings' => 'header-type',
			'label'    => esc_html__( 'Site Header', 'tilemax' ),
			'section'  => 'dt_site_header_section',
			'default'  => tilemax_defaults('header-type'),
			'choices' => array(
				'fullwidth-header' 				=> TILEMAX_THEME_URI.'/kirki/assets/images/site-headers/fullwidth-header.jpg',
				'boxed-header' 					=> TILEMAX_THEME_URI.'/kirki/assets/images/site-headers/boxed-header.jpg',
				'split-header boxed-header' 	=> TILEMAX_THEME_URI.'/kirki/assets/images/site-headers/splitted-boxed-header.jpg',
				'split-header fullwidth-header' => TILEMAX_THEME_URI.'/kirki/assets/images/site-headers/splitted-fullwidth-header.jpg',
				'fullwidth-header header-align-center fullwidth-menu-header' 	=> TILEMAX_THEME_URI.'/kirki/assets/images/site-headers/fullwidth-menu-center.jpg',
				'two-color-header' 			=> TILEMAX_THEME_URI.'/kirki/assets/images/site-headers/two-color-header.jpg',			
				'fullwidth-header header-align-left fullwidth-menu-header' 		=> TILEMAX_THEME_URI.'/kirki/assets/images/site-headers/fullwidth-menu-left.jpg',
				'left-header' 				=> TILEMAX_THEME_URI.'/kirki/assets/images/site-headers/left-header.jpg',
				'left-header-boxed' 		=> TILEMAX_THEME_URI.'/kirki/assets/images/site-headers/left-header-boxed.jpg',			
				'creative-header' 			=> TILEMAX_THEME_URI.'/kirki/assets/images/site-headers/creative-header.jpg',
				'overlay-header' 			=> TILEMAX_THEME_URI.'/kirki/assets/images/site-headers/overlay-header.jpg',
			)
		));

		# enable-sticy-nav
		TILEMAX_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'enable-sticy-nav',
			'label'    => esc_html__( 'Sticky Navigation ?', 'tilemax' ),
			'section'  => 'dt_site_header_section',
			'default'  => tilemax_defaults('enable-sticy-nav'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'tilemax' ),
				'off' => esc_attr__( 'No', 'tilemax' )
			),
			'active_callback' => array(
				array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array(
					'fullwidth-header',
					'boxed-header',
					'split-header boxed-header',
					'split-header fullwidth-header',
					'fullwidth-header header-align-center fullwidth-menu-header',
					'two-color-header',
					'fullwidth-header header-align-left fullwidth-menu-header'
				) ),
			)			
		));	

		# header-position
		TILEMAX_Kirki::add_field( $config, array(
			'type'     => 'select',
			'settings' => 'header-position',
			'label'    => esc_html__( 'Header Position', 'tilemax' ),
			'section'  => 'dt_site_header_section',
			'default'  => tilemax_defaults('header-position'),		
			'choices'  => array(
				'above slider' => esc_attr__( 'Above slider','tilemax'),
				'on slider' => esc_attr__( 'On slider','tilemax'),
				'below slider' => esc_attr__( 'Below slider','tilemax')				
			),
			'active_callback' => array(
				array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array( 
					'fullwidth-header', 'boxed-header', 'split-header boxed-header',
					'split-header fullwidth-header',
					'fullwidth-header header-align-center fullwidth-menu-header',
					'two-color-header',
					'fullwidth-header header-align-left fullwidth-menu-header' ) ),
			)		
		));

		# header-transparency
		TILEMAX_Kirki::add_field( $config, array(
			'type'     => 'select',
			'settings' => 'header-transparency',
			'label'    => esc_html__( 'Header Transparency', 'tilemax' ),
			'section'  => 'dt_site_header_section',
			'default'  => tilemax_defaults('header-transparency'),		
			'choices'  => array(
				'default' => esc_attr__( 'Default','tilemax'),
				'semi-transparent-header' => esc_attr__( 'Semi Transparent','tilemax'),
				'transparent-header' => esc_attr__( 'Transparent','tilemax')				
			),	
		));		

		# enable-header-darkbg
		TILEMAX_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'enable-header-darkbg',
			'label'    => esc_html__( 'Enable Dark BG', 'tilemax' ),
			'section'  => 'dt_site_header_section',
			'default'  => tilemax_defaults('enable-header-darkbg'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'tilemax' ),
				'off' => esc_attr__( 'No', 'tilemax' )
			)		
		));			

		# menu-search-icon
		TILEMAX_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'menu-search-icon',
			'label'    => esc_html__( 'Search Icon ?', 'tilemax' ),
			'section'  => 'dt_site_header_section',
			'default'  => tilemax_defaults('menu-search-icon'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'tilemax' ),
				'off' => esc_attr__( 'No', 'tilemax' )
			),
			'active_callback' => array(
				array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array( 'fullwidth-header', 'boxed-header', 'two-color-header', 'fullwidth-header header-align-center fullwidth-menu-header' ) ),
			)		
		));

		# search-box-type
		TILEMAX_Kirki::add_field( $config, array(
			'type'     => 'select',
			'settings' => 'search-box-type',
			'label'    => esc_html__( 'Search Box Style', 'tilemax' ),
			'section'  => 'dt_site_header_section',
			'default'  => tilemax_defaults('search-box-type'),
			'choices'  => array(
				'type1'   => esc_attr__( 'Default','tilemax'),
				'type2'   => esc_attr__( 'Full Screen','tilemax')
			),
			'active_callback' => array(
				array( 'setting' => 'menu-search-icon', 'operator' => '==', 'value' => '1' ),
			)
		));

		if( function_exists( 'is_woocommerce' ) ):
			# menu-cart-icon
			TILEMAX_Kirki::add_field( $config, array(
				'type'     => 'switch',
				'settings' => 'menu-cart-icon',
				'label'    => esc_html__( 'Cart Icon ?', 'tilemax' ),
				'section'  => 'dt_site_header_section',
				'default'  => '',
				'choices'  => array(
					'on'  => esc_attr__( 'Yes', 'tilemax' ),
					'off' => esc_attr__( 'No', 'tilemax' )
				),
				'active_callback' => array(
					array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array(
						'fullwidth-header',
						'boxed-header',
						'two-color-header') ),
				)
			));
		endif;	

		# Top bar Color

			# enable-top-bar-content
			TILEMAX_Kirki::add_field( $config, array(
				'type'     => 'switch',
				'settings' => 'enable-top-bar-content',
				'label'    => esc_html__( 'Show Top Bar', 'tilemax' ),
				'section'  => 'dt_site_header_section',
				'choices'  => array(
					'on'  => esc_attr__( 'Yes', 'tilemax' ),
					'off' => esc_attr__( 'No', 'tilemax' )
				),
				/*'active_callback' => array(
					array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array( 
						'fullwidth-header',					
						'fullwidth-header header-align-center fullwidth-menu-header',
						'two-color-header',
						'fullwidth-header header-align-left fullwidth-menu-header' ) ),
				)*/
			));

			# top-bar-content
			TILEMAX_Kirki::add_field( $config, array(
				'type'     => 'textarea',
				'settings' => 'top-bar-content',
				'label'    => esc_html__( 'Content', 'tilemax' ),
				'section'  => 'dt_site_header_section',
				'active_callback' => array(
					array( 'setting' => 'enable-top-bar-content', 'operator' => '==', 'value' => '1' ),
					/*array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array( 
						'fullwidth-header',
						'fullwidth-header header-align-center fullwidth-menu-header',
						'two-color-header',
						'fullwidth-header header-align-left fullwidth-menu-header' ) ),	*/		
				)
			) );

			# customize-top-bar		
			TILEMAX_Kirki::add_field( $config, array(
				'type'     => 'switch',
				'settings' => 'customize-top-bar',
				'label'    => esc_html__( 'Customize Top Bar', 'tilemax' ),
				'section'  => 'dt_site_header_section',
				'choices'  => array(
					'on'  => esc_attr__( 'Yes', 'tilemax' ),
					'off' => esc_attr__( 'No', 'tilemax' )
				),
				'active_callback' => array(
					array( 'setting' => 'enable-top-bar-content', 'operator' => '==', 'value' => '1' ), 
					array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array( 
						'fullwidth-header',					
						'fullwidth-header header-align-center fullwidth-menu-header',
						'two-color-header',
						'fullwidth-header header-align-left fullwidth-menu-header' ) ),
				)
			));

			# top-bar-bg-color 			
			TILEMAX_Kirki::add_field( $config, array(
				'type' => 'color',
				'settings' => 'top-bar-bg-color',
				'label'    => esc_html__( 'Top Bar BG Color', 'tilemax' ),
				'section'  => 'dt_site_header_section',
				'output' => array(
					array( 'element' => '.top-bar' , 'property' => 'background-color' )
				),
				'choices' => array( 'alpha' => true ),
				'default'  => tilemax_defaults('top-bar-bg-color'),
				'active_callback' => array(
					array( 'setting' => 'enable-top-bar-content', 'operator' => '==', 'value' => '1' ), 
					array( 'setting' => 'customize-top-bar', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array(
						'fullwidth-header', 'two-color-header',
						'fullwidth-header header-align-center fullwidth-menu-header',
						'fullwidth-header header-align-left fullwidth-menu-header' )
					)
				)		
			));

			# top-bar-text-color 			
			TILEMAX_Kirki::add_field( $config, array(
				'type' => 'color',
				'settings' => 'top-bar-text-color',
				'label'    => esc_html__( 'Top Bar Text Color', 'tilemax' ),
				'section'  => 'dt_site_header_section',
				'output' => array(
					array( 'element' => '.top-bar' , 'property' => 'color' )
				),
				'choices' => array( 'alpha' => true ),
				'default'  => tilemax_defaults('top-bar-text-color'),
				'active_callback' => array(
					array( 'setting' => 'enable-top-bar-content', 'operator' => '==', 'value' => '1' ), 
					array( 'setting' => 'customize-top-bar', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array(
						'fullwidth-header', 'two-color-header',
						'fullwidth-header header-align-center fullwidth-menu-header',
						'fullwidth-header header-align-left fullwidth-menu-header' )
					)
				)		
			));

			# top-bar-a-color 			
			TILEMAX_Kirki::add_field( $config, array(
				'type' => 'color',
				'settings' => 'top-bar-a-color',
				'label'    => esc_html__( 'Top Bar Anchor Color', 'tilemax' ),
				'section'  => 'dt_site_header_section',
				'output' => array(
					array( 'element' => '.top-bar a' , 'property' => 'color' )
				),
				'choices' => array( 'alpha' => true ),
				'default'  => tilemax_defaults('top-bar-a-color'),				
				'active_callback' => array(
					array( 'setting' => 'enable-top-bar-content', 'operator' => '==', 'value' => '1' ), 
					array( 'setting' => 'customize-top-bar', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array(
						'fullwidth-header', 'two-color-header',
						'fullwidth-header header-align-center fullwidth-menu-header',
						'fullwidth-header header-align-left fullwidth-menu-header' )
					)
				)
			));

			# top-bar-a-hover-color 			
			TILEMAX_Kirki::add_field( $config, array(
				'type' => 'color',
				'settings' => 'top-bar-a-hover-color',
				'label'    => esc_html__( 'Top Bar Anchor Hover Color', 'tilemax' ),
				'section'  => 'dt_site_header_section',
				'output' => array(
					array( 'element' => '.top-bar a:hover' , 'property' => 'color' )
				),
				'choices' => array( 'alpha' => true ),
				'default'  => tilemax_defaults('top-bar-a-hover-color'),
				'active_callback' => array(
					array( 'setting' => 'enable-top-bar-content', 'operator' => '==', 'value' => '1' ), 
					array( 'setting' => 'customize-top-bar', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array(
						'fullwidth-header', 'two-color-header',
						'fullwidth-header header-align-center fullwidth-menu-header',
						'fullwidth-header header-align-left fullwidth-menu-header' )
					)
				)		
			));

		# enable-header-left-content	
		TILEMAX_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'enable-header-left-content',
			'label'    => esc_html__( 'Show Header Left', 'tilemax' ),
			'section'  => 'dt_site_header_section',
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'tilemax' ),
				'off' => esc_attr__( 'No', 'tilemax' )
			),
			'active_callback' => array(
				array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array( 'fullwidth-header header-align-center fullwidth-menu-header', 'left-header', 'left-header-boxed', 'creative-header' ) ),
			)				
		));

		# header-left-content
		TILEMAX_Kirki::add_field( $config, array(
			'type'     => 'textarea',
			'settings' => 'header-left-content',
			'label'    => esc_html__( 'Left Content', 'tilemax' ),
			'section'  => 'dt_site_header_section',
			'active_callback' => array(
				array( 'setting' => 'enable-header-left-content', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array( 'fullwidth-header header-align-center fullwidth-menu-header', 'left-header', 'left-header-boxed', 'creative-header' ) ),
			)
		) );

		# enable-header-right-content	
		TILEMAX_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'enable-header-right-content',
			'label'    => esc_html__( 'Show Header Right', 'tilemax' ),
			'section'  => 'dt_site_header_section',
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'tilemax' ),
				'off' => esc_attr__( 'No', 'tilemax' )
			),
			'active_callback' => array(
				array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array( 
					'fullwidth-header header-align-center fullwidth-menu-header',
					'fullwidth-header header-align-left fullwidth-menu-header' ) ),
			)				
		));

		# header-right-content
		TILEMAX_Kirki::add_field( $config, array(
			'type'     => 'textarea',
			'settings' => 'header-right-content',
			'label'    => esc_html__( 'Right Content', 'tilemax' ),
			'section'  => 'dt_site_header_section',
			'active_callback' => array(
				array( 'setting' => 'enable-header-right-content', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'header-type', 'operator' => 'contains', 'value' => array( 'fullwidth-header header-align-center fullwidth-menu-header', 'fullwidth-header header-align-left fullwidth-menu-header') ),
			)
		) );

# Header Background Settings
	TILEMAX_Kirki::add_section( 'dt_site_header_bg_section', array(
		'title' => esc_html__( 'Header Background', 'tilemax' ),
		'panel' => 'dt_site_header_panel',
		'priority' => 2
	) );

		# customize-header-bg
		TILEMAX_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-header-bg',
			'label'    => esc_html__( 'Customize Background ?', 'tilemax' ),
			'section'  => 'dt_site_header_bg_section',
			'default'  => tilemax_defaults('customize-header-bg'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'tilemax' ),
				'off' => esc_attr__( 'No', 'tilemax' )
			)						
		));

		# header-bg-color
		TILEMAX_Kirki::add_field( $config, array(
			'type' => 'color',
			'settings' => 'header-bg-color',
			'label'    => esc_html__( 'Background Color', 'tilemax' ),
			'section'  => 'dt_site_header_bg_section',
			'output' => array(
				array( 'element' => '.main-header-wrapper, .is-sticky .main-header-wrapper, .fullwidth-header .main-header-wrapper, .boxed-header .main-header, .boxed-header .is-sticky .main-header-wrapper, .header-align-left.fullwidth-menu-header .is-sticky .menu-wrapper, .header-align-center.fullwidth-menu-header .is-sticky .menu-wrapper, .standard-header .is-sticky .main-header-wrapper, .two-color-header .main-header-wrapper:before, .header-on-slider .is-sticky .main-header-wrapper, .left-header .main-header-wrapper, .left-header .main-header, .overlay-header .overlay, .dt-menu-toggle' , 'property' => 'background-color' )
			),
			'choices' => array( 'alpha' => true ),
			'active_callback' => array(
				array( 'setting' => 'customize-header-bg', 'operator' => '==', 'value' => '1' )
			)
		));

		# header-bg-image
		TILEMAX_Kirki::add_field( $config, array(
			'type' => 'image',
			'settings' => 'header-bg-image',
			'label'    => esc_html__( 'Background Image', 'tilemax' ),
			'description'    => esc_html__( 'Add Background Image for breadcrumb', 'tilemax' ),
			'section'  => 'dt_site_header_bg_section',
			'output' => array(
				array( 'element' => '#main-header-wrapper' , 'property' => 'background-image' )
			),
			'active_callback' => array(
				array( 'setting' => 'customize-header-bg', 'operator' => '==', 'value' => '1' )
			)
		));

		# header-bg-position
		TILEMAX_Kirki::add_field( $config, array(
			'type' => 'select',
			'settings' => 'header-bg-position',
			'label'    => esc_html__( 'Background Image Position', 'tilemax' ),
			'section'  => 'dt_site_header_bg_section',
			'output' => array(
				array( 'element' => '#main-header-wrapper' , 'property' => 'background-position' )				
			),
			'default' => 'center',
			'multiple' => 1,
			'choices' => tilemax_image_positions(),
			'active_callback' => array(
				array( 'setting' => 'customize-header-bg', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'header-bg-image', 'operator' => '!=', 'value' => '' )
			)
		));

		# header-bg-repeat
		TILEMAX_Kirki::add_field( $config, array(
			'type' => 'select',
			'settings' => 'header-bg-repeat',
			'label'    => esc_html__( 'Background Image Repeat', 'tilemax' ),
			'section'  => 'dt_site_header_bg_section',
			'output' => array(
				array( 'element' => '#main-header-wrapper' , 'property' => 'background-repeat' )				
			),
			'default' => 'repeat',
			'multiple' => 1,
			'choices' => tilemax_image_repeats(),
			'active_callback' => array(
				array( 'setting' => 'customize-header-bg', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'header-bg-image', 'operator' => '!=', 'value' => '' )
			)
		));		