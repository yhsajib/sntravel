<?php
// Register Fancy Box Widget
sntravel_add_custom_widget(
    array(
        'name'       => 'sntravel_single_navigation',
        'title'      => esc_html__( 'PXL Single Navigation', 'sntravel' ),
        'icon'       => 'eicon-icon-box',
        'categories' => array('sntraveltheme-core'),
        'params' => array(
            'sections' => array(
                array(
                    'name' => 'source_section',
                    'label' => esc_html__('Source Settings', 'sntravel' ),
                    'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                    'controls' => array(
                        array(
                            'name' => 'style',
                            'label' => esc_html__('Styles', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::SELECT,
                            'default' => 'default',
                            'options' => [
                                'default' => esc_html__('Default', 'sntravel' ),
                                'style-2' => esc_html__('Style 2', 'sntravel' ),
                            ],
                        ),
                    ),
                ),
            )
        )
    ),
    basilico_get_class_widget_path()
);