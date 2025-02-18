<?php
pxl_add_custom_widget(
    array(
        'name' => 'pxl_menu_carousel',
        'title' => esc_html__('PXL Food Menu Carousel', 'sntravel'),
        'icon' => 'eicon-info-box',
        'categories' => array('pxltheme-core'),
        'scripts' => [
            'swiper',
            'sntravel-swiper',
        ],
        'params' => array(
            'sections' => array(
                array(
                    'name' => 'layout_section',
                    'label' => esc_html__('Layout', 'sntravel' ),
                    'tab' => \Elementor\Controls_Manager::TAB_LAYOUT,
                    'controls' => array(
                        array(
                            'name'    => 'layout',
                            'label'   => esc_html__( 'Layout', 'sntravel' ),
                            'type'    => 'layoutcontrol',
                            'default' => '1',
                            'options' => [
                                '1' => [
                                    'label' => esc_html__( 'Layout 1', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/pxl_menu_carousel-1.jpg'
                                ],
                                '2' => [
                                    'label' => esc_html__( 'Layout 2', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/pxl_menu_carousel-2.jpg'
                                ],
                                '3' => [
                                    'label' => esc_html__( 'Layout 2', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/pxl_menu_carousel-2.jpg'
                                ],
                                '4' => [
                                    'label' => esc_html__( 'Layout 2', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/pxl_menu_carousel-2.jpg'
                                ],
                                '5' => [
                                    'label' => esc_html__( 'Layout 5', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/pxl_menu_carousel-5.jpg'
                                ],
                                '6' => [
                                    'label' => esc_html__( 'Layout 6', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/pxl_menu_carousel-6.jpg'
                                ],
                                '7' => [
                                    'label' => esc_html__( 'Layout 7', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/pxl_menu_carousel-7.jpg'
                                ],
                                '8' => [
                                    'label' => esc_html__( 'Layout 8', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/pxl_menu_carousel-8.jpg'
                                ],
                                '9' => [
                                    'label' => esc_html__( 'Layout 9', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/pxl_menu_carousel-9.jpg'
                                ],
                                '10' => [
                                    'label' => esc_html__( 'Layout 10', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/pxl_menu_carousel-10.jpg'
                                ],
                                '11' => [
                                    'label' => esc_html__( 'Layout 11', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/pxl_menu_carousel-11.jpg'
                                ],
                                '12' => [
                                    'label' => esc_html__( 'Layout 12', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/pxl_menu_carousel-12.jpg'
                                ],
                            ],
                        ),
                        
                    ),
                ),
                array(
                    'name' => 'section_boxs',
                    'label' => esc_html__('List Settings', 'sntravel'),
                    'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                    'controls' => array(
                        array(
                            'name' => 'list',
                            'label' => esc_html__('', 'sntravel'),
                            'type' => \Elementor\Controls_Manager::REPEATER,
                            'default' => [],
                            'condition' =>[
                                'layout!' => ['6', '7', '9', '10', '12']
                            ],
                            'controls' => array(
                                array(
                                    'name'             => 'selected_img',
                                    'label'            => esc_html__( 'Image', 'sntravel' ),
                                    'type'             => 'media',
                                    'default'          => '',
                                ),
                                array(
                                    'name' => 'title',
                                    'label' => esc_html__('Title', 'sntravel'),
                                    'type' => \Elementor\Controls_Manager::TEXT,
                                    'label_block' => true,
                                    'default' => esc_html__('This is the heading', 'sntravel' )
                                ),
                                array(
                                    'name' => 'sub_title',
                                    'label' => esc_html__('Sub Title', 'sntravel'),
                                    'type' => \Elementor\Controls_Manager::TEXT,
                                    'label_block' => true,
                                ),
                                array(
                                    'name' => 'description',
                                    'label' => esc_html__('Description', 'sntravel'),
                                    'type' => \Elementor\Controls_Manager::TEXTAREA,
                                    'label_block' => true,
                                ),
                                array(
                                    'name' => 'price',
                                    'label' => esc_html__('Price', 'sntravel'),
                                    'type' => \Elementor\Controls_Manager::TEXT,
                                    'label_block' => true,
                                    'default' => esc_html__('$25', 'sntravel' )
                                ),
                                array(
                                    'name' => 'link',
                                    'label' => esc_html__('Item Link', 'sntravel'),
                                    'type' => \Elementor\Controls_Manager::URL,
                                    'label_block' => true,
                                ),
                                array(
                                    'name' => 'is_featured',
                                    'label' => esc_html__('Is Featured?', 'sntravel'),
                                    'type' => \Elementor\Controls_Manager::SWITCHER,
                                ),
                                array(
                                    'name' => 'featured_text',
                                    'label' => esc_html__('Featured Text', 'sntravel'),
                                    'type' => \Elementor\Controls_Manager::TEXT,
                                    'label_block' => true,
                                    'condition' => [
                                        'is_featured' => 'true'
                                    ]
                                ),
                            ),
                            'title_field' => '{{{ title }}}',
                        ),
                        array(
                            'name' => 'list_food_2',
                            'label' => esc_html__('', 'sntravel'),
                            'type' => \Elementor\Controls_Manager::REPEATER,
                            'default' => [],
                            'condition' =>[
                                'layout' => ['6','7', '9', '10', '12']
                            ],
                            'controls' => array(
                                array(
                                    'name'             => 'selected_img_2',
                                    'label'            => esc_html__( 'Image', 'sntravel' ),
                                    'type'             => 'media',
                                    'default'          => '',
                                ),
                                array(
                                    'name' => 'title_food_2',
                                    'label' => esc_html__('Title', 'sntravel'),
                                    'type' => \Elementor\Controls_Manager::TEXT,
                                    'label_block' => true,
                                    'default' => esc_html__('This is the heading', 'sntravel' )
                                ),
                                array(
                                    'name' => 'description_food_2',
                                    'label' => esc_html__('Description', 'sntravel'),
                                    'type' => \Elementor\Controls_Manager::TEXTAREA,
                                    'label_block' => true,
                                ),
                                array(
                                    'name' => 'button_food',
                                    'label' => esc_html__('Button text', 'sntravel'),
                                    'type' => \Elementor\Controls_Manager::TEXT,
                                    'default' => esc_html__('read more', 'sntravel' ),
                                    'description' => esc_html__('Use for layout 6', 'sntravel' ),
                                    'label_block' => true,
                                ),
                                array(
                                    'name' => 'link_food_2',
                                    'label' => esc_html__('Item Link', 'sntravel'),
                                    'type' => \Elementor\Controls_Manager::URL,
                                    'description' => esc_html__('Use for layout 6', 'sntravel' ),
                                    'label_block' => true,
                                ),
                                array(
                                    'name' => 'width_px',
                                    'label' => esc_html__('Max Width (px)', 'sntravel' ),
                                    'type' => \Elementor\Controls_Manager::SLIDER,
                                    'control_type' => 'responsive',
                                    'size_units' => [ 'px' ],
                                    'range' => [
                                        'px' => [
                                            'min' => 0,
                                            'max' => 500,
                                        ],
                                    ],
                                    'selectors' => [
                                        '{{WRAPPER}} .pxl-menu-carousel {{CURRENT_ITEM}} .item-featured img' => 'max-width: {{SIZE}}{{UNIT}}; object-fit: cover;',
                                    ],
                                    'description' => esc_html__('Use for layout 7', 'sntravel' ),
                                ),
                            ),
                            'title_field' => '{{{ title_food_2 }}}',
                        ),
                        array(
                            'name'        => 'img_size',
                            'label'       => esc_html__('Image Size', 'sntravel' ),
                            'type'        => \Elementor\Controls_Manager::TEXT,
                            'description' =>  esc_html__('Enter image size (Example: "thumbnail", "medium", "large", "full" or other sizes defined by theme). Alternatively enter size in pixels (Default: 370x300 (Width x Height)).', 'sntravel')
                        ),
                        array(
                            'name' => 'heading_color',
                            'label' => esc_html__('Heading Color', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .pxl-menu-carousel .item-inner .menu-title' => 'color: {{VALUE}};',
                                '{{WRAPPER}} .pxl-menu-carousel .item-inner .menu-title a' => 'color: {{VALUE}}; background-image: linear-gradient(transparent calc(100% - 1px), {{VALUE}} 1px);'
                            ],
                        ),
                        array(
                            'name' => 'heading_typography',
                            'label' => esc_html__('Heading Typography', 'sntravel' ),
                            'type' => \Elementor\Group_Control_Typography::get_type(),
                            'control_type' => 'group',
                            'selector' => '{{WRAPPER}} .pxl-menu-carousel .item-inner .menu-title',
                        ),
                        array(
                            'name' => 'sub_heading_color',
                            'label' => esc_html__('Sub Heading Color', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .pxl-menu-carousel .item-inner .menu-sub-title' => 'color: {{VALUE}};',
                            ],
                            'condition' =>[
                                'layout!' => ['6','7', '9', '10', '11', '12']
                            ],
                        ),
                        array(
                            'name' => 'sub_heading_typography',
                            'label' => esc_html__('Sub Heading Typography', 'sntravel' ),
                            'type' => \Elementor\Group_Control_Typography::get_type(),
                            'control_type' => 'group',
                            'selector' => '{{WRAPPER}} .pxl-menu-carousel .item-inner .menu-sub-title',
                            'condition' =>[
                                'layout!' => ['6','7','9','10', '12']
                            ],
                        ),
                        array(
                            'name' => 'price_color',
                            'label' => esc_html__('Price Color', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .pxl-menu-carousel .item-inner .menu-price' => 'color: {{VALUE}};',
                            ],
                            'condition' =>[
                                'layout!' => ['6','7','9','10']
                            ],
                        ),
                        array(
                            'name' => 'price_typography',
                            'label' => esc_html__('Heading Typography', 'sntravel' ),
                            'type' => \Elementor\Group_Control_Typography::get_type(),
                            'control_type' => 'group',
                            'selector' => '{{WRAPPER}} .pxl-menu-carousel .item-inner .menu-price',
                            'condition' =>[
                                'layout!' => ['6','7','9','10','12']
                            ],
                        ),
                        array(
                            'name' => 'desc_color',
                            'label' => esc_html__('Description Color', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .pxl-menu-carousel .item-inner .menu-description' => 'color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'desc_typography',
                            'label' => esc_html__('Description Typography', 'sntravel' ),
                            'type' => \Elementor\Group_Control_Typography::get_type(),
                            'control_type' => 'group',
                            'selector' => '{{WRAPPER}} .pxl-menu-carousel .item-inner .menu-description',
                        ),
                        array(
                            'name' => 'margin_img',
                            'label' => esc_html__('Margin bottom Image (px)', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::SLIDER,
                            'control_type' => 'responsive',
                            'size_units' => [ 'px' ],
                            'range' => [
                                'px' => [
                                    'min' => -100,
                                    'max' => 100,
                                ],
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .pxl-menu-carousel .item-featured' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                            ],
                            'condition' =>[
                                'layout' => ['7', '9']
                            ]
                        ),
                        array(
                            'name' => 'border_color',
                            'label' => esc_html__('Border Color', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .pxl-menu-carousel .pxl-swiper-container' => 'border-color: {{VALUE}};',
                                '{{WRAPPER}} .pxl-menu-carousel .pxl-swiper-container::before' => 'background-color: {{VALUE}};',
                            ],
                            'condition' =>[
                                'layout' => ['8', '9']
                            ]
                        ),
                        array(
                            'name' => 'padding',
                            'label' => esc_html__('Padding', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px' ],
                            'selectors' => [
                                '{{WRAPPER}} .pxl-menu-carousel .item-inner' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'control_type' => 'responsive',
                            'condition' =>[
                                'layout' => ['8']
                            ]
                        ),
                    ),
                ),
                array(
                    'name' => 'carousel_setting',
                    'label' => esc_html__('Carousel Settings', 'sntravel' ),
                    'tab' => \Elementor\Controls_Manager::TAB_SETTINGS,
                    'controls' => array_merge(
                        basilico_carousel_column_settings(),
                        array( 
                            array(
                                'name' => 'slides_to_scroll',
                                'label' => esc_html__('Slides to scroll', 'sntravel' ),
                                'type' => \Elementor\Controls_Manager::SELECT,
                                'default' => '1',
                                'options' => [
                                    '1' => '1',
                                    '2' => '2',
                                    '3' => '3',
                                    '4' => '4',
                                    '5' => '5',
                                    '6' => '6',
                                ],
                            ),
                            array(
                                'name' => 'pause_on_hover',
                                'label' => esc_html__('Pause on Hover', 'sntravel'),
                                'type' => \Elementor\Controls_Manager::SWITCHER,
                            ),
                            array(
                                'name' => 'autoplay',
                                'label' => esc_html__('Autoplay', 'sntravel'),
                                'type' => \Elementor\Controls_Manager::SWITCHER,
                            ),
                            array(
                                'name' => 'autoplay_speed',
                                'label' => esc_html__('Autoplay Speed', 'sntravel'),
                                'type' => \Elementor\Controls_Manager::NUMBER,
                                'default' => 5000,
                                'condition' => [
                                    'autoplay' => 'true'
                                ]
                            ),
                            array(
                                'name' => 'infinite',
                                'label' => esc_html__('Infinite Loop', 'sntravel'),
                                'type' => \Elementor\Controls_Manager::SWITCHER,
                            ),
                            array(
                                'name' => 'speed',
                                'label' => esc_html__('Animation Speed', 'sntravel'),
                                'type' => \Elementor\Controls_Manager::NUMBER,
                                'default' => 400,
                            ),
                        )
                    ),
                ),
                array(
                    'name' => 'arrow_settings',
                    'label' => esc_html__('Arrow Settings', 'sntravel' ),
                    'tab' => \Elementor\Controls_Manager::TAB_SETTINGS,
                    'controls' => array_merge(
                        basilico_arrow_settings(),
                    ),
                ),
                array(
                    'name' => 'dots_settings',
                    'label' => esc_html__('Dots Settings', 'sntravel' ),
                    'tab' => \Elementor\Controls_Manager::TAB_SETTINGS,
                    'controls' => array_merge(
                        basilico_dots_settings(),
                    ),
                ),
            ),
        ),
    ),
    basilico_get_class_widget_path()
);