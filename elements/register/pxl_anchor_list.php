<?php
$templates_df = [
    0 => esc_html__('None', 'sntravel'),
    'cart-dropdown' => esc_html__('Cart Dropdown', 'sntravel'),
    'cart-page' => esc_html__('Cart Page', 'sntravel'),
    'url' => esc_html__('URL', 'sntravel')
];
$templates = $templates_df + basilico_get_templates_option('hidden-panel');

sntravel_add_custom_widget(
    array(
        'name'       => 'sntravel_anchor_list',
        'title'      => esc_html__( 'PXL Anchor List', 'sntravel' ),
        'icon'       => 'eicon-anchor',
        'categories' => array('sntraveltheme-core'),
        'scripts'    => array(),
        'params' => array(
            'sections' => array(
                array(
                    'name' => 'layout_section',
                    'label' => esc_html__('Layout', 'sntravel' ),
                    'tab' => \Elementor\Controls_Manager::TAB_LAYOUT,
                    'controls' => array(
                        array(
                            'name'    => 'layout',
                            'label'   => esc_html__( 'Layout', 'sntravel' ),
                            'type'    => 'layoutcontrol',
                            'default' => '1',
                            'options' => [
                                '1' => [
                                    'label' => esc_html__( 'Layout 1', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/sntravel_banner_carousel-1.jpg'
                                ],
                            ],
                        ),
                        
                    ),
                ),
                array(
                    'name'     => 'icon_section',
                    'label'    => esc_html__( 'Settings', 'sntravel' ),
                    'tab'      => 'content',
                    'controls' => array(
                        array(
                            'name' => 'anchors',
                            'label' => esc_html__('', 'sntravel'),
                            'type' => 'repeater',
                            'default' => [],
                            'controls' => array(
                                array(
                                    'name' => 'template',
                                    'label' => esc_html__('Select Templates', 'sntravel'),
                                    'type' => 'select',
                                    'options' => $templates,
                                    'default' => 'df' 
                                ),
                                array(
                                    'name' => 'cart_style',
                                    'label' => esc_html__('Dropdown Layout', 'sntravel'),
                                    'type' => 'select',
                                    'options' => [
                                        'layout-1' => esc_html__('Layout 1', 'sntravel'),
                                        'layout-2' => esc_html__('Layout 2', 'sntravel'),
                                        'layout-3' => esc_html__('Layout 3', 'sntravel'),
                                        'layout-4' => esc_html__('Layout 4', 'sntravel'),
                                    ],
                                    'default' => 'layout-1',
                                    'condition' => ['template' => 'cart-dropdown']
                                ),
                                array(
                                    'name'             => 'selected_icon',
                                    'label'            => esc_html__( 'Icon', 'sntravel' ),
                                    'type'             => 'icons',
                                    'default'          => [
                                        'library' => 'sntraveli',
                                        'value'   => 'sntraveli-search-400'
                                    ],
                                ),
                                array(
                                    'name'  => 'cart_count',
                                    'label' => esc_html__('Show Cart Count', 'sntravel'),
                                    'type'  => \Elementor\Controls_Manager::SWITCHER,
                                    'default' => 'false',
                                    'condition' => [
                                        'template' => ['cart-dropdown', 'cart-page']
                                    ],
                                ),
                                array(
                                    'name'  => 'anchor_url',
                                    'label' => esc_html__('URL' ,'sntravel'),
                                    'type'  => \Elementor\Controls_Manager::TEXT,
                                    'condition' => [
                                        'template' => ['url']
                                    ],
                                ),
                            ),
                        ),
                    ),
                ),
                array(
                    'name' => 'style_section',
                    'label' => esc_html__('Style Settings', 'sntravel' ),
                    'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                    'controls' => array_merge(
                        array(
                            array(
                                'name'  => 'icon_size',
                                'label' => esc_html__( 'Icon Size(px)', 'sntravel' ),
                                'type'  => 'slider',
                                'range' => [
                                    'px' => [
                                        'min' => 15,
                                        'max' => 300,
                                    ],
                                ],
                                'selectors' => [
                                    '{{WRAPPER}} .sntravel-anchor' => 'font-size: {{SIZE}}{{UNIT}};',
                                    '{{WRAPPER}} .sntravel-anchor svg' => 'width: {{SIZE}}{{UNIT}};',
                                ],
                            ),
                            array(
                                'name' => 'icon_color',
                                'label' => esc_html__('Color', 'sntravel' ),
                                'type' => 'color',
                                'selectors' => [
                                    '{{WRAPPER}} .sntravel-anchor' => 'color: {{VALUE}};'
                                ],
                            ),
                            array(
                                'name' => 'container_background',
                                'label' => esc_html__('Background Hover', 'sntravel' ),
                                'type' => \Elementor\Group_Control_Background::get_type(),
                                'control_type' => 'group',
                                'types' => ['classic', 'gradient'],
                                'selector' => '{{WRAPPER}} .sntravel-anchor-list.layout-1 .sntravel-anchor-list-wrap',
                            ),
                            array(
                                'name' => 'icon_color_hover',
                                'label' => esc_html__('Icon Hover', 'sntravel' ),
                                'type' => 'color',
                                'selectors' => [
                                    '{{WRAPPER}} .sntravel-anchor-list.layout-1 .sntravel-anchor:hover' => 'color: {{VALUE}};',
                                    '{{WRAPPER}} .sntravel-anchor-list.layout-1 .sntravel-anchor:hover svg' => 'fill: {{VALUE}};'
                                ],
                                'separator' => 'before'
                            ),
                            array(
                                'name' => 'icon_color_background',
                                'label' => esc_html__('Icon Background Hover', 'sntravel' ),
                                'type' => 'color',
                                'selectors' => [
                                    '{{WRAPPER}} .sntravel-anchor-list.layout-1 .sntravel-anchor:before' => 'background-color: {{VALUE}};'
                                ],
                            ),
                        ),
                    ),
                ),
            ),
),
),
basilico_get_class_widget_path()
);