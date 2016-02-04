<?php
/**
 * Repeat group add button
 */

defined('JPATH_BASE') or die;

$d = $displayData;
?>
<a class="addGroup btn btn-small btn-success" href="#" data-toggle="tooltip" title="<?php echo FText::_('COM_FABRIK_ADD_GROUP');?>">
	<?php echo  FabrikHelperHTML::icon('icon-plus', '', 'data-role="fabrik_duplicate_group"');?>
</a>

