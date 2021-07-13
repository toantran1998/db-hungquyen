<?php
$config = tilemax_kirki_config();

# Footer Copyright
	TILEMAX_Kirki::add_section( 'dt_footer_copyright', array(
		'title'	=> esc_html__( 'Copyright', 'tilemax' ),
		'description' => esc_html__('Footer Copyright Settings','tilemax'),
		'panel' 		 => 'dt_footer_copyright_panel',
		'priority' => 1
	) );

		# show-copyright-text
		TILEMAX_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'show-copyright-text',
			'label'    => esc_html__( 'Show Copyright Text ?', 'tilemax' ),
			'section'  => 'dt_footer_copyright',
			'default'  =>  tilemax_defaults('show-copyright-text'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'tilemax' ),
				'off' => esc_attr__( 'No', 'tilemax' )
			)
		) );

		# copyright-text
		TILEMAX_Kirki::add_field( $config, array(
			'type'     => 'textarea',
			'settings' => 'copyright-text',
			'label'    => esc_html__( 'Add Content', 'tilemax' ),
			'section'  => 'dt_footer_copyright',
			'default'  =>  tilemax_defaults('copyright-text'),
			'active_callback' => array(
				array( 'setting' => 'show-copyright-text', 'operator' => '==', 'value' => '1' )
			)
		) );

		# enable-copyright-darkbg
		TILEMAX_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'enable-copyright-darkbg',
			'label'    => esc_html__( 'Enable Copyright Dark BG ?', 'tilemax' ),
			'section'  => 'dt_footer_copyright',
			'default'  =>  tilemax_defaults('enable-copyright-darkbg'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'tilemax' ),
				'off' => esc_attr__( 'No', 'tilemax' )
			)
		) );		

		# copyright-next
		TILEMAX_Kirki::add_field( $config, array(
			'type'     => 'select',
			'settings' => 'copyright-next',
			'label'    => esc_html__( 'Show Sociable / menu ?', 'tilemax' ),
			'description'    => esc_html__( 'Add description here.', 'tilemax' ),
			'section'  => 'dt_footer_copyright',
			'default'  => tilemax_defaults('copyright-next'),
			'choices'  => array(
				'hidden'  => esc_attr__( 'Hide', 'tilemax' ),
				'disable'  => esc_attr__( 'Disable', 'tilemax' ),
				'sociable' => esc_attr__( 'Show sociable', 'tilemax' ),
				'footer-menu' => esc_attr__( 'Show menu', 'tilemax' ),
			)
		) );

# Footer Social
	TILEMAX_Kirki::add_section( 'dt_footer_social', array(
		'title'	=> esc_html__( 'Social', 'tilemax' ),
		'description' => esc_html__('Footer Social Icons Settings','tilemax'),
		'panel' 		 => 'dt_footer_copyright_panel',
		'priority' => 2
	) );

		TILEMAX_Kirki::add_field( $config, array(
			'type'     => 'sortable',
			'settings' => 'footer-sociables',
			'label'    => esc_html__( 'Social Icons Order', 'tilemax' ),
			'section'  => 'dt_footer_social',
			'default'  => tilemax_defaults('footer-sociables'),
			'choices'  => array(
				"delicious"		=>	esc_attr__( 'Delicious', 'tilemax' ),
				"deviantart"	=>	esc_attr__( 'Deviantart', 'tilemax' ),
				"digg"			=>	esc_attr__( 'Digg', 'tilemax' ),
				"dribbble"		=>	esc_attr__( 'Dribbble', 'tilemax' ),
				"envelope-open"	=>	esc_attr__( 'Envelope', 'tilemax' ),
				"facebook"		=>	esc_attr__( 'Facebook', 'tilemax' ),
				"flickr"		=>	esc_attr__( 'Flickr', 'tilemax' ),
				"google-plus"	=>	esc_attr__( 'Google Plus', 'tilemax' ),
				"comment"		=>	esc_attr__( 'GTalk', 'tilemax' ),
				"instagram"		=>	esc_attr__( 'Instagram', 'tilemax' ),
				"lastfm"		=>	esc_attr__( 'Lastfm', 'tilemax' ),
				"linkedin"		=>	esc_attr__( 'Linkedin', 'tilemax' ),
				"pinterest"		=>	esc_attr__( 'Pinterest', 'tilemax' ),
				"reddit"		=>	esc_attr__( 'Reddit', 'tilemax' ),
				"rss"			=>	esc_attr__( 'RSS', 'tilemax' ),
				"skype"			=>	esc_attr__( 'Skype', 'tilemax' ),
				"stumbleupon"	=>	esc_attr__( 'Stumbleupon', 'tilemax' ),
				"tumblr"		=>	esc_attr__( 'Tumblr', 'tilemax' ),
				"twitter"		=>	esc_attr__( 'Twitter', 'tilemax' ),
				"viadeo"		=>	esc_attr__( 'Viadeo', 'tilemax' ),
				"vimeo"			=>	esc_attr__( 'Vimeo', 'tilemax' ),
				"yahoo"			=>	esc_attr__( 'Yahoo', 'tilemax' ),
				"youtube"		=>	esc_attr__( 'Youtube', 'tilemax' ),
			),
			'active_callback' => array(
				array( 'setting' => 'copyright-next', 'operator' => '==', 'value' => 'sociable' ),
			)
		) );

