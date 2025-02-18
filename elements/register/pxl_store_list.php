<?php
sntravel_add_custom_widget(
    array(
        'name' => 'sntravel_store_list',
        'title' => esc_html__('PXL Store List', 'sntravel' ),
        'icon' => 'eicon-bullet-list',
        'categories' => array('sntraveltheme-core'),
        'scripts'    => array('sntravel-storelist'),
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
                                '2' => [
                                    'label' => esc_html__( 'Layout 2', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/sntravel_fancy_box-1.jpg'
                                ],
                            ],
                        )
                    )
                ),
                array(
                    'name' => 'tab_content',
                    'label' => esc_html__( 'Content', 'sntravel' ),
                    'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                    'controls' => array(
                        array(
                            'name' => 'list',
                            'label' => esc_html__('Items', 'sntravel'),
                            'type' => \Elementor\Controls_Manager::REPEATER,
                            'controls' => array(
                                array(
                                    'name' => 'store_icon',
                                    'label' => esc_html__('Store Icon', 'sntravel' ),
                                    'type' => \Elementor\Controls_Manager::ICONS,
                                    'fa4compatibility' => 'icon',
                                    'default' => [
                                        'value' => 'fas fa-store',
                                        'library' => 'fa-solid',
                                    ],
                                ),
                                array(
                                    'name' => 'title',
                                    'label' => esc_html__('Title', 'sntravel'),
                                    'type' => \Elementor\Controls_Manager::TEXT,
                                    'label_block' => true,
                                ),
                                array(
                                    'name' => 'desc',
                                    'label' => esc_html__('Description', 'sntravel'),
                                    'type' => \Elementor\Controls_Manager::TEXT,
                                    'label_block' => true,
                                ),
                                array(
                                    'name' => 'link',
                                    'label' => esc_html__('Button Link', 'sntravel'),
                                    'type' => \Elementor\Controls_Manager::URL,
                                    'label_block' => true,
                                ),
                            ),
                            'title_field' => '{{{ title }}}',
                        ),
                    ),
                ),
                array(
                    'name' => 'tab_style',
                    'label' => esc_html__('Style', 'sntravel' ),
                    'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                    'controls' => array(
                        array(
                            'name' => 'button_style',
                            'label' => esc_html__('Button Styles', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::SELECT,
                            'default' => 'btn-additional-8',
                            'options' => [
                                'btn-default' => esc_html__('Default', 'sntravel' ),
                                'btn-white' => esc_html__('White', 'sntravel' ),
                                'btn-outline' => esc_html__('Out Line', 'sntravel' ),
                                'btn-outline-secondary' => esc_html__('Out Line Secondary', 'sntravel' ),
                                'btn-additional-1' => esc_html__('Additional Button 01', 'sntravel' ),
                                'btn-additional-2' => esc_html__('Additional Button 02', 'sntravel' ),
                                'btn-additional-3' => esc_html__('Additional Button 03', 'sntravel' ),
                                'btn-additional-4' => esc_html__('Additional Button 04', 'sntravel' ),
                                'btn-additional-5' => esc_html__('Additional Button 05', 'sntravel' ),
                                'btn-additional-6' => esc_html__('Additional Button 06', 'sntravel' ),
                                'btn-additional-7' => esc_html__('Additional Button 07', 'sntravel' ),
                                'btn-additional-8' => esc_html__('Additional Button 08', 'sntravel' ),
                                'btn-additional-9' => esc_html__('Additional Button 09', 'sntravel' ),
                                'btn-additional-10' => esc_html__('Additional Button 10', 'sntravel' ),
                            ],
                        ),
                    ),
                ),
            ),
        ),
    ),
    basilico_get_class_widget_path()
);