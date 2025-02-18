<div class="sntravel-testimonial-single layout1">
    <?php
    if( !empty($settings['selected_icon'])){
        echo '<div class="sntravel-testimonial-icon">';
        \Elementor\Icons_Manager::render_icon( $settings['selected_icon'], [ 'aria-hidden' => 'true', 'class' => '' ], 'span' );
        echo '</div>';
    }
    ?>
    <div class="sntravel-testimonial-content">
        <?php
        if(!empty($settings['tt_content'])){
            ?>
            <div class="client-said"><?php pxl_print_html($settings['tt_content']); ?></div>
            <?php
        }
        ?>
        <div class="client-info">
            <?php
            if(!empty($settings['tt_description'])){
                ?>
                <div class="client-description"><?php pxl_print_html($settings['tt_description']); ?></div>
                <?php
            }
            ?>
            <?php if(!empty($settings['rating']) && $settings['rating'] != 'none') : ?>
                <div class="item-rating <?php echo esc_attr($settings['rating']); ?>">
                    <i class="pxli-star1"></i>
                    <i class="pxli-star1"></i>
                    <i class="pxli-star1"></i>
                    <i class="pxli-star1"></i>
                    <i class="pxli-star1"></i>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
