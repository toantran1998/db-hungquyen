<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.

// -----------------------------------------
// Custom Widgets                    -
// -----------------------------------------
function tilemax_custom_widgets() {
  $custom_widgets = array();
  $widgets = is_array( cs_get_option( 'widgetarea-custom' ) ) ? cs_get_option( 'widgetarea-custom' ) : array();
  $widgets = array_filter($widgets);

  if( isset( $widgets ) ):
    foreach ( $widgets as $widget ) :
      $id = mb_convert_case($widget['widgetarea-custom-name'], MB_CASE_LOWER, "UTF-8");
      $id = str_replace(" ", "-", $id);
      $custom_widgets[$id] = $widget['widgetarea-custom-name'];
    endforeach;
  endif;

  return $custom_widgets;
}

// -----------------------------------------
// Layer Sliders
// -----------------------------------------
function tilemax_layersliders() {
  $layerslider = array(  esc_html__('Select a slider','tilemax') );

  if( class_exists( 'LS_Sliders' ) ) {

    $sliders = LS_Sliders::find(array('limit' => 50));

    if(!empty($sliders)) {
      foreach($sliders as $key => $item){
        $layerslider[ $item['id'] ] = $item['name'];
      }
    }
  }

  return $layerslider;
}

// -----------------------------------------
// Revolution Sliders
// -----------------------------------------
function tilemax_revolutionsliders() {
  $revolutionslider = array( '' => esc_html__('Select a slider','tilemax') );

  if( class_exists( 'RevSlider' ) ) {
    $sld = new RevSlider();
    $sliders = $sld->getArrSliders();
    if(!empty($sliders)){
      foreach($sliders as $key => $item) {
        $revolutionslider[$item->getAlias()] = $item->getTitle();
      }
    }    
  }

  return $revolutionslider;  
}

// -----------------------------------------
// Meta Layout Section
// -----------------------------------------
$meta_layout_section =array(
  'name'  => 'layout_section',
  'title' => esc_html__('Layout', 'tilemax'),
  'icon'  => 'fa fa-columns',
  'fields' =>  array(
    array(
      'id'  => 'layout',
      'type' => 'image_select',
      'title' => esc_html__('Page Layout', 'tilemax' ),
      'options'      => array(
          'content-full-width'   => TILEMAX_THEME_URI . '/cs-framework-override/images/without-sidebar.png',
          'with-left-sidebar'    => TILEMAX_THEME_URI . '/cs-framework-override/images/left-sidebar.png',
          'with-right-sidebar'   => TILEMAX_THEME_URI . '/cs-framework-override/images/right-sidebar.png',
          'with-both-sidebar'    => TILEMAX_THEME_URI . '/cs-framework-override/images/both-sidebar.png',
          'fullwidth'            => TILEMAX_THEME_URI . '/cs-framework-override/images/fullwidth.png',
      ),
      'default'      => 'content-full-width',
	  'info'		 => esc_html__('Layout "fullwidth" only apply for portfolio template.', 'tilemax'),
      'attributes'   => array( 'data-depend-id' => 'page-layout' )
    ),
    array(
      'id'        => 'show-standard-sidebar-left',
      'type'      => 'switcher',
      'title'     => esc_html__('Show Standard Left Sidebar', 'tilemax' ),
      'dependency'  => array( 'page-layout', 'any', 'with-left-sidebar,with-both-sidebar' ),
    ),
    array(
      'id'        => 'widget-area-left',
      'type'      => 'select',
      'title'     => esc_html__('Choose Left Widget Areas', 'tilemax' ),
      'class'     => 'chosen',
      'options'   => tilemax_custom_widgets(),
      'attributes'  => array( 
        'multiple'  => 'multiple',
        'data-placeholder' => esc_html__('Select Left Widget Areas','tilemax'),
        'style' => 'width: 400px;'
      ),
      'dependency'  => array( 'page-layout', 'any', 'with-left-sidebar,with-both-sidebar' ),
    ),
    array(
      'id'          => 'show-standard-sidebar-right',
      'type'        => 'switcher',
      'title'       => esc_html__('Show Standard Right Sidebar', 'tilemax' ),
      'dependency'  => array( 'page-layout', 'any', 'with-right-sidebar,with-both-sidebar' ),
    ),
    array(
      'id'        => 'widget-area-right',
      'type'      => 'select',
      'title'     => esc_html__('Choose Right Widget Areas', 'tilemax' ),
      'class'     => 'chosen',
      'options'   => tilemax_custom_widgets(),
      'attributes'    => array( 
        'multiple' => 'multiple',
        'data-placeholder' => esc_html__('Select Right Widget Areas','tilemax'),
        'style' => 'width: 400px;'
      ),
      'dependency'  => array( 'page-layout', 'any', 'with-right-sidebar,with-both-sidebar' ),
    )
  )
);

