<?php
$config = tilemax_kirki_config();

# Main menu
	TILEMAX_Kirki::add_section( 'dt_site_navigation_section', array(
		'title' => esc_html__( 'Main Menu', 'tilemax' ),
		'panel' => 'dt_site_menu_panel',
		'priority' => 1
	) );

		# menu-active-style
		TILEMAX_Kirki::add_field( $config, array(
			'type'     => 'select',
			'settings' => 'menu-active-style',
			'label'    => esc_html__( 'Menu Active Style', 'tilemax' ),
			'section'  => 'dt_site_navigation_section',
			'default'  => tilemax_defaults('menu-active-style'),
			'choices'  => array(
				"menu-default" => esc_attr__( 'Default','tilemax'),
				"menu-active-with-icon menu-active-highlight" => esc_attr__( 'Highlight with Plus Icon','tilemax'),
				"menu-active-highlight" => esc_attr__( 'Highlight','tilemax'),
				"menu-active-highlight-grey" => esc_attr__( 'Highlight Grey','tilemax'),
				"menu-active-highlight-with-arrow" => esc_attr__( 'Highlight with Arrow','tilemax'),
				"menu-active-with-two-border" => esc_attr__( 'Two Border','tilemax'),
				"menu-active-with-double-border" => esc_attr__( 'Double Border','tilemax'),
				"menu-active-border-with-arrow" => esc_attr__( 'Border with Arrow','tilemax'),
				"menu-with-slanting-splitter" => esc_attr__( 'Slanting Splitter','tilemax'),
			)
		));

		# Divider
		TILEMAX_Kirki::add_field( $config ,array(
			'type'=> 'custom',
			'settings' => 'menu-bg-color-divider',
			'section'  => 'dt_site_navigation_section',
			'default'  => '<div class="customize-control-divider"></div>',
			'active_callback' => array(
				array( 'setting' => 'customize-menu-bg-color', 'operator' => '==', 'value' => '1' ),
			)			
		));

		# customize-menu-bg-color
		TILEMAX_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-menu-bg-color',
			'label'    => esc_html__( 'Customize Menu BG ?', 'tilemax' ),
			'section'  => 'dt_site_navigation_section',
			'default'  => tilemax_defaults('customize-menu-bg-color'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'tilemax' ),
				'off' => esc_attr__( 'No', 'tilemax' )
			)
		));		

		# menu-bg-color
		TILEMAX_Kirki::add_field( $config, array(
			'type' => 'color',
			'settings' => 'menu-bg-color',
			'label'    => esc_html__( 'Background Color', 'tilemax' ),
			'section'  => 'dt_site_navigation_section',
			'output' => array(
				array( 'element' => '.menu-wrapper, .dt-menu-toggle' , 'property' => 'background-color' )
			),
			'choices' => array( 'alpha' => true ),
			'active_callback' => array(
				array( 'setting' => 'customize-menu-bg-color', 'operator' => '==', 'value' => '1' ),
			)		
		));

		# Divider
		TILEMAX_Kirki::add_field( $config ,array(
			'type'=> 'custom',
			'settings' => 'menu-link-color-divider',
			'section'  => 'dt_site_navigation_section',
			'default'  => '<div class="customize-control-divider"></div>'
		));

		# customize-menu-link
		TILEMAX_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-menu-link',
			'label'    => esc_html__( 'Customize Menu Link Colors ?', 'tilemax' ),
			'section'  => 'dt_site_navigation_section',
			'default'  => tilemax_defaults('customize-menu-link'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'tilemax' ),
				'off' => esc_attr__( 'No', 'tilemax' )
			)
		));

		# menu-a-color
		TILEMAX_Kirki::add_field( $config, array(
			'type' => 'color',
			'settings' => 'menu-a-color',
			'label'    => esc_html__( 'Menu link Color', 'tilemax' ),
			'section'  => 'dt_site_navigation_section',
			'output' => array(
				array( 'element' => '#main-menu ul.menu > li > a, .dt-sc-dark-bg #main-menu ul.menu > li > a, 

					.menu-with-splitter  #main-menu > ul.menu > li > a, .menu-with-splitter #main-menu > ul.menu > li > .nolink-menu, 

					.header-align-left #main-menu > ul.menu > li > a, .header-align-left #main-menu > ul.menu > li > .nolink-menu, 

					.header-align-center #main-menu > ul.menu > li > a , .header-align-center #main-menu > ul.menu > li > .nolink-menu, 

					.split-header #main-menu > ul.menu > li > a, .split-header #main-menu > ul.menu > li > .nolink-menu


					' , 'property' => 'color' )
			),
			'choices' => array( 'alpha' => true ),
			'active_callback' => array(
				array( 'setting' => 'customize-menu-link', 'operator' => '==', 'value' => '1' ),
			)		
		));

		# menu-a-hover-color
		TILEMAX_Kirki::add_field( $config, array(
			'type' => 'color',
			'settings' => 'menu-a-hover-color',
			'label'    => esc_html__( 'Menu link hover Color', 'tilemax' ),
			'section'  => 'dt_site_navigation_section',
			'output' => array(
				array( 'element' => '#main-menu ul.menu > li > a:hover, #main-menu ul.menu li.menu-item-megamenu-parent:hover > a, #main-menu ul.menu > li.menu-item-simple-parent:hover > a' , 'property' => 'color' )
			),
			'choices' => array( 'alpha' => true ),
			'active_callback' => array(
				array( 'setting' => 'customize-menu-link', 'operator' => '==', 'value' => '1' ),
			)		
		));

		# menu-a-active-color
		TILEMAX_Kirki::add_field( $config, array(
			'type' => 'color',
			'settings' => 'menu-a-active-color',
			'label'    => esc_html__( 'Active Menu Color', 'tilemax' ),
			'section'  => 'dt_site_navigation_section',
			'output' => array(
				array( 'element' => '.menu-active-highlight-grey #main-menu > ul.menu > li.current_page_item > a:before, .menu-active-highlight-grey #main-menu > ul.menu > li.current_page_ancestor > a:before, .menu-active-highlight-grey #main-menu > ul.menu > li.current-menu-item > a:before, .menu-active-highlight-grey #main-menu > ul.menu > li.current-menu-ancestor > a:before, 

					.menu-active-border-with-arrow #main-menu > ul.menu > li.current_page_item > a:after, .menu-active-border-with-arrow #main-menu > ul.menu > li.current_page_ancestor > a:after, .menu-active-border-with-arrow #main-menu > ul.menu > li.current-menu-item > a:after, .menu-active-border-with-arrow #main-menu > ul.menu > li.current-menu-ancestor > a:after, 

					.menu-active-highlight.menu-active-with-icon #main-menu > ul.menu > li.current_page_item > a:before, .menu-active-highlight.menu-active-with-icon #main-menu > ul.menu > li.current_page_ancestor > a:before, .menu-active-highlight.menu-active-with-icon #main-menu > ul.menu > li.current-menu-item > a:before, .menu-active-highlight.menu-active-with-icon #main-menu > ul.menu > li.current-menu-ancestor > a:before,  .menu-active-highlight.menu-active-with-icon #main-menu > ul.menu > li.current_page_item > a:after, .menu-active-highlight.menu-active-with-icon #main-menu > ul.menu > li.current_page_ancestor > a:after, .menu-active-highlight.menu-active-with-icon #main-menu > ul.menu > li.current-menu-item > a:after, .menu-active-highlight.menu-active-with-icon #main-menu > ul.menu > li.current-menu-ancestor > a:after, 

					.menu-active-with-two-border #main-menu > ul.menu > li.current_page_item > a:before, .menu-active-with-two-border #main-menu > ul.menu > li.current_page_ancestor > a:before, .menu-active-with-two-border #main-menu > ul.menu > li.current-menu-item > a:before, .menu-active-with-two-border #main-menu > ul.menu > li.current-menu-ancestor > a:before, .menu-active-with-two-border #main-menu > ul.menu > li.current_page_item > a:after, .menu-active-with-two-border #main-menu > ul.menu > li.current_page_ancestor > a:after, .menu-active-with-two-border #main-menu > ul.menu > li.current-menu-item > a:after, .menu-active-with-two-border #main-menu > ul.menu > li.current-menu-ancestor > a:after' , 'property' => 'background-color' ),

				array( 'element' => '.menu-active-with-double-border #main-menu > ul.menu > li.current_page_item > a, .menu-active-with-double-border #main-menu > ul.menu > li.current_page_ancestor > a, .menu-active-with-double-border #main-menu > ul.menu > li.current-menu-item > a, .menu-active-with-double-border #main-menu > ul.menu > li.current-menu-ancestor > a' , 'property' => 'border-color' ),

				array( 'element' => '.menu-active-border-with-arrow #main-menu > ul.menu > li.current_page_item > a:before, .menu-active-border-with-arrow #main-menu > ul.menu > li.current_page_ancestor > a:before, .menu-active-border-with-arrow #main-menu > ul.menu > li.current-menu-item > a:before, .menu-active-border-with-arrow #main-menu > ul.menu > li.current-menu-ancestor > a:before' , 'property' => 'border-bottom-color' ),

				array( 'element' => '#main-menu > ul.menu > li.current_page_item > a, #main-menu > ul.menu > li.current_page_ancestor > a, #main-menu > ul.menu > li.current-menu-item > a, #main-menu ul.menu > li.current-menu-ancestor > a, #main-menu ul.menu li.menu-item-simple-parent ul > li.current_page_item > a, #main-menu ul.menu li.menu-item-simple-parent ul > li.current_page_ancestor > a, #main-menu ul.menu li.menu-item-simple-parent ul > li.current-menu-item > a, #main-menu ul.menu li.menu-item-simple-parent ul > li.current-menu-ancestor > a, .left-header #main-menu > ul.menu > li.current_page_item > a,.left-header #main-menu > ul.menu > li.current_page_ancestor > a,.left-header #main-menu > ul.menu > li.current-menu-item > a, .left-header #main-menu > ul.menu > li.current-menu-ancestor > a, 

					.menu-active-highlight #main-menu > ul.menu > li.current_page_item > a, .menu-active-highlight #main-menu > ul.menu > li.current_page_ancestor > a, .menu-active-highlight #main-menu > ul.menu > li.current-menu-item > a, .menu-active-highlight #main-menu > ul.menu > li.current-menu-ancestor > a' , 'property' => 'color' ),

			),
			'choices' => array( 'alpha' => true ),
			'active_callback' => array(
				array( 'setting' => 'customize-menu-link', 'operator' => '==', 'value' => '1' ),
			)		
		));

		# menu-a-active-bg-color
		TILEMAX_Kirki::add_field( $config, array(
			'type' => 'color',
			'settings' => 'menu-a-active-bg-color',
			'label'    => esc_html__( 'Active Menu BG Color', 'tilemax' ),
			'section'  => 'dt_site_navigation_section',
			'output' => array(
				array( 'element' => '#main-menu > ul.menu > li.current_page_item > a, #main-menu > ul.menu > li.current_page_ancestor > a, #main-menu > ul.menu > li.current-menu-item > a, #main-menu > ul.menu > li.current-menu-ancestor > a,  .menu-active-highlight-grey #main-menu > ul.menu > li.current_page_item, .menu-active-highlight-grey #main-menu > ul.menu > li.current_page_ancestor, .menu-active-highlight-grey #main-menu > ul.menu > li.current-menu-item, .menu-active-highlight-grey #main-menu > ul.menu > li.current-menu-ancestor, 

					.menu-active-highlight-with-arrow #main-menu > ul.menu > li.current_page_item > a, .menu-active-highlight-with-arrow #main-menu > ul.menu > li.current_page_ancestor > a, .menu-active-highlight-with-arrow #main-menu > ul.menu > li.current-menu-item > a, .menu-active-highlight-with-arrow #main-menu > ul.menu > li.current-menu-ancestor > a' , 'property' => 'background-color' ),

				array( 'element' => '.menu-active-highlight-with-arrow #main-menu > ul.menu > li.current_page_item > a:before, .menu-active-highlight-with-arrow #main-menu > ul.menu > li.current_page_ancestor > a:before, .menu-active-highlight-with-arrow #main-menu > ul.menu > li.current-menu-item > a:before, .menu-active-highlight-with-arrow #main-menu > ul.menu > li.current-menu-ancestor > a:before' , 'property' => 'border-top-color' )
			),
			'choices' => array( 'alpha' => true ),
			'active_callback' => array(
				array( 'setting' => 'customize-menu-link', 'operator' => '==', 'value' => '1' ),
			)		
		));

# Sub menu
	TILEMAX_Kirki::add_section( 'dt_site_sub_menu_section', array(
		'title' => esc_html__( 'Sub Menu', 'tilemax' ),
		'panel' => 'dt_site_menu_panel',
		'priority' => 2
	) );

		# menu-hover-animation-style
		TILEMAX_Kirki::add_field( $config, array(
			'type'     => 'select',
			'settings' => 'menu-hover-style',
			'label'    => esc_html__( 'Sub Menu Wrapper Animation', 'tilemax' ),
			'section'  => 'dt_site_sub_menu_section',
			'default'  => tilemax_defaults('menu-hover-style'),
			'choices'  => tilemax_animations()
		));

		# customize-sub-menu-wrapper
			TILEMAX_Kirki::add_field( $config, array(
				'type'     => 'switch',
				'settings' => 'customize-sub-menu-wrapper',
				'label'    => esc_html__( 'Customize Sub Menu Wrapper ?', 'tilemax' ),
				'section'  => 'dt_site_sub_menu_section',
				'choices'  => array(
					'on'  => esc_attr__( 'Yes', 'tilemax' ),
					'off' => esc_attr__( 'No', 'tilemax' )
				)
			));

			# Sub Menu Wrapper Background Color
			
				# allow-sub-menu-bg-color
				TILEMAX_Kirki::add_field( $config, array(
					'type'     => 'switch',
					'settings' => 'allow-sub-menu-bg-color',
					'label'    => esc_html__( 'Custom BG - Sub Menu Wrapper', 'tilemax' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices'  => array(
						'on'  => esc_attr__( 'Yes', 'tilemax' ),
						'off' => esc_attr__( 'No', 'tilemax' )
					),
					'active_callback' => array(
						array( 'setting' => 'customize-sub-menu-wrapper', 'operator' => '==', 'value' => '1' ),
					)
				));

				# sub-menu-bg-color-type
				TILEMAX_Kirki::add_field( $config, array(
					'type'     => 'select',
					'settings' => 'sub-menu-bg-color-type',
					'label'    => esc_html__( 'BG Color Type', 'tilemax' ),
					'section'  => 'dt_site_sub_menu_section',
					'default'  => 'simple',
					'choices'  => array(
						'simple' => esc_html__('Simple','tilemax'),
						'gradient' => esc_html__('Gradient','tilemax')
					),
					'active_callback' => array(
						array( 'setting' => 'customize-sub-menu-wrapper', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'allow-sub-menu-bg-color', 'operator' => '==', 'value' => '1' ),
					)			
				));

				# sub-menu-bg-color
				TILEMAX_Kirki::add_field( $config, array(
					'type' => 'color',
					'settings' => 'sub-menu-bg-color',
					'label'    => esc_html__( 'BG Color', 'tilemax' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices' => array( 'alpha' => true ),
					'output' => array(
						array( 'element' => '#main-menu ul li.menu-item-simple-parent ul, #main-menu .megamenu-child-container', 'property' => 'background-color')
					),
					'active_callback' => array(
						array( 'setting' => 'customize-sub-menu-wrapper', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'allow-sub-menu-bg-color', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'sub-menu-bg-color-type', 'operator' => '==', 'value' => 'simple' ),
					)
				));			

				# sub-menu-bg-color-1
				TILEMAX_Kirki::add_field( $config, array(
					'type' => 'color',
					'settings' => 'sub-menu-bg-color-1',
					'label'    => esc_html__( 'Gradient BG 1', 'tilemax' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices' => array( 'alpha' => true ),
					'output' => array(
						array( 'element' => '', 'property' => 'background-color')
					),
					'active_callback' => array(
						array( 'setting' => 'customize-sub-menu-wrapper', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'allow-sub-menu-bg-color', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'sub-menu-bg-color-type', 'operator' => '==', 'value' => 'gradient' ),
					)				
				));

				# sub-menu-bg-color-1-stop
				TILEMAX_Kirki::add_field( $config, array(
					'type'     => 'slider',
					'settings' => 'sub-menu-bg-color-1-stop',
					'label'    => esc_html__( 'Gradient BG 1 Stop (in %)', 'tilemax' ),
					'section'  => 'dt_site_sub_menu_section',
					'default'	=> 30,
					'choices'     => array( 'min'  => '0', 'max'  => '100', 'step' => '1' ),
					'active_callback' => array(
						array( 'setting' => 'customize-sub-menu-wrapper', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'allow-sub-menu-bg-color', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'sub-menu-bg-color-1', 'operator' => '!==', 'value' => '' ),
						array( 'setting' => 'sub-menu-bg-color-type', 'operator' => '==', 'value' => 'gradient' )
					)			
				));

				# sub-menu-bg-color-2
				TILEMAX_Kirki::add_field( $config, array(
					'type' => 'color',
					'settings' => 'sub-menu-bg-color-2',
					'label'    => esc_html__( 'Gradient BG 2', 'tilemax' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices' => array( 'alpha' => true ),
					'output' => array(
						array( 'element' => '', 'property' => 'background-color')
					),
					'active_callback' => array(
						array( 'setting' => 'customize-sub-menu-wrapper', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'allow-sub-menu-bg-color', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'sub-menu-bg-color-type', 'operator' => '==', 'value' => 'gradient' ),
					)				
				));

				# sub-menu-bg-color-2-stop
				TILEMAX_Kirki::add_field( $config, array(
					'type'     => 'slider',
					'settings' => 'sub-menu-bg-color-2-stop',
					'label'    => esc_html__( 'Gradient BG 2 Stop (in %)', 'tilemax' ),
					'default'	=> 50,
					'choices'     => array( 'min'  => '0', 'max'  => '100', 'step' => '1' ),
					'section'  => 'dt_site_sub_menu_section',			
					'active_callback' => array(
						array( 'setting' => 'customize-sub-menu-wrapper', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'allow-sub-menu-bg-color', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'sub-menu-bg-color-2', 'operator' => '!==', 'value' => '' ),
						array( 'setting' => 'sub-menu-bg-color-type', 'operator' => '==', 'value' => 'gradient' )
					)			
				));

				# sub-menu-bg-color-direction
				TILEMAX_Kirki::add_field( $config, array(
					'type'     => 'select',
					'settings' => 'sub-menu-bg-color-direction',
					'label'    => esc_html__( 'Gradient Direction', 'tilemax' ),
					'section'  => 'dt_site_sub_menu_section',
					'default'  => 'to top',
					'choices'  => array(
						'to top' => esc_html__('Bottom to Top','tilemax'),
						'to bottom' => esc_html__('Top to Bottom','tilemax'),
						'to right' => esc_html__('Left to Right','tilemax'),
						'to left' => esc_html__('Right to Left','tilemax'),
						'to top left' => esc_html__('Bottom Right to Top Left','tilemax'),
						'to top right' => esc_html__('Bottom Left to Right Top','tilemax'),
						'to bottom right' => esc_html__('Left Top to Bottom Right','tilemax'),
						'to bottom left' => esc_html__('Right Top to Bottom Left','tilemax'),
					),			
					'active_callback' => array(
						array( 'setting' => 'customize-sub-menu-wrapper', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'allow-sub-menu-bg-color', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'sub-menu-bg-color-type', 'operator' => '==', 'value' => 'gradient' ),
						array( 'setting' => 'sub-menu-bg-color-1', 'operator' => '!==', 'value' => '' ),
						array( 'setting' => 'sub-menu-bg-color-2', 'operator' => '!==', 'value' => '' ),
					)			
				));
			# Sub Menu Wrapper Background Color
			
			# Sub Menu Wrapper Border
				# allow-sub-menu-border
				TILEMAX_Kirki::add_field( $config, array(
					'type'     => 'switch',
					'settings' => 'allow-sub-menu-border',
					'label'    => esc_html__( 'Sub Menu Wrapper Border?', 'tilemax' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices'  => array(
						'on'  => esc_attr__( 'Yes', 'tilemax' ),
						'off' => esc_attr__( 'No', 'tilemax' )
					),
					'active_callback' => array(
						array( 'setting' => 'customize-sub-menu-wrapper', 'operator' => '==', 'value' => '1' )					
					)
				));

				# sub-menu-border-style
				TILEMAX_Kirki::add_field( $config, array(
					'type'     => 'select',
					'settings' => 'sub-menu-border-style',
					'label'    => esc_html__( 'Sub-Menu Wrapper Border Style', 'tilemax' ),
					'section'  => 'dt_site_sub_menu_section',
					'output' => array( 
						array( 'element' => '#main-menu ul li.menu-item-simple-parent ul, #main-menu .megamenu-child-container', 'property' => 'border-style')
					),
					'default'  => 'solid',
					'choices'  => tilemax_border_styles(),
					'active_callback' => array(
						array( 'setting' => 'customize-sub-menu-wrapper', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'allow-sub-menu-border', 'operator' => '==', 'value' => '1' ),
					)			
				));
			
				# sub-menu-top-border
				TILEMAX_Kirki::add_field( $config, array(
					'type'     => 'slider',
					'settings' => 'sub-menu-top-border',
					'label'    => esc_html__( 'Top Border', 'tilemax' ),
					'description'    => esc_html__( 'sub menu top border value in px', 'tilemax' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices'  => array( 'min'  => 1, 'max'  => 50, 'step' => 1 ),
					'output' => array( 
						array( 'element' => '#main-menu ul li.menu-item-simple-parent ul, #main-menu .megamenu-child-container', 'property' => 'border-top-width', 'units' => 'px' )
					),
					'active_callback' => array(
						array( 'setting' => 'customize-sub-menu-wrapper', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'allow-sub-menu-border', 'operator' => '==', 'value' => '1' ),
					)			
				));

				# sub-menu-right-border
				TILEMAX_Kirki::add_field( $config, array(
					'type'     => 'slider',
					'settings' => 'sub-menu-right-border',
					'label'    => esc_html__( 'Right Border', 'tilemax' ),
					'description'    => esc_html__( 'sub menu right border value in px', 'tilemax' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices'  => array( 'min'  => 1, 'max'  => 50, 'step' => 1 ),
					'output' => array( 
						array( 'element' => '#main-menu ul li.menu-item-simple-parent ul, #main-menu .megamenu-child-container', 'property' => 'border-right-width', 'units' => 'px' )
					),
					'active_callback' => array(
						array( 'setting' => 'customize-sub-menu-wrapper', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'allow-sub-menu-border', 'operator' => '==', 'value' => '1' ),
					)			
				));

				# sub-menu-bottom-border
				TILEMAX_Kirki::add_field( $config, array(
					'type'     => 'slider',
					'settings' => 'sub-menu-bottom-border',
					'label'    => esc_html__( 'Bottom Border', 'tilemax' ),
					'description'    => esc_html__( 'sub menu bottom border value in px', 'tilemax' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices'  => array( 'min'  => 1, 'max'  => 50, 'step' => 1 ),
					'output' => array( 
						array( 'element' => '#main-menu ul li.menu-item-simple-parent ul, #main-menu .megamenu-child-container', 'property' => 'border-bottom-width', 'units' => 'px' )
					),
					'active_callback' => array(
						array( 'setting' => 'customize-sub-menu-wrapper', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'allow-sub-menu-border', 'operator' => '==', 'value' => '1' ),
					)			
				));

				# sub-menu-left-border
				TILEMAX_Kirki::add_field( $config, array(
					'type'     => 'slider',
					'settings' => 'sub-menu-left-border',
					'label'    => esc_html__( 'Left Border', 'tilemax' ),
					'description'    => esc_html__( 'sub menu left border value in px', 'tilemax' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices'  => array( 'min'  => 1, 'max'  => 50, 'step' => 1 ),
					'output' => array( 
						array( 'element' => '#main-menu ul li.menu-item-simple-parent ul, #main-menu .megamenu-child-container', 'property' => 'border-left-width', 'units' => 'px' )
					),
					'active_callback' => array(
						array( 'setting' => 'customize-sub-menu-wrapper', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'allow-sub-menu-border', 'operator' => '==', 'value' => '1' ),
					)			
				));	

				# sub-menu-border-color
				TILEMAX_Kirki::add_field( $config, array(
					'type' => 'color',
					'settings' => 'sub-menu-border-color',
					'label'    => esc_html__( 'Sub-Menu Wrapper Border Color', 'tilemax' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices' => array( 'alpha' => true ),
					'output' => array(
						array( 'element' => '#main-menu ul li.menu-item-simple-parent ul, #main-menu .megamenu-child-container', 'property' => 'border-color')
					),
					'active_callback' => array(
						array( 'setting' => 'customize-sub-menu-wrapper', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'allow-sub-menu-border', 'operator' => '==', 'value' => '1' ),
					)				
				));	
			# Sub Menu Wrapper Border

			# Sub Menu Wrapper Border Radius
			
				# allow-sub-menu-radius
				TILEMAX_Kirki::add_field( $config, array(
					'type'     => 'switch',
					'settings' => 'allow-sub-menu-radius',
					'label'    => esc_html__( 'Sub Menu Wrapper Radius?', 'tilemax' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices'  => array(
						'on'  => esc_attr__( 'Yes', 'tilemax' ),
						'off' => esc_attr__( 'No', 'tilemax' )
					),
					'active_callback' => array(
						array( 'setting' => 'customize-sub-menu-wrapper', 'operator' => '==', 'value' => '1' ),					
					)
				));		

				# sub-menu-top-left-radius
				TILEMAX_Kirki::add_field( $config, array(
					'type'     => 'dimension',
					'settings' => 'sub-menu-top-left-radius',
					'label'    => esc_html__( 'Top Left Radius', 'tilemax' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices'  => array( 'min'  => 1, 'max'  => 100, 'step' => 1 ),
					'output' => array( 
						array( 'element' => '#main-menu ul li.menu-item-simple-parent ul, #main-menu .megamenu-child-container', 'property' => 'border-top-left-radius')
					),
					'active_callback' => array(
						array( 'setting' => 'customize-sub-menu-wrapper', 'operator' => '==', 'value' => '1' ),					
						array( 'setting' => 'allow-sub-menu-radius', 'operator' => '==', 'value' => '1' ),
					)
				));

				# sub-menu-top-right-radius
				TILEMAX_Kirki::add_field( $config, array(
					'type'     => 'dimension',
					'settings' => 'sub-menu-top-right-radius',
					'label'    => esc_html__( 'Top Right Radius', 'tilemax' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices'  => array( 'min'  => 1, 'max'  => 100, 'step' => 1 ),
					'output' => array( 
						array( 'element' => '#main-menu ul li.menu-item-simple-parent ul, #main-menu .megamenu-child-container', 'property' => 'border-top-right-radius')
					),
					'active_callback' => array(
						array( 'setting' => 'customize-sub-menu-wrapper', 'operator' => '==', 'value' => '1' ),					
						array( 'setting' => 'allow-sub-menu-radius', 'operator' => '==', 'value' => '1' ),
					)						
				));

				# sub-menu-bottom-right-radius
				TILEMAX_Kirki::add_field( $config, array(
					'type'     => 'dimension',
					'settings' => 'sub-menu-bottom-right-radius',
					'label'    => esc_html__( 'Bottom Right Radius', 'tilemax' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices'  => array( 'min'  => 1, 'max'  => 100, 'step' => 1 ),
					'output' => array( 
						array( 'element' => '#main-menu ul li.menu-item-simple-parent ul, #main-menu .megamenu-child-container', 'property' => 'border-bottom-right-radius')
					),
					'active_callback' => array(
						array( 'setting' => 'customize-sub-menu-wrapper', 'operator' => '==', 'value' => '1' ),					
						array( 'setting' => 'allow-sub-menu-radius', 'operator' => '==', 'value' => '1' ),
					)						
				));

				# sub-menu-bottom-left-radius
				TILEMAX_Kirki::add_field( $config, array(
					'type'     => 'dimension',
					'settings' => 'sub-menu-bottom-left-radius',
					'label'    => esc_html__( 'Bottom Left Radius', 'tilemax' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices'  => array( 'min'  => 1, 'max'  => 100, 'step' => 1 ),
					'output' => array( 
						array( 'element' => '#main-menu ul li.menu-item-simple-parent ul, #main-menu .megamenu-child-container', 'property' => 'border-bottom-left-radius')
					),
					'active_callback' => array(
						array( 'setting' => 'customize-sub-menu-wrapper', 'operator' => '==', 'value' => '1' ),					
						array( 'setting' => 'allow-sub-menu-radius', 'operator' => '==', 'value' => '1' ),
					)						
				));
			# Sub Menu Wrapper Border Radius

			# Sub Menu Wrapper Box Shadow	
			
				# allow-sub-menu-box-shadow
				TILEMAX_Kirki::add_field( $config, array(
					'type'     => 'switch',
					'settings' => 'allow-sub-menu-box-shadow',
					'label'    => esc_html__( 'Sub Menu Wrapper Shadow?', 'tilemax' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices'  => array(
						'on'  => esc_attr__( 'Yes', 'tilemax' ),
						'off' => esc_attr__( 'No', 'tilemax' )
					),
					'active_callback' => array(
						array( 'setting' => 'customize-sub-menu-wrapper', 'operator' => '==', 'value' => '1' ),
					)				
				));

				# sub-menu-box-h-shadow
				TILEMAX_Kirki::add_field( $config, array(
					'type'     => 'slider',
					'settings' => 'sub-menu-box-h-shadow',
					'label'    => esc_html__( 'H Shadow', 'tilemax' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices'  => array( 'min'  => 1, 'max'  => 50, 'step' => 1 ),
					'default'  => tilemax_defaults('sub-menu-box-h-shadow'),
					'active_callback' => array(
						array( 'setting' => 'customize-sub-menu-wrapper', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'allow-sub-menu-box-shadow', 'operator' => '==', 'value' => '1' ),
					)
				));

				# sub-menu-box-v-shadow
				TILEMAX_Kirki::add_field( $config, array(
					'type'     => 'slider',
					'settings' => 'sub-menu-box-v-shadow',
					'label'    => esc_html__( 'V Shadow', 'tilemax' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices'  => array( 'min'  => 1, 'max'  => 50, 'step' => 1 ),			
					'default'  => tilemax_defaults('sub-menu-box-v-shadow'),
					'active_callback' => array(
						array( 'setting' => 'customize-sub-menu-wrapper', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'allow-sub-menu-box-shadow', 'operator' => '==', 'value' => '1' ),
					)
				));

				# sub-menu-box-blur-shadow
				TILEMAX_Kirki::add_field( $config, array(
					'type'     => 'slider',
					'settings' => 'sub-menu-box-blur-shadow',
					'label'    => esc_html__( 'Blur Shadow', 'tilemax' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices'  => array( 'min'  => 1, 'max'  => 50, 'step' => 1 ),			
					'default'  => tilemax_defaults('sub-menu-box-blur-shadow'),
					'active_callback' => array(
						array( 'setting' => 'customize-sub-menu-wrapper', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'allow-sub-menu-box-shadow', 'operator' => '==', 'value' => '1' ),
					)
				));

				# sub-menu-box-spread-shadow
				TILEMAX_Kirki::add_field( $config, array(
					'type'     => 'slider',
					'settings' => 'sub-menu-box-spread-shadow',
					'label'    => esc_html__( 'Spread Shadow', 'tilemax' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices'  => array( 'min'  => 1, 'max'  => 50, 'step' => 1 ),			
					'default'  => tilemax_defaults('sub-menu-box-spread-shadow'),
					'active_callback' => array(
						array( 'setting' => 'customize-sub-menu-wrapper', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'allow-sub-menu-box-shadow', 'operator' => '==', 'value' => '1' ),
					)
				));

				# sub-menu-box-shadow-color
				TILEMAX_Kirki::add_field( $config, array(
					'type'     => 'color',
					'settings' => 'sub-menu-box-shadow-color',
					'label'    => esc_html__( 'Shadow Color', 'tilemax' ),
					'section'  => 'dt_site_sub_menu_section',
					'active_callback' => array(
						array( 'setting' => 'customize-sub-menu-wrapper', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'allow-sub-menu-box-shadow', 'operator' => '==', 'value' => '1' ),
					)
				));

				# sub-menu-box-shadow-inset
				TILEMAX_Kirki::add_field( $config, array(
					'type'     => 'switch',
					'settings' => 'sub-menu-box-shadow-inset',
					'label'    => esc_html__( 'Box Shadow Inset?', 'tilemax' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices'  => array(
						'on'  => esc_attr__( 'Yes', 'tilemax' ),
						'off' => esc_attr__( 'No', 'tilemax' )
					),
					'active_callback' => array(
						array( 'setting' => 'customize-sub-menu-wrapper', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'allow-sub-menu-box-shadow', 'operator' => '==', 'value' => '1' ),
					)			
				));					
			# Sub Menu Wrapper Box Shadow	
		# customize-sub-menu-wrapper

		# customize-sub-menu-links
		TILEMAX_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-sub-menu-links',
			'label'    => esc_html__( 'Customize Sub Menu links ?', 'tilemax' ),
			'section'  => 'dt_site_sub_menu_section',
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'tilemax' ),
				'off' => esc_attr__( 'No', 'tilemax' )
			)
		));
		# customize-sub-menu-links		

		# Sub Menu Link BG Settings
			# customize-sub-menu-links
			TILEMAX_Kirki::add_field( $config, array(
				'type'     => 'switch',
				'settings' => 'customize-sub-menu-link-colors',
				'label'    => esc_html__( 'Custom Colors - Sub Menu Links', 'tilemax' ),
				'section'  => 'dt_site_sub_menu_section',
				'choices'  => array(
					'on'  => esc_attr__( 'Yes', 'tilemax' ),
					'off' => esc_attr__( 'No', 'tilemax' )
				),
				'active_callback' => array(
					array( 'setting' => 'customize-sub-menu-links', 'operator' => '==', 'value' => '1' )
				)				
			));

			# sub-menu-a-color
			TILEMAX_Kirki::add_field( $config, array(
				'type' => 'color',
				'settings' => 'sub-menu-a-color',
				'label'    => esc_html__( 'Sub Menu Link Color', 'tilemax' ),
				'section'  => 'dt_site_sub_menu_section',
				'output' => array(
					array( 'element' => '#main-menu .megamenu-child-container ul.sub-menu > li > ul > li > a, #main-menu ul li.menu-item-simple-parent ul > li > a' , 'property' => 'color' )
				),
				'choices' => array( 'alpha' => true ),
				'active_callback' => array(
					array( 'setting' => 'customize-sub-menu-links', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'customize-sub-menu-link-colors', 'operator' => '==', 'value' => '1' ),
				)		
			));

			# sub-menu-a-bg-color
			TILEMAX_Kirki::add_field( $config, array(
				'type' => 'color',
				'settings' => 'sub-menu-a-bg-color',
				'label'    => esc_html__( 'Sub Menu Link BG Color', 'tilemax' ),
				'section'  => 'dt_site_sub_menu_section',
				'output' => array(
					array( 'element' => '#main-menu .menu-item-megamenu-parent .megamenu-child-container ul.sub-menu > li > ul > li > a, #main-menu ul li.menu-item-simple-parent ul > li > a' , 'property' => 'background-color' )
				),
				'choices' => array( 'alpha' => true ),
				'active_callback' => array(
					array( 'setting' => 'customize-sub-menu-links', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'customize-sub-menu-link-colors', 'operator' => '==', 'value' => '1' ),
				)		
			));			

			# sub-menu-a-active-color
			TILEMAX_Kirki::add_field( $config, array(
				'type' => 'color',
				'settings' => 'sub-menu-a-active-color',
				'label'    => esc_html__( 'Sub Menu Link Active Color', 'tilemax' ),
				'section'  => 'dt_site_sub_menu_section',
				'output' => array(
					array( 'element' => '#main-menu .megamenu-child-container ul.sub-menu > li > ul > li > a:hover, #main-menu ul li.menu-item-simple-parent ul > li > a:hover, #main-menu ul.menu li.menu-item-simple-parent ul li:hover > a, 

						#main-menu .megamenu-child-container ul.sub-menu > li > ul > li.current_page_item > a, 
						#main-menu .megamenu-child-container ul.sub-menu > li > ul > li.current_page_ancestor > a, 
						#main-menu .megamenu-child-container ul.sub-menu > li > ul > li.current-menu-item > a, 
						#main-menu .megamenu-child-container ul.sub-menu > li > ul > li.current-menu-ancestor > a, 

						#main-menu ul.menu li.menu-item-simple-parent ul > li.current_page_item > a, 
						#main-menu ul.menu li.menu-item-simple-parent ul > li.current_page_ancestor > a, 
						#main-menu ul.menu li.menu-item-simple-parent ul > li.current-menu-item > a, 
						#main-menu ul.menu li.menu-item-simple-parent ul > li.current-menu-ancestor > a' , 'property' => 'color' ),				
				),
				'choices' => array( 'alpha' => true ),
				'active_callback' => array(
					array( 'setting' => 'customize-sub-menu-links', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'customize-sub-menu-link-colors', 'operator' => '==', 'value' => '1' ),
				)		
			));

			# sub-menu-a-active-bg-color
			TILEMAX_Kirki::add_field( $config, array(
				'type' => 'color',
				'settings' => 'sub-menu-a-active-bg-color',
				'label'    => esc_html__( 'Sub Menu Link Active BG Color', 'tilemax' ),
				'section'  => 'dt_site_sub_menu_section',
				'output' => array(
					array( 'element' => '#main-menu .menu-item-megamenu-parent .megamenu-child-container ul.sub-menu > li > ul > li > a:hover, #main-menu ul li.menu-item-simple-parent ul > li > a:hover, 
						#main-menu .menu-item-megamenu-parent .megamenu-child-container ul.sub-menu > li > ul > li.current_page_item > a, #main-menu .menu-item-megamenu-parent .megamenu-child-container ul.sub-menu > li > ul > li.current_page_ancestor > a, #main-menu .menu-item-megamenu-parent .megamenu-child-container ul.sub-menu > li > ul > li.current-menu-item > a, #main-menu .menu-item-megamenu-parent .megamenu-child-container ul.sub-menu > li > ul > li.current-menu-ancestor > a, #main-menu ul li.menu-item-simple-parent ul > li.current_page_item > a, #main-menu ul li.menu-item-simple-parent ul > li.current_page_ancestor > a, #main-menu ul li.menu-item-simple-parent ul > li.current-menu-item > a, #main-menu ul li.menu-item-simple-parent ul > li.current-menu-ancestor > a' , 'property' => 'background-color' )
				),
				'choices' => array( 'alpha' => true ),
				'active_callback' => array(
					array( 'setting' => 'customize-sub-menu-links', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'customize-sub-menu-link-colors', 'operator' => '==', 'value' => '1' ),
				)		
			));				 
		# Sub Menu Link BG Settings	
		
		# Sub Menu Link Border Style
			# sub-menu-link-border-style
			TILEMAX_Kirki::add_field( $config, array(
				'type'     => 'select',
				'settings' => 'sub-menu-link-border-style',
				'label'    => esc_html__( 'Sub Menu Link Border', 'tilemax' ),
				'section'  => 'dt_site_sub_menu_section',
				'choices'  => array(
					'-'	=> esc_html__('None','tilemax'),
					'with-border'	=> esc_html__('With Border','tilemax'),
					'with-hover-border'	=> esc_html__('With Hover Border','tilemax'),
				),
				'active_callback' => array(
					array( 'setting' => 'customize-sub-menu-links', 'operator' => '==', 'value' => '1' )
				)				
			));

				# sub-menu-link-border-style  = with-hover-border
					# sub-menu-h-border-style
					TILEMAX_Kirki::add_field( $config, array(
						'type'     => 'select',
						'settings' => 'sub-menu-h-border-style',
						'label'    => esc_html__( 'Sub Menu Link Hover Border Style', 'tilemax' ),
						'section'  => 'dt_site_sub_menu_section',
						'default'  => 'solid',
						'choices' => tilemax_border_styles(),
						'output' => array(
							array( 'element' => '#main-menu ul li.menu-item-simple-parent ul > li > a:hover:after, #main-menu .menu-item-megamenu-parent .megamenu-child-container ul.sub-menu > li > ul > li > a:hover:after', 'property' => 'border-style'),
						),				
						'active_callback' => array(
							array( 'setting' => 'customize-sub-menu-links', 'operator' => '==', 'value' => '1' ),
							array( 'setting' => 'sub-menu-link-border-style', 'operator' => '==', 'value' => 'with-hover-border' )
						)
					));

					# sub-menu-h-top-border
					TILEMAX_Kirki::add_field( $config, array(
						'type'     => 'slider',
						'settings' => 'sub-menu-h-top-border',
						'label'    => esc_html__( 'Top Border', 'tilemax' ),
						'section'  => 'dt_site_sub_menu_section',
						'choices'  => array( 'min'  => 1, 'max'  => 50, 'step' => 1 ),
						'output' => array( 
							array( 'element' => '#main-menu ul li.menu-item-simple-parent ul > li > a:hover:after, #main-menu .menu-item-megamenu-parent .megamenu-child-container ul.sub-menu > li > ul > li > a:hover:after', 'property' => 'border-top-width', 'units' => 'px' )
						),
						'active_callback' => array(
							array( 'setting' => 'customize-sub-menu-links', 'operator' => '==', 'value' => '1' ),
							array( 'setting' => 'sub-menu-link-border-style', 'operator' => '==', 'value' => 'with-hover-border' ),
							array( 'setting' => 'sub-menu-h-border-style', 'operator' => '!==', 'value' => 'none' ),
						)			
					));

					# sub-menu-h-right-border
					TILEMAX_Kirki::add_field( $config, array(
						'type'     => 'slider',
						'settings' => 'sub-menu-h-right-border',
						'label'    => esc_html__( 'Right Border', 'tilemax' ),
						'section'  => 'dt_site_sub_menu_section',
						'choices'  => array( 'min'  => 1, 'max'  => 50, 'step' => 1 ),
						'output' => array( 
							array( 'element' => '#main-menu ul li.menu-item-simple-parent ul > li > a:hover:after, #main-menu .menu-item-megamenu-parent .megamenu-child-container ul.sub-menu > li > ul > li > a:hover:after', 'property' => 'border-right-width', 'units' => 'px' )
						),
						'active_callback' => array(
							array( 'setting' => 'customize-sub-menu-links', 'operator' => '==', 'value' => '1' ),
							array( 'setting' => 'sub-menu-link-border-style', 'operator' => '==', 'value' => 'with-hover-border' ),					
							array( 'setting' => 'sub-menu-h-border-style', 'operator' => '!==', 'value' => 'none' ),
						)			
					));

					# sub-menu-h-bottom-border
					TILEMAX_Kirki::add_field( $config, array(
						'type'     => 'slider',
						'settings' => 'sub-menu-h-bottom-border',
						'label'    => esc_html__( 'Bottom Border', 'tilemax' ),
						'section'  => 'dt_site_sub_menu_section',
						'choices'  => array( 'min'  => 1, 'max'  => 50, 'step' => 1 ),
						'output' => array( 
							array( 'element' => '#main-menu ul li.menu-item-simple-parent ul > li > a:hover:after, #main-menu .menu-item-megamenu-parent .megamenu-child-container ul.sub-menu > li > ul > li > a:hover:after', 'property' => 'border-bottom-width', 'units' => 'px' )
						),
						'active_callback' => array(
							array( 'setting' => 'customize-sub-menu-links', 'operator' => '==', 'value' => '1' ),
							array( 'setting' => 'sub-menu-link-border-style', 'operator' => '==', 'value' => 'with-hover-border' ),					
							array( 'setting' => 'sub-menu-h-border-style', 'operator' => '!==', 'value' => 'none' ),
						)			
					));

					# sub-menu-h-left-border
					TILEMAX_Kirki::add_field( $config, array(
						'type'     => 'slider',
						'settings' => 'sub-menu-h-left-border',
						'label'    => esc_html__( 'Left Border', 'tilemax' ),
						'section'  => 'dt_site_sub_menu_section',
						'choices'  => array( 'min'  => 1, 'max'  => 50, 'step' => 1 ),
						'output' => array( 
							array( 'element' => '#main-menu ul li.menu-item-simple-parent ul > li > a:hover:after, #main-menu .menu-item-megamenu-parent .megamenu-child-container ul.sub-menu > li > ul > li > a:hover:after', 'property' => 'border-left-width', 'units' => 'px' )
						),
						'active_callback' => array(
							array( 'setting' => 'customize-sub-menu-links', 'operator' => '==', 'value' => '1' ),
							array( 'setting' => 'sub-menu-link-border-style', 'operator' => '==', 'value' => 'with-hover-border' ),					
							array( 'setting' => 'sub-menu-h-border-style', 'operator' => '!==', 'value' => 'none' ),
						)			
					));

					# sub-menu-h-border-color
					TILEMAX_Kirki::add_field( $config, array(
						'type'     => 'color',
						'settings' => 'sub-menu-h-color',
						'label'    => esc_html__( 'Sub Menu Link Hover Border Color', 'tilemax' ),
						'section'  => 'dt_site_sub_menu_section',
						'choices' => array( 'alpha' => true ),
						'output' => array(
							array( 'element' => '#main-menu ul li.menu-item-simple-parent ul > li > a:hover:after, #main-menu .menu-item-megamenu-parent .megamenu-child-container ul.sub-menu > li > ul > li > a:hover:after', 'property' => 'border-color'),					
						),
						'active_callback' => array(
							array( 'setting' => 'customize-sub-menu-links', 'operator' => '==', 'value' => '1' ),
							array( 'setting' => 'sub-menu-link-border-style', 'operator' => '==', 'value' => 'with-hover-border' )
						)
					));

				# sub-menu-link-border-style  = with-border
					# sub-menu-d-border-style
					TILEMAX_Kirki::add_field( $config, array(
						'type'     => 'select',
						'settings' => 'sub-menu-d-border-style',
						'label'    => esc_html__( 'Sub Menu Link Border Style', 'tilemax' ),
						'section'  => 'dt_site_sub_menu_section',
						'default'  => 'solid',
						'choices' => tilemax_border_styles(),
						'output' => array(
							array( 'element' => '#main-menu ul li.menu-item-simple-parent ul > li > a, #main-menu .menu-item-megamenu-parent .megamenu-child-container ul.sub-menu > li > ul > li > a, #main-menu ul li.menu-item-simple-parent ul > li:last-child > a', 'property' => 'border-style'),
						),				
						'active_callback' => array(
							array( 'setting' => 'customize-sub-menu-links', 'operator' => '==', 'value' => '1' ),
							array( 'setting' => 'sub-menu-link-border-style', 'operator' => '==', 'value' => 'with-border' )
						)
					));

					# sub-menu-d-top-border
					TILEMAX_Kirki::add_field( $config, array(
						'type'     => 'slider',
						'settings' => 'sub-menu-d-top-border',
						'label'    => esc_html__( 'Top Border', 'tilemax' ),
						'section'  => 'dt_site_sub_menu_section',
						'choices'  => array( 'min'  => 1, 'max'  => 50, 'step' => 1 ),
						'output' => array( 
							array( 'element' => '#main-menu ul li.menu-item-simple-parent ul > li > a, #main-menu .menu-item-megamenu-parent .megamenu-child-container ul.sub-menu > li > ul > li > a, #main-menu ul li.menu-item-simple-parent ul > li:last-child > a', 'property' => 'border-top-width', 'units' => 'px' )
						),
						'active_callback' => array(
							array( 'setting' => 'customize-sub-menu-links', 'operator' => '==', 'value' => '1' ),
							array( 'setting' => 'sub-menu-link-border-style', 'operator' => '==', 'value' => 'with-border' ),
							array( 'setting' => 'sub-menu-d-border-style', 'operator' => '!==', 'value' => 'none' ),
						)			
					));

					# sub-menu-d-right-border
					TILEMAX_Kirki::add_field( $config, array(
						'type'     => 'slider',
						'settings' => 'sub-menu-d-right-border',
						'label'    => esc_html__( 'Right Border', 'tilemax' ),
						'section'  => 'dt_site_sub_menu_section',
						'choices'  => array( 'min'  => 1, 'max'  => 50, 'step' => 1 ),
						'output' => array( 
							array( 'element' => '#main-menu ul li.menu-item-simple-parent ul > li > a, #main-menu .menu-item-megamenu-parent .megamenu-child-container ul.sub-menu > li > ul > li > a, #main-menu ul li.menu-item-simple-parent ul > li:last-child > a', 'property' => 'border-right-width', 'units' => 'px' )
						),
						'active_callback' => array(
							array( 'setting' => 'customize-sub-menu-links', 'operator' => '==', 'value' => '1' ),
							array( 'setting' => 'sub-menu-link-border-style', 'operator' => '==', 'value' => 'with-border' ),					
							array( 'setting' => 'sub-menu-d-border-style', 'operator' => '!==', 'value' => 'none' ),
						)			
					));

					# sub-menu-d-bottom-border
					TILEMAX_Kirki::add_field( $config, array(
						'type'     => 'slider',
						'settings' => 'sub-menu-d-bottom-border',
						'label'    => esc_html__( 'Bottom Border', 'tilemax' ),
						'section'  => 'dt_site_sub_menu_section',
						'choices'  => array( 'min'  => 1, 'max'  => 50, 'step' => 1 ),
						'output' => array( 
							array( 'element' => '#main-menu ul li.menu-item-simple-parent ul > li > a, #main-menu .menu-item-megamenu-parent .megamenu-child-container ul.sub-menu > li > ul > li > a, #main-menu ul li.menu-item-simple-parent ul > li:last-child > a', 'property' => 'border-bottom-width', 'units' => 'px' )
						),
						'active_callback' => array(
							array( 'setting' => 'customize-sub-menu-links', 'operator' => '==', 'value' => '1' ),
							array( 'setting' => 'sub-menu-link-border-style', 'operator' => '==', 'value' => 'with-border' ),					
							array( 'setting' => 'sub-menu-d-border-style', 'operator' => '!==', 'value' => 'none' ),
						)			
					));

					# sub-menu-d-left-border
					TILEMAX_Kirki::add_field( $config, array(
						'type'     => 'slider',
						'settings' => 'sub-menu-d-left-border',
						'label'    => esc_html__( 'Left Border', 'tilemax' ),
						'section'  => 'dt_site_sub_menu_section',
						'choices'  => array( 'min'  => 1, 'max'  => 50, 'step' => 1 ),
						'output' => array( 
							array( 'element' => '#main-menu ul li.menu-item-simple-parent ul > li > a, #main-menu .menu-item-megamenu-parent .megamenu-child-container ul.sub-menu > li > ul > li > a, #main-menu ul li.menu-item-simple-parent ul > li:last-child > a', 'property' => 'border-left-width', 'units' => 'px' )
						),
						'active_callback' => array(
							array( 'setting' => 'customize-sub-menu-links', 'operator' => '==', 'value' => '1' ),
							array( 'setting' => 'sub-menu-link-border-style', 'operator' => '==', 'value' => 'with-border' ),					
							array( 'setting' => 'sub-menu-d-border-style', 'operator' => '!==', 'value' => 'none' ),
						)			
					));	

					# sub-menu-d-border-color
					TILEMAX_Kirki::add_field( $config, array(
						'type'     => 'color',
						'settings' => 'sub-menu-d-color',
						'label'    => esc_html__( 'Sub Menu Link Border Color ', 'tilemax' ),
						'section'  => 'dt_site_sub_menu_section',
						'choices' => array( 'alpha' => true ),
						'output' => array(
							array( 'element' => '#main-menu ul li.menu-item-simple-parent ul > li > a, #main-menu .menu-item-megamenu-parent .megamenu-child-container ul.sub-menu > li > ul > li > a, #main-menu ul li.menu-item-simple-parent ul > li:last-child > a', 'property' => 'border-color'),					
						),
						'active_callback' => array(
							array( 'setting' => 'customize-sub-menu-links', 'operator' => '==', 'value' => '1' ),
							array( 'setting' => 'sub-menu-link-border-style', 'operator' => '==', 'value' => 'with-border' )
						)
					));
		# Sub Menu Link Border Style

		# Sub Menu Link Border Radius
			# allow-sub-menu-link-radius
			TILEMAX_Kirki::add_field( $config, array(
				'type'     => 'switch',
				'settings' => 'allow-sub-menu-link-radius',
				'label'    => esc_html__( 'Allow Sub Menu Link Radius?', 'tilemax' ),
				'section'  => 'dt_site_sub_menu_section',
				'choices'  => array(
					'on'  => esc_attr__( 'Yes', 'tilemax' ),
					'off' => esc_attr__( 'No', 'tilemax' )
				),
				'active_callback' => array(
					array( 'setting' => 'customize-sub-menu-links', 'operator' => '==', 'value' => '1' )
				)				
			));		

			# sub-menu-link-top-left-radius
			TILEMAX_Kirki::add_field( $config, array(
				'type'     => 'dimension',
				'settings' => 'sub-menu-link-top-left-radius',
				'label'    => esc_html__( 'Top Left Radius', 'tilemax' ),
				'section'  => 'dt_site_sub_menu_section',
				'choices'  => array( 'min'  => 1, 'max'  => 100, 'step' => 1 ),
				'output' => array( 
					array( 'element' => '#main-menu .menu-item-megamenu-parent .megamenu-child-container ul.sub-menu > li > ul > li > a, #main-menu ul li.menu-item-simple-parent ul > li > a', 'property' => 'border-top-left-radius')
				),
				'active_callback' => array(
					array( 'setting' => 'customize-sub-menu-links', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'allow-sub-menu-link-radius', 'operator' => '==', 'value' => '1' ),
				)
			));

			# sub-menu-link-top-right-radius
			TILEMAX_Kirki::add_field( $config, array(
				'type'     => 'dimension',
				'settings' => 'sub-menu-link-top-right-radius',
				'label'    => esc_html__( 'Top Right Radius', 'tilemax' ),
				'section'  => 'dt_site_sub_menu_section',
				'choices'  => array( 'min'  => 1, 'max'  => 100, 'step' => 1 ),
				'output' => array( 
					array( 'element' => '#main-menu .menu-item-megamenu-parent .megamenu-child-container ul.sub-menu > li > ul > li > a, #main-menu ul li.menu-item-simple-parent ul > li > a', 'property' => 'border-top-right-radius')
				),
				'active_callback' => array(
					array( 'setting' => 'customize-sub-menu-links', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'allow-sub-menu-link-radius', 'operator' => '==', 'value' => '1' ),
				)						
			));

			# sub-menu-link-bottom-right-radius
			TILEMAX_Kirki::add_field( $config, array(
				'type'     => 'dimension',
				'settings' => 'sub-menu-link-bottom-right-radius',
				'label'    => esc_html__( 'Bottom Right Radius', 'tilemax' ),
				'section'  => 'dt_site_sub_menu_section',
				'choices'  => array( 'min'  => 1, 'max'  => 100, 'step' => 1 ),
				'output' => array( 
					array( 'element' => '#main-menu .menu-item-megamenu-parent .megamenu-child-container ul.sub-menu > li > ul > li > a, #main-menu ul li.menu-item-simple-parent ul > li > a', 'property' => 'border-bottom-right-radius')
				),
				'active_callback' => array(
					array( 'setting' => 'customize-sub-menu-links', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'allow-sub-menu-link-radius', 'operator' => '==', 'value' => '1' ),
				)						
			));

			# sub-menu-link-bottom-left-radius
			TILEMAX_Kirki::add_field( $config, array(
				'type'     => 'dimension',
				'settings' => 'sub-menu-link-bottom-left-radius',
				'label'    => esc_html__( 'Bottom Left Radius', 'tilemax' ),
				'section'  => 'dt_site_sub_menu_section',
				'choices'  => array( 'min'  => 1, 'max'  => 100, 'step' => 1 ),
				'output' => array( 
					array( 'element' => '#main-menu .menu-item-megamenu-parent .megamenu-child-container ul.sub-menu > li > ul > li > a, #main-menu ul li.menu-item-simple-parent ul > li > a', 'property' => 'border-bottom-left-radius')
				),
				'active_callback' => array(
					array( 'setting' => 'customize-sub-menu-links', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'allow-sub-menu-link-radius', 'operator' => '==', 'value' => '1' ),
				)						
			));
		# Sub Menu Link Border Radius

		# Sub Menu Link Icon Style
		TILEMAX_Kirki::add_field( $config, array(
			'type'     => 'select',
			'settings' => 'sub-menu-style',
			'label'    => esc_html__( 'Sub Menu Link Icon Style', 'tilemax' ),
			'section'  => 'dt_site_sub_menu_section',
			'default'  => '',
			'choices'  => array(
				''	=> esc_html__('None','tilemax'),
				' menu-links-with-arrow single'	=> esc_html__('Single','tilemax'),
				' menu-links-with-arrow double'	=> esc_html__('Double','tilemax'),
				' menu-links-with-arrow disc'	=> esc_html__('Disc','tilemax'),
			),
			'active_callback' => array(
				array( 'setting' => 'customize-sub-menu-links', 'operator' => '==', 'value' => '1' )
			)				
		));
		# Sub Menu Link Icon Style

		# Mega Menu	
			# customize-mega-menu-title
			TILEMAX_Kirki::add_field( $config, array(
				'type'     => 'switch',
				'settings' => 'customize-mega-menu-title',
				'label'    => esc_html__( 'Customize Mega Menu title ?', 'tilemax' ),
				'section'  => 'dt_site_sub_menu_section',
				'choices'  => array(
					'on'  => esc_attr__( 'Yes', 'tilemax' ),
					'off' => esc_attr__( 'No', 'tilemax' )
				)
			));
			# customize-mega-menu-title
			
			# Mega Menu Title Color
				# customize-mega-menu-title-color
				TILEMAX_Kirki::add_field( $config, array(
					'type'     => 'switch',
					'settings' => 'customize-mega-menu-title-color',
					'label'    => esc_html__( 'Custom Colors - Mega Menu Title', 'tilemax' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices'  => array(
						'on'  => esc_attr__( 'Yes', 'tilemax' ),
						'off' => esc_attr__( 'No', 'tilemax' )
					),
					'active_callback' => array(
						array( 'setting' => 'customize-mega-menu-title', 'operator' => '==', 'value' => '1' )
					)				
				));
				# customize-mega-menu-title-color
				
				# mega-menu-title-color 			
				TILEMAX_Kirki::add_field( $config, array(
					'type' => 'color',
					'settings' => 'mega-menu-title-color',
					'label'    => esc_html__( 'Mega Menu Title Color', 'tilemax' ),
					'section'  => 'dt_site_sub_menu_section',
					'output' => array(
						array( 'element' => '#main-menu .megamenu-child-container > ul.sub-menu > li > a, #main-menu .megamenu-child-container > ul.sub-menu > li > .nolink-menu' , 'property' => 'color' )
					),
					'choices' => array( 'alpha' => true ),
					'active_callback' => array(
						array( 'setting' => 'customize-mega-menu-title', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'customize-mega-menu-title-color', 'operator' => '==', 'value' => '1' ),
					)		
				));
				# mega-menu-title-color 			

				# mega-menu-title-bg-color 			
				TILEMAX_Kirki::add_field( $config, array(
					'type' => 'color',
					'settings' => 'mega-menu-title-bg-color',
					'label'    => esc_html__( 'Mega Menu Title BG Color', 'tilemax' ),
					'section'  => 'dt_site_sub_menu_section',
					'output' => array(
						array( 'element' => '#main-menu .menu-item-megamenu-parent .megamenu-child-container > ul.sub-menu > li > a, #main-menu .menu-item-megamenu-parent .megamenu-child-container > ul.sub-menu > li > .nolink-menu' , 'property' => 'background-color' )
					),
					'choices' => array( 'alpha' => true ),
					'active_callback' => array(
						array( 'setting' => 'customize-mega-menu-title', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'customize-mega-menu-title-color', 'operator' => '==', 'value' => '1' ),
					)		
				));
				# mega-menu-title-bg-color
			# Mega Menu Title Color
			
			# Mega Menu Title Radius
				# customize-mega-menu-title-radius
				TILEMAX_Kirki::add_field( $config, array(
					'type'     => 'switch',
					'settings' => 'customize-mega-menu-title-radius',
					'label'    => esc_html__( 'Allow Mega Menu Title Radius?', 'tilemax' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices'  => array(
						'on'  => esc_attr__( 'Yes', 'tilemax' ),
						'off' => esc_attr__( 'No', 'tilemax' )
					),
					'active_callback' => array(
						array( 'setting' => 'customize-mega-menu-title', 'operator' => '==', 'value' => '1' )
					)				
				));
				# customize-mega-menu-title-radius

				# mega-menu-title-top-left-radius
				TILEMAX_Kirki::add_field( $config, array(
					'type'     => 'dimension',
					'settings' => 'mega-menu-title-top-left-radius',
					'label'    => esc_html__( 'Top Left Radius', 'tilemax' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices'  => array( 'min'  => 1, 'max'  => 100, 'step' => 1 ),
					'output' => array( 
						array( 'element' => '#main-menu .menu-item-megamenu-parent .megamenu-child-container > ul.sub-menu > li > a, #main-menu .menu-item-megamenu-parent .megamenu-child-container > ul.sub-menu > li > .nolink-menu', 'property' => 'border-top-left-radius')
					),
					'active_callback' => array(
						array( 'setting' => 'customize-mega-menu-title', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'customize-mega-menu-title-radius', 'operator' => '==', 'value' => '1' ),
					)
				));

				# mega-menu-title-top-right-radius
				TILEMAX_Kirki::add_field( $config, array(
					'type'     => 'dimension',
					'settings' => 'mega-menu-title-top-right-radius',
					'label'    => esc_html__( 'Top Right Radius', 'tilemax' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices'  => array( 'min'  => 1, 'max'  => 100, 'step' => 1 ),
					'output' => array( 
						array( 'element' => '#main-menu .menu-item-megamenu-parent .megamenu-child-container > ul.sub-menu > li > a, #main-menu .menu-item-megamenu-parent .megamenu-child-container > ul.sub-menu > li > .nolink-menu', 'property' => 'border-top-right-radius')
					),
					'active_callback' => array(
						array( 'setting' => 'customize-mega-menu-title', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'customize-mega-menu-title-radius', 'operator' => '==', 'value' => '1' ),
					)						
				));

				# mega-menu-title-bottom-right-radius
				TILEMAX_Kirki::add_field( $config, array(
					'type'     => 'dimension',
					'settings' => 'mega-menu-title-bottom-right-radius',
					'label'    => esc_html__( 'Bottom Right Radius', 'tilemax' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices'  => array( 'min'  => 1, 'max'  => 100, 'step' => 1 ),
					'output' => array( 
						array( 'element' => '#main-menu .menu-item-megamenu-parent .megamenu-child-container > ul.sub-menu > li > a, #main-menu .menu-item-megamenu-parent .megamenu-child-container > ul.sub-menu > li > .nolink-menu', 'property' => 'border-bottom-right-radius')
					),
					'active_callback' => array(
						array( 'setting' => 'customize-mega-menu-title', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'customize-mega-menu-title-radius', 'operator' => '==', 'value' => '1' ),
					)						
				));

				# mega-menu-title-bottom-left-radius
				TILEMAX_Kirki::add_field( $config, array(
					'type'     => 'dimension',
					'settings' => 'mega-menu-title-bottom-left-radius',
					'label'    => esc_html__( 'Bottom Left Radius', 'tilemax' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices'  => array( 'min'  => 1, 'max'  => 100, 'step' => 1 ),
					'output' => array( 
						array( 'element' => '#main-menu .menu-item-megamenu-parent .megamenu-child-container > ul.sub-menu > li > a, #main-menu .menu-item-megamenu-parent .megamenu-child-container > ul.sub-menu > li > .nolink-menu', 'property' => 'border-bottom-left-radius')
					),
					'active_callback' => array(
						array( 'setting' => 'customize-mega-menu-title', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'customize-mega-menu-title-radius', 'operator' => '==', 'value' => '1' ),
					)						
				));				
			# Mega Menu Title Radius
			
			# Mega Menu Title Border 
				# allow-mega-menu-title-border
				TILEMAX_Kirki::add_field( $config, array(
					'type'     => 'switch',
					'settings' => 'allow-mega-menu-title-border',
					'label'    => esc_html__( 'Apply Mega Menu Title Border?', 'tilemax' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices'  => array(
						'on'  => esc_attr__( 'Yes', 'tilemax' ),
						'off' => esc_attr__( 'No', 'tilemax' )
					),
					'active_callback' => array(
						array( 'setting' => 'customize-mega-menu-title', 'operator' => '==', 'value' => '1' )
					)				
				));
				# allow-mega-menu-title-border

				# mega-menu-title-border-style
				TILEMAX_Kirki::add_field( $config, array(
					'type'     => 'select',
					'settings' => 'mega-menu-title-border-style',
					'label'    => esc_html__( 'Mega Menu Title Border Style', 'tilemax' ),
					'section'  => 'dt_site_sub_menu_section',
					'default'  => 'solid',
					'choices' => tilemax_border_styles(),
					'output' => array(
						array( 'element' => '#main-menu .menu-item-megamenu-parent .megamenu-child-container > ul.sub-menu > li > a, #main-menu .menu-item-megamenu-parent .megamenu-child-container > ul.sub-menu > li > .nolink-menu', 'property' => 'border-style'),
					),				
					'active_callback' => array(
						array( 'setting' => 'customize-mega-menu-title', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'allow-mega-menu-title-border', 'operator' => '==', 'value' => '1' )
					)
				));

				# mega-menu-title-top-border
				TILEMAX_Kirki::add_field( $config, array(
					'type'     => 'slider',
					'settings' => 'mega-menu-title-top-border',
					'label'    => esc_html__( 'Top Border', 'tilemax' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices'  => array( 'min'  => 1, 'max'  => 50, 'step' => 1 ),
					'output' => array( 
						array( 'element' => '#main-menu .menu-item-megamenu-parent .megamenu-child-container > ul.sub-menu > li > a, #main-menu .menu-item-megamenu-parent .megamenu-child-container > ul.sub-menu > li > .nolink-menu', 'property' => 'border-top-width', 'units' => 'px' )
					),
					'active_callback' => array(
						array( 'setting' => 'customize-mega-menu-title', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'allow-mega-menu-title-border', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'mega-menu-title-border-style', 'operator' => '!==', 'value' => 'none' ),
					)			
				));

				# mega-menu-title-right-border
				TILEMAX_Kirki::add_field( $config, array(
					'type'     => 'slider',
					'settings' => 'mega-menu-title-right-border',
					'label'    => esc_html__( 'Right Border', 'tilemax' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices'  => array( 'min'  => 1, 'max'  => 50, 'step' => 1 ),
					'output' => array( 
						array( 'element' => '#main-menu .menu-item-megamenu-parent .megamenu-child-container > ul.sub-menu > li > a, #main-menu .menu-item-megamenu-parent .megamenu-child-container > ul.sub-menu > li > .nolink-menu', 'property' => 'border-right-width', 'units' => 'px' )
					),
					'active_callback' => array(
						array( 'setting' => 'customize-mega-menu-title', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'allow-mega-menu-title-border', 'operator' => '==', 'value' => '1' ),					
						array( 'setting' => 'mega-menu-title-border-style', 'operator' => '!==', 'value' => 'none' ),
					)			
				));

				# mega-menu-title-bottom-border
				TILEMAX_Kirki::add_field( $config, array(
					'type'     => 'slider',
					'settings' => 'mega-menu-title-bottom-border',
					'label'    => esc_html__( 'Bottom Border', 'tilemax' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices'  => array( 'min'  => 1, 'max'  => 50, 'step' => 1 ),
					'output' => array( 
						array( 'element' => '#main-menu .menu-item-megamenu-parent .megamenu-child-container > ul.sub-menu > li > a, #main-menu .menu-item-megamenu-parent .megamenu-child-container > ul.sub-menu > li > .nolink-menu', 'property' => 'border-bottom-width', 'units' => 'px' )
					),
					'active_callback' => array(
						array( 'setting' => 'customize-mega-menu-title', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'allow-mega-menu-title-border', 'operator' => '==', 'value' => '1' ),					
						array( 'setting' => 'mega-menu-title-border-style', 'operator' => '!==', 'value' => 'none' ),
					)			
				));

				# mega-menu-title-left-border
				TILEMAX_Kirki::add_field( $config, array(
					'type'     => 'slider',
					'settings' => 'mega-menu-title-left-border',
					'label'    => esc_html__( 'Left Border', 'tilemax' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices'  => array( 'min'  => 1, 'max'  => 50, 'step' => 1 ),
					'output' => array( 
						array( 'element' => '#main-menu .menu-item-megamenu-parent .megamenu-child-container > ul.sub-menu > li > a, #main-menu .menu-item-megamenu-parent .megamenu-child-container > ul.sub-menu > li > .nolink-menu', 'property' => 'border-left-width', 'units' => 'px' )
					),
					'active_callback' => array(
						array( 'setting' => 'customize-mega-menu-title', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'allow-mega-menu-title-border', 'operator' => '==', 'value' => '1' ),					
						array( 'setting' => 'mega-menu-title-border-style', 'operator' => '!==', 'value' => 'none' ),
					)			
				));			

				# mega-menu-title-border-color
				TILEMAX_Kirki::add_field( $config, array(
					'type'     => 'color',
					'settings' => 'mega-menu-title-border-color',
					'label'    => esc_html__( 'Mega Menu Title Border Color', 'tilemax' ),
					'section'  => 'dt_site_sub_menu_section',
					'choices' => array( 'alpha' => true ),
					'output' => array(
						array( 'element' => '#main-menu .menu-item-megamenu-parent .megamenu-child-container > ul.sub-menu > li > a, #main-menu .menu-item-megamenu-parent .megamenu-child-container > ul.sub-menu > li > .nolink-menu', 'property' => 'border-color'),					
					),
					'active_callback' => array(
						array( 'setting' => 'customize-mega-menu-title', 'operator' => '==', 'value' => '1' ),
						array( 'setting' => 'allow-mega-menu-title-border', 'operator' => '==', 'value' => '1' )
					)
				));					
			# Mega Menu Title Border
		# Mega Menu