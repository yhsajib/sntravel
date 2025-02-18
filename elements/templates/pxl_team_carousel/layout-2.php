<?php
use Elementor\Icons_Manager;
Icons_Manager::enqueue_shim();
$default_settings = [
    'content_list_layout2' => [],
];
$settings = array_merge($default_settings, $settings);
extract($settings);

$img_size = !empty( $img_size ) ? $img_size : '570x570'; 

$opts = [
    'slide_direction'               => 'vertical',
    'slide_percolumn'               => 1, 
    'slide_mode'                    => 'slide', 
    'slides_to_show_xxl'            => (float)$widget->get_setting('col_xxl', 4), 
    'slides_to_show'                => (float)$widget->get_setting('col_xl', 4), 
    'slides_to_show_lg'             => (float)$widget->get_setting('col_lg', 3), 
    'slides_to_show_md'             => (float)$widget->get_setting('col_md', 3), 
    'slides_to_show_sm'             => (float)$widget->get_setting('col_sm', 2), 
    'slides_to_show_xs'             => (float)$widget->get_setting('col_xs', 1), 
    'slides_to_scroll'              => (int)$widget->get_setting('slides_to_scroll', 1), 
    'slides_gutter'                 => (int)$widget->get_setting('space_between', 0), 
    'arrow'                         => true,
    'dots'                          => true,
    'dots_style'                    => 'bullets',
    'autoplay'                      => (bool)$widget->get_setting('autoplay', false),
    'pause_on_hover'                => (bool)$widget->get_setting('pause_on_hover', true),
    'pause_on_interaction'          => true,
    'delay'                         => (int)$widget->get_setting('autoplay_speed', 5000),
    'loop'                          => (bool)$widget->get_setting('infinite', false),
    'speed'                         => (int)$widget->get_setting('speed', 500),
    'auto_height'                   => true,
];
  

$widget->add_render_attribute( 'carousel', [
    'class'         => 'sntravel-swiper-container overflow-hidden',
    'dir'           => is_rtl() ? 'rtl' : 'ltr',
    'data-settings' => wp_json_encode($opts)
]);