// -----------------------------------------
// Meta Breadcrumb Section
// -----------------------------------------
$meta_breadcrumb_section = array(
  'name'  => 'breadcrumb_section',
  'title' => esc_html__('Breadcrumb', 'tilemax'),
  'icon'  => 'fa fa-arrows-h',
  'fields' =>  array(
    array(
      'id'      => 'enable-sub-title',
      'type'    => 'switcher',
      'title'   => esc_html__('Show Breadcrumb', 'tilemax' ),
      'default' => true
    ),
    array(
      'id'    => 'breadcrumb_background',
      'type'  => 'background',
      'title' => esc_html__('Background', 'tilemax' ),
      'dependency'   => array( 'enable-sub-title', '==', 'true' ),
    ),
  )
);

// -----------------------------------------
// Meta Slider Section
// -----------------------------------------
$meta_slider_section = array(
  'name'  => 'slider_section',
  'title' => esc_html__('Slider', 'tilemax'),
  'icon'  => 'fa fa-slideshare',
  'fields' =>  array(
    array(
      'id'           => 'slider-notice',
      'type'         => 'notice',
      'class'        => 'danger',
      'content'      => esc_html__('Slider tab works only if breadcrumb disabled.','tilemax'),
      'class'        => 'margin-30 cs-danger',
      'dependency'   => array( 'enable-sub-title', '==', 'true' ),
    ),

    array(
      'id'           => 'show_slider',
      'type'         => 'switcher',
      'title'        => esc_html__('Show Slider', 'tilemax' ),
      'dependency'   => array( 'enable-sub-title', '==', 'false' ),
    ),

    array(
      'id'                 => 'slider_type',
      'type'               => 'select',
      'title'              => esc_html__('Slider', 'tilemax' ),
      'options'            => array(
        ''                 => esc_html__('Select a slider','tilemax'),
        'layerslider'      => esc_html__('Layer slider','tilemax'),
        'revolutionslider' => esc_html__('Revolution slider','tilemax'),
        'customslider'     => esc_html__('Custom Slider Shortcode','tilemax'),
      ),
      'validate' => 'required',
      'dependency'         => array( 'enable-sub-title|show_slider', '==|==', 'false|true' ),
    ),

    array(
      'id'          => 'layerslider_id',
      'type'        => 'select',
      'title'       => esc_html__('Layer Slider', 'tilemax' ),
      'options'     => tilemax_layersliders(),
      'validate'    => 'required',
      'dependency'  => array( 'enable-sub-title|show_slider|slider_type', '==|==|==', 'false|true|layerslider' )
    ),

    array(
      'id'          => 'revolutionslider_id',
      'type'        => 'select',
      'title'       => esc_html__('Revolution Slider', 'tilemax' ),
      'options'     => tilemax_revolutionsliders(),
      'validate'    => 'required',
      'dependency'  => array( 'enable-sub-title|show_slider|slider_type', '==|==|==', 'false|true|revolutionslider' )
    ),

    array(
      'id'          => 'customslider_sc',
      'type'        => 'textarea',
      'title'       => esc_html__('Custom Slider Code', 'tilemax' ),
      'validate'    => 'required',
      'dependency'  => array( 'enable-sub-title|show_slider|slider_type', '==|==|==', 'false|true|customslider' )
    ),
  )  
);

