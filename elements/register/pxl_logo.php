<?php
pxl_add_custom_widget(
    array(
        'name' => 'pxl_logo',
        'title' => esc_html__('PXL Logo', 'sntravel' ),
        'icon' => 'eicon-image',
        'categories' => array('pxltheme-core'),
        'params' => array(
            'sections' => array(
                array(
                    'name' => 'content_section',
                    'label' => esc_html__('Content', 'sntravel' ),
                    'tab' => 'content',
                    'controls' => array(
                        array(
                            'name' => 'logo',
                            'label' => esc_html__('Logo', 'sntravel' ),
                            'type' => 'media',
                        ),
                        array(
                            'name' => 'logo_max_width',
                            'label' => esc_html__('Max Width', 'sntravel' ),
                            'type' => 'slider',
                            'description' => esc_html__('Enter number.', 'sntravel' ),
                            'range' => [
                                'px' => [
                                    'min' => 0,
                                    'max' => 3000,
                                ],
                            ],
                            'control_type' => 'responsive',
                            'selectors' => [
                                '{{WRAPPER}} .pxl-logo img' => 'max-width: {{SIZE}}{{UNIT}};',
                            ],
                        ),
                        array(
                            'name'         => 'logo_align',
                            'label'        => esc_html__( 'Alignment', 'sntravel' ),
                            'type'         => 'choose',
                            'control_type' => 'responsive',
                            'options' => [
                                'start' => [
                                    'title' => esc_html__( 'Start', 'sntravel' ),
                                    'icon' => 'eicon-text-align-left',
                                ],
                                'center' => [
                                    'title' => esc_html__( 'Center', 'sntravel' ),
                                    'icon' => 'eicon-text-align-center',
                                ],
                                'end' => [
                                    'title' => esc_html__( 'End', 'sntravel' ),
                                    'icon' => 'eicon-text-align-right',
                                ]
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .pxl-logo' => 'justify-content: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'logo_link',
                            'label' => esc_html__('Link', 'sntravel' ),
                            'type' => 'url',
                        ) 
                    ),
                ),
            ),
        ),
    ),
    basilico_get_class_widget_path()
);