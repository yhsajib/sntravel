<?php

if( !defined( 'ABSPATH' ) )
	exit; 

class Sntravel_Admin_Templates extends Sntravel_Base{

	public function __construct() {
		$this->add_action( 'admin_menu', 'register_page', 20 );
	}
 
	public function register_page() {
		add_submenu_page(
			'sntravelart',
		    esc_html__( 'Templates', 'sntravel' ),
		    esc_html__( 'Templates', 'sntravel' ),
		    'manage_options',
		    'edit.php?post_type=sntravel-template',
		    false
		);
	}
}
new Sntravel_Admin_Templates;
