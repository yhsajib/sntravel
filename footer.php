<?php
/**
 * @package Sntravel
 */
$custom_cursor 		= sntravel()->get_theme_opt( 'custom_cursor', false );
$drag_cursor   		= sntravel()->get_theme_opt( 'drag_cursor', false );
$drag_cursor_text   = sntravel()->get_theme_opt( 'drag_cursor_text', 'Drag' );
?>
</div><!-- #main -->
<?php sntravel()->footer->getFooter(); ?>
</div>
<?php //do_action('sntravel_anchor_target') 
	basilico_action('anchor_target');
?>
<?php wp_footer(); ?>
<?php if ($custom_cursor) : ?>
	<div class="sntravel-cursor"></div>
<?php endif; ?>
</body>
</html>
