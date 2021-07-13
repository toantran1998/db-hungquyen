<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => constant('TILEMAX_THEME_NAME').' '.esc_html__('Options', 'tilemax'),
  'menu_type'       => 'theme', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'cs-framework',
  'ajax_save'       => true,
  'show_reset_all'  => false,
  'framework_title' => sprintf( esc_html__('Designthemes Framework %sby Designthemes%s', 'tilemax'), '<small>', '</small>')
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();

$options[]      = array(
  'name'        => 'general',
  'title'       => esc_html__('General', 'tilemax'),
  'icon'        => 'fa fa-gears',

  'fields'      => array(

	array(
	  'type'    => 'subheading',
	  'content' => esc_html__( 'General Options', 'tilemax' ),
	),

	array(
	  'id'  	 => 'show-pagecomments',
	  'type'  	 => 'switcher',
	  'title' 	 => esc_html__('Globally Show Page Comments', 'tilemax'),
	  'info'	 => esc_html__('YES! to show comments on all the pages. This will globally override your "Allow comments" option under your page "Discussion" settings.', 'tilemax'),
	  'default'  => true,
	),

	array(
	  'id'  	 => 'showall-pagination',
	  'type'  	 => 'switcher',
	  'title' 	 => esc_html__('Show all pages in Pagination', 'tilemax'),
	  'info'	 => esc_html__('YES! to show all the pages instead of dots near the current page.', 'tilemax')
	),

	array(
	  'id'  	 => 'enable-stylepicker',
	  'type'  	 => 'switcher',
	  'title' 	 => esc_html__('Style Picker', 'tilemax'),
	  'info'	 => esc_html__('YES! to show the style picker.', 'tilemax')
	),

	array(
	  'id'  	 => 'use-site-loader',
	  'type'  	 => 'switcher',
	  'title' 	 => esc_html__('Site Loader', 'tilemax'),
	  'info'	 => esc_html__('YES! to use site loader.', 'tilemax')
	),

	array(
	  'id'      => 'google-map-key',
	  'type'    => 'text',
	  'title'   => esc_html__('Google Map API Key', 'tilemax'),
	  'after' 	=> '<p class="cs-text-info">'.esc_html__('Put a valid google account api key here', 'tilemax').'</p>',
	),

	array(
	  'id'      => 'mailchimp-key',
	  'type'    => 'text',
	  'title'   => esc_html__('Mailchimp API Key', 'tilemax'),
	  'after' 	=> '<p class="cs-text-info">'.esc_html__('Put a valid mailchimp account api key here', 'tilemax').'</p>',
	),

  ),
);

$options[]      = array(
  'name'        => 'layout_options',
  'title'       => esc_html__('Layout Options', 'tilemax'),
  'icon'        => 'dashicons dashicons-exerpt-view',
  'sections' => array(

	// -----------------------------------------
	// Header Options
	// -----------------------------------------
	array(
	  'name'      => 'breadcrumb_options',
	  'title'     => esc_html__('Breadcrumb Options', 'tilemax'),
	  'icon'      => 'fa fa-sitemap',

		'fields'      => array(

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Breadcrumb Options", 'tilemax' ),
		  ),

		  array(
			'id'  		 => 'show-breadcrumb',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Show Breadcrumb', 'tilemax'),
			'info'		 => esc_html__('YES! to display breadcrumb for all pages.', 'tilemax'),
			'default' 	 => true,
		  ),

		  array(
			'id'           => 'breadcrumb-delimiter',
			'type'         => 'select',
			'title'        => esc_html__('Breadcrumb Delimiter', 'tilemax'),
			'options'      => array(
			  'fa default' 					=> esc_html__('Default', 'tilemax'),
			  'fa fa-angle-double-right'    => esc_html__('Double Angle Right', 'tilemax'),
			  'fa fa-sort'  				=> esc_html__('Sort', 'tilemax'),
			  'fa fa-arrow-circle-right'    => esc_html__('Arrow Circle Right', 'tilemax'),
			  'fa fa-angle-right'     		=> esc_html__('Angle Right', 'tilemax'),
			  'fa fa-caret-right'  			=> esc_html__('Caret Right', 'tilemax'),
			  'fa fa-arrow-right'  			=> esc_html__('Arrow Right', 'tilemax'),
			  'fa fa-chevron-right'  		=> esc_html__('Chevron Right', 'tilemax'),
			  'fa fa-hand-o-right'  		=> esc_html__('Hand Right', 'tilemax'),
			  'fa fa-plus'  				=> esc_html__('Plus', 'tilemax'),
			  'fa fa-remove'  				=> esc_html__('Remove', 'tilemax'),
			  'fa fa-glass'  				=> esc_html__('Glass', 'tilemax'),
			),
			'class'        => 'chosen',
			'default'      => 'fa default',
			'info'         => esc_html__('Choose delimiter style to display on breadcrumb section.', 'tilemax'),
		  ),

		  array(
			'id'           => 'breadcrumb-style',
			'type'         => 'select',
			'title'        => esc_html__('Breadcrumb Style', 'tilemax'),
			'options'      => array(
			  'default' 							=> esc_html__('Default', 'tilemax'),
			  'aligncenter'    						=> esc_html__('Align Center', 'tilemax'),
			  'alignright'  						=> esc_html__('Align Right', 'tilemax'),
			  'breadcrumb-left'    					=> esc_html__('Left Side Breadcrumb', 'tilemax'),
			  'breadcrumb-right'     				=> esc_html__('Right Side Breadcrumb', 'tilemax'),
			  'breadcrumb-top-right-title-center'  	=> esc_html__('Top Right Title Center', 'tilemax'),
			  'breadcrumb-top-left-title-center'  	=> esc_html__('Top Left Title Center', 'tilemax'),
			),
			'class'        => 'chosen',
			'default'      => 'aligncenter',
			'info'         => esc_html__('Choose alignment style to display on breadcrumb section.', 'tilemax'),
		  ),

		  array(
			'id'    => 'breadcrumb_background',
			'type'  => 'background',
			'title' => esc_html__('Background', 'tilemax'),
			'desc'  => esc_html__('Choose background options for breadcrumb title section.', 'tilemax')
		  ),

		),
	),

  ),
);

