<?php
require_once("./classes/php-class-sort.php");
$arraySort = new phpclasssort();

$arraySort->array = array(10, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54);

$arraySorted = $arraySort->arraySortFast();
print_r($arraySorted);
?>
