<?php
defined('JPATH_BASE') or die;

$d = $displayData;
$id = $d->id;
$winWidth = $d->winWidth;
$winHeight = $d->winHeight;
$canCrop = $d->canCrop;
$canvasSupport = $d->canvasSupport;
$dropBoxStyle = $d->dropBoxStyle;
$field = $d->field;
?>

<span id="<?php echo $id; ?>"></span>
<div class="plupload_container fabrikHide" id="<?php echo $id; ?>_container" style="<?php echo $dropBoxStyle; ?>">
	<div class="plupload" id="<?php echo $id; ?>_dropList_container">
		<table class="table table-striped table-condensed">
			<thead style="display:none">
				<tr>
					<th style="width:30%" ><?php echo FText::_('PLG_ELEMENT_FILEUPLOAD_FILENAME'); ?></th>
					<th style="width:10%" class="plupload_crop">&nbsp;</th>
					<th style="width:50%" class="plupload_file_status"></th>
					<th style="width:10%" class="plupload_file_action">&nbsp;</th>
				</tr>
			</thead>
			<tbody class="plupload_filelist" id="<?php echo $id; ?>_dropList">
			</tbody>
			<tfoot>
				<tr>
					<td colspan="4">
								<a id="<?php echo $id; ?>_browseButton" class="btn btn-mini" href="#"><?php echo FabrikHelperHTML::icon('icon-plus-sign icon-plus'); ?>
						<?php echo FText::_('PLG_ELEMENT_FILEUPLOAD_ADD_FILES'); ?></a>
							<span class="plupload_upload_status"></span>
					</td>
				</tr>
			</tfoot>
		</table>

	</div>
	<!-- FALLBACK; SHOULD LOADING OF PLUPLOAD FAIL -->
	<div class="plupload_fallback"><?php echo FText::_('PLG_ELEMENT_FILEUPLOAD_FALLBACK_MESSAGE'); ?>
	<br />
	<?php
	echo $field;
	?>
	</div>
</div>
