<?php

/**
 * The plugin bootstrap file
 *
 * @package Isidore_Mapping
 *
 * @isidore-mapping
 * Plugin Name:     Isidore Mapping
 * Description:     Provide the ability to map pages, posts and custom types fields for Huma-Num Isidore platform
 * Version:         1.0.0
 * Author:          Limonade&Co <technique@limoandeandco.fr>
 * License:         GPL-2.0+
 * License URI:     http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:     isidore-mapping
 * Domain Path:     /languages
 */


// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 */
define( 'PLUGIN_NAME_VERSION', '1.0.0' );


/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-isidore-mapping.php';

/**
 * Begins execution of the plugin.
 */
function run_isidore_mapping() {
	$plugin = new Isidore_Mapping();
	$plugin->run();

}
run_isidore_mapping();


