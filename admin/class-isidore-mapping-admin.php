<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Isidore_Mapping
 * @subpackage Isidore_Mapping/admin
 * @author     Limonade&Co <technique@limoandeandco.fr>
 */
class Isidore_Mapping_Admin {


	/**
	 * The ID of this plugin.
	 *
	 * @since  1.0.0
	 * @access private
	 * @var    string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since  1.0.0
	 * @access private
	 * @var    string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since 1.0.0
	 * @param string $plugin_name The name of this plugin.
	 * @param string $version     The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version     = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since 1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Isidore_Mapping_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Isidore_Mapping_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/isidore-mapping-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since 1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/plugin-name-admin.js', array( 'jquery' ), $this->version, false );

	}


	/**
	 * Add Isidore Mapping posts types link & page in admin area
	 *
	 * @since 1.0.0
	 */
	function add_isidore_mapping_admin_link(){

		/**
		 * This function add the link in WP admin and enable the Isidore Mapping admin page
		 *
		 */

		add_menu_page('Isidore mapping', 'Isidore mapping', 'manage_options', 'isidore-mapping-posts-types-list', array($this, 'isidore_admin_page') );

	}


	/**
	 * Manage the Isidore Mapping posts types list page
	 *
	 * @since 1.0.0
	 */
	function isidore_admin_page(){
	   include plugins_url( 'isidore-mapping/admin/partials/isidore-mapping-posts-types-list.php' );
	}

}
