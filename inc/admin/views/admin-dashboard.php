<main>

	<div class="sntravel-dashboard-wrap">

		<?php include_once( get_template_directory() . '/inc/admin/views/admin-tabs.php' ); ?>
	 
		<div class="sntravel-row">
			<div class="sntravel-col sntravel-col-4">
				<div class="sntravel-dsb-box-wrap sntravel-dsb-box featured-box">
					<h4 class="sntravel-dsb-title-heading"><?php esc_html_e( 'Unlock Premium Features', 'sntravel' ); ?></h4>
					<?php include_once( get_template_directory() . '/inc/admin/views/admin-featured.php' ); ?>
				</div>
			</div>    
		 	<div class="sntravel-col sntravel-col-4">
		 		<div class="sntravel-dsb-box-wrap sntravel-dsb-box activation-box">
			 		<h4 class="sntravel-dsb-title-heading"><?php esc_html_e( 'Theme Activation', 'sntravel' ); ?></h4>
					<?php include_once( get_template_directory() . '/inc/admin/views/admin-registration.php' ); ?>
				</div>
			</div>	
			<div class="sntravel-col sntravel-col-4">
				<div class="sntravel-dsb-box-wrap sntravel-dsb-box system-info-box">
					<h4 class="sntravel-dsb-title-heading"><?php esc_html_e( 'System status', 'sntravel' ); ?></h4>
					<?php include_once( get_template_directory() . '/inc/admin/views/admin-system-info.php' ); ?>
				</div>
			</div> 
	 		 
		</div> 
 
	</div> 

</main>
