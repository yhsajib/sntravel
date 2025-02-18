<?php
if (!class_exists('ReduxFramework')) {
    return;
}
if (class_exists('ReduxFrameworkPlugin')) {
    remove_action('admin_notices', array(ReduxFrameworkPlugin::instance(), 'admin_notices'));
}

$opt_name = sntravel()->get_option_name();
$version = sntravel()->get_version();

$args = array(
    // TYPICAL -> Change these values as you need/desire
    'opt_name'             => $opt_name,
    // This is where your data is stored in the database and also becomes your global variable name.
    'display_name'         => '', //$theme->get('Name'),
    // Name that appears at the top of your panel
    'display_version'      => $version,
    // Version that appears at the top of your panel
    'menu_type'            => 'submenu',  
    //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
    'allow_sub_menu'       => true,
    // Show the sections below the admin menu item or not
    'menu_title'           => esc_html__('Theme Options', 'sntravel'),
    'page_title'           => esc_html__('Theme Options', 'sntravel'),
    // You will need to generate a Google API key to use this feature.
    // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
    'google_api_key'       => '',
    // Set it you want google fonts to update weekly. A google_api_key value is required.
    'google_update_weekly' => false,
    // Must be defined to add google fonts to the typography module
    'async_typography'     => false,
    // Use a asynchronous font on the front end or font string
    //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
    'admin_bar'            => false,
    // Show the panel pages on the admin bar
    'admin_bar_icon'       => 'dashicons-admin-generic',
    // Choose an icon for the admin bar menu
    'admin_bar_priority'   => 50,
    // Choose an priority for the admin bar menu
    'global_variable'      => '',
    // Set a different name for your global variable other than the opt_name
    'dev_mode'             => true,
    // Show the time the page took to load, etc
    'update_notice'        => true,
    // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
    'customizer'           => true,
    // Enable basic customizer support
    //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
    //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field
    'show_options_object' => false,
    // OPTIONAL -> Give you extra features
    'page_priority'        => 80,
    // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
    'page_parent'          => 'sntravelart', 
    // For a full list of options, visit: //codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
    'page_permissions'     => 'manage_options',
    // Permissions needed to access the options panel.
    'menu_icon'            => '',
    // Specify a custom URL to an icon
    'last_tab'             => '',
    // Force your panel to always open to a specific tab (by id)
    'page_icon'            => 'icon-themes',
    // Icon displayed in the admin panel next to your menu_title
    'page_slug'            => 'sntravelart-theme-options',
    // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
    'save_defaults'        => true,
    // On load save the defaults to DB before user clicks save or not
    'default_show'         => false,
    // If true, shows the default value next to each field that is not the default value.
    'default_mark'         => '',
    // What to print by the field's title if the value shown is default. Suggested: *
    'show_import_export'   => true,
    // Shows the Import/Export panel when not used as a field.

    // CAREFUL -> These options are for advanced use only
    'transient_time'       => 60 * MINUTE_IN_SECONDS,
    'output'               => true,
    // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
    'output_tag'           => true,
    // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
    // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

    // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
    'database'             => '',
    // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
    'use_cdn'              => true,
    // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

    // HINTS
    'hints'                => array(
        'icon'          => 'el el-question-sign',
        'icon_position' => 'right',
        'icon_color'    => 'lightgray',
        'icon_size'     => 'normal',
        'tip_style'     => array(
            'color'   => 'red',
            'shadow'  => true,
            'rounded' => false,
            'style'   => '',
        ),
        'tip_position'  => array(
            'my' => 'top left',
            'at' => 'bottom right',
        ),
        'tip_effect'    => array(
            'show' => array(
                'effect'   => 'slide',
                'duration' => '500',
                'event'    => 'mouseover',
            ),
            'hide' => array(
                'effect'   => 'slide',
                'duration' => '500',
                'event'    => 'click mouseleave',
            ),
        ),
    ),
);

function basilico_button_options() {
    return array(
        'btn-default' => esc_html__('Default', 'sntravel' ),
        'btn-white' => esc_html__('White', 'sntravel' ),
        'btn-fullwidth' => esc_html__('Full Width', 'sntravel' ),
        'btn-outline' => esc_html__('Out Line', 'sntravel' ),
        'btn-outline-secondary' => esc_html__('Out Line Secondary', 'sntravel' ),
        'btn-outline-secondary-2' => esc_html__('Out Line Secondary 2', 'sntravel' ),
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
        'btn-additional-11' => esc_html__('Additional Button 11', 'sntravel' ),
    );
}

Redux::SetArgs($opt_name, $args);

//* General
Redux::setSection($opt_name, array(
    'title'  => esc_html__('General', 'sntravel'),
    'icon'   => 'el-icon-home',
    'fields' => array(
        array(
            'id'       => 'favicon',
            'type'     => 'media',
            'title'    => esc_html__('Favicon', 'sntravel'),
            'default' => ''
        ),
        array(
            'id'       => 'site_loader',
            'type'     => 'switch',
            'title'    => esc_html__('Site Loader', 'sntravel'),
            'default'  => false
        ),
        array(
            'id'          => 'site_loader_style',
            'type'        => 'select',
            'title'       => esc_html__('Loading Style', 'sntravel'),
            'options'  => array(
                'default' => esc_html__('Default', 'sntravel'),
                'gif_image'  => esc_html__('Image or Gif', 'sntravel'),
            ),
            'default'     => 'default',
            'required' => array( 0 => 'site_loader', 1 => 'equals', 2 => true ),
            'force_output' => true
        ),
        array(
            'id'       => 'loader_image',
            'type'     => 'media',
            'title'    => esc_html__('Select Image', 'sntravel'),
            'default'  => '',
            'required' => array( 0 => 'site_loader_style', 1 => 'equals', 2 => 'gif_image' ),
        ),
        array(
            'id'       => 'smoothscroll',
            'type'     => 'switch',
            'title'    => esc_html__('Smooth Scroll', 'sntravel'),
            'default'  => false
        ),
        array(
            'id'        => 'custom_cursor',
            'type'      => 'switch',
            'title'     => esc_html__('Custom Cursor', 'sntravel'),
            'subtitle'  => esc_html__('Custom default cursor.', 'sntravel'),
            'default'   => false
        ),
    )
));

//* Colors
Redux::setSection($opt_name, array(
    'title'  => esc_html__('Colors', 'sntravel'),
    'icon'   => 'el el-adjust',
    'fields' => array(
        array(
            'id'          => 'primary_color',
            'type'        => 'color',
            'title'       => esc_html__('Primary Color', 'sntravel'),
            'transparent' => false,
            'default'     => '#e6c9a2'
        ), 
        array(
            'id'          => 'secondary_color',
            'type'        => 'color',
            'title'       => esc_html__('Secondary Color', 'sntravel'),
            'transparent' => false,
            'default'     => '#0e1927'
        ),
        array(
            'id'          => 'additional_color_01',
            'type'        => 'color',
            'title'       => esc_html__('Additional Color', 'sntravel'),
            'transparent' => false,
            'default'     => '#fbf5ee'
        ),
        array(
            'id'          => 'divider_color',
            'type'        => 'color',
            'title'       => esc_html__('Divider Color', 'sntravel'),
            'transparent' => false,
            'default'     => '#c8c8c8'
        ),
        array(
            'id'          => 'gradient_color_01',
            'type'        => 'color_gradient',
            'title'       => esc_html__('Gradient Color 01', 'sntravel'),
            'transparent' => false,
            'gradient-angle' => true,
            'default'  => array(
                'from' => '#121212',
                'to'   => '#3c3c3c',
                'gradient-angle' => 180,
            ),
        ),
        array(
            'id'      => 'link_color',
            'type'    => 'link_color',
            'title'   => esc_html__('Link Colors', 'sntravel'),
            'default' => array(
                'regular' => '',
                'hover'   => '#e6c9a2',
                'active'  => '#e6c9a2'
            ),
            'output'  => array('a')
        ),
    )
));

