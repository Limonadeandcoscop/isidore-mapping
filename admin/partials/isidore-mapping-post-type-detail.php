<?php include "../../../../../wp-load.php"; ?>

<h1><?php _e('post type mapping', 'isidore-mapping') ?></h1>


<?php

	$accepted_posts_types = array('post', 'page');

	$native_post_fields = array('post_author' 	=> 'Author',
								'post_date' 	=> 'Creation date', 
								'post_modified' => 'Modification date', 
								'post_content' 	=> 'Content', 
								'post_title' 	=> 'Title', 
								'post_excerpt' 	=> 'Excerpt', 
								'post_type' 	=> 'Type', 
								'post_status' 	=> 'Status', 
								'permalink' 	=> 'Permalink' 
							);
    
    $post_types = get_post_types( $args ); 

    foreach ( $post_types  as $post_type ) {

    	if ( in_array( $post_type, $accepted_posts_types)) {

    		echo '<strong>' . $post_type . '</strong><br>';

    		// Native

    		foreach ( $native_post_fields as $field ) {
    			echo _e($field, 'isidore-mapping');
    			echo '<br>';
    		}

    		// ACF
    		$groups = acf_get_field_groups(array('post_type' => $post_type));

    		foreach( $groups as $group ) {

    			$fields = acf_get_fields($group['ID']);

				foreach( $fields as $field ) {
					echo ' - '.$field['name'];
					echo '<br>';
				}
    			
    		}
   		}
    }

 ?>


/*
Site Title	
Tagline	
Site Address (URL)	
Administrator e-mail
kyfr59@gmail.com
Site Language
*/

