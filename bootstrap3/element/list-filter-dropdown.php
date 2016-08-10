<?php
defined('JPATH_BASE') or die;

$d         = $displayData;
?>

<select name="<?php echo $d->name ?>" id="<?php echo $d->htmlId ?>"  class="<?php echo $d->class;?> form-control"
	<?php echo $d->size;?>
	data-filter-name="<?php echo $d->filterName;?>"'>
<?php foreach ($d->rows as $opt) :
	$disabled = isset($opt->disable) && $opt->disable === true ? ' disabled' : '';
	$selected = in_array($opt->value, $d->default) ? ' selected="selected" ' : ''; ?>
	<option value="<?php echo $opt->value;?>" <?php  echo $disabled; ?><?php echo $selected; ?>><?php echo Text::_($opt->text); ?></option>
<?php endforeach; ?>
</select>
