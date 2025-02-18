<?php
pxl_add_custom_widget(
    array(
        'name'       => 'pxl_heading',
        'title'      => esc_html__( 'PXL Heading', 'sntravel' ),
        'icon'       => 'eicon-t-letter',
        'categories' => array('pxltheme-core'),
        'scripts'    => array(
            'sntravel-typewrite',
            'scroll-trigger',
            'pxl-split-text'
        ),
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
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/pxl_heading-1.jpg'
                                ],
                            ],
                            'prefix_class' => 'pxl-heading-layout-',
                        ),
                    )
                ),
                array(
                    'name' => 'title_section',
                    'label' => esc_html__('Title', 'sntravel' ),
                    'tab' => 'content',
                    'controls' => array_merge(
                        array(
                            array(
                                'name' => 'title',
                                'label' => esc_html__('Text', 'sntravel' ),
                                'type' => 'textarea',
                                'label_block' => true,
                                'default' => esc_html__('This is the heading', 'sntravel'),
                            ),
                            array(
                                'name' => 'title_tag',
                                'label' => esc_html__('Heading HTML Tag', 'sntravel' ),
                                'type' => 'select',
                                'options' => [
                                    'h1' => 'H1',
                                    'h2' => 'H2',
                                    'h3' => 'H3',
                                    'h4' => 'H4',
                                    'h5' => 'H5',
                                    'h6' => 'H6',
                                    'div' => 'div',
                                    'span' => 'span',
                                    'p' => 'p',
                                ],
                                'default' => 'h2',
                            ),
                            array(
                                'name' => 'title_color',
                                'label' => esc_html__('Title Color', 'sntravel' ),
                                'type' => 'color',
                                'selectors' => [
                                    '{{WRAPPER}} .pxl-heading-wrap .heading-title' => 'color: {{VALUE}};',
                                ],
                            ),
                            array(
                                'name' => 'title_typography',
                                'label' => esc_html__('Title Typography', 'sntravel' ),
                                'type' => \Elementor\Group_Control_Typography::get_type(),
                                'control_type' => 'group',
                                'selector' => '{{WRAPPER}} .pxl-heading-wrap .heading-title',
                            ),
                            array(
                                'name' => 'text_align',
                                'label' => esc_html__('Alignment', 'sntravel' ),
                                'type' => 'choose',
                                'prefix_class' => 'pxl-heading-align-%s',
                                'control_type' => 'responsive',
                                'options' => [
                                    'left' => [
                                        'title' => esc_html__( 'Start', 'sntravel' ),
                                        'icon' => 'eicon-text-align-left',
                                    ],
                                    'center' => [
                                        'title' => esc_html__( 'Center', 'sntravel' ),
                                        'icon' => 'eicon-text-align-center',
                                    ],
                                    'right' => [
                                        'title' => esc_html__( 'End', 'sntravel' ),
                                        'icon' => 'eicon-text-align-right',
                                    ]
                                ],
                            ),
                            array(
                                'name' => 'title_highlighted_line',
                                'label' => esc_html__('Highlighted Line', 'sntravel'),
                                'type' => \Elementor\Controls_Manager::SWITCHER,
                                'default' => 'false',
                            ),
                            array(
                                'name' => 'title_highlighted_style',
                                'label' => esc_html__('Highlighted Line Style', 'sntravel'),
                                'type' => \Elementor\Controls_Manager::SELECT,
                                'label_block' => true,
                                'options' => [
                                    'style-1' => esc_html__('Line Between', 'sntravel'),
                                    'style-2' => esc_html__('Coffee Bean', 'sntravel'),
                                    'style-3' => esc_html__('Ice Cream', 'sntravel'),
                                ],
                                'default' => 'style-1',
                                'condition' => [
                                    'title_highlighted_line' => "true"
                                ],
                            ),
                            // array(
                            //     'name' => 'highlighted_cream',
                            //     'label' => esc_html__('Highlighted Cream', 'sntravel'),
                            //     'type' => \Elementor\Controls_Manager::SWITCHER,
                            //     'default' => 'false',
                            // ),
                            // array(
                            //     'name' => 'highlighted_cream_style',
                            //     'label' => esc_html__('Highlighted Cream Style', 'sntravel'),
                            //     'type' => \Elementor\Controls_Manager::SELECT,
                            //     'label_block' => true,
                            //     'options' => [
                            //         'style-1' => esc_html__('Ice Cream'),
                            //     ],
                            //     'default' => 'style-1',
                            //     'condition' => [
                            //         'highlighted_cream' => "true"
                            //     ],
                            // ),
                            array(
                                'name' => 'title_highlighted_size',
                                'label' => esc_html__('Highlighted Size (px)', 'sntravel'),
                                'type' => \Elementor\Controls_Manager::NUMBER,
                                'condition' => [
                                    'title_highlighted_line' => "true",
                                    'title_highlighted_style' => 'style-2'
                                ],
                                'selectors' => [
                                    '{{WRAPPER}} .pxl-heading-inner .heading-title span:before,
                                     {{WRAPPER}} .pxl-heading-inner .heading-title span:after,
                                     {{WRAPPER}} .pxl-heading-inner .heading-title a:before,
                                     {{WRAPPER}} .pxl-heading-inner .heading-title a:after'
                                     => 'font-size: {{VALUE}}px;'
                                ],
                            ),
                            array(
                                'name'  => 'title_max_width',
                                'label' => esc_html__( 'Max Width (px)', 'sntravel' ),
                                'type'  => 'slider',
                                'control_type' => 'responsive',
                                'range' => [
                                    'px' => [
                                        'min' => 100,
                                        'max' => 1920,
                                    ],
                                ],
                                'selectors' => [
                                    '{{WRAPPER}} .pxl-heading-inner .heading-title' => 'max-width: {{SIZE}}{{UNIT}};',
                                ]
                            ),
                            array(
                                'name' => 'link',
                                'label' => esc_html__('Link', 'sntravel' ),
                                'type' => \Elementor\Controls_Manager::URL,
                            ),
                            basilico_split_text_option('title_'),
                        ),
                        basilico_elementor_animation_opts([
                            'name'   => 'title',
                            'label' => '',
                        ])
                    ),
                ),
                array(
                    'name' => 'sub_title_section',
                    'label' => esc_html__('Sub Title', 'sntravel' ),
                    'tab' => 'content',
                    'controls' => array_merge(
                        array(
                            array(
                                'name' => 'sub_title',
                                'label' => esc_html__('Text', 'sntravel' ),
                                'type' => 'textarea',
                                'label_block' => true,
                            ),
                            array(
                                'name' => 'sub_title_color',
                                'label' => esc_html__('Color', 'sntravel' ),
                                'type' => 'color',
                                'selectors' => [
                                    '{{WRAPPER}} .pxl-heading-wrap .heading-subtitle' => 'color: {{VALUE}};',
                                ],
                            ),
                            array(
                                'name' => 'sub_title_typography',
                                'label' => esc_html__('Typography', 'sntravel' ),
                                'type' => \Elementor\Group_Control_Typography::get_type(),
                                'control_type' => 'group',
                                'selector' => '{{WRAPPER}} .pxl-heading-wrap .heading-subtitle',
                            ),
                            array(
                                'name' => 'subtitle_highlighted_line',
                                'label' => esc_html__('Highlighted Line', 'sntravel'),
                                'type' => \Elementor\Controls_Manager::SWITCHER,
                            ),
                            array(
                                'name' => 'subtitle_highlighted_style',
                                'label' => esc_html__('Highlighted Line Style', 'sntravel'),
                                'type' => \Elementor\Controls_Manager::SELECT,
                                'label_block' => true,
                                'options' => [
                                    'style-1' => esc_html__('Line Between', 'sntravel'),
                                    'style-2' => esc_html__('Coffee Bean', 'sntravel'),
                                ],
                                'default' => 'style-1',
                                'condition' => [
                                    'subtitle_highlighted_line' => "true"
                                ],
                            ),
                            array(
                                'name' => 'sub_title_space',
                                'label' => esc_html__('Margin(px)', 'sntravel' ),
                                'type' => 'dimensions',
                                'allowed_dimensions' => 'vertical',
                                'default' => ['top' => '', 'right' => '', 'bottom' => '', 'left' => ''],
                                'control_type' => 'responsive',
                                'size_units' => [ 'px' ],
                                'selectors' => [
                                    '{{WRAPPER}} .pxl-heading-wrap .heading-subtitle' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                                ],
                            ),
                            basilico_split_text_option('subtitle_'),
                        ),
                        basilico_elementor_animation_opts([
                            'name'   => 'sub_title',
                            'label' => '',
                        ])
                    ),
                ),
                array(
                    'name' => 'description_section',
                    'label' => esc_html__('Description', 'sntravel' ),
                    'tab' => 'content',
                    'controls' => array_merge(
                        array(
                            array(
                                'name' => 'description',
                                'label' => esc_html__('Text', 'sntravel' ),
                                'type' => 'textarea',
                                'label_block' => true,
                            ),
                            array(
                                'name' => 'description_color',
                                'label' => esc_html__('Color', 'sntravel' ),
                                'type' => 'color',
                                'selectors' => [
                                    '{{WRAPPER}} .pxl-heading-wrap .heading-description' => 'color: {{VALUE}};',
                                ],
                            ),
                            array(
                                'name' => 'description_typography',
                                'label' => esc_html__('Typography', 'sntravel' ),
                                'type' => \Elementor\Group_Control_Typography::get_type(),
                                'control_type' => 'group',
                                'selector' => '{{WRAPPER}} .pxl-heading-wrap .heading-description',
                            ),
                            array(
                                'name' => 'description_space',
                                'label' => esc_html__('Margin(px)', 'sntravel' ),
                                'type' => 'dimensions',
                                'allowed_dimensions' => 'vertical',
                                'default' => ['top' => '', 'right' => '', 'bottom' => '', 'left' => ''],
                                'control_type' => 'responsive',
                                'size_units' => [ 'px' ],
                                'selectors' => [
                                    '{{WRAPPER}} .pxl-heading-wrap .heading-description' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                                ],
                            ),
                            array(
                                'name'  => 'sub_title_max_width',
                                'label' => esc_html__( 'Max Width (px)', 'sntravel' ),
                                'type'  => 'slider',
                                'control_type' => 'responsive',
                                'range' => [
                                    'px' => [
                                        'min' => 100,
                                        'max' => 1920,
                                    ],
                                ],
                                'selectors' => [
                                    '{{WRAPPER}} .pxl-heading-inner .heading-description span' => 'max-width: {{SIZE}}{{UNIT}};',
                                ]
                            ),
                            basilico_split_text_option('description_'),
                        ),
                        basilico_elementor_animation_opts([
                            'name'   => 'description',
                            'label' => '',
                        ])
                    ),
                ),
                array(
                    'name' => 'highlight_section',
                    'label' => esc_html__('Highlight Text', 'sntravel' ),
                    'tab' => 'content',
                    'controls' => array_merge(
                        array(
                            array(
                                'name' => 'text_list',
                                'label' => esc_html__('Text List', 'sntravel'),
                                'type' => \Elementor\Controls_Manager::REPEATER,
                                'controls' => array(
                                    array(
                                        'name' => 'highlight_text',
                                        'label' => esc_html__('Text', 'sntravel'),
                                        'type' => \Elementor\Controls_Manager::TEXT,
                                        'label_block' => true,
                                    ),
                                ),
                                'title_field' => '{{{ highlight_text }}}',
                            ),
                            array(
                                'name' => 'highlight_color',
                                'label' => esc_html__('Highlight Color', 'sntravel' ),
                                'type' => 'color',
                                'selectors' => [
                                    '{{WRAPPER}} .pxl-heading-wrap .heading-highlight' => 'color: {{VALUE}};',
                                ],
                            ),
                            array(
                                'name' => 'highlight_typography',
                                'label' => esc_html__('Highlight Typography', 'sntravel' ),
                                'type' => \Elementor\Group_Control_Typography::get_type(),
                                'control_type' => 'group',
                                'selector' => '{{WRAPPER}} .pxl-heading-wrap .heading-highlight',
                            ),
                        )
                    ),
                ),
            ),
        ),
    ),
    basilico_get_class_widget_path()
);