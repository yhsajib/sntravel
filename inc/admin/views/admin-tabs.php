<?php 
	$dashboard_page_url = admin_url( 'admin.php?page=pxlart' );
	if( isset( $_GET['page'] ) && 'pxlart' === sanitize_text_field($_GET['page']) ) {
		$dashboard_page_url = '';
	}
	$plugin_page_url = admin_url( 'admin.php?page=pxlart-plugins' );
	$import_demos_page_url = admin_url( 'admin.php?page=pxlart-import-demos' );

	$pxl_server_info = apply_filters( 'pxl_server_info', 
		[
			'video_url' => '',
			'demo_url' => '',
			'docs_url' => '',
			'support_url' => '']
		) ; 
?>
<nav class="sntravel-dsb-menubar">
	<?php 
	$favicon = sntravel()->get_theme_opt( 'favicon' );
	$logo_url = !empty($favicon['url']) ? $favicon['url'] : get_template_directory_uri() . '/inc/admin/assets/img/logo.png'; ?>
	<div class="sntravel-dsb-logo">
		<div class="sntravel-dsb-logo-inner">
			<img src="<?php echo esc_url($logo_url); ?>" alt="<?php echo esc_attr( sntravel()->get_name() ); ?>">
		</div>
		<div class="sntravel-dsb-logo-title">
			<h2><?php esc_html_e( 'Welcome to', 'sntravel' ); ?> <?php echo esc_attr( sntravel()->get_name() ).'!'; ?></h2>
			<span class="sntravel-v"><?php esc_html_e( 'Version', 'sntravel' ); ?> <?php echo esc_html(sntravel()->get_version()) ?></span>
		</div>
	</div>
	<div class="sntravel-dsb-menu">
		<ul class="sntravel-dsb-menu-left">
			<li class="<?php echo ( isset( $_GET['page'] ) && 'pxlart' === sanitize_text_field($_GET['page']) ) ? 'is-active' : ''; ?>">
				<a href="<?php echo esc_attr($dashboard_page_url); ?>">
					<span><?php echo sprintf( esc_html__( '%s Dashboard', 'sntravel' ), sntravel()->get_name()); ?></span>
				</a>
			</li>
			<li class="<?php echo ( isset( $_GET['page'] ) && 'pxlart-plugins' === sanitize_text_field($_GET['page']) ) ? 'is-active' : ''; ?>">
				<a href="<?php echo esc_url($plugin_page_url); ?>">
					<span><?php esc_html_e( 'Install Plugins', 'sntravel' ); ?></span>
				</a>
			</li>
			<li class="<?php echo ( isset( $_GET['page'] ) && 'pxlart-import-demos' === sanitize_text_field($_GET['page']) ) ? 'is-active' : ''; ?>">
				<a href="<?php echo esc_url($import_demos_page_url); ?>">
					<span><?php esc_html_e( 'Import Demo', 'sntravel' ); ?></span>
				</a>
			</li>
		</ul>
		<ul class="sntravel-dsb-menu-right">
			<li>
				<a href="<?php echo esc_url($pxl_server_info['video_url']) ?>" target="_blank">
					<span><?php esc_html_e( 'Videos tutorial', 'sntravel' ); ?></span>
				</a>
			</li>
			<li>
				<a href="<?php echo esc_url($pxl_server_info['support_url']) ?>" target="_blank">
					<span><?php esc_html_e( 'Support system', 'sntravel' ); ?></span>
				</a>
			</li>
			<li>
				<a href="<?php echo esc_url($pxl_server_info['demo_url']) ?>" target="_blank">
					<span><?php esc_html_e( 'Live Demo', 'sntravel' ); ?></span>
				</a>
			</li>
			 
			<li>
				<a href="<?php echo esc_url($pxl_server_info['docs_url']) ?>" target="_blank">
					<i class="sntravel-icn-ess icon-md-help-circle"></i>
					<span><?php esc_html_e( 'Documentations', 'sntravel' ); ?></span>
				</a>
			</li>
		</ul>
	</div>
</nav> 
