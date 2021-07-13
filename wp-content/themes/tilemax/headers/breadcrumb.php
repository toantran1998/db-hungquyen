<?php if( is_page() && !is_front_page() ):
		$post = tilemax_global_variables('post');
		$page_id = ($post->ID == 0) ? get_queried_object_id() : $post->ID;
		tilemax_breadcrumb_section( $page_id, 'page' );
	elseif( is_single() ):
		if( is_attachment() ):
		else:
			$post = tilemax_global_variables('post');
			$post_type = get_post_type();

			if( $post_type === 'post' ) {
				tilemax_breadcrumb_section( $post->ID, 'post' );
			} elseif( $post_type === 'dt_portfolios' ) {
				tilemax_breadcrumb_section( $post->ID, 'dt_portfolios' );
			} elseif( $post_type === "product" ) {
				$title = get_the_title( $post->ID );
				tilemax_breadcrumb_section_with_class( $title , "dt-breadcrumb-for-single-product");
			} elseif( $post_type === "forum" ){
				$title = get_the_title( $post->ID );
				tilemax_breadcrumb_section_with_class( $title , "dt-breadcrumb-for-single-forum");
			} elseif( $post_type === "topic" ){
				$title = get_the_title( $post->ID );
				tilemax_breadcrumb_section_with_class( $title , "dt-breadcrumb-for-single-topic");
			} elseif( in_array('events-single', get_body_class()) ) {
				tilemax_breadcrumb_section( $post->ID, '' );
			} elseif( in_array('single-tribe_venue', get_body_class()) ) {
				$title = tilemax_events_title();
				tilemax_breadcrumb_section_with_class( $title , "dt-breadcrumb-for-tribe-single-venue");
			} elseif( in_array('single-tribe_organizer', get_body_class()) ) {
				$title = tilemax_events_title();
				tilemax_breadcrumb_section_with_class( $title , "dt-breadcrumb-for-tribe-single-organizer");
			} else {
				tilemax_breadcrumb_section( $post->ID, '' );
            }			
		endif;
	elseif( is_home() && !is_front_page() ):
		$page_id = get_option('page_for_posts');
		tilemax_breadcrumb_section( $page_id, 'page' );
	elseif( is_post_type_archive('tribe_events') ):
		$title = tilemax_events_title();
		tilemax_breadcrumb_section_with_class( $title , "dt-breadcrumb-for-tribe-events-archive");
	elseif( is_post_type_archive('forum') ):
		tilemax_breadcrumb_section(  $post->ID , 'page' );
	elseif( is_post_type_archive('product') ):
		tilemax_breadcrumb_section(  get_option('woocommerce_shop_page_id') , 'page' );
	elseif( is_post_type_archive('dt_portfolios') ):
		$title = esc_html__("Portfolio Archives",'tilemax');
		tilemax_breadcrumb_section_with_class( $title , "dt-breadcrumb-for-portfolio-archives");
	elseif( is_tax() ):
		$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
		$title = esc_html__("Archive for Term: ",'tilemax').$term->name;
		tilemax_breadcrumb_section_with_class( $title , "dt-breadcrumb-for-archive-term");
    elseif( is_category( ) ):
        $title = esc_html__("Archive for Category: ",'tilemax');
        $title .= single_cat_title('',FALSE);
		tilemax_breadcrumb_section_with_class( $title , "dt-breadcrumb-for-archive-category");
    elseif( is_tag() ):
        $title = esc_html__("Archive for Tag: ",'tilemax');
        $title .= single_tag_title('',FALSE);
        tilemax_breadcrumb_section_with_class( $title, "dt-breadcrumb-for-archive-tags");
    elseif( is_month() ):
        $title = esc_html__("Archive for Month: ",'tilemax');
        $title .=  get_the_time('F');
		tilemax_breadcrumb_section_with_class( $title, "dt-breadcrumb-for-archive-month");
    elseif( is_year() ):
        $title = esc_html__("Archive for Year: ",'tilemax');
        $title .=  get_the_time('Y');
        tilemax_breadcrumb_section_with_class( $title, "dt-breadcrumb-for-archive-year");
    elseif(is_day() || is_time()):
        $title = esc_html__("Archive for Day: ",'tilemax');
        $title .=  get_the_time('D');
		tilemax_breadcrumb_section_with_class( $title, "dt-breadcrumb-for-archive-day");
    elseif( is_author() ):
        $curauth = get_user_by('slug',get_query_var('author_name')) ;
        $title  = esc_html__("Archive for Author: ",'tilemax');
        $title .= $curauth->nickname;
        tilemax_breadcrumb_section_with_class( $title, "dt-breadcrumb-for-archive-author");
	elseif(in_array('events-archive', get_body_class())):
		$title = tilemax_events_title();
		tilemax_breadcrumb_section_with_class( $title , "dt-breadcrumb-for-tribe-events-archive");
    elseif( is_search() ):
        $title  = esc_html__("Search Result for ",'tilemax');
        $title .= get_search_query();
        tilemax_breadcrumb_section_with_class( $title, "dt-breadcrumb-for-search");
    elseif( is_404() ):
        $title  = esc_html__("Lost ",'tilemax');
        $title .= esc_html__("Oops Nothing Found",'tilemax');
        tilemax_breadcrumb_section_with_class( $title, "dt-breadcrumb-for-404");
	elseif( function_exists('bbp_is_search') && bbp_is_search() ):	
        $title  = esc_html__("Search Forum",'tilemax');
        tilemax_breadcrumb_section_with_class( $title, "dt-breadcrumb-for-search");
	elseif( function_exists('bbp_is_reply_edit') && bbp_is_reply_edit() ):	
        $title  = esc_html__("Edit Reply",'tilemax');
        tilemax_breadcrumb_section_with_class( $title, "dt-breadcrumb-for-search");
	endif;?>