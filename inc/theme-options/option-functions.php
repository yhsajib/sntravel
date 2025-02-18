<?php 
/**
 * Get Post List 
*/
if(!function_exists('basilico_list_post')){
    function basilico_list_post($post_type = 'post', $default = false){
        $post_list = array();
        $posts = get_posts(array('post_type' => $post_type, 'orderby' => 'date', 'order' => 'ASC', 'posts_per_page' => '-1'));
        if($default){
        	$post_list[-1] = esc_html__( 'Inherit', 'sntravel' );
        }
        foreach($posts as $post){
            $post_list[$post->ID] = $post->post_title;
        }
        return $post_list;
    }
}
 
if(!function_exists('basilico_get_templates_option')){
	function basilico_get_templates_option($meta_value = 'df', $default = false){
        $post_list = array();
        if($default && !is_array($default)){
            $post_list[-1] = esc_html__('Inherit','sntravel');
        }
        if(is_array($default)){
        	$key = isset($default['key']) ? $default['key'] : '0';
        	$post_list[$key] = !empty($default['value']) ? $default['value'] : esc_html__('None','sntravel');
        }
        $args = array(
            'post_type' => 'sntravel-template',
            'posts_per_page' => '-1',
            'orderby' => 'date',
            'order' => 'ASC',
            'meta_query' => array(
                array(
                    'key'       => 'template_type',
                    'value'     => $meta_value,
                    'compare'   => '='
                )
            )
        );

        $posts = get_posts($args);
        
        foreach($posts as $post){  
        	$template_type = get_post_meta( $post->ID, 'template_type', true );
        	if($template_type == 'df') continue;
            $post_list[$post->ID] = $post->post_title;
        }
         
        return $post_list;
    }
}
if(!function_exists('basilico_get_templates_option_slug')){
    function basilico_get_templates_option_slug($meta_value = 'df'){
        $post_list = array();
        $args = array(
            'post_type' => 'sntravel-template',
            'posts_per_page' => '-1',
            'orderby' => 'date',
            'order' => 'ASC',
            'meta_query' => array(
                array(
                    'key'       => 'template_type',
                    'value'     => $meta_value,
                    'compare'   => '='
                )
            )
        );

        $posts = get_posts($args);
        
        foreach($posts as $post){  
        	$template_type = get_post_meta( $post->ID, 'template_type', true );
        	if($template_type == 'df') continue;

        	$template_position = get_post_meta( $post->ID, 'template_position', true );
        	$pos = !empty($template_position) ? $template_position : '';
        	$keys = [$post->post_name, $post->ID, $pos];
        	$key = implode('||', $keys);
            $post_list[$key] = $post->post_title;
        }
        return $post_list;
    }
}

if(!function_exists('basilico_get_slider_option')){
    function basilico_get_slider_option(){
        $post_list = array();
         
        $args = array(
            'post_type' => 'sntravel-slider',
            'posts_per_page' => '-1',
            'orderby' => 'date',
            'order' => 'ASC',
        );

        $posts = get_posts($args);
        
        foreach($posts as $post){  
            $post_list[$post->ID] = $post->post_title;
        }
         
        return $post_list;
    }
}

if(!function_exists('basilico_get_templates_slug')){
    function basilico_get_templates_slug($meta_value = 'df'){
        $post_list = array();
        $posts = get_posts(
        	array(
        		'post_type' => 'sntravel-template', 
        		'orderby' => 'date', 
        		'order' => 'ASC', 
        		'posts_per_page' => '-1',
        		'meta_query' => array(
	                array(
	                    'key'       => 'template_type',
	                    'value'     => $meta_value,
	                    'compare'   => '='
	                )
	            )
        	)
        );
         
        foreach($posts as $post){
        	$template_type = get_post_meta( $post->ID, 'template_type', true );
            $template_position = get_post_meta( $post->ID, 'template_position', true );
            $pos = !empty($template_position) ? $template_position : '';
        	if($template_type == 'df') continue;
        	$value_args = [
        		'post_id' => $post->ID, 
        		'title' => $post->post_title,
                'position' => $pos
        	];
        	$template_position = get_post_meta( $post->ID, 'template_position', true );
        	 
    		$value_args['position'] = !empty($template_position) ? $template_position : '';

            $post_list[$post->post_name] = $value_args;
        }
        return $post_list;
    }
}