//* Header
Redux::setSection($opt_name, array(
    'title'  => esc_html__('Header', 'sntravel'),
    'icon'   => 'el-icon-website',
    'fields' => array_merge(
        basilico_header_opts() 
    )
));

//* Page Title
Redux::setSection($opt_name, array(
    'title'  => esc_html__('Page Title', 'sntravel'),
    'icon'   => 'el el-indent-left',
    'fields' => array_merge(
        basilico_page_title_opts(),
        array(
            array(
                'id'       => 'pt_bg_parallax',
                'title'    => esc_html__('Parallax Background', 'sntravel'),
                'subtitle' => esc_html__('Scroll parallax effect', 'sntravel'),
                'type'     => 'switch',
                'default'  => false,
                'required' => array( 'pt_mode', '!=', 'none')
            ),
            array(
                'id' => 'pt_parallax',
                'type' => 'select',
                'title' => esc_html__( 'Parallax Type', 'sntravel' ),
                'options' => [
                    ''        => esc_html__( 'None', 'sntravel' ),
                    'x'       => esc_html__( 'Transform X', 'sntravel' ),
                    'y'       => esc_html__( 'Transform Y', 'sntravel' ),
                    'z'       => esc_html__( 'Transform Z', 'sntravel' ),
                    'rotateX' => esc_html__( 'RotateX', 'sntravel' ),
                    'rotateY' => esc_html__( 'RotateY', 'sntravel' ),
                    'rotateZ' => esc_html__( 'RotateZ', 'sntravel' ),
                    'scaleX'  => esc_html__( 'ScaleX', 'sntravel' ),
                    'scaleY'  => esc_html__( 'ScaleY', 'sntravel' ),
                    'scaleZ'  => esc_html__( 'ScaleZ', 'sntravel' ),
                    'scale'   => esc_html__( 'Scale', 'sntravel' ),
                ],
                'default' => '',
                'required' => array( 'pt_bg_parallax', '=', true )
            ),
            array(
                'id' => 'pt_parallax_value',
                'title' => esc_html__('Parallax Value', 'sntravel' ),
                'type' => 'text',
                'default' => '',
                'required' => array( 'pt_parallax', '!=', '' )
            ),
            array(
                'id'             => 'parallax_position',
                'type'           => 'spacing',
                'output'         => array('.sntravel-absoluted'),
                'mode'           => 'absolute',
                'units'          => array('px'),
                'units_extended' => 'false',
                'title' => esc_html__('Parallax Position', 'sntravel' ),
                'default'            => array(
                    'top'     => '0', 
                    'right'   => '0', 
                    'bottom'  => '0', 
                    'left'    => '0',
                    'units'          => 'px', 
                ),
                'required' => array( 'pt_parallax', '!=', '' )
            ),
            array(
                'id'             => 'page_title_class',
                'type'           => 'text',
                'title'          => esc_html__('Custom Class', 'sntravel'),
            ),
        ),
    )
));

//* WordPress default content
Redux::setSection($opt_name, array(
    'title'  => esc_html__('Content', 'sntravel'),
    'icon'   => 'el-icon-pencil',
    'fields' => array(
        array(
            'id'       => 'content_bg_color',
            'type'     => 'color_rgba',
            'title'    => esc_html__('Background Color', 'sntravel'),
            'subtitle' => esc_html__('Content background color.', 'sntravel'),
            'output'   => array('background-color' => '.sntravel-main'),
            'output_variables' => true,
        ),
        array(
            'id'             => 'content_padding',
            'type'           => 'spacing',
            'output'         => array('.sntravel-main'),
            'right'          => false,
            'left'           => false,
            'mode'           => 'padding',
            'units'          => array('px'),
            'units_extended' => 'false',
            'title'          => esc_html__('Content Padding', 'sntravel'),
            'desc'           => esc_html__('Default: Top-135x, Bottom-135px', 'sntravel'),
            'default'        => array(
                'padding-top'    => '',
                'padding-bottom' => '',
                'units'          => 'px',
            )
        ),
        array(
            'id'       => 'sidebar_sticky',
            'type'     => 'button_set',
            'title'    => esc_html__('Sidebar Sticky', 'sntravel'),
            'options'  => array(
                '0' => esc_html__('Default', 'sntravel'),
                '1' => esc_html__('Sticky', 'sntravel'),
            ),
            'default'  => '1'
        ),
        array(
            'id'      => 'archive_pagination_style',
            'type'    => 'image_select',
            'title'   => esc_html__('Pagination Style', 'sntravel'),
            'options'  => array(
                'style-df' => get_template_directory_uri() . '/assets/images/pagination_layout/p1.jpg',
                'style-2'  => get_template_directory_uri() . '/assets/images/pagination_layout/p2.jpg',
                'style-3'  => get_template_directory_uri() . '/assets/images/pagination_layout/p3.jpg',
                'style-4'  => get_template_directory_uri() . '/assets/images/pagination_layout/p4.jpg',
            ),
            'default' => 'style-df'
        ),
        array(
            'id'      => 'tab_style',
            'type'    => 'image_select',
            'title'   => esc_html__('Tab Style', 'sntravel'),
            'options'  => array(
                'style-df' => get_template_directory_uri() . '/assets/images/tabs_layout/t1.jpg',
                'style-2'  => get_template_directory_uri() . '/assets/images/tabs_layout/t2.jpg',
                'style-3'  => get_template_directory_uri() . '/assets/images/tabs_layout/t3.jpg',
                'style-4'  => get_template_directory_uri() . '/assets/images/tabs_layout/t4.jpg',
            ),
            'default' => 'style-df'
        ),
    )
));

