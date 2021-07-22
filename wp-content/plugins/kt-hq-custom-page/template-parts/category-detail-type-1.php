<?php
$term = get_term($term_id);
?>
<div id="<?php echo $term_id;?>" class="kt-category">
	<div class="kt-category__heading">
		<h3 class="kt-category__title"><?php echo $term->name;?></h3>
		<hr class="kt-category__divider">
		<p class="kt-category__description"><?php echo $term->description; ?></p>
	</div>
	<div class="kt-category__products">
		<div class="row">
			<?php
			$args = array(
				"cat" => $term_id
			);
			$custom_query = new WP_Query($args);
			if ($custom_query->have_posts()) {
				while ($custom_query->have_posts()) {
					the_post();
					?>
                    <div class="col-sm-2 col-6">
                        <div class="kt-product">
                            <img class="kt-product__thumb" src="" alt="">
                            <p class="kt-product__name"><span><?php the_title();?></span></p>
                        </div>
                    </div>
					<?php
				}
			}
			wp_reset_postdata();
			?>
        </div>
	</div>
    <div class="kt-category__btn">Xem thêm</div>
</div>
