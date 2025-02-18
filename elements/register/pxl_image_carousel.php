<?php
sntravel_add_custom_widget(
    array(
        'name' => 'sntravel_image_carousel',
        'title' => esc_html__('PXL Image Carousel', 'sntravel'),
        'icon' => 'eicon-posts-carousel',
        'categories' => array('sntraveltheme-core'),
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
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/sntravel_image_carousel-1.jpg'
                                ],
                                '2' => [
                                    'label' => esc_html__( 'Layout 2', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/sntravel_image_carousel-2.jpg'
                                ],
                                '3' => [
                                    'label' => esc_html__( 'Layout 3', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/sntravel_image_carousel-3.jpg'
                                ],
                                '4' => [
                                    'label' => esc_html__( 'Layout 4', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/sntravel_image_carousel-4.jpg'
                                ],
                                '5' => [
                                    'label' => esc_html__( 'Layout 5', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/sntravel_image_carousel-5.jpg'
                                ],
                            ],
                        ),
                    ),
                ),
                array(
                    'name' => 'section_list',
                    'label' => esc_html__('Image Gallery', 'sntravel' ),
                    'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                    'controls' => array_merge(
                        array(
                            array(
                                'name' => 'img_gallery',
                                'label' => __('Add Images', 'sntravel'),
                                'type' => \Elementor\Controls_Manager::GALLERY,
                                'show_label' => false,
                                'dynamic' => [
                                    'active' => true,
                                ],
                            ),
                            array(
                                'name' => 'title_image',
                                'label' => esc_html__('Title', 'sntravel'),
                                'type' => \Elementor\Controls_Manager::TEXT,
                                'label_block' => true,
                                'condition' => [
                                    'layout' => ['2']
                                ],
                            ),
                            array(
                                'name' => 'selected_icon',
                                'label' => esc_html__( 'Icon', 'sntravel' ),
                                'type' => 'icons',
                                'condition' => [
                                    'layout' => ['3']
                                ]
                            ),
                            array(
                                'name'  => 'icon_color',
                                'label' => esc_html__( 'Icon Color', 'sntravel' ),
                                'type' => \Elementor\Controls_Manager::COLOR,
                                'selectors' => [
                                    '{{WRAPPER}} .sntravel-image-carousel .box-icon i' => 'color: {{VALUE}};',
                                    '{{WRAPPER}} .sntravel-image-carousel .box-icon svg' => 'fill: {{VALUE}};',
                                ],
                                'condition' => [
                                    'layout' => ['3']
                                ]
                            ),
                            array(
                                'name'  => 'icon_hover_color',
                                'label' => esc_html__( 'Icon Hover Color', 'sntravel' ),
                                'type' => \Elementor\Controls_Manager::COLOR,
                                'selectors' => [
                                    '{{WRAPPER}} .sntravel-image-carousel .box-icon:hover i' => 'color: {{VALUE}};',
                                    '{{WRAPPER}} .sntravel-image-carousel .box-icon:hover svg' => 'fill: {{VALUE}};',
                                ],
                                'condition' => [
                                    'layout' => ['3']
                                ]
                            ),
                            array(
                                'name'  => 'icon_size',
                                'label' => esc_html__( 'Icon Size (px)', 'sntravel' ),
                                'type'  => 'slider',
                                'range' => [
                                    'px' => [
                                        'min' => 0,
                                        'max' => 300,
                                    ],
                                ],
                                'selectors' => [
                                    '{{WRAPPER}} .sntravel-image-carousel .box-icon i' => 'font-size: {{SIZE}}{{UNIT}}',
                                    '{{WRAPPER}} .sntravel-image-carousel .box-icon svg' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
                                ],
                                'condition' => [
                                    'layout' => ['3']
                                ]
                            ),
                            array(
                                'name' => 'link',
                                'label' => esc_html__('Link', 'sntravel'),
                                'type' => \Elementor\Controls_Manager::URL,
                                'label_block' => true,
                                'condition' => [
                                    'layout' => ['3']
                                ]
                            )
                        ),
                    ),
                ),
                array(
                    'name' => 'section_carousel_settings',
                    'label' => esc_html__('Carousel Settings', 'sntravel'),
                    'tab' => \Elementor\Controls_Manager::TAB_SETTINGS,
                    'controls' => array_merge(
                        array(
                            array(
                                'name' => 'img_size',
                                'label' => esc_html__('Image Size', 'sntravel' ),
                                'type' => \Elementor\Controls_Manager::TEXT,
                                'description' =>  esc_html__('Enter image size (Example: "thumbnail", "medium", "large", "full" or other sizes defined by theme). Alternatively enter size in pixels (Default: 370x300 (Width x Height)).', 'sntravel')
                            ),
                            array(
                                'name' => 'image_border_radius',
                                'label' => esc_html__('Image Border Radius', 'sntravel' ),
                                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                                'size_units' => [ 'px' ],
                                'selectors' => [
                                    '{{WRAPPER}} .sntravel-swiper-slider.sntravel-image-carousel .item-inner img, {{WRAPPER}} .sntravel-swiper-slider.sntravel-image-carousel .item-inner' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                                ],
                            ),
                            array(
                                'name' => 'img_width',
                                'label' => esc_html__('Fixed Width (px)', 'sntravel'),
                                'type' => \Elementor\Controls_Manager::NUMBER,
                                'control_type' => 'responsive',
                                'selectors' => [
                                    '{{WRAPPER}} .sntravel-swiper-slider.sntravel-image-carousel .item-inner img' => 'width: {{VALUE}}px; object-fit: cover;',
                                ],
                                'condition' => [
                                    'layout!' => ['4']
                                ]
                            ),
                            array(
                                'name' => 'img_width_odd',
                                'label' => esc_html__('Fixed Width Odd', 'sntravel'),
                                'type' => \Elementor\Controls_Manager::SLIDER,
                                'control_type' => 'responsive',
                                'default' => [
                                    'unit' => '%',
                                ],
                                'tablet_default' => [
                                    'unit' => '%',
                                ],
                                'mobile_default' => [
                                    'unit' => '%',
                                ],
                                'size_units' => [ '%', 'px', 'vw' ],
                                'range' => [
                                    '%' => [
                                        'min' => 1,
                                        'max' => 100,
                                    ],
                                    'px' => [
                                        'min' => 1,
                                        'max' => 1920,
                                    ],
                                    'vw' => [
                                        'min' => 1,
                                        'max' => 100,
                                    ],
                                ],
                                'selectors' => [
                                    '{{WRAPPER}} .sntravel-image-carousel .sntravel-swiper-slide:nth-child(odd)' => 'min-width: {{SIZE}}{{UNIT}}; object-fit: cover;',
                                ],
                                'condition' => [
                                    'layout' => ['4']
                                ]
                            ),
                            array(
                                'name' => 'img_width_even',
                                'label' => esc_html__('Fixed Width Even', 'sntravel'),
                                'type' => \Elementor\Controls_Manager::SLIDER,
                                'control_type' => 'responsive',
                                'default' => [
                                    'unit' => '%',
                                ],
                                'tablet_default' => [
                                    'unit' => '%',
                                ],
                                'mobile_default' => [
                                    'unit' => '%',
                                ],
                                'size_units' => [ '%', 'px', 'vw' ],
                                'range' => [
                                    '%' => [
                                        'min' => 1,
                                        'max' => 100,
                                    ],
                                    'px' => [
                                        'min' => 1,
                                        'max' => 1920,
                                    ],
                                    'vw' => [
                                        'min' => 1,
                                        'max' => 100,
                                    ],
                                ],
                                'selectors' => [
                                    '{{WRAPPER}} .sntravel-image-carousel .sntravel-swiper-slide:nth-child(even)' => 'max-width: {{SIZE}}{{UNIT}}; object-fit: cover;',
                                ],
                                'condition' => [
                                    'layout' => ['4']
                                ]
                            ),
                            array(
                                'name' => 'img_height',
                                'label' => esc_html__('Fixed Height (px)', 'sntravel'),
                                'type' => \Elementor\Controls_Manager::NUMBER,
                                'control_type' => 'responsive',
                                'selectors' => [
                                    '{{WRAPPER}} .sntravel-swiper-slider.sntravel-image-carousel .item-inner img' => 'height: {{VALUE}}px; object-fit: cover;',
                                ],
                            ),
                            array(
                                'name'        => 'space_between',
                                'label'       => esc_html__('Space Between', 'sntravel'),
                                'description' => esc_html__('Distance between slides in px', 'sntravel'),
                                'type'        => \Elementor\Controls_Manager::NUMBER,
                                'default'     => 30
                            ),
                        ), 
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
                            array(
                                'name' => 'setting_drag',
                                'label' => esc_html__('Show Drag Cursor', 'sntravel'),
                                'type' => \Elementor\Controls_Manager::SWITCHER,
                                'condition' => ['layout' => '1']
                            ),
                            array(
                                'name' => 'drag_text',
                                'label' => esc_html__('Show Drag', 'sntravel'),
                                'type' => \Elementor\Controls_Manager::TEXT,
                                'default' => esc_html('Drag', 'sntravel'),
                                'condition' => ['layout' => '1']
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