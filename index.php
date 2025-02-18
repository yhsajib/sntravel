<?php
/**
 * @package Sntravel
 */
get_header();

$archive_style = sntravel()->get_theme_opt('archive_post_layout', 'layout-1');
$pxl_sidebar = sntravel()->get_sidebar_args(['type' => 'blog', 'content_col'=> '8']); // type: blog, post, page, shop, product

?>
<div class="container">
    <div class="row <?php echo esc_attr($pxl_sidebar['wrap_class']) ?>" >
        <div id="sntravel-content-area" class="<?php echo esc_attr($pxl_sidebar['content_class']) ?>">
            <?php if ( have_posts() ): ?>
            <main id="sntravel-content-main" class="sntravel-content-main content-archive <?php echo esc_attr($archive_style); ?>">
                <?php
                    while ( have_posts() ) {
                        the_post();
                        get_template_part( 'template-parts/content/content', $archive_style);
                    }
                ?>
            </main>
            <?php 
                sntravel()->page->get_pagination();
            else:
                get_template_part( 'template-parts/content/content', 'none' );
            endif; ?>
        </div>
        <?php if ($pxl_sidebar['sidebar_class']) : ?>
            <div id="sntravel-sidebar-area" class="<?php echo esc_attr($pxl_sidebar['sidebar_class']) ?>">
                <div class="sidebar-sticky-wrap">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php get_footer();
