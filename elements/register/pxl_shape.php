<?php
// Register Widget
sntravel_add_custom_widget(
    array(
        'name' => 'sntravel_shape',
        'title' => esc_html__('Pxl Shape', 'sntravel'),
        'icon' => 'eicon-circle',
        'categories' => array('sntraveltheme-core'),
        'params' => array(
            'sections' => array(
                array(
                    'name' => 'layout_section',
                    'label' => esc_html__('Layout', 'sntravel'),
                    'tab' => 'layout',
                    'controls' => array(
                        array(
                            'name' => 'layout',
                            'label' => esc_html__('Templates', 'sntravel'),
                            'type' => 'layoutcontrol',
                            'default' => '1',
                            'options' => [
                                '1' => [
                                    'label' => esc_html__('Layout 1', 'sntravel'),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/sntravel_shape-1.jpg'
                                ]
                            ],
                        ),
                    ),
                ),
                array(
                    'name' => 'section_style_shape',
                    'label' => esc_html__('Shape Style', 'sntravel'),
                    'tab' => 'style',
                    'controls' => array(
                        array(
                            'name' => 'style',
                            'label' => esc_html__('Shape Styles', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::SELECT,
                            'default' => 'default',
                            'options' => [
                                'default' => esc_html__('Default', 'sntravel' ),
                                'style2' => esc_html__('Style2', 'sntravel' ),
                                'style3' => esc_html__('Style3', 'sntravel' ),
                            ],
                        ),
                        array(
                            'name' => 'shape_background',
                            'type' => \Elementor\Group_Control_Background::get_type(),
                            'control_type' => 'group',
                            'types' => ['classic', 'gradient'],
                            'selector' => '{{WRAPPER}} .sntravel-shape',
                        ),
                        array(
                            'name' => 'shape_opacity',
                            'type' => \Elementor\Controls_Manager::SLIDER,
                            'label' => esc_html__('Opacity', 'sntravel'),
                            'range' => [
                                'px' => [
                                    'max' => 1,
                                    'min' => 0.10,
                                    'step' => 0.01,
                                ],
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-shape' => 'opacity: {{SIZE}};',
                            ],
                        ),
                        array(
                            'name' => 'shape_width',
                            'type' => \Elementor\Controls_Manager::SLIDER,
                            'label' => esc_html__('Shape Width', 'sntravel'),
                            'size_units' => ['px'],
                            'control_type' => 'responsive',
                            'range' => [
                                'px' => [
                                    'min' => 100,
                                    'max' => 1000,
                                ],
                            ],
                            'default' => [
                                'unit' => 'px',
                                'size' => 480,
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-shape' => 'width: {{SIZE}}{{UNIT}};',
                            ],
                        ),
                        array(
                            'name' => 'shape_height',
                            'type' => \Elementor\Controls_Manager::SLIDER,
                            'label' => esc_html__('Shape Height', 'sntravel'),
                            'size_units' => ['px'],
                            'control_type' => 'responsive',
                            'range' => [
                                'px' => [
                                    'min' => 100,
                                    'max' => 1000,
                                ],
                            ],
                            'default' => [
                                'unit' => 'px',
                                'size' => 340,
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-shape' => 'height: {{SIZE}}{{UNIT}};',
                            ],
                        ),
                        array(
                            'name' => 'border_color',
                            'label' => esc_html__( 'Border Color', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'default' => '',
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-shape' => 'border-color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'border_width',
                            'label' => esc_html__( 'Border Width', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::DIMENSIONS,
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-shape' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'responsive' => true,
                        ),
                    ),
                ),
            ),
        ),
    ),
    basilico_get_class_widget_path()
);