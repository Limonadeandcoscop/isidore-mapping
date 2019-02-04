<?php include "../../../../../wp-load.php"; ?>

<h1><?php _e('Posts types list', 'isidore-mapping') ?></h1>

<?php $accepted_native_posts_types = array('post' => 'Post', 'page' => 'Page'); ?>

<table class="wp-list-table widefat fixed striped posts">
    <?php foreach ($accepted_native_posts_types as $key => $label): ?>
        <tr>
            <td><a class="row-title" href="<?php echo admin_url("admin.php?page=isidore-mapping-post-type-detail&post_type=".$key) ?>"><?php echo _e($label) ?></a></td>
        </tr>
    <?php endforeach; ?>
</table>    


