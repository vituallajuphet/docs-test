<?php
//Exit if accessed directly
if(!defined('ABSPATH')){
	return;
}

// //Quick View Template.
function qv_ajax(){
	$product_id = (int) $_POST['product_id'];
	$qv_next 	= (int) $_POST['qv_next'];
	$qv_prev 	= (int) $_POST['qv_prev'];
	$params = array('p' => $product_id,
					'post_type' => array('product','product_variation'));
	$query = new WP_Query($params);
	if($query->have_posts()){
		while ($query->have_posts()){
			$query->the_post();
			require_once (ABSPATH.'wp-content/plugins/functions-for-woo/templates/qv-template.php');
		}
	}
	wp_reset_postdata();
}
add_action('wp_ajax_qv_ajax','qv_ajax');
add_action('wp_ajax_nopriv_qv_ajax','qv_ajax');

?>