//* Archive Post
Redux::setSection($opt_name, array(
    'title' => esc_html__('Blog Archive', 'sntravel'),
    'icon'  => 'el-icon-list',
    'subsection' => true,
    'fields'     => array_merge(
        array(
            array(
                'id'       => 'archive_post_layout',
                'type'     => 'select',
                'title'    => esc_html__('Select Post Layout', 'sntravel'),
                'options'  => array(
                    'layout-1' => esc_html__('Layout 1', 'sntravel'),
                    'layout-2' => esc_html__('Layout 2', 'sntravel'),
                    'layout-3' => esc_html__('Layout 3', 'sntravel'),
                    'layout-4' => esc_html__('Layout 4', 'sntravel'),
                    'layout-5' => esc_html__('Layout 5', 'sntravel'),
                    'layout-6' => esc_html__('Layout 6', 'sntravel'),
                    'layout-7' => esc_html__('Layout 7', 'sntravel'),
                ),
                'default'  => 'layout-1'
            ),
        ),
        basilico_sidebar_pos_opts([ 'prefix' => 'blog_']),
        array(
            array(
                'id'       => 'archive_author',
                'title'    => esc_html__('Author', 'sntravel'),
                'subtitle' => esc_html__('Display the Author for each blog post.', 'sntravel'),
                'type'     => 'switch',
                'default'  => true,
            ),
            array(
                'id'       => 'archive_date',
                'title'    => esc_html__('Date', 'sntravel'),
                'subtitle' => esc_html__('Display the Date for each blog post.', 'sntravel'),
                'type'     => 'switch',
                'default'  => true,
            ),
            array(
                'id'       => 'archive_category',
                'title'    => esc_html__('Category', 'sntravel'),
                'subtitle' => esc_html__('Display the Category for each blog post.', 'sntravel'),
                'type'     => 'switch',
                'default'  => true,
            ),
            array(
                'id'       => 'archive_tag',
                'title'    => esc_html__('Tags', 'sntravel'),
                'subtitle' => esc_html__('Display the Tags for each blog post.', 'sntravel'),
                'type'     => 'switch',
                'default'  => false,
            ),
            array(
                'id'       => 'archive_readmore',
                'title'    => esc_html__('Readmore Button', 'sntravel'),
                'subtitle' => esc_html__('Display the Readmore button for each blog post.', 'sntravel'),
                'type'     => 'switch',
                'default'  => true,
            ),
            array(
                'id'       => 'archive_readmore_button_style',
                'type'     => 'select',
                'title'    => esc_html__('Readmore Button Style', 'sntravel'),
                'subtitle' => esc_html__('Select button style for readmore button.', 'sntravel'),
                'options' => basilico_button_options(),
                'default' => 'btn-outline-secondary',
                'required' => [
                   'archive_readmore',
                   'equals',
                   '1' 
                ]
            ),
            array(
                'id'      => 'archive_readmore_text',
                'type'    => 'text',
                'title'   => esc_html__('Read More Text', 'sntravel'),
                'default' => '',
                'subtitle' => esc_html__('Default: Read more', 'sntravel'),
                'required' => array('archive_readmore', '=', true)
            ),
        )
    )
));

//* Single Post
Redux::setSection($opt_name, array(
    'title'      => esc_html__('Single Post', 'sntravel'),
    'icon'       => 'el-icon-file-edit',
    'subsection' => true,
    'fields'     => array_merge(
        array(
            array(
                'id'       => 'single_post_layout',
                'type'     => 'select',
                'title'    => esc_html__('Select Post Layout', 'sntravel'),
                'options'  => array(
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
                    'layout-11' => esc_html__('Layout 11', 'sntravel'),
                ),
                'default'  => 'layout-1'
            ),
            array(
                'id'       => 'single_post_title_layout',
                'type'     => 'button_set',
                'title'    => esc_html__('Post title layout', 'sntravel'),
                'options'  => array(
                    '0' => esc_html__('Default', 'sntravel'),
                    '1' => esc_html__('Custom Post Title', 'sntravel'),
                ),
                'default'  => '0'
            ),
            array(
                'id'       => 'post_custom_title',
                'title'    => esc_html__('Custom Post Title', 'sntravel'),
                'subtitle' => esc_html__('Show custom post title instead of post title.', 'sntravel'),
                'type'     => 'text',
                'default'  => esc_html__('Blog details', 'sntravel'),
                'required'      => [ 'single_post_title_layout', '=', '1']
            ),
        ),
        basilico_sidebar_pos_opts([ 'prefix' => 'post_']),
        array(
            array(
                'id'       => 'post_feature_image_on',
                'title'    => esc_html__('Feature Image', 'sntravel'),
                'subtitle' => esc_html__('Show feature image on single post.', 'sntravel'),
                'type'     => 'switch',
                'default'  => '1'
            ),
            array(
                'id'       => 'post_feature_image_type',
                'type'     => 'button_set',
                'title'    => esc_html__('Feature Image Type', 'sntravel'),
                'subtitle' => esc_html__('Feature image Type on single post.', 'sntravel'),
                'options' => array(
                    'cropped'  => esc_html__('Cropped Image', 'sntravel'),
                    'full'  => esc_html__('Full Image', 'sntravel')
                ),
                'default' => 'full',
            ),
            array(
                'id'       => 'post_author',
                'title'    => esc_html__('Author', 'sntravel'),
                'subtitle' => esc_html__('Display the Author for blog post.', 'sntravel'),
                'type'     => 'switch',
                'default'  => '1'
            ),
            array(
                'id'       => 'post_date_on',
                'title'    => esc_html__('Date', 'sntravel'),
                'subtitle' => esc_html__('Display the Date for blog post.', 'sntravel'),
                'type'     => 'switch',
                'default'  => '1'
            ),
            array(
                'id'       => 'post_comments_on',
                'title'    => esc_html__('Post Comments', 'sntravel'),
                'subtitle' => esc_html__('Display the Comment form for blog post.', 'sntravel'),
                'type'     => 'switch',
                'default'  => '1',
            ),
            array(
                'id'       => 'post_comments_button',
                'type'     => 'select',
                'title'    => esc_html__('Post Comments Button Style', 'sntravel'),
                'subtitle' => esc_html__('Select button style for comment form.', 'sntravel'),
                'options' => basilico_button_options(),
                'default' => 'btn-outline-secondary',
                'required' => [
                   'post_comments_on',
                   'equals',
                   '1' 
                ]
            ),
            array(
                'id'       => 'post_categories_on',
                'title'    => esc_html__('Categories', 'sntravel'),
                'subtitle' => esc_html__('Display the Category for blog post.', 'sntravel'),
                'type'     => 'switch',
                'default'  => '1'
            ),
            array(
                'id'       => 'post_tag',
                'title'    => esc_html__('Tags', 'sntravel'),
                'subtitle' => esc_html__('Display the Tag for blog post.', 'sntravel'),
                'type'     => 'switch',
                'default'  => '0'
            ),
            array(
                'id'       => 'post_social_share',
                'title'    => esc_html__('Social Share', 'sntravel'),
                'subtitle' => esc_html__('Display the Social Share for blog post.', 'sntravel'),
                'type'     => 'switch',
                'default'  => '0',
            ),
            array(
                'id'       => 'post_social_share_icon',
                'type'     => 'button_set',
                'title'    => esc_html__('Select Social Share', 'sntravel'),
                'subtitle' => esc_html__('Show social share on single post.', 'sntravel'),
                'multi'    => '1',
                'options' => array(
                    'facebook'  => esc_html__('Facebook', 'sntravel'),
                    'twitter'   => esc_html__('Twitter', 'sntravel'),
                    'linkedin'  => esc_html__('Linkedin', 'sntravel'),
                    'pinterest' => esc_html__('Pinterest', 'sntravel'),
                ), 
                'default' => array('facebook', 'twitter', 'linkedin', 'pinterest'),
                'required' => [
                   'post_social_share',
                   'equals',
                   '1' 
                ]
            ),
            array(
                'id'       => 'post_navigation',
                'title'    => esc_html__('Navigation', 'sntravel'),
                'subtitle' => esc_html__('Display the Navigation for blog post.', 'sntravel'),
                'type'     => 'switch',
                'default'  => '0',
            ),
        )
    )
));

