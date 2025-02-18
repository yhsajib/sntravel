<?php
if (!class_exists('Sntravel_Page_Title')) return;
$titles = sntravel()->pagetitle->get_title();
if ( \Elementor\Plugin::$instance->editor->is_edit_mode() ) {
    $titles['sub_title'] = "Subtitle will get from page settings";
}
?>
<div class="pxl-pt-wrap">
    <div class="sub-title">
        <?php pxl_print_html($titles['sub_title']) ?>
    </div>
</div>
