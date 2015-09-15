<?php
/**
 * Default list element render
 * Override this file in plugins/fabrik_element/{plugin}/layouts/fabrik-element-{plugin}-list.php
 */

defined('JPATH_BASE') or die;

$d = $displayData;

switch (trim($d->icon)) {
	case 'icon-list-view':
		$d->icon = 'fa-list';
		break;
	case 'icon-feed':
		$d->icon = 'fa-rss';
		break;
	default :
		$d->icon = str_replace('icon-', 'fa-', $d->icon);
		break;
}
?>

<span class="fa <?php echo $d->icon;?>" <?php echo $d->properties;?>></span>
