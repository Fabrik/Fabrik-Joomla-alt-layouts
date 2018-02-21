<?php
defined('JPATH_BASE') or die;

use Joomla\Utilities\ArrayHelper;

$d         = $displayData;
$labelText = FText::_($d->label);
$labelText = $labelText == '' ? '&nbsp;' : $labelText;
$l  = $d->icons . $labelText;
$tip = '';

if ($d->tipText !== '')
{
	switch ($d->tipOpts->position)
	{
		default;
		case 'left':
			$placement = 'left';
			break;
		case 'top-left':
		case 'top-right':
		case 'top-left':
		case 'top':
			$placement = 'top';
			break;
		case 'right':
		case 'bottom-right':
			$placement = 'right';
			break;
		case 'bottom':
		case 'bottom-left':
			$placement = 'bottom';
			break;

	}
	$heading = isset($d->tipOpts->heading) ? $d->tipOpts->heading : '';
	$tip = ' data-toggle="popover" data-trigger="' . $d->tipOpts->trigger . '"  data-placement="' . $placement . '" data-title="' . $heading . '" data-content="' . $d->tipText . '"';
}

if ($d->view == 'form' && !($d->canUse || $d->canView))
{
	return '';
}

if ($d->view == 'details' && !$d->canView)
{
	return '';
}

if ($d->canView || $d->canUse)
{
	if ($d->hasLabel && !$d->hidden)
	{
		?>

		<label for="<?php echo $d->id; ?>" class="<?php echo $d->labelClass; ?>" <?php echo $tip; ?>>
<?php
	}
	elseif (!$d->hasLabel && !$d->hidden)
	{
		?>
		<span class="<?php echo $d->labelClass; ?> faux-label">
<?php
	}
	?>
	<?php echo $l;?>
<?php
	if ($d->hasLabel && !$d->hidden)
	{
	?>
		</label>
	<?php
	}
	elseif (!$d->hasLabel && !$d->hidden)
	{
	?>
		</span>
	<?php
	}
}
?>
