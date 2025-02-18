<?php
/**
 * @package Sntravel
 */

$archive_style = sntravel()->get_theme_opt('archive_post_layout', 'layout-1');

$archive_readmore = sntravel()->get_theme_opt('archive_readmore', '0');
$archive_readmore_btn_style = sntravel()->get_theme_opt('archive_readmore_button_style', 'btn_outline_secondary');
$archive_readmore_text = sntravel()->get_theme_opt( 'archive_readmore_text', esc_html__('Read more', 'sntravel') );
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('sntravel-archive-post search-results-post'); ?>>
    <div class="post-content">
        <?php
        if ($archive_style == 'layout-2')
            sntravel()->blog->get_archive_meta_luxury();
        else
            sntravel()->blog->get_archive_meta();
        ?>
        <h3 class="post-title">
            <a href="<?php echo esc_url( get_permalink()); ?>" title="<?php the_title_attribute(); ?>">
                <?php if(is_sticky()): ?>
                    <i class="pxli-star"></i>
                <?php endif; ?>
                <?php the_title(); ?>
            </a>
        </h3>
        <div class="post-excerpt">
            <?php
                sntravel()->blog->get_excerpt();
                wp_link_pages( array(
                    'before'      => '<div class="page-links">',
                    'after'       => '</div>',
                    'link_before' => '<span>',
                    'link_after'  => '</span>',
                ) );
            ?>
        </div>
        <?php if( $archive_readmore == '1'): ?>
            <div class="post-readmore">
                <a class="btn <?php echo esc_html($archive_readmore_btn_style); ?>" href="<?php echo esc_url( get_permalink()); ?>">
                    <span><?php pxl_print_html($archive_readmore_text); ?></span>
                </a>
            </div>
        <?php endif; ?>
         
    </div>
</article><!-- #post -->