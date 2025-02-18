<?php
/**
* The Sntravel_Admin_Import class
*/

if( !defined( 'ABSPATH' ) )
	exit; // Exit if accessed directly

class Sntravel_Admin_Import extends Sntravel_Admin_Page {

	public function __construct() {

		$this->id = 'sntravelart-import-demos';
		$this->page_title = esc_html__( 'Import Demos', 'sntravel' );
		$this->menu_title = esc_html__( 'Import Demos', 'sntravel' );
		$this->parent = 'sntravelart';
		//$this->position = '10';

		parent::__construct();
	}

	public function display() {
		include_once( get_template_directory() . '/inc/admin/views/admin-demos.php' );
	}


	public function save() {

	}
}
new Sntravel_Admin_Import;