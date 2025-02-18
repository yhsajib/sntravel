<?php

add_action( 'elementor/element/section/section_structure/after_section_end', 'basilico_add_custom_section_controls' );
function basilico_add_custom_section_controls( \Elementor\Element_Base $element) {
    $element->start_controls_section(
        'section_sntravel',
        [
            'label' => esc_html__( 'Sntravel Settings', 'sntravel' ),
            'tab' => \Elementor\Controls_Manager::TAB_LAYOUT,
        ]
    );
    if ( get_post_type( get_the_ID()) === 'sntravel-template' && get_post_meta( get_the_ID(), 'template_type', true ) === 'header') {

        $element->add_control(
            'sntravel_header_type',
            [
                'label' => esc_html__( 'Header Type', 'sntravel' ),
                'type'  => \Elementor\Controls_Manager::SELECT,
                'hide_in_inner' => true,
                'options'      => array(
                    ''          => esc_html__( 'Select Type', 'sntravel' ),
                    'main-sticky'       => esc_html__( 'Header Main & Sticky', 'sntravel' ),
                    'sticky'      => esc_html__( 'Header Sticky', 'sntravel' ),
                    'transparent' => esc_html__( 'Header Transparent', 'sntravel' ),
                ),
                'default'      => '', 
            ]
        );
    }
    if ( get_post_type( get_the_ID()) === 'sntravel-template' && get_post_meta( get_the_ID(), 'template_type', true ) === 'header-mobile') {
        $element->add_control(
            'sntravel_header_mobile_type',
            [
                'label' => esc_html__( 'Header Type', 'sntravel' ),
                'type'  => \Elementor\Controls_Manager::SELECT,
                'hide_in_inner' => true,
                'options'      => array(
                    ''          => esc_html__( 'Select Type', 'sntravel' ),
                    'main-sticky'       => esc_html__( 'Main & Sticky', 'sntravel' ),
                    'sticky'      => esc_html__( 'Sticky', 'sntravel' ),
                    'transparent' => esc_html__( 'Transparent', 'sntravel' ),
                ),
                'default'      => '',
            ]
        );
    }

    $element->add_control(
        'sntravel_section_offset',
        [
            'label' => esc_html__( 'Section Offset', 'sntravel' ),
            'type'         => \Elementor\Controls_Manager::SELECT,
            'prefix_class' => 'sntravel-section-offset-',
            'hide_in_inner' => true,
            'options'      => array(
                'none'    => esc_html__( 'None', 'sntravel' ),
                'left'   => esc_html__( 'Left', 'sntravel' ),
                'right'     => esc_html__( 'Right', 'sntravel' ),
            ),
            'default'      => 'none',
            'condition' => [
                'layout' => 'full_width'
            ]
        ]
    );

    $element->add_control(
        'sntravel_container_width',
        [
            'label' => esc_html__( 'Container Width', 'sntravel' ),
            'type'         => \Elementor\Controls_Manager::SELECT,
            'prefix_class' => 'sntravel-container-width-',
            'hide_in_inner' => true,
            'options'      => array(
                'container-1200'    => esc_html__( '1200px', 'sntravel' ),
                'container-1570'    => esc_html__( '1570px', 'sntravel' )
            ),
            'default'      => 'container-1200',
            'condition' => [
                'layout' => 'full_width',
                'sntravel_section_offset!' => 'none'
            ]
        ]
    );

    $element->add_control(
        'sntravel_section_border_animated',
        [
            'label' => esc_html__('Border Animated', 'sntravel'),
            'type' => \Elementor\Controls_Manager::SWITCHER,
            'label_on' => esc_html__( 'Yes', 'sntravel' ),
            'label_off' => esc_html__( 'No', 'sntravel' ),
            'return_value' => 'yes',
            'default' => 'no',
            'separator' => 'after',
        ]
    );

    $element->add_control(
        'sntravel_parallax_bg_img',
        [
            'label' => esc_html__( 'Parallax Background Image', 'sntravel' ),
            'type' => \Elementor\Controls_Manager::MEDIA,
            'selectors' => [
                '{{WRAPPER}} .sntravel-section-bg-parallax' => 'background-image: url( {{URL}} );',
            ],
        ]
    );
    $element->add_responsive_control(
        'sntravel_parallax_bg_position',
        [
            'label' => esc_html__( 'Background Position', 'sntravel' ),
            'type'         => \Elementor\Controls_Manager::SELECT,
            'options'      => array(
                ''              => esc_html__( 'Default', 'sntravel' ),
                'center center' => esc_html__( 'Center Center', 'sntravel' ),
                'center left'   => esc_html__( 'Center Left', 'sntravel' ),
                'center right'  => esc_html__( 'Center Right', 'sntravel' ),
                'top center'    => esc_html__( 'Top Center', 'sntravel' ),
                'top left'      => esc_html__( 'Top Left', 'sntravel' ),
                'top right'     => esc_html__( 'Top Right', 'sntravel' ),
                'bottom center' => esc_html__( 'Bottom Center', 'sntravel' ),
                'bottom left'   => esc_html__( 'Bottom Left', 'sntravel' ),
                'bottom right'  => esc_html__( 'Bottom Right', 'sntravel' ),
                'initial'       =>  esc_html__( 'Custom', 'sntravel' ),
            ),
            'default'      => '',
            'selectors' => [
                '{{WRAPPER}} .sntravel-section-bg-parallax' => 'background-position: {{VALUE}};',
            ],
            'condition' => [
                'sntravel_parallax_bg_img[url]!' => ''
            ]        
        ]
    );
    
    $element->add_responsive_control(
        'sntravel_parallax_bg_pos_custom_x',
        [
            'label' => esc_html__( 'X Position', 'sntravel' ),
            'type' => \Elementor\Controls_Manager::SLIDER,  
            'size_units' => [ 'px', 'em', '%', 'vw' ],
            'default' => [
                'unit' => 'px',
                'size' => 0,
            ],
            'range' => [
                'px' => [
                    'min' => -800,
                    'max' => 800,
                ],
                'em' => [
                    'min' => -100,
                    'max' => 100,
                ],
                '%' => [
                    'min' => -100,
                    'max' => 100,
                ],
                'vw' => [
                    'min' => -100,
                    'max' => 100,
                ],
            ],
            'selectors' => [
                '{{WRAPPER}} .sntravel-section-bg-parallax' => 'background-position: {{SIZE}}{{UNIT}} {{sntravel_parallax_bg_pos_custom_y.SIZE}}{{sntravel_parallax_bg_pos_custom_y.UNIT}}',
            ],
            'condition' => [
                'sntravel_parallax_bg_position' => [ 'initial' ],
                'sntravel_parallax_bg_img[url]!' => '',
            ],
        ]
    );
    $element->add_responsive_control(
        'sntravel_parallax_bg_pos_custom_y',
        [
            'label' => esc_html__( 'Y Position', 'sntravel' ),
            'type' => \Elementor\Controls_Manager::SLIDER,  
            //'hide_in_inner' => true,
            'size_units' => [ 'px', 'em', '%', 'vw' ],
            'default' => [
                'unit' => 'px',
                'size' => 0,
            ],
            'range' => [
                'px' => [
                    'min' => -800,
                    'max' => 800,
                ],
                'em' => [
                    'min' => -100,
                    'max' => 100,
                ],
                '%' => [
                    'min' => -100,
                    'max' => 100,
                ],
                'vw' => [
                    'min' => -100,
                    'max' => 100,
                ],
            ],
            'selectors' => [
                '{{WRAPPER}} .sntravel-section-bg-parallax' => 'background-position: {{sntravel_parallax_bg_pos_custom_x.SIZE}}{{sntravel_parallax_bg_pos_custom_x.UNIT}} {{SIZE}}{{UNIT}}',
            ],

            'condition' => [
                'sntravel_parallax_bg_position' => [ 'initial' ],
                'sntravel_parallax_bg_img[url]!' => '',
            ],
        ]
    );
    $element->add_responsive_control(
        'sntravel_parallax_bg_size',
        [
            'label' => esc_html__( 'Background Size', 'sntravel' ),
            'type'         => \Elementor\Controls_Manager::SELECT,
            'options'      => array(
                ''              => esc_html__( 'Default', 'sntravel' ),
                'auto' => esc_html__( 'Auto', 'sntravel' ),
                'cover'   => esc_html__( 'Cover', 'sntravel' ),
                'contain'  => esc_html__( 'Contain', 'sntravel' ),
                'initial'    => esc_html__( 'Custom', 'sntravel' ),
            ),
            'default'      => '',
            'selectors' => [
                '{{WRAPPER}} .sntravel-section-bg-parallax' => 'background-size: {{VALUE}};',
            ],
            'condition' => [
                'sntravel_parallax_bg_img[url]!' => ''
            ]        
        ]
    );
    $element->add_responsive_control(
        'sntravel_parallax_bg_size_custom',
        [
            'label' => esc_html__( 'Background Width', 'sntravel' ),
            'type' => \Elementor\Controls_Manager::SLIDER,  
            'size_units' => [ 'px', 'em', '%', 'vw' ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 1000,
                ],
                '%' => [
                    'min' => 0,
                    'max' => 100,
                ],
                'vw' => [
                    'min' => 0,
                    'max' => 100,
                ],
            ],
            'default' => [
                'size' => 100,
                'unit' => '%',
            ],
            'selectors' => [
                '{{WRAPPER}} .sntravel-section-bg-parallax' => 'background-size: {{SIZE}}{{UNIT}} auto',
            ],
            'condition' => [
                'sntravel_parallax_bg_size' => [ 'initial' ],
                'sntravel_parallax_bg_img[url]!' => '',
            ],
        ]
    );


    $element->add_control(
        'sntravel_parallax_pos_popover_toggle',
        [
            'label' => esc_html__( 'Parallax Background Position', 'sntravel' ),
            'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
            'label_off' => esc_html__( 'Default', 'sntravel' ),
            'label_on' => esc_html__( 'Custom', 'sntravel' ),
            'return_value' => 'yes',
            'condition'     => [
                'sntravel_parallax_bg_img[url]!' => ''
            ] 
        ]
    );
    $element->start_popover();
    $element->add_responsive_control(
        'sntravel_parallax_pos_left',
        [
            'label' => esc_html__( 'Left', 'sntravel' ).' (50px) px,%,vw,auto',
            'type' => 'text',
            'default' => '',
            'selectors' => [
                '{{WRAPPER}} .sntravel-section-bg-parallax' => 'left: {{VALUE}}',
            ],
            'condition'     => [
                'sntravel_parallax_bg_img[url]!' => ''
            ] 
        ]
    );
    $element->add_responsive_control(
        'sntravel_parallax_pos_top',
        [
            'label' => esc_html__( 'Top', 'sntravel' ).' (50px) px,%,vw,auto',
            'type' => 'text',
            'default' => '',
            'selectors' => [
                '{{WRAPPER}} .sntravel-section-bg-parallax' => 'top: {{VALUE}}',
            ],
            'condition'     => [
                'sntravel_parallax_bg_img[url]!' => ''
            ] 
        ]
    ); 
    $element->add_responsive_control(
        'sntravel_parallax_pos_right',
        [
            'label' => esc_html__( 'Right', 'sntravel' ).' (50px) px,%,vw,auto',
            'type' => 'text',
            'default' => '',
            'selectors' => [
                '{{WRAPPER}} .sntravel-section-bg-parallax' => 'right: {{VALUE}}',
            ],
            'condition'     => [
                'sntravel_parallax_bg_img[url]!' => ''
            ] 
        ]
    );
    $element->add_responsive_control(
        'sntravel_parallax_pos_bottom',
        [
            'label' => esc_html__( 'Bottom', 'sntravel' ).' (50px) px,%,vw,auto',
            'type' => 'text',
            'default' => '',
            'selectors' => [
                '{{WRAPPER}} .sntravel-section-bg-parallax' => 'bottom: {{VALUE}}',
            ],
            'condition'     => [
                'sntravel_parallax_bg_img[url]!' => ''
            ] 
        ]
    ); 
    $element->end_popover();

    $element->add_control(
        'sntravel_parallax_effect_popover_toggle',
        [
            'label' => esc_html__( 'Parallax Background Effect', 'sntravel' ),
            'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
            'label_off' => esc_html__( 'Default', 'sntravel' ),
            'label_on' => esc_html__( 'Custom', 'sntravel' ),
            'return_value' => 'yes',
            'condition'     => [
                'sntravel_parallax_bg_img[url]!' => ''
            ] 
        ]
    );
    $element->start_popover();
    $element->add_control(
        'sntravel_parallax_bg_img_effect_x',
        [
            'label' => esc_html__( 'TranslateX', 'sntravel' ).' (-80)',
            'type' => 'text',
            'default' => '',
            'condition'     => [
                'sntravel_parallax_bg_img[url]!' => ''
            ] 
        ]
    );
    $element->add_control(
        'sntravel_parallax_bg_img_effect_y',
        [
            'label' => esc_html__( 'TranslateY', 'sntravel' ).' (-80)',
            'type' => 'text',
            'default' => '',
            'condition'     => [
                'sntravel_parallax_bg_img[url]!' => ''
            ] 
        ]
    );
    $element->add_control(
        'sntravel_parallax_bg_img_effect_z',
        [
            'label' => esc_html__( 'TranslateZ', 'sntravel' ).' (-80)',
            'type' => 'text',
            'default' => '',
            'condition'     => [
                'sntravel_parallax_bg_img[url]!' => ''
            ] 
        ]
    );
    $element->add_control(
        'sntravel_parallax_bg_img_effect_rotate_x',
        [
            'label' => esc_html__( 'Rotate X', 'sntravel' ).' (30)',
            'type' => 'text',
            'default' => '',
            'condition'     => [
                'sntravel_parallax_bg_img[url]!' => ''
            ] 
        ]
    );
    $element->add_control(
        'sntravel_parallax_bg_img_effect_rotate_y',
        [
            'label' => esc_html__( 'Rotate Y', 'sntravel' ).' (30)',
            'type' => 'text',
            'default' => '',
            'condition'     => [
                'sntravel_parallax_bg_img[url]!' => ''
            ] 
        ]
    );
    $element->add_control(
        'sntravel_parallax_bg_img_effect_rotate_z',
        [
            'label' => esc_html__( 'Rotate Z', 'sntravel' ).' (30)',
            'type' => 'text',
            'default' => '',
            'condition'     => [
                'sntravel_parallax_bg_img[url]!' => ''
            ] 
        ]
    );
    $element->add_control(
        'sntravel_parallax_bg_img_effect_scale_x',
        [
            'label' => esc_html__( 'Scale X', 'sntravel' ).' (1.2)',
            'type' => 'text',
            'default' => '',
            'condition'     => [
                'sntravel_parallax_bg_img[url]!' => ''
            ] 
        ]
    ); 
    $element->add_control(
        'sntravel_parallax_bg_img_effect_scale_y',
        [
            'label' => esc_html__( 'Scale Y', 'sntravel' ).' (1.2)',
            'type' => 'text',
            'default' => '',
            'condition'     => [
                'sntravel_parallax_bg_img[url]!' => ''
            ] 
        ]
    );
    $element->add_control(
        'sntravel_parallax_bg_img_effect_scale_z',
        [
            'label' => esc_html__( 'Scale Z', 'sntravel' ).' (1.2)',
            'type' => 'text',
            'default' => '',
            'condition'     => [
                'sntravel_parallax_bg_img[url]!' => ''
            ] 
        ]
    );
    $element->add_control(
        'sntravel_parallax_bg_img_effect_scale',
        [
            'label' => esc_html__( 'Scale', 'sntravel' ).' (1.2)',
            'type' => 'text',
            'default' => '',
            'condition'     => [
                'sntravel_parallax_bg_img[url]!' => ''
            ] 
        ]
    );
    $element->end_popover(); 
    
    $element->add_responsive_control(
        'sntravel_section_parallax_opacity',
        [
            'label'      => esc_html__( 'Parallax Opacity (0 - 100)', 'sntravel' ),
            'type' => \Elementor\Controls_Manager::SLIDER,
            'size_units' => [ '%' ],
            'range' => [
                '%' => [
                    'min' => 1,
                    'max' => 100,
                ]
            ],
            'default'    => [
                'unit' => '%'
            ],
            'laptop_default' => [
                'unit' => '%',
            ],
            'tablet_extra_default' => [
                'unit' => '%',
            ],
            'tablet_default' => [
                'unit' => '%',
            ],
            'mobile_extra_default' => [
                'unit' => '%',
            ],
            'mobile_default' => [
                'unit' => '%',
            ],
            'selectors' => [
                '{{WRAPPER}} .sntravel-section-bg-parallax' => 'opacity: {{SIZE}}{{UNIT}};',
            ],
            'condition' => [
                'sntravel_parallax_bg_img[url]!' => ''
            ] 
        ]
    );
    
    $element->add_control(
        'sntravel_section_static_position',
        [
            'label' => esc_html__('Static Position', 'sntravel'),
            'type' => \Elementor\Controls_Manager::SWITCHER,
            'label_on' => esc_html__( 'Yes', 'sntravel' ),
            'label_off' => esc_html__( 'No', 'sntravel' ),
            'return_value' => 'yes',
            'default' => 'no',
            'separator' => 'before',
            'prefix_class' => 'sntravel-section-static-pos-'
        ]
    );
    $element->add_control(
        'sntravel_section_overflow_hidden',
        [
            'label' => esc_html__('Overflow Hidden', 'sntravel'),
            'type' => \Elementor\Controls_Manager::SWITCHER,
            'label_on' => esc_html__( 'Yes', 'sntravel' ),
            'label_off' => esc_html__( 'No', 'sntravel' ),
            'return_value' => 'yes',
            'default' => 'no',
            'prefix_class' => 'sntravel-section-overflow-hidden-'
        ]
    );

    $element->add_control(
        'sntravel_bg_ken_burns_bg_img',
        [
            'label' => esc_html__( 'Ken Burns Background Image', 'sntravel' ),
            'type' => \Elementor\Controls_Manager::MEDIA,
            'hide_in_inner' => true,
            'selectors' => [
                '{{WRAPPER}} .sntravel-section-bg-ken-burns' => '--sntravel-ken-burns-bg-img: url( {{URL}} );',
            ],
        ]
    );
    $element->add_control(
        'sntravel_bg_ken_burns_effect',
        [
            'label' => esc_html__('Ken Burns Effect', 'sntravel'),
            'type' => \Elementor\Controls_Manager::SELECT,
            'default' => '',
            'options' => [
                '' => esc_html__( 'None', 'sntravel' ),
                'in' => esc_html__( 'In', 'sntravel' ),
                'out' => esc_html__( 'Out', 'sntravel' ),
                'in-out' => esc_html__( 'In Out', 'sntravel' ),
            ],
            'prefix_class' => 'sntravel-section-ken-burns sntravel-ken-burns--', 
            'hide_in_inner' => true,
            'condition' => [
                'sntravel_bg_ken_burns_bg_img[url]!' => ''
            ],
            'separator' => 'before',
        ]
    );

    $element->end_controls_section();
};

