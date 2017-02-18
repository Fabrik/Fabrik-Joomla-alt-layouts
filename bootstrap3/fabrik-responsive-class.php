<?php
/**
 * Responsive class mapping layout, based on Bootstrap v2 names,
 * hidden-phone, hidden-tablet, hidden-desktop
 * ... so in default, just echo those.  In other frameworks, map to equivalent
 */

defined('JPATH_BASE') or die;

$d = $displayData;

$responsiveClasses = explode(' ', $d->responsiveClass);

foreach ($responsiveClasses as &$responsiveClass)
{
	switch ($responsiveClass)
	{
		case 'hidden-phone':
			$responsiveClass = 'hidden-xs';
			break;
		case 'hidden-tablet':
			$responsiveClass = 'hidden-sm';
			break;
		case 'hidden-desktop':
			$responsiveClass = 'hidden-md';
			break;
	}
}

echo implode(' ', $responsiveClasses);