//* Post Type
Redux::setSection($opt_name, array(
    'title' => esc_html__('Post Types', 'sntravel'),
    'desc' => esc_html__('Theme custom post type', 'sntravel'),
    'icon' => 'el el-folder-open',
    'subsection' => true,
    'fields' => array(
        array(
            'id' => 'sntravel_portfolio_slug',
            'type' => 'text',
            'title' => esc_html__('Portfolio Slug', 'sntravel'),
            'subtitle' => esc_html__('The slug name cannot be the same as a page name. Make sure to regenertate permalinks, after making changes.', 'sntravel'),
            'default' => '',
        ),
        array(
            'id' => 'sntravel_portfolio_label',
            'type' => 'text',
            'title' => esc_html__('Portfolio Label', 'sntravel'),
            'subtitle' => esc_html__('Name of the post type shown in the menu, breadcrumb...', 'sntravel'),
            'default' => '',
        ),
        array(
            'id'      => 'sntravel_portfolio_archive_link',
            'type'    => 'text',
            'title'   => esc_html__('Portfolio Archive Link', 'sntravel'),
            'subtitle' => esc_html__('Custom default archive link when customer click on breadcrumb, default layout same blog post archive.', 'sntravel'),
            'default' => '',
        ),
        array(
            'id' => 'sntravel_service_slug',
            'type' => 'text',
            'title' => esc_html__('Service Slug', 'sntravel'),
            'subtitle' => esc_html__('The slug name cannot be the same as a page name. Make sure to regenertate permalinks, after making changes.', 'sntravel'),
            'default' => '',
        ),
        array(
            'id' => 'sntravel_service_label',
            'type' => 'text',
            'title' => esc_html__('Service Label', 'sntravel'),
            'subtitle' => esc_html__('Name of the post type shown in the menu, breadcrumb...', 'sntravel'),
            'default' => '',
        ),
        array(
            'id'      => 'sntravel_service_archive_link',
            'type'    => 'text',
            'title'   => esc_html__('Service Archive Link', 'sntravel'),
            'subtitle' => esc_html__('Custom default archive link when customer click on breadcrumb, default layout same blog post archive.', 'sntravel'),
            'default' => '',
        ),
    )
));

//* Input
Redux::setSection($opt_name, array(
    'title'  => esc_html__('Global Input', 'sntravel'),
    'icon'   => 'el el-italic',
    'fields' => array(
        array(
            'id'             => 'input_padding',
            'type'           => 'spacing',
            'top'            => false,
            'bottom'         => false,
            'mode'           => 'padding',
            'units'          => array('px'),
            'units_extended' => 'false',
            'title'          => esc_html__('Text Box Padding', 'sntravel'),
            'desc'           => esc_html__('Default: Right - 20px, Left - 20px', 'sntravel'),
            'default'        => array(
                'padding-left'    => '20px',
                'padding-right'   => '20px',
                'units'           => 'px',
            ),
        ),
        array(
            'id'          => 'input_bg_color',
            'type'        => 'color',
            'title'       => esc_html__('Text Box Background Color', 'sntravel'),
            'transparent' => false,
            'default'     => '#fff'
        ),
        array(
            'id'          => 'input_bg_hover',
            'type'        => 'color',
            'title'       => esc_html__('Text Box Background Color (Hover)', 'sntravel'),
            'transparent' => false,
            'default'     => '#fff'
        ), 
        array(
            'id'             => 'input_border_px',
            'type'           => 'border',
            'output'         => array('input[type="text"], input[type="password"], input[type="email"], input[type="phone"], input[type="time"], input[type="date"], input[type="tel"], input[type="datetime-local"], textarea, select, .select2-container.select2-container--default .select2-selection--single'),
            'title'          => esc_html__('Input Border', 'sntravel'),
            'desc'           => esc_html__('Default: solid 1px', 'sntravel'),
            'all'            => false,
            'top'            => true,
            'right'          => true,
            'bottom'         => true,
            'left'           => true,
            'style'          => true,
            'color'          => true,
            'default'        => array(
                'border-top'     => '',
                'border-right'   => '',
                'border-bottom'  => '',
                'border-left'    => '',
                'border-style'   => '',
                'border-color'   => '',
            ),
        ),        
        // array(
        //     'id'          => 'input_border',
        //     'type'        => 'color',
        //     'title'       => esc_html__('Text Box Border Color', 'sntravel'),
        //     'transparent' => false,
        //     'default'     => '#e6c9a2'
        // ),
        array(
            'id'          => 'input_border_hover',
            'type'        => 'color',
            'title'       => esc_html__('Text Box Border Hover', 'sntravel'),
            'transparent' => false,
            'default'     => '#e6c9a2'
        ),
        array(
            'id'          => 'input_height',
            'type'        => 'dimensions',
            'title'       => esc_html__('Text Box Height', 'sntravel'),
            'width' => false,
            'unit'     => 'px',
            'default'  => array(
                'height'  => '44',
                'unit' => 'px'
            ),
        ),
        array(
            'id'          => 'input_border_radius2',
            'type'        => 'dimensions',
            'title'       => esc_html__('Border Radius', 'sntravel'),
            'height' => false,
            'unit'     => 'px',
            'default'  => array(
                'width'  => '0',
                'unit' => 'px'
            ),
        ),
        array(
            'id'          => 'font_input',
            'type'        => 'typography',
            'title'       => esc_html__('Text Box Typography', 'sntravel'),
            'google'      => true,
            'line-height' => true,
            'font-size'   => true,
            'text-align'  => false,
            'letter-spacing' => true,
            'units'       => 'px',
            'weights' => array(
                '400'       => 'Normal 400',
                '500'       => 'Medium 500',
                '700'       => 'Bold 700',
                '400italic' => 'Normal 400 Italic',
                '500italic' => 'Medium 500 Italic',
                '700italic' => 'Bold 700 Italic',
            ),
        ),
        array(
            'id'          => 'text_color_hover',
            'type'        => 'color',
            'title'       => esc_html__('Text Color Hover', 'sntravel'),
            'transparent' => false,
            'default'     => '',
            'output'      => array('color' => 'select:hover, input:hover, textarea:hover, select:active, input:active, textarea:active, select:focus, input:focus, textarea:focus')
        ),
    ),
));