add_action( 'elementor/element/column/layout/after_section_end', 'basilico_add_custom_columns_controls' );
function basilico_add_custom_columns_controls( \Elementor\Element_Base $element) {
    $element->start_controls_section(
        'columns_sntravel',
        [
            'label' => esc_html__( 'Sntravel Settings', 'sntravel' ),
            'tab' => \Elementor\Controls_Manager::TAB_LAYOUT,
        ]
    );
    $element->add_control(
        'sntravel_col_auto',
        [
            'label'   => esc_html__( 'Element Auto Width', 'sntravel' ),
            'type'    => \Elementor\Controls_Manager::SELECT,
            'options' => array(
                'default'           => esc_html__( 'Default', 'sntravel' ),
                'auto'   => esc_html__( 'Auto', 'sntravel' ),
            ),
            'label_block'  => true,
            'default'      => 'default',
            'prefix_class' => 'sntravel-column-element-'
        ]
    );
    $element->add_control(
        'sntravel_col_fullwidth_desktop',
        [
            'label' => esc_html__('Desktop Full Width (> 1500px)', 'sntravel'),
            'type'    => \Elementor\Controls_Manager::SWITCHER,
            'label_on' => esc_html__( 'Yes', 'sntravel' ),
            'label_off' => esc_html__( 'No', 'sntravel' ),
            'return_value' => 'yes',
            'default' => 'no',
            'prefix_class' => 'sntravel-column-fullwidth-',
        ]
    ); 
    $element->add_control(
        'sntravel_border_animated',
        [
            'label' => esc_html__('Border Animated', 'sntravel'),
            'type' => \Elementor\Controls_Manager::SWITCHER,
            'label_on' => esc_html__( 'Yes', 'sntravel' ),
            'label_off' => esc_html__( 'No', 'sntravel' ),
            'return_value' => 'yes',
            'default' => 'no',
        ]
    ); 

    $element->end_controls_section();
}

