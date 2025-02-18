<?php
sntravel_add_custom_widget(
    array(
        'name' => 'sntravel_divider',
        'title' => esc_html__('PXL Divider', 'sntravel' ),
        'icon' => 'eicon-divider',
        'categories' => array('sntraveltheme-core'),
        'params' => array(
            'sections' => array(
                array(
                    'name' => 'source_section',
                    'label' => esc_html__('Source Settings', 'sntravel' ),
                    'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                    'controls' => array(
                        array(
                            'name' => 'style',
                            'label' => esc_html__('Styles', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::SELECT,
                            'default' => 'style-1',
                            'options' => [
                                'style-1' => esc_html__('Style 1', 'sntravel' ),
                                'style-2' => esc_html__('Style 2', 'sntravel' ),
                            ],
                        ),
                        array(
                            'name' => 'width',
                            'label' => esc_html__( 'Width', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::SLIDER,
                            'size_units' => [ 'px', '%', 'em', 'rem', 'vw', 'custom' ],
                            'control_type' => 'responsive',
                            'range' => [
                                'px' => [
                                    'max' => 1000,
                                ],
                            ],
                            'default' => [
                                'size' => 218,
                                'unit' => 'px',
                            ],
                            'tablet_default' => [
                                'unit' => '%',
                            ],
                            'mobile_default' => [
                                'unit' => '%',
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-divider' => 'width: {{SIZE}}{{UNIT}};',
                            ],
                        ),
                        array(
                            'name' => 'fill',
                            'label' => esc_html__( 'Fill', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::SLIDER,
                            'size_units' => [ 'px', '%', 'em', 'rem', 'vw', 'custom' ],
                            'control_type' => 'responsive',
                            'range' => [
                                'px' => [
                                    'max' => 1000,
                                ],
                            ],
                            'default' => [
                                'size' => 103,
                                'unit' => 'px',
                            ],
                            'tablet_default' => [
                                'unit' => '%',
                            ],
                            'mobile_default' => [
                                'unit' => '%',
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-divider::before' => 'width: {{SIZE}}{{UNIT}};',
                            ],
                            'condition' => [
                                'style' => 'style-1'
                            ]
                        ),
                        array(
                            'name' => 'alignment',
                            'label' => esc_html__( 'Alignment', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::CHOOSE,
                            'control_type' => 'responsive',
                            'prefix_class' => 'sntravel-divider-align-%s',
                            'options' => [
                                'left' => [
                                    'title' => esc_html__( 'Left', 'sntravel' ),
                                    'icon' => 'eicon-text-align-left',
                                ],
                                'center' => [
                                    'title' => esc_html__( 'Center', 'sntravel' ),
                                    'icon' => 'eicon-text-align-center',
                                ],
                                'right' => [
                                    'title' => esc_html__( 'Right', 'sntravel' ),
                                    'icon' => 'eicon-text-align-right',
                                ],
                            ],
                        ),
                    ),
                ),
                array(
                    'name' => 'style_section',
                    'label' => esc_html__('Style Settings', 'sntravel' ),
                    'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                    'controls' => array(
                        array(
                            'name' => 'color',
                            'label' => esc_html__( 'Color', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-divider' => 'background-color: {{VALUE}}',
                                '{{WRAPPER}} .sntravel-divider .diamond-icon' => 'border-color: {{VALUE}}',
                                '{{WRAPPER}} .sntravel-divider .diamond-icon:before' => 'background-color: {{VALUE}}',
                            ],
                        ),
                        array(
                            'name' => 'fill_color',
                            'label' => esc_html__( 'Fill Color', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-divider:before' => 'background-color: {{VALUE}}',
                            ],
                            'condition' => [
                                'style' => 'style-1'
                            ],
                        ),
                        array(
                            'name' => 'icon_gap_color',
                            'label' => esc_html__( 'Icon Gap Color', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-divider .diamond-icon' => 'background-color: {{VALUE}}',
                            ],
                            'condition' => [
                                'style' => 'style-2'
                            ],
                        ),
                        array(
                            'name' => 'weight',
                            'label' => esc_html__( 'Weight', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::SLIDER,
                            'default' => [
                                'size' => 1,
                            ],
                            'range' => [
                                'px' => [
                                    'min' => 1,
                                    'max' => 10,
                                    'step' => 0.1,
                                ],
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-divider' => 'height: {{SIZE}}{{UNIT}}',
                                '{{WRAPPER}} .sntravel-divider:before' => 'height: {{SIZE}}{{UNIT}}',
                            ],
                        ),
                        array(
                            'name' => 'gap',
                            'label' => esc_html__( 'Gap', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::DIMENSIONS,
                            'control_type' => 'responsive',
                            'size_units' => [ 'px' ],
                            'default' => [
                                'TOP' => 15,
                                'BOTTOM' => 15,
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-divider' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ),
                        array(
                            'name' => 'border_radius',
                            'label' => esc_html__( 'Border Radius', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::DIMENSIONS,
                            'control_type' => 'responsive',
                            'size_units' => [ 'px' ],
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-divider' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}; overflow: hidden;',
                            ],
                        ),
                        array(
                            'name'  => 'draw',
                            'label' => esc_html__('Draw Animation', 'sntravel'),
                            'type' => \Elementor\Controls_Manager::SWITCHER,
                            'separator' => 'before',
                        ),
                    ),
                ),
            ),
        ),
    ),
    basilico_get_class_widget_path()
);