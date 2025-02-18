<?php
// Register PXL Widget
sntravel_add_custom_widget(
    array(
        'name'       => 'sntravel_button_more',
        'title'      => esc_html__( 'PXL Button More', 'sntravel' ),
        'icon'       => 'eicon-editor-external-link',
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
                            'label' => esc_html__('Style', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::SELECT,
                            'default' => '',
                            'options' => [
                                '' => esc_html__('Style 1', 'sntravel' ),
                                'style-2' => esc_html__('Style 2', 'sntravel' ),
                                'style-3' => esc_html__('Style 3', 'sntravel' ),
                                'style-4' => esc_html__('Style 4', 'sntravel' ),
                            ],
                        ),
                        array(
                            'name' => 'text',
                            'label' => esc_html__('Button Text', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::TEXT,
                            'default' => esc_html__('Read More', 'sntravel'),
                            'placeholder' => esc_html__('Read More', 'sntravel'),
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
                        array(
                            'name' => 'text_color',
                            'label' => esc_html__('Color', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-button-more .btn-more' => 'color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'border_color',
                            'label' => esc_html__('Border Color', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-button-more .btn-more:after' => 'background-color: {{VALUE}};',
                            ],
                            'condition'     => [
                                'style'     => '',
                            ],
                        ),
                        array(
                            'name' => 'text_color_hover',
                            'label' => esc_html__('Color Hover', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-button-more .btn-more:hover' => 'color: {{VALUE}};',
                            ],
                            
                        ),
                        array(
                            'name' => 'border_hover_color',
                            'label' => esc_html__('Border Hover Color', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-button-more .btn-more:hover:after' => 'background-color: {{VALUE}};',
                            ],
                            'condition'     => [
                                'style'     => '',
                            ],
                        ),
                        array(
                            'name' => 'text_typography',
                            'label' => esc_html__('Text Typography', 'sntravel' ),
                            'type' => \Elementor\Group_Control_Typography::get_type(),
                            'control_type' => 'group',
                            'selector' => '.elementor-widget-container .sntravel-button-more .btn-more',
                        ),
                        array(
                            'name' => 'icon_color',
                            'label' => esc_html__('Color', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-button-more .btn-more i' => 'color: {{VALUE}};',
                            ],
                            'separator' => 'before',
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
                                '{{WRAPPER}} .sntravel-button-more .btn-more i' => 'font-size: {{SIZE}}{{UNIT}};',
                            ],
                        ),
                    ),
                ),
            ),
        )
    ),
    basilico_get_class_widget_path()
);