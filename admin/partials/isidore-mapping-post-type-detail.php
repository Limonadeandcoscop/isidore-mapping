<?php include "../../../../../wp-load.php"; ?>

<h1>"<?php echo $_GET['post_type'] ?>"<?php _e(' mapping', 'isidore-mapping') ?></h1>

<?php 
$class_isidore_mapping = new Isidore_Mapping(); 
$mapping = $class_isidore_mapping->get_available_fields($_GET['post_type']);
?>

