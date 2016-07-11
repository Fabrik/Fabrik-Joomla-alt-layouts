<?php
/**
 * Layout: List Pagination Active Item
 *
 * @package     Joomla
 * @subpackage  Fabrik
 * @copyright   Copyright (C) 2005-2015 fabrikar.com - All rights reserved.
 * @license     GNU/GPL http://www.gnu.org/copyleft/gpl.html
 * @since       3.4.2
 */

$d = $displayData;
$item = $d->item;

?>
<a title="<?php echo $item->text; ?>" href="<?php echo $item->link; ?>"><?php echo $item->text; ?></a>


