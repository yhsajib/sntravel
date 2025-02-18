<?php
/**
 * Custom post types register.
 * @since   1.0
 * @author PixelArt Team
 *
 */

class SNTRAVEL_CPT_Register
{
    /**
     * Core singleton class
     *
     * @var self - pattern realization
     * @access private
     */
    private static $_instance;

    /**
     * Store supported post types in an array
     * @var array
     * @access private
     */
    private $post_types = array();

    private $post_type = '';

    /**
     * Constructor
     *
     * @access private
     */
    private function __construct()
    {
        add_action('init', array($this, 'init'), 0);
        add_action('init', array($this, 'sntravel_featured_handlers'));
        add_action('admin_menu', array($this, 'sntravel_remove_post_custom_fields'),99);
 
        /*add "type" column for sntravel-template post type*/
        add_filter('manage_sntravel-template_posts_columns', function($columns) {
            return array_merge($columns, ['template_type' => esc_html__('Type', SNTRAVEL_TEXT_DOMAIN)]);
        }); 
        add_action('manage_sntravel-template_posts_custom_column', function($column_key, $post_id) {
            if ($column_key == 'template_type') {
                $type = get_post_meta($post_id, 'template_type', true);
                $type_dp = ucfirst(str_replace('-', ' ', $type));
                echo '<span>'; echo $type_dp; echo '</span>';
            }
        }, 10, 2);
         
        add_filter( 'manage_edit-sntravel-template_sortable_columns', array($this, 'sort_by_template_type_meta'), 10, 1 );

    }
    function sort_by_template_type_meta( $columns ) {
        $columns['template_type'] = 'template_type';
        return $columns;
    }
      
    function init()
    {
        $cpt_default = $this->sntravel_default_post_type();
        $post_types_extra = apply_filters('sntravel_extra_post_types', array());
        $this->post_types = array_merge($cpt_default, $post_types_extra);
        if(empty($this->post_types)) return;
        foreach ($this->post_types as $key => $post_type_support) {
            if ($post_type_support['status'] === true):
                $post_type_support_args = !empty($post_type_support['args']) ? $post_type_support['args'] : array();
                $post_type_support_labels = !empty($post_type_support['labels']) ? $post_type_support['labels'] : array();
                $args = array_merge(array(
                    'labels' => array_merge(array(
                        'name'                  => $post_type_support['item_name'],
                        'singular_name'         => $post_type_support['item_name'],
                        'add_new'               => _x('Add New', 'add new on admin panel', SNTRAVEL_TEXT_DOMAIN),
                        'add_new_item'          => __('Add New', SNTRAVEL_TEXT_DOMAIN) . ' ' . $post_type_support['item_name'],
                        'edit_item'             => __('Edit', SNTRAVEL_TEXT_DOMAIN) . ' ' . $post_type_support['item_name'],
                        'new_item'              => __('New', SNTRAVEL_TEXT_DOMAIN) . ' ' . $post_type_support['item_name'],
                        'view_item'             => __('View', SNTRAVEL_TEXT_DOMAIN) . ' ' . $post_type_support['item_name'],
                        'view_items'            => __('View', SNTRAVEL_TEXT_DOMAIN) . ' ' . $post_type_support['items_name'],
                        'search_items'          => __('Search', SNTRAVEL_TEXT_DOMAIN) . ' ' . $post_type_support['items_name'],
                        'not_found'             => __('No', SNTRAVEL_TEXT_DOMAIN) . ' ' . $post_type_support['items_name'] . ' ' . __('Found', SNTRAVEL_TEXT_DOMAIN),
                        'not_found_in_trash'    => __('No', SNTRAVEL_TEXT_DOMAIN) . ' ' . $post_type_support['items_name'] . ' ' . __('Found in Trash', SNTRAVEL_TEXT_DOMAIN),
                        'parent_item_colon'     => __('Parent', SNTRAVEL_TEXT_DOMAIN) . ' ' . $post_type_support['item_name'] . ':',
                        'all_items'             => __('All', SNTRAVEL_TEXT_DOMAIN) . ' ' . $post_type_support['items_name'],
                        'archives'              => $post_type_support['item_name'] . ' ' . __('Archives', SNTRAVEL_TEXT_DOMAIN),
                        'attributes'            => $post_type_support['item_name'] . ' ' . __('Entry Attributes', SNTRAVEL_TEXT_DOMAIN),
                        'uploaded_to_this_item' => __('Uploaded to this', SNTRAVEL_TEXT_DOMAIN) . ' ' . $post_type_support['item_name'],
                        'menu_name'             => $post_type_support['item_name'],
                        'filter_items_list'     => __('Filter', SNTRAVEL_TEXT_DOMAIN) . ' ' . $post_type_support['item_name'] . ' ' . __('list', SNTRAVEL_TEXT_DOMAIN),
                        'items_list_navigation' => $post_type_support['item_name'] . ' ' . __('list navigation', SNTRAVEL_TEXT_DOMAIN),
                        'items_list'            => $post_type_support['item_name'] . ' ' . __('list', SNTRAVEL_TEXT_DOMAIN),
                        'name_admin_bar'        => $post_type_support['item_name']
                    ), $post_type_support_labels),
                    'hierarchical'        => false,
                    'description'         => '',
                    'public'              => true,
                    'show_ui'             => true,
                    'show_in_menu'        => true,
                    'show_in_admin_bar'   => true,
                    'menu_position'       => null,
                    'menu_icon'           => 'dashicons-portfolio',
                    'show_in_nav_menus'   => true,
                    'publicly_queryable'  => true,
                    'exclude_from_search' => false,
                    'has_archive'         => true,
                    'query_var'           => true,
                    'can_export'          => true,
                    'capability_type'     => 'post',
                    'supports'            => array(
                        'title',
                        'editor',
                        'thumbnail',
                        'excerpt',
                        'revisions',
                        'author'
                    )
                ), $post_type_support_args);
                register_post_type($key, $args);
                flush_rewrite_rules();
                $this->post_type = $key;
                if (isset($post_type_support['post_featured']) && $post_type_support['post_featured'] === true) {
                    add_filter('manage_' . $key . '_posts_columns', array($this, 'sntravel_add_column_featured'));
                    add_filter('manage_' . $key . '_posts_custom_column', array($this, 'sntravel_add_content_featured_column'), 10, 2);
                }

            endif;
        }
    }
    
