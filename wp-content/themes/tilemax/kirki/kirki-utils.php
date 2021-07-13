<?php
function tilemax_kirki_config() {
	return 'tilemax_kirki_config';
}

function tilemax_defaults( $key = '' ) {
	$defaults = array();

	# site identify
	$defaults['use-custom-logo'] = '1';
	$defaults['custom-logo'] = TILEMAX_THEME_URI.'/images/logo.png';
	$defaults['custom-dark-logo'] = TILEMAX_THEME_URI.'/images/light-logo.png';
	$defaults['site_icon'] = TILEMAX_THEME_URI.'/images/favicon.ico';

	# site layout
	$defaults['site-layout'] = 'wide';

	# site skin
	$defaults['use-predefined-skin'] = '0';
	$defaults['predefined-skin']     = 'gold';
	$defaults['primary-color']       = '#b8aa83';
	$defaults['secondary-color']     = '#ecdaab';
	$defaults['tertiary-color']      = '#a2936a';

	$defaults['body-bg-color']      = '#ffffff';
	$defaults['body-content-color'] = '#000000';
	$defaults['body-a-color']       = '#b8aa83';
	$defaults['body-a-hover-color'] = '#666';

	# site breadcrumb
	$defaults['customize-breadcrumb-title-typo'] = '1';
	$defaults['breadcrumb-title-typo'] = array( 'font-family' => 'Open Sans',
		'variant' => 'regular',
		'subsets' => array( 'latin-ext' ),
		'font-size' => '20px',
		'line-height' => '',
		'letter-spacing' => '0.5px',
		'color' => '#fffffff',
		'text-align' => 'unset',
		'text-transform' => 'none' );
	$defaults['customize-breadcrumb-typo'] = '0';
	$defaults['breadcrumb-typo'] = array( 'font-family' => 'Open Sans',
		'variant' => 'regular',
		'subsets' => array( 'latin-ext' ),
		'font-size' => '20px',
		'line-height' => '',
		'letter-spacing' => '0',
		'color' => '#333333',
		'text-align' => 'unset',
		'text-transform' => 'none' );

	# site header
	$defaults['header-type'] = 'fullwidth-header header-align-center fullwidth-menu-header';
	$defaults['enable-sticy-nav'] = '1';
	$defaults['header-position'] = 'above slider';
	$defaults['header-transparency'] = 'default';
	$defaults['enable-header-darkbg'] = '0';
	$defaults['menu-search-icon'] = '0';
	$defaults['search-box-type'] = 'type2';
	$defaults['menu-cart-icon'] = '0';
	$defaults['enable-top-bar-content'] = '0';

	# site menu
	$defaults['menu-active-style'] =  'menu-active-highlight';
	$defaults['menu-hover-style'] =  'fadeIn';

	# site footer
	$defaults['show-footer'] = '1';
	$defaults['footer-columns'] = '4';
	$defaults['enable-footer-darkbg'] = '1';
	$defaults['customize-footer-bg'] = '1';
	$defaults['customize-footer-title-typo'] = '1';
	$defaults['footer-title-typo'] = array( 'font-family' => 'Kanit',
		'variant' => '500',
		'subsets' => array( 'latin-ext' ),
		'font-size' => '20px',
		'line-height' => '36px',
		'letter-spacing' => '0',
		'color' => '#2B2B2B',
		'text-align' => 'left',
		'text-transform' => 'none' );
	$defaults['customize-footer-content-typo'] = '1';
	$defaults['footer-content-typo'] = array( 'font-family' => 'Kanit',
		'variant' => 'normal',
		'subsets' => array( 'latin-ext' ),
		'font-size' => '14px',
		'line-height' => '24px',
		'letter-spacing' => '0',
		'color' => '#333333',
		'text-align' => 'left',
		'text-transform' => 'none' );

	# site copyright
	$defaults['show-copyright-text'] = '1';
	$defaults['copyright-text'] = '<p><a href="https://themeforest.net/user/designthemes">DesignThemes</a><span>Shaping brands for the digital world.</span></p>';
	$defaults['enable-copyright-darkbg'] = '1';
	$defaults['copyright-next'] = 'footer-menu';
	$defaults['customize-footer-copyright-bg'] = '0';
	$defaults['customize-footer-copyright-text-typo'] = '0';
	$defaults['customize-footer-menu-typo'] = '0';

	# site social
	$defaults['facebook'] = '#';
	$defaults['twitter'] = '#';
	$defaults['google-plus'] = '#';
	$defaults['instagram'] = '#';

	# Footer Menu typography
	$defaults['footer-copyright-text-typo'] = '1';
	$defaults['footer-copyright-text-typo'] = array(
		'font-family' => 'Kanit',
		'variant' => '700',
		'font-size' => '30px',
		'line-height' => '',
		'letter-spacing' => '0.5px',
		'color' => '#000000',
		'text-align' => 'unset',
		'text-transform' => 'none'
	);

	# site typography
	$defaults['footer-menu-typo'] = '1';
	$defaults['footer-menu-typo'] = array(
		'font-family' => 'Kanit',
		'variant' => '700',
		'font-size' => '30px',
		'line-height' => '',
		'letter-spacing' => '0.5px',
		'color' => '#000000',
		'text-align' => 'unset',
		'text-transform' => 'none'
	);


	# site typography
	$defaults['customize-body-h1-typo'] = '1';
	$defaults['h1'] = array(
		'font-family' => 'Kanit',
		'variant' => '700',
		'font-size' => '30px',
		'line-height' => '',
		'letter-spacing' => '0.5px',
		'color' => '#000000',
		'text-align' => 'unset',
		'text-transform' => 'none'
	);
	$defaults['customize-body-h2-typo'] = '1';
	$defaults['h2'] = array(
		'font-family' => 'Kanit',
		'variant' => '400',
		'font-size' => '24px',
		'line-height' => '',
		'letter-spacing' => '0.5px',
		'color' => '#000000',
		'text-align' => 'unset',
		'text-transform' => 'none'
	);
	$defaults['customize-body-h3-typo'] = '1';
	$defaults['h3'] = array(
		'font-family' => 'Kanit',
		'variant' => '400',
		'font-size' => '18px',
		'line-height' => '',
		'letter-spacing' => '0.5px',
		'color' => '#000000',
		'text-align' => 'unset',
		'text-transform' => 'none'
	);
	$defaults['customize-body-h4-typo'] = '1';
	$defaults['h4'] = array(
		'font-family' => 'Kanit',
		'variant' => '400',
		'font-size' => '16px',
		'line-height' => '',
		'letter-spacing' => '0.5px',
		'color' => '#000000',
		'text-align' => 'unset',
		'text-transform' => 'none'
	);
	$defaults['customize-body-h5-typo'] = '1';
	$defaults['h5'] = array(
		'font-family' => 'Kanit',
		'variant' => '400',
		'font-size' => '14px',
		'line-height' => '',
		'letter-spacing' => '0.5px',
		'color' => '#000000',
		'text-align' => 'unset',
		'text-transform' => 'none'
	);
	$defaults['customize-body-h6-typo'] = '1';
	$defaults['h6'] = array(
		'font-family' => 'Kanit',
		'variant' => '400',
		'font-size' => '13px',
		'line-height' => '',
		'letter-spacing' => '0.5px',
		'color' => '#000000',
		'text-align' => 'unset',
		'text-transform' => 'none'
	);
	$defaults['customize-menu-typo'] = '1';
	$defaults['menu-typo'] = array(
		'font-family' => 'Abel',
		'variant' => '400',
		'font-size' => '18px',
		'line-height' => '',
		'letter-spacing' => '0.5px',
		'color' => '#000000',
		'text-align' => 'unset',
		'text-transform' => 'none'
	);
	$defaults['customize-body-content-typo'] = '1';
	$defaults['body-content-typo'] = array(
		'font-family' => 'Abel',
		'variant' => 'normal',
		'font-size' => '17px',
		'line-height' => '28px',
		'letter-spacing' => '',
		'color' => '#000000',
		'text-align' => 'unset',
		'text-transform' => 'none'
	);

	$defaults['footer-content-a-color'] = '';
	$defaults['footer-content-a-hover-color'] = '';	

	if( !empty( $key ) && array_key_exists( $key, $defaults) ) {
		return $defaults[$key];
	}

	return '';
}

