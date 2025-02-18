<?php
get_header();
if (is_singular('product')){
    $sntravel_sidebar = sntravel()->get_sidebar_args(['type' => 'product', 'content_col'=> '8']); // type: blog, post, page, shop, product
} else {
    $sntravel_sidebar = sntravel()->get_sidebar_args(['type' => 'shop', 'content_col'=> '8']); // type: blog, post, page, shop, product
}

$product_layout = sntravel()->get_theme_opt('product_layout', 'layout-1');
?>
    <div class="container">
        <div class="row <?php echo esc_attr($sntravel_sidebar['wrap_class']); ?> <?php echo 'sntravel-shop-'.esc_attr($product_layout); ?>">
            <div id="sntravel-content-area" class="<?php echo esc_attr($sntravel_sidebar['content_class']) ?>">
                <main id="sntravel-content-main" class="sntravel-content-main">
                    <?php
                    if ( is_singular( 'product' ) ) {
                        while ( have_posts() ) :
                            the_post();
                            wc_get_template_part( 'content', 'single-product' );
                        endwhile;
                    } else {
                        ?>
                        <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
                            <h1 class="page-title"><?php woocommerce_page_title(); ?></h1>
                        <?php endif; ?>
                        <?php do_action( 'woocommerce_archive_description' ); ?>
                        <?php if ( woocommerce_product_loop() ) : ?>
                            <?php do_action( 'woocommerce_before_shop_loop' ); ?>
                            <?php woocommerce_product_loop_start(); ?>
                            <?php if ( wc_get_loop_prop( 'total' ) ) : ?>
                                <?php while ( have_posts() ) : ?>
                                    <?php the_post(); ?>
                                    <?php wc_get_template_part( 'sntravel-content-product', esc_attr($product_layout) ); ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                            <?php woocommerce_product_loop_end(); ?>
                            <?php do_action( 'woocommerce_after_shop_loop' ); ?>
                        <?php
                        else :
                            do_action( 'woocommerce_no_products_found' );
                        endif;
                    }
                    ?>
                </main>
            </div>

            <?php if ($sntravel_sidebar['sidebar_class']) : ?>
                <aside id="sntravel-sidebar-area" class="<?php echo esc_attr($sntravel_sidebar['sidebar_class']) ?>">
                    <div class="sidebar-sticky-wrap">
                        <?php get_sidebar(); ?>
                    </div>
                </aside>
            <?php endif; ?>
        </div>
    </div>
<?php get_footer();