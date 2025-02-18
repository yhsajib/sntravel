<?php
// Register Search Form Widget
pxl_add_custom_widget(
    array(
        'name' => 'pxl_search_form',
        'title' => esc_html__('Pxl Search Form', 'sntravel' ),
        'icon' => 'eicon-site-search',
        'categories' => array('pxltheme-core'),
        'params' => array(
            'sections' => array(
                array(
                    'name'     => 'layout_section',
                    'label'    => esc_html__( 'Layout', 'sntravel' ),
                    'tab'      => 'layout',
                    'controls' => array(
                        array(
                            'name'    => 'layout',
                            'label'   => esc_html__( 'Templates', 'sntravel' ),
                            'type'    => 'layoutcontrol',
                            'default' => '1',
                            'options' => [
                                '1' => [
                                    'label' => esc_html__( 'Layout 1', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/pxl_search_form-1.jpg'
                                ],
                                '2' => [
                                    'label' => esc_html__( 'Layout 1', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/pxl_search_form-2.jpg'
                                ],
                                '3' => [
                                    'label' => esc_html__( 'Layout 3', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/pxl_search_form-3.jpg'
                                ],
                            ],
                            'prefix_class' => 'pxl-search-form-layout-'
                        ),
                        array(
                            'name' => 'search_type',
                            'label' => esc_html__('Search Type', 'sntravel' ),
                            'type' => 'select',
                            'options' => [
                                '1' => esc_html__('Default', 'sntravel'),
                                '2' => esc_html__('Product', 'sntravel'),
                            ],
                            'default' => '1',
                        )
                    )
                ),
                array(
                    'name'     => 'text_section',
                    'label'    => esc_html__( 'Setting', 'sntravel' ),
                    'tab'      => 'content',
                    'controls' => array(
                        array(
                            'name'     => 'placeholder',
                            'label'    => esc_html__('Placeholder text', 'sntravel'),
                            'type'     => 'text',
                            'label_block' => true,
                            'default'  => 'Enter Keywords...'
                        ),
                        array(
                            'name'    => 'search_text_width',
                            'label'   => esc_html__( 'Search text width', 'sntravel' ),
                            'type'    => 'slider',
                            'control_type' => 'responsive',
                            'size_units'   => [ 'px', '%' ],
                            'default' => [
                                'unit' => 'px',
                                'unit' => '%',
                            ],
                            'range' => [
                                'px' => [
                                    'min' => 100,
                                    'max' => 1200,
                                ],
                                '%' => [
                                    'min' => 5,
                                    'max' => 100,
                                ],
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .pxl-search-form' => 'width: {{SIZE}}{{UNIT}}'
                            ],
                        ),
                        array(
                            'name' => 'input_height',
                            'label' => esc_html__( 'Search Input/Button Height (px)', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::NUMBER,
                            'selectors' => [
                                '{{WRAPPER}} .pxl-search-wrap .pxl-search-field, {{WRAPPER}} .pxl-search-wrap .pxl-search-submit' => 'height: {{VALUE}}px;',
                            ],
                        ),
                        array(
                            'name' => 'border_width',
                            'label' => esc_html__( 'Border Width', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::NUMBER,
                            'selectors' => [
                                '{{WRAPPER}} .pxl-search-wrap .pxl-search-field' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
                            ],
                        ),
                        array(
                            'name' => 'border_color',
                            'label' => esc_html__( 'Border Color', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'default' => '',
                            'selectors' => [
                                '{{WRAPPER}} .pxl-search-wrap .pxl-search-field' => 'border-color: {{VALUE}} !important;',
                            ],
                        ),
                        array(
                            'name' => 'search_button_color',
                            'label' => esc_html__( 'Search Button Color', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .pxl-search-wrap .pxl-search-submit' => 'background-color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'btn_padding',
                            'label' => esc_html__('Padding', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px' ],
                            'selectors' => [
                                '{{WRAPPER}} .pxl-search-wrap .pxl-search-field' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'control_type' => 'responsive',
                        ),
                        array(
                            'name'         => 'align',
                            'label'        => esc_html__( 'Alignment', 'sntravel' ),
                            'type'         => 'choose',
                            'control_type' => 'responsive',
                            'default'      => '',
                            'options' => [
                                'left' => [
                                    'title' => esc_html__( 'Left', 'sntravel' ),
                                    'icon' => 'eicon-text-align-left',
                                ],
                                'center' => [
                                    'title' => esc_html__( 'Center', 'sntravel' ),
                                    'icon' => 'eicon-text-align-center',
                                ],
                                'right' => [
                                    'title' => esc_html__( 'Right', 'sntravel' ),
                                    'icon' => 'eicon-text-align-right',
                                ]
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .pxl-search-wrap' => 'text-align: {{VALUE}}; justify-content: {{VALUE}};',
                            ],
                        ),
                    )
                ),  
            ),
        ),
    ),
    basilico_get_class_widget_path()
);