//* Additional Shape Divider
if (!function_exists('basilico_additional_shapes_divider')) {
    add_filter('elementor/shapes/additional_shapes', 'basilico_additional_shapes_divider', 11, 1);
    function basilico_additional_shapes_divider($additional_shapes){
        $additional_shapes['sntravel-waves'] = [
            'title' => _x( 'PXL Waves', 'Shapes', 'sntravel' ),
            'has_negative' => true,
            'has_flip' => true,
            'height_only' => false,
            'url' => get_template_directory_uri() . '/elements/assets/dividers/wave_animated.svg',
            'path' => get_template_directory() . '/elements/assets/dividers/wave_animated.svg'
        ];
        return $additional_shapes;
    }
}

//* Section Render
add_action( 'elementor/element/after_add_attributes', 'basilico_custom_el_attributes', 10, 1 );
function basilico_custom_el_attributes($el){
    
    $settings = $el->get_settings();
     
    if( 'section' == $el->get_name() ) {
        if ( isset( $settings['sntravel_header_type'] ) && !empty($settings['sntravel_header_type'] ) ) {
            $el->add_render_attribute( '_wrapper', 'class', 'sntravel-header-'.$settings['sntravel_header_type']);
        }
        if ( isset( $settings['sntravel_header_sticky_effect'] ) && !empty($settings['sntravel_header_sticky_effect'] ) ) {
            $el->add_render_attribute( '_wrapper', 'class', 'sntravel-header-'.$settings['sntravel_header_sticky_effect']);
        }
        if ( isset( $settings['sntravel_header_mobile_type'] ) && !empty($settings['sntravel_header_mobile_type'] ) ) {
            $el->add_render_attribute( '_wrapper', 'class', 'sntravel-header-mobile-'.$settings['sntravel_header_mobile_type']);
        }
        if ( isset( $settings['sntravel_section_border_animated'] ) && $settings['sntravel_section_border_animated'] == 'yes'  ) {
            $el->add_render_attribute( '_wrapper', 'class', 'sntravel-border-section-anm');
        }

        if ( isset( $settings['sntravel_section_offset'] ) && $settings['sntravel_section_offset'] !='none' ) {
            if( $settings['gap'] === 'no' )
                $el->add_render_attribute( '_wrapper', 'class', 'sntravel-section-gap-no');
        }
         
    }
    if( 'column' == $el->get_name() ) {
        if ( isset( $settings['sntravel_border_animated'] ) && $settings['sntravel_border_animated'] == 'yes'  ) {
            $el->add_render_attribute( '_wrapper', 'class', 'sntravel-border-column-anm');
        }
        if(!empty($settings['sntravel_column_parallax']) && !empty($settings['sntravel_column_parallax_value'])){
            $parallax_settings = json_encode([
                $settings['sntravel_column_parallax'] => $settings['sntravel_column_parallax_value']
            ]);
            $el->add_render_attribute( '_widget_wrapper', 'data-parallax', $parallax_settings );
        }
    }
    if( 'image' == $el->get_name() ) {
        if (strpos($settings['_css_classes'], 'parallax-') !== false) {
            $parl_arg = explode('--', $settings['_css_classes']); //parallax--y_50 , parallax--x_-50
            $parl_arg1 = explode('_', $parl_arg[1]);  
            $data_parallax = json_encode([
                $parl_arg1[0] => $parl_arg1[1]
            ]); 
            $el->add_render_attribute( '_wrapper', 'data-parallax', esc_attr($data_parallax));
        } 
    }

    $_animation = ! empty( $settings['_animation'] );
    $animation = ! empty( $settings['animation'] );
    $has_animation = $_animation && 'none' !== $settings['_animation'] || $animation && 'none' !== $settings['animation'];

    if ( $has_animation ) {
        $is_static_render_mode = \Elementor\Plugin::$instance->frontend->is_static_render_mode();
        if ( ! $is_static_render_mode ) {
            $el->add_render_attribute( '_wrapper', 'class', 'sntravel-elementor-animate' );
        }
    }
}

