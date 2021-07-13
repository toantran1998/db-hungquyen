<?php
/* ---------------------------------------------------------------------------
 * Load default theme options
 * - To return default options to store in database.
 * --------------------------------------------------------------------------- */
if(!function_exists('tilemax_show_footer_widgetarea')) {
function tilemax_show_footer_widgetarea( $count ) {
	$classes = array (
		"1" => "dt-sc-full-width",
		"dt-sc-one-half",
		"dt-sc-one-third",
		"dt-sc-one-fourth",
		"dt-sc-one-fifth",
		"dt-sc-one-sixth",
		"1-2" => "dt-sc-one-half",
		"1-3" => "dt-sc-one-third",
		"1-4" => "dt-sc-one-fourth",
		"3-4" => "dt-sc-three-fourth",
		"2-3" => "dt-sc-two-third" );

	if ($count <= 6) :
		for($i = 1; $i <= $count; $i ++) :

			$class = $classes [$count];
			$class = esc_attr( $class );

			$first = ($i == 1) ? "first" : "";
			$first = esc_attr( $first );

			echo "<div class='column {$class} {$first}'>";
				if (function_exists ( 'dynamic_sidebar' ) && dynamic_sidebar ( "footer-sidebar-{$i}" )) : endif;
			echo "</div>";
		endfor;
	elseif ($count == 12 || $count == 13) :

		$a = array (
			"1-4",
			"1-4",
			"1-2" );

		$a = ($count == 12) ? $a : array_reverse ( $a );
		foreach ( $a as $k => $v ) :
			$class = $classes [$v];
			$class = esc_attr( $class );

			$first = ($k == 0 ) ? "first" : "";
			$first = esc_attr( $first );

			echo "<div class='column {$class} {$first}'>";
				if (function_exists ( 'dynamic_sidebar' ) && dynamic_sidebar ( "footer-sidebar-{$k}-{$v}" )) : endif;
			echo "</div>";
		endforeach;
	elseif ($count == 7 || $count == 8) :
		$a = array (
			"1-4",
			"3-4");

		$a = ($count == 7) ? $a : array_reverse ( $a );
		foreach ( $a as $k => $v ) :
			$class = $classes [$v];
			$class = esc_attr( $class );

			$first = ($k == 0 ) ? "first" : "";
			$first = esc_attr( $first );


			echo "<div class='column {$class} {$first}'>";
				if (function_exists ( 'dynamic_sidebar' ) && dynamic_sidebar ( "footer-sidebar-{$k}-{$v}" )) :endif;
			echo "</div>";
		endforeach;
	elseif ($count == 9 || $count == 10) :
		$a = array ( 
			"1-3",
			"2-3" );
		$a = ($count == 9) ? $a : array_reverse ( $a );

		foreach ( $a as $k => $v ) :
			$class = $classes [$v];
			$class = esc_attr( $class );

			$first = ($k == 0 ) ? "first" : "";
			$first = esc_attr( $first );

			echo "<div class='column {$class} {$first}'>";
				if (function_exists ( 'dynamic_sidebar' ) && dynamic_sidebar ( "footer-sidebar-{$k}-{$v}" )) :endif;
			echo "</div>";
		endforeach;
	elseif ($count == 11 ) :
		$a = array ( "1-4", "1-2", "1-4" );
		foreach ( $a as $k => $v ) :
			$class = $classes [$v];
			$class = esc_attr( $class );
			$first = ($k == 0 ) ? "first" : "";
			$first = esc_attr( $first );
			echo "<div class='column {$class} {$first}'>";
				if (function_exists ( 'dynamic_sidebar' ) && dynamic_sidebar ( "footer-sidebar-{$k}-{$v}" )) : endif;
			echo "</div>";
		endforeach;
	endif;
}
}
/* ---------------------------------------------------------------------------
 * Check footer sidebar is active
 * --------------------------------------------------------------------------- */
if(!function_exists('tilemax_is_active_sidebar_footer')) {
function tilemax_is_active_sidebar_footer() {
	global $wp_registered_sidebars;
	$found = false;
	foreach($wp_registered_sidebars as $id => $sidebars):
		$pos = strpos($id, 'footer-sidebar');
		if( $pos === 0 && is_active_sidebar($id) ){
			$found = true;
		}
	endforeach;
	
	return $found;
} 
}

if( !function_exists('tilemax_skins') ) {

	function tilemax_skins( $skin ) {

		$skins['gold'] = array( 'primary-color' => '#b8aa83', 'secondary-color' => '#ecdaab', 'tertiary-color' => '#a2936a' );

		return $skins[ $skin ];
	}
}
?>