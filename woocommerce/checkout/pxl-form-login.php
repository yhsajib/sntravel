<?php
defined( 'ABSPATH' ) || exit;

if ( is_user_logged_in() || 'no' === get_option( 'woocommerce_enable_checkout_login_reminder' ) ) {
	return;
}

?>

<button class="checkout-login-btn-toggle btn-alt" data-target=".sntravel-login-form-checkout"><span class="sntravel-icon lnil lnil-user"></span><?php echo esc_html__( 'Log In Your Account', 'sntravel' ) ?></button>

<div class="sntravel-login-form-checkout pos-fixed">
    <div class="sntravel-hidden-template-wrap">
      	<div class="sntravel-panel-header">
            <div class="panel-header-inner d-flex justify-content-between">
                <span class="sntravel-title h4"><?php esc_html_e( 'Sign In', 'sntravel' ) ?></span>
                <span class="sntravel-close lnil lnil-close" title="<?php echo esc_attr__( 'Close', 'sntravel' ) ?>"></span>
            </div>
        </div>
        <div class="sntravel-panel-content custom_scroll">
           	<?php woocommerce_login_form( array( 'message'  => '', 'redirect' => wc_get_checkout_url(), 'hidden'   => false)); ?>
        </div>
    </div>
</div> 
 