$options[]      = array(
  'name'        => 'allpage_options',
  'title'       => esc_html__('All Page Options', 'tilemax'),
  'icon'        => 'fa fa-files-o',
  'sections' => array(

	// -----------------------------------------
	// Post Options
	// -----------------------------------------
	array(
	  'name'      => 'post_options',
	  'title'     => esc_html__('Post Options', 'tilemax'),
	  'icon'      => 'fa fa-file',

		'fields'      => array(

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Single Post Options", 'tilemax' ),
		  ),
		
		  array(
			'id'  		 => 'single-post-authorbox',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Single Author Box', 'tilemax'),
			'info'		 => esc_html__('YES! to display author box in single blog posts.', 'tilemax')
		  ),

		  array(
			'id'  		 => 'single-post-related',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Single Related Posts', 'tilemax'),
			'info'		 => esc_html__('YES! to display related blog posts in single posts.', 'tilemax')
		  ),

		  array(
			'id'  		 => 'single-post-navigation',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Single Post Navigation', 'tilemax'),
			'info'		 => esc_html__('YES! to display post navigation in single posts.', 'tilemax')
		  ),

		  array(
			'id'  		 => 'single-post-comments',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Posts Comments', 'tilemax'),
			'info'		 => esc_html__('YES! to display single blog post comments.', 'tilemax'),
			'default' 	 => true,
		  ),

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Post Archives Page Layout", 'tilemax' ),
		  ),

		  array(
			'id'      	 => 'post-archives-page-layout',
			'type'       => 'image_select',
			'title'      => esc_html__('Page Layout', 'tilemax'),
			'options'    => array(
			  'content-full-width'   => TILEMAX_THEME_URI . '/cs-framework-override/images/without-sidebar.png',
			  'with-left-sidebar'    => TILEMAX_THEME_URI . '/cs-framework-override/images/left-sidebar.png',
			  'with-right-sidebar'   => TILEMAX_THEME_URI . '/cs-framework-override/images/right-sidebar.png',
			  'with-both-sidebar'    => TILEMAX_THEME_URI . '/cs-framework-override/images/both-sidebar.png',
			),
			'default'      => 'content-full-width',
			'attributes'   => array(
			  'data-depend-id' => 'post-archives-page-layout',
			),
		  ),

		  array(
			'id'  		 => 'show-standard-left-sidebar-for-post-archives',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Show Standard Left Sidebar', 'tilemax'),
			'dependency' => array( 'post-archives-page-layout', 'any', 'with-left-sidebar,with-both-sidebar' ),
		  ),

		  array(
			'id'  		 => 'show-standard-right-sidebar-for-post-archives',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Show Standard Right Sidebar', 'tilemax'),
			'dependency' => array( 'post-archives-page-layout', 'any', 'with-right-sidebar,with-both-sidebar' ),
		  ),

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Post Archives Post Layout", 'tilemax' ),
		  ),

		  array(
			'id'      	   => 'post-archives-post-layout',
			'type'         => 'image_select',
			'title'        => esc_html__('Post Layout', 'tilemax'),
			'options'      => array(
			  'one-column' 		  => TILEMAX_THEME_URI . '/cs-framework-override/images/one-column.png',
			  'one-half-column'   => TILEMAX_THEME_URI . '/cs-framework-override/images/one-half-column.png',
			  'one-third-column'  => TILEMAX_THEME_URI . '/cs-framework-override/images/one-third-column.png',
			  '1-2-2'			  => TILEMAX_THEME_URI . '/cs-framework-override/images/1-2-2.png',
			  '1-2-2-1-2-2' 	  => TILEMAX_THEME_URI . '/cs-framework-override/images/1-2-2-1-2-2.png',
			  '1-3-3-3'			  => TILEMAX_THEME_URI . '/cs-framework-override/images/1-3-3-3.png',
			  '1-3-3-3-1' 		  => TILEMAX_THEME_URI . '/cs-framework-override/images/1-3-3-3-1.png',
			),
			'default'      => 'one-half-column',
		  ),

		  array(
			'id'           => 'post-style',
			'type'         => 'select',
			'title'        => esc_html__('Post Style', 'tilemax'),
			'options'      => array(
			  'blog-default-style' 		=> esc_html__('Default', 'tilemax'),
			  'entry-date-left'      	=> esc_html__('Date Left', 'tilemax'),
			  'entry-date-author-left'  => esc_html__('Date and Author Left', 'tilemax'),
			  'blog-medium-style'       => esc_html__('Medium', 'tilemax'),
			  'blog-medium-style dt-blog-medium-highlight'     					 => esc_html__('Medium Hightlight', 'tilemax'),
			  'blog-medium-style dt-blog-medium-highlight dt-sc-skin-highlight'  => esc_html__('Medium Skin Highlight', 'tilemax'),
			),
			'class'        => 'chosen',
			'default'      => 'blog-default-style',
			'info'         => esc_html__('Choose post style to display post archives pages.', 'tilemax'),
		  ),

		  array(
			'id'  		 => 'post-archives-enable-excerpt',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Allow Excerpt', 'tilemax'),
			'info'		 => esc_html__('YES! to allow excerpt', 'tilemax'),
			'default'    => true,
		  ),

		  array(
			'id'  		 => 'post-archives-excerpt',
			'type'  	 => 'number',
			'title' 	 => esc_html__('Excerpt Length', 'tilemax'),
			'after'		 => '<span class="cs-text-desc">&nbsp;'.esc_html__('Put Excerpt Length', 'tilemax').'</span>',
			'default' 	 => 40,
		  ),

		  array(
			'id'  		 => 'post-archives-enable-readmore',
			'type'  	 => 'switcher',
			'title' 	 => esc_html__('Read More', 'tilemax'),
			'info'		 => esc_html__('YES! to enable read more button', 'tilemax'),
			'default'	 => true,
		  ),

		  array(
			'id'  		 => 'post-archives-readmore',
			'type'  	 => 'textarea',
			'title' 	 => esc_html__('Read More Shortcode', 'tilemax'),
			'info'		 => esc_html__('Paste any button shortcode here', 'tilemax'),
			'default'	 => '[dt_sc_button title="Read More" style="bordered" class="type1"]',
		  ),

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Single Post & Post Archive options", 'tilemax' ),
		  ),

		  array(
			'id'      => 'post-format-meta',
			'type'    => 'switcher',
			'title'   => esc_html__('Post Format Meta', 'tilemax' ),
			'info'	  => esc_html__('YES! to show post format meta information', 'tilemax'),
			'default' => true
		  ),

		  array(
			'id'      => 'post-author-meta',
			'type'    => 'switcher',
			'title'   => esc_html__('Author Meta', 'tilemax' ),
			'info'	  => esc_html__('YES! to show post author meta information', 'tilemax'),
			'default' => true
		  ),

		  array(
			'id'      => 'post-date-meta',
			'type'    => 'switcher',
			'title'   => esc_html__('Date Meta', 'tilemax' ),
			'info'	  => esc_html__('YES! to show post date meta information', 'tilemax'),
			'default' => true
		  ),

		  array(
			'id'      => 'post-comment-meta',
			'type'    => 'switcher',
			'title'   => esc_html__('Comment Meta', 'tilemax' ),
			'info'	  => esc_html__('YES! to show post comment meta information', 'tilemax'),
			'default' => true
		  ),

		  array(
			'id'      => 'post-category-meta',
			'type'    => 'switcher',
			'title'   => esc_html__('Category Meta', 'tilemax' ),
			'info'	  => esc_html__('YES! to show post category information', 'tilemax'),
			'default' => true
		  ),

		  array(
			'id'      => 'post-tag-meta',
			'type'    => 'switcher',
			'title'   => esc_html__('Tag Meta', 'tilemax' ),
			'info'	  => esc_html__('YES! to show post tag information', 'tilemax'),
			'default' => true
			),
			
			array(
				'id'      => 'post-likes',
				'type'    => 'switcher',
				'title'   => esc_html__('Post Likes', 'tilemax' ),
				'info'    => esc_html__('YES! to show post likes information', 'tilemax'),
				'default' => true
			),

			array(
				'id'      => 'post-views',
				'type'    => 'switcher',
				'title'   => esc_html__('Post Views', 'tilemax' ),
				'info'    => esc_html__('YES! to show post views information', 'tilemax'),
				'default' => true
			),

		),
	),

	// -----------------------------------------
	// 404 Options
	// -----------------------------------------
	array(
	  'name'      => '404_options',
	  'title'     => esc_html__('404 Options', 'tilemax'),
	  'icon'      => 'fa fa-warning',

		'fields'      => array(

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "404 Message", 'tilemax' ),
		  ),
		  
		  array(
			'id'      => 'enable-404message',
			'type'    => 'switcher',
			'title'   => esc_html__('Enable Message', 'tilemax' ),
			'info'	  => esc_html__('YES! to enable not-found page message.', 'tilemax'),
			'default' => true
		  ),

		  array(
			'id'           => 'notfound-style',
			'type'         => 'select',
			'title'        => esc_html__('Template Style', 'tilemax'),
			'options'      => array(
			  'type1' 	   => esc_html__('Modern', 'tilemax'),
			  'type2'      => esc_html__('Classic', 'tilemax'),
			  'type4'  	   => esc_html__('Diamond', 'tilemax'),
			  'type5'      => esc_html__('Shadow', 'tilemax'),
			  'type6'      => esc_html__('Diamond Alt', 'tilemax'),
			  'type7'  	   => esc_html__('Stack', 'tilemax'),
			  'type8'  	   => esc_html__('Minimal', 'tilemax'),
			),
			'class'        => 'chosen',
			'default'      => 'type4',
			'info'         => esc_html__('Choose the style of not-found template page.', 'tilemax')
		  ),

		  array(
			'id'      => 'notfound-darkbg',
			'type'    => 'switcher',
			'title'   => esc_html__('404 Dark BG', 'tilemax' ),
			'info'	  => esc_html__('YES! to use dark bg notfound page for this site.', 'tilemax')
		  ),

		  array(
			'id'           => 'notfound-pageid',
			'type'         => 'select',
			'title'        => esc_html__('Custom Page', 'tilemax'),
			'options'      => 'pages',
			'class'        => 'chosen',
			'default_option' => esc_html__('Choose the page', 'tilemax'),
			'info'       	 => esc_html__('Choose the page for not-found content.', 'tilemax')
		  ),
		  
		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Background Options", 'tilemax' ),
		  ),

		  array(
			'id'    => 'notfound_background',
			'type'  => 'background',
			'title' => esc_html__('Background', 'tilemax')
		  ),

		  array(
			'id'  		 => 'notfound-bg-style',
			'type'  	 => 'textarea',
			'title' 	 => esc_html__('Custom Styles', 'tilemax'),
			'info'		 => esc_html__('Paste custom CSS styles for not found page.', 'tilemax')
		  ),

		),
	),

	// -----------------------------------------
	// Underconstruction Options
	// -----------------------------------------
	array(
	  'name'      => 'comingsoon_options',
	  'title'     => esc_html__('Under Construction Options', 'tilemax'),
	  'icon'      => 'fa fa-thumbs-down',

		'fields'      => array(

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Under Construction", 'tilemax' ),
		  ),
	
		  array(
			'id'      => 'enable-comingsoon',
			'type'    => 'switcher',
			'title'   => esc_html__('Enable Coming Soon', 'tilemax' ),
			'info'	  => esc_html__('YES! to check under construction page of your website.', 'tilemax')
		  ),
	
		  array(
			'id'           => 'comingsoon-style',
			'type'         => 'select',
			'title'        => esc_html__('Template Style', 'tilemax'),
			'options'      => array(
			  'type1' 	   => esc_html__('Diamond', 'tilemax'),
			  'type2'      => esc_html__('Teaser', 'tilemax'),
			  'type3'  	   => esc_html__('Minimal', 'tilemax'),
			  'type4'      => esc_html__('Counter Only', 'tilemax'),
			  'type5'      => esc_html__('Belt', 'tilemax'),
			  'type6'  	   => esc_html__('Classic', 'tilemax'),
			  'type7'  	   => esc_html__('Boxed', 'tilemax')
			),
			'class'        => 'chosen',
			'default'      => 'type1',
			'info'         => esc_html__('Choose the style of coming soon template.', 'tilemax'),
		  ),

		  array(
			'id'      => 'uc-darkbg',
			'type'    => 'switcher',
			'title'   => esc_html__('Coming Soon Dark BG', 'tilemax' ),
			'info'	  => esc_html__('YES! to use dark bg coming soon page for this site.', 'tilemax')
		  ),

		  array(
			'id'           => 'comingsoon-pageid',
			'type'         => 'select',
			'title'        => esc_html__('Custom Page', 'tilemax'),
			'options'      => 'pages',
			'class'        => 'chosen',
			'default_option' => esc_html__('Choose the page', 'tilemax'),
			'info'       	 => esc_html__('Choose the page for comingsoon content.', 'tilemax')
		  ),

		  array(
			'id'      => 'show-launchdate',
			'type'    => 'switcher',
			'title'   => esc_html__('Show Launch Date', 'tilemax' ),
			'info'	  => esc_html__('YES! to show launch date text.', 'tilemax'),
		  ),

		  array(
			'id'      => 'comingsoon-launchdate',
			'type'    => 'text',
			'title'   => esc_html__('Launch Date', 'tilemax'),
			'attributes' => array( 
			  'placeholder' => '10/30/2016 12:00:00'
			),
			'after' 	=> '<p class="cs-text-info">'.esc_html__('Put Format: 12/30/2016 12:00:00 month/day/year hour:minute:second', 'tilemax').'</p>',
		  ),

		  array(
			'id'           => 'comingsoon-timezone',
			'type'         => 'select',
			'title'        => esc_html__('UTC Timezone', 'tilemax'),
			'options'      => array(
			  '-12' => '-12', '-11' => '-11', '-10' => '-10', '-9' => '-9', '-8' => '-8', '-7' => '-7', '-6' => '-6', '-5' => '-5', 
			  '-4' => '-4', '-3' => '-3', '-2' => '-2', '-1' => '-1', '0' => '0', '+1' => '+1', '+2' => '+2', '+3' => '+3', '+4' => '+4',
			  '+5' => '+5', '+6' => '+6', '+7' => '+7', '+8' => '+8', '+9' => '+9', '+10' => '+10', '+11' => '+11', '+12' => '+12'
			),
			'class'        => 'chosen',
			'default'      => '0',
			'info'         => esc_html__('Choose utc timezone, by default UTC:00:00', 'tilemax'),
		  ),

		  array(
			'id'    => 'comingsoon_background',
			'type'  => 'background',
			'title' => esc_html__('Background', 'tilemax')
		  ),

		  array(
			'id'  		 => 'comingsoon-bg-style',
			'type'  	 => 'textarea',
			'title' 	 => esc_html__('Custom Styles', 'tilemax'),
			'info'		 => esc_html__('Paste custom CSS styles for under construction page.', 'tilemax'),
		  ),

		),
	),

  ),
);

