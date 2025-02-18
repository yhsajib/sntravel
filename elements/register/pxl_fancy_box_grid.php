<?php
use Elementor\Icons_Manager;
Icons_Manager::enqueue_shim();
sntravel_add_custom_widget(
    array(
        'name' => 'sntravel_fancy_box_grid',
        'title' => esc_html__('PXL Fancy Box Grid', 'sntravel'),
        'icon' => 'eicon-info-box',
        'categories' => array('sntraveltheme-core'),
        'scripts' => [
            'imagesloaded',
            'isotope',
            'sntravel-post-grid',
        ],
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
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/sntravel_fancy_box_grid-1.jpg'
                                ],
                            ],
                            'prefix_class' => 'sntravel-fancy-box-grid-layout-',
                        ),
                    ),
                ),
                array(
                    'name' => 'section_list',
                    'label' => esc_html__('Content', 'sntravel'),
                    'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                    'controls' => array(
                        array(
                            'name' => 'content_list',
                            'label' => esc_html__('Item', 'sntravel'),
                            'type' => \Elementor\Controls_Manager::REPEATER,
                            'controls' => array(
                                array(
                                    'name' => 'image',
                                    'label' => esc_html__('Image', 'sntravel' ),
                                    'type' => \Elementor\Controls_Manager::MEDIA,
                                ),
                                array(
                                    'name' => 'title',
                                    'label' => esc_html__('Title', 'sntravel'),
                                    'type' => \Elementor\Controls_Manager::TEXT,
                                    'label_block' => true,
                                ),
                                array(
                                    'name' => 'categories',
                                    'label' => esc_html__('Categories', 'sntravel' ),
                                    'type' => \Elementor\Controls_Manager::TEXTAREA,
                                    'rows' => 4,
                                ),
                                array(
                                    'name' => 'link',
                                    'label' => esc_html__('Link', 'sntravel'),
                                    'type' => \Elementor\Controls_Manager::URL,
                                    'label_block' => true,
                                ),
                                array(
                                    'name' => 'background_color',
                                    'label' => esc_html__('Background Color', 'sntravel' ),
                                    'type' => \Elementor\Controls_Manager::COLOR,
                                    'selectors' => [
                                        '{{WRAPPER}} .sntravel-fancy-box-grid {{CURRENT_ITEM}}' => 'background-color: {{VALUE}};',
                                    ],
                                ),
                            ),
                            'title_field' => '{{{ title }}}',
                        ),
                    ),
                ),
                array(
                    'name' => 'parallax_section',
                    'label' => esc_html__('Parallax Settings', 'sntravel' ),
                    'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                    'controls' => array(
                        array(
                            'name' => 'sntravel_parallax',
                            'label' => esc_html__( 'Parallax Type', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::SELECT,
                            'options' => [
                                ''        => esc_html__( 'None', 'sntravel' ),
                                'y'       => esc_html__( 'Transform Y', 'sntravel' ),
                                'x'       => esc_html__( 'Transform X', 'sntravel' ),
                                'z'       => esc_html__( 'Transform Z', 'sntravel' ),
                                'rotateX' => esc_html__( 'RotateX', 'sntravel' ),
                                'rotateY' => esc_html__( 'RotateY', 'sntravel' ),
                                'rotateZ' => esc_html__( 'RotateZ', 'sntravel' ),
                                'scaleX'  => esc_html__( 'ScaleX', 'sntravel' ),
                                'scaleY'  => esc_html__( 'ScaleY', 'sntravel' ),
                                'scaleZ'  => esc_html__( 'ScaleZ', 'sntravel' ),
                                'scale'   => esc_html__( 'Scale', 'sntravel' ),
                            ],
                        ),
                        array(
                            'name' => 'parallax_value',
                            'label' => esc_html__('Value', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::TEXT,
                            'default' => '',
                            'condition' => [ 'sntravel_parallax!' => '']  
                        ),
                        array(
                            'name' => 'sntravel_parallax_screen',
                            'label'   => esc_html__( 'Parallax In Screen', 'sntravel' ),
                            'type'    => \Elementor\Controls_Manager::SELECT,
                            'control_type' => 'responsive',
                            'default' => '',
                            'options' => array(
                                '' => esc_html__( 'Default', 'sntravel' ),
                                'no'   => esc_html__( 'No', 'sntravel' ),
                            ),
                            'prefix_class' => 'sntravel-parallax%s-',
                            'condition' => [ 'sntravel_parallax!' => '']  
                        )
                    ),
                ),
                array(
                    'name' => 'grid_section',
                    'label' => esc_html__('Grid', 'sntravel' ),
                    'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                    'controls' => array_merge(
                        basilico_grid_column_settings(),
                        array(
                            array(
                                'name' => 'img_size',
                                'label' => esc_html__('Image Size', 'sntravel' ),
                                'type' => \Elementor\Controls_Manager::TEXT,
                                'description' =>  esc_html__('Enter image size (Example: "thumbnail", "medium", "large", "full" or other sizes defined by theme). Alternatively enter size in pixels (Default: 370x300 (Width x Height)).', 'sntravel')
                            )
                        ),
                        basilico_elementor_animation_opts([
                            'name'   => 'item',
                            'label' => esc_html__('Item', 'sntravel'),
                        ])
                    ),
                ),
                array(
                    'name' => 'style_section',
                    'label' => esc_html__('Style', 'sntravel' ),
                    'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                    'controls' => array(
                        array(
                            'name' => 'title_typography',
                            'label' => esc_html__('Title Typography', 'sntravel' ),
                            'type' => \Elementor\Group_Control_Typography::get_type(),
                            'control_type' => 'group',
                            'selector' => '{{WRAPPER}} .sntravel-fancy-box-grid .item-inner .item-title',
                        ),
                        array(
                            'name' => 'color_title',
                            'label' => esc_html__('Color Title', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-fancy-box-grid .item-inner .item-title' => 'color: {{VALUE}};',
                                '{{WRAPPER}} .sntravel-fancy-box-grid .item-inner .item-title a::after' => 'background-color: {{VALUE}};',
                            ],
                        ),
                        array(
                            'name' => 'categories_typography',
                            'label' => esc_html__('Categories Typography', 'sntravel' ),
                            'type' => \Elementor\Group_Control_Typography::get_type(),
                            'control_type' => 'group',
                            'selector' => '{{WRAPPER}} .sntravel-fancy-box-grid .item-inner .item-categories',
                        ),
                        array(
                            'name' => 'color_categories',
                            'label' => esc_html__('Color Categories', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::COLOR,
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-fancy-box-grid .item-inner .item-categories' => 'color: {{VALUE}};',
                            ],
                        ),
                    ),
                ),
            ),
        ),
    ),
    basilico_get_class_widget_path()
);