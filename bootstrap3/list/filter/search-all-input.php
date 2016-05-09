<?php
/**
 * Created by PhpStorm.
 * User: rob
 * Date: 09/05/2016
 * Time: 19:08
 */
$d = $displayData;
?>

<input type="search" size="20" placeholder="<?php echo $d->placeholder; ?>"
	value="<?php echo $d->value; ?>" class="fabrik_filter search-query form-control"
	name="<?php echo $d->name;?>" id="<?php echo $d->id;?>" />