// -----------------------------------------
// Widget area Options
// -----------------------------------------
$options[]      = array(
  'name'        => 'widgetarea_options',
  'title'       => esc_html__('Widget Area', 'tilemax'),
  'icon'        => 'fa fa-trello',

  'fields'      => array(

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Custom Widget Area for Sidebar", 'tilemax' ),
	  ),

	  array(
		'id'      => 'wtitle-style',
		'type'    => 'select',
		'title'   => esc_html__('Sidebar widget Title Style', 'tilemax'),
		'options' => array(
			'default' => esc_html__('Choose any type', 'tilemax'),
			'type1'   => esc_html__('Double Border', 'tilemax'),
			'type2'   => esc_html__('Tooltip', 'tilemax'),
			'type3'   => esc_html__('Title Top Border', 'tilemax'),
			'type4'   => esc_html__('Left Border & Pattren', 'tilemax'),
			'type5'   => esc_html__('Bottom Border', 'tilemax'),
			'type6'   => esc_html__('Tooltip Border', 'tilemax'),
			'type7'   => esc_html__('Boxed Modern', 'tilemax'),
			'type8'   => esc_html__('Elegant Border', 'tilemax'),
			'type9'   => esc_html__('Needle', 'tilemax'),
			'type10'  => esc_html__('Ribbon', 'tilemax'),
			'type11'  => esc_html__('Content Background', 'tilemax'),
			'type12'  => esc_html__('Classic BG', 'tilemax'),
			'type13'  => esc_html__('Tiny Boders', 'tilemax'),
			'type14'  => esc_html__('BG & Border', 'tilemax'),
			'type15'  => esc_html__('Classic BG Alt', 'tilemax'),
			'type16'  => esc_html__('Left Border & BG', 'tilemax'),
			'type17'  => esc_html__('Basic', 'tilemax'),
			'type18'  => esc_html__('BG & Pattern', 'tilemax'),
		),
		'class'   => 'chosen',
		'info'    => esc_html__('Choose the style of sidebar widget title.', 'tilemax'),
		'default' =>  'default'
	  ),

	  array(
		'id'              => 'widgetarea-custom',
		'type'            => 'group',
		'title'           => esc_html__('Custom Widget Area', 'tilemax'),
		'button_title'    => esc_html__('Add New', 'tilemax'),
		'accordion_title' => esc_html__('Add New Widget Area', 'tilemax'),
		'fields'          => array(

		  array(
			'id'          => 'widgetarea-custom-name',
			'type'        => 'text',
			'title'       => esc_html__('Name', 'tilemax'),
		  ),

		)
	  ),

	),
);

