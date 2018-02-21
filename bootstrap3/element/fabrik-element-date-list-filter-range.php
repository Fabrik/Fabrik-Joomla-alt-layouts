<?php
defined('JPATH_BASE') or die;

$d    = $displayData;
$from = $d->from;
$to   = $d->to;

$d->calOpts = array('class' => 'fabrik_filter form-control');

$calOpts = ArrayHelper::toString($d->calOpts);

$from->img = '<a href="#" id ="' . $from->id . '_cal_img" class="calendarbutton">' . $from->img . '</a>';
$to->img   = '<a href="#" id ="' . $to->id . '_cal_img" class="calendarbutton">' . $to->img . '</a>';

if ($d->filterType === 'range-hidden') :
	?>
	<input type="hidden" name="<?php echo $from->name; ?>"
		class="<?php echo $d->class; ?>"
		value="<?php echo $from->value; ?>"
		id="<?php echo $d->htmlId; ?>-0" />

	<input type="hidden" name="<?php echo $to->name; ?>"
		class="<?php echo $d->class; ?>"
		value="<?php echo $to->value; ?>"
		id="<?php echo $d->htmlId; ?>-1" />
	<?php
else :
	?>
	<div class="fabrikDateListFilterRange row">
		<div class="col-xs-6">
			<?php echo FText::_('COM_FABRIK_DATE_RANGE_BETWEEN') . ' '; ?>
			<div class="input-group">
				<input type="text" name="<?php echo $from->name; ?>" id="<?php echo $from->id; ?>"
					value="<?php echo $from->value; ?>"<?php echo $calOpts; ?> />
			<span class="input-group-addon">
				<?php echo $from->img; ?>
			</span>
			</div>
		</div>
		<div class="col-xs-6">
			<?php echo FText ::_('COM_FABRIK_DATE_RANGE_AND') . ' '; ?>
			<div class="input-group">
				<input type="text" name="<?php echo $to->name; ?>" id="<?php echo $to->id; ?>"
					value="<?php echo $to->value; ?>"<?php echo $calOpts; ?> />
			<span class="input-group-addon">
				<?php echo $to->img; ?>
			</span>
			</div>
		</div>
	</div>
	<?php
endif;