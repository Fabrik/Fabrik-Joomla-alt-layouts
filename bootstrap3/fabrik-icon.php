<?php
/**
 * Override of Icon rending for fontawesome templates
 */

defined('JPATH_BASE') or die;

$d = $displayData;
$props = isset($d->properties) ? $d->properties : '';

/**
 * Handle cases where additional classes are in the $d->icon string, like the calendar
 * uses "icon-clock timeButton".  Also handle multiple icon-foo, like "icon-spinner icon-spin"
 */

$iconParts = explode(' ', trim($d->icon));
$spareParts = array();

foreach ($iconParts as $key => $part) {
	if (!strstr($part, 'icon-')) {
		unset($iconParts[$key]);
		$spareParts[] = $part;
	}
	else if (empty($part)) {
		unset($iconParts[$key]);
	}
}

/**
 * Now test for any icon names that need changing to achieve Font Awesomeness.
 */

foreach ($iconParts as $key => $part)
{

	$test = str_replace('icon-', '', trim($part));

	switch ($test) {
		case 'list-view':
			$iconParts[$key] = 'fa-list';
			break;
		case 'feed':
			$iconParts[$key] = 'fa-rss';
			break;
		case 'picture':
			$iconParts[$key] = 'fa-picture-o';
			break;
		case 'delete':
			$iconParts[$key] = 'fa-times';
			break;
		case 'expand-2':
			$iconParts[$key] = 'fa-expand';
			break;
		case 'clock':
			$iconParts[$key] = 'fa-clock-o';
			break;
		case 'question-sign':
			$iconParts[$key] = 'fa-question-circle';
			break;
		case 'next':
 			$iconParts[$key] = 'fa-angle-right';
 			break;
 		case 'previous':
 			$iconParts[$key] = 'fa-angle-left';
 			break;
		case 'eye-open':
			$iconParts[$key] = 'fa-eye';
			break;
		case 'lightning':
			$iconParts[$key] = 'fa-bolt';
			break;
		case 'checkmark':
			$iconParts[$key] = 'fa-check';
			break;
		case 'cancel':
			$iconParts[$key] = 'fa-times';
			break;
		case 'remove':
			$iconParts[$key] = 'fa-times';
			break;
		case 'star-empty':
			$iconParts[$key] = 'fa-star-o';
			break;
		default :
			$iconParts[$key] = str_replace('icon-', 'fa-', $part);
			break;
	}
}

$d->icon = implode(' ', $iconParts);

/*
 * Some code just needs the icon name itself (eg. passing to JS code so it knows what icon class to add/remove,
 * like in the rating element.
 */
if (isset($d->nameOnly) && $d->nameOnly)
{
	echo $d->icon;
	return;
}

/**
 * Add any additional non-icon classes back
 */

if (!empty($spareParts))
{
	$d->icon .= ' ' . implode(' ', $spareParts);
}

?>

<span data-isicon="true" class="fa <?php echo $d->icon;?>" <?php echo $props;?>></span>
