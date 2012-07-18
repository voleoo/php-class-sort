<?php header('Content-Type: text/html; charset=utf-8');
require_once("./classes/php-class-sort.php");
$arraySort = new phpclasssort();

for($i=0; $i<1000; $i++){
	$array[] = rand(1, 20);
}

//$array = array(34, 30, 24, 1, 50, 70, 23, 52, 57, 90, 34, 54, 54, 2);

echo 'Быстрая сортировка <br />';
	$time_start = microtime(1);
	$arraySort->array = $array;
	$arrayFastSort = $arraySort->arrayFastSort();
	//print_r($arrayFastSort);
	$time = microtime(1) - $time_start;
echo '<br />Быстрая сортировка '.$time.' секунд';
echo '<br /><br />';

echo 'Сортировка гномами<br />';
	$time_start = microtime(1);
	$arraySort->array = $array;
	$arrayGnomeSort = $arraySort->arrayGnomeSort();
	//print_r($arrayGnomeSort);
	$time = microtime(1) - $time_start;
echo '<br />Сортировка гномами '.$time.' секунд';
echo '<br /><br />';

echo 'Сортировка подсчетом<br />';
	$time_start = microtime(1);
	$arraySort->array = $array;
	$arrayCountSort = $arraySort->arrayCountSort();
	//print_r($arrayCountSort);
	$time = microtime(1) - $time_start;
echo '<br />Сортировка подсчетом '.$time.' секунд';
echo '<br /><br />';

echo 'Сортировка выбором<br />';
	$time_start = microtime(1);
	$arraySort->array = $array;
	$arrayChoiceSort = $arraySort->arrayChoiceSort();
	//print_r($arrayChoiceSort);
	$time = microtime(1) - $time_start;
echo '<br />Сортировка выбором '.$time.' секунд';
echo '<br /><br />';

echo 'Сортировка вставкой<br />';
	$time_start = microtime(1);
	$arraySort->array = $array;
	$arrayInsertSort = $arraySort->arrayInsertSort();
	//print_r($arrayInsertSort);
	$time = microtime(1) - $time_start;
echo '<br />Сортировка вставкой '.$time.' секунд';
echo '<br /><br />';

echo 'Сортировка шейкер<br />';
	$time_start = microtime(1);
	$arraySort->array = $array;
	$arrayShakerSort = $arraySort->arrayShakerSort();
	//print_r($arrayShakerSort);
	$time = microtime(1) - $time_start;
echo '<br />Сортировка шейкер '.$time.' секунд';
echo '<br /><br />';

echo 'Cортировка пузырьком<br />';
	$time_start = microtime(1);
	$arraySort->array = $array;
	$arrayBubbleSort = $arraySort->arrayBubbleSort();
	//print_r($arrayBubbleSort);
	$time = microtime(1) - $time_start;
echo '<br />Cортировка пузырьком '.$time.' секунд';
echo '<br /><br />';


//========================================
	$time_start = microtime(1);
	arrayShakerSort($array);
	$time = microtime(1) - $time_start;
echo '<br />Сортировка шейкер '.$time.' секунд';
	$time_start = microtime(1);
	arrayBubbleSort($array);
	$time = microtime(1) - $time_start;
echo '<br />Cортировка пузырьком '.$time.' секунд';
function arrayShakerSort($array){
		$count = count($array);
		for($ii=0; $ii<$count/2; $ii++){	
			for($i=0; $i<$count-1; $i++){
				if($array[$i] >= $array[$i+1]){
					$temp = $array[$i];
					$array[$i] 	= $array[$i+1];
					$array[$i+1] 	= $temp;
				}
			}
			for($i=$count-1; $i>0; $i--){
				if($array[$i] <= $array[$i-1]){
					$temp = $array[$i];
					$array[$i] 	= $array[$i-1];
					$array[$i-1] 	= $temp;
				}
			}
		}
		return $array;
}
function arrayBubbleSort($array){
		$count = count($array);
		for($ii=0; $ii<$count-1; $ii++){	
			for($i=0; $i<$count-1; $i++){
				if($array[$i] >= $array[$i+1]){
					$temp = $array[$i];
					$array[$i] 	= $array[$i+1];
					$array[$i+1] 	= $temp;
				}
			}
		}
		return $array;
	}
?>