// -----------------------------------------
// Woocommerce Options
// -----------------------------------------
if( function_exists( 'is_woocommerce' ) ){

	$options[]      = array(
	  'name'        => 'woocommerce_options',
	  'title'       => esc_html__('Woocommerce', 'tilemax'),
	  'icon'        => 'fa fa-shopping-cart',

	  'fields'      => array(

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Woocommerce Shop Page Options", 'tilemax' ),
		  ),

		  array(
			'id'  		 => 'shop-product-per-page',
			'type'  	 => 'number',
			'title' 	 => esc_html__('Products Per Page', 'tilemax'),
			'after'		 => '<span class="cs-text-desc">&nbsp;'.esc_html__('Number of products to show in catalog / shop page', 'tilemax').'</span>',
			'default' 	 => 12,
		  ),

		  array(
			'id'           => 'product-style',
			'type'         => 'select',
			'title'        => esc_html__('Product Style', 'tilemax'),
			'options'      => array(
			  'type1' 	   => esc_html__('Thick Border', 'tilemax'),
			  'type2'      => esc_html__('Pattern Overlay', 'tilemax'),
			  'type3'  	   => esc_html__('Thin Border', 'tilemax'),
			  'type4'      => esc_html__('Diamond Icons', 'tilemax'),
			  'type5'      => esc_html__('Girly', 'tilemax'),
			  'type6'  	   => esc_html__('Push Animation', 'tilemax'),
			  'type7' 	   => esc_html__('Dual Color BG', 'tilemax'),
			  'type8' 	   => esc_html__('Modern', 'tilemax'),
			  'type9' 	   => esc_html__('Diamond & Border', 'tilemax'),
			  'type10' 	   => esc_html__('Easing', 'tilemax'),
			  'type11' 	   => esc_html__('Boxed', 'tilemax'),
			  'type12' 	   => esc_html__('Easing Alt', 'tilemax'),
			  'type13' 	   => esc_html__('Parallel', 'tilemax'),
			  'type14' 	   => esc_html__('Pointer', 'tilemax'),
			  'type15' 	   => esc_html__('Diamond Flip', 'tilemax'),
			  'type16' 	   => esc_html__('Stack', 'tilemax'),
			  'type17' 	   => esc_html__('Bouncy', 'tilemax'),
			  'type18' 	   => esc_html__('Hexagon', 'tilemax'),
			  'type19' 	   => esc_html__('Masked Diamond', 'tilemax'),
			  'type20' 	   => esc_html__('Masked Circle', 'tilemax'),
			  'type21' 	   => esc_html__('Classic', 'tilemax'),
			),
			'class'        => 'chosen',
			'default' 	   => 'type1',
			'info'         => esc_html__('Choose products style to display shop & archive pages.', 'tilemax')
		  ),

		  array(
			'id'      	 => 'shop-page-product-layout',
			'type'       => 'image_select',
			'title'      => esc_html__('Product Layout', 'tilemax'),
			'options'    => array(
			  'one-half-column'     => TILEMAX_THEME_URI . '/cs-framework-override/images/one-half-column.png',
			  'one-third-column'    => TILEMAX_THEME_URI . '/cs-framework-override/images/one-third-column.png',
			  'one-fourth-column'   => TILEMAX_THEME_URI . '/cs-framework-override/images/one-fourth-column.png',
			),
			'default'      => 'one-third-column',
			'attributes'   => array(
			  'data-depend-id' => 'shop-page-product-layout',
			),
		  ),

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Product Detail Page Options", 'tilemax' ),
		  ),

		  array(
			'id'      	   => 'product-layout',
			'type'         => 'image_select',
			'title'        => esc_html__('Layout', 'tilemax'),
			'options'      => array(
			  'content-full-width'   => TILEMAX_THEME_URI . '/cs-framework-override/images/without-sidebar.png',
			  'with-left-sidebar'    => TILEMAX_THEME_URI . '/cs-framework-override/images/left-sidebar.png',
			  'with-right-sidebar'   => TILEMAX_THEME_URI . '/cs-framework-override/images/right-sidebar.png',
			  'with-both-sidebar'    => TILEMAX_THEME_URI . '/cs-framework-override/images/both-sidebar.png',
			),
			'default'      => 'content-full-width',
			'attributes'   => array(
			  'data-depend-id' => 'product-layout',
			),
		  ),

		  array(
			'id'  		 	 => 'show-shop-standard-left-sidebar-for-product-layout',
			'type'  		 => 'switcher',
			'title' 		 => esc_html__('Show Shop Standard Left Sidebar', 'tilemax'),
			'dependency'   	 => array( 'product-layout', 'any', 'with-left-sidebar,with-both-sidebar' ),
		  ),

		  array(
			'id'  			 => 'show-shop-standard-right-sidebar-for-product-layout',
			'type'  		 => 'switcher',
			'title' 		 => esc_html__('Show Shop Standard Right Sidebar', 'tilemax'),
			'dependency' 	 => array( 'product-layout', 'any', 'with-right-sidebar,with-both-sidebar' ),
		  ),

		  array(
			'id'  		 	 => 'enable-related',
			'type'  		 => 'switcher',
			'title' 		 => esc_html__('Show Related Products', 'tilemax'),
			'info'	  		 => esc_html__("YES! to display related products on single product's page.", 'tilemax')
		  ),

		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Product Category Page Options", 'tilemax' ),
		  ),

		  array(
			'id'      	   => 'product-category-layout',
			'type'         => 'image_select',
			'title'        => esc_html__('Layout', 'tilemax'),
			'options'      => array(
			  'content-full-width'   => TILEMAX_THEME_URI . '/cs-framework-override/images/without-sidebar.png',
			  'with-left-sidebar'    => TILEMAX_THEME_URI . '/cs-framework-override/images/left-sidebar.png',
			  'with-right-sidebar'   => TILEMAX_THEME_URI . '/cs-framework-override/images/right-sidebar.png',
			  'with-both-sidebar'    => TILEMAX_THEME_URI . '/cs-framework-override/images/both-sidebar.png',
			),
			'default'      => 'content-full-width',
			'attributes'   => array(
			  'data-depend-id' => 'product-category-layout',
			),
		  ),

		  array(
			'id'  		 	 => 'show-shop-standard-left-sidebar-for-product-category-layout',
			'type'  		 => 'switcher',
			'title' 		 => esc_html__('Show Shop Standard Left Sidebar', 'tilemax'),
			'dependency'   	 => array( 'product-category-layout', 'any', 'with-left-sidebar,with-both-sidebar' ),
		  ),

		  array(
			'id'  			 => 'show-shop-standard-right-sidebar-for-product-category-layout',
			'type'  		 => 'switcher',
			'title' 		 => esc_html__('Show Shop Standard Right Sidebar', 'tilemax'),
			'dependency' 	 => array( 'product-category-layout', 'any', 'with-right-sidebar,with-both-sidebar' ),
		  ),
		  
		  array(
			'type'    => 'subheading',
			'content' => esc_html__( "Product Tag Page Options", 'tilemax' ),
		  ),

		  array(
			'id'      	   => 'product-tag-layout',
			'type'         => 'image_select',
			'title'        => esc_html__('Layout', 'tilemax'),
			'options'      => array(
			  'content-full-width'   => TILEMAX_THEME_URI . '/cs-framework-override/images/without-sidebar.png',
			  'with-left-sidebar'    => TILEMAX_THEME_URI . '/cs-framework-override/images/left-sidebar.png',
			  'with-right-sidebar'   => TILEMAX_THEME_URI . '/cs-framework-override/images/right-sidebar.png',
			  'with-both-sidebar'    => TILEMAX_THEME_URI . '/cs-framework-override/images/both-sidebar.png',
			),
			'default'      => 'content-full-width',
			'attributes'   => array(
			  'data-depend-id' => 'product-tag-layout',
			),
		  ),

		  array(
			'id'  		 	 => 'show-shop-standard-left-sidebar-for-product-tag-layout',
			'type'  		 => 'switcher',
			'title' 		 => esc_html__('Show Shop Standard Left Sidebar', 'tilemax'),
			'dependency'   	 => array( 'product-tag-layout', 'any', 'with-left-sidebar,with-both-sidebar' ),
		  ),

		  array(
			'id'  			 => 'show-shop-standard-right-sidebar-for-product-tag-layout',
			'type'  		 => 'switcher',
			'title' 		 => esc_html__('Show Shop Standard Right Sidebar', 'tilemax'),
			'dependency' 	 => array( 'product-tag-layout', 'any', 'with-right-sidebar,with-both-sidebar' ),
		  ),

	  ),
	);
}