if(!function_exists('basilico_header_opts')){
	function basilico_header_opts($args=[]){
		$args = wp_parse_args($args,[
			'default'         => false,
			'default_value'   => ''
		]);
		
		if($args['default']){  
			$options = [
				'-1' => esc_html__('Default','sntravel'),
                '1'  => esc_html__('Yes','sntravel'),
                '0'  => esc_html__('No','sntravel'),
			];
			$default_value = '-1';
		} else {
			 
			$options = [
				'1'  => esc_html__('Yes','sntravel'),
                '0'  => esc_html__('No','sntravel'),
			];
			$default_value = '0';
		} 
		$opts = array(
	        array(
				'id'      => 'header_layout',
				'type'    => 'select',
				'title'   => esc_html__('Main Header Layout', 'sntravel'),
				'desc'    => sprintf(esc_html__('Please create your layout before choosing. %sClick Here%s','sntravel'),'<a href="' . esc_url( admin_url( 'edit.php?post_type=sntravel-template' ) ) . '">','</a>'),
				'options' => basilico_get_templates_option('header',$args['default']),
				'default' => $args['default_value']  
	        ),
//	        array(
//	            'id'       => 'header_transparent',
//	            'title'    => esc_html__('Header Transparent', 'sntravel'),
//	            'subtitle' => esc_html__('Header will be overlay on next content when applicable.', 'sntravel'),
//	            'type'     => 'button_set',
//                'options'  => $options,
//                'default'  => $default_value,
//	        ),
//            array(
//				'id'      => 'header_sticky_layout',
//				'type'    => 'select',
//				'title'   => esc_html__('Sticky Header Layout', 'sntravel'),
//				'desc'    => sprintf(esc_html__('Please create your layout before choosing. %sClick Here%s','sntravel'),'<a href="' . esc_url( admin_url( 'edit.php?post_type=sntravel-template' ) ) . '">','</a>'),
//				'options' => basilico_get_templates_option('header',$args['default']),
//				'default' => $args['default_value'],
//	        ),
            array(
                'id'       => 'header_mobile_layout',
                'type'     => 'select',
                'title'    => esc_html__('Header Mobile Layout', 'sntravel'),
                'subtitle' => esc_html__('Select a layout for header mobile.', 'sntravel'),
                'options'  => basilico_get_templates_option('header-mobile',$args['default']),
                'default'  => $args['default_value'],
                'required' => array( 'header_layout' , '!=', '' )
            ),
            array(
                'id'       => 'logo_m',
                'type'     => 'media',
                'title'    => esc_html__('Logo Mobile', 'sntravel'),
                'default' => array(
                    'url'=>''
                ),
                'required' => array( ['header_layout' , '!=', ''], ['header_mobile_layout' , '=', ''] )
            ),
            array(
                'id'       => 'logo_mobile_size',
                'type'     => 'dimensions',
                'title'    => esc_html__('Logo Size', 'sntravel'),
                'subtitle' => esc_html__('Enter demensions for your logo', 'sntravel'),
                'height'    => false,
                'unit'     => 'px',
                'required' => array( 'header_mobile_layout' , '=', '' )
            )
        );
 
		return $opts;
	}
}

if(!function_exists('basilico_page_title_opts')){
	function basilico_page_title_opts($args=[]){
		$args = wp_parse_args($args,[
			'default'         => false,
			'default_value'   => ''
		]);
		if($args['default']){
			$options = [
				'-1' => esc_html__('Default','sntravel'),
                '1'  => esc_html__('Yes','sntravel'),
                '0'  => esc_html__('No','sntravel'),
			];
			$default_value = '-1';
			
		} else {
			$options = [
				'1'  => esc_html__('Yes','sntravel'),
                '0'  => esc_html__('No','sntravel'),
			];
			$default_value = '0';
		} 
		
		if($args['default']){
			$pt_mode_options = [
				'-1'  => esc_html__('Inherit', 'sntravel'),
	            'bd'   => esc_html__('Builder', 'sntravel'),
	            'none'  => esc_html__('Disable', 'sntravel')
			];
			$pt_mode_default = '-1';
		}else{
			$pt_mode_options = [
				'df'  => esc_html__('Default', 'sntravel'),
	            'bd'   => esc_html__('Builder', 'sntravel'),
	            'none'  => esc_html__('Disable', 'sntravel')
			];
			$pt_mode_default = 'df';
		}

		$opts = array(
		 	array(
                'id'       => 'pt_mode',
                'type'     => 'button_set',
                'title'    => esc_html__('Select Page title Mode', 'sntravel'),
                'options' => $pt_mode_options, 
                'default' => $pt_mode_default
            ),
			array(
	            'id'       => 'ptitle_layout',
	            'type'     => 'select',
	            'title'    => esc_html__('Page Title Layout (not empty)', 'sntravel'),
	            'subtitle' => esc_html__('Select a layout for page title.', 'sntravel'),
	            'options'  => basilico_get_templates_option('page-title',false),
	            'default'  => $args['default_value'],
	            'required' => array( 'pt_mode', '=', 'bd' )
	        ),
	        array(
				'id'       => 'ptitle_bg',
				'type'     => 'background',
				'title'    => esc_html__('Background', 'sntravel'),
				'subtitle' => esc_html__('Page title background.', 'sntravel'),
				'output'   => array('.sntravel-pagetitle .sntravel-page-title-bg'),
				'required' => array( 'pt_mode', '!=', 'none' )
	        ),
	        array(
				'id'       => 'ptitle_overlay_color',
				'type'     => 'color_rgba',
				'title'    => esc_html__('Overlay Background Color', 'sntravel'),
				'output'   => array('background-color' => '.sntravel-pagetitle.layout-df .sntravel-page-title-overlay'),
				'required' => array( 'pt_mode', '=', 'df' )
	        ),
            array(
                'id'      => 'breadcrumb_on',
                'type'    => 'switch',
                'title'   => esc_html__( 'Breadcrumb', 'sntravel' ),
                'default' => false,
                'required' => array( 'pt_mode', '=', 'df' )
            ),
		);

		return $opts;
	}
}

