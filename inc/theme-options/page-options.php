<?php

function basilico_product_style_layout_4() {
    $product_layout = sntravel()->get_theme_opt('product_layout', 'layout-1');
    if ($product_layout == 'layout-4')
        return array(
            'id'          => 'product_layout_style',
            'type'        => 'image_select',
            'title'       => esc_html__( 'Image Style', 'sntravel' ),
            'description' => esc_html__('Use for Shop Layout 4 Shop Page', 'sntravel'),
            'options'      => array(
                'style-df' => array(
                    'alt' => 'Style 1',
                    'img' => get_template_directory_uri() . '/assets/images/pizza-layout/pizza-df.jpg'
                ),
                'style-2' => array(
                    'alt' => 'Style 2',
                    'img' => get_template_directory_uri() . '/assets/images/pizza-layout/pizza-style-2.jpg'
                ),
            ),
            'default' => 'style-df'
        );
    return array();
}

add_action( 'pxl_post_metabox_register', 'basilico_page_options_register' );
function basilico_page_options_register( $metabox ) {
	$panels = [
		'post' => [
			'opt_name'            => 'post_option',
			'display_name'        => esc_html__( 'Post Settings', 'sntravel' ),
			'show_options_object' => false,
			'context'  => 'advanced',
			'priority' => 'default',
			'sections'  => [
				'post_settings' => [
					'title'  => esc_html__( 'Post Settings', 'sntravel' ),
					'icon'   => 'el el-refresh',
					'fields' => array_merge(
                        array(
                            array(
                                'id'       => 'single_post_layout',
                                'type'     => 'select',
                                'title'    => esc_html__('Select Post Layout', 'sntravel'),
                                'options'  => array(
                                    '-1'  => esc_html__('Inherit', 'sntravel'),
                                    'layout-1' => esc_html__('Layout 1', 'sntravel'),
                                    'layout-2' => esc_html__('Layout 2', 'sntravel'),
                                    'layout-3' => esc_html__('Layout 3', 'sntravel'),
                                    'layout-4' => esc_html__('Layout 4', 'sntravel'),
                                    'layout-5' => esc_html__('Layout 5', 'sntravel'),
                                    'layout-6' => esc_html__('Layout 6', 'sntravel'),
                                    'layout-7' => esc_html__('Layout 7', 'sntravel'),
                                    'layout-8' => esc_html__('Layout 8', 'sntravel'),
                                    'layout-9' => esc_html__('Layout 9', 'sntravel'),
                                    'layout-10' => esc_html__('Layout 10', 'sntravel'),
                                    'layout-11' => esc_html__('Layout 10', 'sntravel'),
                                ),
                                'default'  => '-1'
                            ),
                        ),
                        basilico_sidebar_pos_opts(['prefix' => 'post_', 'default' => true, 'default_value' => '-1']),
                        basilico_page_title_opts([
                            'default'         => true,
                            'default_value'   => '-1'
                        ]),
                        array(
                            array(
                                'id'           => 'custom_main_title',
                                'type'         => 'text',
                                'title'        => esc_html__( 'Custom Main Title', 'sntravel' ),
                                'subtitle'     => esc_html__( 'Custom heading text title', 'sntravel' ),
                                'required' => array( 'pt_mode', '!=', 'none' )
                            ),
                            array(
                                'id'           => 'custom_sub_title',
                                'type'         => 'text',
                                'title'        => esc_html__( 'Custom Sub title', 'sntravel' ),
                                'subtitle'     => esc_html__( 'Add short description for page title', 'sntravel' ),
                                'required' => array( 'pt_mode', '!=', 'none' )
                            )
                        ),
                        array(
                            array(
                                'id'          => 'post_share_count',
                                'type'        => 'text',
                                'title'       => esc_html__( 'Post Share Number', 'sntravel' ),
                                'description' => esc_html__( 'Edit post number share. This add 1 when click on post social share button.', 'sntravel' ),
                                'validate'    => 'numeric',
                                'msg'         => esc_html__('This must be a number!', 'sntravel'),
                            ),
                        ),
                        array(
                            array(
                                'id'          => 'featured-video-url',
                                'type'        => 'text',
                                'title'       => esc_html__( 'Video URL', 'sntravel' ),
                                'description' => esc_html__( 'Video will show when set post format is video', 'sntravel' ),
                                'validate'    => 'url',
                                'msg'         => 'Url error!',
                            ),
                            array(
                                'id'          => 'featured-audio-url',
                                'type'        => 'text',
                                'title'       => esc_html__( 'Audio URL', 'sntravel' ),
                                'description' => esc_html__( 'Audio that will show when set post format is audio', 'sntravel' ),
                                'validate'    => 'url',
                                'msg'         => 'Url error!',
                            ),
                            array(
                                'id'        =>'featured-quote-text',
                                'type'      => 'textarea',
                                'title'     => esc_html__('Quote Text', 'sntravel'),
                                'default'   => '',
                            ),
                            array(
                                'id'          => 'featured-quote-cite',
                                'type'        => 'text',
                                'title'       => esc_html__( 'Quote Cite', 'sntravel' ),
                                'description' => esc_html__( 'Quote will show when set post format is quote', 'sntravel' ),
                            ),
                            array(
                                'id'       => 'featured-link-url',
                                'type'     => 'text',
                                'title'    => esc_html__( 'Format Link URL', 'sntravel' ),
                                'description' => esc_html__( 'Link will show when set post format is link', 'sntravel' ),
                            ),
                            array(
                                'id'          => 'featured-link-text',
                                'type'        => 'text',
                                'title'       => esc_html__( 'Format Link Text', 'sntravel' ),
                            ),
                            array(
                                'id'          => 'featured-link-cite',
                                'type'        => 'text',
                                'title'       => esc_html__( 'Format Link Cite', 'sntravel' ),
                            ),
                        )
                    )
                ]
            ]
        ],
        'page' => [
            'opt_name'            => 'pxl_page_options',
            'display_name'        => esc_html__( 'Page Settings', 'sntravel' ),
            'show_options_object' => false,
            'context'  => 'advanced',
            'priority' => 'default',
            'sections'  => [
                'header' => [
                    'title'  => esc_html__( 'Header', 'sntravel' ),
                    'icon'   => 'el-icon-website',
                    'fields' => array_merge(
                        basilico_header_opts([
                            'default'         => true,
                            'default_value'   => '-1'
                        ]),
                        array(
                            array(
                                'id'       => 'disable_header',
                                'title'    => esc_html__('Disable Header', 'sntravel'),
                                'subtitle' => esc_html__('Header will not display.', 'sntravel'),
                                'type'     => 'button_set',
                                'options'  => array(
                                    '1'  => esc_html__('Yes','sntravel'),
                                    '0'  => esc_html__('No','sntravel'),
                                ),
                                'default'  => '0',
                            ),
                        ),
                        array(
                            array(
                                'id'       => 'pd_menu',
                                'type'     => 'select',
                                'title'    => esc_html__( 'Desktop Menu', 'sntravel' ),
                                'options'  => basilico_get_nav_menu_slug(),
                                'default' => '-1',
                            ),
                            array(
                                'id'       => 'pm_menu',
                                'type'     => 'select',
                                'title'    => esc_html__( 'Mobile Menu', 'sntravel' ),
                                'options'  => basilico_get_nav_menu_slug(),
                                'default' => '-1',
                            ),
                        )
                    )
                ],
                'page_title' => [
                    'title'  => esc_html__( 'Page Title', 'sntravel' ),
                    'icon'   => 'el el-indent-left',
                    'fields' => array_merge(
                        basilico_page_title_opts([
                            'default'         => true,
                            'default_value'   => '-1'
                        ]),
                        array(
                            array(
                                'id'           => 'custom_main_title',
                                'type'         => 'text',
                                'title'        => esc_html__( 'Custom Main Title', 'sntravel' ),
                                'subtitle'     => esc_html__( 'Custom heading text title', 'sntravel' ),
                                'required' => array( 'pt_mode', '=', 'bd' )
                            ),
                            array(
                                'id'           => 'custom_sub_title',
                                'type'         => 'text',
                                'title'        => esc_html__( 'Custom Sub title', 'sntravel' ),
                                'subtitle'     => esc_html__( 'Add short description for page title', 'sntravel' ),
                                'required' => array( 'pt_mode', '=', 'bd' )
                            )
                        )
                    )
                ],
                'content' => [
                    'title'  => esc_html__( 'Content', 'sntravel' ),
                    'icon'   => 'el-icon-pencil',
                    'fields' => array_merge(
                        basilico_sidebar_pos_opts(['prefix' => 'page_', 'default' => false, 'default_value' => '0']),
                        array(
                            array(
                                'id'             => 'content_padding',
                                'type'           => 'spacing',
                                'output'         => array( '#sntravel-main' ),
                                'right'          => false,
                                'left'           => false,
                                'mode'           => 'padding',
                                'units'          => array( 'px' ),
                                'units_extended' => 'false',
                                'title'          => esc_html__( 'Content Padding', 'sntravel' ),
                                'default'        => array(
                                   'padding-top'    => '',
                                   'padding-bottom' => '',
                                   'units'          => 'px',
                                )
                            ),
                            array(
                                'id'       => 'content_bg_color',
                                'type'     => 'color_rgba',
                                'title'    => esc_html__( 'Background Color', 'sntravel' ),
                                'subtitle' => esc_html__( 'Content background color.', 'sntravel' ),
                                'output'   => array( 'background-color' => 'body' )
                            ),
                        )  
                    )
                ],
               'footer' => [
                   'title'  => esc_html__( 'Footer', 'sntravel' ),
                   'icon'   => 'el el-website',
                   'fields' => array_merge(
                        basilico_footer_opts([
                            'default'         => true,
                            'default_value'   => '-1'
                        ]),
                        array(
                            array(
                                'id'       => 'disable_footer',
                                'title'    => esc_html__('Disable Footer', 'sntravel'),
                                'subtitle' => esc_html__('Footer will not display.', 'sntravel'),
                                'type'     => 'button_set',
                                'options'  => array(
                                    '1'  => esc_html__('Yes','sntravel'),
                                    '0'  => esc_html__('No','sntravel'),
                                ),
                                'default'  => '0',
                            ),
                        ),
                    )
               ],
               'colors' => [
                   'title'  => esc_html__( 'Colors', 'sntravel' ),
                   'icon'   => 'el el-website',
                   'fields' => array(
                        array(
                            'id'          => 'primary_color',
                            'type'        => 'color',
                            'title'       => esc_html__('Primary Color', 'sntravel'),
                            'transparent' => false,
                            'default'     => ''
                        ), 
                        array(
                            'id'          => 'secondary_color',
                            'type'        => 'color',
                            'title'       => esc_html__('Secondary Color', 'sntravel'),
                            'transparent' => false,
                            'default'     => ''
                        ),
                    )
                ]
            ]
        ],
		'product' => [ //product
            'opt_name'            => 'pxl_product_options',
            'display_name'        => esc_html__( 'Product Settings', 'sntravel' ),
            'show_options_object' => false,
            'context'  => 'advanced',
            'priority' => 'default',
            'sections'  => [
                'page_title' => [
                    'title'  => esc_html__( 'Page Title', 'sntravel' ),
                    'icon'   => 'el el-indent-left',
                    'fields' => array_merge(
                        basilico_page_title_opts([
                            'default'         => true,
                            'default_value'   => '-1'
                        ]),
                        array(
                            array(
                                'id'           => 'custom_main_title',
                                'type'         => 'text',
                                'title'        => esc_html__( 'Custom Main Title', 'sntravel' ),
                                'subtitle'     => esc_html__( 'Custom heading text title', 'sntravel' ),
                                'required' => array( 'pt_mode', '=', 'bd' )
                            ),
                            array(
                                'id'           => 'custom_sub_title',
                                'type'         => 'text',
                                'title'        => esc_html__( 'Custom Sub title', 'sntravel' ),
                                'subtitle'     => esc_html__( 'Add short description for page title', 'sntravel' ),
                                'required' => array( 'pt_mode', '=', 'bd' )
                            )
                        )
                    )
                ],
                'general' => [
                    'title'  => esc_html__( 'General', 'sntravel' ),
                    'icon'   => 'el-icon-website',
                    'fields' => array_merge(
                        array(
                            array(
                                'id'       => 'gallery_layout',
                                'type'     => 'button_set',
                                'title'    => esc_html__('Single Gallery', 'sntravel'),
                                'options'  => array(
                                    'simple' => esc_html__('Simple', 'sntravel'),
                                    'horizontal' => esc_html__('Horizontal', 'sntravel'),
                                    'vertical' => esc_html__('Vertical', 'sntravel'),
                                ),
                                'default'  => 'simple'
                            ),
                            array(
                                'id'=> 'product_feature_text',
                                'type' => 'text',
                                'title' => esc_html__('Featured Text 01', 'sntravel'),
                                'default' => '',
                            ),
                            array(
                                'id'          => 'feature_color_01',
                                'type'        => 'color_gradient',
                                'title'       => esc_html__('Featured Color 01', 'sntravel'),
                                'transparent' => false,
                                'gradient-angle' => true,
                                'default'  => array(
                                    'from' => '#673AB7',
                                    'to'   => '#973BF5',
                                    'gradient-angle' => 180,
                                ),
                                'required' => array( 'product_feature_text', '!=', '' )
                            ),
                            array(
                                'id'=> 'product_feature_text_02',
                                'type' => 'text',
                                'title' => esc_html__('Featured Text 02', 'sntravel'),
                                'default' => '',
                            ),
                            array(
                                'id'          => 'feature_color_02',
                                'type'        => 'color_gradient',
                                'title'       => esc_html__('Featured Color 02', 'sntravel'),
                                'transparent' => false,
                                'gradient-angle' => true,
                                'default'  => array(
                                    'from' => '#a90001',
                                    'to'   => '#ed2b2c',
                                    'gradient-angle' => 0,
                                ),
                                'required' => array( 'product_feature_text_02', '!=', '' )
                            ),
                            array(
                                'id'=> 'product_loop_additional_text1',
                                'type' => 'text',
                                'title' => esc_html__('Additional Text', 'sntravel'),
                                'default' => esc_html('220gr / 600 cal', 'sntravel'),
                                'description' => esc_html('Use for Shop Layout 3', 'sntravel')
                            ),
                            basilico_product_style_layout_4()
                        )
                    ),
                ],
            ],
        ],
    	'sntravel-portfolio' => [ //post_type
            'opt_name'            => 'pxl_portfolio_options',
            'display_name'        => esc_html__( 'Page Settings', 'sntravel' ),
            'show_options_object' => false,
            'context'  => 'advanced',
            'priority' => 'default',
            'sections'  => [
                'page_title' => [
                    'title'  => esc_html__( 'Page Title', 'sntravel' ),
                    'icon'   => 'el el-indent-left',
                    'fields' => array_merge(
                        basilico_page_title_opts([
                            'default'         => true,
                            'default_value'   => '-1'
                        ]),
                        array(
                            array(
                                'id'           => 'custom_main_title',
                                'type'         => 'text',
                                'title'        => esc_html__( 'Custom Main Title', 'sntravel' ),
                                'subtitle'     => esc_html__( 'Custom heading text title', 'sntravel' ),
                                'required' => array( 'pt_mode', '=', 'bd' )
                            ),
                            array(
                                'id'           => 'custom_sub_title',
                                'type'         => 'text',
                                'title'        => esc_html__( 'Custom Sub title', 'sntravel' ),
                                'subtitle'     => esc_html__( 'Add short description for page title', 'sntravel' ),
                                'required' => array( 'pt_mode', '=', 'bd' )
                            )
                        )
                    )
                ],
                'content' => [
                    'title'  => esc_html__( 'Content', 'sntravel' ),
                    'icon'   => 'el-icon-pencil',
                    'fields' => array_merge(
                        array(
                            array(
                                'id'             => 'content_padding',
                                'type'           => 'spacing',
                                'output'         => array( '#sntravel-main' ),
                                'right'          => false,
                                'left'           => false,
                                'mode'           => 'padding',
                                'units'          => array( 'px' ),
                                'units_extended' => 'false',
                                'title'          => esc_html__( 'Content Padding', 'sntravel' ),
                                'default'        => array(
                                    'padding-top'    => '',
                                    'padding-bottom' => '',
                                    'units'          => 'px',
                                )
                            ),
                            array(
                                'id'       => 'title_tag_on',
                                'title'    => esc_html__('Title & Tags', 'sntravel'),
                                'subtitle' => esc_html__('Display the Title & Tags at top of post.', 'sntravel'),
                                'type'     => 'switch',
                                'default'  => '0'
                            ),
                        )
                    )
                ],
                'additional_data' => [
                    'title'  => esc_html__( 'Additional Data', 'sntravel' ),
                    'icon'   => 'el el-list-alt',
                    'fields' => array(
                        array(
                            'id'           => 'custom_text_portfolio',
                            'type'         => 'text',
                            'title'        => esc_html__( 'Custom Text', 'sntravel' ),
                            'default'      => esc_html__('', 'sntravel'),
                        ),

                    ),

                ],
            ],
        ],
        'sntravel-service' => [ //post_type
            'opt_name'            => 'pxl_service_options',
            'display_name'        => esc_html__( 'Page Settings', 'sntravel' ),
            'show_options_object' => false,
            'context'  => 'advanced',
            'priority' => 'default',
            'sections'  => [
                'page_title' => [
                    'title'  => esc_html__( 'Page Title', 'sntravel' ),
                    'icon'   => 'el el-indent-left',
                    'fields' => array_merge(
                        basilico_page_title_opts([
                            'default'         => true,
                            'default_value'   => '-1'
                        ]),
                        array(
                            array(
                                'id'           => 'custom_main_title',
                                'type'         => 'text',
                                'title'        => esc_html__( 'Custom Main Title', 'sntravel' ),
                                'subtitle'     => esc_html__( 'Custom heading text title', 'sntravel' ),
                                'required' => array( 'pt_mode', '=', 'bd' )
                            ),
                            array(
                                'id'           => 'custom_sub_title',
                                'type'         => 'text',
                                'title'        => esc_html__( 'Custom Sub title', 'sntravel' ),
                                'subtitle'     => esc_html__( 'Add short description for page title', 'sntravel' ),
                                'required' => array( 'pt_mode', '=', 'bd' )
                            )
                        )
                    )
                ],
                'content' => [
                    'title'  => esc_html__( 'Content', 'sntravel' ),
                    'icon'   => 'el-icon-pencil',
                    'fields' => array_merge(
                        array(
                            array(
                                'id'             => 'content_padding',
                                'type'           => 'spacing',
                                'output'         => array( '#sntravel-main' ),
                                'right'          => false,
                                'left'           => false,
                                'mode'           => 'padding',
                                'units'          => array( 'px' ),
                                'units_extended' => 'false',
                                'title'          => esc_html__( 'Content Padding', 'sntravel' ),
                                'default'        => array(
                                    'padding-top'    => '',
                                    'padding-bottom' => '',
                                    'units'          => 'px',
                                )
                            ),
                        )
                    )
                ],
                'additional_data' => [
                    'title'  => esc_html__( 'Additional Data', 'sntravel' ),
                    'icon'   => 'el el-list-alt',
                    'fields' => array(
                        array(
                            'id'       => 'area_icon_type',
                            'type'     => 'button_set',
                            'title'    => esc_html__('Icon Type', 'sntravel'),
                            'desc'     => esc_html__( 'This image icon will display in post grid or carousel', 'sntravel' ),
                            'options'  => array(
                                'icon'  => esc_html__('Icon', 'sntravel'),
                                'image'  => esc_html__('Image', 'sntravel'),
                            ),
                            'default'  => 'image'
                        ),
                        array(
                            'id'       => 'area_icon',
                            'type'     => 'pxl_iconpicker',
                            'title'    => esc_html__( 'Select Icon', 'sntravel' ),
                            'default'  => '',
                            'required' => array( 0 => 'area_icon_type', 1 => 'equals', 2 => 'icon' ),
                        ),
                        array(
                            'id'       => 'area_img',
                            'type'     => 'media',
                            'title'    => esc_html__('Select Image', 'sntravel'),
                            'default' => '',
                            'required' => array( 0 => 'area_icon_type', 1 => 'equals', 2 => 'image' ),
                            'force_output' => true
                        ),
                    ),
                ],
            ],            
        ],
        'sntravel-food' => [ //post_type
            'opt_name'            => 'pxl_food_options',
            'display_name'        => esc_html__( 'Page Settings', 'sntravel' ),
            'show_options_object' => false,
            'context'  => 'advanced',
            'priority' => 'default',
            'sections'  => [
                'page_title' => [
                    'title'  => esc_html__( 'Page Title', 'sntravel' ),
                    'icon'   => 'el el-indent-left',
                    'fields' => array_merge(
                        basilico_page_title_opts([
                            'default'         => true,
                            'default_value'   => '-1'
                        ]),
                        array(
                            array(
                                'id'           => 'custom_main_title',
                                'type'         => 'text',
                                'title'        => esc_html__( 'Custom Main Title', 'sntravel' ),
                                'subtitle'     => esc_html__( 'Custom heading text title', 'sntravel' ),
                                'required' => array( 'pt_mode', '=', 'bd' )
                            ),
                            array(
                                'id'           => 'custom_sub_title',
                                'type'         => 'text',
                                'title'        => esc_html__( 'Custom Sub title', 'sntravel' ),
                                'subtitle'     => esc_html__( 'Add short description for page title', 'sntravel' ),
                                'required' => array( 'pt_mode', '=', 'bd' )
                            )
                        )
                    )
                ],
                'content' => [
                    'title'  => esc_html__( 'Content', 'sntravel' ),
                    'icon'   => 'el-icon-pencil',
                    'fields' => array_merge(
                        array(
                            array(
                                'id'             => 'content_padding',
                                'type'           => 'spacing',
                                'output'         => array( '#sntravel-main' ),
                                'right'          => false,
                                'left'           => false,
                                'mode'           => 'padding',
                                'units'          => array( 'px' ),
                                'units_extended' => 'false',
                                'title'          => esc_html__( 'Content Padding', 'sntravel' ),
                                'default'        => array(
                                    'padding-top'    => '',
                                    'padding-bottom' => '',
                                    'units'          => 'px',
                                )
                            ),
                            array(
                                'id'       => 'title_tag_on',
                                'title'    => esc_html__('Title & Tags', 'sntravel'),
                                'subtitle' => esc_html__('Display the Title & Tags at top of post.', 'sntravel'),
                                'type'     => 'switch',
                                'default'  => '0'
                            ),
                        )
                    )
                ],
                'additional_data' => [
                    'title'  => esc_html__( 'Additional Data', 'sntravel' ),
                    'icon'   => 'el el-list-alt',
                    'fields' => array(
                        array(
                            'id'           => 'custom_text_food',
                            'type'         => 'text',
                            'title'        => esc_html__( 'Custom Text', 'sntravel' ),
                        ),

                    ),

                ],
            ],
        ],
    	'sntravel-template' => [ //post_type
            'opt_name'            => 'pxl_hidden_template_options',
            'display_name'        => esc_html__( 'Template Settings', 'sntravel' ),
            'show_options_object' => false,
            'context'  => 'advanced',
            'priority' => 'default',
            'sections'  => [
                'general' => [
                    'title'  => esc_html__( 'General', 'sntravel' ),
                    'icon'   => 'el-icon-website',
                    'fields' => array(
                        array(
                            'id'    => 'template_type',
                            'type'  => 'select',
                            'title' => esc_html__('Template Type', 'sntravel'),
                            'options' => [
                                'default'      => esc_html__('Default', 'sntravel'),
                                'header'       => esc_html__('Header', 'sntravel'),
                                'header-mobile'       => esc_html__('Header Mobile', 'sntravel'),
                                'footer'       => esc_html__('Footer', 'sntravel'),
                                'mega-menu'    => esc_html__('Mega Menu', 'sntravel'),
                                'page-title'   => esc_html__('Page Title', 'sntravel'),
                                'hidden-panel' => esc_html__('Hidden Panel', 'sntravel'),
                            ],
                            'default' => 'default',
                        ),
                        array(
                            'id'       => 'template_position',
                            'type'     => 'select',
                            'title'    => esc_html__('Hidden Panel Position', 'sntravel'),
                            'options'  => [
                                'full' => esc_html__('Full Screen', 'sntravel'),
                                'top'   => esc_html__('Top Position', 'sntravel'),
                                'left'   => esc_html__('Left Position', 'sntravel'),
                                'long-left'   => esc_html__('Long Left Position', 'sntravel'),
                                'right'  => esc_html__('Right Position', 'sntravel'),
                                'center'  => esc_html__('Center Position', 'sntravel'),
                            ],
                            'default'  => 'full',
                            'required' => [ 'template_type', '=', 'hidden-panel']
                        ),
                        array(
                            'id'      => 'template_close_select',
                            'type'    => 'select',
                            'title'   => esc_html__('Close Button Style', 'sntravel'),
                            'options'  => array(
                                'theme-opt'         => esc_html('Inherit From Theme Options', 'sntravel'),
                                'none'      => esc_html('Hidden', 'sntravel'),
                                'custom'      => esc_html('Custom Style', 'sntravel'),
                            ),
                            'default' => 'theme-opt'
                        ),
                        array(
                            'id'      => 'template_close_style',
                            'type'    => 'image_select',
                            'title'   => esc_html__('Close Button Style', 'sntravel'),
                            'options'  => array(
                                'style-df' => get_template_directory_uri() . '/assets/images/close_layout/close-1.jpg',
                                'style-2'  => get_template_directory_uri() . '/assets/images/close_layout/close-2.jpg',
                                'style-3'  => get_template_directory_uri() . '/assets/images/close_layout/close-3.jpg',
                            ),
                            'default' => 'style-df',
                            'required' => [ 'template_close_select', '=', 'custom']
                        ),
                        array(
                            'id'      => 'custom_cls',
                            'type'    => 'text',
                            'title'   => esc_html__('Custom Class', 'sntravel'),
                        ),
                    ),
                ],
            ]
        ],
    ];

    $metabox->add_meta_data( $panels );
}