Redux::setSection($opt_name, array(
    'title'  => esc_html__('Select/Dropdown', 'sntravel'),
    'icon'   => 'el el-chevron-down',
    'subsection' => true,
    'fields' => array(
        array(
            'id'      => 'select_style',
            'type'    => 'image_select',
            'title'   => esc_html__('Dropdown Icon Style', 'sntravel'),
            'options' => array(
                ''          => get_template_directory_uri() . '/assets/images/select_layout/select-style-1.jpg',
                'select-2'  => get_template_directory_uri() . '/assets/images/select_layout/select-style-2.jpg',
                'select-3'  => get_template_directory_uri() . '/assets/images/select_layout/select-style-3.jpg',
                'select-4'  => get_template_directory_uri() . '/assets/images/select_layout/select-style-4.jpg',
                'select-5'  => get_template_directory_uri() . '/assets/images/select_layout/select-style-5.jpg',
                'select-6'  => get_template_directory_uri() . '/assets/images/select_layout/select-style-6.jpg',
            ),
            'default' => ''
        ),
        array(
            'id'             => 'select_padding',
            'type'           => 'spacing',
            'top'            => false,
            'bottom'         => false,
            'mode'           => 'padding',
            'units'          => array('px'),
            'units_extended' => 'false',
            'title'          => esc_html__('Select Box Padding', 'sntravel'),
            'output'         => array('select')
        ),
        array(
            'id'          => 'select_bg_color',
            'type'        => 'color',
            'title'       => esc_html__('Select Box Background Color', 'sntravel'),
            'output'      => array('background-color' => 'select')
        ),
        array(
            'id'          => 'select_bg_color_hover',
            'type'        => 'color',
            'title'       => esc_html__('Select Box Background Color (Hover)', 'sntravel'),
            'output'      => array('background-color' => 'select:hover')
        ), 
        array(
            'id'          => 'select_border',
            'type'        => 'color',
            'title'       => esc_html__('Select Box Border Color', 'sntravel'),
            'transparent' => false,
            'output'      => array('border-color' => 'select, .select2-selection')
        ),
        array(
            'id'          => 'select_input',
            'type'        => 'typography',
            'title'       => esc_html__('Select Box Typography', 'sntravel'),
            'google'      => true,
            'line-height' => true,
            'font-size'   => true,
            'text-align'  => false,
            'letter-spacing' => true,
            'units'       => 'px',
            'weights' => array(
                '400'       => 'Normal 400',
                '500'       => 'Medium 500',
                '700'       => 'Bold 700',
                '400italic' => 'Normal 400 Italic',
                '500italic' => 'Medium 500 Italic',
                '700italic' => 'Bold 700 Italic',
            ),
            'output' => array('select')
        ),
    ),
));

//* Sidebar
Redux::setSection($opt_name, array(
    'title'  => esc_html__('Sidebar/Hidden Template', 'sntravel'),
    'icon'   => 'el el-indent-right',
    'fields' => array(
        array(
            'id'          => 'sidebar_style',
            'type'        => 'select',
            'title'       => esc_html__('Sidebar Style', 'sntravel'),
            'options'  => array(
                'default' => esc_html__('Style 1', 'sntravel'),
                'style-2' => esc_html__('Style 2', 'sntravel'),
                'style-3' => esc_html__('Style 3', 'sntravel'),
                'style-4' => esc_html__('Style 4', 'sntravel'),
                'style-5' => esc_html__('Style 5', 'sntravel'),
                'style-6' => esc_html__('Style 6', 'sntravel'),
            ),
            'default'     => 'default',
        ),
        array(
            'id'      => 'template_close_button',
            'type'    => 'image_select',
            'title'   => esc_html__('Close Button Style', 'sntravel'),
            'options'  => array(
                'style-df' => get_template_directory_uri() . '/assets/images/close_layout/close-1.jpg',
                'style-2'  => get_template_directory_uri() . '/assets/images/close_layout/close-2.jpg',
                'style-3'  => get_template_directory_uri() . '/assets/images/close_layout/close-3.jpg',
            ),
            'default' => 'style-df'
        ),
    ),
));

//* Footer
Redux::setSection($opt_name, array(
    'title'  => esc_html__('Footer', 'sntravel'),
    'icon'   => 'el el-website',
    'fields' => array_merge(
        basilico_footer_opts(),
        array(
            array(
                'id'       => 'back_totop_on',
                'type'     => 'switch',
                'title'    => esc_html__('Button Back to Top', 'sntravel'),
                'default'  => false,
            ),
            array(
                'id'          => 'back_totop_on_style',
                'type'        => 'select',
                'title'       => esc_html__('Back To Top Style', 'sntravel'),
                'options'  => array(
                    'default' => esc_html__('Default', 'sntravel'),
                    'sushi'   => esc_html__('Circle Draw', 'sntravel'),
                    'custom-style-1'  => esc_html__('Circle Draw Layout 2', 'sntravel'),
                ),
                'default'     => 'default',
                'required' => array( 0 => 'back_totop_on', 1 => 'equals', 2 => true ),
                'force_output' => true
            ),
        ),
    )
));

//* 404 Page
Redux::setSection($opt_name, array(
    'title'      => esc_html__('404 Page', 'sntravel'),
    'icon'       => 'el el-cog',
    'fields'     => array(
        array(
            'id'      => 'template_404',
            'type'    => 'select',
            'title'   => esc_html__('Select 404 Page Template', 'sntravel'),
            'desc'    => sprintf(esc_html__('Please create your template before choosing. %sClick Here%s','sntravel'),'<a href="' . esc_url( admin_url( 'edit.php?post_type=page' ) ) . '">','</a>'),
            'options' => basilico_list_post('page'),
            'default' => ''
        )
    )
));

