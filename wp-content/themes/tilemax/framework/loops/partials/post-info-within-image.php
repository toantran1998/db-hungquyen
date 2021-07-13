<?php
	global $post;

	$show_author_meta = cs_get_option( 'post-author-meta' );
	$show_author_meta = !empty( $show_author_meta ) ? "" : "hidden";

	$show_date_meta = cs_get_option( 'post-date-meta' );
	$show_date_meta = !empty( $show_date_meta ) ? "" : "hidden";	

	$show_comment_meta = cs_get_option( 'post-comment-meta' );
	$show_comment_meta = !empty( $show_comment_meta ) ? "" : "hidden";

	$show_category_meta = cs_get_option( 'post-category-meta' );
	$show_category_meta = !empty( $show_category_meta ) ? "" : "hidden";

	$show_post_likes = cs_get_option( 'post-likes' );
	$show_post_likes = !empty( $show_post_likes ) ? "" : "hidden";

	$show_post_views = cs_get_option( 'post-views' );
	$show_post_views = !empty( $show_post_views ) ? "" : "hidden";

	$show_tag_meta = cs_get_option( 'post-tag-meta' );
	$show_tag_meta = !empty( $show_tag_meta ) ? "" : "hidden"; ?>

	<!-- Featured Image -->
	<div class="entry-thumb">
		<?php get_template_part( 'framework/loops/partials/entry', 'thumb' ); ?>
        <!-- .entry-meta -->
        <div class="entry-meta"><?php
			$cats = wp_get_object_terms(get_the_ID(),'category');
			if( !empty($cats) && $show_category_meta != 'hidden' ):
				$count = count($cats);
				echo '<p class="category">';
					foreach( $cats as $key => $term ) {
						$meta = get_term_meta( $term->term_id, '_post_category_options', false );
						$color = !empty($meta[0]['c_color']) ? 'style="background: '.$meta[0]['c_color'].'"' : '';

						echo '<a href="'.get_term_link( $term->slug ,'category').'" rel="category" '.$color.'>'.esc_html( $term->name ).'</a>';
						$key += 1;

						if( $key !== $count ){
							echo ' ';
						}
					}
				echo '</p>';
			endif; ?>

            <div class="entry-info">
                <div class="author <?php echo esc_attr( $show_author_meta ); ?>"> <?php esc_html_e('By', 'tilemax'); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" title="<?php esc_attr_e('View all posts by ', 'tilemax'); echo get_the_author(); ?>"><?php echo get_the_author(); ?></a></div>
    
                <div class="date <?php echo esc_attr($show_date_meta); ?>"><?php echo get_the_date('F'); ?> <?php echo get_the_date('d,'); ?> <?php echo get_the_date('Y'); ?></div>
    
				<div class="comments <?php echo esc_attr($show_comment_meta); ?>"><?php
				    comments_popup_link('<i class="zmdi zmdi-comment-list zmdi-hc-fw"> </i> 0'.esc_html__('comments', 'tilemax'), '<i class="zmdi zmdi-comment-list zmdi-hc-fw"> </i> 1'.esc_html__('comment', 'tilemax'), '<i class="zmdi zmdi-comment-list zmdi-hc-fw"> </i> %'.esc_html__('comments', 'tilemax'), '', '<i class="zmdi zmdi-comment-list zmdi-hc-fw"> </i>'.esc_html('comments off', 'tilemax')); ?></div>

                <?php if( class_exists( 'DTCorePlugin' ) ){ ?>
              			<div class="views <?php echo esc_attr($show_post_views); ?>"><i class="zmdi zmdi-eye zmdi-hc-fw"> </i> <?php echo do_shortcode('[dt_sc_post_view_count post_id="'.$post->ID.'" /]'); ?> </div>
				<?php } ?>
                
                <?php if( class_exists( 'DTCorePlugin' ) ){ ?>
                        <div class="likes dt_like_btn <?php echo esc_attr($show_post_likes); ?>">
                            <i class="zmdi zmdi-favorite-outline zmdi-hc-fw"> </i>
                            <a href="#" data-postid="<?php the_ID(); ?>" data-action="like">
                              <i><?php echo do_shortcode('[dt_sc_post_like_count post_id="'.$post->ID.'" /]'); ?></i>
                            </a>
                        </div>
                <?php } ?>
            </div>
            <div class="dt_scroll_down"><a href="#"> <i class="fa fa-angle-down"> </i></a></div>
        </div><!-- .entry-meta -->
    </div>
	<!-- Featured Image -->

    <!-- .entry-details -->
    <div class="entry-details within-image">
        <div class="entry-body">
             <?php the_content(); ?>
             <?php wp_link_pages( array( 'before'=>'<div class="page-link">', 'after'=>'</div>', 'link_before'=>'<span>', 'link_after'=>'</span>', 'next_or_number'=>'number',
                              'pagelink' => '%', 'echo' => 1 ) ); ?>
        </div>

	    <!-- Category & Tag -->
        <div class="entry-meta-data">
			 <?php the_tags("<p class='tags {$show_tag_meta}'> <span>".esc_html__('Tags', 'tilemax')."</span> ",' ',"</p>"); ?>
        </div><!-- Category & Tag -->

        <!-- Share -->
        <?php if( class_exists( 'DTCorePlugin' ) ){ 
      			echo do_shortcode('[dt_sc_post_social_share post_id="'.$post->ID.'" /]');
	  		} ?><!-- Share -->

        <?php edit_post_link( esc_html__( ' Edit ','tilemax' ) ); ?>
    </div><!-- .entry-details -->