add_filter( 'sntravel_section_start_render', 'basilico_custom_section_start_render', 10, 3 );
function basilico_custom_section_start_render($html, $settings, $el){  
    if(!empty($settings['sntravel_parallax_bg_img']['url'])){
        $effects = [];
        if(!empty($settings['sntravel_parallax_bg_img_effect_x'])){
            $effects['x'] = (int)$settings['sntravel_parallax_bg_img_effect_x'];
        }
        if(!empty($settings['sntravel_parallax_bg_img_effect_y'])){
            $effects['y'] = (int)$settings['sntravel_parallax_bg_img_effect_y'];
        }
        if(!empty($settings['sntravel_parallax_bg_img_effect_z'])){
            $effects['z'] = (int)$settings['sntravel_parallax_bg_img_effect_z'];
        }
        if(!empty($settings['sntravel_parallax_bg_img_effect_rotate_x'])){
            $effects['rotateX'] = (float)$settings['sntravel_parallax_bg_img_effect_rotate_x'];
        }
        if(!empty($settings['sntravel_parallax_bg_img_effect_rotate_y'])){
            $effects['rotateY'] = (float)$settings['sntravel_parallax_bg_img_effect_rotate_y'];
        }
        if(!empty($settings['sntravel_parallax_bg_img_effect_rotate_z'])){
            $effects['rotateZ'] = (float)$settings['sntravel_parallax_bg_img_effect_rotate_z'];
        }
        if(!empty($settings['sntravel_parallax_bg_img_effect_scale_x'])){
            $effects['scaleX'] = (float)$settings['sntravel_parallax_bg_img_effect_scale_x'];
        }
        if(!empty($settings['sntravel_parallax_bg_img_effect_scale_y'])){
            $effects['scaleY'] = (float)$settings['sntravel_parallax_bg_img_effect_scale_y'];
        }
        if(!empty($settings['sntravel_parallax_bg_img_effect_scale_z'])){
            $effects['scaleZ'] = (float)$settings['sntravel_parallax_bg_img_effect_scale_z'];
        }
        if(!empty($settings['sntravel_parallax_bg_img_effect_scale'])){
            $effects['scale'] = (float)$settings['sntravel_parallax_bg_img_effect_scale'];
        }
        $data_parallax = json_encode($effects);
        $html .= '<div class="sntravel-section-bg-parallax" data-parallax="'.esc_attr($data_parallax).'"></div>';
    }  
    if(!empty($settings['sntravel_bg_ken_burns_bg_img']['url'])){
        $html .= '<div class="sntravel-section-bg-ken-burns"></div>';
    }
    
    if(!empty($settings['sntravel_divider_top_img']['url'])){
        $html .= '<div class="sntravel-section-divider-top-img"></div>';
    }
    if(!empty($settings['sntravel_divider_bot_img']['url'])){
        $html .= '<div class="sntravel-section-divider-bot-img"></div>';
    }
    
    if(!empty($settings['sntravel_section_shape_anm']) && count($settings['sntravel_section_shape_anm']) > 0){
        foreach ($settings['sntravel_section_shape_anm'] as $v) {
            $html .= '<span class="sntravel-section-shape-item elementor-repeater-item-'.$v['_id'].' '.$v['shape_animate'].'">
            <img src="'.$v['shape_img']['url'].'" alt="'.$v['shape_title'].'"/>
            </span>';
        }
    } 

    return $html;
}

