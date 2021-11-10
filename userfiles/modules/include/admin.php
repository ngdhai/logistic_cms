<?php must_have_access(); ?>

<?php
$from_live_edit = false;
if (isset($params["live_edit"]) and $params["live_edit"]) {
    $from_live_edit = $params["live_edit"];
}
?>

<?php if (isset($params['backend'])): ?>
    <module type="admin/modules/info"/>
<?php endif; ?>

<div class="card style-1 mb-3 <?php if ($from_live_edit): ?>card-in-live-edit<?php endif; ?>">
    <div class="card-header">
        <module type="admin/modules/info_module_title" for-module="<?php print $params['module'] ?>"/>
    </div>

    <div class="card-body pt-3">
        <?php $file = get_option('file', $params['id']); ?>
        <div class="form-group">
            <label class="control-label"><?php _lang('Include file', "modules/include"); ?></label>
            <input type="text" value="<?php print $file; ?>" name="file" class="mw_option_field form-control" id="file"/>
        </div>
    </div>
</div>