// -----------------------------------------
// Sociable Options
// -----------------------------------------
$options[]      = array(
  'name'        => 'sociable_options',
  'title'       => esc_html__('Sociable', 'tilemax'),
  'icon'        => 'fa fa-chrome',

  'fields'      => array(

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Sociable", 'tilemax' ),
	  ),

	  array(
		'id'              => 'sociable_fields',
		'type'            => 'group',
		'title'           => esc_html__('Sociable', 'tilemax'),
		'info'            => esc_html__('Click button to add type of social & url.', 'tilemax'),
		'button_title'    => esc_html__('Add New Social', 'tilemax'),
		'accordion_title' => esc_html__('Adding New Social Field', 'tilemax'),
		'fields'          => array(
		  array(
			'id'          => 'sociable_fields_type',
			'type'        => 'select',
			'title'       => esc_html__('Select Social', 'tilemax'),
			'options'      => array(
			  'delicious' 	 => esc_html__('Delicious', 'tilemax'),
			  'deviantart' 	 => esc_html__('Deviantart', 'tilemax'),
			  'digg' 	  	 => esc_html__('Digg', 'tilemax'),
			  'dribbble' 	 => esc_html__('Dribbble', 'tilemax'),
			  'envelope' 	 => esc_html__('Envelope', 'tilemax'),
			  'facebook' 	 => esc_html__('Facebook', 'tilemax'),
			  'flickr' 		 => esc_html__('Flickr', 'tilemax'),
			  'google-plus'  => esc_html__('Google Plus', 'tilemax'),
			  'gtalk'  		 => esc_html__('GTalk', 'tilemax'),
			  'instagram'	 => esc_html__('Instagram', 'tilemax'),
			  'lastfm'	 	 => esc_html__('Lastfm', 'tilemax'),
			  'linkedin'	 => esc_html__('Linkedin', 'tilemax'),			  		  
			  'pinterest'	 => esc_html__('Pinterest', 'tilemax'),
			  'reddit'		 => esc_html__('Reddit', 'tilemax'),
			  'rss'		 	 => esc_html__('RSS', 'tilemax'),
			  'skype'		 => esc_html__('Skype', 'tilemax'),
			  'stumbleupon'	 => esc_html__('Stumbleupon', 'tilemax'),
			  'tumblr'		 => esc_html__('Tumblr', 'tilemax'),
			  'twitter'		 => esc_html__('Twitter', 'tilemax'),
			  'viadeo'		 => esc_html__('Viadeo', 'tilemax'),
			  'vimeo'		 => esc_html__('Vimeo', 'tilemax'),
			  'yahoo'		 => esc_html__('Yahoo', 'tilemax'),
			  'youtube'		 => esc_html__('Youtube', 'tilemax'),
			),
			'class'        => 'chosen',
			'default'      => 'delicious',
		  ),

		  array(
			'id'          => 'sociable_fields_url',
			'type'        => 'text',
			'title'       => esc_html__('Enter URL', 'tilemax')
		  ),
		)
	  ),

   ),
);

