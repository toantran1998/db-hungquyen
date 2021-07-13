<?php
// menu icons
$searchicon = (int) get_theme_mod( 'menu-search-icon', tilemax_defaults('menu-search-icon') );
$carticon = (int) get_theme_mod( 'menu-cart-icon', tilemax_defaults('menu-cart-icon') );
if( !empty($searchicon) || !empty($carticon) ) : ?>
	<div class="menu-icons-wrapper"><?php
		if( !empty($searchicon) ): ?>
			<div class="search"><?php
				// getting search box type
				$type = get_theme_mod( 'search-box-type', tilemax_defaults('search-box-type') );
				$type = !empty( $type ) ? $type : 'type1'; ?>
				<a href="javascript:void(0)" id="overlay-search-<?php echo esc_attr( $type ); ?>" class="dt-search-icon <?php echo esc_attr($type); ?>"> <span class="fa fa-search"> </span> </a><?php
				if($type == 'type1'): ?>
                    <div class="top-menu-search-container">
                        <?php get_search_form(); ?>
                    </div><?php
				else: ?>
                    <div class="overlay overlay-search">
                        <div class="overlay-close"></div>
                        <?php get_search_form(); ?>
                    </div><?php
				endif; ?>
			</div><?php
		endif;
		if( !empty($carticon) && function_exists("is_woocommerce")) : ?>
			<div class="cart">
				<a href="<?php echo wc_get_cart_url(); ?>" title="<?php esc_html_e( 'View Shopping Cart', 'tilemax' ); ?>">
					<span class="fa fa-shopping-cart"> </span><?php
					$count = WC()->cart->cart_contents_count;
					if( $count > 0 ) : ?>
						<sup><?php echo esc_html( $count ); ?></sup><?php
					endif;?>
				</a>
			</div><?php
		endif; ?>
	</div><?php
endif; ?>