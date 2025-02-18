<?php
// Register Contact Form 7 Widget
if(class_exists('WPCF7')) {
    $cf7 = get_posts('post_type="wpcf7_contact_form"&numberposts=-1');
    $contact_forms = array();
    if ($cf7) {
        foreach ($cf7 as $cform) {
            $contact_forms[$cform->post_name] = $cform->post_title;
        }
    } else {
        $contact_forms[esc_html__('No contact forms found', 'sntravel')] = 0;
    }

    sntravel_add_custom_widget(
        array(
            'name'       => 'sntravel_contact_form',
            'title'      => esc_html__('Pxl Contact Form 7', 'sntravel'),
            'icon'       => 'eicon-form-horizontal',
            'categories' => array('sntraveltheme-core'),
            'scripts'    => array(),
            'params'     => array(
                'sections' => array(
                    array(
                        'name' => 'source_section',
                        'label' => esc_html__('Source Settings', 'sntravel'),
                        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                        'controls' => array(
                            array(
                                'name' => 'ctf7_slug',
                                'label' => esc_html__('Select Form', 'sntravel'),
                                'type' => \Elementor\Controls_Manager::SELECT,
                                'options' => $contact_forms,
                                'default' => array_key_first($contact_forms),
                            ),
                        ),
                    ),
                    array(
                        'name' => 'content_style',
                        'label' => esc_html__('Content Style', 'sntravel'),
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
                                                    '{{WRAPPER}} .sntravel-contact-form7 input[type="text"],
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="password"],
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="email"],
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="phone"], 
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="date"],
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="datetime-local"],
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="time"],
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="tel"],
                                                     {{WRAPPER}} .sntravel-contact-form7 select, 
                                                     {{WRAPPER}} .sntravel-contact-form7 textarea' => 'background-color: {{VALUE}};',
                                                ],
                                            ),
                                            array(
                                                'name' => 'input_text_color',
                                                'label' => esc_html__('Input Text Color', 'sntravel' ),
                                                'type' => \Elementor\Controls_Manager::COLOR,
                                                'selectors' => [
                                                    '{{WRAPPER}} .sntravel-contact-form7 input[type="text"],
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="password"],
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="email"],
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="phone"], 
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="date"],
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="time"],
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="datetime-local"],
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="tel"], 
                                                     {{WRAPPER}} .sntravel-contact-form7 select, 
                                                     {{WRAPPER}} .sntravel-contact-form7 textarea' => 'color: {{VALUE}};',
                                                ],
                                            ),
                                            array(
                                                'name' => 'input_border_color',
                                                'label' => esc_html__('Input Border Color', 'sntravel' ),
                                                'type' => \Elementor\Controls_Manager::COLOR,
                                                'selectors' => [
                                                    '{{WRAPPER}} .sntravel-contact-form7 input[type="text"],
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="password"],
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="email"],
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="phone"], 
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="date"],
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="time"],
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="datetime-local"],
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="tel"], 
                                                     {{WRAPPER}} .sntravel-contact-form7 select, 
                                                     {{WRAPPER}} .sntravel-contact-form7 textarea' => 'border-color: {{VALUE}};',
                                                ],
                                            ),
                                            array(
                                                'name' => 'input_border_radius',
                                                'label' => esc_html__('Input Border Radius', 'sntravel' ),
                                                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                                                'size_units' => [ 'px', 'em' ],
                                                'selectors' => [
                                                    '{{WRAPPER}} .sntravel-contact-form7 input[type="text"],
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="password"],
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="email"],
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="phone"], 
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="time"],
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="date"],
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="time"], 
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="datetime-local"],
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="tel"], 
                                                     {{WRAPPER}} .sntravel-contact-form7 select, 
                                                     {{WRAPPER}} .sntravel-contact-form7 textarea' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                                                ],
                                            ),
                                            array(
                                                'name'      => 'select_style',
                                                'type'      => \Elementor\Controls_Manager::SELECT,
                                                'label'     => esc_html__('Select Dropdown Icon Style', 'sntravel'),
                                                'options'   => array(
                                                    ''          => esc_html__('Default', 'sntravel'),
                                                    'select-2'  => esc_html__('Style 2', 'sntravel'),
                                                    'select-3'  => esc_html__('Style 3', 'sntravel'),
                                                    'select-4'  => esc_html__('Style 4', 'sntravel'),
                                                    'select-5'  => esc_html__('Style 5', 'sntravel'),
                                                    'select-6'  => esc_html__('Style 6', 'sntravel'),
                                                ),
                                                'default' => ''
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
                                                    '{{WRAPPER}} .sntravel-contact-form7 input[type="text"]:hover,
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="password"]:hover,
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="email"]:hover,
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="phone"]:hover, 
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="time"]:hover,
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="date"]:hover,
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="time"]:hover, 
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="datetime-local"]:hover,
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="tel"]:hover, 
                                                     {{WRAPPER}} .sntravel-contact-form7 textarea:hover,
                                                     {{WRAPPER}} .sntravel-contact-form7 select:hover,
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="text"]:focus,
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="password"]:focus,
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="email"]:focus,
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="phone"]:focus, 
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="time"]:focus,
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="date"]:focus,
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="time"]:focus, 
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="datetime-local"]:focus,
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="tel"]:focus, 
                                                     {{WRAPPER}} .sntravel-contact-form7 textarea:focus,
                                                     {{WRAPPER}} .sntravel-contact-form7 input:focus + input[type="submit"],
                                                     {{WRAPPER}} .sntravel-contact-form7 input:hover + input[type="submit"],
                                                     {{WRAPPER}} .sntravel-contact-form7 input:focus + button,
                                                     {{WRAPPER}} .sntravel-contact-form7 input:hover + button' => 'background-color: {{VALUE}};',
                                                ],
                                            ),
                                            array(
                                                'name' => 'input_text_hover',
                                                'label' => esc_html__('Input Text Color', 'sntravel' ),
                                                'type' => \Elementor\Controls_Manager::COLOR,
                                                'selectors' => [
                                                    '{{WRAPPER}} .sntravel-contact-form7 input[type="text"]:hover,
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="password"]:hover,
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="email"]:hover,
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="phone"]:hover, 
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="time"]:hover,
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="date"]:hover,
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="time"]:hover, 
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="datetime-local"]:hover,
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="tel"]:hover, 
                                                     {{WRAPPER}} .sntravel-contact-form7 textarea:hover
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="text"]:focus,
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="password"]:focus,
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="email"]:focus,
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="phone"]:focus, 
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="time"]:focus,
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="date"]:focus,
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="time"]:focus, 
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="tel"]:focus, 
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="datetime-local"]:focus,
                                                     {{WRAPPER}} .sntravel-contact-form7 textarea:focus' => 'color: {{VALUE}};',
                                                ],
                                            ),
                                            array(
                                                'name' => 'input_border_hover',
                                                'label' => esc_html__('Input Border Color', 'sntravel' ),
                                                'type' => \Elementor\Controls_Manager::COLOR,
                                                'selectors' => [
                                                    '{{WRAPPER}} .sntravel-contact-form7 input[type="text"]:hover,
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="password"]:hover,
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="email"]:hover,
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="phone"]:hover, 
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="time"]:hover,
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="date"]:hover,
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="time"]:hover, 
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="tel"]:hover, 
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="datetime-local"]:hover,
                                                     {{WRAPPER}} .sntravel-contact-form7 textarea:hover,
                                                     {{WRAPPER}} .sntravel-contact-form7 select:hover,
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="text"]:focus,
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="password"]:focus,
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="email"]:focus,
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="phone"]:focus, 
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="time"]:focus,
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="date"]:focus,
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="time"]:focus, 
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="tel"]:focus, 
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="datetime-local"]:focus,
                                                     {{WRAPPER}} .sntravel-contact-form7 textarea:focus,
                                                     {{WRAPPER}} .sntravel-contact-form7 input:focus + input[type="submit"],
                                                     {{WRAPPER}} .sntravel-contact-form7 input:hover + input[type="submit"],
                                                     {{WRAPPER}} .sntravel-contact-form7 input:focus + button,
                                                     {{WRAPPER}} .sntravel-contact-form7 input:hover + button' => 'border-color: {{VALUE}};',
                                                ],
                                            ),
                                            array(
                                                'name' => 'input_hover_shadow',
                                                'label'        => esc_html__( 'Box Shadow', 'sntravel' ),
                                                'type'         => \Elementor\Group_Control_Box_Shadow::get_type(),
                                                'control_type' => 'group',
                                                'exclude' => [
                                                    'box_shadow_position',
                                                ],
                                                'selector' => 
                                                    '{{WRAPPER}} .sntravel-contact-form7 input[type="text"]:hover,
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="password"]:hover,
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="email"]:hover,
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="phone"]:hover, 
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="time"]:hover,
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="date"]:hover,
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="time"]:hover, 
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="tel"]:hover, 
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="datetime-local"]:hover,
                                                     {{WRAPPER}} .sntravel-contact-form7 textarea:hover,
                                                     {{WRAPPER}} .sntravel-contact-form7 select:hover,
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="text"]:focus,
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="password"]:focus,
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="email"]:focus,
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="phone"]:focus, 
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="time"]:focus,
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="date"]:focus,
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="time"]:focus, 
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="tel"]:focus, 
                                                     {{WRAPPER}} .sntravel-contact-form7 input[type="datetime-local"]:focus,
                                                     {{WRAPPER}} .sntravel-contact-form7 textarea:focus,
                                                     {{WRAPPER}} .sntravel-contact-form7 input:focus + input[type="submit"],
                                                     {{WRAPPER}} .sntravel-contact-form7 input:hover + input[type="submit"],
                                                     {{WRAPPER}} .sntravel-contact-form7 input:focus + button,
                                                     {{WRAPPER}} .sntravel-contact-form7 input:hover + button'
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                    array(
                        'name' => 'section_style_button',
                        'label' => esc_html__('Button Style', 'sntravel' ),
                        'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                        'controls' => array(
                            array(
                                'name' => 'text_align',
                                'label' => esc_html__('Alignment', 'sntravel' ),
                                'type' => \Elementor\Controls_Manager::CHOOSE,
                                'control_type' => 'responsive',
                                'options' => [
                                    'left' => [
                                        'title' => esc_html__('Left', 'sntravel' ),
                                        'icon' => 'eicon-text-align-left',
                                    ],
                                    'center' => [
                                        'title' => esc_html__('Center', 'sntravel' ),
                                        'icon' => 'eicon-text-align-center',
                                    ],
                                    'right' => [
                                        'title' => esc_html__('Right', 'sntravel' ),
                                        'icon' => 'eicon-text-align-right',
                                    ],
                                ],
                                'selectors' => [
                                    '{{WRAPPER}} .sntravel-contact-form7' => 'text-align: {{VALUE}};',
                                ],
                            ),
                            array(
                                'name' => 'button_style_tabs',
                                'control_type' => 'tab',
                                'tabs' => array(
                                    array(
                                        'name' => 'button_style_normal',
                                        'label' => esc_html__('Normal', 'sntravel'),
                                        'controls' => array(
                                            array(
                                                'name' => 'button_color',
                                                'label' => esc_html__('Text Color', 'sntravel'),
                                                'type' => \Elementor\Controls_Manager::COLOR,
                                                'selectors' => [
                                                    '{{WRAPPER}} .wpcf7-form input[type="submit"], 
                                                     {{WRAPPER}} .wpcf7-form button' => 'color: {{VALUE}};'
                                                ]
                                            ),
                                            array(
                                                'name' => 'button_background',
                                                'type' => \Elementor\Group_Control_Background::get_type(),
                                                'control_type' => 'group',
                                                'types'             => [ 'classic' , 'gradient' ],
                                                'selector' => '{{WRAPPER}} .wpcf7-form input[type="submit"], {{WRAPPER}} .wpcf7-form button',
                                            ),
                                        )
                                    ),
                                    array(
                                        'name' => 'button_style_hover',
                                        'label' => esc_html__('Hover', 'sntravel'),
                                        'controls' => array(
                                            array(
                                                'name' => 'button_color_hover',
                                                'label' => esc_html__('Text Color', 'sntravel'),
                                                'type' => \Elementor\Controls_Manager::COLOR,
                                                'selectors' => [
                                                    '{{WRAPPER}} .wpcf7-form input[type="submit"]:hover,
                                                     {{WRAPPER}} .wpcf7-form button:hover' => 'color:{{VALUE}};'
                                                ]
                                            ),
                                            array(
                                                'name' => 'button_background_hover',
                                                'label' => esc_html__('Background Color', 'sntravel'),
                                                'type' => \Elementor\Controls_Manager::COLOR,
                                                'selectors' => [
                                                    '{{WRAPPER}} .sntravel-button-wrapper .btn:hover' => 'border-color: {{VALUE}};',
                                                    '{{WRAPPER}} .sntravel-button-wrapper .btn.btn-additional-6:hover, {{WRAPPER}} .sntravel-button-wrapper .btn.btn-additional-7:hover,
                                                     {{WRAPPER}} .sntravel-button-wrapper .btn.btn-additional-5:hover, {{WRAPPER}} .sntravel-button-wrapper .btn.btn-additional-8:hover' => 'background-color: {{VALUE}};',
                                                    '{{WRAPPER}} .sntravel-button-wrapper .btn:before' => 'background-color: {{VALUE}};'
                                                ],
                                            ),
                                        )
                                    ),
                                )
                            ),
                        ),
                    ),
                    array(
                        'name' => 'textarea_size',
                        'label' => esc_html__('Texarea Size', 'sntravel'),
                        'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                        'controls' => array(
                            array(
                                'name'  =>  'message_height',
                                'type'  =>  \Elementor\Controls_Manager::SLIDER,
                                'label' => esc_html__('Message Height', 'sntravel'),
                                'size_units' => ['px'],
                                'range' => [
                                    'px' => [
                                        'min' => 120,
                                        'max' => 350,
                                    ],
                                ],
                                'default'   => [
                                    'unit' => 'px',
                                    'size' => '',
                                ],
                                'selectors' => [
                                    '{{WRAPPER}} .wpcf7-form textarea.wpcf7-textarea' => 'height: {{SIZE}}{{UNIT}};',
                                ],
                            ),
                        ),
                    ),
                ),
            )
        ),
            basilico_get_class_widget_path()
    );
}