<?php
/**
 * Default list element render
 * Override this file in plugins/fabrik_element/{plugin}/layouts/fabrik-element-{plugin}-list.php
 */

defined('JPATH_BASE') or die;

$d = $displayData;
$d->class = '';
$heading = '';
$img = '';
$headingProperties = array(
    'data-sort-asc-icon' => 'fa-sort-asc',
    'data-sort-desc-icon' => 'fa-sort-desc',
    'data-sort-icon' => 'fa-sort'
);
$imgProperties = array();

switch ($d->orderDir)
{
    case 'desc':
        $d->orderDir = '-';
        $d->class = 'class="fabrikorder-desc"';
        $imgProperties['alt'] = FText::_('COM_FABRIK_ORDER');
        $img = FabrikHelperHTML::image('sort-desc', 'list', $d->tmpl, $imgProperties);
        break;
    case 'asc':
        $d->orderDir = 'desc';
        $d->class = 'class="fabrikorder-asc"';
        $imgProperties['alt'] = FText::_('COM_FABRIK_ORDER');
        $img = FabrikHelperHTML::image('sort-asc', 'list', $d->tmpl, $imgProperties);
        break;
    case '':
    case '-':
        $d->orderDir = 'asc';
        $d->class = 'class="fabrikorder"';
        $imgProperties['alt'] = FText::_('COM_FABRIK_ORDER');
        $img = FabrikHelperHTML::image('sort', 'list', $d->tmpl, $imgProperties);
        break;
}

if ($d->class === '')
{
    if (in_array($d->key, $d->orderBys))
    {
        if ($d->item->order_dir === 'desc')
        {
            $d->class = 'class="fabrikorder-desc"';
            $imgProperties['alt'] = FText::_('COM_FABRIK_ORDER');
            $img = FabrikHelperHTML::image('arrow-up.png', 'list', $d->tmpl, $imgProperties);
        }
    }
}

if ($d->elementParams->get('can_order', false))
{
    $heading = '<a ' . $d->class . ' ' . FabrikHelperHTML::propertiesFromArray($headingProperties) . ' href="#">' . $img . $d->label . '</a>';
}
else
{
    $img = $d->orderDir === 'asc' ? '' : $img;
    $heading = $img . $d->label;
}

echo $heading;
