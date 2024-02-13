<?php 
function zacya_custom_post_type() {

	$labels = array(
		'name'          => __( 'Portfolios', 'zacya' ),
		'singular_name' => __( 'Portfolio', 'zacya' ),
		'add_new' => 'Add New Portfolio'
	);

$args= array(
	'labels'      => $labels,
	'public'      => true,
	'has_archive' => true,
	'rewrite' => array('slug'=>'portpro'),
	'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ,'elementor', 'custom-fields'),
	'show_in_rest' => true
	
);



	register_post_type('wporg_product', $args );
		
	
}
add_action('init', 'zacya_custom_post_type');

?>
