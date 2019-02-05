<?php include "../../../../../wp-load.php"; ?>

<?php
    $post_type = $_GET['post_type'];
    $class_isidore_mapping = new Isidore_Mapping();
    $availables_fields    = $class_isidore_mapping->get_available_fields($post_type);
    $metas      = $class_isidore_mapping->get_mapping($post_type);
?>

<h1>"<?php echo $availables_fields[$post_type]['_label'] ?>"<?php _e(' mapping', 'isidore-mapping') ?></h1>

<form action="<?php echo admin_url("admin.php?page=isidore-mapping-posts-types-list") ?>" method="post">
    <input type="hidden" name="post_type" value="<?php echo $post_type ?>" />
    <?php foreach( $metas as $dictionary => $meta ): ?>
        <?php foreach( $meta as $term => $label ): ?>
            <?php echo $dictionary; ?>:<?php echo $label['label']; ?>
            <select name="<?php echo $dictionary ?>_<?php echo $term ?>">
                <?php echo get_options($label['checked']) ?>
            </select>
            <br />
        <?php endforeach; ?>
    <?php endforeach; ?>
    <input type="submit" value="<?php _e('Save', 'isidore-mapping') ?>">
</form>


<?php
function get_options($checked) {

    global $availables_fields;

    $selected[$checked] = "selected=selected";

    $options  = '<option value=""></option>';
    foreach( $availables_fields as $key => $map ) {
        $options .=  '<optgroup label="'.$map['_label'].'">';
        unset($map['_label']);
        foreach( $map as $k =>  $m ) {
            $options .= '<option '.$selected[$k].' value="'.$k.'">'.$m.'</option>';
        }
        $options .= '</optgroup>';
    }
    return $options;
}
