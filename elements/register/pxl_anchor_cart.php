<?php
sntravel_add_custom_widget(
    array(
        'name'       => 'sntravel_anchor_cart',
        'title'      => esc_html__( 'PXL Cart', 'sntravel' ),
        'icon'       => 'eicon-anchor',
        'categories' => array('sntraveltheme-core'),
        'scripts'    => array(),
        'params' => array(
            'sections' => array(
                array(
                    'name'     => 'icon_section',
                    'label'    => esc_html__( 'Settings', 'sntravel' ),
                    'tab'      => 'content',
                    'controls' => array(
                        array(
                            'name' => 'layout_type',
                            'label' => esc_html__('Layout Type', 'sntravel'),
                            'type' => 'select',
                            'options' => [
                                'layout-df' => esc_html__('Default (Icon)', 'sntravel'),
                                'layout-text' => esc_html__('Text', 'sntravel'),
                            ],
                            'default' => 'layout-df' 
                        ),
                        array(
                            'name' => 'cart_style',
                            'label' => esc_html__('Dropdown Layout', 'sntravel'),
                            'type' => 'select',
                            'options' => [
                                'layout-1' => esc_html__('Layout 1', 'sntravel'),
                                'layout-2' => esc_html__('Layout 2', 'sntravel'),
                                'layout-3' => esc_html__('Layout 3', 'sntravel'),
                                'layout-4' => esc_html__('Layout 4', 'sntravel'),
                                'layout-5' => esc_html__('Layout 5', 'sntravel'),
                                'layout-6' => esc_html__('Layout 6', 'sntravel'),
                                'layout-7' => esc_html__('Layout 7', 'sntravel'),
                            ],
                            'default' => 'layout-1' 
                        ),
                        array(
                            'name' => 'link_target',
                            'label' => esc_html__('Link Target', 'sntravel'),
                            'type' => 'select',
                            'options' => [
                                'cart-page' => esc_html__('Cart Page', 'sntravel'),
                                'cart-dropdown' => esc_html__('Cart Dropdown', 'sntravel'),
                            ],
                            'default' => 'cart_dropdown' 
                        ),
                        array(
                            'name'             => 'selected_icon',
                            'label'            => esc_html__( 'Icon', 'sntravel' ),
                            'type'             => 'icons',
                            'default'          => [
                                'library' => 'lnil',
                                'value'   => 'lnil lnil-cart'
                            ],
                            'condition' => ['layout_type' => 'layout-df']
                        ),
                        array(
                            'name'  => 'icon_size',
                            'label' => esc_html__( 'Icon Size(px)', 'sntravel' ),
                            'type'  => 'slider',
                            'control_type' => 'responsive',
                            'range' => [
                                'px' => [
                                    'min' => 15,
                                    'max' => 300,
                                ],
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-anchor-cart.layout-df a.cart-anchor .sntravel-anchor-icon' => 'font-size: {{SIZE}}{{UNIT}};',
                                '{{WRAPPER}} .sntravel-anchor-cart.layout-df a.cart-anchor .sntravel-anchor-icon svg' => 'width: {{SIZE}}{{UNIT}};',
                            ],
                            'condition' => ['layout_type' => 'layout-df']
                        ),
                        array(
                            'name'        => 'text_title',
                            'label'       => esc_html__( 'Text Title', 'sntravel' ),
                            'type'        => 'text',
                            'default'     => 'Basket',
                            'condition'   => ['layout_type' => 'layout-text']
                        ),
                        array(
                            'name' => 'title_typography',
                            'label' => esc_html__('Title Typography', 'sntravel' ),
                            'type' => \Elementor\Group_Control_Typography::get_type(),
                            'control_type' => 'group',
                            'selector' => '{{WRAPPER}} .sntravel-anchor',
                        ),
                        array(
                            'name' => 'icon_margin',
                            'label' => esc_html__('Icon Margin(px)', 'sntravel' ),
                            'type' => 'dimensions',
                            'control_type' => 'responsive',
                            'size_units' => [ 'px' ],
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-anchor-icon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'condition' => ['icon_type!' => 'none'],
                        ),
                        array(
                            'name' => 'icon_color',
                            'label' => esc_html__('Color', 'sntravel' ),
                            'type' => 'color',
                            'control_type' => 'responsive',
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-anchor, {{WRAPPER}} .sntravel-anchor-icon' => 'color: {{VALUE}};',
                            ],
                        ), 
                        array(
                            'name' => 'icon_color_hover',
                            'label' => esc_html__('Hover Color', 'sntravel' ),
                            'type' => 'color',
                            'control_type' => 'responsive',
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-anchor:hover, {{WRAPPER}} .sntravel-anchor:hover .sntravel-anchor-icon' => 'color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'cart_count_bg',
                            'label' => esc_html__('Count background', 'sntravel' ),
                            'type' => 'color',
                            'control_type' => 'responsive',
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-anchor-cart a.cart-anchor .mini-cart-count' => 'background-color: {{VALUE}};',
                            ],
                            'condition' => ['layout_type' => 'layout-df']
                        ),  
                        array(
                            'name' => 'cart_count_color',
                            'label' => esc_html__('Count Color', 'sntravel' ),
                            'type' => 'color',
                            'control_type' => 'responsive',
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-anchor-cart a.cart-anchor .mini-cart-count' => 'color: {{VALUE}};',
                            ],
                        ), 
                        array(
                            'name'         => 'show_cart_totals',
                            'label'        => esc_html__('Show Cart Total', 'sntravel'),
                            'type'         => 'select',
                            'options'      => [
                                'inline-flex' => esc_html__('Yes','sntravel'),
                                'none'  => esc_html__('No', 'sntravel')
                            ], 
                            'default'      => 'inline-flex', 
                            'control_type' => 'responsive',
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-anchor-cart a.cart-anchor .mini-cart-total' => 'display: {{VALUE}};',
                            ],
                            'prefix_class' => 'show-cart-totals%s-',
                        ),
                        array(
                            'name' => 'padding_cart',
                            'label' => esc_html__('Padding(px)', 'sntravel' ),
                            'type' => 'dimensions',
                            'control_type' => 'responsive',
                            'size_units' => [ 'px' ],
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-anchor-cart' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ),
                        array(
                            'name' => 'border_type',
                            'label' => esc_html__( 'Border Type', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::SELECT,
                            'options' => [
                                '' => esc_html__( 'None', 'sntravel' ),
                                'solid' => esc_html__( 'Solid', 'sntravel' ),
                                'double' => esc_html__( 'Double', 'sntravel' ),
                                'dotted' => esc_html__( 'Dotted', 'sntravel' ),
                                'dashed' => esc_html__( 'Dashed', 'sntravel' ),
                                'groove' => esc_html__( 'Groove', 'sntravel' ),
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-anchor-cart' => 'border-style: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'border_width',
                            'label' => esc_html__( 'Border Width', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::DIMENSIONS,
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-anchor-cart' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'responsive' => true,
                        ),
                        array(
                            'name' => 'border_color',
                            'label' => esc_html__( 'Border Color', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'default' => '',
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-anchor-cart' => 'border-color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'border_radius',
                            'label' => esc_html__('Border Radius', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px' ],
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-anchor-cart' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ),
                        array(
                            'name'         => 'align',
                            'label'        => esc_html__( 'Alignment', 'sntravel' ),
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
                                '{{WRAPPER}} .sntravel-anchor-wrap' => 'justify-content: {{VALUE}};',
                            ],
                            'prefix_class' => 'anchor-align-'
                        ),
                        array(
                            'name'         => 'dropdown_pos_offset_top',
                            'label'        => esc_html__( 'Dropdown Offset Top', 'sntravel' ).' (50px) px,%,vh,auto',
                            'type'         => 'text',
                            'default'      => '',
                            'control_type' => 'responsive',
                            'selectors'    => [
                                '{{WRAPPER}} .sntravel-cart-dropdown' => 'top: {{VALUE}}',
                            ],
                            'condition' => ['link_target' => 'cart-dropdown'] 
                        ),
                        array(
                            'name'         => 'dropdown_pos_offset_right',
                            'label'        => esc_html__( 'Dropdown Offset Right', 'sntravel' ).' (50px) px,%,vh,auto',
                            'type'         => 'text',
                            'default'      => '',
                            'control_type' => 'responsive',
                            'selectors'    => [
                                '{{WRAPPER}} .sntravel-cart-dropdown' => 'right: {{VALUE}}',
                            ],
                            'condition' => ['link_target' => 'cart-dropdown'] 
                        ),
                        array(
                            'name'        => 'custom_class',
                            'label'       => esc_html__( 'Custom class', 'sntravel' ),
                            'type'        => 'text',
                        ),
                    )
                )
            )
        )
    ),
    basilico_get_class_widget_path()
);