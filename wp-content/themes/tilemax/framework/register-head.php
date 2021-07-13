<?php
/* ---------------------------------------------------------------------------
 * Loading Theme Scripts
 * --------------------------------------------------------------------------- */
add_action( 'admin_enqueue_scripts', 'tilemax_jq_migration', 0 );
add_action( 'wp_enqueue_scripts', 'tilemax_jq_migration', 150 );
function tilemax_jq_migration() {
	wp_enqueue_script('jquery-migrate');
}

add_action('wp_enqueue_scripts', 'tilemax_enqueue_scripts');
if(!function_exists('tilemax_enqueue_scripts')) {
	function tilemax_enqueue_scripts() {
	
		// comment reply script ------------------------------------------------------
		if (is_singular() AND comments_open()):
			 wp_enqueue_script( 'comment-reply' );
		endif;
	
		// scipts variable -----------------------------------------------------------
		$loadingbar = cs_get_option( 'use-site-loader' );
		$loadingbar = !empty( $loadingbar ) ?  "enable" : "disable";
		
		$stickynav = (int) get_theme_mod( 'enable-sticy-nav', tilemax_defaults('enable-sticy-nav') );
		$stickynav = !empty( $stickynav ) ?  "enable" : "disable";
	
		if(is_rtl()) $rtl = true; else $rtl = false;
	
		$htype = get_theme_mod( 'header-type', tilemax_defaults('header-type') );
		$stickyele = "";
		switch( $htype ){
			case 'fullwidth-header':
			case 'boxed-header':
			case 'split-header fullwidth-header':
			case 'split-header boxed-header':
			case 'two-color-header':
				$stickyele = ".main-header-wrapper";
			break;
				
			case 'fullwidth-header header-align-center fullwidth-menu-header':
			case 'fullwidth-header header-align-left fullwidth-menu-header':
				$stickyele = ".menu-wrapper";
			break;
	
			case 'left-header':
			case 'left-header-boxed':
			case 'creative-header':
			case 'overlay-header':
				$stickyele = ".menu-wrapper";
				$stickynav = "disable";
			break;
		}
	
		wp_enqueue_script('ui-totop', get_theme_file_uri('/framework/js/jquery.ui.totop.min.js'), array(), false, true);
	
		wp_enqueue_script('jquery-bxslider', get_theme_file_uri('/framework/js/jquery.BxSlider.js'), array(), false, true);
		wp_enqueue_script('jquery-caroufredsel', get_theme_file_uri('/framework/js/jquery.caroufredsel.js'), array(), false, true);
		wp_enqueue_script('jquery-classie', get_theme_file_uri('/framework/js/jquery.classie.js'), array(), false, true);
		wp_enqueue_script('jquery-countdownclock', get_theme_file_uri('/framework/js/jquery.Countdownclock.js'), array(), false, true);
		wp_enqueue_script('jquery-debouncedresize', get_theme_file_uri('/framework/js/jquery.debouncedresize.js'), array(), false, true);
		wp_enqueue_script('jquery-fitvids', get_theme_file_uri('/framework/js/jquery.fitVids.js'), array(), false, true);
		wp_enqueue_script('jquery-html-placeholder', get_theme_file_uri('/framework/js/jquery.html-placeholder.js'), array(), false, true);
		wp_enqueue_script('jquery-nicescroll', get_theme_file_uri('/framework/js/jquery.nicescroll.js'), array(), false, true);
		wp_enqueue_script('jquery-parallax', get_theme_file_uri('/framework/js/jquery.parallax.js'), array(), false, true);
		wp_enqueue_script('jquery-prettyphoto', get_theme_file_uri('/framework/js/jquery.prettyphoto.js'), array(), false, true);
		wp_enqueue_script('jquery-simple-sidebar', get_theme_file_uri('/framework/js/jquery.simple-sidebar.js'), array(), false, true);
		wp_enqueue_script('jquery-sticky', get_theme_file_uri('/framework/js/jquery.sticky.js'), array(), false, true);
		wp_enqueue_script('jquery-touchswipe', get_theme_file_uri('/framework/js/jquery.TouchSwipe.js'), array(), false, true);
	
		wp_enqueue_script('jquery-visualnav', get_theme_file_uri('/framework/js/jquery.visualNav.min.js'), array(), false, true);
		wp_enqueue_script('resizesensor', get_theme_file_uri('/framework/js/ResizeSensor.min.js'), array(), false, true);
		wp_enqueue_script('theia-sticky-sidebar', get_theme_file_uri('/framework/js/theia-sticky-sidebar.min.js'), array(), false, true);
	
		if(class_exists('Tribe__Events__Pro__Main')) {
			if(!tribe_is_photo()) {
				wp_enqueue_script('isotope', get_theme_file_uri('/framework/js/isotope.pkgd.min.js'), array(), false, true);
			}
		} else {
			wp_enqueue_script('isotope', get_theme_file_uri('/framework/js/isotope.pkgd.min.js'), array(), false, true);
		}

		if( cs_get_option('enable-cookie-consent') == "true" ) {
			wp_enqueue_script('tilemax-cookie-js', get_theme_file_uri('/framework/js/cookieconsent.js'), array(), false, true);
		}

		wp_enqueue_script('tilemax-popup-js', get_theme_file_uri('/framework/js/magnific/jquery.magnific-popup.min.js'), array(), false, true);

		if( $loadingbar == 'enable' ) {
			wp_enqueue_script('pace', get_theme_file_uri('/framework/js/pace.min.js'),array(),false,true);
			wp_localize_script('pace', 'paceOptions', array(
				'restartOnRequestAfter' => 'false',
				'restartOnPushState'    => 'false'
			));
		}

		wp_enqueue_script('tilemax-jqcustom', get_theme_file_uri('/framework/js/custom.js'), array(), false, true);

		wp_localize_script('tilemax-jqcustom', 'dttheme_urls', array(
			'theme_base_url'     => esc_js(TILEMAX_THEME_URI),
			'framework_base_url' => esc_js(TILEMAX_THEME_URI).'/framework/',
			'ajaxurl'            => esc_url( admin_url('admin-ajax.php') ),
			'url'                => esc_url( get_site_url() ),
			'stickynav'          => esc_js($stickynav),
			'stickyele'          => esc_js($stickyele),
			'isRTL'              => esc_js($rtl),
			'loadingbar'         => esc_js($loadingbar),
			'advOptions'         => esc_html__('Show Advanced Options', 'tilemax'),
			'wpnonce'            => wp_create_nonce('rating-nonce')
		));

		$picker = cs_get_option( 'enable-stylepicker' );
		if( isset($picker) ) {
			wp_enqueue_script('jquery-cookie', get_theme_file_uri('/framework/js/jquery.cookie.min.js'),array(),false,true);
			wp_enqueue_script('tilemax-jqcpanel', get_theme_file_uri('/framework/js/controlpanel.js'),array(),false,true);
		}
	}
}
/* ---------------------------------------------------------------------------
 * Scripts of Custom JS from Theme Back-End
* --------------------------------------------------------------------------- */
if(!function_exists('tilemax_scripts_custom')) {
	function tilemax_scripts_custom() {
		
		$enable_custom_js = (int) get_theme_mod( 'enable-custom-js', tilemax_defaults('enable-custom-js') );
		$custom_js = get_theme_mod( 'custom-js', '');
		
		if( !empty( $enable_custom_js ) && !empty( $custom_js ) ){
			wp_add_inline_script('tilemax-jqcustom', tilemax_wp_kses(stripslashes($custom_js)) ,'after');
		}
	}
}
add_action('wp_enqueue_scripts', 'tilemax_scripts_custom', 100);

