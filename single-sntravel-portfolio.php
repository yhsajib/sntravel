<?php
/**
 * @package Sntravel
 */
get_header();
if(class_exists('\Elementor\Plugin')){
    $id = get_the_ID();
    if ( is_singular() && \Elementor\Plugin::$instance->documents->get( $id )->is_built_with_elementor()) {
        $classes = 'elementor-container sntravel-page-content';
    } else {
        $classes = 'container';
    }
} else {
    $classes = 'container';
}
?>
<div class="<?php echo esc_attr($classes);?> sntravel-content-container">
    <div class="row">
        <div id="sntravel-content-area" class="col-12">
            <main id="sntravel-content-main" class="sntravel-content-main">
                <?php while ( have_posts() ) {
                    the_post();
                    get_template_part( 'template-parts/content/content','sntravel-portfolio' );
                    if ( comments_open() || get_comments_number() ) {
                        comments_template();
                    }
                } ?>
            </main>
        </div>
    </div>
</div>
<?php get_footer();
