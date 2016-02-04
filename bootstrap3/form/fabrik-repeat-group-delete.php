<?php
/**
 * Repeat group delete button
 */

defined('JPATH_BASE') or die;

$d = $displayData;
?>
<a class="deleteGroup btn btn-small btn-danger" href="#"  data-toggle="tooltip" title="<?php echo FText::_('COM_FABRIK_DELETE_GROUP');?>">
	<?php echo FabrikHelperHTML::icon('icon-minus', '', 'data-role="fabrik_delete_group"'); ?>
</a>