//* Woocommerce
if(class_exists('Woocommerce')) {
    Redux::setSection($opt_name, array(
        'title' => esc_html__('Woocommerce', 'sntravel'),
        'icon'  => 'el el-shopping-cart',
        'fields'     => array_merge(
            basilico_sidebar_pos_opts([ 'prefix' => 'shop_', 'default_value' => 'left']),
            array(
                array(
                    'id'       => 'product_layout',
                    'title'    => esc_html__('Product Layout', 'sntravel'),
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
                        'layout-11'       => esc_html__('Layout 11', 'sntravel'),
                        'layout-12'       => esc_html__('Layout 12', 'sntravel'),
                    ],
                    'default'  => 'layout-1',
                ),
                array(
                    'id'       => 'shop_display_type',
                    'type'     => 'button_set',
                    'title'    => esc_html__('Display Type', 'sntravel'),
                    'options'  => array(
                        'grid' => esc_html__('Grid', 'sntravel'),
                        'list' => esc_html__('List', 'sntravel'),
                    ),
                    'default'  => 'grid'
                ),
                array(
                    'title'         => esc_html__('Grid Column XXL Devices >= 1400px', 'sntravel'),
                    'id'            => 'products_col_xxl',
                    'type'          => 'slider',
                    'default'       => 3,
                    'min'           => 1,
                    'step'          => 1,
                    'max'           => 6,
                    'display_value' => 'text'
                ),
                array(
                    'title'         => esc_html__('Grid Column XL Devices (1200px - 1399px)', 'sntravel'),
                    'id'            => 'products_col_xl',
                    'type'          => 'slider',
                    'default'       => 3,
                    'min'           => 1,
                    'step'          => 1,
                    'max'           => 6,
                    'display_value' => 'text'
                ),
                array(
                    'title'         => esc_html__('Grid Column LG Devices (992px - 1199px)', 'sntravel'),
                    'id'            => 'products_col_lg',
                    'type'          => 'slider',
                    'default'       => 3,
                    'min'           => 1,
                    'step'          => 1,
                    'max'           => 4,
                    'display_value' => 'text'
                ),
                array(
                    'title'         => esc_html__('Grid Column MD Devices (768px - 991px)', 'sntravel'),
                    'id'            => 'products_col_md',
                    'type'          => 'slider',
                    'default'       => 3,
                    'min'           => 1,
                    'step'          => 1,
                    'max'           => 4,
                    'display_value' => 'text'
                ),
                array(
                    'title'         => esc_html__('Grid Column SM Devices (576px - 767px)', 'sntravel'),
                    'id'            => 'products_col_sm',
                    'type'          => 'slider',
                    'default'       => 2,
                    'min'           => 1,
                    'step'          => 1,
                    'max'           => 3,
                    'display_value' => 'text'
                ),
                array(
                    'title'         => esc_html__('Grid Column XS Devices (480px - 575px)', 'sntravel'),
                    'id'            => 'products_col_xs',
                    'type'          => 'slider',
                    'default'       => 2,
                    'min'           => 1,
                    'step'          => 1,
                    'max'           => 2,
                    'display_value' => 'text'
                ),
                array(
                    'id'            => 'shop_archive_product_per_page',
                    'title'         => esc_html__( 'Products displayed per page', 'sntravel' ),
                    'description'   => esc_html__( 'Number products display on shop archive page', 'sntravel' ),
                    'type'          => 'slider',
                    'default'       => 9,
                    'min'           => 1,
                    'max'           => 100,
                    'step'          => 1,
                    'display_value' => 'text',
                ),
                array(
                    'id'      => 'onsale_text',
                    'type'    => 'text',
                    'title'   => esc_html__('Sale Text', 'sntravel'),
                    'default' => esc_html__('Sale Off', 'sntravel'),
                ),
                array(
                    'id'       => 'add_to_cart_text',
                    'type'     => 'text',
                    'title'    => esc_html__('Add To Cart Text', 'sntravel'),
                    'default'  => esc_html__('Add To Cart', 'sntravel')
                )
            )
        )
    ));
    Redux::setSection($opt_name, array(
        'title'      => esc_html__('Single Product', 'sntravel'),
        'icon'       => 'el el-file-edit',
        'subsection' => true,
        'fields'     => array_merge(
            basilico_sidebar_pos_opts([ 'prefix' => 'product_', 'default_value' => '0'] ),
            array(
                array(
                    'id'       => 'product_social_share_on',
                    'title'    => esc_html__('Social Share', 'sntravel'),
                    'subtitle' => esc_html__('Show social share on single product.', 'sntravel'),
                    'type'     => 'switch',
                    'default'  => '0',
                ),
                array(
                    'id'       => 'product_social_share_icon',
                    'type'     => 'button_set',
                    'title'    => esc_html__('Select Social Share', 'sntravel'),
                    'subtitle' => esc_html__('Show social share on single product.', 'sntravel'),
                    'multi'    => true,
                    'options' => array(
                        'facebook'  => esc_html__('Facebook', 'sntravel'),
                        'twitter'   => esc_html__('Twitter', 'sntravel'),
                        'linkedin'  => esc_html__('Linkedin', 'sntravel'),
                        'pinterest' => esc_html__('Pinterest', 'sntravel'),
                    ),
                    'default' => array('facebook', 'twitter', 'linkedin', 'pinterest'),
                    'required' => [
                        'product_social_share_on',
                        'equals',
                        '1'
                    ]
                ),
            ),
            basilico_product_single_opts_wishlist(),
            array(
                array(
                    'id'       => 'product_related',
                    'title'    => esc_html__('Product Related', 'sntravel'),
                    'subtitle' => esc_html__('Show/Hide related product', 'sntravel'),
                    'type'     => 'switch',
                    'default'  => '1',
                ),
                array(
                    'id'      => 'related_title',
                    'type'    => 'text',
                    'title'   => esc_html__('Related Title', 'sntravel'),
                    'default' => '',
                    'required' => [
                        'product_related',
                        'equals',
                        '1'
                    ]
                ),
                array(
                    'id'      => 'related_sub_title',
                    'type'    => 'text',
                    'title'   => esc_html__('Relate Subtitle', 'sntravel'),
                    'default' => '',
                    'required' => [
                        'product_related',
                        'equals',
                        '1'
                    ]
                ),
                array(
                    'id'      => 'related_description',
                    'type'    => 'text',
                    'title'   => esc_html__('Relate Description', 'sntravel'),
                    'default' => '',
                    'required' => [
                        'product_related',
                        'equals',
                        '1'
                    ]
                ),
                array(
                    'id'       => 'add_to_cart_button_style',
                    'type'     => 'select',
                    'title'    => esc_html__('Add To Cart Button Style', 'sntravel'),
                    'options'  => basilico_button_options(),
                    'default' => 'btn-outline-secondary',
                ),
            )
        )
    ));
    Redux::setSection($opt_name, array(
        'title'      => esc_html__('Related Product', 'sntravel'),
        'icon'       => 'el el-list-alt',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'product_related',
                'title'    => esc_html__('Product Related', 'sntravel'),
                'subtitle' => esc_html__('Show/Hide related product', 'sntravel'),
                'type'     => 'switch',
                'default'  => '1',
            ),
            array(
                'id'      => 'related_title',
                'type'    => 'text',
                'title'   => esc_html__('Related Title', 'sntravel'),
                'default' => '',
                'required' => [
                    'product_related',
                    'equals',
                    '1'
                ]
            ),
            array(
                'id'      => 'related_sub_title',
                'type'    => 'text',
                'title'   => esc_html__('Relate Subtitle', 'sntravel'),
                'default' => '',
                'required' => [
                    'product_related',
                    'equals',
                    '1'
                ]
            ),
            array(
                'id'      => 'related_description',
                'type'    => 'text',
                'title'   => esc_html__('Relate Description', 'sntravel'),
                'default' => '',
                'required' => [
                    'product_related',
                    'equals',
                    '1'
                ]
            ),
            array(
                'id'      => 'related_arrow_style',
                'type'    => 'select',
                'title'   => esc_html__('Arrow Style Style', 'sntravel'),
                'options'  => array(
                    'style-1'  => esc_html__('Style 1', 'sntravel' ),
                    'style-related-2'  => esc_html__('Style 2', 'sntravel' ),
                    'style-related-3'  => esc_html__('Style 3', 'sntravel' ),
                    'style-related-4'  => esc_html__('Style 4', 'sntravel' ),
                    'style-related-5'  => esc_html__('Style 5', 'sntravel' ),
                ),
                'default' => 'style-1'
            ),
        )
    ));
    Redux::setSection($opt_name, array(
        'title'      => esc_html__('Cart Page', 'sntravel'),
        'icon'       => 'el el-shopping-cart-sign',
        'subsection' => true,
        'fields'     => array_merge(
            array(
                array(
                    'id'       => 'cart_cross_sell',
                    'title'    => esc_html__('Cross Sells', 'sntravel'),
                    'subtitle' => esc_html__('Show/Hide Cross Sells product', 'sntravel'),
                    'type'     => 'switch',
                    'default'  => '1',
                ),
                array(
                    'id'            => 'cart_cross_sell_total',
                    'title'         => esc_html__('Cross Sells Total', 'sntravel'),
                    'subtitle'      => esc_html__('Total cross sell product display', 'sntravel'),
                    'type'          => 'slider',
                    'default'       => '4',
                    'min'           => 1,
                    'step'          => 1,
                    'max'           => 12,
                    'display_value' => 'label',
                    'required' => [
                        ['cart_cross_sell', '!=', '0'],
                    ]
                ),
                array(
                    'id'            => 'cart_cross_sell_column',
                    'title'         => esc_html__('Cross Sells Columns', 'sntravel'),
                    'subtitle'      => esc_html__('Choose your Columns', 'sntravel'),
                    'type'          => 'slider',
                    'default'       => '4',
                    'min'           => 1,
                    'step'          => 1,
                    'max'           => 6,
                    'display_value' => 'label',
                    'required' => [
                        ['cart_cross_sell', '!=', '0'],
                    ]
                ),
                array(
                    'id'       => 'image_product_border',
                    'title'    => esc_html__('Border Image', 'sntravel'),
                    'subtitle' => esc_html__('Draw border on product image.', 'sntravel'),
                    'type'     => 'switch',
                    'default'  => '0',
                ),
                array(
                    'id'       => 'image_product_border_color',
                    'title'    => esc_html__('Border Image Color', 'sntravel'),
                    'type'     => 'color',
                    'transparent' => false,
                    'output'      => array('border-color' => '.cart-list-wrapper .cart-list-item .product-thumbnail img'),
                    'required' => [
                        ['image_product_border', '!=', '0'],
                    ]
                ),
                array(
                    'id'          => 'product_heading',
                    'type'        => 'typography',
                    'title'       => esc_html__('Product Heading Typography', 'sntravel'),
                    'google'      => true,
                    'line-height' => true,
                    'font-size'   => true,
                    'text-align'  => false,
                    'letter-spacing' => true,
                    'text-transform' => true,
                    'units'       => 'px',
                    'weights' => array(
                        '400'       => 'Normal 400',
                        '500'       => 'Medium 500',
                        '700'       => 'Bold 700',
                        '400italic' => 'Normal 400 Italic',
                        '500italic' => 'Medium 500 Italic',
                        '700italic' => 'Bold 700 Italic',
                    ),
                    'output' => array('.cart-list-wrapper .cart-list-item .item-name a')
                ),
                array(
                    'id'          => 'total_section',
                    'type'        => 'color',
                    'title'       => esc_html__('Total Section Background', 'sntravel'),
                    'transparent' => false,
                    'output'      => array('background-color' => '.cart-collaterals')
                ),
                array(
                    'id'          => 'total_section_border',
                    'type'        => 'color',
                    'title'       => esc_html__('Total Section Border', 'sntravel'),
                    'transparent' => false,
                    'output'      => array('border-color' => '.cart-collaterals')
                ),
                array(
                    'id'          => 'total_section_border_radius',
                    'type'        => 'dimensions',
                    'title'       => esc_html__('Total Section Border Radius', 'sntravel'),
                    'height'      =>  false,
                    'unit'     => 'px',
                    'default'  => array(
                        'width'  => '0',
                    ),
                    'output_variables' => true,
                ),
                array(
                    'id'          => 'total_section_text',
                    'type'        => 'color',
                    'title'       => esc_html__('Total Section Text Color', 'sntravel'),
                    'transparent' => false,
                    'output'      => array('color' => '.cart-collaterals .sntravel-heading, .cart-collaterals .order-total span.lbl, .cart-collaterals .order-total span.value')
                ),
                array(
                    'id'          => 'total_section_input_color_override',
                    'type'        => 'color',
                    'title'       => esc_html__('Total Section Input Color', 'sntravel'),
                    'description' => esc_html__('Override Default Input (Text Box, Select) Color In Cart Total Section', 'sntravel'),
                    'transparent' => false,
                    'output'      => array('background-color' => '.cart-collaterals select, .cart-collaterals .select2-container.select2-container--default .select2-selection--single, .cart-collaterals .woocommerce-shipping-calculator .input-text')
                ),
                array(
                    'id'          => 'total_section_input_border_override',
                    'type'        => 'color',
                    'title'       => esc_html__('Total Section Border Color', 'sntravel'),
                    'description' => esc_html__('Override Default Input (Text Box, Select) Border Color In Cart Total Section', 'sntravel'),
                    'transparent' => false,
                    'output'      => array('border-color' => '.cart-collaterals select, .cart-collaterals .select2-container.select2-container--default .select2-selection--single, .cart-collaterals .woocommerce-shipping-calculator .input-text')
                ),
                array(
                    'id'       => 'cart_button_style',
                    'type'     => 'select',
                    'title'    => esc_html__('Cart Button Style', 'sntravel'),
                    'options' => basilico_button_options(),
                    'default' => 'btn-outline-secondary',
                ),
            )
        )
    ));
    Redux::setSection($opt_name, array(
        'title'      => esc_html__('Checkout Page', 'sntravel'),
        'icon'       => 'el el-check',
        'subsection' => true,
        'fields'     => array_merge(
            array(
                array(
                    'id'          => 'checkout_section',
                    'type'        => 'color',
                    'title'       => esc_html__('Review Checkout Background', 'sntravel'),
                    'transparent' => false,
                    'output'      => array('background-color' => '.checkout-review-wrap')
                ),
                array(
                    'id'          => 'checkout_radius',
                    'type'        => 'dimensions',
                    'title'       => esc_html__('Review Checkout Border Radius', 'sntravel'),
                    'height'      =>  false,
                    'unit'     => 'px',
                    'default'  => array(
                        'width'  => '0',
                    ),
                    'output_variables' => true,
                ),
                array(
                    'id'          => 'select_color',
                    'type'        => 'color',
                    'title'       => esc_html__('Select/Dropdown Color', 'sntravel'),
                    'transparent' => false,
                    'output'      => array('background-color' => '.checkout-review-wrap select, .checkout-review-wrap .select2-container.select2-container--default .select2-selection--single')
                ),
                array(
                    'id'          => 'select_border',
                    'type'        => 'color',
                    'title'       => esc_html__('Select/Dropdown Border', 'sntravel'),
                    'transparent' => false,
                    'output'      => array('border-color' => '.checkout-review-wrap select, .checkout-review-wrap .select2-container.select2-container--default .select2-selection--single')
                ),
                array(
                    'id'          => 'checkbox_color',
                    'type'        => 'color',
                    'title'       => esc_html__('Checkbox Color', 'sntravel'),
                    'transparent' => false,
                    'output'      => array('background-color' => '.sntravel-checkout-content-wrap input[type="radio"]:checked[type="radio"], .sntravel-checkout-content-wrap input[type="checkbox"]:checked[type="checkbox"]')
                ),
                array(
                    'id'          => 'button_checkout',
                    'type'        => 'color',
                    'title'       => esc_html__('Button Checkout Background', 'sntravel'),
                    'transparent' => false,
                    'output'      => array('background-color' => 'button#place_order')
                ),
                array(
                    'id'          => 'button_text',
                    'type'        => 'color',
                    'title'       => esc_html__('Button Checkout Text Color', 'sntravel'),
                    'transparent' => false,
                    'output'      => array('color' => 'button#place_order')
                ),
                array(
                    'id'          => 'button_border',
                    'type'        => 'color',
                    'title'       => esc_html__('Button Checkout Border', 'sntravel'),
                    'transparent' => false,
                    'output'      => array('border-color' => 'button#place_order')
                ),
                array(
                    'id'          => 'checkout_button_radius',
                    'type'        => 'dimensions',
                    'title'       => esc_html__('Button Radius', 'sntravel'),
                    'height'      =>  false,
                    'unit'     => 'px',
                    'default'  => array(
                        'width'  => '0',
                    ),
                    'output_variables' => true,
                ),
                array(
                    'id'          => 'button_checkout_hover',
                    'type'        => 'color',
                    'title'       => esc_html__('Button Checkout Background (Hover)', 'sntravel'),
                    'transparent' => false,
                    'output'      => array('background-color' => 'button#place_order:hover')
                ),
                array(
                    'id'          => 'button_text_hover',
                    'type'        => 'color',
                    'title'       => esc_html__('Button Checkout Text Color (Hover)', 'sntravel'),
                    'transparent' => false,
                    'output'      => array('color' => 'button#place_order:hover')
                ),
                array(
                    'id'          => 'button_border_hover',
                    'type'        => 'color',
                    'title'       => esc_html__('Button Checkout Border (Hover)', 'sntravel'),
                    'transparent' => false,
                    'output'      => array('border-color' => 'button#place_order:hover')
                ),
                array(
                    'id'          => 'button_text',
                    'type'        => 'typography',
                    'title'       => esc_html__('Button Typography', 'sntravel'),
                    'google'      => true,
                    'line-height' => true,
                    'font-size'   => true,
                    'text-align'  => false,
                    'letter-spacing' => true,
                    'text-transform' => true,
                    'units'       => 'px',
                    'weights' => array(
                        '400'       => 'Normal 400',
                        '500'       => 'Medium 500',
                        '700'       => 'Bold 700',
                        '400italic' => 'Normal 400 Italic',
                        '500italic' => 'Medium 500 Italic',
                        '700italic' => 'Bold 700 Italic',
                    ),
                    'output' => array('button#place_order')
                ),
            )
        )
    ));
    Redux::setSection($opt_name, array(
        'title'      => esc_html__('Wishlist Page', 'sntravel'),
        'icon'       => 'el el-shopping-cart-sign',
        'subsection' => true,
        'fields'     => array_merge(
            array(
                array(
                    'id'          => 'background_button_section',
                    'type'        => 'color',
                    'title'       => esc_html__('Background Button', 'sntravel'),
                    'transparent' => false,
                    'output'      => array('background-color' => '.woosw-list .sntravel-btn, .woosw-list .added_to_cart')
                ),
                array(
                    'id'          => 'color_button_section',
                    'type'        => 'color',
                    'title'       => esc_html__('Color Button', 'sntravel'),
                    'transparent' => false,
                    'output'      => array('color' => '.woosw-list .sntravel-btn, .woosw-list .added_to_cart')
                ),
                array(
                    'id'          => 'background_hover_button_section',
                    'type'        => 'color',
                    'title'       => esc_html__('Background Hover Button', 'sntravel'),
                    'transparent' => false,
                    'output'      => array('background-color' => '.woosw-list .sntravel-btn:hover, .woosw-list .added_to_cart:hover')
                ),
                array(
                    'id'          => 'color_hover_button_section',
                    'type'        => 'color',
                    'title'       => esc_html__('Color Hover Button', 'sntravel'),
                    'transparent' => false,
                    'output'      => array('color' => '.woosw-list .sntravel-btn:hover, .woosw-list .added_to_cart:hover')
                ),
            )
        )
    ));
    if (class_exists( 'YITH_WAPO' )) {
        Redux::setSection($opt_name, array(
            'title'      => esc_html__('Addons Quick View', 'sntravel'),
            'icon'       => 'el el-eye-open',
            'subsection' => true,
            'fields'     => array(
                array(
                    'id'       => 'enable_quick_view',
                    'title'    => esc_html__('Enable Quick View', 'sntravel'),
                    'subtitle' => esc_html__('Replace default Add To Cart button by button Quick View.', 'sntravel'),
                    'type'     => 'switch',
                    'default'  => '0',
                ),
                array(
                    'id'       => 'quick_view_style',
                    'title'    => esc_html__('Quick View Style', 'sntravel'),
                    'type'     => 'select',
                    'options' => array(
                        'style-1' => esc_html__('Style 1', 'sntravel'),
                        'style-2' => esc_html__('Style 2', 'sntravel'),
                    ),
                    'default' => 'style-1',
                    'required' => [
                        ['enable_quick_view', '!=', '0'],
                    ]
                ),
            )
        ));
    }
}

