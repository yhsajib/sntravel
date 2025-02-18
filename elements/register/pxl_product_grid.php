<?php
pxl_add_custom_widget(
    array(
        'name' => 'pxl_product_grid',
        'title' => esc_html__('PXL Product Grid', 'sntravel' ),
        'icon' => 'eicon-products',
        'categories' => array('pxltheme-core'),
        'scripts' => array(
            'imagesloaded',
            'isotope',
            'sntravel-post-grid',
        ),
        'params' => array(
            'sections' => array(
                array(
                    'name' => 'source_section',
                    'label' => esc_html__('Source', 'sntravel' ),
                    'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                    'controls' => array(
                        array(
                            'name'     => 'product_layout',
                            'label'    => esc_html__('Product Layout', 'sntravel'),
                            'type'     => 'select',
                            'options'  => [
                                'layout-1'       => esc_html__('Layout 1', 'sntravel'),
                                'layout-2'       => esc_html__('Layout 2', 'sntravel'),
                                'layout-3'       => esc_html__('Layout 3', 'sntravel'),
                                'layout-4'       => esc_html__('Layout 4', 'sntravel'),
                                'layout-5'       => esc_html__('Layout 5', 'sntravel'),
                                'layout-6'       => esc_html__('Layout 6', 'sntravel'),
                                'layout-7'       => esc_html__('Layout 7', 'sntravel'),
                                'layout-8'       => esc_html__('Layout 8', 'sntravel'),
                                'layout-9'       => esc_html__('Layout 9', 'sntravel'),
                                'layout-10'      => esc_html__('Layout 10', 'sntravel'),
                                'layout-11'      => esc_html__('Layout 11', 'sntravel'),
                                'layout-12'       => esc_html__('Layout 12', 'sntravel'),
                            ],
                            'default'  => 'layout-1',
                        ),
                        array(
                            'name'    => 'query_type',
                            'label'   => esc_html__( 'Select Query Type', 'sntravel' ),
                            'type'    => 'select',
                            'default' => 'recent_product',
                            'options' => [
                                'recent_product'   => esc_html__( 'Recent Products', 'sntravel' ),
                                'best_selling'     => esc_html__( 'Best Selling', 'sntravel' ),
                                'featured_product' => esc_html__( 'Featured Products', 'sntravel' ),
                                'top_rate'         => esc_html__( 'High Rate', 'sntravel' ),
                                'on_sale'          => esc_html__( 'On Sale', 'sntravel' ),
                                'recent_review'    => esc_html__( 'Recent Review', 'sntravel' ),
                                'deals'            => esc_html__( 'Product Deals', 'sntravel' ),
                                'separate'         => esc_html__( 'Product separate', 'sntravel' ),
                            ]
                        ),
                        array(
                            'name'     => 'taxonomies',
                            'label'    => esc_html__( 'Select Term of Product', 'sntravel' ),
                            'type'     => 'select2',
                            'multiple' => true,
                            'options'  => pxl_get_product_grid_term_options()
                        ),
                        array(
                            'name'     => 'product_ids',
                            'label'    => esc_html__( 'Products id (123,124,135...)', 'sntravel' ),
                            'type'     => 'text',
                            'default'  => '',
                            'condition' => array( 'query_type' => 'separate' )
                        ),
                        array(
                            'name'     => 'post_per_page',
                            'label'    => esc_html__( 'Post per page', 'sntravel' ),
                            'type'     => 'text',
                            'default'  => '6'
                        )
                    ),
                ),
                array(
                    'name' => 'grid_section',
                    'label' => esc_html__('Grid Settings', 'sntravel' ),
                    'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                    'controls' => array_merge(
                        basilico_grid_column_settings(true),
                        array(
                            array(
                                'name' => 'item_padding',
                                'label' => esc_html__('Item Padding', 'sntravel' ),
                                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                                'size_units' => [ 'px' ],
                                'default' => [],
                                'selectors' => [
                                    '{{WRAPPER}} .pxl-grid-inner' => 'margin-top: -{{TOP}}{{UNIT}}; margin-right: -{{RIGHT}}{{UNIT}}; margin-bottom: -{{BOTTOM}}{{UNIT}}; margin-left: -{{LEFT}}{{UNIT}};',
                                    '{{WRAPPER}} .pxl-grid-inner .grid-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                                ],
                                'control_type' => 'responsive',
                            ),
                            array(
                                'name'    => 'pagination_type',
                                'label'   => esc_html__('Pagination Type', 'sntravel' ),
                                'type'    => \Elementor\Controls_Manager::SELECT,
                                'default' => 'false',
                                'options' => [
                                    'pagination' => esc_html__('Pagination', 'sntravel' ),
                                    'false'      => esc_html__('Disable', 'sntravel' ),
                                ],
                            ),
                            array(
                                'name'      => 'loadmore_text',
                                'label'     => esc_html__( 'Load More text', 'sntravel' ),
                                'type'      => \Elementor\Controls_Manager::TEXT,
                                'default'   => esc_html__('Load More','sntravel'),
                                'condition' => [
                                    'pagination_type' => 'loadmore'
                                ]
                            ),
                            array(
                                'name'         => 'pagination_alignment',
                                'label'        => esc_html__( 'Pagination Alignment', 'sntravel' ),
                                'type'         => 'choose',
                                'control_type' => 'responsive',
                                'options' => [
                                    'start' => [
                                        'title' => esc_html__( 'Start', 'sntravel' ),
                                        'icon'  => 'eicon-text-align-left',
                                    ],
                                    'center' => [
                                        'title' => esc_html__( 'Center', 'sntravel' ),
                                        'icon'  => 'eicon-text-align-center',
                                    ],
                                    'end' => [
                                        'title' => esc_html__( 'End', 'sntravel' ),
                                        'icon'  => 'eicon-text-align-right',
                                    ]
                                ],
                                'selectors' => [
                                    '{{WRAPPER}} .pxl-grid-pagination, {{WRAPPER}} .pxl-load-more' => 'justify-content: {{VALUE}};'
                                ]
                            ),
                        )
                    ),
                ),
            ),
),
),
basilico_get_class_widget_path()
);