<?php

defined('JPATH_BASE') or die;

use Joomla\Utilities\ArrayHelper;
// Add span with id so that element fxs work.
$d = $displayData;

$divClass = '';
$class = ArrayHelper::getValue($d->attributes, 'class', '');
$class = str_replace($d->sizeClass, '', $class);

for ($i = 1; $i <= 12; $i++) {
	if ($d->sizeClass === 'span' . $i) {
		$divClass = ' col-xs-' . $i;
	}
}

$start = $divClass === '' ? '' : '<div class="row ' . $divClass . '">';
$end = $divClass === '' ? '' : '</div>';
echo $start;
?>

<input
	<?php foreach ($d->attributes as $key => $value) :
	echo $key . '="' . $value . '"';
endforeach;
	?> />
<?php echo $end;?>