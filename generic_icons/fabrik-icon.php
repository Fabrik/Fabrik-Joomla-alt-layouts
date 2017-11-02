<?php
/**
 * This is a generic override for ./components/com_fabrik/layouts/fabrik-icon.php
 * which shows how to map icon names for a template which uses variations on icon-name.
 * A common example is that some templates us an icon set which uses icon-remove instead of
 * icon-delete.  This means you either have to change 'delete' to 'remove' in the settings
 * for the Delete Icon for all your lists ... or you can use this layout to map icon-delete to icon-remove.
 *
 * To use this file, either ...
 *
 * Follow the instructions at:
 *
 * https://docs.joomla.org/J3.x:How_to_use_the_Template_Manager
 *
 * ... to create a fabrik-icon.php at the top level of the com_fabrik overrides,
 * and paste the content of this file into it.
 *
 * ... or ...
 *
 * Use ftp, and manually create the ./templates/<your site template/html/overides/com_fabrik
 * folder, ftp this file to it, and edit as required.
 *
 * See below ("MODIFY HERE") for instructions on how to modify this file to add new name mappings.
 */

defined('JPATH_BASE') or die;

$d = $displayData;
$props = isset($d->properties) ? $d->properties : '';

/**
 * DON'T TOUCH THIS PART OF THE CODE!
 *
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
 * MODIFY HERE
 *
 * Now test for any icon names that need changing.  To add a new one, simply add
 * a new case for it inside this switch statement. Copy and paste the 'delete' case,
 * and change the names accordingly.
 */

foreach ($iconParts as $key => $part)
{

	$test = str_replace('icon-', '', trim($part));

	switch ($test) {
		case 'delete':
			$iconParts[$key] = 'icon-remove';
			break;
		case 'something':
			$iconParts[$key] = 'icon-somethingelse';
			break;
		default :
			$iconParts[$key] = trim($part);
			break;
	}
}

/**
 * DON"T TOUCH THIS PART OF THE CODE
 */

$d->icon = implode(' ', $iconParts);

/*
 * Some code just needs the icon name itself (eg. passing to JS code so it knows what icon class to add/remove,
 * like in the rating element.
 */
if ($d->nameOnly)
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
<i data-isicon="true" class="<?php echo $d->icon;?>" <?php echo $props;?>></i>