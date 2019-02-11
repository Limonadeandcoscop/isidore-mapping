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

<form action="<?php echo admin_url("admin.php?page=isidore-mapping-posts-types-list") ?>" method="post" id="display-panel-form">
	<?php $panel_is_displayed = get_option('isidore_mapping_display_panel') ?>
	<?php $label = !$panel_is_displayed ? __("Display debug panel on frontoffice") : __("Hide debug panel on frontoffice"); ?>
	<input type="hidden" name="display_panel" value="<?php echo $panel_is_displayed == 0 ? 1 : 0 ?>" />
	<input type="submit" value="<?php echo $label ?>" />
</form>