// -----------------------------------------
// Hook Options
// -----------------------------------------
$options[]      = array(
  'name'        => 'hook_options',
  'title'       => esc_html__('Hooks', 'tilemax'),
  'icon'        => 'fa fa-paperclip',

  'fields'      => array(

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Top Hook", 'tilemax' ),
	  ),

	  array(
		'id'  	=> 'enable-top-hook',
		'type'  => 'switcher',
		'title' => esc_html__('Enable Top Hook', 'tilemax'),
		'info'	=> esc_html__("YES! to enable top hook.", 'tilemax')
	  ),

	  array(
		'id'  		 => 'top-hook',
		'type'  	 => 'textarea',
		'title' 	 => esc_html__('Top Hook', 'tilemax'),
		'info'		 => esc_html__('Paste your top hook, Executes after the opening &lt;body&gt; tag.', 'tilemax')
	  ),

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Content Before Hook", 'tilemax' ),
	  ),

	  array(
		'id'  	=> 'enable-content-before-hook',
		'type'  => 'switcher',
		'title' => esc_html__('Enable Content Before Hook', 'tilemax'),
		'info'	=> esc_html__("YES! to enable content before hook.", 'tilemax')
	  ),

	  array(
		'id'  		 => 'content-before-hook',
		'type'  	 => 'textarea',
		'title' 	 => esc_html__('Content Before Hook', 'tilemax'),
		'info'		 => esc_html__('Paste your content before hook, Executes before the opening &lt;#primary&gt; tag.', 'tilemax')
	  ),

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Content After Hook", 'tilemax' ),
	  ),

	  array(
		'id'  	=> 'enable-content-after-hook',
		'type'  => 'switcher',
		'title' => esc_html__('Enable Content After Hook', 'tilemax'),
		'info'	=> esc_html__("YES! to enable content after hook.", 'tilemax')
	  ),

	  array(
		'id'  		 => 'content-after-hook',
		'type'  	 => 'textarea',
		'title' 	 => esc_html__('Content After Hook', 'tilemax'),
		'info'		 => esc_html__('Paste your content after hook, Executes after the closing &lt;/#main&gt; tag.', 'tilemax')
	  ),

	  array(
		'type'    => 'subheading',
		'content' => esc_html__( "Bottom Hook", 'tilemax' ),
	  ),

	  array(
		'id'  	=> 'enable-bottom-hook',
		'type'  => 'switcher',
		'title' => esc_html__('Enable Bottom Hook', 'tilemax'),
		'info'	=> esc_html__("YES! to enable bottom hook.", 'tilemax')
	  ),

	  array(
		'id'  		 => 'bottom-hook',
		'type'  	 => 'textarea',
		'title' 	 => esc_html__('Bottom Hook', 'tilemax'),
		'info'		 => esc_html__('Paste your bottom hook, Executes after the closing &lt;/body&gt; tag.', 'tilemax')
	  ),
	  
	  array(
		'id'  	=> 'enable-analytics-code',
		'type'  => 'switcher',
		'title' => esc_html__('Enable Tracking Code', 'tilemax'),
		'info'	=> esc_html__("YES! to enable site tracking code.", 'tilemax')
	  ),

	  array(
		'id'  		 => 'analytics-code',
		'type'  	 => 'textarea',
		'title' 	 => esc_html__('Google Analytics Tracking Code', 'tilemax'),
		'info'		 => esc_html__('Enter your Google tracking id (UA-XXXXX-X) here. If you want to offer your visitors the option to stop being tracked you can place the shortcode [dt_sc_privacy_google_tracking] somewhere on your site', 'tilemax')
	  ),

   ),
);

