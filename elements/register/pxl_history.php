<?php
pxl_add_custom_widget(
    array(
        'name'       => 'pxl_history',
        'title'      => esc_html__('PXL History', 'sntravel'),
        'icon'       => 'eicon-slider-push',
        'categories' => array('pxltheme-core'),
        'scripts'    => array(),
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
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/pxl_history-1.jpg'
                                ],
                                '2' => [
                                    'label' => esc_html__('Layout 2', 'sntravel' ),
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/pxl_history-2.jpg'
                                ]
                            ],
                            'prefix_class' => 'pxl-history-layout-'
                        )
                    ),
                ),
                array(
                    'name'     => 'history_list',
                    'label'    => esc_html__('History List', 'sntravel'),
                    'tab'      => 'content',
                    'controls' => array(
                        array(
                            'name'     => 'history_items',
                            'label'    => esc_html__('Add Item', 'sntravel'),
                            'type'     => 'repeater',
                            'controls' => array(
                                array(
                                    'name'     => 'title',
                                    'label'    => esc_html__('Title', 'sntravel'),
                                    'type'     => 'text',
                                    'default'  => esc_html__('first formation.', 'sntravel'),
                                ),
                                array(
                                    'name'     => 'description',
                                    'label'    => esc_html__('Description', 'sntravel'),
                                    'type'     => 'textarea',
                                    'rows' => 3,
                                    'default'  => esc_html__('Aliquam erat metus, rutrum ut sagittis eu, viverra volutpat arcu. Mauris fermentum sodales nibh, sed vulputate lacus congue sit amet. Nam at lobortis mi. Nullam sit amet feugiat libero.', 'sntravel'),
                                ),
                                array(
                                    'name'        => 'year',
                                    'label'       => esc_html__('History Year', 'sntravel'),
                                    'type'        => 'text',
                                    'label_block' => true,
                                ),
                                array(
                                    'name'        => 'history_img',
                                    'label'       => esc_html__('History Image', 'sntravel'),
                                    'type'        => 'media',
                                    'label_block' => true,
                                ),
                                array(
                                    'name'        => 'image_link',
                                    'label'       => esc_html__( 'History Link', 'sntravel' ),
                                    'type'        => 'url',
                                    'placeholder' => esc_html__( 'https://your-link.com', 'sntravel' ),
                                    'default'     => [
                                        'url'         => '#',
                                        'is_external' => 'on'
                                    ],
                                ),
                            ),
                            'default' => [],
                            'title_field' => '{{{ year }}}',
                        ),
                        array(
                            'name' => 'icon_background',
                            'label' => esc_html__('Diamond Icon Background', 'sntravel' ),
                            'type' => 'color',
                            'selectors' => [
                                '{{WRAPPER}} .pxl-history .diamond-icon:before' => 'border-color: {{VALUE}};',
                                '{{WRAPPER}} .pxl-history .diamond-icon:after' => 'background-color: {{VALUE}};'
                            ],
                        ),
                        array(
                            'name' => 'icon_space',
                            'label' => esc_html__('Diamond Icon Space Color', 'sntravel' ),
                            'type' => 'color',
                            'selectors' => [
                                '{{WRAPPER}} .pxl-history .diamond-icon:before' => 'background-color: {{VALUE}};',
                            ],
                        ),
                    ),
                ),
            )
        )
    ),
    basilico_get_class_widget_path()
);