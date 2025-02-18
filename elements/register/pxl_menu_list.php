<?php
pxl_add_custom_widget(
    array(
        'name' => 'pxl_menu_list',
        'title' => esc_html__('PXL Food Menu', 'sntravel' ),
        'icon' => 'eicon-bullet-list',
        'categories' => array('pxltheme-core'),
        'scripts'    => array(),
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
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/pxl_menu_list-1.jpg'
                                ],
                                '2' => [
                                    'label' => esc_html__( 'Layout 2', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/pxl_menu_list-2.jpg'
                                ],
                                '3' => [
                                    'label' => esc_html__( 'Layout 3', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/pxl_menu_list-3.jpg'
                                ],
                                '4' => [
                                    'label' => esc_html__( 'Layout 4', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/pxl_menu_list-4.jpg'
                                ],
                                '5' => [
                                    'label' => esc_html__( 'Layout 5', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/pxl_menu_list-5.jpg'
                                ],
                                '6' => [
                                    'label' => esc_html__( 'Layout 6', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/pxl_menu_list-6.jpg'
                                ],
                                '7' => [
                                    'label' => esc_html__( 'Layout 7', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/pxl_menu_list-7.jpg'
                                ],
                                '8' => [
                                    'label' => esc_html__( 'Layout 8', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/pxl_menu_list-8.jpg'
                                ],
                                '9' => [
                                    'label' => esc_html__( 'Layout 9', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/pxl_menu_list-9.jpg'
                                ],
                            ],
                        )
                    )
                ),
                array(
                    'name' => 'tab_content',
                    'label' => esc_html__( 'Content', 'sntravel' ),
                    'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                    'controls' => array_merge(
                        array(
                            array(
                                'name' => 'list',
                                'label' => esc_html__('Items', 'sntravel'),
                                'type' => \Elementor\Controls_Manager::REPEATER,
                                'controls' => array(
                                    array(
                                        'name' => 'selected_img',
                                        'label' => esc_html__('Image', 'sntravel' ),
                                        'type' => \Elementor\Controls_Manager::MEDIA,
                                        'default' => '',
                                        'description' => esc_html__('This is the heading', 'sntravel' )
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
                                        'return_value' => 'yes',
                                        'default' => 'no',
                                        'description' => esc_html__('For Layout 6. Highlight product and show custom tags.', 'sntravel')
                                    ),
                                    array(
                                        'name' => 'tag_1',
                                        'label' => esc_html__('Show Custom Tag 1 (Optional)', 'sntravel'),
                                        'type' => \Elementor\Controls_Manager::SWITCHER,
                                        'return_value' => 'yes',
                                        'default' => 'no'
                                    ),
                                    array(
                                        'name' => 'tag_1_text',
                                        'label' => esc_html__('Custom Tag 1 Text', 'sntravel'),
                                        'type' => \Elementor\Controls_Manager::TEXT,
                                        'default' => esc_html__('Recommended', 'sntravel'),
                                        'label_block' => true,
                                        'condition' => [
                                            'tag_1' => 'yes'
                                        ]
                                    ),
                                    array(
                                        'name' => 'tag_1_color',
                                        'label' => esc_html__('Custom Tag 1 Color', 'sntravel'),
                                        'type' => \Elementor\Controls_Manager::COLOR,
                                        'default' => '#374ccb',
                                        'selectors' => [
                                            '{{WRAPPER}} {{CURRENT_ITEM}} .custom-tag.tag-1' => 'background-color: {{VALUE}};'
                                        ],
                                        'condition' => [
                                            'tag_1' => 'yes'
                                        ],
                                    ),
                                    array(
                                        'name' => 'tag_2',
                                        'label' => esc_html__('Show Custom Tag 2 (Optional)', 'sntravel'),
                                        'type' => \Elementor\Controls_Manager::SWITCHER,
                                        'return_value' => 'yes',    
                                        'default' => 'no'
                                    ),
                                    array(
                                        'name' => 'tag_2_text',
                                        'label' => esc_html__('Custom Tag 2 Text', 'sntravel'),
                                        'type' => \Elementor\Controls_Manager::TEXT,
                                        'default' => esc_html__('Recommended', 'sntravel'),
                                        'label_block' => true,
                                        'condition' => [
                                            'tag_2' => 'yes'
                                        ]
                                    ),
                                    array(
                                        'name' => 'tag_2_color',
                                        'label' => esc_html__('Custom Tag 2 Color', 'sntravel'),
                                        'type' => \Elementor\Controls_Manager::COLOR,
                                        'default' => '#8560a8',
                                        'selectors' => [
                                            '{{WRAPPER}} {{CURRENT_ITEM}} .custom-tag.tag-2' => 'background-color: {{VALUE}};'
                                        ],
                                        'condition' => [
                                            'tag_2' => 'yes'
                                        ]
                                    ),
                                ),
                                'title_field' => '{{{ title }}}',
                            ),
                        ),
                        basilico_elementor_animation_opts([
                            'name'   => 'item',
                            'label' => esc_html__('Item', 'sntravel'),
                        ]),
                    ),
                ),
                array(
                    'name' => 'tab_style',
                    'label' => esc_html__('Style', 'sntravel' ),
                    'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                    'controls' => array(
                        array(
                            'name' => 'img_position',
                            'label' => esc_html__('Image Position', 'sntravel'),
                            'type' => \Elementor\Controls_Manager::SELECT,
                            'options'       => [
                                'df'   => esc_html__('Default', 'sntravel'),
                                'absolute left'  => esc_html__('Absolute Left', 'sntravel'),
                                'absolute right'  => esc_html__('Absolute Right', 'sntravel'),
                            ],
                            'default'       => 'df',
                            'condition' => [
                                'layout' => ['1', '2', '3']
                            ]
                        ),
                        array(
                            'name' => 'heading_color',
                            'label' => esc_html__('Heading Color', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .pxl-menu-list .pxl-menu-item .menu-title' => 'color: {{VALUE}};',
                                '{{WRAPPER}} .pxl-menu-list .pxl-menu-item .menu-title a' => 'color: {{VALUE}}; background-image: linear-gradient(transparent calc(100% - 1px), {{VALUE}} 1px);'
                            ],
                        ),
                        array(
                            'name' => 'heading_typography',
                            'label' => esc_html__('Heading Typography', 'sntravel' ),
                            'type' => \Elementor\Group_Control_Typography::get_type(),
                            'control_type' => 'group',
                            'selector' => '{{WRAPPER}} .pxl-menu-list .pxl-menu-item .menu-title',
                        ),
                        array(
                            'name' => 'sub_heading_color',
                            'label' => esc_html__('Sub Heading Color', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .pxl-menu-list .pxl-menu-item .menu-sub-title' => 'color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'sub_heading_typography',
                            'label' => esc_html__('Sub Heading Typography', 'sntravel' ),
                            'type' => \Elementor\Group_Control_Typography::get_type(),
                            'control_type' => 'group',
                            'selector' => '{{WRAPPER}} .pxl-menu-list .pxl-menu-item .menu-sub-title',
                        ),
                        array(
                            'name' => 'price_color',
                            'label' => esc_html__('Price Color', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .pxl-menu-list .pxl-menu-item .menu-price' => 'color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'price_typography',
                            'label' => esc_html__('Price Typography', 'sntravel' ),
                            'type' => \Elementor\Group_Control_Typography::get_type(),
                            'control_type' => 'group',
                            'selector' => '{{WRAPPER}} .pxl-menu-list .pxl-menu-item .menu-price',
                        ),
                        array(
                            'name' => 'description_color',
                            'label' => esc_html__('Description Color', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .pxl-menu-list .menu-description' => 'color: {{VALUE}};',
                            ],
                            'condition' => [
                                'layout' => ['8']
                            ]
                        ),
                        array(
                            'name' => 'description_typography',
                            'label' => esc_html__('Description Typography', 'sntravel' ),
                            'type' => \Elementor\Group_Control_Typography::get_type(),
                            'control_type' => 'group',
                            'selector' => '{{WRAPPER}} .pxl-menu-list .menu-description',
                            'condition' => [
                                'layout' => ['8']
                            ]
                        ),
                        array(
                            'name' => 'icon_color',
                            'label' => esc_html__('Icon Color', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .pxl-menu-list .main-content .featured .menu-title::after' => 'color: {{VALUE}};',
                            ],
                            'condition' => [
                                'layout' => ['8']
                            ]
                        ),
                        array(
                            'name' => 'icon_size',
                            'label' => esc_html__( 'Icon Size', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::SLIDER,
                            'size_units' => ['px'],
                            'control_type' => 'responsive',
                            'range' => [
                                'px' => [
                                    'min' => 13,
                                    'max' => 100,
                                ],
                            ],
                            'tablet_default' => [
                                'unit' => 'px',
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .pxl-menu-list .main-content .featured .menu-title::after' => 'font-size: {{SIZE}}{{UNIT}};',
                            ],
                            'condition' => [
                                'layout' => ['8']
                            ]
                        ),
                        array(
                            'name' => 'divider_position',
                            'label' => esc_html__('Divider Position', 'sntravel' ),
                            'description' => esc_html__('Vertical deviation from the original position (Unit: px)', 'sntravel'),
                            'type' => \Elementor\Controls_Manager::NUMBER,
                            'selectors' => [
                                '{{WRAPPER}} .pxl-menu-list .pxl-menu-item .pxl-separator' => 'transform: translateY({{VALUE}}px);',
                            ],
                            'condition' => [
                                'layout!' => ['7']
                            ]
                        ),
                        array(
                            'name' => 'divider_color',
                            'label' => esc_html__('Divider Color', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .pxl-menu-list .pxl-menu-item .pxl-separator' => 'border-color: {{VALUE}};',
                                '{{WRAPPER}} .pxl-menu-list .pxl-divider' => 'background-color: {{VALUE}};',
                                '{{WRAPPER}} .pxl-menu-list.layout-3 .pxl-menu-item .pxl-separator' => 'background-image: radial-gradient({{VALUE}} 1px, transparent 0);',
                            ],
                        ),
                        array(
                            'name' => 'item_spacing',
                            'label' => esc_html__('Item Space', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::SLIDER,
                            'control_type' => 'responsive',
                            'size_units' => [ 'px' ],
                            'range' => [
                                'px' => [
                                    'min' => 0,
                                    'max' => 150,
                                ],
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .pxl-menu-list .pxl-menu-item + .pxl-menu-item' => 'margin-top: {{SIZE}}{{UNIT}};',
                            ],
                        ),
                        array(
                            'name' => 'max_height',
                            'label' => esc_html__( 'Max Height Scroll', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::SLIDER,
                            'size_units' => [ 'px', '%', 'em', 'rem', 'vw', 'custom' ],
                            'control_type' => 'responsive',
                            'range' => [
                                'px' => [
                                    'min' => 0,
                                    'max' => 1000,
                                ],
                            ],
                            'default' => [
                                'size' => '',
                                'unit' => 'px',
                            ],
                            'tablet_default' => [
                                'unit' => 'px',
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .pxl-menu-list .pxl-item-list' => 'max-height: {{SIZE}}{{UNIT}};',
                            ],
                            'condition' => [
                                'layout' => ['8']
                            ]
                        ),
                    ),
                ),
            ),
        ),
    ),
    basilico_get_class_widget_path()
);