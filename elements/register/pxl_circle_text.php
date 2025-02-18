<?php
// Register Circle Text Widget
pxl_add_custom_widget(
    array(
        'name'       => 'pxl_circle_text',
        'title'      => esc_html__( 'PXL Circle Text', 'sntravel' ),
        'icon'       => 'eicon-text',
        'categories' => array('pxltheme-core'),
        'scripts'    => array(
            'pxl-circle-text'
        ),
        'params' => array(
            'sections' => array(
                array(
                    'name'     => 'content_section',
                    'label'    => esc_html__( 'Content', 'sntravel' ),
                    'tab'      => 'content',
                    'controls' => array(
                        array(
                            'name'     => 'title',
                            'label'    => esc_html__('Title', 'sntravel'),
                            'type'     => 'textarea',
                            'default'  => esc_html__('Your Title', 'sntravel')
                        ),
                    )
                ),
                array(
                    'name' => 'section_style',
                    'label' => esc_html__('Style', 'sntravel'),
                    'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                    'controls' => array(
                        array(
                            'name' => 'title_typography',
                            'label' => esc_html__('Title Typography', 'sntravel' ),
                            'type' => \Elementor\Group_Control_Typography::get_type(),
                            'control_type' => 'group',
                            'selector' => '{{WRAPPER}} .pxl-circle-text .circle-text',
                        ),
                        array(
                            'name' => 'title_color',
                            'label' => esc_html__('Title Color', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .pxl-circle-text .circle-text' => 'color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'text_align',
                            'label' => esc_html__('Alignment', 'sntravel' ),
                            'type' => 'choose',
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
                            'prefix_class' => 'elementor-align-',
                            'default' => '',
                            'selectors' => [
                                '{{WRAPPER}} .pxl-circle-text .circle-text' => 'text-align: {{VALUE}};'
                            ],
                        ),
                    ),
                ),
            )
        )
    ),
    basilico_get_class_widget_path()
);