//Image Parallax add control
add_action('elementor/element/common/_section_style/after_section_end', 'basilico_add_custom_common_controls');
function basilico_add_custom_common_controls(\Elementor\Element_Base $element){
    $element->start_controls_section(
        'section_sntravel_widget_el',
        [
            'label' => esc_html__( 'PXL Settings', 'sntravel' ),
            'tab' => \Elementor\Controls_Manager::TAB_ADVANCED,
        ]
    );
    $element->start_popover();
    $element->add_responsive_control(
        'sntravel_widget_el_position',
        [
            'label' => esc_html__( 'Position', 'sntravel' ),
            'type'         => \Elementor\Controls_Manager::SELECT,
            'options'      => array(
                ''         => esc_html__( 'Default', 'sntravel' ),
                'absolute' => esc_html__( 'Absolute', 'sntravel' ),
                'relative' => esc_html__( 'Relative', 'sntravel' ),
                'fixed'    => esc_html__( 'Fixed', 'sntravel' ),
            ),
            'default'      => '',
            'selectors' => [
                '{{WRAPPER}}' => 'position: {{VALUE}};',
            ],
        ]
    );
    $element->add_responsive_control(
        'sntravel_widget_el_pos_left',
        [
            'label' => esc_html__( 'Left', 'sntravel' ).' (50px) px,%,vw,auto',
            'type' => 'text',
            'default' => '',
            'selectors' => [
                '{{WRAPPER}}' => 'left: {{VALUE}}',
            ],
            'condition'     => [
                'sntravel_widget_el_position!' => ''
            ] 
        ]
    );
    $element->add_responsive_control(
        'sntravel_widget_el_pos_top',
        [
            'label' => esc_html__( 'Top', 'sntravel' ).' (50px) px,%,vw,auto',
            'type' => 'text',
            'default' => '',
            'selectors' => [
                '{{WRAPPER}}' => 'top: {{VALUE}}',
            ],
            'condition'     => [
                'sntravel_widget_el_position!' => ''
            ] 
        ]
    ); 
    $element->add_responsive_control(
        'sntravel_widget_el_pos_right',
        [
            'label' => esc_html__( 'Right', 'sntravel' ).' (50px) px,%,vw,auto',
            'type' => 'text',
            'default' => '',
            'selectors' => [
                '{{WRAPPER}}' => 'right: {{VALUE}}',
            ],
            'condition'     => [
                'sntravel_widget_el_position!' => ''
            ] 
        ]
    );
    $element->add_responsive_control(
        'sntravel_widget_el_pos_bottom',
        [
            'label' => esc_html__( 'Bottom', 'sntravel' ).' (50px) px,%,vw,auto',
            'type' => 'text',
            'default' => '',
            'selectors' => [
                '{{WRAPPER}}' => 'bottom: {{VALUE}}',
            ],
            'condition'     => [
                'sntravel_widget_el_position!' => ''
            ] 
        ]
    ); 
    $element->end_popover();

    $element->add_responsive_control(
        'widget_width',
        [
            'label' => esc_html__('Widget Width', 'sntravel' ),
            'type' => \Elementor\Controls_Manager::SLIDER,
            'control_type' => 'responsive',
            'default' => [
                'unit' => '%',
            ],
            'tablet_default' => [
                'unit' => '%',
            ],
            'mobile_default' => [
                'unit' => '%',
            ],
            'size_units' => [ '%', 'px', 'vw' ],
            'range' => [
                '%' => [
                    'min' => 1,
                    'max' => 100,
                ],
                'px' => [
                    'min' => 1,
                    'max' => 1920,
                ],
                'vw' => [
                    'min' => 1,
                    'max' => 100,
                ],
            ],
            'selectors' => [
                '{{WRAPPER}} .elementor-widget-container, {{WRAPPER}} .elementor-widget-container > div' => 'width: {{SIZE}}{{UNIT}};',
            ]
        ]
    );
    $element->add_responsive_control(
        'widget_height',
        [
            'label' => esc_html__('Widget Height', 'sntravel' ),
            'type' => \Elementor\Controls_Manager::SLIDER,
            'control_type' => 'responsive',
            'default' => [
                'unit' => '%',
            ],
            'tablet_default' => [
                'unit' => '%',
            ],
            'mobile_default' => [
                'unit' => '%',
            ],
            'size_units' => [ '%', 'px', 'vw' ],
            'range' => [
                '%' => [
                    'min' => 1,
                    'max' => 100,
                ],
                'px' => [
                    'min' => 1,
                    'max' => 1000,
                ],
                'vh' => [
                    'min' => 1,
                    'max' => 100,
                ],
            ],
            'selectors' => [
                '{{WRAPPER}}, {{WRAPPER}} .elementor-widget-container, {{WRAPPER}} .elementor-widget-container > div' => 'height: {{SIZE}}{{UNIT}};',
            ]
        ]
    );
    $element->add_control(
        'sntravel_widget_el_border_animated',
        [
            'label' => esc_html__('Border Animated', 'sntravel'),
            'type' => \Elementor\Controls_Manager::SWITCHER,
            'label_on' => esc_html__( 'Yes', 'sntravel' ),
            'label_off' => esc_html__( 'No', 'sntravel' ),
            'return_value' => 'yes',
            'default' => 'no',
            'separator' => 'after',
        ]
    );
    $element->add_control(
        'sntravel_widget_el_parallax_effect',
        [
            'label' => esc_html__('Pxl Parallax Effect', 'sntravel' ),
            'type' => \Elementor\Controls_Manager::SELECT,
            'options' => [
                ''               => esc_html__( 'None', 'sntravel' ),
                'effect mouse-move bound-section' => esc_html__( 'Mouse Move (section hover)', 'sntravel' ),
                'effect mouse-move bound-column' => esc_html__( 'Mouse Move (column hover)', 'sntravel' ),
                'effect mouse-move mouse-move-scope' => esc_html__( 'Mouse Move Scope Class (mouse-move-scope)', 'sntravel' ),
            ],
            'label_block' => true,
            'default' => '',
            'prefix_class' => 'sntravel-parallax-'
        ]
    );
    
    $element->add_responsive_control(
        'sntravel_widget_align',
        [
            'label' => esc_html__('Alignment', 'sntravel' ),
            'type' => \Elementor\Controls_Manager::CHOOSE,
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
            'default' => '',
            'selectors' => [
                '{{WRAPPER}} .elementor-widget-container' => 'display:flex; flex-wrap:wrap; justify-content: {{VALUE}};'
            ],
        ]
    );

    $element->add_control(
        'sntravel_widget_show_on_column_hover',
        [
            'label' => esc_html__('Show On Column Hover', 'sntravel' ),
            'type' => \Elementor\Controls_Manager::SWITCHER,
            'label_on' => esc_html__( 'Yes', 'sntravel' ),
            'label_off' => esc_html__( 'No', 'sntravel' ),
            'return_value' => 'yes',
            'default' => 'no',
            'separator' => 'before',
        ]
    );
    $element->end_controls_section();
}

