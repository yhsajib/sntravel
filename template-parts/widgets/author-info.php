<?php
defined('ABSPATH') or exit(-1);

/**
 * Author Information widgets
 *
 */

if (!function_exists('pxl_register_wp_widget')) return;
add_action('widgets_init', function () {
    pxl_register_wp_widget('PXL_Author_Info_Widget');
});
class PXL_Author_Info_Widget extends WP_Widget
{

    function __construct()
    {
        parent::__construct(
            'pxl_author_info_widget',
            esc_html__('* Pxl Author Information', 'sntravel'),
            array('description' => esc_html__('Show Author Information', 'sntravel'),)
        );
    }

    function widget($args, $instance)
    {
        extract($args);
        $author_image_id = isset($instance['author_image']) ? (!empty($instance['author_image']) ? $instance['author_image'] : '') : '';
        $author_image_url = wp_get_attachment_image_url($author_image_id, '');
        $author_name = isset($instance['author_name']) ? (!empty($instance['author_name']) ? $instance['author_name'] : '') : '';
        $author_position = isset($instance['author_position']) ? (!empty($instance['author_position']) ? $instance['author_position'] : '') : '';
        $description = isset($instance['description']) ? (!empty($instance['description']) ? $instance['description'] : '') : '';
        //* Social Info
        $icon_facebook = 'pxli-facebook-f';
        $link_facebook = isset($instance['link_facebook']) ? $instance['link_facebook'] : '';
        $icon_twitter = 'pxli-twitter';
        $link_twitter = isset($instance['link_twitter']) ? $instance['link_twitter'] : '';
        $icon_telegram = 'pxli-telegram';
        $link_telegram = isset($instance['link_telegram']) ? $instance['link_telegram'] : '';
        $icon_tiktok = 'pxli-tiktok';
        $link_tiktok = isset($instance['link_tiktok']) ? $instance['link_tiktok'] : '';
        $icon_skype = 'pxli-skype';
        $link_skype = isset($instance['link_skype']) ? $instance['link_skype'] : '';
        $icon_instagram = 'pxli-instagram1';
        $link_instagram = isset($instance['link_instagram']) ? $instance['link_instagram'] : '';
        $icon_youtube = 'pxli-youtube-brands';
        $link_youtube = isset($instance['link_youtube']) ? $instance['link_youtube'] : '';
        $icon_pinterest = 'pxli-pinterest-p';
        $link_pinterest = isset($instance['link_pinterest']) ? $instance['link_pinterest'] : '';
        $social_list = array($link_facebook, $link_twitter, $link_telegram, $link_tiktok, $link_skype, $link_instagram, $link_youtube, $link_pinterest);
?>
        <div class="sntravel-author-info widget">
            <div class="content-inner">
                <div class="author-image">
                    <img src="<?php echo esc_url($author_image_url) ?>" alt="<?php echo esc_attr__('Author Image', 'sntravel'); ?>">
                </div>
                <div class="author-info">
                    <?php if (!empty($author_position)) : ?>
                        <h5 class="author-position">
                            <?php echo esc_html($author_position); ?>
                        </h5>
                    <?php endif; ?>
                    <?php if (!empty($author_name)) : ?>
                        <h4 class="author-name"><?php echo esc_html($author_name); ?></h4>
                    <?php endif; ?>
                    <?php if (!empty($description)) : ?>
                        <div class="author-desc">
                            <?php
                            if (function_exists('lcb_print_html')) {
                                lcb_print_html(nl2br($description));
                            } else {
                                echo wp_kses_post($description);
                            }
                            ?>
                        </div>
                    <?php endif; ?>
                    <ul class="author-social">
                        <?php
                        if ($link_facebook != '') {
                            echo '<li><a class="social-facebook" target="_blank" href="' . esc_url($link_facebook) . '"><i class="' . $icon_facebook . '"></i></a></li>';
                        }
                        if ($link_twitter != '') {
                            echo '<li><a class="social-twitter" target="_blank" href="' . esc_url($link_twitter) . '"><i class="' . $icon_twitter . '"></i></a></li>';
                        }
                        if ($link_telegram != '') {
                            echo '<li><a class="social-telegram" target="_blank" href="' . esc_url($link_telegram) . '"><i class="' . $icon_telegram . '"></i></a></li>';
                        }
                        if ($link_tiktok != '') {
                            echo '<li><a class="social-tiktok" target="_blank" href="' . esc_url($link_tiktok) . '"><i class="' . $icon_tiktok . '"></i></a></li>';
                        }
                        if ($link_skype != '') {
                            echo '<li><a class="social-skype" target="_blank" href="' . esc_url($link_skype) . '"><i class="' . $icon_skype . '"></i></a></li>';
                        }
                        if ($link_instagram != '') {
                            echo '<li><a class="social-instagram" target="_blank" href="' . esc_url($link_instagram) . '"><i class="' . $icon_instagram . '"></i></a></li>';
                        }
                        if ($link_youtube != '') {
                            echo '<li><a class="social-youtube" target="_blank" href="' . esc_url($link_youtube) . '"><i class="' . $icon_youtube . '"></i></a></li>';
                        }
                        if ($link_pinterest != '') {
                            echo '<li><a class="social-pinterest" target="_blank" href="' . esc_url($link_pinterest) . '"><i class="' . $icon_pinterest . '"></i></a></li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    <?php
    }

    function update($new_instance, $old_instance)
    {
        $instance = $old_instance;
        $instance['author_image'] = strip_tags($new_instance['author_image']);
        $instance['author_position'] = strip_tags($new_instance['author_position']);
        $instance['author_name'] = strip_tags($new_instance['author_name']);
        $instance['description'] = strip_tags($new_instance['description']);
        //* Social Info
        $instance['link_facebook'] = strip_tags($new_instance['link_facebook']);
        $instance['link_twitter'] = strip_tags($new_instance['link_twitter']);
        $instance['link_telegram'] = strip_tags($new_instance['link_telegram']);
        $instance['link_tiktok'] = strip_tags($new_instance['link_tiktok']);
        $instance['link_skype'] = strip_tags($new_instance['link_skype']);
        $instance['link_instagram'] = strip_tags($new_instance['link_instagram']);
        $instance['link_youtube'] = strip_tags($new_instance['link_youtube']);
        $instance['link_pinterest'] = strip_tags($new_instance['link_pinterest']);
        return $instance;
    }

    function form($instance)
    {
        $author_image = isset($instance['author_image']) ? esc_attr($instance['author_image']) : '';
        $author_name = isset($instance['author_name']) ? esc_html($instance['author_name']) : '';
        $author_position = isset($instance['author_position']) ? esc_html($instance['author_position']) : '';
        $description = isset($instance['description']) ? esc_html($instance['description']) : '';
        //* Social Info
        $link_facebook = isset($instance['link_facebook']) ? esc_attr($instance['link_facebook']) : '';
        $link_twitter = isset($instance['link_twitter']) ? esc_attr($instance['link_twitter']) : '';
        $link_telegram = isset($instance['link_telegram']) ? esc_attr($instance['link_telegram']) : '';
        $link_tiktok = isset($instance['link_tiktok']) ? esc_attr($instance['link_tiktok']) : '';
        $link_skype = isset($instance['link_skype']) ? esc_attr($instance['link_skype']) : '';
        $link_instagram = isset($instance['link_instagram']) ? esc_attr($instance['link_instagram']) : '';
        $link_youtube = isset($instance['link_youtube']) ? esc_attr($instance['link_youtube']) : '';
        $link_pinterest = isset($instance['link_pinterest']) ? esc_attr($instance['link_pinterest']) : '';

    ?>
        <div class="sntravel-image-wrap">
            <label for="<?php echo esc_url($this->get_field_id('author_image')); ?>"><?php esc_html_e('Author Image', 'sntravel'); ?></label>
            <input type="hidden" class="widefat hide-image-url" id="<?php echo esc_attr($this->get_field_id('author_image')); ?>" name="<?php echo esc_attr($this->get_field_name('author_image')); ?>" value="<?php echo esc_attr($author_image) ?>" />
            <div class="sntravel-show-image">
                <?php
                if ($author_image != "") {
                ?>
                    <img src="<?php echo wp_get_attachment_image_url($author_image) ?>">
                <?php
                }
                ?>
            </div>
            <?php
            if ($author_image != "") {
            ?>
                <a href="#" class="sntravel-select-image" style="display: none;"><?php esc_html_e('Select Image', 'sntravel'); ?></a>
                <a href="#" class="sntravel-remove-image"><?php esc_html_e('Remove Image', 'sntravel'); ?></a>
            <?php
            } else {
            ?>
                <a href="#" class="sntravel-select-image"><?php esc_html_e('Select Image', 'sntravel'); ?></a>
                <a href="#" class="sntravel-remove-image" style="display: none;"><?php esc_html_e('Remove Image', 'sntravel'); ?></a>
            <?php
            }
            ?>
        </div>
        <p>
            <label for="<?php echo esc_url($this->get_field_id('author_position')); ?>"><?php esc_html_e('Author Position', 'sntravel'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('author_position')); ?>" name="<?php echo esc_attr($this->get_field_name('author_position')); ?>" type="text" value="<?php echo esc_attr($author_position); ?>" />
        </p>

        <p>
            <label for="<?php echo esc_url($this->get_field_id('author_name')); ?>"><?php esc_html_e('Author Name', 'sntravel'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('author_name')); ?>" name="<?php echo esc_attr($this->get_field_name('author_name')); ?>" type="text" value="<?php echo esc_attr($author_name); ?>" />
        </p>

        <p>
            <label for="<?php echo esc_url($this->get_field_id('description')); ?>"><?php esc_html_e('Description', 'sntravel'); ?></label>
            <textarea class="widefat" rows="4" cols="20" id="<?php echo esc_attr($this->get_field_id('description')); ?>" name="<?php echo esc_attr($this->get_field_name('description')); ?>"><?php echo wp_kses_post($description); ?></textarea>
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id('link_facebook')); ?>"><?php esc_html_e('Link Facebook:', 'sntravel'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('link_facebook')); ?>" name="<?php echo esc_attr($this->get_field_name('link_facebook')); ?>" type="text" value="<?php echo esc_attr($link_facebook); ?>" />
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id('link_twitter')); ?>"><?php esc_html_e('Link Twitter:', 'sntravel'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('link_twitter')); ?>" name="<?php echo esc_attr($this->get_field_name('link_twitter')); ?>" type="text" value="<?php echo esc_attr($link_twitter); ?>" />
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id('link_telegram')); ?>"><?php esc_html_e('Link Telegram:', 'sntravel'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('link_telegram')); ?>" name="<?php echo esc_attr($this->get_field_name('link_telegram')); ?>" type="text" value="<?php echo esc_attr($link_telegram); ?>" />
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id('link_tiktok')); ?>"><?php esc_html_e('Link Tiktok:', 'sntravel'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('link_tiktok')); ?>" name="<?php echo esc_attr($this->get_field_name('link_tiktok')); ?>" type="text" value="<?php echo esc_attr($link_tiktok); ?>" />
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id('link_skype')); ?>"><?php esc_html_e('Link Skype:', 'sntravel'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('link_skype')); ?>" name="<?php echo esc_attr($this->get_field_name('link_skype')); ?>" type="text" value="<?php echo esc_attr($link_skype); ?>" />
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id('link_instagram')); ?>"><?php esc_html_e('Link Instagram:', 'sntravel'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('link_instagram')); ?>" name="<?php echo esc_attr($this->get_field_name('link_instagram')); ?>" type="text" value="<?php echo esc_attr($link_instagram); ?>" />
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id('link_youtube')); ?>"><?php esc_html_e('Link Youtube:', 'sntravel'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('link_youtube')); ?>" name="<?php echo esc_attr($this->get_field_name('link_youtube')); ?>" type="text" value="<?php echo esc_attr($link_youtube); ?>" />
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id('link_pinterest')); ?>"><?php esc_html_e('Link Pinterest:', 'sntravel'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('link_pinterest')); ?>" name="<?php echo esc_attr($this->get_field_name('link_pinterest')); ?>" type="text" value="<?php echo esc_attr($link_pinterest); ?>" />
        </p>
<?php
    }
}
