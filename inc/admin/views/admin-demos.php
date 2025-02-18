<div class="sntravel-dashboard-wrap">
	<?php require get_template_directory() . '/inc/admin/views/admin-tabs.php'; ?>
	<?php 
	$installed_plugins = get_plugins();
	$plugins = TGM_Plugin_Activation::$instance->plugins;
	$pxl_import_demo_id = get_option('pxl_import_demo_id','');
	$plugin_requires = array();
	foreach( $plugins as $plugin ){
		$file_path = $plugin['file_path'];
		
		$this_active =  in_array( $plugin['file_path'], (array) get_option( 'active_plugins', array() ), true ) || is_plugin_active_for_network( $plugin );

		if( $plugin['required'] === true && !$this_active){
			$plugin_requires[] = $plugin['name'];
		}
	}  
	?>
	<?php 
 	$dev_mode = apply_filters( 'pxl_set_dev_mode', (defined('DEV_MODE') && DEV_MODE)) ;
	if ( 'valid' != get_option( sntravel()->get_slug().'_purchase_code_status', false ) && !$dev_mode ) :
		
		echo '<div class="error"><p>' .
				sprintf( wp_kses_post( esc_html__( 'The %s theme needs to be registered. %sRegister Now%s', 'sntravel' ) ), sntravel()->get_name(), '<a href="' . admin_url( 'admin.php?page=pxlart') . '">' , '</a>' ) . '</p></div>';
	elseif( !empty($plugin_requires) && sizeof($plugin_requires) >= 1 ):

		echo '<div class="error">';
		echo sprintf( wp_kses_post( esc_html__( 'Make sure to activate required plugins prior to import a demo to %s. %sActive Now%s', 'sntravel' ) ), sntravel()->get_name(), '<a class="nt-atpli" href="' . admin_url( 'admin.php?page=pxlart-plugins') . '">' , '</a>' );
		echo '<ul class="plugin-not-active">';
			foreach( $plugin_requires as $pr ){
				echo '<li>'.$pr.'</li>';
			}
		echo '</ul>';
		echo '</div>';
	else: ?>

	<header class="sntravel-dsb-header">
		<div class="sntravel-dsb-header-inner">
			<h4><?php esc_html_e( 'Import a Demo', 'sntravel' ); ?></h4>
			<p><?php esc_html_e( 'Choose a pre-built website for starting a quick design process.', 'sntravel' ) ?></p>
		</div>
		<div class="sntravel-msg sntravel-dsb-notice">
			<p><span><?php esc_html_e( 'Note:', 'sntravel' ); ?></span> <?php esc_html_e( 'Make sure to activate required plugins prior to import a demo.', 'sntravel' ) ?></p>
		</div>
	</header>

	<?php

		require locate_template( 'inc/admin/demo-data/demo-config.php' );
		$i = 0;
		wp_localize_script( 'pxlart-admin', 'pxlart_demos', $demos );

		?>
		<div id="sntravel-demos" class="sntravel-demos sntravel-solid-wrap">

			<div class="sntravel-tab-nav">
				<ul>
					<li><a class="active" href="#sntravel-demos-elementor" data-filter="elementor">Elementor</a></li>
					<li><a href="#sntravel-demos-wpbakery" data-filter="wpbakery">WPBakery</a></li>
				</ul>
			</div>

			<div class="sntravel-tab-content">
				<div class="sntravel-row">
					<?php foreach( $demos as $id => $demo ): ?>

					<div class="sntravel-col sntravel-col-4 <?php echo !empty($demo['builder']) ? esc_attr($demo['builder']) : esc_attr('elementor'); ?>">
			
						<div class="sntravel-dsb-demo-item">

							<figure>
								<img src="<?php echo esc_url( $demo['screenshot'] ); ?>" alt="<?php echo esc_attr( $demo['title'] ); ?>">
								<div class="sntravel-dsb-overlay">
									<a href="#" id="import-id" data-import-id="<?php echo esc_attr( $i ); ?>" data-demo-id="<?php echo esc_attr( $id ); ?>" class="sntravel-btn sntravel-popup-import <?php echo esc_attr( $id ); ?>">
										<span><?php esc_html_e( 'Import Demo', 'sntravel' ); ?></span>
									</a>
									<a target="_blank" href="<?php echo esc_url( $demo['preview'] ); ?>" class="sntravel-btn sntravel-preview-btn">
										<span><?php esc_html_e( 'Preview', 'sntravel' ); ?></span>
										<span class="sntravel-btn-icon">
										<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-external-link"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
										</span>
									</a>
								</div>
							</figure>
							<h3><?php echo esc_html( $demo['title'] ); ?></h3>
						</div>
					</div>

					<?php $i++; ?>
					<?php endforeach; ?>

				</div>
			</div>
	</div>
	
	<div class="sntravel-demo-content sntravel-imp-popup-wrap">
		<div class="sntravel-imp-popup-inner">
			<span class="sntravel-imp-popup-close"></span>
			<div class="sntravel-imp-popup-content">
				<h4 style="text-align:center; margin-bottom: 30px;"><?php esc_html_e( 'Select all or a few', 'sntravel' ); ?></h4>
				<div class="sntravel-row">
					<div class="sntravel-col sntravel-col-6">
						<span class="sntravel-imp-opt">
							<input id="sntravel-imp-media" type="checkbox" value="import_media" checked="">
							<label for="sntravel-imp-media"></label>
							<span><?php esc_html_e( 'Media Attachments', 'sntravel' ); ?></span>
						</span>
					</div>
					<div class="sntravel-col sntravel-col-6">
						<span class="sntravel-imp-opt">
							<input id="sntravel-imp-content" type="checkbox" value="import_content" checked="">
							<label for="sntravel-imp-content"></label>
							<span><?php esc_html_e( 'Content', 'sntravel' ); ?></span>
						</span>
					</div>
					<div class="sntravel-col sntravel-col-6">
						<span class="sntravel-imp-opt">
							<input id="sntravel-imp-options" type="checkbox" value="import_theme_options" checked="">
							<label for="sntravel-imp-options"></label>
							<span><?php esc_html_e( 'Theme Options', 'sntravel' ) ?></span>
						</span>
					</div>
					<div class="sntravel-col sntravel-col-6">
						<span class="sntravel-imp-opt">
							<input id="sntravel-imp-widgets" type="checkbox" value="import_widgets" checked="">
							<label for="sntravel-imp-widgets"></label>
							<span><?php esc_html_e( 'Widgets', 'sntravel' ); ?></span>
						</span>
					</div>
					<?php if(!empty($plugins['revslider'])): ?>
					<div class="sntravel-col sntravel-col-6">
						<span class="sntravel-imp-opt">
							<input id="sntravel-imp-revslider" type="checkbox" value="import_slider" checked="">
							<label for="sntravel-imp-revslider"></label>
							<span><?php esc_html_e( 'Revslider', 'sntravel' ); ?></span>
						</span>
					</div>
						<?php endif; ?>
					<div class="sntravel-col sntravel-col-6">
						<span class="sntravel-imp-opt">
							<input id="sntravel-imp-settings" type="checkbox" value="import_settings" checked="">
							<label for="sntravel-imp-settings"></label>
							<span><?php esc_html_e( 'Settings', 'sntravel' ) ?></span>
						</span>
					</div>
				</div>
				<div class="sntravel-row" style="padding-top: 30px;">
					<div class="sntravel-col sntravel-col-12">
						<div class="sntravel-imp-skip-posts">
							<span class="sntravel-imp-opt-skip-posts" style="margin-bottom: 0; padding-left: 15px;">
								<input id="sntravel-imp-skip-posts-existen" name="skip_posts_existen" type="checkbox" value="skip-posts-existen">
								<label for="sntravel-imp-skip-posts-existen">
								<span><?php esc_html_e( 'Skip the posts existen, ( Default clear all content ).', 'sntravel' ); ?></span>
								</label>
							</span>
						</div>
						<div class="sntravel-imp-crop">
							<span class="sntravel-imp-opt-crop" style="margin-bottom: 0; padding-left: 15px;">
								<input id="sntravel-imp-crop-img" name="crop-img" type="checkbox" value="crop_img" checked="">
								<label for="sntravel-imp-crop-img"></label>
								<span><?php esc_html_e( 'Crop Image after import finish?', 'sntravel' ); ?></span>
							</span>
						</div>
						<button class="sntravel-import-btn" data-id="0">
							<span><?php esc_html_e( 'Import Demo', 'sntravel' ); ?></span>
						</button>
					</div>
				</div>
			</div>
		  
		</div>
	</div>
	<div class="sntravel-progress-popup sntravel-imp-popup-wrap">
		<div class="sntravel-imp-progress">
			<h6><?php esc_html_e( 'Importing...', 'sntravel' ); ?></h6>
			<div class="sntravel-progress importing"><?php esc_html_e( 'Working', 'sntravel' )?> <span>.</span><span>.</span><span>.</span></div>
			<div class="sntravel-progressbar">
				<div class="sntravel-progressbar-inner" style="width: 0%">
					<span class="sntravel-loader sntravel-progressbar-percentage"><?php esc_html_e( '0%', 'sntravel' ); ?></span>
				</div>
			</div>
		</div>
	</div> 
	<?php endif; ?>
</div>
