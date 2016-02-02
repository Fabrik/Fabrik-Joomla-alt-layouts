<?php
defined('JPATH_BASE') or die;

$d = $displayData;

?>

<div class="btn-group" data-toggle="buttons">
	<?php for ($i = 0; $i < count($d->values); $i++) :
		$v       = $d->values[$i];
		$checked = in_array($v, $d->default) ? 'checked="checked"' : '';
		$active  = in_array($v, $d->default) ? 'active' : '';
		?>
		<label class="btn btn-default <?php echo $active; ?>">
			<input type="checkbox" value="<?php echo $v; ?>" <?php echo $checked; ?> name="<?php echo $d->name; ?>[]" / ><?php echo $d->labels[$i]; ?>
		</label>
		<?php
	endfor;
	?>
</div>
