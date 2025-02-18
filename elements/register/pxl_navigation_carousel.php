<?php
// Register PXL Widget
pxl_add_custom_widget(
    array(
        'name' => 'pxl_navigation_carousel',
        'title' => esc_html__('Navigation Carousel', 'sntravel' ),
        'icon' => 'eicon-dual-button',
        'categories' => array('pxltheme-core'),
        'params' => array(
            'sections' => array(
                array(
                    'name'     => 'content_section',
                    'label'    => esc_html__( 'Navigation Setting', 'sntravel' ),
                    'tab'      => 'content',
                    'controls' => array(
                        array(
                            'name' => 'carousel_ids',
                            'label' => esc_html__('Carousel Ids', 'sntravel'),
                            'type' => \Elementor\Controls_Manager::TEXT,
                            'label_block' => true,
                            'description' => esc_html__('List of CSS ID of carousel widget that navigation will affect, without #, separated by commas. Example: "id1, id2"', 'sntravel'),
                        ),
                        array(
                            'name' => 'nav_style',
                            'label' => esc_html__('Navigation Style', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::SELECT,
                            'options' => [
                                'default' => 'Default',
                            ],
                            'default' => 'default',
                            'separator' => 'after',
                        ),
                        array(
                            'name' => 'prev_background',
                            'label' => esc_html__('Prev Button Background', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .pxl-navigation-carousel .nav-prev' => 'background-color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'prev_color',
                            'label' => esc_html__('Prev Button Color', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .pxl-navigation-carousel .nav-prev i' => 'color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'next_background',
                            'label' => esc_html__('Next Button Background', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .pxl-navigation-carousel .nav-next' => 'background-color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'next_color',
                            'label' => esc_html__('Next Button Color', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .pxl-navigation-carousel .nav-next i' => 'color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name'  =>  'button_size',
                            'type'  =>  \Elementor\Controls_Manager::SLIDER,
                            'label' => esc_html__('Button Size', 'sntravel'),
                            'size_units' => ['px'],
                            'range' => [
                                'px' => [
                                    'min' => 30,
                                    'max' => 100,
                                ],
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .pxl-navigation-carousel .nav-button' => 'width: {{SIZE}}{{UNIT}} !important; height: {{SIZE}}{{UNIT}} !important;',
                            ],

                        ),
                    )
                ),  
            ),
        ),
    ),
    basilico_get_class_widget_path()
);