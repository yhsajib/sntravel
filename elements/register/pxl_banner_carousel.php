<?php
sntravel_add_custom_widget(
    array(
        'name' => 'sntravel_banner_carousel',
        'title' => esc_html__('PXL Banner Carousel', 'sntravel'),
        'icon' => 'eicon-post-slider',
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
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/sntravel_banner_carousel-1.jpg'
                                ],
                            ],
                        ),
                        
                    ),
                ),
                array(
                    'name' => 'section_banners',
                    'label' => esc_html__('Banner Settings', 'sntravel'),
                    'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                    'controls' => array(
                        array(
                            'name' => 'banners',
                            'label' => esc_html__('', 'sntravel'),
                            'type' => \Elementor\Controls_Manager::REPEATER,
                            'default' => [],
                            'controls' => array(
                                array(
                                    'name'        => 'item_background',
                                    'label'       => esc_html__('Item Background', 'sntravel'),
                                    'type'        => 'media',
                                    'label_block' => true,
                                ),
                                array(
                                    'name' => 'title_text',
                                    'label' => esc_html__('Title', 'sntravel'),
                                    'type' => \Elementor\Controls_Manager::TEXTAREA,
                                    'default' => esc_html__('This is the heading', 'sntravel'),
                                    'placeholder' => esc_html__('Enter your title', 'sntravel'),
                                    'rows' => 3,
                                    'show_label' => false,
                                ),
                                array(
                                    'name' => 'description_text',
                                    'label' => esc_html__('Description', 'sntravel'),
                                    'type' => \Elementor\Controls_Manager::TEXTAREA,
                                    'default' => esc_html__('Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', 'sntravel'),
                                    'placeholder' => esc_html__('Enter your description', 'sntravel'),
                                    'rows' => 6,
                                    'show_label' => false,
                                ),
                                array(
                                    'name' => 'button_text',
                                    'label' => esc_html__('Button Text', 'sntravel'),
                                    'type' => \Elementor\Controls_Manager::TEXT,
                                    'label_block' => true,
                                ),
                                array(
                                    'name'        => 'link',
                                    'label'       => esc_html__( 'Custom Link', 'sntravel' ),
                                    'type'        => 'url',
                                    'placeholder' => esc_html__( 'https://your-link.com', 'sntravel' ),
                                    'default'     => [
                                        'url'         => '#',
                                        'is_external' => 'on'
                                    ],
                                ),
                                array(
                                    'name' => 'name_theme',
                                    'label' => esc_html__('Name', 'sntravel'),
                                    'type' => \Elementor\Controls_Manager::TEXT,
                                    'label_block' => true,
                                ),
                                array(
                                    'name' => 'background_padding',
                                    'label' => esc_html__('Padding', 'sntravel' ),
                                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                                    'size_units' => [ 'px' ],
                                    'selectors' => [
                                        '{{WRAPPER}} .sntravel-banner-carousel .sntravel-swiper-slide {{CURRENT_ITEM}}' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                                    ],
                                    'control_type' => 'responsive',
                                ),
                            ),
                        ),
                        array(
                            'name' => 'heading_typography',
                            'label' => esc_html__('Title Typography', 'sntravel' ),
                            'type' => \Elementor\Group_Control_Typography::get_type(),
                            'control_type' => 'group',
                            'selector' => '{{WRAPPER}} .sntravel-banner-carousel .item-text .item-title',
                        ),
                        array(
                            'name' => 'heading_color',
                            'label' => esc_html__('Title Color', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-banner-carousel .item-text .item-title' => 'color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'desc_typography',
                            'label' => esc_html__('Description Typography', 'sntravel' ),
                            'type' => \Elementor\Group_Control_Typography::get_type(),
                            'control_type' => 'group',
                            'selector' => '{{WRAPPER}} .sntravel-banner-carousel .item-description',
                        ),
                        array(
                            'name' => 'desc_color',
                            'label' => esc_html__('Description Color', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-banner-carousel .item-description' => 'color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'text_btn_color',
                            'label' => esc_html__('Text Button Color', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-banner-carousel .item-readmore .btn' => 'color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'name_typography',
                            'label' => esc_html__('Name Typography', 'sntravel' ),
                            'type' => \Elementor\Group_Control_Typography::get_type(),
                            'control_type' => 'group',
                            'selector' => '{{WRAPPER}} .sntravel-banner-carousel .item-name',
                        ),
                        array(
                            'name' => 'name_color',
                            'label' => esc_html__('Name Color', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-banner-carousel .item-name' => 'color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'height_background',
                            'label' => esc_html__('Height Background', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::SLIDER,
                            'control_type' => 'responsive',
                            'size_units' => [ 'px' ],
                            'range' => [
                                'px' => [
                                    'min' => 0,
                                    'max' => 1100,
                                ],
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-banner-carousel .banner-item' => 'min-height: {{SIZE}}{{UNIT}};',
                            ],
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
            ),
        ),
    ),
    basilico_get_class_widget_path()
);