<?php
$default_settings = [
    'text_color' => ''
];

$settings = array_merge($default_settings, $settings);
extract($settings);
  
$editor_content = $widget->get_settings_for_display( 'text_editor' );
$editor_content = $widget->parse_text_editor( $editor_content );

$dropcap = $widget->get_setting('dropcap','false');

$widget->add_render_attribute( 'text_editor_wrap', 'id', pxl_get_element_id($settings));
$widget->add_render_attribute( 'text_editor_wrap', 'class', ['sntravel-text-editor-wrap d-flex']);
$widget->add_render_attribute( 'text_editor', 'class', [ 'sntravel-text-editor', 'elementor-clearfix' ] );
$widget->add_inline_editing_attributes( 'text_editor', 'advanced' );
if( !empty($settings['split_text_anm']) ){
    $widget->add_render_attribute( 'text_editor', 'class', 'sntravel-split-text '.$settings['split_text_anm']);
}
if ( $settings['hyphens'] == 'true') {
    $widget->add_render_attribute( 'text_editor', 'class', 'hyphens-auto');
}

?>
<div <?php pxl_print_html($widget->get_render_attribute_string( 'text_editor_wrap' )); ?> >
    <div <?php echo ''.$widget->get_render_attribute_string( 'text_editor' ); ?>>
        <?php if($dropcap == 'true') {
            ?>
            <span class="sntravel-dropcap"><?php pxl_print_html($editor_content);?></span>
            <?php
        } else {
             pxl_print_html($editor_content);
        } ?>
    </div>
</div>