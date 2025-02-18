<?php
pxl_add_custom_widget(
    array(
        'name' => 'pxl_mailchimp',
        'title' => esc_html__('PXL Mailchimp', 'sntravel'),
        'icon' => 'eicon-email-field',
        'categories' => array('pxltheme-core'),
        'params' => array(
            'sections' => array(
                array(
                    'name' => 'section_opt',
                    'label' => esc_html__('Options', 'sntravel'),
                    'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                    'controls' => array(
                        array(
                            'name' => 'style',
                            'label' => esc_html__('Style', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::SELECT,
                            'options' => [
                                'style-default' => esc_html__('Default', 'sntravel' ),
                                'style-2'       => esc_html__('Style 2', 'sntravel' ),
                                'style-3'       => esc_html__('Style 3', 'sntravel' ),
                            ],
                            'default' => 'style-default',
                        ),
                        array(
                            'name' => 'hide_icon',
                            'label' => esc_html__('Hide Icon?', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::SWITCHER,
                            'default' => false,
                        ),
                        array(
                            'name' => 'hide_button_text',
                            'label' => esc_html__('Hide Button Text?', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::SWITCHER,
                            'default' => false,
                        ),
                        array(
                            'name' => 'hide_lbcb',
                            'label' => esc_html__('Hide Checkbox/Label', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::SWITCHER,
                            'default' => false,
                        ),
                    ),
                ),
                array(
                    'name' => 'style_input',
                    'label' => esc_html__('Input', 'sntravel'),
                    'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                    'controls' => array(
                        array(
                            'name' => 'mc_style_input_tabs',
                            'control_type' => 'tab',
                            'tabs' => array(
                                array(
                                    'name' => 'input_style_normal',
                                    'label' => esc_html__('Normal', 'sntravel'),
                                    'controls' => array(
                                        array(
                                            'name' => 'input_background',
                                            'label' => esc_html__('Input Background', 'sntravel' ),
                                            'type' => \Elementor\Controls_Manager::COLOR,
                                            'selectors' => [
                                                '{{WRAPPER}} .pxl-mailchimp input[type="text"], {{WRAPPER}} .pxl-mailchimp input[type="password"], {{WRAPPER}} .pxl-mailchimp input[type="email"], {{WRAPPER}} .pxl-mailchimp input[type="phone"]' => 'background-color: {{VALUE}};',
                                            ],
                                        ),
                                        array(
                                            'name' => 'input_text_color',
                                            'label' => esc_html__('Input Text Color', 'sntravel' ),
                                            'type' => \Elementor\Controls_Manager::COLOR,
                                            'selectors' => [
                                                '{{WRAPPER}} .pxl-mailchimp input[type="text"],
                                                 {{WRAPPER}} .pxl-mailchimp input[type="password"],
                                                 {{WRAPPER}} .pxl-mailchimp input[type="email"],
                                                 {{WRAPPER}} .pxl-mailchimp input[type="phone"]' => 'color: {{VALUE}};',
                                            ],
                                        ),
                                        array(
                                            'name' => 'input_border_type',
                                            'label' => esc_html__('Input Border Type', 'sntravel' ),
                                            'type' => \Elementor\Controls_Manager::SELECT,
                                            'separator' => 'before',
                                            'options' => [
                                                '' => esc_html__( 'None', 'sntravel' ),
                                                'solid' => esc_html__( 'Solid', 'sntravel' ),
                                                'double' => esc_html__( 'Double', 'sntravel' ),
                                                'dotted' => esc_html__( 'Dotted', 'sntravel' ),
                                                'dashed' => esc_html__( 'Dashed', 'sntravel' ),
                                                'groove' => esc_html__( 'Groove', 'sntravel' ),
                                            ],
                                            'selectors' => [
                                                '{{WRAPPER}} .pxl-mailchimp input[type="text"], {{WRAPPER}} .pxl-mailchimp input[type="password"], {{WRAPPER}} .pxl-mailchimp input[type="email"], {{WRAPPER}} .pxl-mailchimp input[type="phone"]' => 'border-style: {{VALUE}};',
                                            ],
                                        ),
                                        array(
                                            'name' => 'input_border_width',
                                            'label' => esc_html__('Input Border Width', 'sntravel' ),
                                            'type' => \Elementor\Controls_Manager::DIMENSIONS,
                                            'selectors' => [
                                                '{{WRAPPER}} .pxl-mailchimp input[type="text"], {{WRAPPER}} .pxl-mailchimp input[type="password"], {{WRAPPER}} .pxl-mailchimp input[type="email"], {{WRAPPER}} .pxl-mailchimp input[type="phone"]' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                                            ],
                                            'responsive' => true,
                                        ),
                                        array(
                                            'name' => 'input_border_color',
                                            'label' => esc_html__('Input Border Color', 'sntravel' ),
                                            'type' => \Elementor\Controls_Manager::COLOR,
                                            'selectors' => [
                                                '{{WRAPPER}} .pxl-mailchimp input[type="text"], {{WRAPPER}} .pxl-mailchimp input[type="password"], {{WRAPPER}} .pxl-mailchimp input[type="email"], {{WRAPPER}} .pxl-mailchimp input[type="phone"]' => 'border-color: {{VALUE}};',
                                            ],
                                        ),
                                        array(
                                            'name' => 'input_border_radius',
                                            'label' => esc_html__('Input Border Radius', 'sntravel' ),
                                            'type' => \Elementor\Controls_Manager::DIMENSIONS,
                                            'size_units' => [ 'px', 'em' ],
                                            'selectors' => [
                                                '{{WRAPPER}} .pxl-mailchimp input[type="text"], {{WRAPPER}} .pxl-mailchimp input[type="password"], {{WRAPPER}} .pxl-mailchimp input[type="email"], {{WRAPPER}} .pxl-mailchimp input[type="phone"]' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                                            ],
                                        ),
                                    )
                                ),
                                array(
                                    'name' => 'input_style_hover',
                                    'label' => esc_html__('Hover', 'sntravel'),
                                    'controls' => array(
                                        array(
                                            'name' => 'input_background_hover',
                                            'label' => esc_html__('Input Background', 'sntravel' ),
                                            'type' => \Elementor\Controls_Manager::COLOR,
                                            'selectors' => [
                                                '{{WRAPPER}} .pxl-mailchimp input[type="text"]:focus,
                                                {{WRAPPER}} .pxl-mailchimp input[type="password"]:focus,
                                                {{WRAPPER}} .pxl-mailchimp input[type="email"]:focus,
                                                {{WRAPPER}} .pxl-mailchimp input[type="phone"]:focus,
                                                {{WRAPPER}} .pxl-mailchimp input[type="text"]:hover,
                                                {{WRAPPER}} .pxl-mailchimp input[type="password"]:hover,
                                                {{WRAPPER}} .pxl-mailchimp input[type="email"]:hover,
                                                {{WRAPPER}} .pxl-mailchimp input[type="phone"]:hover, 
                                                {{WRAPPER}} .pxl-mailchimp input:focus + input[type="submit"],
                                                {{WRAPPER}} .pxl-mailchimp input:hover + input[type="submit"],
                                                {{WRAPPER}} .pxl-mailchimp input:focus + button,
                                                {{WRAPPER}} .pxl-mailchimp input:hover + button' => 'background-color: {{VALUE}};',
                                            ],
                                        ),
                                        array(
                                            'name' => 'input_text_hover',
                                            'label' => esc_html__('Input Text Color', 'sntravel' ),
                                            'type' => \Elementor\Controls_Manager::COLOR,
                                            'selectors' => [
                                                '{{WRAPPER}} .pxl-mailchimp input[type="text"]:focus,
                                                {{WRAPPER}} .pxl-mailchimp input[type="password"]:focus,
                                                {{WRAPPER}} .pxl-mailchimp input[type="email"]:focus,
                                                {{WRAPPER}} .pxl-mailchimp input[type="phone"]:focus,
                                                {{WRAPPER}} .pxl-mailchimp input[type="text"]:hover,
                                                {{WRAPPER}} .pxl-mailchimp input[type="password"]:hover,
                                                {{WRAPPER}} .pxl-mailchimp input[type="email"]:hover,
                                                {{WRAPPER}} .pxl-mailchimp input[type="phone"]:hover' => 'color: {{VALUE}};',
                                            ],
                                        ),
                                        array(
                                            'name' => 'input_border_hover',
                                            'label' => esc_html__('Input Border Color', 'sntravel' ),
                                            'type' => \Elementor\Controls_Manager::COLOR,
                                            'selectors' => [
                                                '{{WRAPPER}} .pxl-mailchimp input[type="text"]:focus,
                                                {{WRAPPER}} .pxl-mailchimp input[type="password"]:focus,
                                                {{WRAPPER}} .pxl-mailchimp input[type="email"]:focus,
                                                {{WRAPPER}} .pxl-mailchimp input[type="phone"]:focus,
                                                {{WRAPPER}} .pxl-mailchimp input[type="text"]:hover,
                                                {{WRAPPER}} .pxl-mailchimp input[type="password"]:hover,
                                                {{WRAPPER}} .pxl-mailchimp input[type="email"]:hover,
                                                {{WRAPPER}} .pxl-mailchimp input[type="phone"]:hover, 
                                                {{WRAPPER}} .pxl-mailchimp input:focus + input[type="submit"],
                                                {{WRAPPER}} .pxl-mailchimp input:hover + input[type="submit"],
                                                {{WRAPPER}} .pxl-mailchimp input:focus + button,
                                                {{WRAPPER}} .pxl-mailchimp input:hover + button' => 'border-color: {{VALUE}};',
                                            ],
                                        ),
                                    )
                                ),
                            )
                        ),
                    ),
                ),
                array(
                    'name' => 'style_button',
                    'label' => esc_html__('Button', 'sntravel'),
                    'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                    'controls' => array(
                        array(
                            'name' => 'style_btn_tabs',
                            'control_type' => 'tab',
                            'tabs' => array(
                                array(
                                    'name' => 'btn_style_normal',
                                    'label' => esc_html__('Normal', 'sntravel'),
                                    'controls' => array(
                                        array(
                                            'name' => 'typography',
                                            'label' => esc_html__('Button Typography', 'sntravel' ),
                                            'type' => \Elementor\Group_Control_Typography::get_type(),
                                            'control_type' => 'group',
                                            'selector' => '{{WRAPPER}} .pxl-mailchimp button, {{WRAPPER}} .pxl-mailchimp input[type="submit"]',
                                        ),
                                        array(
                                            'name' => 'btn_background',
                                            'label' => esc_html__('Background Color', 'sntravel' ),
                                            'type' => \Elementor\Controls_Manager::COLOR,
                                            'selectors' => [
                                                '{{WRAPPER}} .pxl-mailchimp button, {{WRAPPER}} .pxl-mailchimp input[type="submit"]' => 'background-color: {{VALUE}};',
                                            ],
                                        ),
                                        array(
                                            'name' => 'btn_color',
                                            'label' => esc_html__('Text Color', 'sntravel' ),
                                            'type' => \Elementor\Controls_Manager::COLOR,
                                            'selectors' => [
                                                '{{WRAPPER}} .pxl-mailchimp button' => 'color: {{VALUE}};',
                                            ],
                                        ),
                                        array(
                                            'name' => 'btn_icon_color',
                                            'label' => esc_html__('Icon Color', 'sntravel' ),
                                            'type' => \Elementor\Controls_Manager::COLOR,
                                            'selectors' => [
                                                '{{WRAPPER}} .pxl-mailchimp button i' => 'color: {{VALUE}};',
                                            ],
                                        ),
                                        array(
                                            'name' => 'icon_size',
                                            'label' => esc_html__('Icon Size (px)', 'sntravel' ),
                                            'type' => \Elementor\Controls_Manager::NUMBER,
                                            'selectors' => [
                                                '{{WRAPPER}} .pxl-mailchimp button i' => 'font-size: {{VALUE}}px;',
                                            ],
                                        ),
                                        array(
                                            'name' => 'btn_width',
                                            'label' => esc_html__('Width (px)', 'sntravel' ),
                                            'type' => \Elementor\Controls_Manager::NUMBER,
                                            'selectors' => [
                                                '{{WRAPPER}} .pxl-mailchimp button,
                                                 {{WRAPPER}} .pxl-mailchimp input[type="submit"]' => 'width: {{VALUE}}px; padding: 0;',
                                                '{{WRAPPER}} .pxl-mailchimp input[type="text"], 
                                                 {{WRAPPER}} .pxl-mailchimp input[type="email"], 
                                                 {{WRAPPER}} .pxl-mailchimp input[type="phone"]' => 'padding-right: calc({{VALUE}}px + 5px);',
                                            ],
                                            'separator' => 'before',
                                            'condition' => [
                                               'style' => ['style-2','style-3']
                                            ]
                                        ),
                                        array(
                                            'name' => 'btn_distance',
                                            'label' => esc_html__('Distance To Input Border (px)', 'sntravel' ),
                                            'type' => \Elementor\Controls_Manager::NUMBER,
                                            'selectors' => [
                                                '{{WRAPPER}} .pxl-mailchimp button, {{WRAPPER}} .pxl-mailchimp input[type="submit"]' => 'top: {{VALUE}}px; right: {{VALUE}}px; height: calc( var(--input-height) - ({{VALUE}}px * 2) );',
                                            ],
                                            'control_type' => 'responsive',
                                            'condition' => [
                                                'style' => ['style-2','style-3']
                                            ]
                                        ),
                                        array(
                                            'name' => 'border_type',
                                            'label' => esc_html__( 'Border Type', 'sntravel' ),
                                            'type' => \Elementor\Controls_Manager::SELECT,
                                            'separator' => 'before',
                                            'options' => [
                                                '' => esc_html__( 'None', 'sntravel' ),
                                                'solid' => esc_html__( 'Solid', 'sntravel' ),
                                                'double' => esc_html__( 'Double', 'sntravel' ),
                                                'dotted' => esc_html__( 'Dotted', 'sntravel' ),
                                                'dashed' => esc_html__( 'Dashed', 'sntravel' ),
                                                'groove' => esc_html__( 'Groove', 'sntravel' ),
                                            ],
                                            'selectors' => [
                                                '{{WRAPPER}} .pxl-mailchimp button, {{WRAPPER}} .pxl-mailchimp input[type="submit"]' => 'border-style: {{VALUE}};',
                                            ],
                                        ),
                                        array(
                                            'name' => 'border_width',
                                            'label' => esc_html__( 'Border Width', 'sntravel' ),
                                            'type' => \Elementor\Controls_Manager::DIMENSIONS,
                                            'selectors' => [
                                                '{{WRAPPER}} .pxl-mailchimp button, {{WRAPPER}} .pxl-mailchimp input[type="submit"]' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                                            ],
                                            'responsive' => true,
                                        ),
                                        array(
                                            'name' => 'border_color',
                                            'label' => esc_html__( 'Border Color', 'sntravel' ),
                                            'type' => \Elementor\Controls_Manager::COLOR,
                                            'default' => '',
                                            'selectors' => [
                                                '{{WRAPPER}} .pxl-mailchimp button, {{WRAPPER}} .pxl-mailchimp input[type="submit"]' => 'border-color: {{VALUE}};'
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
                                                '{{WRAPPER}} .pxl-mailchimp button, {{WRAPPER}} .pxl-mailchimp input[type="submit"]' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                                            ],
                                            'control_type' => 'responsive',
                                        ),
                                    )
                                ),
                                array(
                                    'name' => 'btn_style_hover',
                                    'label' => esc_html__('Hover', 'sntravel'),
                                    'controls' => array(
                                        array(
                                            'name' => 'btn_hover_background',
                                            'label' => esc_html__('Button Hover Background', 'sntravel' ),
                                            'type' => \Elementor\Controls_Manager::COLOR,
                                            'selectors' => [
                                                '{{WRAPPER}} .pxl-mailchimp button:hover, {{WRAPPER}} .pxl-mailchimp input[type="submit"]:hover' => 'background-color: {{VALUE}};',
                                            ],
                                        ),
                                    )
                                ),
                            )
                        ),
                    ),
                ),
                array(
                    'name' => 'style_checkbox',
                    'label' => esc_html__('Label/CheckBox', 'sntravel'),
                    'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                    'controls' => array(
                        array(
                            'name' => 'lb_typography',
                            'label' => esc_html__('Label Typography', 'sntravel' ),
                            'type' => \Elementor\Group_Control_Typography::get_type(),
                            'control_type' => 'group',
                            'selector' => '{{WRAPPER}} .pxl-mailchimp label',
                        ),
                        array(
                            'name' => 'lb_color',
                            'label' => esc_html__('Label Color', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .pxl-mailchimp label' => 'color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'lb_margin',
                            'label' => esc_html__( 'Label Margin', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::DIMENSIONS,
                            'selectors' => [
                                '{{WRAPPER}} .pxl-mailchimp label' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'control_type' => 'responsive',
                            'responsive' => true
                        ),
                        array(
                            'name' => 'link_color',
                            'label' => esc_html__('Link Color', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .pxl-mailchimp label a' => 'color: {{VALUE}};',
                            ],
                            'separator' => 'after'
                        ),
                        array(
                            'name' => 'cb_margin',
                            'label' => esc_html__( 'Checkbox Margin', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::DIMENSIONS,
                            'selectors' => [
                                '{{WRAPPER}} .pxl-mailchimp input[type="checkbox"]' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'control_type' => 'responsive',
                            'responsive' => true
                        ),
                        array(
                            'name' => 'cb_color',
                            'label' => esc_html__('Checkbox Checked Color', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .pxl-mailchimp input[type="checkbox"]' => 'accent-color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'cb_width',
                            'label' => esc_html__('Checkbox Width (px)', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::NUMBER,
                            'selectors' => [
                                '{{WRAPPER}} .pxl-mailchimp input[type="checkbox"]' => 'width: {{VALUE}}px;',
                            ],
                        ),
                    ),
                ),
            ),
        ),
    ),
    basilico_get_class_widget_path()
);