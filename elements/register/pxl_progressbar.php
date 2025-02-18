<?php
// Register Progress Bar Widget
pxl_add_custom_widget(
    array(
        'name'       => 'pxl_progressbar',
        'title'      => esc_html__( 'PXL Progress Bar', 'sntravel' ),
        'icon'       => 'eicon-skill-bar',
        'categories' => array('pxltheme-core'),
        'scripts'    => array(
            'pxl-progressbar',
            'sntravel-progressbar'
        ),
        'params' => array(
            'sections' => array(
                array(
                    'name'     => 'source_section',
                    'label'    => esc_html__( 'Source Settings', 'sntravel' ),
                    'tab'      => 'content',
                    'controls' => array(
                        array(
                            'name'     => 'progressbar_list',
                            'label'    => esc_html__( 'Progress Bar Lists', 'sntravel' ),
                            'type'     => 'repeater',
                            'controls' => array_merge(
                                array(
                                    array(
                                        'name'        => 'title',
                                        'label'       => esc_html__( 'Title', 'sntravel' ),
                                        'type'        => 'text',
                                        'placeholder' => esc_html__( 'Enter your title', 'sntravel' ),
                                        'default'     => esc_html__( 'My Skill', 'sntravel' ),
                                        'label_block' => true
                                    ),
                                    array(
                                        'name'    => 'percent',
                                        'label'   => esc_html__( 'Percentage', 'sntravel' ),
                                        'type'    => 'slider',
                                        'default' => [
                                            'size' => 50,
                                            'unit' => '%',
                                        ],
                                        'label_block' => true
                                    ),
                                    array(
                                        'name' => 'item_bar_color',
                                        'label' => esc_html__( 'Bar Background Color', 'sntravel' ),
                                        'type' => \Elementor\Controls_Manager::COLOR,
                                        'selectors' => [
                                            '{{WRAPPER}} {{CURRENT_ITEM}} .pxl-progress-bar' => 'background-color: {{VALUE}}',
                                        ],
                                    ),
                                )
                            ),
                            'title_field' => '{{title}}'
                        )
                    )
                ),
                array(
                    'name' => 'section_title',
                    'label' => esc_html__( 'Style', 'sntravel' ),
                    'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                    'controls' => array_merge(
                        array(
                            array(
                                'name' => 'title_color',
                                'label' => esc_html__( 'Title Color', 'sntravel' ),
                                'type' => \Elementor\Controls_Manager::COLOR,
                                'selectors' => [
                                    '{{WRAPPER}} .pxl-progressbar .progress-title' => 'color: {{VALUE}};',
                                ],
                            ),
                            array(
                                'name' => 'typography',
                                'label' => esc_html__( 'Title Typography', 'sntravel' ),
                                'type' => \Elementor\Group_Control_Typography::get_type(),
                                'control_type' => 'group',
                                'selector' => '{{WRAPPER}} .pxl-progressbar .progress-title',
                            ),
                            array(
                                'name' => 'percent_color',
                                'label' => esc_html__( 'Percentage Color', 'sntravel' ),
                                'type' => \Elementor\Controls_Manager::COLOR,
                                'selectors' => [
                                    '{{WRAPPER}} .pxl-progressbar .progress-percentage' => 'color: {{VALUE}};',
                                ],
                            ),
                            array(
                                'name' => 'percentage_typography',
                                'label' => esc_html__( 'Percentage Typography', 'sntravel' ),
                                'type' => \Elementor\Group_Control_Typography::get_type(),
                                'control_type' => 'group',
                                'selector' => '{{WRAPPER}} .pxl-progressbar .progress-percentage',
                            ),
                            array(
                                'name' => 'bound_color',
                                'label' => esc_html__( 'Bound Background Color', 'sntravel' ),
                                'type' => \Elementor\Controls_Manager::COLOR,
                                'selectors' => [
                                    '{{WRAPPER}} .pxl-progressbar .progress-bound' => 'background-color: {{VALUE}};'
                                ],
                            ),
                        ),
                        basilico_elementor_animation_opts([
                            'name'   => 'item',
                            'label' => esc_html__('Item', 'sntravel'),
                        ])
                    ),
                ),
                
            )
        )
    ),
    basilico_get_class_widget_path()
);