?>
<?php if(isset($content_list_layout2) && !empty($content_list_layout2) && count($content_list_layout2)): ?>
    <div class="sntravel-swiper-slider sntravel-team sntravel-team-carousel layout-<?php echo esc_attr($settings['layout'])?>">
        <div class="sntravel-swiper-slider-wrap sntravel-carousel-inner relative">
            <div <?php sntravel_print_html($widget->get_render_attribute_string( 'carousel' )); ?>>
                <div class="sntravel-swiper-wrapper swiper-wrapper">
                    <?php foreach ($content_list_layout2 as $key => $value):
                        $title_layout2    = isset($value['title_layout2']) ? $value['title_layout2'] : '';
                        $sub_title = isset($value['sub_title']) ? $value['sub_title'] : '';
                        $description_layout2 = isset($value['description_layout2']) ? $value['description_layout2'] : '';
                        $image_layout2    = isset($value['image_layout2']) ? $value['image_layout2'] : [];
                        $link_layout2     = isset($value['link_layout2']) ? $value['link_layout2'] : '';
                        $image_signature    = isset($value['image_signature']) ? $value['image_signature'] : [];
                        $thumbnail = '';
                        if(!empty($image_layout2)) {
                            $img = sntravel_get_image_by_size( array(
                                'attach_id'  => $image_layout2['id'],
                                'thumb_size' => $img_size,
                                'class' => 'no-lazyload',
                            ));
                            $thumbnail = $img['thumbnail'];
                        }
                        $thumbnail_two = '';
                        if (!empty($image_signature)) {
                            $img_two = sntravel_get_image_by_size(array(
                                'attach_id'  => $image_signature['id'],
                                'thumb_size' => 'full',
                                'class' => 'no-lazyload',
                            ));
                            $thumbnail_two = $img_two['thumbnail'];
                        }
                        $link_key = $widget->get_repeater_setting_key( 'link_layout2', 'content_list_layout2', $key );
                        if ( ! empty( $link_layout2['url'] ) ) {
                            $widget->add_render_attribute( $link_key, 'href', $link_layout2['url'] );

                            if ( $link_layout2['is_external'] ) {
                                $widget->add_render_attribute( $link_key, 'target', '_blank' );
                            }

                            if ( $link_layout2['nofollow'] ) {
                                $widget->add_render_attribute( $link_key, 'rel', 'nofollow' );
                            }
                            if ( ! empty( $link_layout2['custom_attributes'] ) ) {
                                // Custom URL attributes should come as a string of comma-delimited key|value pairs
                                $custom_attributes = Utils::parse_custom_attributes( $link_layout2['custom_attributes'] );
                                $widget->add_render_attribute( $link_key, $custom_attributes);
                            }
                        }
                        $link_attributes = $widget->get_render_attribute_string( $link_key );
                        $current_slide = $key + 1;
                        ?>
                        <div class="sntravel-swiper-slide swiper-slide">
                            <div class="item-inner">         
                                <div class="item-content">
                                    <div class="item-sub-title"><?php echo sntravel_print_html($sub_title); ?></div>
                                    <h3 class="item-title">
                                            <?php echo sntravel_print_html($title_layout2); ?>
                                    </h3>
                                    <?php if(!empty($description_layout2)) { ?>
                                        <div class="item-description"><?php echo sntravel_print_html($description_layout2); ?></div>
                                    <?php } ?>
                                    <div class="box-sosial-background">
                                        <?php if(isset($content_sosial) && !empty($content_sosial) && count($content_sosial) > 0): ?>
                                            <div class="box-sosial">
                                                <?php foreach ($content_sosial as $key => $item):
                                                    $sosial_text    = isset($item['sosial_text']) ? $item['sosial_text'] : '';
                                                    $link_sosial     = isset($item['link_sosial']) ? $item['link_sosial'] : '';
                                                    $link_key_two = $widget->get_repeater_setting_key( 'link_sosial', 'content_sosial', $key );
                                                    $show_in = isset($item['show_in']) ? $item['show_in'] : '';
                                                    $array = explode('-', $show_in);
                                                    $array = array_map('intval', $array);
                                                    $widget->remove_render_attribute( $link_key_two, 'href' );
                                                    if ( ! empty( $link_sosial['url'] ) ) {
                                                        $widget->add_render_attribute( $link_key_two, 'href', $link_sosial['url'] );
                            
                                                        if ( $link_sosial['is_external'] ) {
                                                            $widget->add_render_attribute( $link_key_two, 'target', '_blank' );
                                                        }
                            
                                                        if ( $link_sosial['nofollow'] ) {
                                                            $widget->add_render_attribute( $link_key_two, 'rel', 'nofollow' );
                                                        }
                                                        if ( ! empty( $link_sosial['custom_attributes'] ) ) {
                                                            // Custom URL attributes should come as a string of comma-delimited key|value pairs
                                                            $custom_attributes = Utils::parse_custom_attributes( $link_sosial['custom_attributes'] );
                                                            $widget->add_render_attribute( $link_key_two, $custom_attributes);
                                                        }
                                                    }
                                                    $link_attributes_two = $widget->get_render_attribute_string( $link_key_two );
                                                    ?>
                                                    <?php 
                                                    if (in_array($current_slide, $array) && !empty($sosial_text)):?>
                                                       <?php if ( ! empty( $link_sosial['url'] ) ): ?><a <?php echo implode( ' ', [ $link_attributes_two ] ); ?>><?php endif; ?>
                                                            <span class="item-sosial"><?php echo sntravel_print_html($sosial_text); ?></span>
                                                        <?php if ( ! empty( $link_sosial['url'] ) ): ?></a><?php endif; ?>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </div>
                                            <?php if(!empty($thumbnail_two)) { ?>
                                                <div class="item-signature">
                                                    <div class="image-second">
                                                            <?php echo wp_kses_post($thumbnail_two); ?>
                                                    </div>
                                                </div>
                                            <?php } ?> 
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <?php if(!empty($thumbnail)) { ?>
                                    <div class="item-image">
                                        <div class="image-wrap scale-hover-x">
                                            <?php if ( ! empty( $link_layout2['url'] ) ): ?><a <?php echo implode( ' ', [ $link_attributes ] ); ?>><?php endif; ?>
                                                <?php echo wp_kses_post($thumbnail); ?>
                                            <?php if ( ! empty( $link_layout2['url'] ) ): ?></a><?php endif; ?>
                                        </div>
                                    </div>
                                <?php } ?> 
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>    
            </div>
            <div class="sntravel-swiper-arrows style-arrow-chef nav-vertical-out">
                <div class="sntravel-swiper-arrow sntravel-swiper-arrow-prev"><span class="sntraveli-down-arrow-long"></span><span class="arrow-text">previours</span></div>
                <div class="sntravel-swiper-arrow sntravel-swiper-arrow-next"><span class="arrow-text">next</span><span class="sntraveli-down-arrow-long"></span></div>
            </div>
            <div class="sntravel-swiper-dots"></div>
        </div>
    </div>
<?php endif; ?>