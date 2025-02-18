<?php
sntravel_add_custom_widget(
    array(
        'name' => 'sntravel_page_title',
        'title' => esc_html__('PXL Page Title', 'sntravel' ),
        'icon' => 'eicon-t-letter',
        'categories' => array('sntraveltheme-core'),
        'params' => array(
            'sections' => array(
                array(
                    'name'     => 'layout_section',
                    'label'    => esc_html__( 'Layout', 'sntravel' ),
                    'tab'      => 'layout',
                    'controls' => array(
                        array(
                            'name'    => 'layout',
                            'label'   => esc_html__( 'Templates', 'sntravel' ),
                            'type'    => 'layoutcontrol',
                            'default' => '1',
                            'options' => [
                                '1' => [
                                    'label' => esc_html__( 'Layout 1', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/sntravel_fancy_box-1.jpg'
                                ],
                            ],
                        )
                    )
                ),
                array(
                    'name' => 'content_section',
                    'label' => esc_html__('Style', 'sntravel' ),
                    'tab' => 'style',
                    'controls' => array(
                        array(
                            'name' => 'style',
                            'label' => esc_html__('Style', 'sntravel' ),
                            'type' => 'select',
                            'options' => [
                                'style-1' => esc_html__('Style 1', 'sntravel'),
                                'style-2' => esc_html__('Style 2', 'sntravel'),
                                'style-3' => esc_html__('Style 3', 'sntravel'),
                            ],
                            'default' => 'style-1',
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
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-pt-wrap' => 'text-align: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'title_color',
                            'label' => esc_html__('Title Color', 'sntravel' ),
                            'type' => 'color',
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-pt-wrap .main-title' => 'color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'pt_typography',
                            'label' => esc_html__('Title Typography', 'sntravel' ),
                            'type' => \Elementor\Group_Control_Typography::get_type(),
                            'control_type' => 'group',
                            'selector' => '{{WRAPPER}} .sntravel-pt-wrap .main-title',
                        ),
                    ),
                ),
            ),
        ),
    ),
    basilico_get_class_widget_path()
);