if(!function_exists('basilico_footer_opts')){
	function basilico_footer_opts($args=[]){
		$args = wp_parse_args($args,[
			'default'         => false,
			'default_value'   => ''
		]);
		if($args['default']){
			$footer_fixed_options = [
				'-1' => esc_html__('Default','sntravel'),
                '1'  => esc_html__('Yes','sntravel'),
                '0'  => esc_html__('No','sntravel'),
			];
			$footer_fixed_default_value = '-1';
		} else {
			$footer_fixed_options = [
				'1'  => esc_html__('Yes','sntravel'),
                '0'  => esc_html__('No','sntravel'),
			];
			$footer_fixed_default_value = '0';
		} 
		$opts = array(
	        array(
	            'id'          => 'footer_layout',
	            'type'        => 'select',
	            'title'       => esc_html__('Footer Layout', 'sntravel'),
	            'desc'        => sprintf(esc_html__('Please create your layout before choosing. %sClick Here%s','sntravel'),'<a href="' . esc_url( admin_url( 'edit.php?post_type=sntravel-template' ) ) . '">','</a>'),
	            'options'     => basilico_get_templates_option('footer', $args['default']),
	            'default'     => $args['default_value'],
	        ),
	        array(
                'title'    => esc_html__('Footer Fixed', 'sntravel'),
                'subtitle' => esc_html__('Make footer fixed at bottom?', 'sntravel'),
                'id'       => 'footer_fixed',
                'type'     => 'button_set',
                'options'  => $footer_fixed_options,
                'default'  => $footer_fixed_default_value,
            )
	    );
 
		return $opts;
	}
}
if(!function_exists('basilico_sidebar_pos_opts')){
	function basilico_sidebar_pos_opts($args=[]){
		$args = wp_parse_args($args,[
			'prefix'        => 'blog_',
			'default'       => false,
			'default_value' => 'right'
		]);

		if($args['default']){
			$options = [
				'-1'    => esc_html__('Inherit','sntravel'),
				'left'  => esc_html__('Left','sntravel'),
				'right' => esc_html__('Right','sntravel'),
				'0'     => esc_html__('Disabled','sntravel'),
			];
			 
		} else {
			$options = [
				'left'  => esc_html__('Left','sntravel'),
				'right' => esc_html__('Right','sntravel'),
				'0'     => esc_html__('Disabled','sntravel'),
			]; 
		}  
		$opts = array(
	        array(
	            'id'       => $args['prefix'].'sidebar_pos',
	            'type'     => 'button_set',
	            'title'    => esc_html__('Sidebar Position', 'sntravel'),
	            'subtitle' => esc_html__('Select a sidebar position is displayed.', 'sntravel'),
	            'options'  => $options,
	            'default'  => $args['default_value'],
	        ),
	    );
 
		return $opts;
	}
}


//* Get list menu
function basilico_get_nav_menu_slug(){

    $menus = array(
        '-1' => esc_html__('Inherit', 'sntravel')
    );

    $obj_menus = wp_get_nav_menus();

    foreach ($obj_menus as $obj_menu){
        $menus[$obj_menu->slug] = $obj_menu->name;
    }
    return $menus;
}

//* Shop Wishlist
function basilico_product_single_opts_wishlist(){
    $arr = [];
    if(class_exists('WPCleverWoosw'))
        $arr[] = array(
            'id'       => 'product_wishlist',
            'title'    => esc_html__('Show Wishlist', 'sntravel'),
            'type'     => 'switch',
            'default'  => '1',
        );
    return $arr;
}