// ------------------------------
// backup                       
// ------------------------------
$options[]   = array(
  'name'     => 'backup_section',
  'title'    => esc_html__('Backup', 'tilemax'),
  'icon'     => 'fa fa-shield',
  'fields'   => array(

    array(
      'type'    => 'notice',
      'class'   => 'warning',
      'content' => esc_html__('You can save your current options. Download a Backup and Import.', 'tilemax')
    ),

    array(
      'type'    => 'backup',
    ),

  )
);

// ------------------------------
// license
// ------------------------------
$options[]   = array(
  'name'     => 'theme_version',
  'title'    => constant('TILEMAX_THEME_NAME').esc_html__(' Log', 'tilemax'),
  'icon'     => 'fa fa-info-circle',
  'fields'   => array(

    array(
      'type'    => 'heading',
      'content' => constant('TILEMAX_THEME_NAME').esc_html__(' Theme Change Log', 'tilemax')
    ),
    array(
      'type'    => 'content',
      'content' => '<pre>
2017.11.09 - version 1.0
 * First release!

2017.11.10 - version 1.1
	* Updated dummy content
 
2017.11.14 - version 1.2
	* Fixed "designthemes-core-features" installation issue 
 
 2018.05.17 - version 1.3
	* Compatible with latest wordpress version 4.9.5
	* Updated all third party plugins
	* Fix - Unyson page builder conflicts with "Visual Composer" and "DesignThemes Page Builder" 
	* Fix - All theme functions updated for child theme support
	* Fix - Option for change the site title color
	* Fix - Add target attribute for social media
	* Fix - PO File updated. 
	* Fix - search option display
	* Fix - Nav Menu compatibility
	* Fix - Menu disable link design issue
	* Fix - Bundled with updated woocommerce file
	* Fix - Twitter link added.
	* Fix - Documentation updated

2018.07.26 - version 1.4
	* GDPR Compliant update in comment form, mailchimp form etc.
	* Packed with - Layer Slider 6.7.6
	* Packed with - Revolution Slider 5.4.8
	* Packed with - WPBakery Page Builder 5.5.2
	* Packed with - Ultimate Addons for Visual Composer 3.16.24
	* Packed with - Envato Market 2.0.0
	* Fix - Iphone sidebar issue
	* Fix - Youtube and Vimeo video issue in https
	* Updated language files 
 
2018.10.30 - version 1.5
	* Gutenberg plugin compatible
	* Latest wordpress version 4.9.8 compatible
	* Updated latest version of all third party plugins
	* Updated documentation

2019.01.22 - version 1.6
	* Gutenberg compatible
	* Latest WordPress version 5.0.3 compatible
	* Updated latest version of all third party plugins
	* Some design tweaks

2019.05.20 - version 1.7
	* Gutenberg Latest update compatible
	* Portfolio Video option
	* Coming Soon page fix
	* Portfolio archive page breadcrumb fix
	* Mega menu image fix
	* GDPR product single page fix
	* Codestar framework update
	* Wpml xml file updated
	* disable options for likes and views in single post page
	* Updated latest version of all third party plugins
	* Some design tweaks

2019.11.13 - version 1.8
	* Compatible with wordpress 5.2.4
	* Updated: All wordpress theme standards
	* Updated: All premium plugins
	* Updated: Revisions added to all custom post types
	* Updated: Compatible with Gutenberg editor

2020.02.01 - version 1.9

	* Compatible with wordpress 5.3.2
	* Updated: All premium plugins
	* Updated: All wordpress theme standards
	* Updated: Privacy and Cookies concept
	* Updated: Gutenberg editor support for custom post types

	* Fixed: Google Analytics issue
	* Fixed: Mailchimp email client issue
	* Fixed: Privacy Button Issue
	* Fixed: Gutenberg check for old wordpress version

	* Improved: Tags taxonomy added for portfolio
	* Improved: Single product breadcrumb section
	* Improved: Revisions options added for all custom posts
	
2020.07.06 - version 2.0
	* Compatible with wordpress 5.4.2
	* Updated: All premium plugins
	* Updated: Some design tweaks
	* Updated: Sub menu mouse hover issue
	* Updated: Activating another theme causes error

2020.08.04 - version 2.1
	* Updated: Envato Theme check
	* Updated: sanitize_text_field added
	* Updated: All wordpress theme standards
	* Updated: All premium plugins

2020.08.13 - version 2.2
	* Compatible with wordpress 5.5
</pre>',
    ),

  )
);

// ------------------------------
// Seperator
// ------------------------------
$options[] = array(
  'name'   => 'seperator_1',
  'title'  => esc_html__('Plugin Options', 'tilemax'),
  'icon'   => 'fa fa-plug'
);


CSFramework::instance( $settings, $options );