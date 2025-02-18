<?php
// Register Accordion Widget
$templates = basilico_get_templates_option('default', []) ;
sntravel_add_custom_widget(
    array(
        'name'       => 'sntravel_accordion',
        'title'      => esc_html__( 'PXL Accordion', 'sntravel' ),
        'icon'       => 'eicon-accordion',
        'categories' => array('sntraveltheme-core'),
        'scripts'    => array(
            'sntravel-accordion'
        ),
        'params' => array(
            'sections' => array(
                array(
                    'name'     => 'source_section',
                    'label'    => esc_html__( 'Source Settings', 'sntravel' ),
                    'tab'      => 'content',
                    'controls' => array(
                        array(
                            'name' => 'style',
                            'label' => esc_html__('Style', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::SELECT,
                            'options' => [
                                'style1' => esc_html__( 'Style 1', 'sntravel' ),
                                'style2' => esc_html__( 'Style 2', 'sntravel' ),
                                'style3' => esc_html__( 'Style 3', 'sntravel' ),
                                'style4' => esc_html__( 'Style 4', 'sntravel' ),
                                'style5' => esc_html__( 'Style 5', 'sntravel' ),
                                'style6' => esc_html__( 'Style 6', 'sntravel' ),
                                'style7' => esc_html__( 'Style 7', 'sntravel' ),
                                'style8' => esc_html__( 'Style 8', 'sntravel' ),
                                'style9' => esc_html__( 'Style 9', 'sntravel' ),
                            ],
                            'default' => 'style1',
                        ),
                        array(
                            'name' => 'active_section',
                            'label' => esc_html__('Active section', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::NUMBER,
                            'separator' => 'after',
                            'default' => '1',
                        ),
                        array(
                            'name' => 'ac_items',
                            'label' => esc_html__('Accordion Items', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::REPEATER,
                            'controls' => array(
                                array(
                                    'name' => 'ac_title',
                                    'label' => esc_html__('Title', 'sntravel' ),
                                    'type' => \Elementor\Controls_Manager::TEXTAREA,
                                    'rows' => 3,
                                ),
                                array(
                                    'name' => 'ac_content_type',
                                    'label' => esc_html__( 'Content Type', 'sntravel' ),
                                    'type' => \Elementor\Controls_Manager::SELECT,
                                    'default' => 'text_editor',
                                    'options' => [
                                        'text_editor' => esc_html__( 'Text Editor', 'sntravel' ),
                                        'template' => esc_html__( 'Template', 'sntravel' ),
                                    ],
                                ),
                                array(
                                    'name' => 'ac_content',
                                    'label' => esc_html__('Content', 'sntravel' ),
                                    'type' => \Elementor\Controls_Manager::WYSIWYG,
                                    'show_label' => false,
                                    'condition' => [
                                        'ac_content_type' => 'text_editor'
                                    ],
                                ),
                                array(
                                    'name' => 'ac_content_template',
                                    'label' => esc_html__('Select Templates', 'sntravel'),
                                    'description'        => sprintf(esc_html__('Please create your layout before choosing. %sClick Here%s','sntravel'),'<a href="' . esc_url( admin_url( 'edit.php?post_type=sntravel-template' ) ) . '">','</a>'),
                                    'type' => \Elementor\Controls_Manager::SELECT,
                                    'default' => '',
                                    'options' => $templates,
                                    'condition' => [
                                        'ac_content_type' => 'template'
                                    ],
                                ),
                                array(
                                    'name' => 'background_color',
                                    'label' => esc_html__('Background Color', 'sntravel' ),
                                    'type' => \Elementor\Controls_Manager::COLOR,
                                    'selectors' => [
                                        '{{WRAPPER}} .sntravel-accordion.style8 {{CURRENT_ITEM}} .sntravel-ac-title' => 'background-color: {{VALUE}};',
                                    ],
                                ),
                                array(
                                    'name' => 'background_color_active',
                                    'label' => esc_html__('Background Color Active', 'sntravel' ),
                                    'type' => \Elementor\Controls_Manager::COLOR,
                                    'description' => esc_html__('Background Use for Style 8', 'sntravel'),
                                    'selectors' => [
                                        '{{WRAPPER}} .sntravel-accordion.style8 {{CURRENT_ITEM}} .sntravel-ac-title.active' => 'background-color: {{VALUE}};',
                                    ],
                                ),
                            ),
                            'default' => [
                                [
                                    'ac_title'   => esc_html__( 'FAQ Title #1', 'sntravel' ),
                                    'ac_content' => esc_html__( 'Lorem ipsum dolor sit amet consecte tur adipiscing elit sed do eiu smod tempor incididunt ut labore.', 'sntravel' ),
                                ],
                                [
                                    'ac_title'   => esc_html__( 'FAQ Title #2', 'sntravel' ),
                                    'ac_content' => esc_html__( 'Lorem ipsum dolor sit amet consecte tur adipiscing elit sed do eiu smod tempor incididunt ut labore.', 'sntravel' ),
                                ],
                            ],
                            'title_field' => '{{{ ac_title }}}',
                            'separator' => 'after',
                        ),
                        
                    )
                ),
                array(
                    'name'     => 'style_section',
                    'label'    => esc_html__( 'Style', 'sntravel' ),
                    'tab'      => 'style',
                    'controls' => array_merge(
                        array(
                            array(
                                'name' => 'title_color',
                                'label' => esc_html__('Title Color', 'sntravel' ),
                                'type' => \Elementor\Controls_Manager::COLOR,
                                'selectors' => [
                                    '{{WRAPPER}} .sntravel-accordion .sntravel-ac-item .sntravel-ac-title' => 'color: {{VALUE}};',
                                ],
                            ),
                            array(
                                'name' => 'title_typography',
                                'label' => esc_html__('Title Typography', 'sntravel' ),
                                'type' => \Elementor\Group_Control_Typography::get_type(),
                                'control_type' => 'group',
                                'selector' => '{{WRAPPER}} .sntravel-accordion .sntravel-ac-item .sntravel-ac-title',
                            ),
                            array(
                                'name' => 'title_color_active',
                                'label' => esc_html__('Title Color Active', 'sntravel' ),
                                'type' => \Elementor\Controls_Manager::COLOR,
                                'selectors' => [
                                    '{{WRAPPER}} .sntravel-accordion .sntravel-ac-title.active' => 'color: {{VALUE}};',
                                ],
                                'condition' => [
                                    'style' => 'style8'
                                ]
                            ),
                            array(
                                'name' => 'desc_color',
                                'label' => esc_html__('Description Color', 'sntravel' ),
                                'type' => \Elementor\Controls_Manager::COLOR,
                                'selectors' => [
                                    '{{WRAPPER}} .sntravel-accordion .sntravel-ac-item .sntravel-ac-desc' => 'color: {{VALUE}};',
                                ],
                                'condition' => [
                                    'style!' => 'style8'
                                ]
                            ),
                            array(
                                'name' => 'desc_typography',
                                'label' => esc_html__('Description Typography', 'sntravel' ),
                                'type' => \Elementor\Group_Control_Typography::get_type(),
                                'control_type' => 'group',
                                'selector' => '{{WRAPPER}} .sntravel-accordion .sntravel-ac-item .sntravel-ac-content',
                                'condition' => [
                                    'style!' => 'style8'
                                ]
                            ),
                            array(
                                'name' => 'icon_color',
                                'label' => esc_html__('Icon Color', 'sntravel' ),
                                'type' => \Elementor\Controls_Manager::COLOR,
                                'selectors' => [
                                    '{{WRAPPER}} .sntravel-accordion .sntravel-ac-item .sntravel-ac-title:before,
                                     {{WRAPPER}} .sntravel-accordion.style9 .sntravel-ac-title.active > span:before,
                                     {{WRAPPER}} .sntravel-accordion.style9 .sntravel-ac-title.active > span:after' => 'color: {{VALUE}};',
                                    '{{WRAPPER}} .sntravel-accordion .sntravel-ac-item .sntravel-ac-title:after' => 'color: {{VALUE}};',
                                ],
                            ),
                            array(
                                'name' => 'icon_color_active',
                                'label' => esc_html__('Icon Color Active', 'sntravel' ),
                                'type' => \Elementor\Controls_Manager::COLOR,
                                'selectors' => [
                                    '{{WRAPPER}} .sntravel-accordion .sntravel-ac-title.active:after' => 'color: {{VALUE}};',
                                ],
                                'condition' => [
                                    'style' => 'style8'
                                ]
                            ),
                            array(
                                'name' => 'icon_size',
                                'label' => esc_html__('Icon Size', 'sntravel'),
                                'type' => \Elementor\Controls_Manager::NUMBER,
                                'condition' => [
                                    'style' => 'style9'
                                ],
                                'selectors' => [
                                    '{{WRAPPER}} .sntravel-accordion.style9 .sntravel-ac-title.active > span:before, {{WRAPPER}} .sntravel-accordion.style9 .sntravel-ac-title.active > span:after'
                                     => 'font-size: {{VALUE}}px;'
                                ],
                            ),
                            array(
                                'name' => 'divider_color',
                                'label' => esc_html__('Divider Color', 'sntravel' ),
                                'type' => \Elementor\Controls_Manager::COLOR,
                                'selectors' => [
                                    '{{WRAPPER}} .sntravel-accordion .sntravel-ac-title' => 'border-bottom-color: {{VALUE}};',
                                    '{{WRAPPER}} .sntravel-accordion .sntravel-ac-content' => 'border-color: {{VALUE}};',
                                ],
                                'condition' => [
                                    'style' => 'style1'
                                ]
                            ),
                            array(
                                'name' => 'divider_color_active',
                                'label' => esc_html__('Divider Color Active', 'sntravel' ),
                                'type' => \Elementor\Controls_Manager::COLOR,
                                'selectors' => [
                                    '{{WRAPPER}} .sntravel-accordion .sntravel-ac-title.active' => 'border-bottom-color: {{VALUE}};',
                                ],
                                'condition' => [
                                    'style' => 'style1'
                                ]
                            ),
                            array(
                                'name' => 'content_padding',
                                'label' => esc_html__('Content Padding', 'sntravel' ),
                                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                                'size_units' => [ 'px' ],
                                'selectors' => [
                                    '{{WRAPPER}} .sntravel-accordion .sntravel-ac-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                                ],
                                'control_type' => 'responsive',
                            ),
                            array(
                                'name' => 'text_align',
                                'label' => esc_html__('Alignment', 'sntravel' ),
                                'type' => 'choose',
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
                                'prefix_class' => 'elementor-align-',
                                'default' => '',
                                'selectors' => [
                                    '{{WRAPPER}} .sntravel-accordion.style9' => 'text-align: {{VALUE}};'
                                ],
                                'condition' => [
                                    'style' => 'style9'
                                ]
                            ),
                        )
                    ),
                ),
                
            ),
        ),
    ),
    basilico_get_class_widget_path()
);