//* Typography
Redux::setSection($opt_name, array(
    'title'  => esc_html__('Typography', 'sntravel'),
    'icon'   => 'el-icon-text-width',
    'fields' => array(
        array(
            'id'          => 'font_body',
            'type'        => 'typography',
            'title'       => esc_html__('Body', 'sntravel'),
            'google'      => true,
            'line-height' => true,
            'font-size'   => true,
            'text-align'  => false,
            'letter-spacing' => true,
            'units'       => 'px',
            'weights' => array(
                '400'       => 'Normal 400',
                '500'       => 'Medium 500',
                '700'       => 'Bold 700',
                '400italic' => 'Normal 400 Italic',
                '500italic' => 'Medium 500 Italic',
                '700italic' => 'Bold 700 Italic',
            ),
        ),
        array(
            'id'             => 'font_heading',
            'type'           => 'typography',
            'title'          => esc_html__('Heading', 'sntravel'),
            'google'         => true,
            'line-height'    => true,
            'font-size'      => false,
            'text-align'     => false,
            'letter-spacing' => true,
            'text-transform' => true,
            'units'          => 'em',
            'weights' => array(
                '400'       => 'Normal 400',
                '500'       => 'Medium 500',
                '700'       => 'Bold 700',
                '400italic' => 'Normal 400 Italic',
                '500italic' => 'Medium 500 Italic',
                '700italic' => 'Bold 700 Italic',
            ),
        ),
        array(
            'id'          => 'font_h1',
            'type'        => 'text',
            'title'       => esc_html__('H1 Font Size', 'sntravel'),
            'default'     => '',
            'placeholder' => '60px'
        ),
        array(
            'id'          => 'font_h2',
            'type'        => 'text',
            'title'       => esc_html__('H2 Font Size', 'sntravel'),
            'default'     => '',
            'placeholder' => '45px'
        ),
        array(
            'id'          => 'font_h3',
            'type'        => 'text',
            'title'       => esc_html__('H3 Font Size', 'sntravel'),
            'default'     => '',
            'placeholder' => '36px'
        ),
        array(
            'id'          => 'font_h4',
            'type'        => 'text',
            'title'       => esc_html__('H4 Font Size', 'sntravel'),
            'default'     => '',
            'placeholder' => '24px'
        ),
        array(
            'id'          => 'font_h5',
            'type'        => 'text',
            'title'       => esc_html__('H5 Font Size', 'sntravel'),
            'default'     => '',
            'placeholder' => '18px'
        ),
        array(
            'id'          => 'font_h6',
            'type'        => 'text',
            'title'       => esc_html__('H6 Font Size', 'sntravel'),
            'default'     => '',
            'placeholder' => '16px'
        ),
    )
));