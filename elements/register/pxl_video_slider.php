<?php
pxl_add_custom_widget(
    array(
        'name'       => 'pxl_video_slider',
        'title'      => esc_html__('PXL Video Slider', 'sntravel'),
        'icon'       => 'eicon-slider-video',
        'categories' => array('pxltheme-core'),
        'scripts'    => array(
            'swiper',
            'sntravel-swiper',
        ),
        'params' => array(
            'sections' => array(
                array(
                    'name' => 'layout_section',
                    'label' => esc_html__('Layout', 'sntravel' ),
                    'tab' => 'layout',
                    'controls' => array(
                        array(
                            'name' => 'layout',
                            'label' => esc_html__('Templates', 'sntravel' ),
                            'type' => 'layoutcontrol',
                            'default' => '1',
                            'options' => [
                                '1' => [
                                    'label' => esc_html__('Layout 1', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/pxl_video_slider-1.jpg'
                                ]
                            ],
                        )
                    ),
                ),
                array(
                    'name'     => 'clients_list',
                    'label'    => esc_html__('Clients', 'sntravel'),
                    'tab'      => 'content',
                    'controls' => array(
                        array(
                            'name'     => 'clients',
                            'label'    => esc_html__('Add Client', 'sntravel'),
                            'type'     => 'repeater',
                            'controls' => array(
                                array(
                                    'name'        => 'client_img',
                                    'label'       => esc_html__('Client Image', 'sntravel'),
                                    'type'        => 'media',
                                    'label_block' => true,
                                ),
                                array(
                                    'name'        => 'name',
                                    'label'       => esc_html__('Client Name', 'sntravel'),
                                    'type'        => 'text',
                                    'label_block' => true,
                                ),
                                array(
                                    'name'        => 'position',
                                    'label'       => esc_html__('Position', 'sntravel'),
                                    'type'        => 'text',
                                    'label_block' => true,
                                ),
                                array(
                                    'name'        => 'video_link',
                                    'label'       => esc_html__( 'Video Link', 'sntravel' ),
                                    'type'        => 'url',
                                    'placeholder' => esc_html__( 'https://your-link.com', 'sntravel' ),
                                    'default'     => [
                                        'url'         => '#',
                                        'is_external' => 'on'
                                    ],
                                ),
                                array(
                                    'name'        => 'video_text',
                                    'label'       => esc_html__('Position', 'sntravel'),
                                    'type'        => 'text',
                                    'label_block' => true,
                                    'default'     => 'What Video'
                                )
                            ),
                            'default' => [],
                            'title_field' => '{{{ name }}}',
                        ) 
                    )
                ),
                array(
                    'name' => 'carousel_setting',
                    'label' => esc_html__('Carousel Settings', 'sntravel' ),
                    'tab' => \Elementor\Controls_Manager::TAB_SETTINGS,
                    'controls' => array_merge(
                        basilico_carousel_column_settings(),
                        array( 
                            array(
                                'name' => 'slides_to_scroll',
                                'label' => esc_html__('Slides to scroll', 'sntravel' ),
                                'type' => \Elementor\Controls_Manager::SELECT,
                                'default' => '1',
                                'options' => [
                                    '1' => '1',
                                    '2' => '2',
                                    '3' => '3',
                                    '4' => '4',
                                    '5' => '5',
                                    '6' => '6',
                                ],
                            ),
                            array(
                                'name' => 'arrows',
                                'label' => esc_html__('Show Arrows', 'sntravel'),
                                'type' => \Elementor\Controls_Manager::SWITCHER,
                            ),
                            array(
                                'name' => 'dots',
                                'label' => esc_html__('Show Dots', 'sntravel'),
                                'type' => \Elementor\Controls_Manager::SWITCHER,
                            ),
                            array(
                                'name' => 'pause_on_hover',
                                'label' => esc_html__('Pause on Hover', 'sntravel'),
                                'type' => \Elementor\Controls_Manager::SWITCHER,
                            ),
                            array(
                                'name' => 'autoplay',
                                'label' => esc_html__('Autoplay', 'sntravel'),
                                'type' => \Elementor\Controls_Manager::SWITCHER,
                            ),
                            array(
                                'name' => 'autoplay_speed',
                                'label' => esc_html__('Autoplay Speed', 'sntravel'),
                                'type' => \Elementor\Controls_Manager::NUMBER,
                                'default' => 5000,
                                'condition' => [
                                    'autoplay' => 'true'
                                ]
                            ),
                            array(
                                'name' => 'infinite',
                                'label' => esc_html__('Infinite Loop', 'sntravel'),
                                'type' => \Elementor\Controls_Manager::SWITCHER,
                            ),
                            array(
                                'name' => 'speed',
                                'label' => esc_html__('Animation Speed', 'sntravel'),
                                'type' => \Elementor\Controls_Manager::NUMBER,
                                'default' => 400,
                            ),
                        )
                    ),
                ),
            )
        )
    ),
    basilico_get_class_widget_path()
);