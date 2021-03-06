<?php add_action( 'vc_before_init', 'dt_sc_events_list_vc_map' );
function dt_sc_events_list_vc_map() {
	vc_map( array(
		"name" => esc_html__( "Events List", 'designthemes-core' ),
		"base" => "dt_sc_events_list",
		"icon" => "dt_sc_events_list",
		"category" => DT_VC_CATEGORY .' ( '.esc_html__('Events','designthemes-core').')',
		"params" => array(

			// Title
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Title', 'designthemes-core' ),
				'param_name' => 'title',
				'description' => esc_html__( 'Enter title', 'designthemes-core' ),
				'admin_label' => true
			),

			// Limit
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Limit', 'designthemes-core' ),
				'param_name' => 'limit',
				'description' => esc_html__( 'Enter limit', 'designthemes-core' )
			),

			// Categories
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Categories', 'designthemes-core' ),
				'param_name' => 'categories',
				'description' => esc_html__( 'Enter categories', 'designthemes-core' )
			),									
		)
	) );
}?>