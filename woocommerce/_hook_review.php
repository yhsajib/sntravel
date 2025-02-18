<?php
/**
 * Review callback function 
 * make it callback same as default blog review
*/
if(!function_exists('basilico_woocommerce_product_review_list_args')){
	add_filter('woocommerce_product_review_list_args', 'basilico_woocommerce_product_review_list_args');
	function basilico_woocommerce_product_review_list_args($args){
		$args['style']      = 'ul';
		$args['short_ping'] = 'true';
		$args['callback']   = [sntravel()->comment, 'comment_list'];
		return $args;
	}
}

remove_action('woocommerce_review_meta','woocommerce_review_display_meta', 10);
remove_action('woocommerce_review_comment_text','woocommerce_review_display_comment_text', 10);
/**
 * Comment form Args
*/
if(!function_exists('basilico_woocommerce_product_review_comment_form_args')){
	add_filter('woocommerce_product_review_comment_form_args', 'basilico_woocommerce_product_review_comment_form_args');
	function basilico_woocommerce_product_review_comment_form_args($comment_form){
		$comment_form = sntravel()->comment->comment_product_form_args();
		return $comment_form;
	}
}