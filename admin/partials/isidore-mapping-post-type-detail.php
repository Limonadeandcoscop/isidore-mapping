<?php include "../../../../../wp-load.php"; ?>

<?php $post_type = $_GET['post_type']; ?>

<?php 
    $class_isidore_mapping = new Isidore_Mapping(); 
    $mapping    = $class_isidore_mapping->get_available_fields($post_type);
    $metas      =  $class_isidore_mapping->get_metas();
?>

<h1>"<?php echo $mapping[$post_type]['_label'] ?>"<?php _e(' mapping', 'isidore-mapping') ?></h1>

<?php
$options  = '<option value=""></option>';
foreach( $mapping as $key => $map ) {
    $options .=  '<optgroup label="'.$map['_label'].'">';
    unset($map['_label']);
    foreach( $map as $k =>  $m ) {
        $options .= '<option value="'.$k.'">'.$m.'</option>';
    }
    $options .= '</optgroup>';
}
?>


<form action="http://local/vitae/wp-admin/admin.php?page=isidore-mapping-posts-types-list" method="post">
    <input type="text" name="post_type" value="<?php echo $post_type ?>" />
    <?php foreach( $metas as $dictionary => $meta ): ?>
        <?php foreach( $meta as $term => $label ): ?>
            <?php echo $dictionary ?>:<?php echo $label ?>
            <select name="select_<?php echo $dictionary ?>_<?php echo $term ?>">
                <?php echo $options ?>
            </select>
            <br />
        <?php endforeach; ?>
    <?php endforeach; ?>
    <input type="submit" value="<?php _e('Save', 'isidore-mapping') ?>">
</form>
