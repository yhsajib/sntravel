<?php
/**
* The Sntravel_Admin initiate the theme admin
*/

if( !defined( 'ABSPATH' ) )
	exit; 
include_once get_template_directory() . '/inc/classes/class-base.php';
include_once get_template_directory() . '/inc/admin/libs/tgmpa/class-tgm-plugin-activation.php' ; 
include_once get_template_directory() . '/inc/admin/admin-require-plugins.php'; 

class Sntravel_Admin extends Sntravel_Base{

	public function __construct() {

		$this->add_action( 'init', 'init', 7 ); 
		$this->add_action( 'admin_enqueue_scripts', 'enqueue', 99 );
		$this->add_action( 'admin_init', 'save_plugins' );
		$this->add_action( 'admin_menu', 'fix_parent_menu', 999 ); 
	}

	public function init() {
		 
		// Merlin
		require_once get_template_directory() . '/inc/admin/libs/merlin/class-merlin.php';
		require_once get_template_directory() . '/inc/admin/libs/merlin/merlin-config.php';

		require_once get_template_directory() . '/inc/admin/updater/register-admin.php';
		require_once get_template_directory() . '/inc/admin/admin-page.php';
		require_once get_template_directory() . '/inc/admin/admin-dashboard.php';
		require_once get_template_directory() . '/inc/admin/admin-plugins.php' ;
		require_once get_template_directory() . '/inc/admin/admin-import.php';
		if( class_exists('Pxltheme_Core'))
			include_once( get_template_directory() . '/inc/admin/admin-templates.php' ) ;
		
	}
 
	public function enqueue() {
		$sntravel_server_info = apply_filters( 'sntravel_server_info', ['api_url' => ''] ) ;
		wp_enqueue_style( 'sntravelart-dashboard', get_template_directory_uri() . '/inc/admin/assets/css/dashboard.css' );

		if ( ! did_action( 'wp_enqueue_media' ) ) {
	        wp_enqueue_media();
	    }
		wp_enqueue_script( 'sntravelart-admin', get_template_directory_uri() . '/inc/admin/assets/js/admin.js', array( 'jquery'), false, true );
		wp_localize_script( 'sntravelart-admin', 'sntravelart_admin', array(
			'ajaxurl'        => admin_url( 'admin-ajax.php' ),
			'wpnonce'        => wp_create_nonce( 'merlin_nonce' ),
			'api_url' 		 => $sntravel_server_info['api_url'],
			'theme_slug'     => sntravel()->get_slug()
		));
	}
	  
	public function save_plugins() {

        if ( !current_user_can( 'edit_theme_options' ) ) {
            return;
        }

		// Deactivate Plugin
        if ( isset( $_GET['sntravel-deactivate'] ) && 'deactivate-plugin' == sanitize_text_field($_GET['sntravel-deactivate']) ) {

			check_admin_referer( 'sntravel-deactivate', 'sntravel-deactivate-nonce' );

			$plugins = TGM_Plugin_Activation::$instance->plugins;

			foreach( $plugins as $plugin ) {
				if ( $plugin['slug'] == sanitize_text_field($_GET['plugin']) ) {

					deactivate_plugins( $plugin['file_path'] );

                    wp_redirect( admin_url( 'admin.php?page=' . sanitize_text_field($_GET['page']) ) );
					exit;
				}
			}
		}

		// Activate plugin
		if ( isset( $_GET['sntravel-activate'] ) && 'activate-plugin' == sanitize_text_field($_GET['sntravel-activate']) ) {

			check_admin_referer( 'sntravel-activate', 'sntravel-activate-nonce' );

			$plugins = TGM_Plugin_Activation::$instance->plugins;

			foreach( $plugins as $plugin ) {
				if ( $plugin['slug'] == sanitize_text_field($_GET['plugin']) ) {

					activate_plugin( $plugin['file_path'] );

					wp_redirect( admin_url( 'admin.php?page=' . sanitize_text_field($_GET['page']) ) );
					exit;
				}
			}
		}
    }

    public function fix_parent_menu() {

        if ( !current_user_can( 'edit_theme_options' ) ) {
            return;
        }
		 
		global $submenu;

		$submenu['sntravelart'][0][0] = sntravel()->get_name().' '.esc_html__( 'Dashboard', 'sntravel' );

		remove_submenu_page( 'themes.php', 'tgmpa-install-plugins' );
		remove_submenu_page( 'tools.php', 'redux-about' );
	}
}
 
new Sntravel_Admin;

