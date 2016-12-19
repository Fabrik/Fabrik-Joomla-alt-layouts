<?php
/**
 * Default list element render
 * Override this file in plugins/fabrik_element/{plugin}/layouts/fabrik-element-{plugin}-list.php
 */

defined('JPATH_BASE') or die;

$d = $displayData;
$klass = '';
$stripped = isset($d->stripped) && $d->stripped === true ? 'progress-bar-striped': '';
$animated = isset($d->animated) && $d->animated === true ? 'active' : '';
$extraClass = isset($d->extraClass) ? $d->extraClass : '';
$extraStyle = isset($d->extraStyle) ? $d->extraStyle : '';
$value = isset($d->value) ? (int) $d->value : 0;

if (isset($d->context)) {
	switch ($d->context) {
		case 'success':
			$klass = 'progress-bar-success';
			break;
		case 'info':
			$klass = 'progress-bar-info';
			break;
		case 'warning':
			$klass = 'progress-bar-warning';
			break;
		case 'danger':
			$klass = 'progress-bar-danger';
			break;

	}
}
?>
<div class="progress <?php echo $extraClass;?>" style="<?php echo $extraStyle; ?>">
	<div class="progress-bar bar <?php echo $klass;?> <?php echo $stripped; ?> <?php echo $animated;?>" role="progressbar"
		aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $value;?>%;">
	</div>
</div>