add_filter( 'sntravel-custom-section/before-render', 'basilico_custom_section_before_render', 10, 3 );
function basilico_custom_section_before_render($html, $settings, $el){  
    if( isset($settings['sntravel_section_border_animated']) && $settings['sntravel_section_border_animated'] == 'yes' && isset($settings['border_width'])){
        $unit = $settings['border_width']['unit'];
        $border_color = isset($settings['border_color']) ? $settings['border_color'] : '#000';
        $border_num = 0;
        $bd_top_style = 'style="border-width: '.$settings['border_width']['top'].$unit.' 0 0 0; border-style: '.$settings['border_border'].'; border-color: '.$border_color.';"';
        $bd_right_style = 'style="border-width: 0 '.$settings['border_width']['right'].$unit.' 0 0; border-style: '.$settings['border_border'].'; border-color: '.$border_color.';"';
        $bd_bottom_style = 'style="border-width: 0 0 '.$settings['border_width']['bottom'].$unit.' 0; border-style: '.$settings['border_border'].'; border-color: '.$border_color.';"';
        $bd_left_style = 'style="border-width: 0 0 0 '.$settings['border_width']['left'].$unit.'; border-style: '.$settings['border_border'].'; border-color: '.$border_color.';"';

        if ((int)$settings['border_width']['top'] > 0)
            $border_num++;
        if ((int)$settings['border_width']['right'] > 0)
            $border_num++;
        if ((int)$settings['border_width']['bottom'] > 0)
            $border_num++;
        if ((int)$settings['border_width']['left'] > 0)
            $border_num++;
        
        $html = '<div class="sntravel-border-animated num-'.$border_num.'">
        <div class="sntravel-border-anm bt w-100" '.$bd_top_style.'></div>
        <div class="sntravel-border-anm br h-100" '.$bd_right_style.'></div>
        <div class="sntravel-border-anm bb w-100" '.$bd_bottom_style.'></div>
        <div class="sntravel-border-anm bl h-100" '.$bd_left_style.'></div>
        </div>';
    }
    
    return $html;
}

