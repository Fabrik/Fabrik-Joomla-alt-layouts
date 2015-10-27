<?php
/**
 * Default list element render
 * Override this file in plugins/fabrik_element/{plugin}/layouts/fabrik-element-{plugin}-list.php
 */

defined('JPATH_BASE') or die;

$d     = $displayData;
$props = isset($d->properties) ? $d->properties : '';

$test = str_replace('icon-', '', trim($d->icon));
$test = explode(' ', $test);

foreach ($test as &$t)
{
	switch ($t)
	{
		case 'list-view':
			$t = 'fa-list';
			break;
		case 'feed':
			$t = 'fa-rss';
			break;
		case 'picture':
			$t = 'fa-picture-o';
			break;
		case 'delete':
			$t = 'fa-times';
			break;
		case 'expand-2':
			$t = 'fa-expand';
			break;
		case 'eye-open':
			$t = 'fa-eye';
			break;
		default :
			$t = str_replace('icon-', 'fa-', $d->icon);
			break;
	}
}

$d->icon = implode(' ', $test);
?>

<span class="fa <?php echo $d->icon; ?>" <?php echo $props; ?>></span>
