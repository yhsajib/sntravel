<?php
/**
 * @package Sntravel
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="sntravel-entry-content clearfix">
        <?php
            the_content();
            sntravel()->page->get_link_pages();
        ?>
    </div> 
</article> 