//columns render
add_filter( 'sntravel-custom-column/before-render', 'basilico_custom_column_before_render', 10, 3 );
function basilico_custom_column_before_render($html, $settings, $el){  
    if(!empty($settings['sntravel_parallax_col_bg_img']['url'])){
        if( $settings['sntravel_bg_parallax_type'] == 'transform'){
            $effects = [];
            if(!empty($settings['sntravel_parallax_col_bg_img_effect_x'])){
                $effects['x'] = (int)$settings['sntravel_parallax_col_bg_img_effect_x'];
            }
            if(!empty($settings['sntravel_parallax_col_bg_img_effect_y'])){
                $effects['y'] = (int)$settings['sntravel_parallax_col_bg_img_effect_y'];
            }
            if(!empty($settings['sntravel_parallax_col_bg_img_effect_z'])){
                $effects['z'] = (int)$settings['sntravel_parallax_col_bg_img_effect_z'];
            }
            if(!empty($settings['sntravel_parallax_col_bg_img_effect_rotate_x'])){
                $effects['rotateX'] = (float)$settings['sntravel_parallax_col_bg_img_effect_rotate_x'];
            }
            if(!empty($settings['sntravel_parallax_col_bg_img_effect_rotate_y'])){
                $effects['rotateY'] = (float)$settings['sntravel_parallax_col_bg_img_effect_rotate_y'];
            }
            if(!empty($settings['sntravel_parallax_col_bg_img_effect_rotate_z'])){
                $effects['rotateZ'] = (float)$settings['sntravel_parallax_col_bg_img_effect_rotate_z'];
            } 
            if(!empty($settings['sntravel_parallax_col_bg_img_effect_scale_x'])){
                $effects['scaleX'] = (float)$settings['sntravel_parallax_col_bg_img_effect_scale_x'];
            }
            if(!empty($settings['sntravel_parallax_col_bg_img_effect_scale_y'])){
                $effects['scaleY'] = (float)$settings['sntravel_parallax_col_bg_img_effect_scale_y'];
            }
            if(!empty($settings['sntravel_parallax_col_bg_img_effect_scale_z'])){
                $effects['scaleZ'] = (float)$settings['sntravel_parallax_col_bg_img_effect_scale_z'];
            }
            if(!empty($settings['sntravel_parallax_col_bg_img_effect_scale'])){
                $effects['scale'] = (float)$settings['sntravel_parallax_col_bg_img_effect_scale'];
            }
            $data_parallax = json_encode($effects);
            $html .= '<div class="sntravel-column-bg-parallax-outer"><div class="sntravel-column-bg-parallax" data-parallax="'.esc_attr($data_parallax).'"></div></div>';
        }else{
            $html .= '<div class="sntravel-column-bg-parallax parallax-inner"></div>';
        }
    } 
    if( isset($settings['sntravel_border_animated']) && $settings['sntravel_border_animated'] == 'yes' ){
        
        $breakpoints = ['laptop','tablet_extra','tablet','mobile_extra','mobile'];
 
        $unit = $settings['border_width']['unit'];
        $border_num = 0;

        $bt_width = $settings['border_width']['top'];
        $br_width = $settings['border_width']['right'];
        $bb_width = $settings['border_width']['bottom'];
        $bl_width = $settings['border_width']['left'];
        foreach ($breakpoints as $v) {
            if( isset($settings['border_width_'.$v]['top']) && (int)$settings['border_width_'.$v]['top'] > 0 )
                $bt_width = $settings['border_width_'.$v]['top'];
            if( isset($settings['border_width_'.$v]['right']) && (int)$settings['border_width_'.$v]['right'] > 0 )
                $br_width = $settings['border_width_'.$v]['right'];
            if( isset($settings['border_width_'.$v]['bottom']) && (int)$settings['border_width_'.$v]['bottom'] > 0 )
                $bb_width = $settings['border_width_'.$v]['bottom'];
            if( isset($settings['border_width_'.$v]['left']) && (int)$settings['border_width_'.$v]['left'] > 0 )
                $bl_width = $settings['border_width_'.$v]['left'];
        }

        $bd_top_style = 'style="--bd-width: '.$bt_width.$unit.' 0 0 0; border-style: '.$settings['border_border'].'; border-color: '.$settings['border_color'].';"';
        $bd_right_style = 'style="--bd-width: 0 '.$br_width.$unit.' 0 0; border-style: '.$settings['border_border'].'; border-color: '.$settings['border_color'].';"';
        $bd_bottom_style = 'style="--bd-width: 0 0 '.$bb_width.$unit.' 0; border-style: '.$settings['border_border'].'; border-color: '.$settings['border_color'].';"';
        $bd_left_style = 'style="--bd-width: 0 0 0 '.$bl_width.$unit.'; border-style: '.$settings['border_border'].'; border-color: '.$settings['border_color'].';"';
  
         
        $bd_top_w = $bd_right_w = $bd_bottom_w = $bd_left_w = '';

        if( isset($settings['border_width']['top'])){
            if( $settings['border_width']['top'] == '0' )
                $bd_top_w.= ' bw-no';
            if( (int)$settings['border_width']['top'] > 0 )
                $bd_top_w.= ' bw-yes';
        }
        if( isset($settings['border_width']['right'])){
            if( $settings['border_width']['right'] == '0' )
                $bd_right_w.= ' bw-no';
            if( (int)$settings['border_width']['right'] > 0 )
                $bd_right_w.= ' bw-yes';
        }
        if( isset($settings['border_width']['bottom'])){
            if( $settings['border_width']['bottom'] == '0' )
                $bd_bottom_w.= ' bw-no';
            if( (int)$settings['border_width']['bottom'] > 0 )
                $bd_bottom_w.= ' bw-yes';
        }
        if( isset($settings['border_width']['left'])){
            if( $settings['border_width']['left'] == '0' )
                $bd_left_w.= ' bw-no';
            if( (int)$settings['border_width']['left'] > 0 )
                $bd_left_w.= ' bw-yes';
        }    
 

        foreach ($breakpoints as $v) {

            if( isset($settings['border_width_'.$v]['top']) ){
                if( $settings['border_width_'.$v]['top'] == '0' )
                    $bd_top_w.= ' bw-'.$v.'-no';
                if( (int)$settings['border_width_'.$v]['top'] > 0 )
                    $bd_top_w.= ' bw-'.$v.'-yes';
            }

            if( isset($settings['border_width_'.$v]['right']) ){
                if( $settings['border_width_'.$v]['right'] == '0' )
                    $bd_right_w.= ' bw-'.$v.'-no';
                if( (int)$settings['border_width_'.$v]['right'] > 0 )
                    $bd_right_w.= ' bw-'.$v.'-yes';
            }
 

            if( isset($settings['border_width_'.$v]['bottom']) ){
                if( $settings['border_width_'.$v]['bottom'] == '0' )
                    $bd_bottom_w.= ' bw-'.$v.'-no';
                if( (int)$settings['border_width_'.$v]['bottom'] > 0 )
                    $bd_bottom_w.= ' bw-'.$v.'-yes';
            }
 
            if( isset($settings['border_width_'.$v]['left']) ){
                if( $settings['border_width_'.$v]['left'] == '0' )
                    $bd_left_w.= ' bw-'.$v.'-no';
                if( (int)$settings['border_width_'.$v]['left'] > 0 )
                    $bd_left_w.= ' bw-'.$v.'-yes';
            }
  
        }

        if( (int)$settings['border_width']['top'] > 0) $border_num++;
        if( (int)$settings['border_width']['right'] > 0) $border_num++;
        if( (int)$settings['border_width']['bottom'] > 0) $border_num++;
        if( (int)$settings['border_width']['left'] > 0) $border_num++;

        $html .= '<div class="sntravel-border-animated num-'.$border_num.'">
        <div class="sntravel-border-anm bt w-100 '.$bd_top_w.'" '.$bd_top_style.'></div>
        <div class="sntravel-border-anm br h-100 '.$bd_right_w.'" '.$bd_right_style.'></div>
        <div class="sntravel-border-anm bb w-100 '.$bd_bottom_w.'" '.$bd_bottom_style.'></div>
        <div class="sntravel-border-anm bl h-100 '.$bd_left_w.'" '.$bd_left_style.'></div>
        </div>';
    }   
    return $html;
}


//widget render
add_filter('elementor/widget/before_render_content','basilico_custom_widget_el_before_render', 10, 1 );
function basilico_custom_widget_el_before_render($el){
    $settings = $el->get_settings();
    $effects = [];

    if(isset($settings['sntravel_widget_show_on_column_hover']) && $settings['sntravel_widget_show_on_column_hover'] == 'yes') {
        $el->add_render_attribute( '_wrapper', 'class', 'sntravel-show-on-column-hover' );
    }

    if(!empty($settings['sntravel_parallax_pos_x']['size']) || !empty($settings['sntravel_parallax_pos_y']['size'])){
        $el->add_render_attribute( '_wrapper', 'class', 'sntravel-element-parallax' );
        if(!empty($settings['sntravel_parallax_pos_x'])){
            $effects['x'] = $settings['sntravel_parallax_pos_x']['size'].$settings['sntravel_parallax_pos_x']['unit'];
        }
        if(!empty($settings['sntravel_parallax_pos_y'])){
            $effects['y'] = $settings['sntravel_parallax_pos_y']['size'].$settings['sntravel_parallax_pos_y']['unit'];
        }
        $data_parallax = json_encode($effects);
        $el->add_render_attribute( '_wrapper', 'data-parallax', $data_parallax );
    }
}

