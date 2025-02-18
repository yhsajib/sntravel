<?php
sntravel_add_custom_widget(
    array(
        'name' => 'sntravel_testimonial_carousel',
        'title' => esc_html__('PXL Testimonial Carousel', 'sntravel'),
        'icon' => 'eicon-blockquote',
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
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/sntravel_testimonial_carousel-1.jpg'
                                ],
                                '2' => [
                                    'label' => esc_html__( 'Layout 2', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/sntravel_testimonial_carousel-2.jpg'
                                ],
                                '3' => [
                                    'label' => esc_html__( 'Layout 3', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/sntravel_testimonial_carousel-3.jpg'
                                ],
                                '4' => [
                                    'label' => esc_html__( 'Layout 4', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/sntravel_testimonial_carousel-4.jpg'
                                ],
                                '5' => [
                                    'label' => esc_html__( 'Layout 5', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/sntravel_testimonial_carousel-5.jpg'
                                ],
                                '6' => [
                                    'label' => esc_html__( 'Layout 6', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/sntravel_testimonial_carousel-6.jpg'
                                ],
                                '7' => [
                                    'label' => esc_html__( 'Layout 7', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/sntravel_testimonial_carousel-7.jpg'
                                ],
                                '8' => [
                                    'label' => esc_html__( 'Layout 8', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/sntravel_testimonial_carousel-8.jpg'
                                ],
                                '9' => [
                                    'label' => esc_html__( 'Layout 9', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/sntravel_testimonial_carousel-9.jpg'
                                ],
                                '10' => [
                                    'label' => esc_html__( 'Layout 10', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/sntravel_testimonial_carousel-10.jpg'
                                ],
                                '11' => [
                                    'label' => esc_html__( 'Layout 11', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/sntravel_testimonial_carousel-11.jpg'
                                ],
                                '12' => [
                                    'label' => esc_html__( 'Layout 12', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/sntravel_testimonial_carousel-12.jpg'
                                ],
                                '13' => [
                                    'label' => esc_html__( 'Layout 13', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/sntravel_testimonial_carousel-13.jpg'
                                ],
                                '14' => [
                                    'label' => esc_html__( 'Layout 14', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/sntravel_testimonial_carousel-14.jpg'
                                ],
                                '15' => [
                                    'label' => esc_html__( 'Layout 15', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/sntravel_testimonial_carousel-15.jpg'
                                ],
                                '16' => [
                                    'label' => esc_html__( 'Layout 16', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/sntravel_testimonial_carousel-16.jpg'
                                ],
                            ],
                            'prefix_class' => 'sntravel-testimonial-carousel-layout-',
                        ),
                        
                    ),
                ),
                array(
                    'name' => 'section_list',
                    'label' => esc_html__('Content', 'sntravel'),
                    'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                    'controls' => array(
                        array(
                            'name' => 'image_layout14',
                            'label' => esc_html__('Image', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::MEDIA,
                            'condition' => ['layout' => '14'],
                        ),
                        array(
                            'name' => 'content_list',
                            'label' => esc_html__('Testimonial Items', 'sntravel'),
                            'type' => \Elementor\Controls_Manager::REPEATER,
                            'default' => [],
                            'controls' => array(
                                array(
                                    'name' => 'image',
                                    'label' => esc_html__('Image', 'sntravel' ),
                                    'type' => \Elementor\Controls_Manager::MEDIA,
                                    'description' => esc_html__('Image Not for layout 14', 'sntravel'),
                                ),
                                array(
                                    'name' => 'title',
                                    'label' => esc_html__('Name', 'sntravel'),
                                    'type' => \Elementor\Controls_Manager::TEXT,
                                    'label_block' => true,
                                ),
                                array(
                                    'name' => 'position',
                                    'label' => esc_html__('Position', 'sntravel'),
                                    'type' => \Elementor\Controls_Manager::TEXT,
                                ),
                                array(
                                    'name' => 'testimonial_title',
                                    'label' => esc_html__('Title', 'sntravel'),
                                    'type' => \Elementor\Controls_Manager::TEXT,
                                    'label_block' => true,
                                ),
                                array(
                                    'name' => 'description',
                                    'label' => esc_html__('Description', 'sntravel' ),
                                    'type' => \Elementor\Controls_Manager::TEXTAREA,
                                    'rows' => 10,
                                ),
                                array(
                                    'name' => 'rating',
                                    'label' => esc_html__('Rating', 'sntravel' ),
                                    'type' => \Elementor\Controls_Manager::SELECT,
                                    'default' => 'none',
                                    'options' => [
                                        'none' => esc_html__('None', 'sntravel' ),
                                        'star1' => esc_html__('1 Star', 'sntravel' ),
                                        'star2' => esc_html__('2 Star', 'sntravel' ),
                                        'star3' => esc_html__('3 Star', 'sntravel' ),
                                        'star4' => esc_html__('4 Star', 'sntravel' ),
                                        'star5' => esc_html__('5 Star', 'sntravel' ),
                                    ],
                                ),
                            ),
                            'title_field' => '{{{ title }}}',
                        ),
                        array(
                            'name' => 'quote_icon_type',
                            'label' => esc_html__('Select Quote Type', 'sntravel'),
                            'type' => 'select',
                            'options' => [
                                'text' => esc_html__('Default', 'sntravel'),
                                'icon' => esc_html__('Icon', 'sntravel'),
                                'none' => esc_html__('None', 'sntravel'),
                            ],
                            'condition' => ['layout!' => '13'],
                            'default' => 'text'
                        ),
                        array(
                            'name' => 'selected_icon',
                            'label' => esc_html__('Quote Icon', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::ICONS,
                            'fa4compatibility' => 'icon',
                            'condition' => [
                                'quote_icon_type' => 'icon'
                            ]                            
                        ),
                        array(
                            'name' => 'quote_typography',
                            'label' => esc_html__('Quote Typography', 'sntravel' ),
                            'type' => \Elementor\Group_Control_Typography::get_type(),
                            'control_type' => 'group',
                            'selector' => '{{WRAPPER}} .sntravel-testimonial-carousel .item-quote-icon',
                            'condition' => [
                                'quote_icon_type' => 'text',
                                'layout!' => '13'
                            ]
                        ),
                        array(
                            'name' => 'show_button',
                            'label' => esc_html__('Show Button More', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::SWITCHER,
                            'condition' => [
                                'layout' => ['6', '10']
                            ]
                        ),
                        array(
                            'name'        => 'button_link',
                            'label'       => esc_html__( 'Button More Link', 'sntravel' ),
                            'type'        => \Elementor\Controls_Manager::URL,
                            'placeholder' => esc_html__( 'https://your-link.com', 'sntravel' ),
                            'default'     => [
                                'url'         => '#',
                                'is_external' => 'on'
                            ],
                            'condition' => [
                                'layout' => ['6', '10'],
                                'show_button' => 'true'
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
                                'default' => false,
                            ),
                            array(
                                'name' => 'speed',
                                'label' => esc_html__('Animation Speed', 'sntravel'),
                                'type' => \Elementor\Controls_Manager::NUMBER,
                                'default' => 400,
                            ),
                        ),
                    ),
                ),
                array(
                    'name' => 'arrow_settings',
                    'label' => esc_html__('Arrow Settings', 'sntravel' ),
                    'tab' => \Elementor\Controls_Manager::TAB_SETTINGS,
                    'controls' => array_merge(
                        basilico_arrow_settings(),
                    ),
                    'condition' => ['layout!' => '14'],
                ),
                array(
                    'name' => 'arrow_settings_layout14',
                    'label' => esc_html__('Arrow Settings', 'sntravel' ),
                    'tab' => \Elementor\Controls_Manager::TAB_SETTINGS,
                    'controls' => array_merge(
                        array(
                            array(
                                'name' => 'arrows_14',
                                'label' => esc_html__('Show Arrows', 'sntravel'),
                                'type' => \Elementor\Controls_Manager::SWITCHER,
                            ),
                            array(
                                'name' => 'color_arrow',
                                'label' => esc_html__('Arrow Color', 'sntravel' ),
                                'type' => \Elementor\Controls_Manager::COLOR,
                                'selectors' => [
                                    '{{WRAPPER}} .sntravel-testimonial-carousel .sntravel-swiper-arrows .sntravel-swiper-arrow' => 'color: {{VALUE}}; border-color: {{VALUE}};',
                                ],
                            ),
                            array(
                                'name' => 'color_arrow_active',
                                'label' => esc_html__('Arrow Color Active', 'sntravel' ),
                                'type' => \Elementor\Controls_Manager::COLOR,
                                'selectors' => [
                                    '{{WRAPPER}} .sntravel-testimonial-carousel .sntravel-swiper-arrows .sntravel-swiper-arrow::after' => 'background-color: {{VALUE}};',
                                ],
                            ),
                        ),
                    ),
                    'condition' => ['layout' => '14'],
                ),
                array(
                    'name' => 'dots_settings',
                    'label' => esc_html__('Dots Settings', 'sntravel' ),
                    'tab' => \Elementor\Controls_Manager::TAB_SETTINGS,
                    'controls' => array_merge(
                        basilico_dots_settings(),
                    ),
                ),
                array(
                    'name' => 'style_section',
                    'label' => esc_html__('Style', 'sntravel' ),
                    'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                    'controls' => array(
                        array(
                            'name' => 'quote_size',
                            'label' => esc_html__('Quote Size', 'sntravel'),
                            'type' => \Elementor\Controls_Manager::NUMBER,
                            'control_type' => 'responsive',
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-testimonial-carousel .item-quote-icon' => 'font-size: {{VALUE}}px;',
                                '{{WRAPPER}} .sntravel-testimonial-carousel .icon-wrapper svg' => 'width: {{VALUE}}; height: {{VALUE}}px;',
                            ],
                            'condition' => ['layout!' => '13'],
                        ),
                        array(
                            'name' => 'quote_color',
                            'label' => esc_html__('Quote Icon Color', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-testimonial-carousel .item-quote-icon' => 'color: {{VALUE}};',
                                '{{WRAPPER}} .sntravel-testimonial-carousel .icon-wrapper svg' => 'fill: {{VALUE}};',
                            ],
                            'condition' => ['layout!' => '13'],
                        ),
                        array(
                            'name' => 'quote_margin',
                            'label' => esc_html__('Quote Margin', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px' ],
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-testimonial-carousel .item-inner .item-quote-icon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'control_type' => 'responsive',
                            'condition' => ['layout' => '2'],
                        ),
                        array(
                            'name' => 'bg_color',
                            'label' => esc_html__('Background Color', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-testimonial-carousel' => 'background-color: {{VALUE}};',
                            ],
                            'condition' => ['layout!' => '13'],
                        ),
                        array(
                            'name' => 'title_typography_testimo',
                            'label' => esc_html__('Title Typography', 'sntravel' ),
                            'type' => \Elementor\Group_Control_Typography::get_type(),
                            'control_type' => 'group',
                            'selector' => '{{WRAPPER}} .sntravel-testimonial-carousel .testimonial-title',
                            'condition' => ['layout' => '14'],
                        ),
                        array(
                            'name' => 'title_testimo_color',
                            'label' => esc_html__('Title', 'sntravel' ),
                            'type' => 'color',
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-testimonial-carousel .testimonial-title, .sntravel-testimonial-carousel .tes-title' => 'color: {{VALUE}};'
                            ],
                            'condition' => ['layout' => ['14', '16']],
                        ),
                        array(
                            'name' => 'title_typography',
                            'label' => esc_html__('Name Typography', 'sntravel' ),
                            'type' => \Elementor\Group_Control_Typography::get_type(),
                            'control_type' => 'group',
                            'selector' => '{{WRAPPER}} .sntravel-testimonial-carousel .item-inner .item-title',
                            'condition' => ['layout' => '2'],
                        ),
                        array(
                            'name' => 'title_color',
                            'label' => esc_html__('Name Color', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-testimonial-carousel .item-title' => 'color: {{VALUE}};',
                                '{{WRAPPER}} .sntravel-testimonial-carousel.layout-8 .item-title:before,
                                {{WRAPPER}} .sntravel-testimonial-carousel.layout-8 .item-title:after' => 'color: {{VALUE}};',
                                '{{WRAPPER}} .sntravel-testimonial-carousel.layout-14 .item-title::before' => 'background-color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'name_margin',
                            'label' => esc_html__('Name Margin', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px' ],
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-testimonial-carousel .item-inner .item-info' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'control_type' => 'responsive',
                            'condition' => ['layout' => '2'],
                        ),
                        array(
                            'name' => 'bg_des_color',
                            'label' => esc_html__('Box Description Color', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-testimonial-carousel .item-desc' => 'background-color: {{VALUE}};',
                            ],
                            'condition' => ['layout' => '13'],
                        ),
                        array(
                            'name' => 'testimonial_Typography',
                            'label' => esc_html__('Title Typography', 'sntravel' ),
                            'type' => \Elementor\Group_Control_Typography::get_type(),
                            'control_type' => 'group',
                            'selector' => '{{WRAPPER}} .sntravel-testimonial-carousel .item-inner .testimonial-title',
                            'condition' => ['layout' => '2'],
                        ),
                        array(
                            'name' => 'testimonial_color',
                            'label' => esc_html__('Title Color', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-testimonial-carousel .testimonial-title' => 'color: {{VALUE}};',
                            ],
                            'condition' => [
                                'layout' => ['2', '3', '4']
                            ]
                        ),
                        array(
                            'name' => 'title_space_bottom',
                            'label' => esc_html__('Title Space Bottom', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::SLIDER,
                            'control_type' => 'responsive',
                            'size_units' => [ 'px' ],
                            'range' => [
                                'px' => [
                                    'min' => -300,
                                    'max' => 300,
                                ],
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-testimonial-carousel .item-inner .testimonial-title' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                            ],
                            'condition' => [
                                'layout' => ['2']
                            ]
                        ),
                        array(
                            'name' => 'position_color',
                            'label' => esc_html__('Position Color', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-testimonial-carousel .item-position' => 'color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'description_Typography',
                            'label' => esc_html__('Description Typography', 'sntravel' ),
                            'type' => \Elementor\Group_Control_Typography::get_type(),
                            'control_type' => 'group',
                            'selector' => '{{WRAPPER}} .sntravel-testimonial-carousel .item-inner .item-desc',
                            'condition' => ['layout' => '2'],
                        ),
                        array(
                            'name' => 'description_color',
                            'label' => esc_html__('Description Color', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-testimonial-carousel .item-desc' => 'color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'des_space_bottom',
                            'label' => esc_html__('Des Space Bottom', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::SLIDER,
                            'control_type' => 'responsive',
                            'size_units' => [ 'px' ],
                            'range' => [
                                'px' => [
                                    'min' => -300,
                                    'max' => 300,
                                ],
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-testimonial-carousel .item-inner .item-desc' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                            ],
                            'condition' => [
                                'layout' => ['2']
                            ]
                        ),
                        array(
                            'name' => 'icon_color',
                            'label' => esc_html__('Star icon Color', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-testimonial-carousel .item-rating' => 'color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'divider_color',
                            'label' => esc_html__('Divider Color', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-testimonial-carousel .sntravel-divider::before' => 'background-color: {{VALUE}};',
                            ],
                            'condition' => [
                                'layout' => ['15']
                            ]
                        ),
                        array(
                            'name' => 'testimonial_background',
                            'label' => esc_html__('Background Image', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::MEDIA,
                            'condition' => ['layout!' => '13', '14'],
                        ),
                        array(
                            'name' => 'max_width',
                            'label' => esc_html__('Description Max Width', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::SLIDER,
                            'range' => [
                                'px' => [
                                    'min' => 300,
                                    'max' => 1500,
                                ],
                            ],
                            'condition' => ['layout' => '2'],
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-swiper-slider .sntravel-swiper-slide .item-desc' => 'max-width: {{SIZE}}{{UNIT}};',
                            ],
                        ),
                        array(
                            'name'         => 'text_alignment',
                            'label'        => esc_html__( 'Text Alignment', 'sntravel' ),
                            'type'         => 'choose',
                            'control_type' => 'responsive',
                            'options' => [
                                'start' => [
                                    'title' => esc_html__( 'Start', 'sntravel' ),
                                    'icon' => 'eicon-text-align-left',
                                ],
                                'center' => [
                                    'title' => esc_html__( 'Center', 'sntravel' ),
                                    'icon' => 'eicon-text-align-center',
                                ],
                                'end' => [
                                    'title' => esc_html__( 'End', 'sntravel' ),
                                    'icon' => 'eicon-text-align-right',
                                ]
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-testimonial-carousel .item-inner' => 'text-align: {{VALUE}};',
                                '{{WRAPPER}} .sntravel-testimonial-carousel .sntravel-swiper-slide' => 'justify-content: {{VALUE}};',
                                '{{WRAPPER}} .sntravel-testimonial-carousel .item-inner .item-wrap' => 'justify-content: {{VALUE}};',
                            ],
                            'condition' => ['layout' => ['2', '15']],
                        ),
                    ),
                ),
            ),
        ),
    ),
    basilico_get_class_widget_path()
);