function tilemax_image_positions() {

	$positions = array( "top left" => esc_attr__('Top Left','tilemax'),
		"top center"    => esc_attr__('Top Center','tilemax'),
		"top right"     => esc_attr__('Top Right','tilemax'),
		"center left"   => esc_attr__('Center Left','tilemax'),
		"center center" => esc_attr__('Center Center','tilemax'),
		"center right"  => esc_attr__('Center Right','tilemax'),
		"bottom left"   => esc_attr__('Bottom Left','tilemax'),
		"bottom center" => esc_attr__('Bottom Center','tilemax'),
		"bottom right"  => esc_attr__('Bottom Right','tilemax'),
	);

	return $positions;
}

function tilemax_image_repeats() {

	$image_repeats = array( "repeat" => esc_attr__('Repeat','tilemax'),
		"repeat-x"  => esc_attr__('Repeat in X-axis','tilemax'),
		"repeat-y"  => esc_attr__('Repeat in Y-axis','tilemax'),
		"no-repeat" => esc_attr__('No Repeat','tilemax')
	);

	return $image_repeats;
}

function tilemax_border_styles() {

	$image_repeats = array(
		"none"	 => esc_attr__('None','tilemax'),
		"dotted" => esc_attr__('Dotted','tilemax'),
		"dashed" => esc_attr__('Dashed','tilemax'),
		"solid"	 => esc_attr__('Solid','tilemax'),
		"double" => esc_attr__('Double','tilemax'),
		"groove" => esc_attr__('Groove','tilemax'),
		"ridge"	 => esc_attr__('Ridge','tilemax'),
	);

	return $image_repeats;
}

