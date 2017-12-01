<?php
/**
 * Material Design grid layout
 *
 * NOTE - this layout must implode the grid with \n, as the calling func in HTML helper has an 'explode' arg,
 * which controls whether grid gets returned as string, or an array.
 */

defined('JPATH_BASE') or die;

use Joomla\Utilities\ArrayHelper;

$d = $displayData;
$responsive = array('col-xs-', 'col-sm-', 'col-md-', 'col-lg-');
$d->columns = (array) $d->columns;
$span = array();

foreach ($d->columns as $i => $c) {
	$span[] = ArrayHelper::getValue($responsive, $i) . floor(12 / $c);
}

$span = implode(' ', $span);
$span = '';

$i    = 0;
$grid = array();

$d->items = (array) $d->items;

foreach ($d->items as $i => $s)
{
	$endLine = ($i !== 0 && (($i) % $d->columns == 0));
	$newLine = ($i % $d->columns == 0);

	if ($endLine)
	{
		$grid[] = '</div><!-- grid close row -->';
	}

	if ($newLine)
	{
		$grid[] = '<div class="' . $d->spanClass . '">';
	}

	//$grid[] = '<div class="' . $d->spanClass . ' ' . $span . '">' . $s . '</div>';
	$grid[] = $s;
}

if (!empty($d->items))
{
	// Close opened row, last row-fluid is always open if there's data
	$grid[] = '</div><!-- grid close end row -->';
}

echo implode("\n", $grid);
