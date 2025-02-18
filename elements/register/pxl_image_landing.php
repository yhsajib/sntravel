<?php
sntravel_add_custom_widget(
    array(
        'name' => 'sntravel_image_landing',
        'title' => esc_html__('PXL Image Landing', 'sntravel' ),
        'icon' => 'eicon-image',
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
                            'label'   => esc_html__( 'Layout', 'sntravel' ),
                            'type'    => 'layoutcontrol',
                            'default' => '1',
                            'options' => [
                                '1' => [
                                    'label' => esc_html__( 'Layout 1', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/sntravel_image_landing-1.jpg'
                                ],
                            ],
                        ),
                    )
                ),
                array(
                    'name' => 'content_section',
                    'label' => esc_html__('Content', 'sntravel' ),
                    'tab' => 'content',
                    'controls' => array(
                        array(
                            'name' => 'selected_image',
                            'label' => esc_html__('Image', 'sntravel' ),
                            'type' => 'media',
                        ),
                        array(
                            'name' => 'title_text',
                            'label' => esc_html__('Title Text', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::TEXT,
                            'default' => esc_html__('Homepage', 'sntravel'),
                        ),
                        array(
                            'name' => 'link_type',
                            'label' => esc_html__('Link Type', 'sntravel'),
                            'type' => \Elementor\Controls_Manager::SELECT,
                            'options'       => [
                                'url'   => esc_html__('URL', 'sntravel'),
                                'page'  => esc_html__('Existing Page', 'sntravel'),
                            ],
                            'default'       => 'url',
                        ),
                        array(
                            'name' => 'link',
                            'label' => esc_html__('Link', 'sntravel'),
                            'type' => \Elementor\Controls_Manager::URL,
                            'placeholder' => esc_html__('https://your-link.com', 'sntravel' ),
                            'condition'     => [
                                'link_type'     => 'url',
                            ],
                            'default' => [
                                'url' => '#',
                            ],
                        ),
                        array(
                            'name' => 'page_link',
                            'label' => esc_html__('Existing Page', 'sntravel'),
                            'type' => \Elementor\Controls_Manager::SELECT2,
                            'options'       => sntravel_get_all_page(),
                            'condition'     => [
                                'link_type'     => 'page',
                            ],
                            'multiple'      => false,
                            'label_block'   => true,
                        ),
                    ),
                ),
                array(
                    'name' => 'style_section',
                    'label' => esc_html__('Style', 'sntravel' ),
                    'tab' => 'content',
                    'controls' => array(
                        array(
                            'name' => 'border_color',
                            'label' => esc_html__('Border Color', 'sntravel' ),
                            'type' => 'color',
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-image-landing .image-wrap' => 'border-color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'border_hover_color',
                            'label' => esc_html__('Border Hover Color', 'sntravel' ),
                            'type' => 'color',
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-image-landing:hover .image-wrap' => 'border-color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'title_typography',
                            'label' => esc_html__('Title Typography', 'sntravel' ),
                            'type' => \Elementor\Group_Control_Typography::get_type(),
                            'control_type' => 'group',
                            'selector' => '{{WRAPPER}} .sntravel-image-landing .image-title',
                        ),
                        array(
                            'name' => 'title_color',
                            'label' => esc_html__('Title Color', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-image-landing .image-title' => 'color: {{VALUE}};',
                            ],
                        ),
                    ),
                ),
            ),
        ),
    ),
    basilico_get_class_widget_path()
);