function tilemax_animations() {

	$animations = array(
		'' 					 => esc_html__('Default','tilemax'),	
		"bigEntrance"        =>  esc_attr__("bigEntrance",'tilemax'),
        "bounce"             =>  esc_attr__("bounce",'tilemax'),
        "bounceIn"           =>  esc_attr__("bounceIn",'tilemax'),
        "bounceInDown"       =>  esc_attr__("bounceInDown",'tilemax'),
        "bounceInLeft"       =>  esc_attr__("bounceInLeft",'tilemax'),
        "bounceInRight"      =>  esc_attr__("bounceInRight",'tilemax'),
        "bounceInUp"         =>  esc_attr__("bounceInUp",'tilemax'),
        "bounceOut"          =>  esc_attr__("bounceOut",'tilemax'),
        "bounceOutDown"      =>  esc_attr__("bounceOutDown",'tilemax'),
        "bounceOutLeft"      =>  esc_attr__("bounceOutLeft",'tilemax'),
        "bounceOutRight"     =>  esc_attr__("bounceOutRight",'tilemax'),
        "bounceOutUp"        =>  esc_attr__("bounceOutUp",'tilemax'),
        "expandOpen"         =>  esc_attr__("expandOpen",'tilemax'),
        "expandUp"           =>  esc_attr__("expandUp",'tilemax'),
        "fadeIn"             =>  esc_attr__("fadeIn",'tilemax'),
        "fadeInDown"         =>  esc_attr__("fadeInDown",'tilemax'),
        "fadeInDownBig"      =>  esc_attr__("fadeInDownBig",'tilemax'),
        "fadeInLeft"         =>  esc_attr__("fadeInLeft",'tilemax'),
        "fadeInLeftBig"      =>  esc_attr__("fadeInLeftBig",'tilemax'),
        "fadeInRight"        =>  esc_attr__("fadeInRight",'tilemax'),
        "fadeInRightBig"     =>  esc_attr__("fadeInRightBig",'tilemax'),
        "fadeInUp"           =>  esc_attr__("fadeInUp",'tilemax'),
        "fadeInUpBig"        =>  esc_attr__("fadeInUpBig",'tilemax'),
        "fadeOut"            =>  esc_attr__("fadeOut",'tilemax'),
        "fadeOutDownBig"     =>  esc_attr__("fadeOutDownBig",'tilemax'),
        "fadeOutLeft"        =>  esc_attr__("fadeOutLeft",'tilemax'),
        "fadeOutLeftBig"     =>  esc_attr__("fadeOutLeftBig",'tilemax'),
        "fadeOutRight"       =>  esc_attr__("fadeOutRight",'tilemax'),
        "fadeOutUp"          =>  esc_attr__("fadeOutUp",'tilemax'),
        "fadeOutUpBig"       =>  esc_attr__("fadeOutUpBig",'tilemax'),
        "flash"              =>  esc_attr__("flash",'tilemax'),
        "flip"               =>  esc_attr__("flip",'tilemax'),
        "flipInX"            =>  esc_attr__("flipInX",'tilemax'),
        "flipInY"            =>  esc_attr__("flipInY",'tilemax'),
        "flipOutX"           =>  esc_attr__("flipOutX",'tilemax'),
        "flipOutY"           =>  esc_attr__("flipOutY",'tilemax'),
        "floating"           =>  esc_attr__("floating",'tilemax'),
        "hatch"              =>  esc_attr__("hatch",'tilemax'),
        "hinge"              =>  esc_attr__("hinge",'tilemax'),
        "lightSpeedIn"       =>  esc_attr__("lightSpeedIn",'tilemax'),
        "lightSpeedOut"      =>  esc_attr__("lightSpeedOut",'tilemax'),
        "pullDown"           =>  esc_attr__("pullDown",'tilemax'),
        "pullUp"             =>  esc_attr__("pullUp",'tilemax'),
        "pulse"              =>  esc_attr__("pulse",'tilemax'),
        "rollIn"             =>  esc_attr__("rollIn",'tilemax'),
        "rollOut"            =>  esc_attr__("rollOut",'tilemax'),
        "rotateIn"           =>  esc_attr__("rotateIn",'tilemax'),
        "rotateInDownLeft"   =>  esc_attr__("rotateInDownLeft",'tilemax'),
        "rotateInDownRight"  =>  esc_attr__("rotateInDownRight",'tilemax'),
        "rotateInUpLeft"     =>  esc_attr__("rotateInUpLeft",'tilemax'),
        "rotateInUpRight"    =>  esc_attr__("rotateInUpRight",'tilemax'),
        "rotateOut"          =>  esc_attr__("rotateOut",'tilemax'),
        "rotateOutDownRight" =>  esc_attr__("rotateOutDownRight",'tilemax'),
        "rotateOutUpLeft"    =>  esc_attr__("rotateOutUpLeft",'tilemax'),
        "rotateOutUpRight"   =>  esc_attr__("rotateOutUpRight",'tilemax'),
        "shake"              =>  esc_attr__("shake",'tilemax'),
        "slideDown"          =>  esc_attr__("slideDown",'tilemax'),
        "slideExpandUp"      =>  esc_attr__("slideExpandUp",'tilemax'),
        "slideLeft"          =>  esc_attr__("slideLeft",'tilemax'),
        "slideRight"         =>  esc_attr__("slideRight",'tilemax'),
        "slideUp"            =>  esc_attr__("slideUp",'tilemax'),
        "stretchLeft"        =>  esc_attr__("stretchLeft",'tilemax'),
        "stretchRight"       =>  esc_attr__("stretchRight",'tilemax'),
        "swing"              =>  esc_attr__("swing",'tilemax'),
        "tada"               =>  esc_attr__("tada",'tilemax'),
        "tossing"            =>  esc_attr__("tossing",'tilemax'),
        "wobble"             =>  esc_attr__("wobble",'tilemax'),
        "fadeOutDown"        =>  esc_attr__("fadeOutDown",'tilemax'),
        "fadeOutRightBig"    =>  esc_attr__("fadeOutRightBig",'tilemax'),
        "rotateOutDownLeft"  =>  esc_attr__("rotateOutDownLeft",'tilemax')
    );

	return $animations;
}