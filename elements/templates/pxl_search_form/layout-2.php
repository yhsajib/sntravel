<?php 
$default_settings = [
    'search_type' => '1',
    'placeholder' => '',
];
$settings = array_merge($default_settings, $settings);
extract($settings); 
?>

<div class="sntravel-search-wrap layout-2">
    <form method="get" class="sntravel-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <input type="search" class="sntravel-search-field" placeholder="<?php echo esc_attr( $settings['placeholder']); ?>" value="<?php echo get_search_query(); ?>" name="s" autocomplete="off"/>
        <button type="submit" class="sntravel-search-submit" value=""><span class="sntraveli-search-400"></span></button>
        <?php if( $search_type == '2'): ?>
            <input type="hidden" name="post_type" value="product">
        <?php endif; ?>
    </form>
</div>