    function sntravel_default_post_type(){
        $postypes_default = [];
        $cpt_defaults = apply_filters( 'sntravel_support_default_cpt', ['sntravel-template'] );
        
        if( in_array('sntravel-template', $cpt_defaults) ){
            $postypes_default['sntravel-template'] = [
                'status'     => true,
                'item_name'  => esc_html__( 'Pxl Templates - Builder', SNTRAVEL_TEXT_DOMAIN ),
                'items_name' => esc_html__( 'Pxl Templates - Builder', SNTRAVEL_TEXT_DOMAIN ),
                'args'       => array(
                    'menu_icon'          => 'dashicons-align-center',
                    'supports'           => array(
                        'title',
                        'editor',
                    ),
                    'public'             => true,
                    'publicly_queryable' => true,
                    'show_in_menu'      => false,
                    'show_in_nav_menus'   => false,
                    'has_archive'         => false,
                    'exclude_from_search' => true,
                ),
                'labels'     => array()
            ];
        } 
        return $postypes_default; 

    }

    function sntravel_remove_post_custom_fields()
    {
        remove_meta_box('postcustom', 'page', 'normal');
        remove_meta_box('postcustom', 'page', 'side');
        remove_meta_box('postcustom', 'page', 'advanced');
    }

    /**
     * Registers portfolio post type, this function should be called in an init hook function.
     * @uses $wp_post_types Inserts new post type object into the list
     *
     * @access protected
     */
    protected function type_portfolio_register() {
    }
 
    public function sntravel_add_column_featured($defaults)
    {
        $defaults['post_featured'] = esc_html__('Featured', SNTRAVEL_TEXT_DOMAIN);
        return $defaults;
    }

    public function sntravel_add_content_featured_column($colum_name, $post_id)
    {
        if ($colum_name === "post_featured") {
            $pt = get_post_type($post_id);
            if ($pt !== false) {
                $href = admin_url("edit.php?post_type=" . $pt);
                $meta_featured = get_post_meta($post_id, 'sntravel_post_featured', true);
                if ($meta_featured === "featured") {
                    echo '<a href="' . $href . '&sntravel_post_id=' . $post_id . '"><span class="fs-show-featured dashicons dashicons-star-filled"></span></a>';
                } else {
                    echo '<a href="' . $href . '&sntravel_post_id=' . $post_id . '"><span class="fs-show-featured dashicons dashicons-star-empty"></span></a>';
                }
            }
        }
    }

    public function sntravel_featured_handlers()
    {
        if (!empty($_REQUEST['sntravel_post_id']) && get_post(intval($_REQUEST['sntravel_post_id'])) !== null) {
            $pid = intval($_REQUEST['sntravel_post_id']);
            $featured_meta = get_post_meta($pid, 'sntravel_post_featured', true);
            if ($featured_meta === "featured") {
                update_post_meta($pid, 'sntravel_post_featured', '');
            } else {
                update_post_meta($pid, 'sntravel_post_featured', 'featured');
            }
            $pt = get_post_type($pid);
            if ($pt !== false) {
                wp_redirect(admin_url("edit.php?post_type=" . $pt));
            }
        }
    }
 
    /**
     * Get instance of the class
     *
     * @access public
     * @return object this
     */
    public static function get_instance()
    {
        if (!(self::$_instance instanceof self)) {
            self::$_instance = new self();
        }

        return self::$_instance;
    }
}

SNTRAVEL_CPT_Register::get_instance();
