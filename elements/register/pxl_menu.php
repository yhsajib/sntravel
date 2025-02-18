<?php

use Elementor\Controls_Manager;

$menus = get_terms( 'nav_menu', array( 'hide_empty' => false ) );
$custom_menus = array(
    '' => esc_html__('Default', 'sntravel')
);
if ( is_array( $menus ) && ! empty( $menus ) ) {
    foreach ( $menus as $single_menu ) {
        if ( is_object( $single_menu ) && isset( $single_menu->name, $single_menu->slug ) ) {
            $custom_menus[ $single_menu->slug ] = $single_menu->name;
        }
    }
} else {
    $custom_menus = '';
}

sntravel_add_custom_widget(
    array(
        'name' => 'sntravel_menu',
        'title' => esc_html__('Pxl Menu', 'sntravel'),
        'icon' => 'eicon-nav-menu',
        'categories' => array('sntraveltheme-core'),
        'scripts' => array(),
        'params' => array(
            'sections' => array(
                array(
                    'name' => 'source_section',
                    'label' => esc_html__('Source Settings', 'sntravel'),
                    'tab' => 'content',
                    'controls' => array(
                        array(
                            'name' => 'type',
                            'label' => esc_html__('Type', 'sntravel' ),
                            'type' => 'select',
                            'options' => [
                                '1' => esc_html__('Primary Menu', 'sntravel'),
                                '2' => esc_html__('Menu Inner', 'sntravel'),
                                '3' => esc_html__('Mobile Menu', 'sntravel'),
                                '4' => esc_html__('Sidebar Menu', 'sntravel'),
                                '5' => esc_html__('Menu Custom', 'sntravel'),
                            ],
                            'default' => '1',
                        ),
                        array(
                            'name' => 'el_title',
                            'label' => esc_html__('Sidebar Widget Title', 'sntravel'),
                            'type' => \Elementor\Controls_Manager::TEXTAREA,
                            'label_block' => true,
                            'condition' => [
                                'type' => '4',
                            ],
                        ),
                        array(
                            'name' => 'style',
                            'label' => esc_html__('Menu Style', 'sntravel' ),
                            'type' => 'select',
                            'options' => [
                                '1' => esc_html__('Underline Top', 'sntravel'),
                                '2' => esc_html__('Underline Bottom', 'sntravel'),
                                '3' => esc_html__('Vertical', 'sntravel'),
                                '4' => esc_html__('Slash Between', 'sntravel'),
                                '5' => esc_html__('Rounded', 'sntravel'),
                                '6' => esc_html__('Coffee Bean', 'sntravel'),
                                '7' => esc_html__('Creams', 'sntravel'),
                                '8' => esc_html__('Sushi', 'sntravel'),
                                '9' => esc_html__('Seafood', 'sntravel'),
                                '10' => esc_html__('Steak', 'sntravel'),
                                '11' => esc_html__('Chocolate', 'sntravel'),
                            ],
                            'default' => '1',
                            'condition' => [
                                'type' => ['1','2'],
                            ]
                        ),
                        array(
                            'name' => 'style_custom',
                            'label' => esc_html__('Menu Style', 'sntravel' ),
                            'type' => 'select',
                            'options' => [
                                'style-1' => esc_html__('Style 1', 'sntravel'),
                                'style-2' => esc_html__('Style 2', 'sntravel'),
                                'style-3' => esc_html__('Style 2', 'sntravel'),
                            ],
                            'default' => '1',
                            'condition' => [
                                'type' => ['5'],
                            ]
                        ),
                        array(
                            'name' => 'menu',
                            'label' => esc_html__('Select Menu', 'sntravel'),
                            'type' => 'select',
                            'options' => $custom_menus,
                        ),
                        array(
                            'name'         => 'align',
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
                                '{{WRAPPER}} .sntravel-nav-menu .sntravel-primary-menu' => 'justify-content: {{VALUE}};',
                                '{{WRAPPER}} .sntravel-nav-menu.style-3 .menu-item' => 'justify-content: {{VALUE}};',
                            ],
                            'condition' => [
                                'type' => ['1','3'],
                            ]
                        ),
                        array(
                            'name' => 'menu_flex_grow',
                            'label' => esc_html__( 'Flex Grow', 'sntravel' ),
                            'type' => 'choose',
                            'control_type' => 'responsive',
                            'options' => [
                                '0' => [
                                    'title' => esc_html__( 'Inherit', 'sntravel' ),
                                    'icon' => 'eicon-h-align-center',
                                ],
                                '1' => [
                                    'title' => esc_html__( 'Fill available space', 'sntravel' ),
                                    'icon' => 'eicon-h-align-right',
                                ],
                            ],
                            'selectors' => [
                                '{{WRAPPER}}' => 'flex-grow: {{VALUE}};',
                            ],
                        ),
                    ),
                ),
                array(
                    'name' => 'first_section',
                    'label' => esc_html__('Style First Level', 'sntravel'),
                    'tab' => 'content',
                    'condition' => [
                        'type' => ['1','3','5'],
                    ],
                    'controls' => array(
                        array(
                            'name' => 'color',
                            'label' => esc_html__('Color', 'sntravel' ),
                            'type' => 'color',
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-nav-menu .sntravel-primary-menu > li > a' => 'color: {{VALUE}};',
                                '{{WRAPPER}} .sntravel-nav-menu .sntravel-mobile-menu > li > a' => 'color: {{VALUE}};',
                                '{{WRAPPER}} .sntravel-nav-menu .sntravel-primary-menu > li .main-menu-toggle:before' => 'color: {{VALUE}};',
                                '{{WRAPPER}} .sntravel-nav-menu .sntravel-mobile-menu > li .main-menu-toggle:before' => 'color: {{VALUE}};',
                                '{{WRAPPER}} .sntravel-nav-menu.sntravel-nav-menu-main.style-8 .sntravel-primary-menu > li:not(:last-child):after' => 'background-color: {{VALUE}};',
                                '{{WRAPPER}} .sntravel-nav-menu .sntravel-custom-menu > li > a' => 'color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'color_hover',
                            'label' => esc_html__('Color Hover', 'sntravel' ),
                            'type' => 'color',
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-nav-menu .sntravel-primary-menu > li > a:hover'                      => 'color: {{VALUE}};',
                                '{{WRAPPER}} .sntravel-nav-menu .sntravel-primary-menu > li.current-menu-item > a'          => 'color: {{VALUE}};',
                                '{{WRAPPER}} .sntravel-nav-menu:not(.style-6) .sntravel-primary-menu > li.current-menu-ancestor > a'      => 'color: {{VALUE}};',
                                '{{WRAPPER}} .sntravel-nav-menu .sntravel-primary-menu > li:hover:before'                   => 'background-color: {{VALUE}};',
                                '{{WRAPPER}} .sntravel-nav-menu .sntravel-primary-menu > li.current-menu-item:before'       => 'background-color: {{VALUE}};',
                                '{{WRAPPER}} .sntravel-nav-menu .sntravel-primary-menu > li.current-menu-ancestor:before'   => 'background-color: {{VALUE}};',
                                '{{WRAPPER}} .sntravel-nav-menu .sntravel-mobile-menu > li > a:hover'                       => 'color: {{VALUE}};',
                                '{{WRAPPER}} .sntravel-nav-menu .sntravel-primary-menu > li:hover .main-menu-toggle:before' => 'color: {{VALUE}};',
                                '{{WRAPPER}} .sntravel-nav-menu .sntravel-mobile-menu > li:hover .main-menu-toggle:before'  => 'color: {{VALUE}};',
                                '{{WRAPPER}} .sntravel-nav-menu .sntravel-custom-menu > li > a:hover'                      => 'color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'underline_color',
                            'label' => esc_html__('Underline Color', 'sntravel' ),
                            'type' => 'color',
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-nav-menu .sntravel-primary-menu > li:before' => 'background-color: {{VALUE}};',
                                '{{WRAPPER}} .sntravel-nav-menu .sntravel-primary-menu > li:before, {{WRAPPER}} .sntravel-nav-menu.sntravel-nav-menu-main.style-2 .sntravel-primary-menu > li a:before,
                                {{WRAPPER}} .sntravel-nav-menu.sntravel-nav-menu-main.style-10 .sntravel-primary-menu > li > a:before,
                                {{WRAPPER}} .sntravel-nav-menu.sntravel-nav-menu-main.style-11 .sntravel-primary-menu > li > a:before,
                                {{WRAPPER}} .sntravel-nav-menu.sntravel-nav-menu-main.style-11 .sntravel-primary-menu > li.menu-item-has-children > a > span::before,
                                {{WRAPPER}} .sntravel-nav-menu.sntravel-nav-menu-main.style-11 .sntravel-primary-menu > li.menu-item-has-children > a > span::after' => 'background-color: {{VALUE}};',
                            ],
                            'condition' => [
                                'type!' => ['5'],
                            ],
                        ),
                        array(
                            'name' => 'underline_color_customs',
                            'label' => esc_html__('Underline Color', 'sntravel' ),
                            'type' => 'color',
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-nav-menu.sntravel-nav-menu-custom.style-3 .main-menu-toggle:before' => 'background-color: {{VALUE}};',
                            ],
                            'condition' => [
                                'style_custom' => ['style-3'],
                            ],
                        ),
                        array(
                            'name' => 'typography',
                            'label' => esc_html__('Typography', 'sntravel' ),
                            'type' => \Elementor\Group_Control_Typography::get_type(),
                            'control_type' => 'group',
                            'selector' => '{{WRAPPER}} .sntravel-nav-menu .sntravel-primary-menu > li > a, {{WRAPPER}} .sntravel-nav-menu .sntravel-mobile-menu > li > a,{{WRAPPER}} .sntravel-nav-menu .sntravel-custom-menu > li > a',
                        ),
                        array(
                            'name'  => 'show_arrow',
                            'label' => esc_html__('Show Arrow', 'sntravel'),
                            'type'  => 'switcher',
                            'return_value' => 'yes',
                            'default' => 'no',
                            'condition' => [
                                'type' => ['1'],
                                'type!' => ['5'],
                            ],
                        ),
                        array(
                            'name'  => 'show_underline',
                            'label' => esc_html__('Show Underline', 'sntravel'),
                            'type'  => 'switcher',
                            'return_value' => 'yes',
                            'default' => 'yes',
                            'condition' => [
                                'type' => ['1'],
                                'type!' => ['5'],
                            ],
                        ),
                        array(
                            'name' => 'item_space',
                            'label' => esc_html__('Item Space', 'sntravel' ),
                            'type' => 'dimensions',
                            'control_type' => 'responsive',
                            'size_units' => [ 'px', 'em', '%', 'rem' ],
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-primary-menu > li' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                                '{{WRAPPER}} .sntravel-mobile-menu > li' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                                '{{WRAPPER}} .sntravel-nav-menu.style-4 .sntravel-primary-menu > li:not(:last-child):after' => 'right: calc(({{LEFT}}{{UNIT}} + {{RIGHT}}{{UNIT}}) / 2 * -1);',
                                '{{WRAPPER}} .sntravel-custom-menu > li' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                        ),
                    ),
                ),
                array(
                    'name' => 'sub_section',
                    'label' => esc_html__('Style Sub Level', 'sntravel'),
                    'tab' => 'content',
                    'condition' => [
                        'type' => ['1','3','5'],
                    ],
                    'controls' => array(
                        array(
                            'name' => 'submenu_space_top',
                            'label' => esc_html__('Space Top', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::SLIDER,
                            'control_type' => 'responsive',
                            'size_units' => [ 'px' , 'em' ],
                            'range' => [
                                'px' => [
                                    'min' => 0,
                                    'max' => 300,
                                ],
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-primary-menu > .menu-item > .sub-menu' => 'top: calc(100% + 20px + {{SIZE}}{{UNIT}});',
                                '{{WRAPPER}} .sntravel-primary-menu > li.active > .sub-menu, {{WRAPPER}} .sntravel-primary-menu > li:hover > .sub-menu' => 'top: calc(100% + {{SIZE}}{{UNIT}});'
                            ],
                            'condition' => [
                                'type!' => ['5'],
                            ],
                        ),
                        array(
                            'name' => 'sub_color',
                            'label' => esc_html__('Text Color', 'sntravel' ),
                            'type' => 'color',
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-nav-menu .sntravel-primary-menu li .sub-menu a' => 'color: {{VALUE}};',
                                '{{WRAPPER}} .sntravel-nav-menu .sntravel-mobile-menu li .sub-menu a' => 'color: {{VALUE}};',
                                '{{WRAPPER}} .sntravel-primary-menu .sub-menu li.menu-item-has-children:after' => 'color: {{VALUE}};',
                                '{{WRAPPER}} .sntravel-nav-menu .sntravel-custom-menu li .sub-menu a' => 'color: {{VALUE}};',
                                '{{WRAPPER}} .sntravel-nav-menu.sntravel-nav-menu-main.style-9 .sntravel-primary-menu > li .sub-menu > li > a span::after' => 'background-color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'sub_color_hover',
                            'label' => esc_html__('Color Hover/Active', 'sntravel' ),
                            'type' => 'color',
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-nav-menu .sntravel-mobile-menu .sub-menu .menu-item:hover > a,
                                 {{WRAPPER}} .sntravel-nav-menu .sntravel-mobile-menu .sub-menu .current-menu-item > a,
                                 {{WRAPPER}} .sntravel-nav-menu .sntravel-custom-menu .sub-menu .menu-item:hover > a,
                                 {{WRAPPER}} .sntravel-nav-menu .sntravel-mobile-menu .sub-menu .current-menu-ancestor > a' => 'color: {{VALUE}};',
                                 '{{WRAPPER}} .sntravel-nav-menu .sntravel-primary-menu li .sub-menu a:hover, {{WRAPPER}} .sntravel-nav-menu .sntravel-primary-menu .sub-menu > li.current-menu-item a' => 'color: {{VALUE}};',
                                 '{{WRAPPER}} .sntravel-nav-menu .sntravel-mobile-menu li .sub-menu a:hover' => 'color: {{VALUE}};',
                                 '{{WRAPPER}} .sntravel-nav-menu .sntravel-custom-menu .sub-menu .menu-item:hover > a::before' => 'background-color: {{VALUE}};',
                                 '{{WRAPPER}} .sntravel-nav-menu.sntravel-nav-menu-main .sntravel-primary-menu > li .sub-menu > li > a span::after' => 'background-color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'sub_typography',
                            'label' => esc_html__('Typography', 'sntravel' ),
                            'type' => \Elementor\Group_Control_Typography::get_type(),
                            'control_type' => 'group',
                            'selector' => '{{WRAPPER}} .sntravel-nav-menu .sntravel-primary-menu li .sub-menu a, {{WRAPPER}} .sntravel-nav-menu .sntravel-mobile-menu li .sub-menu a, {{WRAPPER}} .sntravel-nav-menu .sntravel-custom-menu li .sub-menu a',
                        ),
                        array(
                            'name' => 'sub_background',
                            'label' => esc_html__('Background Color', 'sntravel' ),
                            'type' => 'color',
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-nav-menu .sntravel-primary-menu .sub-menu' => 'background-color: {{VALUE}};',
                            ],
                            'condition' => [
                                'type!' => ['5'],
                            ],
                        ),
                        array(
                            'name' => 'divider_type',
                            'label' => esc_html__( 'Divider Type', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::SELECT,
                            'options' => [
                                'none' => esc_html__( 'None', 'sntravel' ),
                                'solid' => esc_html__( 'Solid', 'sntravel' ),
                                'double' => esc_html__( 'Double', 'sntravel' ),
                                'dotted' => esc_html__( 'Dotted', 'sntravel' ),
                                'dashed' => esc_html__( 'Dashed', 'sntravel' ),
                                'groove' => esc_html__( 'Groove', 'sntravel' ),
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-nav-menu .sntravel-primary-menu .sub-menu > li a' => 'border-bottom-style: {{VALUE}};',
                            ],
                            'condition' => [
                                'type!' => ['5'],
                            ],
                            'default' => 'solid',
                        ),
                        array(
                            'name' => 'divider_color',
                            'label' => esc_html__('Divider Color', 'sntravel' ),
                            'type' => 'color',
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-nav-menu .sntravel-primary-menu .sub-menu > li a' => 'border-bottom-color: {{VALUE}};',
                            ],
                            'condition' => [
                                'type!' => ['5'],
                            ],
                        ),
                        array(
                            'name'         => 'box_shadow',
                            'label'        => esc_html__( 'Box Shadow', 'sntravel' ),
                            'type'         => \Elementor\Group_Control_Box_Shadow::get_type(),
                            'control_type' => 'group',
                            'exclude' => [
                                'box_shadow_position',
                            ],
                            'selector' => '{{WRAPPER}} .sntravel-nav-menu .sntravel-primary-menu .sub-menu',
                            'condition' => [
                                'type!' => ['5'],
                            ],
                        ),
                        array(
                            'name' => 'border_radius',
                            'label' => esc_html__('Border Radius', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::DIMENSIONS,
                            'size_units' => [ 'px' ],
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-nav-menu .sntravel-primary-menu .sub-menu' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            ],
                            'condition' => [
                                'type!' => ['5'],
                            ],
                        ),
                    ),
                ),

                array(
                    'name' => 'nav_section',
                    'label' => esc_html__('Style', 'sntravel'),
                    'tab' => 'content',
                    'condition' => [
                        'type' => ['2'],
                    ],
                    'controls' => array(
                        array(
                            'name' => 'nav_color',
                            'label' => esc_html__('Color', 'sntravel' ),
                            'type' => 'color',
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-nav-menu .sntravel-nav-inner li' => 'color: {{VALUE}};',
                                '{{WRAPPER}} .sntravel-nav-menu .sntravel-nav-inner a' => 'color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'nav_color_hover',
                            'label' => esc_html__('Color Hover', 'sntravel' ),
                            'type' => 'color',
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-nav-menu .sntravel-nav-inner a:hover' => 'color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name'  => 'icon_size',
                            'label' => esc_html__( 'Icon Size(px)', 'sntravel' ),
                            'type'  => 'slider',
                            'range' => [
                                'px' => [
                                    'min' => 5,
                                    'max' => 100,
                                ],
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-nav-menu .sntravel-nav-inner a .link-icon' => 'font-size: {{SIZE}}{{UNIT}};',
                            ],
                        ),
                        array(
                            'name' => 'icon_color',
                            'label' => esc_html__('Icon Color', 'sntravel' ),
                            'type' => 'color',
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-nav-menu .sntravel-nav-inner a .link-icon' => 'color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name'  => 'border_hover',
                            'label' => esc_html__('Border Hover', 'sntravel'),
                            'type'  => 'switcher',
                            'return_value' => 'yes',
                            'default' => 'yes',
                        ),
                        array(
                            'name' => 'nav_typography',
                            'label' => esc_html__('Typography', 'sntravel' ),
                            'type' => \Elementor\Group_Control_Typography::get_type(),
                            'control_type' => 'group',
                            'selector' => '{{WRAPPER}} .sntravel-nav-menu .sntravel-nav-inner a',
                        ),
                        array(
                            'name' => 'nav_item_space',
                            'label' => esc_html__('Item Space', 'sntravel' ),
                            'type' => 'slider',
                            'control_type' => 'responsive',
                            'size_units' => [ 'px' ],
                            'range' => [
                                'px' => [
                                    'min' => 0,
                                    'max' => 300,
                                ],
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-nav-menu .sntravel-nav-inner li + li' => 'margin-top: {{SIZE}}{{UNIT}};',
                            ],
                        ),
                    ),
                ),
            ),
        ),
    ),
    basilico_get_class_widget_path()
);