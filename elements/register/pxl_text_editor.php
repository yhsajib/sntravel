<?php
use \Elementor\Controls_Manager;
use \Elementor\Group_Control_Typography;
$text_columns = range( 1, 10 );
$text_columns = array_combine( $text_columns, $text_columns );
$text_columns[''] = esc_html__( 'Default', 'sntravel' );
sntravel_add_custom_widget(
    array(
        'name' => 'sntravel_text_editor',
        'title' => esc_html__( 'PXL Text Editor', 'sntravel' ),
        'icon' => 'eicon-text',
        'scripts'    => array(
            'sntravel-split-text'
        ),
        'categories' => array('sntraveltheme-core'),
        'params' => array(
            'sections' => array(
                array(
                    'name' => 'editor_section',
                    'label' => esc_html__( 'Text Editor', 'sntravel' ),
                    'tab' => Controls_Manager::TAB_CONTENT,
                    'controls' => array(
                        array(
                            'name' => 'text_editor',
                            'label' => '',
                            'type' => Controls_Manager::WYSIWYG,
                            'default' => esc_html__( 'Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', 'sntravel' ),
                        ),
                        array(
                            'name' => 'dropcap',
                            'label' => esc_html__('Dropcap', 'sntravel'),
                            'type' => \Elementor\Controls_Manager::SWITCHER,
                            'default' => 'false',
                        ),
                        array(
                            'name' => 'dropcap_color',
                            'label' => esc_html__( 'Dropcap Text Color', 'sntravel' ),
                            'type' => Controls_Manager::COLOR,
                            'default' => '',
                            'condition' => [
                                'dropcap' => 'true',
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-text-editor .sntravel-dropcap::first-letter, {{WRAPPER}} .sntravel-text-editor .sntravel-dropcap > *:first-child::first-letter' => 'color: {{VALUE}};',
                            ],
                        ),
                        basilico_split_text_option()
                    ),
                ),
                array(
                    'name' => 'section_style_content',
                    'label' => esc_html__( 'Content Alignment', 'sntravel' ),
                    'tab' => Controls_Manager::TAB_STYLE,
                    'controls' => array(
                        array(
                            'name'  => 'max_width',
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
                                '{{WRAPPER}} .sntravel-text-editor' => 'max-width: {{SIZE}}{{UNIT}};',
                            ],
                        ),
                        array(
                          'name' => 'align',
                            'label' => esc_html__( 'Alignment', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::CHOOSE,
                            'control_type' => 'responsive',
                            'options' => [
                                'start' => [
                                    'title' => esc_html__( 'Left', 'sntravel' ),
                                    'icon' => 'eicon-text-align-left',
                                ],
                                'center' => [
                                    'title' => esc_html__( 'Center', 'sntravel' ),
                                    'icon' => 'eicon-text-align-center',
                                ],
                                'end' => [
                                    'title' => esc_html__( 'Right', 'sntravel' ),
                                    'icon' => 'eicon-text-align-right',
                                ]
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-text-editor-wrap' => 'justify-content: {{VALUE}};',
                                '{{WRAPPER}} .sntravel-text-editor' => 'text-align: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'hyphens',
                            'label' => esc_html__( 'Hyphens', 'sntravel' ),
                            'type' => Controls_Manager::SWITCHER,
                            'default' => 'false',
                        ),
                        array(
                            'name' => 'text_color',
                            'label' => esc_html__( 'Text Color', 'sntravel' ),
                            'type' => Controls_Manager::COLOR,
                            'default' => '',
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-text-editor' => 'color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'link_color',
                            'label' => esc_html__( 'Link Color', 'sntravel' ),
                            'type' => Controls_Manager::COLOR,
                            'default' => '',
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-text-editor a' => 'color: {{VALUE}};',
                                '{{WRAPPER}} .sntravel-text-editor a.link-underline' => 'border-color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'link_color_hover',
                            'label' => esc_html__( 'Link Color Hover', 'sntravel' ),
                            'type' => Controls_Manager::COLOR,
                            'default' => '',
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-text-editor a:hover' => 'color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'typography',
                            'type' => Group_Control_Typography::get_type(),
                            'label' => esc_html__( 'Text Typography', 'sntravel' ),
                            'selector' => '{{WRAPPER}} .sntravel-text-editor, {{WRAPPER}} .sntravel-text-editor h1, {{WRAPPER}} .sntravel-text-editor h2, {{WRAPPER}} .sntravel-text-editor h3, {{WRAPPER}} .sntravel-text-editor h4, {{WRAPPER}} .sntravel-text-editor h5, {{WRAPPER}} .sntravel-text-editor h6',
                            'control_type' => 'group',
                        ),
                        array(
                            'name' => 'link_typography',
                            'type' => Group_Control_Typography::get_type(),
                            'label' => esc_html__( 'Link Typography', 'sntravel' ),
                            'selector' => '{{WRAPPER}} .sntravel-text-editor a',
                            'control_type' => 'group',
                        ),
                    ),
                ),
            ),
        ),
    ),
    basilico_get_class_widget_path()
);