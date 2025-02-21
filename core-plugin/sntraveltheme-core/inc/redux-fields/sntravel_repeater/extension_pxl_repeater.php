<?php
 

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'SNTRAVEL_Redux_Fields_sntravel_repeater' ) ) {


	/**
	 * Main ReduxFramework css_layout extension class
	 *
	 * @since       1.0.0
	 */
	class SNTRAVEL_Redux_Fields_sntravel_repeater {
 
		// Protected vars
		protected     $parent;
		public        $extension_url;
		//public        $extension_dir;
		public static $theInstance;
		//public        $field_id   = '';
		//private       $class_css  = '';
		public $is_field = false;
		public static $version = '1.0.4';
		public        $field_name = 'repeater';

		/**
		 * Class Constructor. Defines the args for the extions class
		 *
		 * @since       1.0.0
		 * @access      public
		 *
		 * @param       array $parent Parent settings.
		 *
		 */
		public function __construct( $parent ) {

			$this->parent = $parent;
           
            self::$theInstance = $this;

            $this->is_field = Redux_Helpers::is_field_in_use($parent, $this->field_name);

            add_filter('redux/' . $this->parent->args['opt_name'] . '/field/class/' . $this->field_name, array(
                &$this,
                'overload_field_path'
            ));


			/*$Redux_ver = ReduxFramework::$_version;

			// Set parent object
			$this->parent = $parent;

			// Set extension dir
			if ( empty( $this->extension_dir ) ) {
				$this->extension_dir = trailingslashit( str_replace( '\\', '/', dirname( __FILE__ ) ) );
			}

			// Set instance
			self::$theInstance = $this;

			// Adds the local field
			add_filter( 'redux/' . $this->parent->args['opt_name'] . '/field/class/' . $this->field_name, array(
				&$this,
				'overload_field_path',
			) );*/
		}

		static public function getInstance() {
			return self::$theInstance;
		}

		public function overload_field_path($field) {
            return dirname(__FILE__) . '/inc/field_' . $this->field_name . '.php';
        }

		// Forces the use of the embeded field path vs what the core typically would use
		/*public function overload_field_path( $field ) {
			return dirname( __FILE__ ) . '/' . $this->field_name . '/field_' . $this->field_name . '.php';
		}*/

	} // class
} // if