# Footer Copyright Background		
	TILEMAX_Kirki::add_section( 'dt_footer_copyright_bg', array(
		'title'	=> esc_html__( 'Background', 'tilemax' ),
		'panel' => 'dt_footer_copyright_panel',
		'priority' => 3,
	) );

		# customize-footer-copyright-bg
		TILEMAX_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-footer-copyright-bg',
			'label'    => esc_html__( 'Customize Background ?', 'tilemax' ),
			'section'  => 'dt_footer_copyright_bg',
			'default'  => tilemax_defaults('customize-footer-copyright-bg'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'tilemax' ),
				'off' => esc_attr__( 'No', 'tilemax' )
			),
			'active_callback' => array(
				array(
					array( 'setting' => 'show-copyright-text', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'copyright-next', 'operator' => 'in', 'value' =>  array( 'sociable', 'footer-menu') )
				)
			)
		));

		# footer-copyright-bg-color
		TILEMAX_Kirki::add_field( $config, array(
			'type' => 'color',
			'settings' => 'footer-copyright-bg-color',
			'label'    => esc_html__( 'Background Color', 'tilemax' ),
			'section'  => 'dt_footer_copyright_bg',
			'output' => array(
				array( 'element' => '.footer-copyright' , 'property' => 'background-color' )
			),
			'choices' => array( 'alpha' => true ),
			'active_callback' => array(
				array( 'setting' => 'customize-footer-copyright-bg', 'operator' => '==', 'value' => '1' ),
				array(
					array( 'setting' => 'show-copyright-text', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'copyright-next', 'operator' => 'in', 'value' =>  array( 'sociable', 'footer-menu') )				
				)
			)
		));

		# footer-copyright-bg-image
		TILEMAX_Kirki::add_field( $config, array(
			'type' => 'image',
			'settings' => 'footer-copyright-bg-image',
			'label'    => esc_html__( 'Background Image', 'tilemax' ),
			'description'    => esc_html__( 'Add Background Image for footer', 'tilemax' ),
			'section'  => 'dt_footer_copyright_bg',
			'output' => array(
				array( 'element' => '.footer-copyright' , 'property' => 'background-image' )
			),
			'active_callback' => array(
				array( 'setting' => 'customize-footer-copyright-bg', 'operator' => '==', 'value' => '1' ),
				array(
					array( 'setting' => 'show-copyright-text', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'copyright-next', 'operator' => 'in', 'value' =>  array( 'sociable', 'footer-menu') )		
				)
			)
		));

		# footer-copyright-bg-position
		TILEMAX_Kirki::add_field( $config, array(
			'type' => 'select',
			'settings' => 'footer-copyright-bg-position',
			'label'    => esc_html__( 'Background Image Position', 'tilemax' ),
			'section'  => 'dt_footer_copyright_bg',
			'output' => array(),
			'default' => 'center',
			'multiple' => 1,
			'choices' => tilemax_image_positions(),
			'active_callback' => array(
				array( 'setting' => 'customize-footer-copyright-bg', 'operator' => '==', 'value' => '1' ),
				array(
					array( 'setting' => 'show-copyright-text', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'copyright-next', 'operator' => 'in', 'value' =>  array( 'sociable', 'footer-menu') )		
				),
				array( 'setting' => 'footer-copyright-bg-image', 'operator' => '!=', 'value' => '' )				
			)			
		));

		# footer-copyright-bg-repeat
		TILEMAX_Kirki::add_field( $config, array(
			'type' => 'select',
			'settings' => 'footer-copyright-bg-repeat',
			'label'    => esc_html__( 'Background Image Repeat', 'tilemax' ),
			'section'  => 'dt_footer_copyright_bg',
			'output' => array(),
			'default' => 'repeat',
			'multiple' => 1,
			'choices' => tilemax_image_repeats(),
			'active_callback' => array(
				array( 'setting' => 'customize-footer-copyright-bg', 'operator' => '==', 'value' => '1' ),
				array(
					array( 'setting' => 'show-copyright-text', 'operator' => '==', 'value' => '1' ),
					array( 'setting' => 'copyright-next', 'operator' => 'in', 'value' =>  array( 'sociable', 'footer-menu') )		
				),
				array( 'setting' => 'footer-copyright-bg-image', 'operator' => '!=', 'value' => '' )
			)			
		));

