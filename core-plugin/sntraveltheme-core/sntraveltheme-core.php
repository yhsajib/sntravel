<?php
/**
 * Plugin Name: SNTRAVEL Theme Core
 * Description: Add many widgets, shortcodes and custom post types for your theme.
 * Plugin URI:  https://7iquid.com/
 * Version:     1.2.2
 * Author:      SNTRAVEL Team
 * Author URI:  https://themeforest.net/user/7iquid/portfolio
 * Update URI:  https://7iquid.com/
 * Text Domain: pixelart-core
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

use Elementor\Plugin;

define('SNTRAVEL_TEXT_DOMAIN', 'pixelart-core');
define('SNTRAVEL_PATH', plugin_dir_path(__FILE__));
define('SNTRAVEL_URL', plugin_dir_url(__FILE__));

class SntravelTheme_Core
{

    const VERSION = '1.2.2';

    const MINIMUM_ELEMENTOR_VERSION = '3.0.0';

    const MINIMUM_PHP_VERSION = '7.0';
    private static $_instance = null;
    public $post_metabox = null;
    public $taxonomy_meta = null;
    public $plugin_name = '';

    public function __construct()
    {
        if (!function_exists('get_plugin_data'))
            require_once(ABSPATH . 'wp-admin/includes/plugin.php');
        
        $this->includes();

        add_action('admin_init', [$this, 'sntravel_admin_init'], 10, 1);
        
        add_action('admin_enqueue_scripts', array($this, 'sntravel_admin_enqueue_scripts'));
        add_action('wp_enqueue_scripts', array($this, 'sntravel_register_script'), 4);
       
        add_action('plugins_loaded', [$this, 'sntravel_elementor']);

        add_action('init', [$this, 'sntravel_init']);

        add_action('admin_notices', [$this, 'activate_theme_notice'], 100);

        add_action('admin_bar_menu', [$this, 'register_admin_bar_menu']);
        add_action('admin_bar_menu', [$this, 'remove_from_admin_bar'], 999);

        add_action( 'redux/construct', [$this, 'sntravel_validate_redux_framework'] );

    }

    public function includes()
    {

        require_once(__DIR__ . '/inc/functions.php');
        require_once(__DIR__ . '/inc/elementor/el-functions.php');

        if (!class_exists('SNTRAVEL_CPT_Register')) {
            require_once SNTRAVEL_PATH . 'inc/post-type/cpt-register.php';
        }

        if (!class_exists('SNTRAVEL_CTax_Register')) {
            require_once SNTRAVEL_PATH . 'inc/post-type/ctax-register.php';
        }
        if (!class_exists('SNTRAVEL_MegaMenu_Register')) {
            require_once SNTRAVEL_PATH . 'inc/mega-menu/class-megamenu.php';
        }

    }

    public static function instance()
    {

        if (is_null(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;

    }

    function sntravel_admin_init(){
        $plugin_data = get_plugin_data(__FILE__);
        $this->plugin_name = $plugin_data['Name'];
        // import demo data 
        if (!class_exists('Pxl_Importer')) {
            require_once SNTRAVEL_PATH . 'src/core-importer/importer-handles.php';
        }
    }

    public function sntravel_init(){

        load_plugin_textdomain(SNTRAVEL_TEXT_DOMAIN, false, dirname(plugin_basename(__FILE__)) . '/languages');
 
        //update woo attribute after imported
        $woo_term_imported = get_option('sntravel_woo_term_imported', "null");
        if ($woo_term_imported === "not_imported" && !class_exists('SNTRAVEL_Woo_Attributes_Handle')) {
            require_once SNTRAVEL_PATH . 'src/core-importer/woo_attributes_handles.php';
        }
        //load_scss_lib
        $scssc_lib = apply_filters('sntravel_scssc_lib', 'old');
        $sntravel_scssc_on = apply_filters('sntravel_scssc_on', false);
        if ($sntravel_scssc_on && $scssc_lib === 'old' && !class_exists('scssc')) {
            require_once __DIR__ . '/src/scss.inc.php';
        }
        if ($sntravel_scssc_on && $scssc_lib === 'new' && !class_exists('\ScssPhp\ScssPhp\Compiler')) {
            require_once __DIR__ . '/src/scss/scss.inc.php';
        }

        //load_meta_redux_opt
        if (!class_exists('ReduxFramework')) {
            add_action('admin_notices', array($this, 'redux_framework_notice'));
        } else {
            if (!class_exists('SNTRAVEL_Post_Metabox')) {
                require_once SNTRAVEL_PATH . 'inc/meta-box/class-post-metabox.php';

                if (empty($this->post_metabox)) {
                    $this->post_metabox = new SNTRAVEL_Post_Metabox();
                }
            }
            if (!class_exists('SNTRAVEL_Taxonomy_Meta')) {
                require_once SNTRAVEL_PATH . 'inc/meta-box/class-taxonomy-meta.php';

                if (empty($this->taxonomy_meta)) {
                    $this->taxonomy_meta = new SNTRAVEL_Taxonomy_Meta();
                }
            }
        }

    }

    public function sntravel_elementor()
    {
        if (class_exists('ReduxFramework') && !class_exists('SNTRAVEL_Redux_Extensions')) {
            require_once SNTRAVEL_PATH . 'inc/redux-fields/redux-fields.php';
        }

        if (!did_action('elementor/loaded')) {
            add_action('admin_notices', [$this, 'admin_notice_missing_main_plugin']);
            return;
        }

        // Check for required Elementor version
        if (!version_compare(ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=')) {
            add_action('admin_notices', [$this, 'admin_notice_minimum_elementor_version']);
            return;
        }

        // Check for required PHP version
        if (version_compare(PHP_VERSION, self::MINIMUM_PHP_VERSION, '<')) {
            add_action('admin_notices', [$this, 'admin_notice_minimum_php_version']);
            return;
        }

        if ( is_admin() && class_exists('\Elementor\Plugin')) {
            require_once SNTRAVEL_PATH . 'inc/elementor/theme-builder/class-admin.php';
        }

        if (defined('ELEMENTOR_VERSION') && is_callable('Elementor\Plugin::instance')) {
            include_once SNTRAVEL_PATH . 'inc/elementor/sntravel-elementor.php';
        }

        if ( class_exists('\Elementor\Plugin') ) {
            include_once SNTRAVEL_PATH . 'inc/elementor/template-library/manager.php';
        }

    }


    public function sntravel_admin_enqueue_scripts()
    {
        wp_enqueue_style('sntravel-admin-css', SNTRAVEL_URL . 'assets/css/admin.css', [], '1.0.0');
    }

    public function sntravel_register_script()
    {
        $awesome_pro_support = apply_filters('sntravel_support_awesome_pro', false);
        /* Styles */
        wp_enqueue_style('sntravel-main-css', SNTRAVEL_URL . 'assets/css/main.css', [], '1.0.0');
        if ($awesome_pro_support){
            wp_register_style('font-awesome-pro', SNTRAVEL_URL . 'assets/libs/font-awesome-pro/css/all.min.css', [], '6.0.0-pro');
        }
        wp_register_script('sntravel-timepicker', SNTRAVEL_URL . '/assets/js/libs/jquery.timepicker.min.js', array( 'jquery' ), '1.0', true);

        /* Scripts */
        wp_register_script('waypoints', SNTRAVEL_URL . 'assets/js/libs/waypoints.min.js', ['jquery'], '2.0.5');
        wp_register_script('imagesloaded', SNTRAVEL_URL . 'assets/js/libs/imagesloaded.pkgd.min.js', ['jquery'], '3.1.8');
        wp_register_script('isotope', SNTRAVEL_URL . 'assets/js/libs/isotope.pkgd.min.js', ['jquery'], '3.0.6');
        wp_register_script('sntravel-counter', SNTRAVEL_URL . 'assets/js/libs/counter.min.js', [ 'jquery' ], '');
        wp_register_script('sntravel-progressbar', SNTRAVEL_URL . 'assets/js/libs/progressbar.min.js', ['jquery'], '0.7.1');
        wp_register_style('sntravel-timepicker', SNTRAVEL_URL . '/assets/css/jquery.timepicker.min.css');
        
        $core_main_support = apply_filters('sntravel_support_js_core_main', true);
        if ($core_main_support){
            wp_enqueue_script('sntravel-core-main', SNTRAVEL_URL . 'assets/js/main.js', [ 'jquery','waypoints' ], '1.0.0', true);
        }
        /*if (defined('ELEMENTOR_VERSION') && is_callable('Elementor\Plugin::instance')) {
            $el_otim_ass_loading = Plugin::$instance->experiments->is_feature_active('e_optimized_assets_loading');
            if ($el_otim_ass_loading)
                wp_register_script('swiper', SNTRAVEL_URL . 'assets/js/libs/swiper.min.js', [], '5.3.6');
        } else {
            wp_register_script('swiper', SNTRAVEL_URL . 'assets/js/libs/swiper.min.js', [], '5.3.6');
        }*/
        $swiper_version = apply_filters( 'sntravel-swiper-version-active', '5.3.6' );

        switch ($swiper_version) {
            case '8.4.5':
                wp_register_style('swiper', SNTRAVEL_URL . 'assets/js/libs/swiper/v8/css/swiper.min.css', [], '8.4.5');
                wp_register_script('swiper', SNTRAVEL_URL . 'assets/js/libs/swiper/v8/swiper.min.js', [], '8.4.5');
                break;
            case '10.3.0':
                wp_register_style('swiper', SNTRAVEL_URL . 'assets/js/libs/swiper/v10/css/swiper.min.css', [], '10.3.0');
                wp_register_script('swiper', SNTRAVEL_URL . 'assets/js/libs/swiper/v10/swiper.min.js', [], '10.3.0');
                break;
            case '11.0.6':
                wp_register_style('swiper', SNTRAVEL_URL . 'assets/js/libs/swiper/v11/css/swiper.min.css', [], '11.0.6');
                wp_register_script('swiper', SNTRAVEL_URL . 'assets/js/libs/swiper/v11/swiper.min.js', [], '11.0.6');
                break;
            default:
                wp_register_style('swiper', SNTRAVEL_URL . 'assets/js/libs/swiper/css/swiper.min.css', [], '5.3.6');
                wp_register_script('swiper', SNTRAVEL_URL . 'assets/js/libs/swiper/swiper.min.js', [], '5.3.6');
                break;
        }
    }
  
    public function activate_theme_notice()
    {

        if (did_action('sntraveltheme_init') > 0) {
            return;
        }
        ?>
        <div class="updated not-h2">
            <p>
                <strong><?php echo sprintf(esc_html__('Please activate the right theme to use "%1$s" plugin.', SNTRAVEL_TEXT_DOMAIN), $this->plugin_name); ?></strong>
            </p>
            <?php
            $screen = get_current_screen();
            if ($screen->base != 'themes'):
                ?>
                <p>
                    <a href="<?php echo esc_url(admin_url('themes.php')); ?>"><?php esc_html_e('Activate theme', SNTRAVEL_TEXT_DOMAIN); ?></a>
                </p>
            <?php endif; ?>
        </div>
        <?php
    }

    public function register_admin_bar_menu($wp_admin_bar)
    {

        $theme = wp_get_theme();
        $site_name = (string) get_option( 'blogname' );
        if( empty( $site_name ))
            $site_name = $theme->get("Name");

        $wp_admin_bar->add_node([
            'id' => $theme->get("TextDomain"),
            'title' => '<span class="ab-icon dashicons-smiley"></span>' . $site_name,
            'href' => is_admin() ? home_url('/') : admin_url('admin.php?page=sntravelart'),
            'meta' => array(
                'class' => 'dashicons dashicons-admin-generic',
                'title' => $theme->get("TextDomain"),
            )
        ]);

        $wp_admin_bar->add_node([
            'id' => 'sntravelart-visit-site',
            'title' => esc_html__('Visit Site', SNTRAVEL_TEXT_DOMAIN),
            'href' => home_url('/'),
            'parent' => $theme->get("TextDomain"),
            'meta' => array(
                'class' => '',
                'title' => esc_html__('Visit Site', SNTRAVEL_TEXT_DOMAIN),
            )
        ]);

        $wp_admin_bar->add_node([
            'id' => 'sntravelart-dashboard',
            'title' => esc_html__('Dashboard', SNTRAVEL_TEXT_DOMAIN),
            'href' => admin_url('admin.php?page=sntravelart'),
            'parent' => $theme->get("TextDomain"),
            'meta' => array(
                'class' => '',
                'title' => esc_html__('Dashboard', SNTRAVEL_TEXT_DOMAIN),
            )
        ]);

        if (class_exists('ReduxFramework')) {
            $wp_admin_bar->add_node([
                'id' => 'theme-options',
                'title' => 'Theme Options',
                'href' => admin_url('admin.php?page=sntravelart-theme-options'),
                'parent' => $theme->get("TextDomain"),
                'meta' => array(
                    'class' => '',
                    'title' => esc_html__('Theme Options', SNTRAVEL_TEXT_DOMAIN),
                )
            ]);
        }
        $wp_admin_bar->add_node([
            'id' => 'sntravel-themes',
            'title' => esc_html__('Themes', SNTRAVEL_TEXT_DOMAIN),
            'href' => admin_url('themes.php'),
            'parent' => $theme->get("TextDomain"),
            'meta' => array(
                'class' => '',
                'title' => esc_html__('Themes', SNTRAVEL_TEXT_DOMAIN),
            )
        ]);
        $wp_admin_bar->add_node([
            'id' => 'sntravel-widgets',
            'title' => esc_html__('Widgets', SNTRAVEL_TEXT_DOMAIN),
            'href' => admin_url('widgets.php'),
            'parent' => $theme->get("TextDomain"),
            'meta' => array(
                'class' => '',
                'title' => esc_html__('Widgets', SNTRAVEL_TEXT_DOMAIN),
            )
        ]);
        $wp_admin_bar->add_node([
            'id' => 'sntravel-menus',
            'title' => esc_html__('Menus', SNTRAVEL_TEXT_DOMAIN),
            'href' => admin_url('nav-menus.php'),
            'parent' => $theme->get("TextDomain"),
            'meta' => array(
                'class' => '',
                'title' => esc_html__('Menus', SNTRAVEL_TEXT_DOMAIN),
            )
        ]);

    }

    public function remove_from_admin_bar($wp_admin_bar)
    {
        $wp_admin_bar->remove_node('site-name');
        do_action( 'sntravel_remove_from_admin_bar', $wp_admin_bar );
    }


    public function admin_notice_missing_main_plugin()
    {

        if (isset($_GET['activate'])) unset($_GET['activate']);

        $message = sprintf(
            esc_html__('"%1$s" requires "%2$s" to be installed and activated.', SNTRAVEL_TEXT_DOMAIN),
            '<strong>' . $this->plugin_name . '</strong>',
            '<strong>' . esc_html__('Elementor Plugin', SNTRAVEL_TEXT_DOMAIN) . '</strong>'
        );

        printf('<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message);

    }

    public function admin_notice_minimum_elementor_version()
    {

        if (isset($_GET['activate'])) unset($_GET['activate']);

        $message = sprintf(
            esc_html__('"%1$s" requires "%2$s" version %3$s or greater.', SNTRAVEL_TEXT_DOMAIN),
            '<strong>' . $this->plugin_name . '</strong>',
            '<strong>' . esc_html__('Elementor Plugin', SNTRAVEL_TEXT_DOMAIN) . '</strong>',
            self::MINIMUM_ELEMENTOR_VERSION
        );

        printf('<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message);

    }

    public function admin_notice_minimum_php_version()
    {

        if (isset($_GET['activate'])) unset($_GET['activate']);

        $message = sprintf(
            esc_html__('"%1$s" requires "%2$s" version %3$s or greater.', SNTRAVEL_TEXT_DOMAIN),
            '<strong>' . $this->plugin_name . '</strong>',
            '<strong>' . esc_html__('PHP', SNTRAVEL_TEXT_DOMAIN) . '</strong>',
            self::MINIMUM_PHP_VERSION
        );

        printf('<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message);

    }

    function redux_framework_notice()
    {
        $plugin_name = '<strong>' . $this->plugin_name . '</strong>';
        $redux_name = '<strong>' . esc_html__("Redux Framework", SNTRAVEL_TEXT_DOMAIN) . '</strong>';

        echo '<div class="notice notice-warning is-dismissible">';
        echo '<p>';
        printf(
            esc_html__('%1$s require %2$s installed and activated. Please active %3$s plugin', SNTRAVEL_TEXT_DOMAIN),
            $plugin_name,
            $redux_name,
            $redux_name
        );
        echo '</p>';
        printf('<button type="button" class="notice-dismiss"><span class="screen-reader-text">%s</span></button>', esc_html__('Dismiss this notice.', SNTRAVEL_TEXT_DOMAIN));
        echo '</div>';
    }

    public function sntravel_validate_redux_framework($redux){
        $redux->filesystem = Redux_Filesystem::get_instance( $redux );
    }

}

function pixelart()
{
    return SntravelTheme_Core::instance();
}

// Install
pixelart();

SntravelTheme_Core::instance();