// -----------------------------------------
// Blog Template Section
// -----------------------------------------
$blog_template_section = array(
  'name'  => 'blog_template_section',
  'title' => esc_html__('Blog Template', 'tilemax'),
  'icon'  => 'fa fa-files-o',
  'fields' =>  array(
    array(
      'id'           => 'blog-tpl-notice',
      'type'         => 'notice',
      'class'        => 'success',
      'content'      => esc_html__('Blog Tab Works only if page template set to Blog Template in Page Attributes','tilemax'),
      'class'        => 'margin-30 cs-success',      
    ),
    array(
      'id'                     => 'blog-post-layout',
      'type'                   => 'image_select',
      'title'                  => esc_html__('Post Layout', 'tilemax' ),
      'options'                => array(
          'one-column'         => TILEMAX_THEME_URI . '/cs-framework-override/images/one-column.png',
          'one-half-column'    => TILEMAX_THEME_URI . '/cs-framework-override/images/one-half-column.png',
          'one-third-column'   => TILEMAX_THEME_URI . '/cs-framework-override/images/one-third-column.png',
		  '1-2-2'			   => TILEMAX_THEME_URI . '/cs-framework-override/images/1-2-2.png',
		  '1-2-2-1-2-2' 	   => TILEMAX_THEME_URI . '/cs-framework-override/images/1-2-2-1-2-2.png',
		  '1-3-3-3'			   => TILEMAX_THEME_URI . '/cs-framework-override/images/1-3-3-3.png',
		  '1-3-3-3-1' 		   => TILEMAX_THEME_URI . '/cs-framework-override/images/1-3-3-3-1.png',
      ),
      'default'                => 'one-half-column'
    ),
    array(
      'id'                     => 'blog-post-style',
      'type'                   => 'select',
      'title'                  => esc_html__('Post Style', 'tilemax' ),
      'options'                => array(
        'blog-default-style' => esc_html__('Default','tilemax'),
        'entry-date-left'    => esc_html__('Date Left','tilemax'),
        'entry-date-author-left' => esc_html__('Date and Author Left','tilemax'),
        'blog-medium-style'  => esc_html__('Medium','tilemax'),
        'blog-medium-style dt-blog-medium-highlight' => esc_html__('Medium Highlight','tilemax'),
        'blog-medium-style dt-blog-medium-highlight dt-sc-skin-highlight' => esc_html__('Medium Skin Highlight','tilemax')
      ),
    ),
    array(
      'id'      => 'enable-blog-readmore',
      'type'    => 'switcher',
      'title'   => esc_html__('Read More', 'tilemax' ),
      'default' => true
    ),
    array(
      'id'           => 'blog-readmore',
      'type'         => 'textarea',
      'title'        => esc_html__('Read More Shortcode', 'tilemax' ),
      'default'      => '[dt_sc_button title="Read More" style="filled" icon_type="fontawesome" iconalign="icon-right with-icon" iconclass="fa fa-long-arrow-right" class="type1" /]',
      'dependency'   => array( 'enable-blog-readmore', '==', 'true' ),
    ),
    array(
      'id'      => 'blog-post-excerpt',
      'type'    => 'switcher',
      'title'   => esc_html__('Allow Excerpt', 'tilemax' ),
      'default' => true
    ),
    array(
      'id'           => 'blog-post-excerpt-length',
      'type'         => 'number',
      'title'        => esc_html__('Excerpt Length', 'tilemax' ),
      'default'      => '45',
      'dependency'   => array( 'blog-post-excerpt', '==', 'true' ),
    ),
    array(
      'id'           => 'blog-post-per-page',
      'type'         => 'number',
      'title'        => esc_html__('Post Per Page', 'tilemax' ),
      'default'      => '-1',      
    ),
    array(
      'id'             => 'blog-post-cats',
      'type'           => 'select',
      'title'          => esc_html__('Categories','tilemax'),
      'options'        => 'categories',
      'default_option' => esc_html__('Select a categories','tilemax'),
      'class'              => 'chosen',
      'attributes'         => array(
        'multiple'         => 'only-key',
        'style'            => 'width: 200px;'
      ),
      'info'           => esc_html__('Select categories to exclude from your blog page.','tilemax'),
    ),
    array(
      'id'      => 'show-postformat-info',
      'type'    => 'switcher',
      'title'   => esc_html__('Show Post Format Info', 'tilemax' ),
      'default' => true
    ),
    array(
      'id'      => 'show-author-info',
      'type'    => 'switcher',
      'title'   => esc_html__('Show Post Author Info', 'tilemax' ),
      'default' => true,
    ),
    array(
      'id'      => 'show-date-info',
      'type'    => 'switcher',
      'title'   => esc_html__('Show Post Date Info', 'tilemax' ),
      'default' => true
    ),
    array(
      'id'      => 'show-comment-info',
      'type'    => 'switcher',
      'title'   => esc_html__('Show Post Comment Info', 'tilemax' ),
      'default' => true
    ),
    array(
      'id'      => 'show-category-info',
      'type'    => 'switcher',
      'title'   => esc_html__('Show Post Category Info', 'tilemax' ),
      'default' => true
    ),
    array(
      'id'      => 'show-tag-info',
      'type'    => 'switcher',
      'title'   => esc_html__('Show Post Tag Info', 'tilemax' ),
      'default' => true
    )    
  )
);