# Footer Copyright Typography
	TILEMAX_Kirki::add_section( 'dt_footer_copyright_typo', array(
		'title'	=> esc_html__( 'Typography', 'tilemax' ),
		'panel' => 'dt_footer_copyright_panel',
		'priority' => 4,
	) );

		# customize-footer-copyright-text-typo
		TILEMAX_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-footer-copyright-text-typo',
			'label'    => esc_html__( 'Customize Copyright Text ?', 'tilemax' ),
			'section'  => 'dt_footer_copyright_typo',
			'default'  => tilemax_defaults('customize-footer-copyright-text-typo'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'tilemax' ),
				'off' => esc_attr__( 'No', 'tilemax' )
			),
			'active_callback' => array(
				array( 'setting' => 'show-copyright-text', 'operator' => '==', 'value' => '1' )
			)			
		));

		# footer-copyright-text-typo
		TILEMAX_Kirki::add_field( $config, array(
			'type'     => 'typography',
			'settings' => 'footer-copyright-text-typo',
			'label'    => esc_html__( 'Text Typography', 'tilemax' ),
			'section'  => 'dt_footer_copyright_typo',
			'output' => array(
				array( 'element' => '.footer-copyright' )
			),
			'default' => tilemax_defaults( 'footer-copyright-text-typo' ),
			'active_callback' => array(
				array( 'setting' => 'show-copyright-text', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'customize-footer-copyright-text-typo', 'operator' => '==', 'value' => '1' )
			)		
		));

		# Divider
		TILEMAX_Kirki::add_field( $config ,array(
			'type'=> 'custom',
			'settings' => 'footer-copyright-text-typo-divider',
			'section'  => 'dt_footer_copyright_typo',
			'default'  => '<div class="customize-control-divider"></div>',
			'active_callback' => array(
				array( 'setting' => 'show-copyright-text', 'operator' => '==', 'value' => '1' ),
				array( 'setting' => 'copyright-next', 'operator' => '==', 'value' => 'footer-menu' )
			)			
		));		

		# customize-footer-menu-typo
		TILEMAX_Kirki::add_field( $config, array(
			'type'     => 'switch',
			'settings' => 'customize-footer-menu-typo',
			'label'    => esc_html__( 'Customize Footer Menu ?', 'tilemax' ),
			'section'  => 'dt_footer_copyright_typo',
			'default'  => tilemax_defaults('customize-footer-menu-typo'),
			'choices'  => array(
				'on'  => esc_attr__( 'Yes', 'tilemax' ),
				'off' => esc_attr__( 'No', 'tilemax' )
			),
			'active_callback' => array(
				array( 'setting' => 'copyright-next', 'operator' => '==', 'value' => 'footer-menu' )
			)			
		));

		# footer-menu-typo
		TILEMAX_Kirki::add_field( $config, array(
			'type'     => 'typography',
			'settings' => 'footer-menu-typo',
			'label'    => esc_html__( 'Menu Typography', 'tilemax' ),
			'section'  => 'dt_footer_copyright_typo',
			'output' => array(
				array( 'element' => '' )
			),
			'default' => tilemax_defaults( 'footer-menu-typo' ),
			'active_callback' => array(
				array( 'setting' => 'copyright-next', 'operator' => '==', 'value' => 'footer-menu' ),
				array( 'setting' => 'customize-footer-menu-typo', 'operator' => '==', 'value' => '1' )
			)		
		));		