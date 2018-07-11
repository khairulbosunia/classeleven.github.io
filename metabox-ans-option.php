<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.


function stock_theme_page_metabox($options) {
	$options = array(); //remove old options
	
	$options[]  = array(
		'id' => 'stock_page_options',
		'title' => 'page_options',
		'post_type' => 'page',
		'context' => 'normal',
		'priority' => 'high',
		'sections' => array(
		
			array(
				'name' => 'stock_page_options_meta',
				'icon' => 'fa fa-cog',
				'fields' => array(
					array(
						'id' => 'enable_title',
						'type' => 'switcher',
						'title' => 'Enable title',
						'default' => 'true',
						'desc' => esc_html__('If you want to enable title, select yes.', 'stock-crazycafe'),
					),
					
					array(
						'id' => 'enable_content',
						'type' => 'switcher',
						'title' => 'Enable content',
						'default' => 'false',
						'desc' => esc_html__('If you want to enable content, select yes.', 'stock-crazycafe'),
					),
				),
			)
		
		),
	);
	
	return $options;
	
	
}
add_filter('cs_metabox_options','stock_theme_page_metabox');









