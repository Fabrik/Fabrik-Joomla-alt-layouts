<?php
/**
 * Layout: list edit button
 *
 * @package     Joomla
 * @subpackage  Fabrik
 * @copyright   Copyright (C) 2005-2015 fabrikar.com - All rights reserved.
 * @license     GNU/GPL http://www.gnu.org/copyleft/gpl.html
 * @since       3.3.3
 */

// No direct access
defined('_JEXEC') or die('Restricted access');
$d = $displayData;

?>
<a data-loadmethod="<?php echo $d->loadMethod;?>" class="<?php echo $d->class;?> btn-default" <?php echo $d->detailsAttributes; ?>
	data-list="<?php echo $d->dataList; ?>" href="<?php echo $d->link; ?>" title="<?php echo $d->viewLabel;?>" target="<?php echo $d->viewLinkTarget; ?>">
<span class="fa fa-search"></span> <?php echo $d->viewText; ?></a>