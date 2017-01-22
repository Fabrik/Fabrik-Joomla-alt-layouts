<?php
/**
 * This is a generic override for ./components/com_fabrik/layouts/fabrik-icon.php
 * which shows how to map icon names for a template which uses variations on icon-name.
 * A common example is that some templates us an icon set which uses icon-remove instead of
 * icon-delete.  This means you either have to change 'delete' to 'remove' in the settings
 * for the Delete Icon for all your lists ... or you can use this layout to map icon-delete to icon-remove.
 *
 * See below for instructions on how to modify this file to add new name mappings.
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
		default :
			$iconParts[$key] = trim($part);
			break;
	}
}

$d->icon = implode(' ', $iconParts);

/**
 * Add any additional non-icon classes back
 */

if (!empty($spareParts))
{
	$d->icon .= ' ' . implode(' ', $spareParts);
}

?>
<i data-isicon="true" class="<?php echo $d->icon;?>" <?php echo $props;?>></i>