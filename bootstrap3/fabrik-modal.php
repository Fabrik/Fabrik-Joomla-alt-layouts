<?php
/**
 * Created by PhpStorm.
 * User: rob
 * Date: 21/01/2016
 * Time: 16:49
 */

$d = $displayData;

$handleClass = 'handlelabel';

if (!$d->modal)
{
	$handleClass .= ' draggable';
	$windowClass = 'fabrikWindow modal';
} else {
	$windowClass = 'fabrikWindow-modal modal';
}

$templateStyle = "position: fixed; border: 1px solid rgba(0,0,0,0.3); border-radius: 6px;box-shadow: 0 3px 7px rgba(0,0,0,0.3); background-color: #fff;";

$footer = isset($d->footer) ? $d->footer : '';

?>

<div id="<?php echo $d->id; ?>" class="<?php echo $windowClass;?>" style="<?php echo $templateStyle; ?>">
	<div class="modal-header">
		<h3 class="<?php echo $handleClass; ?>" data-role="title">
			<?php echo $d->title; ?>
		</h3>
		<?php if (!$d->modal && $d->expandable !== false) : ?>
			<a class="expand" href="#" data-role="expand">
				<span class="fa fa-expand"></span>
			</a>
		<?php endif; ?>
		<a href="#" class="closeFabWin" data-role="close">
			<span class="fa fa-times"></span>
		</a>
	</div>
	<div class="contentWrapper">
		<div class="itemContent">
			<div class="itemContentPadder">
				<?php echo $d->content; ?>
			</div>
		</div>
	</div>
	<?php if (!$d->modal || $footer !== '') : ?>
		<div class="bottomBar modal-footer">
			<?php echo $footer;?>
		</div>
		<?php if (!$d->modal) : ?>
		<div class="ui-resizable-n ui-resizable-handle"></div>
		<div class="ui-resizable-s ui-resizable-handle"></div>
		<div class="ui-resizable-e ui-resizable-handle"></div>
		<div class="ui-resizable-w ui-resizable-handle"></div>
		<div class="ui-resizable-nw ui-resizable-handle"></div>
		<div class="ui-resizable-ne ui-resizable-handle"></div>
		<div class="ui-resizable-se ui-resizable-handle"></div>
		<div class="ui-resizable-sw ui-resizable-handle"></div>
	<?php endif;
	endif; ?>
</div>
