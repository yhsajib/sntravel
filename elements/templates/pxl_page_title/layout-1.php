<?php
if (!class_exists('Sntravel_Page_Title')) return;
$titles = sntravel()->pagetitle->get_title();
$style = $widget->get_setting('style', 'style-1');
?>

<div class="sntravel-pt-wrap <?php echo esc_attr($style); ?>">
    <h1 class="main-title">
        <span><?php sntravel_print_html($titles['title']) ?></span>
    </h1>
</div>