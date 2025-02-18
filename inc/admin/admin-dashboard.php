<?php
/**
* The Sntravel_Admin_Dashboard base class
*/

if( !defined( 'ABSPATH' ) )
	exit; 

class Sntravel_Admin_Dashboard extends Sntravel_Admin_Page {

	public function __construct() {
		$this->id = 'sntravelart';
		$this->page_title = sntravel()->get_name();
		$this->menu_title = sntravel()->get_name();
		$this->position = '50';

		parent::__construct();
	}

	public function display() {
		include_once( get_template_directory() . '/inc/admin/views/admin-dashboard.php' );
	}
 
	public function save() {

	}
}
new Sntravel_Admin_Dashboard;
