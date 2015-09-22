<?php
/**
 * Default list element render
 * Override this file in plugins/fabrik_element/{plugin}/layouts/fabrik-element-{plugin}-list.php
 */

defined('JPATH_BASE') or die;

$d = $displayData;
$props = isset($d->properties) ? $d->properties : '';

$test = str_replace('icon-', '', trim($d->icon));

switch ($test) {
	case 'list-view':
		$d->icon = 'fa-list';
		break;
	case 'feed':
		$d->icon = 'fa-rss';
		break;
	case 'picture':
		$d->icon = 'fa-picture-o';
		break;
	case 'delete':
		$d->icon = 'fa-times';
		break;
	case 'expand-2':
		$d->icon = 'fa-expand';
		break;
	default :
		$d->icon = str_replace('icon-', 'fa-', $d->icon);
		break;
}
?>

<span class="fa <?php echo $d->icon;?>" <?php echo $props;?>></span>
