<?php
require_once("./classes/php-class-sort.php");
$arraySort = new phpclasssort();

//$array = array(34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54);
$array = array(34, 30, 24, 1, 5, 7, 23, 5, 9, 34, 54, 54);




//'aplle'=>

echo 'Сортировка гномами<br />';
$time_start = microtime(1);
$arraySort->array = $array;
print_r($arraySort->arrayGnomeSort());
$time = microtime(1) - $time_start;
echo '<br />Сортировка гномами '.$time.' секунд';
echo '<br /><br />';

echo 'Сортировка выбором<br />';
$time_start = microtime(1);
$arraySort->array = $array;
print_r($arraySort->arrayChoiceSort());
$time = microtime(1) - $time_start;
echo '<br />Сортировка выбором '.$time.' секунд';
echo '<br /><br />';

echo 'Сортировка вставкой<br />';
$arraySort->array = $array;
print_r($arraySort->arrayInsertSort());
$time = microtime(1) - $time_start;
echo '<br />Сортировка вставкой '.$time.' секунд';
echo '<br /><br />';



echo 'Сортировка шейкер<br />';
$time_start = microtime(1);
$arraySort->array = $array;
print_r($arraySort->arrayShakerSort());
$time = microtime(1) - $time_start;
echo '<br />Сортировка шейкер '.$time.' секунд';
echo '<br /><br />';

echo 'Cортировка пузырьком<br />';
$arraySort->array = $array;
print_r($arraySort->arrayBubbleSort());
$time = microtime(1) - $time_start;
echo '<br />Cортировка пузырьком '.$time.' секунд';
echo '<br /><br />';

echo 'Быстрая сортировка <br />';
$arraySort->array = $array;
print_r($arraySort->arrayFastSort());
$time = microtime(1) - $time_start;
echo '<br />Быстрая сортировка '.$time.' секунд';
echo '<br /><br />';
?>
