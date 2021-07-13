<?php
/*
Template Name: Blog Template
*/
get_header();
	global $post;
	$globalid = $post->ID;

	$tpl_default_settings = get_post_meta($globalid,'_tpl_default_settings',TRUE);
	$tpl_default_settings = is_array( $tpl_default_settings ) ? $tpl_default_settings  : array();
	
	$page_layout  = array_key_exists( "layout", $tpl_default_settings ) ? $tpl_default_settings['layout'] : "content-full-width";
	$show_sidebar = $show_left_sidebar = $show_right_sidebar = false;
	$sidebar_class = "";
	
	switch ( $page_layout ) {
		case 'with-left-sidebar':
			$page_layout = "page-with-sidebar with-left-sidebar";
			$show_sidebar = $show_left_sidebar = true;
			$sidebar_class = "secondary-has-left-sidebar";
		break;

		case 'with-right-sidebar':
			$page_layout = "page-with-sidebar with-right-sidebar";
			$show_sidebar = $show_right_sidebar	= true;
			$sidebar_class = "secondary-has-right-sidebar";
		break;
		
		case 'with-both-sidebar':
			$page_layout = "page-with-sidebar with-both-sidebar";
			$show_sidebar = $show_left_sidebar = $show_right_sidebar	= true;
			$sidebar_class = "secondary-has-both-sidebar";
		break;

		case 'content-full-width':
		default:
			$page_layout = "content-full-width";
		break;
	}

	if ( $show_sidebar ):
		if ( $show_left_sidebar ):
			$sticky_class = ( array_key_exists('enable-sticky-sidebar', $tpl_default_settings) && $tpl_default_settings['enable-sticky-sidebar'] == 'true' ) ? ' sidebar-as-sticky' : ''; ?>
			<!-- Secondary Left -->
			<section id="secondary-left" class="secondary-sidebar <?php echo esc_attr( $sidebar_class.$sticky_class ); ?>"><?php get_sidebar('left'); ?></section><?php
		endif;
	endif;?>
    <section id="primary" class="<?php echo esc_attr( $page_layout ); ?>"><?php
		if( have_posts() ):
			while( have_posts() ):
				the_post();
				get_template_part( 'framework/loops/content', 'page' );
			endwhile;
		endif;?>
        <div class="dt-sc-clear"></div>

		<!-- Blog Template -->
    	<div class="dt-sc-posts-list-wrapper"><?php
			// Getting meta values...
			$post_layout = !empty( $tpl_default_settings['blog-post-layout'] ) ? $tpl_default_settings['blog-post-layout'] : 'one-half';
			$post_style = !empty( $tpl_default_settings['blog-post-style'] ) ? $tpl_default_settings['blog-post-style'] : '';
			$post_per_page = !empty($tpl_default_settings['blog-post-per-page']) ? $tpl_default_settings['blog-post-per-page'] : -1;

			$post_layout_arr = array();
			$post_class = array( '1' => 'column dt-sc-one-column blog-fullwidth', '2' => 'column dt-sc-one-half', '3' => 'column dt-sc-one-third' );

			switch($post_layout):

				case 'one-column':
					$post_layout_arr[] = 1;
				break;

				case 'one-half-column':
					$post_layout_arr[] = 2;
				break;

				case 'one-third-column':
					$post_layout_arr[] = 3;
				break;

				default:
					$post_layout_arr = explode('-', $post_layout);
			endswitch;

			if ( get_query_var('paged') ) {
				$paged = get_query_var('paged');
			} elseif ( get_query_var('page') ) {
				$paged = get_query_var('page');
			} else {
				$paged = 1;
			}

			$categories = !empty($tpl_default_settings['blog-post-cats']) ? array_filter($tpl_default_settings['blog-post-cats']) : array();
			if ( empty( $categories ) ):
				$args = array( 'paged' => $paged, 'posts_per_page' => $post_per_page, 'post_type' => 'post', 'ignore_sticky_posts' => true );
			else:
				$exclude_cats = array_unique( $categories );
				$args = array( 'paged' => $paged, 'posts_per_page' => $post_per_page, 'category__not_in' => $exclude_cats, 'post_type' => 'post', 'ignore_sticky_posts' => true );
			endif;

			$the_query = new WP_Query($args);
			if( $the_query->have_posts() ):

				$i = 1;
				$gs_class = ( count( $post_layout_arr ) > 1 ) ? $post_layout_arr[1] : $post_layout_arr[0];

				echo "<div class='tpl-blog-holder apply-isotope'>";
				echo "<div class='grid-sizer ".esc_attr( $post_class[$gs_class] )."'></div>";

				$obj = new tilemax_post_functions;
				$meta = $obj->tilemax_post_meta_fields(false, $globalid);

				while( $the_query->have_posts() ):
					$the_query->the_post();

					$temp_class = "";
					$post_ID = get_the_ID();

					$post_layout = current($post_layout_arr);

					if($i == 1) $temp_class = $post_class[$post_layout]." first"; else $temp_class = $post_class[$post_layout];
					if($i == $post_layout) $i = 1; else $i = $i + 1;

					$post_meta = get_post_meta($post_ID ,'_dt_post_settings',TRUE);
					$post_meta = is_array($post_meta) ? $post_meta : array();

					$format = !empty( $post_meta['post-format-type'] ) ? $post_meta['post-format-type'] : 'standard'; ?>

                    <div class="<?php echo esc_attr($temp_class); ?>">
                    	<article id="post-<?php the_ID(); ?>" <?php post_class('blog-entry '.$post_style.' '.'format-'.$format); ?>><?php
							switch( $post_style ):

								case 'entry-date-left':
									$obj->tilemax_post_date_left_style( $post_ID, $meta );
								break;

								case 'entry-date-author-left':
									$obj->tilemax_post_date_author_left_style( $post_ID, $meta );
								break;

								case 'blog-default-style':
								case 'blog-medium-style':
								case 'blog-medium-style dt-blog-medium-highlight':
								case 'blog-medium-style dt-blog-medium-highlight dt-sc-skin-highlight':
								default:
									$obj->tilemax_post_default_style( $post_ID, $meta );
								break;		

							endswitch;

							$x = next($post_layout_arr);
							if( empty($x) && (count($post_layout_arr) == 3) ){
								unset($post_layout_arr);
								$post_layout_arr[] = 2;
							} elseif( empty($x) && (count($post_layout_arr) == 4) ){
								unset($post_layout_arr);
								$post_layout_arr[] = 3;
							} elseif( empty($x) && (count($post_layout_arr) == 5) ){
								reset($post_layout_arr);
								next($post_layout_arr);
							} elseif( empty($x) && (count($post_layout_arr) == 6) ){
								reset($post_layout_arr);
							} elseif( empty($x) && (count($post_layout_arr) == 1) ){
								reset($post_layout_arr);
							}

						echo '</article>';
					echo '</div>';

				endwhile;
				echo '</div>';

				wp_reset_postdata();

			else:?>
				<h2><?php esc_html_e('Nothing Found.', 'tilemax'); ?></h2>
				<p><?php esc_html_e('Apologies, but no results were found for the requested archive.', 'tilemax'); ?></p><?php
			endif;?>
        </div>

        <!-- **Pagination** -->
        <div class="pagination blog-pagination"><?php echo tilemax_pagination($the_query); ?></div><!-- **Pagination** -->
        <!-- Blog Template Ends -->
    </section><!-- **Primary - End** --><?php

	if ( $show_sidebar ):
		if ( $show_right_sidebar ):
			$sticky_class = ( array_key_exists('enable-sticky-sidebar', $tpl_default_settings) && $tpl_default_settings['enable-sticky-sidebar'] == 'true' ) ? ' sidebar-as-sticky' : ''; ?>
			<!-- Secondary Right -->
			<section id="secondary-right" class="secondary-sidebar <?php echo esc_attr( $sidebar_class.$sticky_class ); ?>"><?php get_sidebar('right'); ?></section><?php
		endif;
	endif;
get_footer(); ?>