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
	$windowClass = 'fabrikWindow uk-modal-dialog';
}
else
{
	$windowClass = 'fabrikWindow-modal uk-modal-dialog';
}

?>
<style type="text/css">
	.fabrikModalBg.uk-open {

		width:100% !important;
		height:100% !important;
		top: 0 !important;
		left: 0 !important;
	}
</style>

<div class="fabrikModalBg uk-modal uk-open" style="">
	<div id="<?php echo $d->id; ?>" class="<?php echo $windowClass; ?>" data-draggable="true">
		<div class="modal-header">
			<h3 class="<?php echo $handleClass; ?>" data-role="title">
				<?php echo $d->title; ?>
			</h3>
			<?php if (!$d->modal && $d->expandable !== false) : ?>
				<a class="expand" href="#" data-role="expand">
					<span class="icon-full-screen icon-expand"></span>
				</a>
			<?php endif; ?>
			<a href="#" class="closeFabWin uk-modal-close uk-close" data-role="close" >
			</a>
		</div>
		<div class="contentWrapper">
			<div class="itemContent">
				<div class="itemContentPadder">
					<?php echo $d->content; ?>
				</div>
			</div>
		</div>
		<?php if (!$d->modal) : ?>
			<div class="bottomBar modal-footer">
			</div>
			<div class="ui-resizable-n ui-resizable-handle"></div>
			<div class="ui-resizable-s ui-resizable-handle"></div>
			<div class="ui-resizable-e ui-resizable-handle"></div>
			<div class="ui-resizable-w ui-resizable-handle"></div>
			<div class="ui-resizable-nw ui-resizable-handle"></div>
			<div class="ui-resizable-ne ui-resizable-handle"></div>
			<div class="ui-resizable-se ui-resizable-handle"></div>
			<div class="ui-resizable-sw ui-resizable-handle"></div>
		<?php endif; ?>
	</div>
</div>
