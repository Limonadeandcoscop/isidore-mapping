<?php include "../../../../../wp-load.php"; ?>

<?php $post_type = $_GET['post_type']; ?>

<?php 
    $class_isidore_mapping = new Isidore_Mapping(); 
    $mapping = $class_isidore_mapping->get_available_fields($post_type);
    $post_type_label = $mapping[$post_type]['_label'];
?>

<h1>"<?php echo $post_type_label ?>"<?php _e(' mapping', 'isidore-mapping') ?></h1>

<pre>
<?php print_r($mapping); ?>