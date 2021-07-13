<?php
/* ---------------------------------------------------------------------------
 * Hook of Top
 * --------------------------------------------------------------------------- */
if(!function_exists('tilemax_hook_top')) {
function tilemax_hook_top() {
	if( cs_get_option( 'enable-top-hook' ) ) :
		echo '<!-- tilemax_hook_top -->';
			$hook = cs_get_option( 'top-hook' );
			if ( !empty($hook) )
				echo do_shortcode( stripslashes($hook) );
		echo '<!-- tilemax_hook_top -->';
	endif;	
}
}
add_action( 'tilemax_hook_top', 'tilemax_hook_top' );


/* ---------------------------------------------------------------------------
 * Hook of Content before
 * --------------------------------------------------------------------------- */
if(!function_exists('tilemax_hook_content_before')) {
function tilemax_hook_content_before() {
	if( cs_get_option( 'enable-content-before-hook' ) ) :
		echo '<!-- tilemax_hook_content_before -->';
			$hook = cs_get_option( 'content-before-hook' );
			if ( !empty($hook) )
				echo do_shortcode( stripslashes($hook) );
		echo '<!-- tilemax_hook_content_before -->';
	endif;
}
}
add_action( 'tilemax_hook_content_before', 'tilemax_hook_content_before' );


/* ---------------------------------------------------------------------------
 * Hook of Content after
 * --------------------------------------------------------------------------- */
if(!function_exists('tilemax_hook_content_after')) {
function tilemax_hook_content_after() {
	if( cs_get_option( 'enable-content-after-hook' ) ) :
		echo '<!-- tilemax_hook_content_after -->';
			$hook = cs_get_option( 'content-after-hook' );
			if ( !empty($hook) )
				echo do_shortcode( stripslashes($hook) );
		echo '<!-- tilemax_hook_content_after -->';
	endif;
}
}
add_action( 'tilemax_hook_content_after', 'tilemax_hook_content_after' );


/* ---------------------------------------------------------------------------
 * Hook of Bottom
 * --------------------------------------------------------------------------- */
if(!function_exists('tilemax_hook_bottom')) {
function tilemax_hook_bottom() {
	if( cs_get_option( 'enable-bottom-hook' ) ) :
		echo '<!-- tilemax_hook_bottom -->';
			$hook = cs_get_option( 'bottom-hook' );
			if ( !empty($hook) )
				echo do_shortcode( stripslashes($hook) );
		echo '<!-- tilemax_hook_bottom -->';
	endif;
}
}
add_action( 'tilemax_hook_bottom', 'tilemax_hook_bottom' ); ?>