<?php
/**
 * Created by PhpStorm.
 * User: rob
 * Date: 09/05/2016
 * Time: 18:56
 */

use Fabrik\Helpers\Text;

$d = $displayData;

if (array_key_exists('all', $d->filters) || $d->action != 'onchange')
{
	?>
	<div class="nav pull-right col-xs-4">
		<div <?php echo $d->action != 'onchange' ? 'class="input-group"' : ''; ?>>
			<?php if (array_key_exists('all', $d->filters)) :
				echo $d->filters['all']->element;
				if ($d->action != 'onchange') : ?>

					<span class="input-group-btn">
							<input type="button" class="fabrik_filter_submit btn btn-default"
								value="<?php echo Text::_('COM_FABRIK_GO'); ?>" name="filter">
						</span>

					<?php
				endif;
			endif;
			?>
		</div>
	</div>
	<?php
}