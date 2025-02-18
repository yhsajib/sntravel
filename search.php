<?php
/**
 *
 * @package Sntravel
 */
get_header();

$sntravel_sidebar_pos = sntravel()->get_theme_opt( 'blog_sidebar_pos', 'right' );
$sntravel_sidebar = sntravel()->get_sidebar_args(['type' => 'blog', 'content_col'=> '8']); // type: blog, post, page, shop, product
$archive_style = sntravel()->get_theme_opt('archive_post_layout', 'layout-1');

?>
<div class="container">
    <div class="row <?php echo esc_attr($sntravel_sidebar['wrap_class']) ?>">
        <div id="sntravel-content-area" class="<?php echo esc_attr($sntravel_sidebar['content_class']) ?>">
            <?php if ( have_posts() ): ?>
            <main id="sntravel-content-main" class="sntravel-content-main <?php echo esc_attr($archive_style); ?>">
                <?php 
                    while ( have_posts() ) {
                        the_post();
                        get_template_part( 'template-parts/content/content', 'search' );
                    }
                ?>
            </main>
            <?php 
                sntravel()->page->get_pagination();
            else:
                get_template_part( 'template-parts/content/content', 'none' );
            endif; ?>
        </div>
        <?php if ($sntravel_sidebar['sidebar_class']) : ?>
            <div id="sntravel-sidebar-area" class="<?php echo esc_attr($sntravel_sidebar['sidebar_class']) ?>">
                <div class="sidebar-sticky-wrap">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php get_footer();
