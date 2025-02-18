<?php
	$dev_mode = apply_filters( 'pxl_set_dev_mode', (defined('DEV_MODE') && DEV_MODE)) ;
	 
	$license = trim( get_option( sntravel()->get_slug() . '_purchase_code' ) );

	$active = get_option( sntravel()->get_slug() . '_purchase_code_status', false ) === 'valid';
	if( $dev_mode === true) $active = true;

	$register = new Sntravel_Register;
  
?>
<?php if ($active): ?> 
	<div class="sntravel-dsb-box-head"> 
		<div class="sntravel-dsb-confirmation success">
			<h6><?php echo esc_html__( 'Thanks for the verification!', 'sntravel' ) ?></h6>
			<p><?php echo esc_html__( 'You can now enjoy and build great websites.', 'sntravel' ) ?></p>
		</div> 

		<div class="sntravel-dsb-deactive">
			<form method="POST" action="<?php echo admin_url( 'admin.php?page=pxlart' )?>">
				<input type="hidden" name="action" value="removekey"/>
				<button class="btn button" type="submit"><?php esc_html_e( 'Remove Purchase Code', 'sntravel' ) ?></button>
			</form>
		</div> 
	</div> 
<?php else: ?>
	<?php $register->messages(); ?>
	  
<?php endif; ?>
 