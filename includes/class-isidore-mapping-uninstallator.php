<?php

/**
 * Fired during plugin uninstallation.
 *
 * This class defines all code necessary to run during the plugin's uninstallation.
 *
 * @since      1.0.0
 * @package    Isidore_Mapping
 * @subpackage Isidore_Mapping/includes
 * @author     Limonade&Co <technique@limoandeandco.fr>
 */
class Isidore_Mapping_Uninstallator {

	/**
	 * Delete the plugin table
	 *
	 * Drop the {wordpress_prefix}_isidore_mapping table in database
	 *
	 * @since    1.0.0
	 */
	public static function uninstall() {

		global $wpdb;

		$table_name = $wpdb->prefix . "isidore_mapping"; 

		if ( $wpdb->get_var( "SHOW TABLES LIKE '{$table_name}'" ) == $table_name ) {

			require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
			dbDelta( "DROP TABLE ".$table_name );
		}
		
	}

}
