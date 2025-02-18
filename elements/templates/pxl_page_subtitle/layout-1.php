<?php
if (!class_exists('Sntravel_Page_Title')) return;
$titles = sntravel()->pagetitle->get_title();
if ( \Elementor\Plugin::$instance->editor->is_edit_mode() ) {
    $titles['sub_title'] = "Subtitle will get from page settings";
}
?>
<div class="sntravel-pt-wrap">
    <div class="sub-title">
        <?php sntravel_print_html($titles['sub_title']) ?>
    </div>
</div>