add_filter('elementor/widget/render_content','basilico_custom_widget_el_render_content', 10, 2 );
function basilico_custom_widget_el_render_content($widget_content, $el){  
    $settings = $el->get_settings();
    if( isset($settings['sntravel_widget_el_border_animated']) && $settings['sntravel_widget_el_border_animated'] == 'yes' ){

        $el->add_render_attribute( '_wrapper', 'class', 'sntravel-border-wg-anm');

        $breakpoints = ['laptop','tablet_extra','tablet','mobile_extra','mobile'];
         
        $unit = $settings['_border_width']['unit'];
        $border_num = 0;

        $bt_width = $settings['_border_width']['top'];
        $br_width = $settings['_border_width']['right'];
        $bb_width = $settings['_border_width']['bottom'];
        $bl_width = $settings['_border_width']['left'];
        foreach ($breakpoints as $v) {
            if( isset($settings['_border_width_'.$v]['top']) && (int)$settings['_border_width_'.$v]['top'] > 0 )
                $bt_width = $settings['_border_width_'.$v]['top'];
            if( isset($settings['_border_width_'.$v]['right']) && (int)$settings['_border_width_'.$v]['right'] > 0 )
                $br_width = $settings['_border_width_'.$v]['right'];
            if( isset($settings['_border_width_'.$v]['bottom']) && (int)$settings['_border_width_'.$v]['bottom'] > 0 )
                $bb_width = $settings['_border_width_'.$v]['bottom'];
            if( isset($settings['_border_width_'.$v]['left']) && (int)$settings['_border_width_'.$v]['left'] > 0 )
                $bl_width = $settings['_border_width_'.$v]['left'];
        }

        $bd_top_style = 'style="--bd-width: '.$bt_width.$unit.' 0 0 0; border-style: '.$settings['_border_border'].'; border-color: '.$settings['_border_color'].';"';
        $bd_right_style = 'style="--bd-width: 0 '.$br_width.$unit.' 0 0; border-style: '.$settings['_border_border'].'; border-color: '.$settings['_border_color'].';"';
        $bd_bottom_style = 'style="--bd-width: 0 0 '.$bb_width.$unit.' 0; border-style: '.$settings['_border_border'].'; border-color: '.$settings['_border_color'].';"';
        $bd_left_style = 'style="--bd-width: 0 0 0 '.$bl_width.$unit.'; border-style: '.$settings['_border_border'].'; border-color: '.$settings['_border_color'].';"';
  
         
        $bd_top_w = $bd_right_w = $bd_bottom_w = $bd_left_w = '';

        if( isset($settings['_border_width']['top'])){
            if( $settings['_border_width']['top'] == '0' )
                $bd_top_w.= ' bw-no';
            if( (int)$settings['_border_width']['top'] > 0 )
                $bd_top_w.= ' bw-yes';
        }
        if( isset($settings['_border_width']['right'])){
            if( $settings['_border_width']['right'] == '0' )
                $bd_right_w.= ' bw-no';
            if( (int)$settings['_border_width']['right'] > 0 )
                $bd_right_w.= ' bw-yes';
        }
        if( isset($settings['_border_width']['bottom'])){
            if( $settings['_border_width']['bottom'] == '0' )
                $bd_bottom_w.= ' bw-no';
            if( (int)$settings['_border_width']['bottom'] > 0 )
                $bd_bottom_w.= ' bw-yes';
        }
        if( isset($settings['_border_width']['left'])){
            if( $settings['_border_width']['left'] == '0' )
                $bd_left_w.= ' bw-no';
            if( (int)$settings['_border_width']['left'] > 0 )
                $bd_left_w.= ' bw-yes';
        }    
 

        foreach ($breakpoints as $v) {

            if( isset($settings['_border_width_'.$v]['top']) ){
                if( $settings['_border_width_'.$v]['top'] == '0' )
                    $bd_top_w.= ' bw-'.$v.'-no';
                if( (int)$settings['_border_width_'.$v]['top'] > 0 )
                    $bd_top_w.= ' bw-'.$v.'-yes';
            }

            if( isset($settings['_border_width_'.$v]['right']) ){
                if( $settings['_border_width_'.$v]['right'] == '0' )
                    $bd_right_w.= ' bw-'.$v.'-no';
                if( (int)$settings['_border_width_'.$v]['right'] > 0 )
                    $bd_right_w.= ' bw-'.$v.'-yes';
            }
 

            if( isset($settings['_border_width_'.$v]['bottom']) ){
                if( $settings['_border_width_'.$v]['bottom'] == '0' )
                    $bd_bottom_w.= ' bw-'.$v.'-no';
                if( (int)$settings['_border_width_'.$v]['bottom'] > 0 )
                    $bd_bottom_w.= ' bw-'.$v.'-yes';
            }
 
            if( isset($settings['_border_width_'.$v]['left']) ){
                if( $settings['_border_width_'.$v]['left'] == '0' )
                    $bd_left_w.= ' bw-'.$v.'-no';
                if( (int)$settings['_border_width_'.$v]['left'] > 0 )
                    $bd_left_w.= ' bw-'.$v.'-yes';
            }
  
        }

        if( (int)$settings['_border_width']['top'] > 0) $border_num++;
        if( (int)$settings['_border_width']['right'] > 0) $border_num++;
        if( (int)$settings['_border_width']['bottom'] > 0) $border_num++;
        if( (int)$settings['_border_width']['left'] > 0) $border_num++;

        $html = '<div class="sntravel-border-animated num-'.$border_num.'">
        <div class="sntravel-border-anm bt w-100 '.$bd_top_w.'" '.$bd_top_style.'></div>
        <div class="sntravel-border-anm br h-100 '.$bd_right_w.'" '.$bd_right_style.'></div>
        <div class="sntravel-border-anm bb w-100 '.$bd_bottom_w.'" '.$bd_bottom_style.'></div>
        <div class="sntravel-border-anm bl h-100 '.$bd_left_w.'" '.$bd_left_style.'></div>
        </div>';
        return $html.$widget_content;
    }else{
        return $widget_content;
    }
}