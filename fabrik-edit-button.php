<?php
/**
 * Layout: list row buttons - rendered as a Bootstrap dropdown
 *
 * @package     Joomla
 * @subpackage  Fabrik
 * @copyright   Copyright (C) 2005-2015 fabrikar.com - All rights reserved.
 * @license     GNU/GPL http://www.gnu.org/copyleft/gpl.html
 * @since       3.0
 */

// No direct access
defined('_JEXEC') or die('Restricted access');
$d = $displayData;

?>
<a data-loadmethod="<?php echo $d->loadMethod; ?>" class="<?php echo $d->class;?> btn-default" <?php echo $d->editAttributes;?>
 data-list="<?php echo $d->dataList;?>" href="<?php echo $d->editLink;?>" title="<?php echo $d->editLabel;?>">
	<span class="fa fa-edit"></span> <?php echo $d->editText; ?></a>