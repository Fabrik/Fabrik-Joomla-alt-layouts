<?php
/**
 * Repeat group delete button for table format
 */

defined('JPATH_BASE') or die;

$d = $displayData;
?>
<a class="deleteGroup" href="#">
	<?php echo FabrikHelperHTML::icon('icon-minus fabrikTip tip-small', '', 'opts="{trigger: \'hover\'}" title="' . FText::_('COM_FABRIK_DELETE_GROUP'). '"'); ?>
</a>