/* ---------------------------------------------------------------------------
 * Loading Theme Styles
 * --------------------------------------------------------------------------- */
add_action( 'wp_enqueue_scripts', 'tilemax_enqueue_styles', 101 );

if(!function_exists('tilemax_enqueue_styles')) {
	function tilemax_enqueue_styles() {
	
		// site icons ---------------------------------------------------------------
		if ( ! has_site_icon() ):
			$url = TILEMAX_THEME_URI . "/images/favicon.ico";
			echo "<link href='$url' rel='shortcut icon' type='image/x-icon' />\n";		
		endif;
	
		// wp_enqueue_style ---------------------------------------------------------------
		wp_enqueue_style( 'tilemax', get_stylesheet_uri(), false, TILEMAX_THEME_VERSION, 'all' );
	
		wp_enqueue_style( 'tilemax-base',		  get_theme_file_uri('/css/base.css'), false, TILEMAX_THEME_VERSION, 'all' );
		wp_enqueue_style( 'tilemax-grid', 		  get_theme_file_uri('/css/grid.css'), false, TILEMAX_THEME_VERSION, 'all' );
		wp_enqueue_style( 'tilemax-widget', 	  get_theme_file_uri('/css/widget.css'), false, TILEMAX_THEME_VERSION, 'all' );
		wp_enqueue_style( 'tilemax-layout', 	  get_theme_file_uri('/css/layout.css'), false, TILEMAX_THEME_VERSION, 'all' );
		wp_enqueue_style( 'tilemax-blog',	      get_theme_file_uri('/css/blog.css'), false, TILEMAX_THEME_VERSION, 'all' );
		wp_enqueue_style( 'tilemax-portfolio',	  get_theme_file_uri('/css/portfolio.css'), false, TILEMAX_THEME_VERSION, 'all' );
		wp_enqueue_style( 'tilemax-contact',	  get_theme_file_uri('/css/contact.css'), false, TILEMAX_THEME_VERSION, 'all' );
		wp_enqueue_style( 'tilemax-custom-class', get_theme_file_uri('/css/custom-class.css'), false, TILEMAX_THEME_VERSION, 'all' );
		wp_enqueue_style( 'tilemax-browsers', 	  get_theme_file_uri('/css/browsers.css'), false, TILEMAX_THEME_VERSION, 'all' );
	
		wp_enqueue_style( 'prettyphoto',	get_theme_file_uri('/css/prettyPhoto.css'), false, TILEMAX_THEME_VERSION, 'all' );
	
		if (function_exists('bp_add_cover_image_inline_css')) {
			$inline_css = bp_add_cover_image_inline_css( true );
			wp_add_inline_style( 'bp-parent-css', strip_tags( $inline_css['css_rules'] ) );
		}
	
		// icon fonts ---------------------------------------------------------------------
		wp_enqueue_style ( 'custom-font-awesome',		get_theme_file_uri('/css/font-awesome.min.css'), array (), '4.3.0' );
		wp_enqueue_style ( 'pe-icon-7-stroke',			get_theme_file_uri('/css/pe-icon-7-stroke.css'), array () );
		wp_enqueue_style ( 'stroke-gap-icons-style',	get_theme_file_uri('/css/stroke-gap-icons-style.css'), array () );
		wp_enqueue_style ( 'icon-moon',					get_theme_file_uri('/css/icon-moon.css'), array () );
		wp_enqueue_style ( 'material-design-iconic',	get_theme_file_uri('/css/material-design-iconic-font.min.css'), array () );
	
		// comingsoon css
		if( cs_get_option( 'enable-comingsoon' ) )
			wp_enqueue_style("tilemax-comingsoon",  get_theme_file_uri("/css/comingsoon.css"), false, TILEMAX_THEME_VERSION, 'all' );
	
		// gutenberg css ---------------------------------------------------------------------
		wp_enqueue_style( 'tilemax-gutenberg', get_theme_file_uri('/css/gutenberg.css'), false, TILEMAX_THEME_VERSION, 'all' );
	
		// notfound css
		if ( is_404() )
			wp_enqueue_style("tilemax-notfound",	get_theme_file_uri("/css/notfound.css"), false, TILEMAX_THEME_VERSION, 'all' );
	
		// loader css
		$loadingbar = cs_get_option( 'use-site-loader' );
		if( !empty( $loadingbar ) )
			wp_enqueue_style("tilemax-loader", 		get_theme_file_uri("/css/loaders.css"), false, TILEMAX_THEME_VERSION, 'all' );
	
		// woocommerce css
		if( function_exists( 'is_woocommerce' ) ):
			wp_enqueue_style( 'tilemax-woo', 		get_theme_file_uri('/css/woocommerce.css'), 'woocommerce-general-css', TILEMAX_THEME_VERSION, 'all' );
			
			wp_enqueue_style( 'tilemax-woo-type-default',get_theme_file_uri('/css/woocommerce/woocommerce-default.css'),'woo-type-default-css', TILEMAX_THEME_VERSION, 'all' );
			wp_enqueue_style( 'tilemax-woo-type1-fashion',get_theme_file_uri('/css/woocommerce/type1-fashion.css'), 'woo-type1-fashion-css', TILEMAX_THEME_VERSION, 'all' );
			wp_enqueue_style( 'tilemax-woo-type2-jewel',get_theme_file_uri('/css/woocommerce/type2-jewel.css'), 'woo-type2-jewel-css', TILEMAX_THEME_VERSION, 'all' );
			wp_enqueue_style( 'tilemax-woo-type3-business',get_theme_file_uri('/css/woocommerce/type3-business.css'), 'woo-type3-business-css', TILEMAX_THEME_VERSION, 'all' );
			wp_enqueue_style( 'tilemax-woo-type4-hosting',get_theme_file_uri('/css/woocommerce/type4-hosting.css'), 'woo-type4-hosting-css', TILEMAX_THEME_VERSION, 'all' );
			wp_enqueue_style( 'tilemax-woo-type5-spa',get_theme_file_uri('/css/woocommerce/type5-spa.css'), 'woo-type5-spa-css', TILEMAX_THEME_VERSION, 'all' );
			wp_enqueue_style( 'tilemax-woo-type6-wedding',get_theme_file_uri('/css/woocommerce/type6-wedding.css'), 'woo-type6-wedding-css', TILEMAX_THEME_VERSION, 'all' );
			wp_enqueue_style( 'tilemax-woo-type7-university',get_theme_file_uri('/css/woocommerce/type7-university.css'),'woo-type7-university-css',TILEMAX_THEME_VERSION,'all');
			wp_enqueue_style( 'tilemax-woo-type8-insurance',get_theme_file_uri('/css/woocommerce/type8-insurance.css'),'woo-type8-insurance-css',TILEMAX_THEME_VERSION, 'all');
			wp_enqueue_style( 'tilemax-woo-type9-plumber',get_theme_file_uri('/css/woocommerce/type9-plumber.css'), 'woo-type9-plumber-css', TILEMAX_THEME_VERSION, 'all' );
			wp_enqueue_style( 'tilemax-woo-type10-medical',get_theme_file_uri('/css/woocommerce/type10-medical.css'), 'woo-type10-medical-css', TILEMAX_THEME_VERSION, 'all' );
			wp_enqueue_style( 'tilemax-woo-type11-model',get_theme_file_uri('/css/woocommerce/type11-model.css'), 'woo-type11-model-css', TILEMAX_THEME_VERSION, 'all' );
			wp_enqueue_style( 'tilemax-woo-type12-attorney',get_theme_file_uri('/css/woocommerce/type12-attorney.css'), 'woo-type12-attorney-css',TILEMAX_THEME_VERSION,'all');
			wp_enqueue_style( 'tilemax-woo-type13-architecture',get_theme_file_uri('/css/woocommerce/type13-architecture.css'),'woo-type13-architecture-css',TILEMAX_THEME_VERSION,'all');
			wp_enqueue_style( 'tilemax-woo-type14-fitness',get_theme_file_uri('/css/woocommerce/type14-fitness.css'), 'woo-type14-fitness-css', TILEMAX_THEME_VERSION, 'all' );
			wp_enqueue_style( 'tilemax-woo-type15-hotel',get_theme_file_uri('/css/woocommerce/type15-hotel.css'), 'woo-type15-hotel-css', TILEMAX_THEME_VERSION, 'all' );
			wp_enqueue_style( 'tilemax-woo-type16-photography',get_theme_file_uri('/css/woocommerce/type16-photography.css'), 'woo-type16-photography-css', TILEMAX_THEME_VERSION,'all');
			wp_enqueue_style( 'tilemax-woo-type17-restaurant',get_theme_file_uri('/css/woocommerce/type17-restaurant.css'), 'woo-type17-restaurant-css', TILEMAX_THEME_VERSION, 'all' );
			wp_enqueue_style( 'tilemax-woo-type18-event',get_theme_file_uri('/css/woocommerce/type18-event.css'), 'woo-type18-event-css', TILEMAX_THEME_VERSION, 'all' );
			wp_enqueue_style( 'tilemax-woo-type19-nightclub',get_theme_file_uri('/css/woocommerce/type19-nightclub.css'), 'woo-type19-nightclub-css', TILEMAX_THEME_VERSION, 'all' );
			wp_enqueue_style( 'tilemax-woo-type20-yoga',get_theme_file_uri('/css/woocommerce/type20-yoga.css'), 'woo-type20-yoga-css', TILEMAX_THEME_VERSION, 'all' );
			wp_enqueue_style( 'tilemax-woo-type21-styleshop',get_theme_file_uri('/css/woocommerce/type21-styleshop.css'), 'woo-type21-styleshop-css', TILEMAX_THEME_VERSION, 'all' );
		
		endif;
	
		// skin css
		$use_predefined_skin = (int) get_theme_mod( 'use-predefined-skin', tilemax_defaults('use-predefined-skin') );
		if( !empty( $use_predefined_skin ) ) :
			$skin = get_theme_mod( 'predefined-skin', tilemax_defaults('predefined-skin') );
			wp_enqueue_style('tilemax-skin', get_theme_file_uri("/css/skins/$skin/style.css"));
		endif;
	
		// tribe-events -------------------------------------------------------------------
		wp_enqueue_style( 'tilemax-customevent', 		get_theme_file_uri('/tribe-events/custom.css'), false, TILEMAX_THEME_VERSION, 'all' );
		
		// cookie-consent -----------------------------------------------------------------
		if( cs_get_option('enable-cookie-consent') == "true" ) {
			wp_enqueue_style( 'tilemax-cookie-css', 		get_theme_file_uri('/css/cookieconsent.css'), false, TILEMAX_THEME_VERSION, 'all' );
		}
	
		wp_enqueue_style( 'tilemax-popup-css', 		get_theme_file_uri('/framework/js/magnific/magnific-popup.css'), false, TILEMAX_THEME_VERSION, 'all' );
	
		// custom css ---------------------------------------------------------------------
		wp_enqueue_style( 'tilemax-custom', 			get_theme_file_uri('/css/custom.css'), false, TILEMAX_THEME_VERSION, 'all' );
	
		// jquery scripts --------------------------------------------
		wp_enqueue_script('modernizr-custom', 	get_theme_file_uri('/framework/js/modernizr.custom.js'), array('jquery'));
	
		// rtl ----------------------------------------------------------------------------
		if(is_rtl()) wp_enqueue_style('tilemax-rtl', 	get_theme_file_uri('/css/rtl.css'), false, TILEMAX_THEME_VERSION, 'all' );
	
		# Sub Menu Wrapper Shadow
		$enable_sub_menu_shadow = (int) get_theme_mod( 'allow-sub-menu-box-shadow', tilemax_defaults('allow-sub-menu-box-shadow') );
		if( !empty( $enable_sub_menu_shadow ) ) {
	
			$h_shadow = (int) get_theme_mod( 'sub-menu-box-h-shadow', tilemax_defaults('sub-menu-box-h-shadow') );
			$h_shadow .= 'px ';
	
			$v_shadow = (int) get_theme_mod( 'sub-menu-box-v-shadow', tilemax_defaults('sub-menu-box-v-shadow') );
			$v_shadow .= 'px ';
	
			$blur_shadow = (int) get_theme_mod( 'sub-menu-box-blur-shadow', tilemax_defaults('sub-menu-box-blur-shadow') );
			$blur_shadow .= 'px ';
	
			$spread_shadow = (int) get_theme_mod( 'sub-menu-box-spread-shadow', tilemax_defaults('sub-menu-box-spread-shadow') );
			$spread_shadow .= 'px ';
	
			$color_shadow = get_theme_mod( 'sub-menu-box-shadow-color', '' );
	
			$inset_shadow = (int) get_theme_mod( 'sub-menu-box-shadow-inset', tilemax_defaults('sub-menu-box-shadow-inset') );
			$inset_shadow = !empty( $inset_shadow ) ? ' inset' : '';
	
			$css = '#main-menu ul li.menu-item-simple-parent ul, #main-menu .menu-item-megamenu-parent .megamenu-child-container { box-shadow:'.$h_shadow.$v_shadow.$blur_shadow.$spread_shadow.$color_shadow.$inset_shadow.'}';
	
			wp_add_inline_style( 'tilemax', $css );		
		}
	
		# Sub Menu Wrapper Gradient BG
		$enable_sub_menu_bg = (int) get_theme_mod( 'allow-sub-menu-bg-color', tilemax_defaults('allow-sub-menu-bg-color') );
		$sub_menu_bg_type = get_theme_mod( 'sub-menu-bg-color-type', tilemax_defaults('sub-menu-bg-color-type') );
		
		if( !empty( $enable_sub_menu_bg ) && ( $sub_menu_bg_type == 'gradient' ) ) {
	
			$c1 = get_theme_mod( 'sub-menu-bg-color-1', '' );
			$c1_stop = get_theme_mod( 'sub-menu-bg-color-1-stop', '' );
			$c2 = get_theme_mod( 'sub-menu-bg-color-2', '' );
			$c2_stop = get_theme_mod( 'sub-menu-bg-color-2-stop', '' );
			$dir = get_theme_mod( 'sub-menu-bg-color-direction', 'left-right' );
	
			$dir_1 = $dir_2 = '';
			if( $dir == 'to top' ) {
				$dir_1 = 'bottom';
				$dir_2 =  'left bottom, left top';
			} elseif( $dir == 'to bottom' ) {
				$dir_1 = 'top';
				$dir_2 =  'left top, left bottom';
			} elseif( $dir == 'to right' ) {
				$dir_1 = 'left';
				$dir_2 =  'left top, right top';
			} elseif( $dir == 'to left' ) {
				$dir_1 = 'right';
				$dir_2 =  'right top, left top';
			} elseif( $dir == 'to top left' ) {
				$dir_1 = 'bottom right';
				$dir_2 =  'right bottom, left top';
			} elseif( $dir == 'to top right' ) {
				$dir_1 = 'bottom left';
				$dir_2 =  'left bottom, right top';
			} elseif( $dir == 'to bottom right' ) {
				$dir_1 = 'top left';
				$dir_2 =  'left top, right bottom';
			} elseif( $dir == 'to bottom left' ) {
				$dir_1 = 'top right';
				$dir_2 =  'right top, left bottom';
			}
	
			$css  = '#main-menu ul li.menu-item-simple-parent ul, #main-menu .menu-item-megamenu-parent .megamenu-child-container {';
	
				$css .= 'background:'.$c1.';';
	
				/* IE10+ */
				$css .= 'background-image: -ms-linear-gradient('. $dir_1.', '.$c1.' '.$c1_stop.'%, '.$c2.' '.$c2_stop.'%);';
	
				/* Mozilla Firefox */ 
				$css .= 'background-image: -moz-linear-gradient('. $dir_1.', '.$c1.' '.$c1_stop.'%, '.$c2.' '.$c2_stop.'%); ';
	
				/* Opera */ 
				$css .= 'background-image: -o-linear-gradient('. $dir_1.', '.$c1.' '.$c1_stop.'%, '.$c2.' '.$c2_stop.'%);';
	
				/* Webkit (Chrome 11+) */ 
				$css .= 'background-image: -webkit-linear-gradient('. $dir_1.', '.$c1.' '.$c1_stop.'%, '.$c2.' '.$c2_stop.'%);';
	
				/* Webkit (Safari/Chrome 10) */ 
				$css .= 'background-image: -webkit-gradient(linear, '.$dir_2.', color-stop('.$c1_stop.', '.$c1.'), color-stop('.$c2_stop.', '.$c2.'));';
	
				/* W3C Markup */ 
				$css .= 'background-image: linear-gradient('.$dir.','.$c1.' '. $c1_stop.'%,'.$c2.' '.$c2_stop.'%);';
	
			$css .= '}';
	
			wp_add_inline_style( 'tilemax', $css );
		}
	
	
		$use_predefined_skin = (int) get_theme_mod( 'use-predefined-skin', tilemax_defaults('use-predefined-skin') );
		$primary_color = get_theme_mod('primary-color',tilemax_defaults('primary-color'));
		$secondary_color = get_theme_mod('secondary-color',tilemax_defaults('secondary-color'));
		$tertiary_color = get_theme_mod('tertiary-color',tilemax_defaults('tertiary-color'));
		
		if( empty( $use_predefined_skin ) ) {
	
			$css = '';
	
			if( !empty( $primary_color ) ) {
	
				$rgba = tilemax_hex2rgb( $primary_color );
				$rgba = implode(',', $rgba);
	
				# Header
				$header_type = get_theme_mod('header-type',tilemax_defaults('header-type'));
				if( $header_type == 'overlay-header' ) {
					$css .= '.overlay-header .dt-sc-dark-bg .overlay { background: rgba('.$rgba.', 0.9) }';
				}elseif( $header_type == 'two-color-header' ) {
					$css .= '.two-color-header.semi-transparent-header .main-header-wrapper:before, .two-color-header.transparent-header .is-sticky .main-header-wrapper:before { background:rgba('.$rgba.', 0.7) }';
				}
	
				# Widget Style
				$widget_style = cs_get_option( 'wtitle-style' );
				if( $widget_style == 'type5' ) {
					$css .= '.secondary-sidebar .type5 .widgettitle { border-color:rgba('.$rgba.', 0.5) }';
				} if( $widget_style == 'type12' ) {
					$css .= '.secondary-sidebar .type12 .widgettitle { background: rgba('.$rgba.', 0.2) }';
				}
	
				$css .= '.dt-sc-menu-sorting a { color: rgba('.$rgba.', 0.6) }';
				$css .= '.dt-sc-team.type2 .dt-sc-team-thumb .dt-sc-team-thumb-overlay, .dt-sc-hexagon-image span:before, .dt-sc-keynote-speakers .dt-sc-speakers-thumb .dt-sc-speakers-thumb-overlay {  background: rgba('.$rgba.', 0.9) }';
	
				$css .= '.portfolio .image-overlay, .recent-portfolio-widget ul li a:before, .dt-sc-image-caption.type2:hover .dt-sc-image-content, .dt-sc-fitness-program-short-details-wrapper .dt-sc-fitness-program-short-details { background: rgba('.$rgba.', 0.9) }';
	
				# Shortcode
				$css .= '.dt-sc-icon-box.type10 .icon-wrapper:before, .dt-sc-contact-info.type4 span:after, .dt-sc-pr-tb-col.type2 .dt-sc-tb-header:before { box-shadow:5px 0px 0px 0px '.$primary_color.'}';
				$css .= '.dt-sc-icon-box.type10:hover .icon-wrapper:before { box-shadow:7px 0px 0px 0px '.$primary_color.'}';
				$css .= '.dt-sc-counter.type6 .dt-sc-couter-icon-holder:before { box-shadow:5px 1px 0px 0px '.$primary_color.'}';
				$css .= '.dt-sc-button.with-shadow.white, .dt-sc-pr-tb-col.type2 .dt-sc-buy-now a { box-shadow:3px 3px 0px 0px '.$primary_color.'}';
	
				$css .= '.dt-sc-restaurant-events-list .dt-sc-restaurant-event-details h6:before { border-bottom-color: rgba('.$rgba.',0.6) }';
				$css .= '.portfolio.type4 .image-overlay, .dt-sc-timeline-section.type4 .dt-sc-timeline-thumb-overlay, .dt-sc-yoga-classes .dt-sc-yoga-classes-image-wrapper:before, .dt-sc-yoga-course .dt-sc-yoga-course-thumb-overlay, .dt-sc-yoga-program .dt-sc-yoga-program-thumb-overlay, .dt-sc-yoga-pose .dt-sc-yoga-pose-thumb:before, .dt-sc-yoga-teacher .dt-sc-yoga-teacher-thumb:before, .dt-sc-doctors .dt-sc-doctors-thumb-overlay, .dt-sc-event-addon > .dt-sc-event-addon-date, .dt-sc-course .dt-sc-course-overlay, .dt-sc-process-steps .dt-sc-process-thumb-overlay { background: rgba('.$rgba.',0.85) }';
	
				if( function_exists( 'is_woocommerce' ) ){
	
					$css .= '.woo-type9.woocommerce ul.products li.product .product-wrapper, .woo-type9 .woocommerce ul.products li.product .product-wrapper { border-color: rgba('.$rgba.',0.6) }';
	
					$css .= '.woo-type1 .woocommerce ul.products li.product .star-rating:before, .woo-type1 .woocommerce ul.products li.product .star-rating span:before, .woo-type1.woocommerce ul.products li.product .star-rating:before, .woo-type1.woocommerce ul.products li.product .star-rating span:before, .woo-type1.woocommerce .star-rating:before, .woo-type1.woocommerce .star-rating span:before, .woo-type1 .woocommerce .star-rating:before, .woo-type1 .woocommerce .star-rating span:before, .woo-type2 ul.products li.product .product-details h5 a:hover, .woo-type2 ul.products li.product-category:hover .product-details h5, .woo-type2 ul.products li.product-category:hover .product-details h5 .count { color: rgba('.$rgba.', 0.75) }';
					$css .= '.woo-type2 ul.products li.product .product-thumb a.add_to_cart_button:hover, .woo-type2 ul.products li.product .product-thumb a.button.product_type_simple:hover, .woo-type2 ul.products li.product .product-thumb a.button.product_type_variable:hover, .woo-type2 ul.products li.product .product-thumb a.added_to_cart.wc-forward:hover, .woo-type2 ul.products li.product .product-thumb a.add_to_wishlist:hover, .woo-type2 ul.products li.product .product-thumb .yith-wcwl-wishlistaddedbrowse a:hover, .woo-type2 ul.products li.product .product-thumb .yith-wcwl-wishlistexistsbrowse a:hover, .woo-type6.woocommerce ul.products li.product:hover .product-content, .woo-type6 .woocommerce ul.products li.product:hover .product-content, .woo-type6.woocommerce ul.products li.product.instock:hover .on-sale-product .product-content, .woo-type6 .woocommerce ul.products li.product.instock:hover .on-sale-product .product-content, .woo-type6.woocommerce ul.products li.product.outofstock:hover .out-of-stock-product .product-content, .woo-type6 .woocommerce ul.products li.product.outofstock:hover .out-of-stock-product .product-content, .woo-type6.woocommerce ul.products li.product-category:hover .product-thumb .image:after, .woo-type6 .woocommerce ul.products li.product-category:hover .product-thumb .image:after, .woo-type8.woocommerce ul.products li.product:hover .product-content, .woo-type8.woocommerce ul.products li.product-category:hover .product-thumb .image:after, .woo-type8 .woocommerce ul.products li.product:hover .product-content, .woo-type8 .woocommerce ul.products li.product-category:hover .product-thumb .image:after,.woo-type13.woocommerce ul.products li.product:hover .product-content, .woo-type13 .woocommerce ul.products li.product:hover .product-content, .woo-type13.woocommerce ul.products li.product.instock:hover .on-sale-product .product-content, .woo-type13 .woocommerce ul.products li.product.instock:hover .on-sale-product .product-content, .woo-type13.woocommerce ul.products li.product.outofstock:hover .out-of-stock-product .product-content, .woo-type13 .woocommerce ul.products li.product.outofstock:hover .out-of-stock-product .product-content, .woo-type13.woocommerce ul.products li.product-category:hover .product-thumb .image:after, .woo-type13 .woocommerce ul.products li.product-category:hover .product-thumb .image:after { background-color: rgba('.$rgba.', 0.75) }';
	
					$css .= '.woo-type8.woocommerce ul.products li.product:hover .product-content:after, .woo-type8 .woocommerce ul.products li.product:hover .product-content:after {
						border-color : rgba( '.$rgba.', 0.75 ) rgba('.$rgba.', 0.75 ) rgba(255, 255, 255, 0.35) rgba(255, 255, 255, 0.35)
					}';				
	
					$css .= '.woo-type11 ul.products li.product:hover .product-wrapper {
						-webkit-box-shadow: 0 0 0 3px '.$primary_color.';
						-moz-box-shadow: 0 0 0 3px '.$primary_color.';
						-ms-box-shadow: 0 0 0 3px '.$primary_color.';
						-o-box-shadow: 0 0 0 3px '.$primary_color.';
						box-shadow: 0 0 0 3px '.$primary_color.';
					}';
	
					$css .= '.woo-type12 ul.products li.product .product-details {
						-webkit-box-shadow: 0 -3px 0 0 '.$primary_color.' inset;
						-moz-box-shadow: 0 -3px 0 0 '.$primary_color.' inset;
						-ms-box-shadow: 0 -3px 0 0 '.$primary_color.' inset;
						-o-box-shadow: 0 -3px 0 0 '.$primary_color.' inset;
						box-shadow: 0 -3px 0 0 '.$primary_color.' inset;
					}';
	
					$css .= '.woo-type14 ul.products li.product .product-details, .woo-type14 ul.products li.product .product-details h5:after {
						-webkit-box-shadow: 0 0 0 2px '.$primary_color.' inset;
						-moz-box-shadow: 0 0 0 2px '.$primary_color.' inset;
						-ms-box-shadow: 0 0 0 2px '.$primary_color.' inset;
						-o-box-shadow: 0 0 0 2px '.$primary_color.' inset;
						box-shadow: 0 0 0 2px '.$primary_color.' inset;					
					}';
	
					$css .= '.woo-type15 ul.products li.product .product-thumb a.add_to_cart_button:after, .woo-type15 ul.products li.product .product-thumb a.button.product_type_simple:after, .woo-type15 ul.products li.product .product-thumb a.button.product_type_variable:after, .woo-type15 ul.products li.product .product-thumb a.added_to_cart.wc-forward:after, .woo-type15 ul.products li.product .product-thumb a.add_to_wishlist:after, .woo-type15 ul.products li.product .product-thumb .yith-wcwl-wishlistaddedbrowse a:after, .woo-type15 ul.products li.product .product-thumb .yith-wcwl-wishlistexistsbrowse a:after {
						-webkit-box-shadow: 0 0 0 2px '.$primary_color.';
						-moz-box-shadow: 0 0 0 2px '.$primary_color.';
						-ms-box-shadow: 0 0 0 2px '.$primary_color.';
						-o-box-shadow: 0 0 0 2px '.$primary_color.';
						box-shadow: 0 0 0 2px '.$primary_color.';
					}';
				}
	
				
				$css .= '@media only screen and (max-width: 767px) { .dt-sc-contact-info.type4:after, .dt-sc-icon-box.type10 .icon-content h4:after, .dt-sc-counter.type6.last h4::before, .dt-sc-counter.type6 h4::after { background-color:'.$primary_color.'} }';
				$css .= '@media only screen and (max-width: 767px) { .dt-sc-timeline-section.type2, .dt-sc-timeline-section.type2::before { border-color:'.$primary_color.'} }';
			}
	
			if( !empty( $secondary_color ) ) {
	
				$rgba = tilemax_hex2rgb( $secondary_color );
				$rgba = implode(',', $rgba);
	
				$css .= '.dt-sc-event-month-thumb .dt-sc-event-read-more, .dt-sc-training-thumb-overlay{ background: rgba('.$rgba.',0.85) }';
	
				# Shortcode
				$css .= '@media only screen and (max-width: 767px) { .dt-sc-highlight .dt-sc-testimonial.type6 .dt-sc-testimonial-author:after,.dt-sc-highlight .dt-sc-testimonial.type6 .dt-sc-testimonial-author:after,.skin-highlight .dt-sc-testimonial.type6 .dt-sc-testimonial-author:after { background-color:'.$secondary_color.'} }';
	
				if( function_exists( 'is_woocommerce' ) ){
	
					$css .= '.woo-type8 ul.products li.product:hover .product-details h5:after { border-color: rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) '.$secondary_color.' rgba(0, 0, 0, 0); }';
	
					$css .= '.woo-type9 ul.products li.product:hover .product-wrapper { border-color: rgba('.$rgba.',0.75 )}';
	
					$css .= '.woo-type20 ul.products li.product .product-thumb a.add_to_cart_button:hover, .woo-type20 ul.products li.product .product-thumb a.button.product_type_simple:hover, .woo-type20 ul.products li.product .product-thumb a.button.product_type_variable:hover, .woo-type20 ul.products li.product .product-thumb a.added_to_cart.wc-forward:hover, .woo-type20 ul.products li.product .product-thumb a.add_to_wishlist:hover, .woo-type20 ul.products li.product .product-thumb .yith-wcwl-wishlistaddedbrowse a:hover, .woo-type20 ul.products li.product .product-thumb .yith-wcwl-wishlistexistsbrowse a:hover, .woo-type20 ul.products li.product:hover .product-wrapper { background-color: rgba('.$rgba.',0.5 )}';
	
					$css .= '.woo-type7 ul.products li.product:hover .product-details {
						-webkit-box-shadow: 0 -3px 0 0 '.$secondary_color.' inset;
						-moz-box-shadow: 0 -3px 0 0 '.$secondary_color.' inset;
						-ms-box-shadow: 0 -3px 0 0 '.$secondary_color.' inset;
						-o-box-shadow: 0 -3px 0 0 '.$secondary_color.' inset;
						box-shadow: 0 -3px 0 0 '.$secondary_color.' inset;				
					}';
	
					$css .= '.woo-type19 ul.products li.product:hover .product-thumb .image {
						-webkit-box-shadow: 0 0 1px 4px '.$secondary_color.';
						-moz-box-shadow: 0 0 1px 4px '.$secondary_color.';
						-ms-box-shadow: 0 0 1px 4px '.$secondary_color.';
						-o-box-shadow: 0 0 1px 4px '.$secondary_color.';
						box-shadow: 0 0 1px 4px '.$secondary_color.';
					}';
				}
			}
	
			if( !empty( $tertiary_color ) ) {
	
				$rgba = tilemax_hex2rgb( $tertiary_color );
				$rgba = implode(',', $rgba);
	
				$css .= '.dt-sc-faculty .dt-sc-faculty-thumb-overlay { background: rgba('.$rgba.',0.9) }';
	
				if( function_exists( 'is_woocommerce' ) ){
	
					$css .= '.woo-type18 ul.products li.product:hover .product-content, .woo-type18 ul.products li.product.instock:hover .on-sale-product .product-content, .woo-type18 ul.products li.product.outofstock:hover .out-of-stock-product .product-content, .woo-type18.woocommerce ul.products li.product:hover .product-content, .woo-type18.woocommerce ul.products li.product.instock:hover .on-sale-product .product-content, .woo-type18.woocommerce ul.products li.product.outofstock:hover .out-of-stock-product .product-content, .woo-type18.woocommerce-page ul.products li.product:hover .product-content, .woo-type18.woocommerce-page ul.products li.product.instock:hover .on-sale-product .product-content, .woo-type18.woocommerce-page ul.products li.product.outofstock:hover .out-of-stock-product .product-content { background-color: rgba('.$rgba.',0.6) }';
					$css .= '.woo-type19.woocommerce ul.products li.product:hover .product-content, .woo-type19 .woocommerce ul.products li.product:hover .product-content, .woo-type19.woocommerce ul.products li.product.instock:hover .on-sale-product .product-content, .woo-type19 .woocommerce ul.products li.product.instock:hover .on-sale-product .product-content, .woo-type19.woocommerce ul.products li.product.outofstock:hover .out-of-stock-product .product-content, .woo-type19 .woocommerce ul.products li.product.outofstock:hover .out-of-stock-product .product-content, .woo-type20.woocommerce ul.products li.product:hover .product-content, .woo-type20 .woocommerce ul.products li.product:hover .product-content, .woo-type20.woocommerce ul.products li.product.instock:hover .on-sale-product .product-content, .woo-type20 .woocommerce ul.products li.product.instock:hover .on-sale-product .product-content, .woo-type20.woocommerce ul.products li.product.outofstock:hover .out-of-stock-product .product-content, .woo-type20 .woocommerce ul.products li.product.outofstock:hover .out-of-stock-product .product-content { background-color: rgba('.$rgba.',0.4) }';
	
					$css .= '.woo-type1 ul.products li.product:hover .product-thumb:after { 
						-webkit-box-shadow: 0 0 0 10px rgba('. $rgba.',0.35) inset;
						-moz-box-shadow: 0 0 0 10px rgba('. $rgba.',0.35) inset;
						-ms-box-shadow: 0 0 0 10px rgba('. $rgba.',0.35) inset;
						-o-box-shadow: 0 0 0 10px rgba('. $rgba.',0.35) inset;
						box-shadow: 0 0 0 10px rgba('. $rgba.',0.35) inset;
					}';
	
					$css .= '.woo-type7 ul.products li.product .product-details {
						-webkit-box-shadow: 0 -2px 0 0 '.$tertiary_color.';
						-moz-box-shadow: 0 -2px 0 0 '.$tertiary_color.';
						-ms-box-shadow: 0 -2px 0 0 '.$tertiary_color.';
						-o-box-shadow: 0 -2px 0 0 '.$tertiary_color.';
						box-shadow: 0 -2px 0 0 '.$tertiary_color.';				
					}';
	
					$css .= '.woo-type20 ul.products li.product .product-wrapper {
						-webkit-box-shadow: 0 0 0 5px rgba('. $rgba.',0.75) inset;
						-moz-box-shadow: 0 0 0 5px rgba('. $rgba.',0.75) inset;
						-ms-box-shadow: 0 0 0 5px rgba('. $rgba.',0.75) inset;
						-o-box-shadow: 0 0 0 5px rgba('. $rgba.',0.75) inset;
						box-shadow: 0 0 0 5px rgba('. $rgba.',0.75) inset;					
					}';
				}
			}		
			
			wp_add_inline_style( 'tilemax', $css );		 
		}
	}
}

