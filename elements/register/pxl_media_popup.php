<?php
use Elementor\Controls_Manager;
pxl_add_custom_widget(
    array(
        'name' => 'pxl_media_popup',
        'title' => esc_html__('Pxl Media Popup', 'sntravel' ),
        'icon' => 'eicon-play',
        'categories' => array('pxltheme-core'),
        'scripts' => array(),
        'params' => array(
            'sections' => array(
                array(
                    'name' => 'icon_section',
                    'label' => esc_html__('Settings', 'sntravel' ),
                    'tab' => 'content',
                    'controls' => array(
                        array(
                            'name' => 'media_type',
                            'label' => esc_html__('Button Type', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::SELECT,
                            'default' => 'media-default',
                            'options' => [
                                'media-default' => esc_html__('Default', 'sntravel' ),
                                'media-circle' => esc_html__('Circle', 'sntravel' ),
                                'media-wave' => esc_html__('Wave', 'sntravel' ),
                            ],
                        ),
                        array(
                            'name' => 'icon_style',
                            'label' => esc_html__('Icon Style', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::SELECT,
                            'default' => 'style-1',
                            'options' => [
                                'style-1' => esc_html__('Style 1', 'sntravel' ),
                                'style-2' => esc_html__('Style 2', 'sntravel' ),
                            ],
                        ),
                        array(
                            'name' => 'media_style',
                            'label' => esc_html__('Media Style', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::SELECT,
                            'default' => 'featured-video',
                            'options' => [
                                'featured-video' => esc_html__('Video', 'sntravel' ),
                                'featured-audio' => esc_html__('Audio', 'sntravel' ),
                            ],
                        ),
                        array(
                            'name' => 'media_link',
                            'label' => esc_html__('Media URL', 'sntravel'),
                            'type' => Controls_Manager::URL,
                            'default' => [
                                'url' => 'https://www.youtube.com/watch?v=MLpWrANjFbI',
                                'is_external' => 'on'
                            ]
                        ),
                        array(
                            'name' => 'description_text',
                            'label' => esc_html__('Description Text', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::TEXTAREA,
                            'default' => "",
                            'rows' => 5,
                            'show_label' => false,
                        ),
                    ),
                ),
                array(
                    'name' => 'section_style_button',
                    'label' => esc_html__('Button Style', 'sntravel' ),
                    'tab' => 'style',
                    'controls' => array(
                        array(
                            'name' => 'text_align',
                            'label' => esc_html__('Alignment', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::CHOOSE,
                            'control_type' => 'responsive',
                            'options' => [
                                'flex-start' => [
                                    'title' => esc_html__('Left', 'sntravel' ),
                                    'icon' => 'eicon-text-align-left',
                                ],
                                'center' => [
                                    'title' => esc_html__('Center', 'sntravel' ),
                                    'icon' => 'eicon-text-align-center',
                                ],
                                'flex-end' => [
                                    'title' => esc_html__('Right', 'sntravel' ),
                                    'icon' => 'eicon-text-align-right',
                                ],
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .pxl-media-popup .media-content-inner' => 'justify-content: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'button_background',
                            'label' => esc_html__('Button Background', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'default' => '',
                            'selectors' => [
                                '{{WRAPPER}} .pxl-media-popup .media-play-button:before' => 'background-color: {{VALUE}}; background-image: none !important;',
                                '{{WRAPPER}} .pxl-media-popup .media-play-button.media-wave::after' => 'background-color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'hover_background',
                            'label' => esc_html__('Hover Background', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'default' => '',
                            'selectors' => [
                                '{{WRAPPER}} .pxl-media-popup .media-play-button:hover:before' => 'background-color: {{VALUE}}; background-image: none !important;',
                            ],
                        ),
                        array(
                            'name' => 'border_color',
                            'label' => esc_html__('Border Color', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'default' => '',
                            'selectors' => [
                                '{{WRAPPER}} .pxl-media-popup .media-play-button:before' => 'border: 1px solid {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'icon_color',
                            'label' => esc_html__('Icon Color', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'default' => '',
                            'selectors' => [
                                '{{WRAPPER}} .pxl-media-popup .media-play-button i' => 'color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'hover_icon_color',
                            'label' => esc_html__('Hover Icon Color', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'default' => '',
                            'selectors' => [
                                '{{WRAPPER}} .pxl-media-popup .media-play-button:hover i' => 'color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'circle_color',
                            'label' => esc_html__('Circle Color', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'default' => '',
                            'selectors' => [
                                '{{WRAPPER}} .pxl-media-popup .media-play-button.media-circle:after' => 'border-color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name'  =>  'button_size',
                            'type'  =>  \Elementor\Controls_Manager::SLIDER,
                            'label' => esc_html__('Button Size', 'sntravel'),
                            'size_units' => ['px'],
                            'control_type' => 'responsive',
                            'range' => [
                                'px' => [
                                    'min' => 50,
                                    'max' => 200,
                                ],
                            ],
                            'default'   => [
                                'unit' => 'px',
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .pxl-media-popup .media-play-button' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
                            ],

                        ),
                        array(
                            'name'  =>  'icont_font_size',
                            'type'  =>  \Elementor\Controls_Manager::SLIDER,
                            'label' => esc_html__('Icon Font Size', 'sntravel'),
                            'separator' => 'before',
                            'size_units' => ['px'],
                            'control_type' => 'responsive',
                            'range' => [
                                'px' => [
                                    'min' => 15,
                                    'max' => 80,
                                ],
                            ],
                            'default'   => [
                                'unit' => 'px',
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .pxl-media-popup .media-play-button i' => 'font-size: {{SIZE}}{{UNIT}};',
                            ],

                        ),
                        array(
                            'name' => 'icon_margin',
                            'label' => esc_html__('Icon Margin(px)', 'sntravel' ),
                            'type' => 'dimensions',
                            'control_type' => 'responsive',
                            'size_units' => [ 'px' ],
                            'selectors' => [
                                '{{WRAPPER}} .pxl-media-popup .media-play-button i' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ),
                    ),
                ),
                array(
                    'name' => 'section_style_description',
                    'label' => esc_html__('Description Style', 'sntravel' ),
                    'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                    'controls' => array(
                        array(
                            'name' => 'description_color',
                            'label' => esc_html__('Color', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'default' => '',
                            'selectors' => [
                                '{{WRAPPER}} .pxl-media-popup .button-text' => 'color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'title_typography',
                            'type' => \Elementor\Group_Control_Typography::get_type(),
                            'control_type' => 'group',
                            'selector' => '{{WRAPPER}} .pxl-media-popup .button-text',
                        ),
                    ),
                ),
            ),
        ),
    ),
    basilico_get_class_widget_path()
);