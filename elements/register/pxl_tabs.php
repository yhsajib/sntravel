<?php
$templates = basilico_get_templates_option('default', []) ;
sntravel_add_custom_widget(
    array(
        'name'       => 'sntravel_tabs',
        'title'      => esc_html__( 'PXL Tabs', 'sntravel' ),
        'icon'       => 'eicon-tabs',
        'categories' => array('sntraveltheme-core'),
        'scripts' => [
            'sntravel-tabs',
        ],
        'params' => array(
            'sections' => array(
                array(
                    'name'     => 'layout_section',
                    'label'    => esc_html__( 'Layout', 'sntravel' ),
                    'tab'      => 'layout',
                    'controls' => array(
                        array(
                            'name'    => 'layout',
                            'label'   => esc_html__( 'Layout', 'sntravel' ),
                            'type'    => 'layoutcontrol',
                            'default' => '1',
                            'options' => [
                                '1' => [
                                    'label' => esc_html__( 'Layout 1', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/sntravel_tabs-1.jpg'
                                ],
                                '2' => [
                                    'label' => esc_html__( 'Layout 2', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/sntravel_tabs-2.jpg'
                                ],
                                '3' => [
                                    'label' => esc_html__( 'Layout 3', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/sntravel_tabs-3.jpg'
                                ],
                                '4' => [
                                    'label' => esc_html__( 'Layout 4', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/sntravel_tabs-4.jpg'
                                ],
                                '5' => [
                                    'label' => esc_html__( 'Layout 5', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/sntravel_tabs-5.jpg'
                                ],
                                '6' => [
                                    'label' => esc_html__( 'Layout 6', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/sntravel_tabs-6.jpg'
                                ],
                                '7' => [
                                    'label' => esc_html__( 'Layout 7', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/sntravel_tabs-7.jpg'
                                ],
                                '8' => [
                                    'label' => esc_html__( 'Layout 8', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/sntravel_tabs-8.jpg'
                                ],
                                '9' => [
                                    'label' => esc_html__( 'Layout 9', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/sntravel_tabs-9.jpg'
                                ],
                                '10' => [
                                    'label' => esc_html__( 'Layout 10', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/sntravel_tabs-10.jpg'
                                ],
                                '11' => [
                                    'label' => esc_html__( 'Layout 11', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/sntravel_tabs-11.jpg'
                                ],
                                '12' => [
                                    'label' => esc_html__( 'Layout 12', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/sntravel_tabs-12.jpg'
                                ],
                                '13' => [
                                    'label' => esc_html__( 'Layout 13', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/sntravel_tabs-13.jpg'
                                ],
                                '14' => [
                                    'label' => esc_html__( 'Layout 14', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/sntravel_tabs-14.jpg'
                                ],
                                '15' => [
                                    'label' => esc_html__( 'Layout 15', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/sntravel_tabs-15.jpg'
                                ],
                                '16' => [
                                    'label' => esc_html__( 'Layout 16', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/sntravel_tabs-16.jpg'
                                ],
                                '17' => [
                                    'label' => esc_html__( 'Layout 17', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/sntravel_tabs-17.jpg'
                                ],
                            ],
                            'prefix_class' => 'sntravel-tabs-layout-',
                        ),
                    )
                ),
                array(
                    'name'     => 'content_section',
                    'label'    => esc_html__( 'Content', 'sntravel' ),
                    'tab'      => 'content',
                    'controls' => array(
                        array(
                            'name'             => 'selected_icon',
                            'label'            => esc_html__( 'Icon', 'sntravel' ),
                            'type'             => 'icons',
                            'default'          => [
                                'library' => 'fa-solid',
                                'value'   => 'fas fa-pizza-slice'
                            ],
                            'condition' => [
                                'layout' => '6'
                            ]
                        ),
                        array(
                            'name' => 'sub_title',
                            'label' => esc_html__('Sub Title', 'sntravel'),
                            'type' => 'text',
                            'default' => esc_html__('Special Menu', 'sntravel'),
                            'condition' => [
                                'layout' => '2'
                            ]
                        ),
                        array(
                            'name' => 'title_layout10',
                            'label' => esc_html__('Title', 'sntravel'),
                            'type' => 'text',
                            'default' => esc_html__('Categories', 'sntravel'),
                            'condition' => [
                                'layout' => '10'
                            ]
                        ),
                        array(
                            'name' => 'title_layout10_typography',
                            'label' => esc_html__('Title Typography', 'sntravel' ),
                            'type' => \Elementor\Group_Control_Typography::get_type(),
                            'control_type' => 'group',
                            'selector' => '{{WRAPPER}} .sntravel-tabs.layout-10 .tabs-title .box-title',
                            'condition' => [
                                'layout' => '10'
                            ]
                        ),
                        array(
                            'name' => 'title_layout10_color',
                            'label' => esc_html__('Title Color', 'sntravel' ),
                            'type' => 'color',
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-tabs.layout-10 .tabs-title .box-title' => 'color: {{VALUE}};'
                            ],
                            'condition' => [
                                'layout' => '10'
                            ]
                        ),
                        array(
                            'name' => 'button_text',
                            'label' => esc_html__('Button Text', 'sntravel'),
                            'type' => 'text',
                            'default' => esc_html__('View All Menu', 'sntravel'),
                            'condition' => [
                                'layout' => '2'
                            ]
                        ),
                        array(
                            'name' => 'button_url',
                            'label' => esc_html__('Button URL', 'sntravel'),
                            'type' => 'text',
                            'default' => esc_html__('#', 'sntravel'),
                            'condition' => [
                                'layout' => '2'
                            ]
                        ),
                        array(
                            'name'        => 'item_background',
                            'label'       => esc_html__('Background Tab', 'sntravel'),
                            'type'        => 'media',
                            'label_block' => true,
                            'condition' => [
                                'layout' => '11'
                            ]
                        ),
                        array(
                            'name' => 'link_to_carousel',
                            'label' => esc_html__('ID Link To Carousel', 'sntravel'),
                            'type' => \Elementor\Controls_Manager::TEXT,
                            'condition' => [
                                'layout!' => '14'
                            ]
                        ),
                        array(
                            'name' => 'active_tab',
                            'label' => esc_html__( 'Active Tab', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::NUMBER,
                            'default' => 1,
                            'separator' => 'after',
                        ),
                        array(
                            'name' => 'tabs_list',
                            'label' => esc_html__('Tabs List', 'sntravel'),
                            'type' => \Elementor\Controls_Manager::REPEATER,
                            'condition' => [
                                'layout!' => ['14', '15'],
                            ],
                            'controls' => array(
                                array(
                                    'name'             => 'tab_icon',
                                    'label'            => esc_html__( 'Icon', 'sntravel' ),
                                    'type'             => 'icons',
                                    'default'          => [
                                        'library' => 'fa-solid',
                                        'value'   => 'fas fa-pizza-slice'
                                    ],
                                    'description' => esc_html__('Use for layout 7, 12', 'sntravel'),
                                ),
                                array(
                                    'name' => 'item_image',
                                    'label' => esc_html__('Image', 'sntravel' ),
                                    'type' => \Elementor\Controls_Manager::MEDIA,
                                    'description' => esc_html__('Use for layout 16', 'sntravel'),
                                ),
                                array(
                                    'name' => 'tab_title',
                                    'label' => esc_html__('Title', 'sntravel'),
                                    'type' => \Elementor\Controls_Manager::TEXT,
                                    'label_block' => true,
                                ),
                                array(
                                    'name' => 'content_type',
                                    'label' => esc_html__('Content Type', 'sntravel'),
                                    'type' => 'select',
                                    'options' => [
                                        'df' => esc_html__( 'Default', 'sntravel' ),
                                        'template' => esc_html__( 'From Template Builder', 'sntravel' )
                                    ],
                                    'default' => 'df' 
                                ),
                                array(
                                    'name' => 'content_template',
                                    'label' => esc_html__('Select Templates', 'sntravel'),
                                    'description'        => sprintf(esc_html__('Please create your layout before choosing. %sClick Here%s','sntravel'),'<a href="' . esc_url( admin_url( 'edit.php?post_type=sntravel-template' ) ) . '">','</a>'),
                                    'type' => 'select',
                                    'options' => $templates,
                                    'default' => 'df',
                                    'condition' => ['content_type' => 'template'] 
                                ),
                                array(
                                    'name' => 'tab_content',
                                    'label' => esc_html__('Enter Content', 'sntravel'),
                                    'type' => \Elementor\Controls_Manager::WYSIWYG,
                                    'default' => '',
                                    'condition' => ['content_type' => 'df'] 
                                ),
                            ),
                            'title_field' => '{{{ tab_title }}}',
                        ),
                        array(
                            'name' => 'tabs_list_2',
                            'label' => esc_html__('Tabs List', 'sntravel'),
                            'type' => \Elementor\Controls_Manager::REPEATER,
                            'condition' => [
                                'layout' => ['14', '15']
                            ],
                            'controls' => array(
                                array(
                                    'name' => 'image',
                                    'label' => esc_html__('Image', 'sntravel' ),
                                    'type' => \Elementor\Controls_Manager::MEDIA,
                                ),
                                array(
                                    'name' => 'tab_title_2',
                                    'label' => esc_html__('Title', 'sntravel'),
                                    'type' => \Elementor\Controls_Manager::TEXT,
                                    'label_block' => true,
                                ),
                                array(
                                    'name' => 'position',
                                    'label' => esc_html__('Position', 'sntravel'),
                                    'type' => \Elementor\Controls_Manager::TEXT,
                                    'label_block' => true,
                                ),
                                array(
                                    'name' => 'description',
                                    'label' => esc_html__('Description', 'sntravel'),
                                    'type' => \Elementor\Controls_Manager::TEXTAREA,
                                    'default' => '',
                                ),
                                array(
                                    'name' => 'is_button',
                                    'label' => esc_html__('Show Button', 'sntravel'),
                                    'type' => \Elementor\Controls_Manager::SWITCHER,
                                    'return_value' => 'yes',
                                    'default' => 'no',
                                    'description' => esc_html__('Use For Layout 15', 'sntravel')
                                ),
                                array(
                                    'name' => 'button_text',
                                    'label' => esc_html__('Button Text', 'sntravel'),
                                    'type' => \Elementor\Controls_Manager::TEXT,
                                    'default' => '',
                                    'condition' => [
                                        'is_button' => 'yes'
                                    ]
                                ),
                                array(
                                    'name' => 'link',
                                    'label' => esc_html__('Link', 'sntravel'),
                                    'type' => \Elementor\Controls_Manager::URL,
                                    'label_block' => true,
                                    'condition' => [
                                        'is_button' => 'yes'
                                    ]
                                ),
                            ),
                            'title_field' => '{{{ tab_title_2 }}}',
                        ),
                        array(
                            'name' => 'content_padding',
                            'label' => esc_html__('Content Padding', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px' ],
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-tabs .tabs-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'control_type' => 'responsive',
                            'condition' => [
                                'layout!' => ['13', '15']
                            ]
                        ),
                        array(
                            'name' => 'content_margin',
                            'label' => esc_html__('Content Margin', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px' ],
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-tabs .tabs-content, {{WRAPPER}} .sntravel-tabs.layout-15 .tabs-title .title-wrap' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'control_type' => 'responsive',
                            'condition' => [
                                'layout' => ['13', '15']
                            ]
                        ),
                        array(
                            'name' => 'title_space',
                            'label' => esc_html__('Title Space', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::SLIDER,
                            'control_type' => 'responsive',
                            'size_units' => [ 'px' ],
                            'range' => [
                                'px' => [
                                    'min' => 0,
                                    'max' => 60,
                                ],
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-tabs .tabs-title .title-wrap' => 'column-gap: {{SIZE}}{{UNIT}};',
                                '{{WRAPPER}} .sntravel-tabs.layout-12 .tabs-title .title-wrap, .sntravel-tabs.layout-13 .tabs-title .title-wrap' => 'gap: {{SIZE}}{{UNIT}} !important;',
                                '{{WRAPPER}} .sntravel-tabs.layout-15 .tab-title' => 'padding-top: {{SIZE}}{{UNIT}}; padding-bottom: {{SIZE}}{{UNIT}};',
                            ],
                            'condition' => [
                                'layout!' => '14'
                            ]
                        ),
                        array(
                            'name' => 'positions_y_border',
                            'label' => esc_html__('Positions Border', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::SLIDER,
                            'control_type' => 'responsive',
                            'size_units' => [ 'px','%' ],
                            'range' => [
                                'px' => [
                                    'min' => -100,
                                    'max' => 100,
                                ],
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-tabs.layout-17 .tab-title::before' => 'right: {{SIZE}}{{UNIT}};',
                            ],
                            'condition' => [
                                'layout' => '17'
                            ]
                        ),
                        array(
                            'name' => 'image_space',
                            'label' => esc_html__('Image Space', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::SLIDER,
                            'control_type' => 'responsive',
                            'size_units' => [ 'px' ],
                            'range' => [
                                'px' => [
                                    'min' => 0,
                                    'max' => 60,
                                ],
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-tabs .tabs-title .image-wrap' => 'column-gap: {{SIZE}}{{UNIT}};',
                                '{{WRAPPER}} .sntravel-tabs.layout-16 .tab-title' => 'gap: {{SIZE}}{{UNIT}};',
                            ],
                            'condition' => [
                                'layout' => ['14', '16']
                            ]
                        ),
                        array(
                            'name' => 'background_image_spaceX',
                            'label' => esc_html__('Background SpaceX(px)', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::SLIDER,
                            'control_type' => 'responsive',
                            'size_units' => [ 'px' ],
                            'range' => [
                                'px' => [
                                    'min' => -200,
                                    'max' => 200,
                                ],
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-tabs .tab-title .item-image::after' => 'right: calc(-50% - {{SIZE}}{{UNIT}});',
                            ],
                            'condition' => [
                                'layout' => ['16']
                            ]
                        ),
                        array(
                            'name' => 'background_image_spaceY',
                            'label' => esc_html__('Background SpaceY(px)', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::SLIDER,
                            'control_type' => 'responsive',
                            'size_units' => [ 'px' ],
                            'range' => [
                                'px' => [
                                    'min' => -200,
                                    'max' => 200,
                                ],
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-tabs .tab-title .item-image::after' => 'top: calc(-50% - {{SIZE}}{{UNIT}});',
                            ],
                            'condition' => [
                                'layout' => ['16']
                            ]
                        ),
                        array(
                            'name' => 'title_padding',
                            'label' => esc_html__('Title Padding', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px' ],
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-tabs .tabs-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'control_type' => 'responsive',
                            'condition' => [
                                'layout' => '12'
                            ]
                        ),
                        array(
                            'name' => 'tab_background',
                            'label' => esc_html__('Tab Background', 'sntravel' ),
                            'type' => 'color',
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-tabs.layout-4' => 'background-color: {{VALUE}};'
                            ],
                            'condition' => [
                                'layout' => '4'
                            ]
                        ),
                        array(
                            'name' => 'title_divider_color',
                            'label' => esc_html__('Title Divider Color', 'sntravel' ),
                            'type' => 'color',
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-tabs.layout-4 .tabs-title:after' => 'border-color: {{VALUE}};'
                            ],
                            'condition' => [
                                'layout' => '4'
                            ]
                        ),
                        array(
                            'name' => 'title_typography',
                            'label' => esc_html__('Title Typography', 'sntravel' ),
                            'type' => \Elementor\Group_Control_Typography::get_type(),
                            'control_type' => 'group',
                            'selector' => '{{WRAPPER}} .sntravel-tabs .tab-title, {{WRAPPER}} .sntravel-tabs.layout-14 .item-title, {{WRAPPER}} .sntravel-tabs.layout-15 .tab-title > span',
                        ),
                        array(
                            'name' => 'title_background',
                            'label' => esc_html__('Title Background', 'sntravel' ),
                            'type' => 'color',
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-tabs .tab-title' => 'background-color: {{VALUE}};'
                            ],
                            'condition' => [
                                'layout!' => ['10', '14', '15', '16', '17']
                            ]
                        ),
                        array(
                            'name' => 'title_active_background',
                            'label' => esc_html__('Active Background', 'sntravel' ),
                            'type' => 'color',
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-tabs .tab-title.active' => 'background-color: {{VALUE}}; border-color: {{VALUE}};'
                            ],
                            'condition' => [
                                'layout!' => ['10', '14', '15', '16', '17']
                            ]
                        ),
                        array(
                            'name' => 'toggle_background',
                            'label' => esc_html__('Toggle Background', 'sntravel' ),
                            'type' => 'color',
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-tabs .toggle-slide' => 'background-color: {{VALUE}} !important;'
                            ],
                            'condition' => [
                                'layout!' => ['10','11','12','13', '14', '15', '16', '17']
                            ]
                        ),
                        array(
                            'name' => 'icon_size',
                            'label' => esc_html__('Icon Size', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::SLIDER,
                            'control_type' => 'responsive',
                            'size_units' => [ 'px' ],
                            'range' => [
                                'px' => [
                                    'min' => 0,
                                    'max' => 300,
                                ],
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-tabs .tab-title .title-icon i' => 'font-size: {{SIZE}}{{UNIT}};',
                                '{{WRAPPER}} .sntravel-tabs .tab-title .title-icon svg' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};'
                            ],
                            'condition' => [
                                'layout' => ['12', '17']
                            ]
                        ),
                        array(
                            'name' => 'icon_space',
                            'label' => esc_html__('Icon Space', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::SLIDER,
                            'control_type' => 'responsive',
                            'size_units' => [ 'px' ],
                            'range' => [
                                'px' => [
                                    'min' => 0,
                                    'max' => 100,
                                ],
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-tabs .tab-title' => 'gap: {{SIZE}}{{UNIT}};',
                            ],
                            'condition' => [
                                'layout' => '12'
                            ]
                        ),
                        array(
                            'name' => 'color_icon',
                            'label' => esc_html__('Icon Color', 'sntravel' ),
                            'type' => 'color',
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-tabs .tab-title .title-icon i' => 'color: {{VALUE}};',
                                '{{WRAPPER}} .sntravel-tabs .tab-title .title-icon svg' => 'fill: {{VALUE}};'
                            ],
                            'condition' => [
                                'layout' => ['12','17']
                            ]
                        ),
                        array(
                            'name' => 'icon_active_color',
                            'label' => esc_html__('Active Icon Color', 'sntravel' ),
                            'type' => 'color',
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-tabs .tab-title.active .title-icon i' => 'color: {{VALUE}};',
                                '{{WRAPPER}} .sntravel-tabs .tab-title.active .title-icon svg' => 'fill: {{VALUE}};'
                            ],
                            'condition' => [
                                'layout' => '12'
                            ]
                        ),
                        array(
                            'name' => 'bg_color_icon',
                            'label' => esc_html__('Background Icon', 'sntravel' ),
                            'type' => 'color',
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-tabs .tab-title .title-icon' => 'background-color: {{VALUE}};',
                            ],
                            'condition' => [
                                'layout' => '17'
                            ]
                        ),
                        array(
                            'name' => 'bg_active_icon',
                            'label' => esc_html__('Background Active Icon', 'sntravel' ),
                            'type' => 'color',
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-tabs .tab-title.active .title-icon' => 'background-color: {{VALUE}};',
                            ],
                            'condition' => [
                                'layout' => '17'
                            ]
                        ),
                        array(
                            'name' => 'padding_icon',
                            'label' => esc_html__('Padding Icon', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px' ],
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-tabs .tab-title .title-icon' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'control_type' => 'responsive',
                            'condition' => [
                                'layout' => ['17']
                            ]
                        ),
                        array(
                            'name' => 'title_color',
                            'label' => esc_html__('Title Color', 'sntravel' ),
                            'type' => 'color',
                            'selectors' => [
                                '{{WRAPPER}} .tab-title, {{WRAPPER}} .sntravel-tabs.layout-14 .item-title, {{WRAPPER}} .sntravel-tabs.layout-15 .tab-title > span' => 'color: {{VALUE}};'
                            ],
                        ),
                        array(
                            'name' => 'title_active_color',
                            'label' => esc_html__('Active Color', 'sntravel' ),
                            'type' => 'color',
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-tabs .tab-title.active, {{WRAPPER}} .sntravel-tabs.layout-15 .tab-title.active > span' => 'color: {{VALUE}};',
                                '{{WRAPPER}} .sntravel-tabs.layout-1 .tab-title:after' => 'border-bottom-color: {{VALUE}};',
                                '{{WRAPPER}} .sntravel-tabs .tab-title.active span:after' => 'background: {{VALUE}};'
                            ],
                            'condition' => [
                                'layout!' => '14'
                            ]
                        ),
                        array(
                            'name' => 'active_border_color',
                            'label' => esc_html__('Active Border Color', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-tabs .tabs-title .tab-title.active::before' => 'border-color: {{VALUE}};',
                            ],
                            'condition' => [
                                'layout' => ['14', '16']
                            ]
                        ),
                        array(
                            'name' => 'position_typography',
                            'label' => esc_html__('Position Typography', 'sntravel' ),
                            'type' => \Elementor\Group_Control_Typography::get_type(),
                            'control_type' => 'group',
                            'selector' => '{{WRAPPER}} .sntravel-tabs .item-position, {{WRAPPER}} .sntravel-tabs.layout-15 .box-content .item-position',
                            'condition' => [
                                'layout' => ['14', '15']
                            ]
                        ),
                        array(
                            'name' => 'position_color',
                            'label' => esc_html__('Position Color', 'sntravel' ),
                            'type' => 'color',
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-tabs .item-position, {{WRAPPER}} .sntravel-tabs.layout-15 .box-content .item-position' => 'color: {{VALUE}};'
                            ],
                            'condition' => [
                                'layout' => ['14', '15']
                            ]
                        ),
                        array(
                            'name' => 'description_typography',
                            'label' => esc_html__('Description Typography', 'sntravel' ),
                            'type' => \Elementor\Group_Control_Typography::get_type(),
                            'control_type' => 'group',
                            'selector' => '{{WRAPPER}} .sntravel-tabs .box-content .item-des',
                            'condition' => [
                                'layout' => '15'
                            ]
                        ),
                        array(
                            'name' => 'description_color',
                            'label' => esc_html__('Description Color', 'sntravel' ),
                            'type' => 'color',
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-tabs .box-content .item-des' => 'color: {{VALUE}};'
                            ],
                            'condition' => [
                                'layout' => '15'
                            ]
                        ),
                        array(
                            'name' => 'content_color',
                            'label' => esc_html__('Content Color', 'sntravel' ),
                            'type' => 'color',
                            'selectors' => [
                                '{{WRAPPER}} .tab-content' => 'color: {{VALUE}};'
                            ],
                            'condition' => [
                                'layout!' => '15'
                            ]
                        ),
                        array(
                            'name' => 'btn_color',
                            'label' => esc_html__('Button Text Color', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .tabs-title .btn-wrapper .btn span, {{WRAPPER}} .sntravel-tabs.layout-15 .box-content .btn-more' => 'color: {{VALUE}};',
                            ],
                            'condition' => [
                                'layout' => ['2', '15']
                            ]
                        ),
                        array(
                            'name' => 'btn_border_color',
                            'label' => esc_html__('Button Border Color', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-tabs .box-content .btn-more::after' => 'background-color: {{VALUE}};',
                            ],
                            'condition' => [
                                'layout' => ['15']
                            ]
                        ),
                        array(
                            'name' => 'border_color',
                            'label' => esc_html__('Border Color', 'sntravel' ),
                            'type' => 'color',
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-tabs .tabs-title, {{WRAPPER}} .sntravel-tabs.layout-15 .tab-title' => 'border-color: {{VALUE}};',
                                '{{WRAPPER}} .sntravel-tabs.layout-17 .tab-title::before' => 'background-image: linear-gradient(to bottom, {{VALUE}} 80%, transparent 20%);'
                            ],
                            'condition' => [
                                'layout' => ['11', '15', '17']
                            ]
                        ),
                        array(
                            'name' => 'btn_color_hover',
                            'label' => esc_html__('Button Text Color Hover', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .tabs-title .btn-wrapper .btn:hover span' => 'color: {{VALUE}};',
                            ],
                            'condition' => [
                                'layout' => '2'
                            ]
                        ),
                        array(
                            'name' => 'btn_bg_color',
                            'label' => esc_html__('Button Background Color', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .tabs-title .btn-wrapper .btn' => 'background-image: none; background-color: {{VALUE}}; border-color: {{VALUE}};',
                                '{{WRAPPER}} .tabs-title .btn-wrapper .btn::after' => 'background-image: none; background-color: {{VALUE}};'
                            ],
                            'condition' => [
                                'layout' => '2'
                            ]
                        ),
                        array(
                            'name' => 'btn_bg_color_hover',
                            'label' => esc_html__('Button Background Color Hover', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .tabs-title .btn-wrapper .btn:hover' => 'border-color: {{VALUE}};',
                                '{{WRAPPER}} .tabs-title .btn-wrapper .btn:hover::before' => 'background-color: {{VALUE}};',
                            ],
                            'condition' => [
                                'layout' => '2'
                            ]
                        ),
                        array(
                            'name'         => 'title_alignment',
                            'label'        => esc_html__( 'Title Alignment', 'sntravel' ),
                            'type'         => 'choose',
                            'control_type' => 'responsive',
                            'options' => [
                                'start' => [
                                    'title' => esc_html__( 'Start', 'sntravel' ),
                                    'icon'  => 'eicon-text-align-left',
                                ],
                                'center' => [
                                    'title' => esc_html__( 'Center', 'sntravel' ),
                                    'icon'  => 'eicon-text-align-center',
                                ],
                                'end' => [
                                    'title' => esc_html__( 'End', 'sntravel' ),
                                    'icon'  => 'eicon-text-align-right',
                                ]
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-tabs .tabs-title' => 'justify-content: {{VALUE}};',
                                '{{WRAPPER}} .sntravel-tabs .title-wrap' => 'justify-content: {{VALUE}};',
                                '{{WRAPPER}} .sntravel-tabs.layout-6 .title-wrap .tab-title' => 'align-items: {{VALUE}};'
                            ],
                            'condition' => [
                                'layout!' => ['14', '15']
                            ]
                        ),
                        array(
                            'name'         => 'image_alignment',
                            'label'        => esc_html__( 'Alignment', 'sntravel' ),
                            'type'         => 'choose',
                            'control_type' => 'responsive',
                            'options' => [
                                'start' => [
                                    'title' => esc_html__( 'Start', 'sntravel' ),
                                    'icon'  => 'eicon-text-align-left',
                                ],
                                'center' => [
                                    'title' => esc_html__( 'Center', 'sntravel' ),
                                    'icon'  => 'eicon-text-align-center',
                                ],
                                'end' => [
                                    'title' => esc_html__( 'End', 'sntravel' ),
                                    'icon'  => 'eicon-text-align-right',
                                ]
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-tabs .tabs-title .image-wrap' => 'justify-content: {{VALUE}};',
                                '{{WRAPPER}} .sntravel-tabs .tabs-content .tab-content' => 'text-align: {{VALUE}};',
                            ],
                            'condition' => [
                                'layout' => '14'
                            ]
                        ),
                        array(
                            'name' => 'border_height',
                            'label' => esc_html__('Border Height', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::SLIDER,
                            'control_type' => 'responsive',
                            'size_units' => [ 'px' ],
                            'range' => [
                                'px' => [
                                    'min' => 0,
                                    'max' => 20,
                                ],
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-tabs .tab-title span:after' => 'height: {{SIZE}}{{UNIT}};',
                            ],
                            'condition' => [
                                'layout' => '8'
                            ]
                        ),
                        array(
                            'name' => 'divider_color',
                            'label' => esc_html__('Divider Color', 'sntravel' ),
                            'type' => 'color',
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-tabs .title-wrap:after' => 'background-color: {{VALUE}};',
                            ],
                            'condition' => [
                                'layout' => '8'
                            ]
                        ),
                        array(
                            'name' => 'image_size_Width',
                            'label' => esc_html__('Image Size Width(px)', 'sntravel' ),
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
                                '{{WRAPPER}} .sntravel-tabs .tabs-title img' => 'max-width: {{SIZE}}{{UNIT}};',
                            ],
                            'condition' => [
                                'layout' => ['14', '16']
                            ]
                        ),
                        array(
                            'name' => 'tab_animation',
                            'label' => esc_html__('Active Animation', 'sntravel'),
                            'type' => \Elementor\Controls_Manager::SELECT,
                            'options' => [
                                'fadeInUp' => esc_html__('Fade In Up', 'sntravel'),
                                'fadeIn' => esc_html__('Fade In', 'sntravel'),
                                'zoomIn' => esc_html__('Zoom In', 'sntravel')
                            ],
                            'default' => 'fadeInUp'
                        ),
                    ),
                )
            )
        )
    ),
    basilico_get_class_widget_path()
);