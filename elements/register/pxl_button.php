<?php
// Register PXL Widget
sntravel_add_custom_widget(
    array(
        'name'       => 'sntravel_button',
        'title'      => esc_html__( 'PXL Button', 'sntravel' ),
        'icon'       => 'eicon-button',
        'categories' => array('sntraveltheme-core'),
        'params'     => array(
            'sections' => array(
                array(
                    'name' => 'source_section',
                    'label' => esc_html__('Source Settings', 'sntravel' ),
                    'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                    'controls' => array(
                        array(
                            'name' => 'style',
                            'label' => esc_html__('Button Styles', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::SELECT,
                            'default' => 'btn-default',
                            'options' => [
                                'btn-default' => esc_html__('Default', 'sntravel' ),
                                'btn-white' => esc_html__('White', 'sntravel' ),
                                'btn-outline' => esc_html__('Out Line', 'sntravel' ),
                                'btn-outline-secondary' => esc_html__('Out Line Secondary', 'sntravel' ),
                                'btn-outline-secondary-2' => esc_html__('Out Line Secondary 2', 'sntravel' ),
                                'btn-additional-1' => esc_html__('Additional Button 01', 'sntravel' ),
                                'btn-additional-2' => esc_html__('Additional Button 02', 'sntravel' ),
                                'btn-additional-3' => esc_html__('Additional Button 03', 'sntravel' ),
                                'btn-additional-4' => esc_html__('Additional Button 04', 'sntravel' ),
                                'btn-additional-5' => esc_html__('Additional Button 05', 'sntravel' ),
                                'btn-additional-6' => esc_html__('Additional Button 06', 'sntravel' ),
                                'btn-additional-7' => esc_html__('Additional Button 07', 'sntravel' ),
                                'btn-additional-8' => esc_html__('Additional Button 08', 'sntravel' ),
                                'btn-additional-9' => esc_html__('Additional Button 09', 'sntravel' ),
                                'btn-additional-10' => esc_html__('Additional Button 10', 'sntravel' ),
                                'btn-additional-11' => esc_html__('Additional Button 11', 'sntravel' ),
                            ],
                        ),
                        array(
                            'name' => 'text',
                            'label' => esc_html__('Button Text', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::TEXT,
                            'default' => esc_html__('Click here', 'sntravel'),
                            'placeholder' => esc_html__('Click here', 'sntravel'),
                        ),
                        array(
                            'name' => 'button_url_type',
                            'label' => esc_html__('Link Type', 'sntravel'),
                            'type' => \Elementor\Controls_Manager::SELECT,
                            'options'       => [
                                'url'   => esc_html__('URL', 'sntravel'),
                                'page'  => esc_html__('Existing Page', 'sntravel'),
                            ],
                            'default'       => 'url',
                        ),
                        array(
                            'name' => 'link',
                            'label' => esc_html__('Link', 'sntravel'),
                            'type' => \Elementor\Controls_Manager::URL,
                            'placeholder' => esc_html__('https://your-link.com', 'sntravel' ),
                            'condition'     => [
                                'button_url_type'     => 'url',
                            ],
                            'default' => [
                                'url' => '#',
                            ],
                        ),
                        array(
                            'name' => 'page_link',
                            'label' => esc_html__('Existing Page', 'sntravel'),
                            'type' => \Elementor\Controls_Manager::SELECT2,
                            'options'       => sntravel_get_all_page(),
                            'condition'     => [
                                'button_url_type'     => 'page',
                            ],
                            'multiple'      => false,
                            'label_block'   => true,
                        ),
                    ),
                ),
                array(
                    'name' => 'icon_section',
                    'label' => esc_html__('Icon Settings', 'sntravel' ),
                    'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                    'controls' => array(
                        
                        array(
                            'name' => 'btn_icon',
                            'label' => esc_html__('Icon', 'sntravel' ),
                            'type' => 'icons',
                            'label_block' => true,
                            'fa4compatibility' => 'icon',
                        ),
                        array(
                            'name' => 'icon_align',
                            'label' => esc_html__('Icon Position', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::SELECT,
                            'default' => 'right',
                            'options' => [
                                'right' => esc_html__('After', 'sntravel' ),
                                'left' => esc_html__('Before', 'sntravel' ),
                            ],
                        ),
                        array(
                            'name' => 'icon_space_left',
                            'label' => esc_html__('Icon Space Left', 'sntravel' ),
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
                                '{{WRAPPER}} .sntravel-button-wrapper .icon-ps-right .sntravel-button-icon' => 'margin-left: {{SIZE}}{{UNIT}};',
                            ],
                            'condition' => [
                                'icon_align' => ['right'],
                            ],
                        ),
                        array(
                            'name' => 'icon_space_right',
                            'label' => esc_html__('Icon Space Right', 'sntravel' ),
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
                                '{{WRAPPER}} .sntravel-button-wrapper .icon-ps-left .sntravel-button-icon' => 'margin-right: {{SIZE}}{{UNIT}};',
                            ],
                            'condition' => [
                                'icon_align' => ['left'],
                            ],
                        ),
                        array(
                            'name' => 'icon_font_size',
                            'label' => esc_html__('Icon Font Size', 'sntravel' ),
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
                                '{{WRAPPER}} .sntravel-button-wrapper .sntravel-icon' => 'font-size: {{SIZE}}{{UNIT}};',
                            ],
                        ),
                    ),
                ),
                array(
                    'name' => 'animation_section',
                    'label' => esc_html__('Animation Settings', 'sntravel' ),
                    'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                    'controls' => array_merge(
                        array(
                            basilico_split_text_option('button_'),
                            array(
                                'name' => 'hover_split_text_anm',
                                'label' => esc_html__('Hover Split Text Animation', 'sntravel' ),
                                'type' => 'select',
                                'options' => [
                                    ''               => esc_html__( 'None', 'sntravel' ),
                                    'hover-split-text' => esc_html__( 'Yes', 'sntravel' ),
                                    'only-hover-split-text' => esc_html__( 'Only for Hover', 'sntravel' ),
                                ],
                                'default' => '',
                                'condition' => ['button_split_text_anm!' => '']
                            ),
                        )
                    )
                ),
                array(
                    'name' => 'style_section',
                    'label' => esc_html__('Style Settings', 'sntravel' ),
                    'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                    'controls' => array_merge(
                        array(
                            array(
                                'name' => 'text_align',
                                'label' => esc_html__('Alignment', 'sntravel' ),
                                'type' => 'choose',
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
                                'prefix_class' => 'elementor-align-',
                                'default' => '',
                                'selectors' => [
                                    '{{WRAPPER}} .sntravel-button-wrapper' => 'justify-content: {{VALUE}};'
                                ],
                            ),
                            array(
                                'name' => 'btn_padding',
                                'label' => esc_html__('Padding', 'sntravel' ),
                                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                                'size_units' => [ 'px' ],
                                'selectors' => [
                                    '{{WRAPPER}} .sntravel-button-wrapper .btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                                ],
                                'control_type' => 'responsive',
                            ),
                            array(
                                'name'  => 'is_fullwidth',
                                'label' => esc_html__('Is Fullwidth?', 'sntravel'),
                                'type'  => \Elementor\Controls_Manager::SWITCHER,
                                'return_value' => 'yes',
                                'default' => 'no',
                            ),
                            array(
                                'name' => 'typography',
                                'label' => esc_html__('Typography', 'sntravel' ),
                                'type' => \Elementor\Group_Control_Typography::get_type(),
                                'control_type' => 'group',
                                'selector' => '{{WRAPPER}} .sntravel-button-wrapper .btn',
                            ),
                            array(
                                'name' => 'btn_color',
                                'label' => esc_html__('Text Color', 'sntravel' ),
                                'type' => \Elementor\Controls_Manager::COLOR,
                                'selectors' => [
                                    '{{WRAPPER}} .sntravel-button-wrapper .btn' => 'color: {{VALUE}};',
                                ],
                            ),
                            array(
                                'name' => 'btn_color_hover',
                                'label' => esc_html__('Text Color Hover', 'sntravel' ),
                                'type' => \Elementor\Controls_Manager::COLOR,
                                'selectors' => [
                                    '{{WRAPPER}} .sntravel-button-wrapper .btn:hover' => 'color: {{VALUE}};',
                                ],
                            ),
                            array(
                                'name' => 'btn_color_icon',
                                'label' => esc_html__('Icon Color', 'sntravel' ),
                                'type' => \Elementor\Controls_Manager::COLOR,
                                'selectors' => [
                                    '{{WRAPPER}} .sntravel-button-wrapper .btn .sntravel-button-icon' => 'color: {{VALUE}};',
                                ],
                            ),
                            array(
                                'name' => 'btn_color_icon_hover',
                                'label' => esc_html__('Icon Color Hover', 'sntravel' ),
                                'type' => \Elementor\Controls_Manager::COLOR,
                                'selectors' => [
                                    '{{WRAPPER}} .sntravel-button-wrapper .btn:hover .sntravel-button-icon' => 'color: {{VALUE}};',
                                ],
                            ),
                            array(
                                'name' => 'btn_bg_color',
                                'label' => esc_html__('Background Color', 'sntravel' ),
                                'type' => \Elementor\Controls_Manager::COLOR,
                                'selectors' => [
                                    '{{WRAPPER}} .sntravel-button-wrapper .btn' => 'background-image: none; background-color: {{VALUE}}; border-color: {{VALUE}};',
                                    '{{WRAPPER}} .sntravel-button-wrapper .btn::after' => 'background-image: none; background-color: {{VALUE}};'
                                ],
                                'condition' => [
                                    'style!' => ['btn-gradient'],
                                ],
                            ),
                            array(
                                'name' => 'btn_bg_color_hover',
                                'label' => esc_html__('Background Color Hover', 'sntravel' ),
                                'type' => \Elementor\Controls_Manager::COLOR,
                                'selectors' => [
                                    '{{WRAPPER}} .sntravel-button-wrapper .btn:hover' => 'border-color: {{VALUE}};',
                                    '{{WRAPPER}} .sntravel-button-wrapper .btn.btn-additional-6:hover, {{WRAPPER}} .sntravel-button-wrapper .btn.btn-additional-7:hover, {{WRAPPER}} .sntravel-button-wrapper .btn.btn-additional-5:hover' => 'background-color: {{VALUE}};',
                                    '{{WRAPPER}} .sntravel-button-wrapper .btn:before' => 'background-color: {{VALUE}};',
                                    '{{WRAPPER}} .sntravel-button-wrapper .btn.btn-additional-10::after' => 'border-left-color: {{VALUE}};'
                                ],
                                'condition' => [
                                    'style!' => ['btn-additional-9'],
                                ],
                            ),
                            array(
                                'name' => 'btn_bg_color_hover_style9',
                                'label' => esc_html__('Background Color Hover', 'sntravel' ),
                                'type' => \Elementor\Controls_Manager::COLOR,
                                'selectors' => [
                                    '{{WRAPPER}} .sntravel-button-wrapper .btn:before' => 'background-color: {{VALUE}};',
                                ],
                                'condition' => [
                                    'style' => ['btn-additional-9'],
                                ],
                            ),
                        ),
                        array(
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
                                    '{{WRAPPER}} .sntravel-button-wrapper .btn' => 'border-style: {{VALUE}};',
                                ],
                            ),
                            array(
                                'name' => 'border_width',
                                'label' => esc_html__( 'Border Width', 'sntravel' ),
                                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                                'selectors' => [
                                    '{{WRAPPER}} .sntravel-button-wrapper .btn' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                                ],
                                'responsive' => true,
                            ),
                            array(
                                'name' => 'border_color',
                                'label' => esc_html__( 'Border Color', 'sntravel' ),
                                'type' => \Elementor\Controls_Manager::COLOR,
                                'default' => '',
                                'selectors' => [
                                    '{{WRAPPER}} .sntravel-button-wrapper .btn' => 'border-color: {{VALUE}};',
                                    '{{WRAPPER}} .sntravel-button-wrapper .btn.btn-additional-7' => 'box-shadow: 3px 3px 0px 0px {{VALUE}};',
                                    '{{WRAPPER}} .sntravel-button-wrapper .btn.btn-additional-7:hover' => 'box-shadow: 0px 0px 0px 0px {{VALUE}};',
                                    '{{WRAPPER}} .btn.btn-outline:after' => 'background-color: {{VALUE}};'
                                ],
                                'condition' => [
                                    'border_type!' => '',
                                ],
                            ),
                            array(
                                'name' => 'border_color_hover',
                                'label' => esc_html__( 'Border Color Hover', 'sntravel' ),
                                'type' => \Elementor\Controls_Manager::COLOR,
                                'default' => '',
                                'selectors' => [
                                    '{{WRAPPER}} .sntravel-button-wrapper .btn:hover' => 'border-color: {{VALUE}};'
                                ],
                                'condition' => [
                                    'border_type!' => '',
                                ],
                            ),
                            array(
                                'name' => 'btn_border_radius',
                                'label' => esc_html__('Border Radius', 'sntravel' ),
                                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                                'size_units' => [ 'px' ],
                                'selectors' => [
                                    '{{WRAPPER}} .sntravel-button-wrapper .btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                                ],
                            ),
                            array(
                                'name' => 'mc_style_input_tabs',
                                'control_type' => 'tab',
                                'tabs' => array(
                                    array(
                                        'name' => 'input_style_normal',
                                        'label' => esc_html__('Normal', 'sntravel'),
                                        'controls' => array(
                                            array(
                                                'name' => 'button_shadow',
                                                'label'        => esc_html__( 'Box Shadow', 'sntravel' ),
                                                'type'         => \Elementor\Group_Control_Box_Shadow::get_type(),
                                                'control_type' => 'group',
                                                'exclude' => [
                                                    'box_shadow_position',
                                                ],
                                                'condition' => [
                                                    'style' => ['btn-additional-9'],
                                                ],
                                                'selector' => 
                                                    '{{WRAPPER}} .sntravel-button-wrapper .btn'
                                            ),
                                        )
                                    ),
                                    array(
                                        'name' => 'input_style_hover',
                                        'label' => esc_html__('Hover', 'sntravel'),
                                        'controls' => array(
                                            array(
                                                'name' => 'button_hover_shadow',
                                                'label'        => esc_html__( 'Box Shadow', 'sntravel' ),
                                                'type'         => \Elementor\Group_Control_Box_Shadow::get_type(),
                                                'control_type' => 'group',
                                                'exclude' => [
                                                    'box_shadow_position',
                                                ],
                                                'condition' => [
                                                    'style' => ['btn-additional-9'],
                                                ],
                                                'selector' => 
                                                    '{{WRAPPER}} .sntravel-button-wrapper .btn:hover'
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                        )
                    ),
                ),
            ),
        )
    ),
    basilico_get_class_widget_path()
);