// -----------------------------------------
// One Page Template Section
// -----------------------------------------
$one_page_template_section = array(
  'name'  => 'one_page_template_section',
  'title' => esc_html__('One Page Template', 'tilemax'),
  'icon'  => 'fa fa-file-o',
  'fields' =>  array(
    array(
      'id'           => 'one-page-tpl-notice',
      'type'         => 'notice',
      'class'        => 'success',
      'content'      => esc_html__('One Page Tab Works only if page template set to One Page Template in Page Attributes','tilemax'),
      'class'        => 'margin-30 cs-success',      
    ),
    array(
      'id'            => 'onepage_menu',
      'type'          => 'select',
      'title'         => esc_html__('Menu', 'tilemax' ),
      'options'       => 'categories',
      'query_args'  => array(
        'post_type' => 'nav_menu_item',
        'taxonomy'  => 'nav_menu',
      ),
      'default_option' => esc_html__('Select a Menu','tilemax'),
    ),
  )
);

// -----------------------------------------
// Portfolio Template Section
// -----------------------------------------
$portfolio_template_section = array(
  'name'  => 'portfolio_template_section',
  'title' => esc_html__('Portfolio Template', 'tilemax'),
  'icon'  => 'fa fa-picture-o',
  'fields' =>  array(

    array(
      'id'           => 'portfolio-tpl-notice',
      'type'         => 'notice',
      'class'        => 'success',
      'content'      => esc_html__('Portfolio Tab Works only if page template set to Portfolio Template in Page Attributes','tilemax'),
      'class'        => 'margin-30 cs-success',      
    ),

    array(
      'id'                     => 'portfolio-post-layout',
      'type'                   => 'image_select',
      'title'                  => esc_html__('Post Layout', 'tilemax' ),
      'options'                => array(
          'one-half-column'    => TILEMAX_THEME_URI . '/cs-framework-override/images/one-half-column.png',
          'one-third-column'   => TILEMAX_THEME_URI . '/cs-framework-override/images/one-third-column.png',
          'one-fourth-column'  => TILEMAX_THEME_URI . '/cs-framework-override/images/one-fourth-column.png',
      ),
      'default'                => 'one-half-column'
    ),

    array(
      'id'      => 'portfolio-post-style',
      'type'    => 'select',
      'title'   => esc_html__('Post Style', 'tilemax' ),
      'options' => array(
        'type1' => esc_html__('Modern Title','tilemax'),
        'type2' => esc_html__('Title & Icons Overlay','tilemax'),
        'type3' => esc_html__('Title Overlay','tilemax'),
        'type4' => esc_html__('Icons Only','tilemax'),
        'type5' => esc_html__('Classic','tilemax'),
        'type6' => esc_html__('Minimal Icons','tilemax'),
        'type7' => esc_html__('Presentation','tilemax'),
        'type8' => esc_html__('Girly','tilemax'),
        'type9' => esc_html__('Art','tilemax'),
      ),
    ),

    array(
      'id'      => 'portfolio-grid-space',
      'type'    => 'switcher',
      'title'   => esc_html__('Allow Grid Space', 'tilemax' ),
      'default' => true,
      'info'    => esc_html__('YES! to allow grid space in between portfolio item','tilemax')
    ),

    array(
      'id'      => 'filter',
      'type'    => 'switcher',
      'title'   => esc_html__('Allow Filters', 'tilemax' ),
      'default' => true,
      'info'    => esc_html__('YES! to allow filter options for portfolio items','tilemax')
    ),

    array(
      'id'           => 'portfolio-post-per-page',
      'type'         => 'number',
      'title'        => esc_html__('Post Per Page', 'tilemax' ),
      'default'      => '-1',      
    ),

    array(
      'id'             => 'portfolio-categories',
      'type'           => 'select',
      'title'          => esc_html__('Categories','tilemax'),
      'options'        => 'categories',
      'class'          => 'chosen',
      'query_args'     => array(
        'type'         => 'dt_portfolios',
        'taxonomy'     => 'portfolio_entries',
        'orderby'      => 'post_date',
        'order'        => 'DESC',
      ),
      'attributes'         => array(
        'data-placeholder' => esc_html__('Select a categories','tilemax'),
        'multiple'         => 'only-key',
        'style'            => 'width: 200px;'
      ),
      'info'           => esc_html__('Select categories to show in portfolio items.','tilemax'),
    ),   
  )
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options = array();

// -----------------------------------------
// Page Metabox Options                    -
// -----------------------------------------
array_push( $meta_layout_section['fields'], array(
  'id'        => 'enable-sticky-sidebar',
  'type'      => 'switcher',
  'title'     => esc_html__('Enable Sticky Sidebar', 'tilemax' ),
  'dependency'  => array( 'page-layout', 'any', 'with-left-sidebar,with-right-sidebar,with-both-sidebar' )
) );

$options[] = array(
	'id'        => '_tpl_default_settings',
    'title'     => esc_html__('Page Settings','tilemax'),
    'post_type' => 'page',
    'context'   => 'normal',
    'priority'  => 'high',
    'sections'  => array(
		$meta_layout_section,
		$meta_breadcrumb_section,
		$meta_slider_section,

		$blog_template_section,
		$one_page_template_section,
		$portfolio_template_section,
		array(
		  'name'  => 'sidenav_template_section',
		  'title' => esc_html__('Side Navigation Template', 'tilemax'),
		  'icon'  => 'fa fa-th-list',
		  'fields' =>  array(

			array(
			  'id'           => 'sidenav-tpl-notice',
			  'type'         => 'notice',
			  'class'        => 'success',
			  'content'      => esc_html__('Side Navigation Tab Works only if page template set to Side Navigation Template in Page Attributes','tilemax'),
			  'class'        => 'margin-30 cs-success',      
			),

			array(
			  'id'    		 => 'sidenav-align',
			  'type'    	 => 'switcher',
			  'title'   	 => esc_html__('Align Right', 'tilemax' ),
			  'info'    	 => esc_html__('YES! to align right of side navigation.','tilemax')
			),

			array(
			  'id'    		 => 'sidenav-sticky',
			  'type'    	 => 'switcher',
			  'title'   	 => esc_html__('Sticky Side Navigation', 'tilemax' ),
			  'info'    	 => esc_html__('YES! to sticky side navigation content.','tilemax')
			),

			array(
			  'id'    		 => 'enable-sidenav-content',
			  'type'    	 => 'switcher',
			  'title'   	 => esc_html__('Show Content', 'tilemax' ),
			  'info'    	 => esc_html__('YES! to show content in below side navigation.','tilemax')
			),

			array(
			  'id'	    	 => 'sidenav-content',
			  'type'	     => 'textarea',
			  'title'  		 => esc_html__('Side Navigation Content', 'tilemax' ),
			  'info'    	 => esc_html__('Paste any shortcode content here','tilemax'),
			  'attributes' 	 => array(
				  'rows'     => 6,
			  ),
			),

		  )
		),
    )
);

// -----------------------------------------
// Post Metabox Options                    -
// -----------------------------------------
$post_meta_layout_section = $meta_layout_section;
$fields = $post_meta_layout_section['fields'];

	$fields[0]['title'] =  esc_html__('Post Layout', 'tilemax' );
	unset( $fields[0]['options']['with-both-sidebar'] );
	unset( $fields[0]['info'] );
	unset( $fields[0]['options']['fullwidth'] );
	unset( $fields[5] );
	unset( $post_meta_layout_section['fields'] );
	$post_meta_layout_section['fields']  = $fields;  

	$post_format_section = array(
		'name'  => 'post_format_data_section',
		'title' => esc_html__('Post Format', 'tilemax'),
		'icon'  => 'fa fa-cog',
		'fields' =>  array(

			array(
				'id'      => 'show-featured-image',
				'type'    => 'switcher',
				'title'   => esc_html__('Show Featured Image', 'tilemax' ),
				'default' => true,
				'info'    => esc_html__('YES! to show featured image','tilemax')
			),

			array(
				'id'           => 'single-post-style',
				'type'         => 'select',
				'title'        => esc_html__('Post Style', 'tilemax'),
				'options'      => array(
				  'standard'      		=> esc_html__('Standard', 'tilemax'),
				  'info-within-image'   => esc_html__('Info WithIn Image', 'tilemax'),
				  'info-bottom-image'   => esc_html__('Info Over Image Bottom Left', 'tilemax'),
				  'info-vertical-image' => esc_html__('Info Over Image Vertically Center', 'tilemax'),
				  'info-above-image'    => esc_html__('Info Above Image', 'tilemax'),
				),
				'class'        => 'chosen',
				'default'      => 'standard',
				'info'         => esc_html__('Choose post style to display single post.', 'tilemax')
			),

			array(
			    'id'           => 'view_count',
			    'type'         => 'text',
			    'title'        => esc_html__('Views', 'tilemax' ),
				'info'         => esc_html__('No.of views of this post.', 'tilemax')
			),

			array(
			    'id'           => 'like_count',
			    'type'         => 'text',
			    'title'        => esc_html__('Likes', 'tilemax' ),
				'info'         => esc_html__('No.of likes of this post.', 'tilemax')
			),

			array(
				'id' => 'post-format-type',
				'title'   => esc_html__('Type', 'tilemax' ),
				'type' => 'select',
				'default' => 'standard',
				'options' => array(
					'standard'  => esc_html__('Standard', 'tilemax'),
					'status'	=> esc_html__('Status','tilemax'),
					'quote'		=> esc_html__('Quote','tilemax'),
					'gallery'	=> esc_html__('Gallery','tilemax'),
					'image'		=> esc_html__('Image','tilemax'),
					'video'		=> esc_html__('Video','tilemax'),
					'audio'		=> esc_html__('Audio','tilemax'),
					'link'		=> esc_html__('Link','tilemax'),
					'aside'		=> esc_html__('Aside','tilemax'),
					'chat'		=> esc_html__('Chat','tilemax')
				)
			),

			array(
				'id' 	  => 'post-gallery-items',
				'type'	  => 'gallery',
				'title'   => esc_html__('Add Images', 'tilemax' ),
				'add_title'   => esc_html__('Add Images', 'tilemax' ),
				'edit_title'  => esc_html__('Edit Images', 'tilemax' ),
				'clear_title' => esc_html__('Remove Images', 'tilemax' ),
				'dependency' => array( 'post-format-type', '==', 'gallery' ),
			),

			array(
				'id' 	  => 'media-type',
				'type'	  => 'select',
				'title'   => esc_html__('Select Type', 'tilemax' ),
				'dependency' => array( 'post-format-type', 'any', 'video,audio' ),
		      	'options'	=> array(
					'oembed' => esc_html__('Oembed','tilemax'),
					'self' => esc_html__('Self Hosted','tilemax'),
				)
			),

			array(
				'id' 	  => 'media-url',
				'type'	  => 'textarea',
				'title'   => esc_html__('Media URL', 'tilemax' ),
				'dependency' => array( 'post-format-type', 'any', 'video,audio' ),
			),
		)
	);

	$options[] = array(
		'id'        => '_dt_post_settings',
		'title'     => esc_html__('Post Settings','tilemax'),
		'post_type' => 'post',
		'context'   => 'normal',
		'priority'  => 'high',
		'sections'  => array(
			$post_meta_layout_section,
			$meta_breadcrumb_section,
			$post_format_section			
		)
	);

// -----------------------------------------
// Tribe Events Post Metabox Options
// -----------------------------------------
  array_push( $post_meta_layout_section['fields'], array(
    'id' => 'event-post-style',
    'title'   => esc_html__('Post Style', 'tilemax' ),
    'type' => 'select',
    'default' => 'type1',
    'options' => array(
      'type1'  => esc_html__('Classic', 'tilemax'),
      'type2'  => esc_html__('Full Width','tilemax'),
      'type3'  => esc_html__('Minimal Tab','tilemax'),
      'type4'  => esc_html__('Clean','tilemax'),
      'type5'  => esc_html__('Modern','tilemax'),
    ),
	'class'    => 'chosen',
	'info'     => esc_html__('Your event post page show at most selected style.', 'tilemax')
  ) );

  $options[] = array(
    'id'        => '_custom_settings',
    'title'     => esc_html__('Settings','tilemax'),
    'post_type' => 'tribe_events',
    'context'   => 'normal',
    'priority'  => 'high',
    'sections'  => array(
      $post_meta_layout_section,
      $meta_breadcrumb_section
    )
  );

	
CSFramework_Metabox::instance( $options );