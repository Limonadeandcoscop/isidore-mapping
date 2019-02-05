<?php

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Isidore_Mapping
 * @subpackage Isidore_Mapping/includes
 * @author     Limonade&Co <technique@limoandeandco.fr>
 */
class Isidore_Mapping_Activator {

	/**
	 * Create plugin table
	 *
	 * Add the table {wordpress_prefix}_isidore_mapping in database to store user mapping
	 *
	 * @since    1.0.0
	 */
	public static function activate() {

 		global $wpdb;
    	$table_name = $wpdb->prefix . 'isidore_mapping';
        $charset_collate = $wpdb->get_charset_collate();

    	if ( $wpdb->get_var( "SHOW TABLES LIKE '{$table_name}'" ) != $table_name ) {

        	$sql = "CREATE TABLE $table_name (
            		id mediumint(9) NOT NULL AUTO_INCREMENT,
                    post_type varchar(50) NOT NULL,
                    mapping text NOT NULL,
                    PRIMARY KEY  (id)
                ) $charset_collate;";

        	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        	dbDelta( $sql );
	    }
	}

}
