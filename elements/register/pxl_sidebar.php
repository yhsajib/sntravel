<?php
global $wp_registered_sidebars;
$options = [];

if ( ! $wp_registered_sidebars ) {
    $options[''] = esc_html__( 'No sidebars were found', 'sntravel' );
} else {
    $options[''] = esc_html__( 'Choose Sidebar', 'sntravel' );

    foreach ( $wp_registered_sidebars as $sidebar_id => $sidebar ) {
        $options[ $sidebar_id ] = $sidebar['name'];
    }
}

$default_key = array_keys( $options );
$default_key = array_shift( $default_key );

pxl_add_custom_widget(
    array(
        'name'       => 'pxl_sidebar',
        'title'      => esc_html__( 'PXL Sidebar', 'sntravel' ),
        'icon' => 'eicon-nav-menu',
        'categories' => array('pxltheme-core'),
        'params' => array(
            'sections' => array(
                array(
                    'name'     => 'content_section',
                    'label'    => esc_html__( 'Content', 'sntravel' ),
                    'tab'      => 'content',
                    'controls' => array(
                        array(
                            'name' => 'sidebar',
                            'label' => esc_html__( 'Choose Sidebar', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::SELECT,
                            'default' => $default_key,
                            'options' => $options,
                        ),
                        array(
                            'name' => 'style',
                            'label' => esc_html__( 'Style', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::SELECT,
                            'options' => [
                                'style-df' => esc_html__('Default', 'sntravel'),
                                'style-2' => esc_html__('Style 2', 'sntravel'),
                                'style-3' => esc_html__('Style 3', 'sntravel'),
                                'style-4' => esc_html__('Style 4', 'sntravel'),
                            ],
                            'default' => 'style-df'
                        )
                    ),
                )
            )
        )
    ),
    basilico_get_class_widget_path()
);