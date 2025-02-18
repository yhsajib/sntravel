<?php
// Register Fancy Box Widget
sntravel_add_custom_widget(
    array(
        'name'       => 'sntravel_food_menu_single',
        'title'      => esc_html__( 'PXL Food Menu Single', 'sntravel' ),
        'icon'       => 'eicon-bullet-list',
        'categories' => array('sntraveltheme-core'),
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
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/sntravel_food_menu_single-1.jpg'
                                ],
                            ]
                        )
                    )
                ),
                array(
                    'name'     => 'content_section',
                    'label'    => esc_html__( 'Content', 'sntravel' ),
                    'tab'      => 'content',
                    'controls' => array(
                        array(
                            'name' => 'image',
                            'label' => esc_html__('Image', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::MEDIA,
                        ),
                        array(
                            'name' => 'title',
                            'label' => esc_html__('Title', 'sntravel'),
                            'type' => \Elementor\Controls_Manager::TEXT,
                            'label_block' => true,
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
                        ),
                        array(
                            'name' => 'icon',
                            'label' => esc_html__('Icon', 'sntravel'),
                            'type'             => 'icons',
                        ),
                        array(
                            'name' => 'description',
                            'label' => esc_html__('Description', 'sntravel'),
                            'type' => \Elementor\Controls_Manager::TEXTAREA,
                            'label_block' => true,
                        ),
                    )
                ),
                array(
                    'name' => 'section_style',
                    'label' => esc_html__('Style', 'sntravel'),
                    'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                    'controls' => array(
                        array(
                            'name' => 'padding',
                            'label' => esc_html__('Padding', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px' ],
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-food-menu-single .content-inner' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'control_type' => 'responsive',
                        ),
                        array(
                            'name' => 'title_typography',
                            'label' => esc_html__('Title Typography', 'sntravel' ),
                            'type' => \Elementor\Group_Control_Typography::get_type(),
                            'control_type' => 'group',
                            'selector' => '{{WRAPPER}} .sntravel-food-menu-single .item-name',
                        ),
                        array(
                            'name' => 'title_color',
                            'label' => esc_html__('Title Color', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-food-menu-single .item-name' => 'color: {{VALUE}};',
                            ],
                            'separator' => 'after',
                        ),
                        array(
                            'name' => 'sub_title_typography',
                            'label' => esc_html__('Sub Title Typography', 'sntravel' ),
                            'type' => \Elementor\Group_Control_Typography::get_type(),
                            'control_type' => 'group',
                            'selector' => '{{WRAPPER}} .sntravel-food-menu-single .item-sub-title',
                        ),
                        array(
                            'name' => 'sub_title_color',
                            'label' => esc_html__('Sub Title Color', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-food-menu-single .item-sub-title' => 'color: {{VALUE}};',
                            ],
                            'separator' => 'after',
                        ),
                        array(
                            'name' => 'price_typography',
                            'label' => esc_html__('Price Typography', 'sntravel' ),
                            'type' => \Elementor\Group_Control_Typography::get_type(),
                            'control_type' => 'group',
                            'selector' => '{{WRAPPER}} .sntravel-food-menu-single .item-price',
                        ),
                        array(
                            'name' => 'price_color',
                            'label' => esc_html__('Price Color', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-food-menu-single .item-price' => 'color: {{VALUE}};',
                            ],
                            'separator' => 'after',
                        ),
                        array(
                            'name' => 'icon_color',
                            'label' => esc_html__('Icon Color', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-food-menu-single .item-icon i' => 'color: {{VALUE}};',
                                '{{WRAPPER}} .sntravel-food-menu-single .item-icon svg' => 'fill: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'icon_font_size',
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
                                '{{WRAPPER}} .sntravel-food-menu-single .item-icon i' => 'font-size: {{SIZE}}{{UNIT}};',
                                '{{WRAPPER}} .sntravel-food-menu-single .item-icon svg' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
                            ],
                            'separator' => 'after',
                        ),
                        array(
                            'name' => 'des_color',
                            'label' => esc_html__('Description Color', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-food-menu-single .item-description' => 'color: {{VALUE}};',
                            ],
                        ),
                    ),
                ),
            )
        )
    ),
    basilico_get_class_widget_path()
);