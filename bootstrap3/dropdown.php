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

$class = 'btn-group fabrik_action';

if ($displayData['align'] == 'right')
{
	$class .= ' pull-right';
}

?>

<div class="dropdown">
	<button class="btn btn-default btn-mini dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
		<span class="caret"></span>
	</button>
	<ul class="dropdown-menu">
		<li><?php echo implode('</li>' . "\n" . '<li>', $displayData['items']); ?></li>
	</ul>
</div>