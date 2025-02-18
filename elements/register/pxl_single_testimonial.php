<?php
sntravel_add_custom_widget(
    array(
        'name'       => 'sntravel_testimonial_single',
        'title'      => esc_html__( 'PXL Client Review', 'sntravel' ),
        'icon' => 'eicon-editor-quote',
        'categories' => array('sntraveltheme-core'),
        'scripts'    => array(
        ),
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
                                    'image' => get_template_directory_uri() . '/elements/assets/layout-image/sntravel_testimonial_single-1.jpg'
                                ],
                            ],
                        ),
                    )
                ),
                array(
                    'name' => 'review_section',
                    'label' => esc_html__( 'How To Create Review Link?', 'sntravel' ),
                    'tab'      => 'layout',
                    'controls' => array(
                        array(
                            'name' => 'review_guide',
                            'label' => esc_html__( 'Review Link Format:', 'sntravel' ),
                            'type'    => 'layoutcontrol',
                            'description' => esc_html__('https://search.google.com/local/writereview?placeid=YOUR_PLACE_ID', 'sntravel'),

                        ),
                        array(
                            'name' => 'review_placeid',
                            'label' => esc_html__( 'Get YOUR_PLACE_ID At:', 'sntravel' ),
                            'type'    => 'layoutcontrol',
                            'description' => esc_html__('https://developers-dot-devsite-v2-prod.appspot.com/maps/documentation/javascript/examples/places-placeid-finder', 'sntravel'),

                        ),
                    ),
                ),
                array(
                    'name' => 'section_clients',
                    'label' => esc_html__('Clients', 'sntravel'),
                    'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                    'controls' => array(
                        array(
                            'name'             => 'selected_icon',
                            'label'            => esc_html__( 'Icon', 'sntravel' ),
                            'type'             => 'icons',
                            'default'          => [
                                'library' => 'sntraveli',
                                'value'   => 'sntraveli-quote'
                            ],
                        ),
                        array(
                            'name'  => 'icon_size',
                            'label' => esc_html__( 'Icon Size(px)', 'sntravel' ),
                            'type'  => 'slider',
                            'range' => [
                                'px' => [
                                    'min' => 15,
                                    'max' => 300,
                                ],
                            ],
                            'selectors' => [
                                '{{WRAPPER}} .sntravel-testimonial-icon' => 'font-size: {{SIZE}}{{UNIT}};',
                                '{{WRAPPER}} .sntravel-testimonial-icon svg' => 'width: {{SIZE}}{{UNIT}};',
                            ],
                        ),
                        array(
                            'name' => 'tt_content',
                            'label' => __( 'Content', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::TEXTAREA,
                            'rows' => '10',
                            'default' => 'Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.',
                            'placeholder' => esc_html__('Enter some text here.', 'sntravel' ),
                        ),
                        array(
                            'name' => 'tt_description',
                            'label' => esc_html__('Description', 'sntravel'),
                            'type' => \Elementor\Controls_Manager::TEXTAREA,
                            'rows' => '3',
                            'label_block' => true,
                            'default' => esc_html__( 'John Doe', 'sntravel' )
                        ),
                        array(
                            'name' => 'rating',
                            'label' => esc_html__('Rating', 'sntravel' ),
                            'type' => \Elementor\Controls_Manager::SELECT,
                            'default' => 'none',
                            'options' => [
                                'none' => esc_html__('None', 'sntravel' ),
                                'star1' => esc_html__('1 Star', 'sntravel' ),
                                'star2' => esc_html__('2 Star', 'sntravel' ),
                                'star3' => esc_html__('3 Star', 'sntravel' ),
                                'star4' => esc_html__('4 Star', 'sntravel' ),
                                'star5' => esc_html__('5 Star', 'sntravel' ),
                            ],
                        ),
                    ),
                ),
            ),
        ),
    ),
    basilico_get_class_widget_path()
);