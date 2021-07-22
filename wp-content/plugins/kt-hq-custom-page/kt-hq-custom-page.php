<?php
/**
 * Plugin Name: KT HQ Custom Page
 * Description: Add custom shortcode to hungquyen website
 * Version:     1.0.0
 * Author:      Khoi Tran
 * Author URI:  not yet
 * License:     GPL2+
 * Text Domain: khoitran
 */

class KT_HQ_Custom_Pages {
	function __construct() {
		add_action('wp_enqueue_scripts',array($this,'essential_files'));
		add_shortcode('kt_search_form', array($this,'search_form_handler'));
		// Ajax
		add_action( 'wp_ajax_load_more', array($this,'load_more') );
		add_action( 'wp_ajax_nopriv_load_more', array($this,'load_more') );
	}

	// Load more - ajax
    function load_more () {
	    $args = array(
		    'post_type'             => 'product',
		    'post_status'           => 'publish',
		    'posts_per_page'        => -1,
		    'tax_query'             => array(
			    array(
				    'taxonomy'      => 'product_cat',
				    'field'         => 'term_id',
				    'terms'         => $_POST['categoryId']
			    )
		    )
	    );
	    $custom_query = new WP_Query($args);
	    ob_start();
	    if ($custom_query->have_posts()) {
		    while ($custom_query->have_posts()) {
			    $custom_query->the_post();
			    ?>
                <div class="col-sm-2 col-6">
                    <div class="kt-product">
                        <div class="kt-product__img"><?php the_post_thumbnail(); ?></div>
                        <p class="kt-product__name"><span><?php the_title();?></span></p>
                    </div>
                </div>
			    <?php
		    }
	    }
	    $result = ob_get_contents();
	    ob_end_clean();
	    wp_send_json_success( array('html'=>$result) );
	    wp_reset_postdata();
	    wp_die();
    }

	// Load essential file
	function essential_files () {
		wp_enqueue_script('jquery');
		wp_enqueue_style("main-style",plugins_url("kt-hq-custom-page") . '/style.css' );

		// Bootrap
		wp_enqueue_style( 'bootstrap', plugins_url("kt-hq-custom-page")  . '/asset/vendor/boottrap/css/bootstrap.css', array(), 20141119 );
		wp_enqueue_script( 'bootstrap', plugins_url("kt-hq-custom-page")  . '/asset/vendor/boottrap/js/bootstrap.min.js', array('jquery'), '20120206', true );

		wp_enqueue_script( 'main-js', plugins_url("kt-hq-custom-page") . '/asset/js/main.js', array('jquery'), "1.0.0",true);
		wp_localize_script('main-js','ajaxInfo', array(
			'url' => admin_url('admin-ajax.php')
		));
	}

	// Intial shortcode
	function search_form_handler ($atts) {
		extract( shortcode_atts( array (
			'category_id'     => null
		), $atts ) );

		ob_start();
		$term_childs = get_term_children($category_id, "product_cat");
		?>
		<div id="kt-search-form-wrapper" class="container">
			<form id="kt-search-form" class="kt-search-form">
                <span class="kt-search-form__label">Tìm kiếm</span>
                <div class="kt-search-form__select">
                    <select class="kt-select" data="aplication">
                        <option value="0">Ứng dụng</option>
                        <option value="1">Gạch ốp sàn</option>
                        <option value="2">Gạch lát tiền</option>
                    </select>
                    <select class="kt-select" data="aplication">
                        <option value="-1">Bề mặt</option>
		                <?php
		                foreach ($term_childs as $term_id) {
			                ?>
                            <option value="<?php echo $term_id;?>"><?php  echo get_term( $term_id )->name; ?></option>
			                <?php
		                }
		                ?>
                    </select>
                    <select class="kt-select">
                        <option value="-1">Kích cỡ</option>
                        <option value="0">6 x 25cm</option>
                        <option value="1">7 x 28cm</option>
                        <option value="2">8 x 33cm</option>
		                <?php
		                /*
						$options_list = get_option('size');
						foreach ($term_childs as $term) {
							?>
							<option value="<?php echo $term;?>"><?php  echo get_term( $term )->name; ?></option>
							<?php
						} */
		                ?>
                    </select>
                    <select class="kt-select">
                        <option value="-1">Khu vực</option>
                        <option value="0">Phòng khách</option>
                        <option value="1">Phòng ăn</option>
                        <option value="2">Phòng ngủ</option>
		                <?php
		                /*
						$options_list = get_option('size');
						foreach ($term_childs as $term_id) {
							?>
							<option value="<?php echo $term_id;?>"><?php  echo get_term( $term_id )->name; ?></option>
							<?php
						} */
		                ?>
                    </select>
				</div>
                <div class="kt-search-form__input">
                    <input type="text" placeholder="Từ khóa tìm kiếm">
                </div>
			</form>
		</div>
		<div id=kt-result-area-wrapper" class="container">
			<div class="row">
				<div class="col">
					<?php
					foreach ($term_childs as $term_id) {
					    $term = get_term($term_id);
					    ?>
                        <div id="<?php echo $term_id;?>" class="kt-category">
                            <div class="kt-category__heading">
                                <h3 class="kt-category__heading__title"><?php echo $term->name;?></h3>
                                <hr class="kt-category__heading__divider">
                                <p class="kt-category__heading__description"><?php echo $term->description; ?></p>
                            </div>
                            <div class="kt-category__products">
                                <div class="row">
									<?php
									$args = array(
										'post_type'             => 'product',
										'post_status'           => 'publish',
										'posts_per_page'        => 6,
										'paged'                 => 1,
										'tax_query'             => array(
											array(
												'taxonomy'      => 'product_cat',
												'field'         => 'term_id',
												'terms'         => $term_id
                                            )
										)
									);
									$custom_query = new WP_Query($args);
									if ($custom_query->have_posts()) {
										while ($custom_query->have_posts()) {
											$custom_query->the_post();
											?>
                                            <div class="col-sm-2 col-6">
                                                <div class="kt-product">
                                                    <div class="kt-product__img"><?php the_post_thumbnail(); ?></div>
                                                    <p class="kt-product__name"><span><?php the_title();?></span></p>
                                                </div>
                                            </div>
                                            <?php
										}
									}
									wp_reset_postdata(); ?>
                                </div>
                            </div>
                            <div class="kt-category__btn"><span>Xem thêm</span></div>
                        </div>
                            <?php
                    } ?>
				</div>
			</div>
		</div>
		<?php
		$result = ob_get_contents();
		ob_end_clean();
		return $result;
	}
}

$kt_hq_custom_pages_plugin = new KT_HQ_Custom_Pages();