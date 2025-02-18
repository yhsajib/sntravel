<?php
$templates = basilico_get_templates_option('default', []) ;
pxl_add_custom_widget(
    array(
        'name' => 'pxl_tabs_carousel',
        'title' => esc_html__('PXL Tabs Carousel', 'sntravel'),
        'icon' => 'eicon-slider-push',
        'categories' => array('pxltheme-core'),
        'scripts' => [
            'pxl-tabs-carousel',
        ],
        'params' => array(
            'sections' => array(
                array(
                    'name' => 'section_list',
                    'label' => esc_html__('Content', 'sntravel'),
                    'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                    'controls' => array(
                        array(
                            'name' => 'link_to_tabs',
                            'label' => esc_html__('ID Link To Tabs', 'sntravel'),
                            'type' => \Elementor\Controls_Manager::TEXT,
                        ),
                        array(
                            'name' => 'tabs_list_carousel',
                            'label' => esc_html__('Tabs List', 'sntravel'),
                            'type' => \Elementor\Controls_Manager::REPEATER,
                            'default' => [],
                            'controls' => array(
                                array(
                                    'name' => 'content_type',
                                    'label' => esc_html__('Content Type', 'sntravel'),
                                    'type' => Elementor\Controls_Manager::SELECT,
                                    'options' => [
                                        'df' => esc_html__( 'Default', 'sntravel' ),
                                        'template' => esc_html__( 'From Template Builder', 'sntravel' )
                                    ],
                                    'default' => 'df'
                                ),
                                array(
                                    'name' => 'content_template',
                                    'label' => esc_html__('Select Templates', 'sntravel'),
                                    'description' => sprintf(esc_html__('Please create your layout before choosing. %sClick Here%s','sntravel'),'<a href="' . esc_url( admin_url( 'edit.php?post_type=pxl-template' ) ) . '">','</a>'),
                                    'type' => Elementor\Controls_Manager::SELECT,
                                    'options' => $templates,
                                    'default' => 'df',
                                    'condition' => ['content_type' => 'template'] 
                                ),
                                array(
                                    'name' => 'tab_content_carousel',
                                    'label' => esc_html__('Enter Content', 'sntravel'),
                                    'type' => \Elementor\Controls_Manager::WYSIWYG,
                                    'default' => '',
                                    'condition' => ['content_type' => 'df'] 
                                ),
                            ),
                        ),
                    ),
                ),
                array(
                    'name' => 'carousel_setting',
                    'label' => esc_html__('Carousel Settings', 'sntravel' ),
                    'tab' => \Elementor\Controls_Manager::TAB_SETTINGS,
                    'controls' => array_merge(
                        array(
                            array(
                                'name' => 'fade',
                                'label' => esc_html__('Fade Effect', 'sntravel'),
                                'type' => \Elementor\Controls_Manager::SWITCHER,
                                'default' => 'false',
                            ),
                            array(
                                'name' => 'swipe',
                                'label' => esc_html__('Allow Swipe', 'sntravel'),
                                'type' => \Elementor\Controls_Manager::SWITCHER,
                                'default' => 'true',
                            ),
                            array(
                                'name' => 'autoplay',
                                'label' => esc_html__('Autoplay', 'sntravel'),
                                'type' => \Elementor\Controls_Manager::SWITCHER,
                                'default' => 'false',
                            ),
                            array(
                                'name' => 'infinite',
                                'label' => esc_html__('Infinite', 'sntravel'),
                                'type' => \Elementor\Controls_Manager::SWITCHER,
                                'default' => 'false',
                            )
                        ),
                    ),
                ),
                array(
                    'name' => 'arrow_settings',
                    'label' => esc_html__('Arrow Settings', 'sntravel' ),
                    'tab' => \Elementor\Controls_Manager::TAB_SETTINGS,
                    'controls' => array_merge(
                        basilico_arrow_settings(),
                    ),
                ),
                array(
                    'name' => 'dots_settings',
                    'label' => esc_html__('Dot Settings', 'sntravel' ),
                    'tab' => \Elementor\Controls_Manager::TAB_SETTINGS,
                    'controls' => array_merge(
                        basilico_dots_settings(),
                    ),
                ),
            ),
        ),
    ),
    basilico_get_class_widget_path()
);