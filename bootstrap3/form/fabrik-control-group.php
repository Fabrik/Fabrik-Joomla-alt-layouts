<?php
/**
 * Form control group
 *
 * @package     Joomla
 * @subpackage  Fabrik
 * @copyright   Copyright (C) 2005-2015 fabrikar.com - All rights reserved.
 * @license     GNU/GPL http://www.gnu.org/copyleft/gpl.html
 * @since       3.4
 */
defined('JPATH_BASE') or die;
$d = $displayData;

if (strstr($d->span, 'span'))
{
	$span    = str_replace('span', '', $d->span);
	$d->span = 'col-xs-12 col-sm-' . trim($span);
}

$class = explode(' ', $d->class);

if (in_array('error', $class))
{
	$class[] = 'has-error';

}
$class[] = 'form-group';
?>

<div class="control-group <?php echo implode(' ', $class);?> <?php echo $d->span;?>" <?php echo $d->style;?>>
<?php echo $d->row;?>
</div>