/* ---------------------------------------------------------------------------
 * Site SSL Compatibility
 * --------------------------------------------------------------------------- */
if(!function_exists('tilemax_ssl')) {
function tilemax_ssl( $echo = false ){
	$ssl = '';
	if( is_ssl() ) $ssl = 's';
	if( $echo ){
		echo apply_filters( 'tilemax_ssl', $ssl );
	}
	return $ssl;
}
}

if( !function_exists('tilemax_getVimeoThumb') ) {
	function tilemax_getVimeoThumb($id) {
		$data = wp_remote_fopen("http".tilemax_ssl()."://vimeo.com/api/v2/video/$id.json");
		$data = json_decode($data);
		return $data[0]->thumbnail_medium;
	}
}

/* ---------------------------------------------------------------------------
 * Body Class Filter for layout changes
 * --------------------------------------------------------------------------- */
if(!function_exists('tilemax_body_classes')) {
	function tilemax_body_classes( $classes ) {
		
		// layout
		$classes[] 		= 	'layout-'. get_theme_mod( 'site-layout', tilemax_defaults('site-layout') );
	
		// header
		$header_type 	=	get_theme_mod( 'header-type', tilemax_defaults('header-type') );
		if( isset($header_type) && ($header_type == 'left-header-boxed') ):
			$classes[]	=	'left-header left-header-boxed';
		elseif( isset($header_type) && ($header_type == 'creative-header') ):
			$classes[]	=	'left-header left-header-creative';
		else:
			$classes[]	=	$header_type;
		endif;
	
		$htrans 		= 	get_theme_mod( 'header-transparency', tilemax_defaults('header-transparency') );
		if(isset($htrans)):
			$classes[]	=	get_theme_mod( 'header-transparency', tilemax_defaults('header-transparency') );
		endif;	
	
		$stickyhead = (int) get_theme_mod( 'enable-sticy-nav', tilemax_defaults('enable-sticy-nav') );
		if( !empty( $stickyhead ) ) {
			$classes[]	=	'sticky-header';
		}
		
		$standard		=	get_theme_mod( 'header-position', tilemax_defaults('header-position') );
		if( isset($standard) && ($standard == 'above slider') ):
			$classes[]	=	'standard-header';
		elseif( isset($standard) && ($standard == 'below slider') ):
			$classes[]	=	'standard-header header-below-slider';
		elseif ( isset($standard) && ($standard == 'on slider') ):
			$classes[]	=	'header-on-slider';
		endif;
		
	
		$topbar = (int) get_theme_mod( 'enable-top-bar-content', tilemax_defaults('enable-top-bar-content') );
		if( $topbar ) {
			$classes[]	=	'header-with-topbar';
		}
	
		$wootype 		= 	cs_get_option( 'product-style' );
		$wootype		= 	!empty($wootype) ? 'woo-'.$wootype : 'woo-type1';
		$classes[]		=	$wootype;
	
		if( is_page() ) {
			$pageid = tilemax_ID();
			$page_meta = get_post_meta( $pageid, '_tpl_default_settings', true );
			$page_meta = is_array( $page_meta ) ? $page_meta : array();
	
			if( array_key_exists( 'show_slider', $page_meta ) && $page_meta['show_slider'] ) {
				$classes[] = "page-with-slider";
			}
			if( array_key_exists( 'enable-sub-title', $page_meta ) && !($page_meta['enable-sub-title']) ) {
				$classes[] = "no-breadcrumb";
			}
		} elseif( is_home() ) {
			$pageid = get_option('page_for_posts');
			$page_meta = get_post_meta( $pageid, '_tpl_default_settings', true );
			$page_meta = is_array( $page_meta ) ? $page_meta : array();
	
			if( array_key_exists( 'show_slider', $page_meta ) && $page_meta['show_slider'] ) {
				$classes[] = "page-with-slider";
			}
		}
	
		# Gutenberg Class
		if ( is_singular() && function_exists('has_blocks') && has_blocks() ) {
			
			$classes[] = 'has-gutenberg-blocks';
		}
	
		return $classes;
	}
}
add_filter( 'body_class', 'tilemax_body_classes' ); ?>