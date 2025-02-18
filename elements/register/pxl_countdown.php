<?php
//Register Counter Widget
 pxl_add_custom_widget(
    array(
        'name'       => 'pxl_countdown',
        'title'      => esc_html__('PXL Countdown', 'sntravel'),
        'icon' => 'eicon-countdown',
        'categories' => array('pxltheme-core'),
        'scripts'    => array(
            'sntravel-countdown',
        ),
        'params' => array(
            'sections' => array(
                array(
                    'name'     => 'layout_section',
                    'label'    => esc_html__( 'Layout', 'sntravel' ),
                    'tab'      => 'layout',
                    'controls' => array(
                        array(
                            'name'         => 'layout',
                            'label'        => esc_html__( 'Templates', 'sntravel' ),
                            'type'         => 'layoutcontrol',
                            'default'      => '1',
                            'options'      => [
                                '1' => [
                                    'label' => esc_html__( 'Layout 1', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/pxl_countdown-1.jpg'
                                ],
                                '2' => [
                                    'label' => esc_html__( 'Layout 2', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/pxl_countdown-2.jpg'
                                ],
                            ],
                            'prefix_class' => 'pxl-counter-layout',
                        ) 
                    ),
                ),
                array(
                    'name' => 'content_section',
                    'label' => esc_html__('Time to', 'sntravel' ),
                    'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                    'controls' => array(
                        array(
                            'name' => 'time_to',
                            'label' => esc_html__('Enter the time', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::TEXT,
                            'default' => '09/19/2023 00:00 AM',
                            'label_block' => true,
                            'description' => 'Time Format: 09/19/2023 00:00 AM'
                        ),
                    ),
                ),
                array(
                    'name' => 'section_style_number',
                    'label' => esc_html__('Countdown Number', 'sntravel' ),
                    'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                    'controls' => array(
                        array(
                            'name' => 'number_typography',
                            'label' => esc_html__('Number Typography', 'sntravel' ),
                            'type' => \Elementor\Group_Control_Typography::get_type(),
                            'control_type' => 'group',
                            'selector' => '{{WRAPPER}} .pxl-countdown .pxl-countdown-container .inner-number',
                        ),
                        array(
                            'name' => 'number_color',
                            'label' => esc_html__('Number Color', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'default' => '',
                            'selectors' => [
                                '{{WRAPPER}} .pxl-countdown .pxl-countdown-container .inner-number' => 'color: {{VALUE}};',
                            ],
                        ),
                    ),
                ),
                array(
                    'name' => 'section_style_text',
                    'label' => esc_html__('Countdown Text', 'sntravel' ),
                    'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                    'controls' => array(
                        array(
                            'name' => 'text_typography',
                            'label' => esc_html__('Text Typography', 'sntravel' ),
                            'type' => \Elementor\Group_Control_Typography::get_type(),
                            'control_type' => 'group',
                            'selector' => '{{WRAPPER}} .pxl-countdown .pxl-countdown-container .inner-text',
                        ),
                        array(
                            'name' => 'text_color',
                            'label' => esc_html__('Text Color', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'default' => '',
                            'selectors' => [
                                '{{WRAPPER}} .pxl-countdown .pxl-countdown-container .inner-text' => 'color: {{VALUE}};',
                            ],
                        ),
                    ),
                ),
            )
        )
    ),
    basilico_get_class_widget_path()
);