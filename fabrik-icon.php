<?php
/**
 * Override of Icon rending for fontawesome templates
 */

defined('JPATH_BASE') or die;

$d = $displayData;
$props = isset($d->properties) ? $d->properties : '';

/**
 * Handle cases where additional classes are in the $d->icon string, like the calendar
 * uses "icon-clock timeButton".  So boil $d->icon down to just the icon-foo, then
 * add the rest of the parts back after testing for replacement.
 */

$parts = explode(' ', $d->icon);

foreach ($parts as $key => $part) {
	if (strstr($part, 'icon-')) {
		unset($parts[$key]);
		$d->icon = $part;
	}
	else if (empty($part)) {
		unset($parts[$key]);
	}
}

/**
 * Now test for any icon names that need changing to achieve Font Awesomeness.
 */

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
	case 'clock':
		$d->icon = 'fa-clock-o';
		break;
	default :
		$d->icon = str_replace('icon-', 'fa-', $d->icon);
		break;
}

/**
 * Add any additional classes back
 */

if (!empty($parts))
{
	$d->icon .= ' ' . implode(' ', $parts);
}

?>

<span class="fa <?php echo $d->icon;?>" <?php echo $props;?>></span>
