<?php
	$style = $widget->get_setting('style', 'style-1');
	$draw = $widget->get_setting('draw', '');
?>

<div class="sntravel-widget-divider">
	<div class="sntravel-divider <?php echo esc_html($style); ?><?php echo esc_html($draw) == 'true' ? ' sntravel-scroll' : ''; ?>">
		<?php if ($style == 'style-2') : ?>
			<div class="diamond-icon"></div>
		<?php endif; ?>
	</div>
</div>