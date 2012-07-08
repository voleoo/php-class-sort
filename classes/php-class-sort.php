<?php
class phpclasssort {
	public $array;
	
	//private $arrayKeys = false;
	//private $keyOld = false;
	//private $valueOld = false;
	
	//gnomeSort(a[0..size - 1])
    //i = 1;
    //j = 2;
    //while i < size
    //    if a[i - 1] <= a[i] //для сортировки по убыванию поменяйте знак сравнения на >=
    //        i = j;
    //        j = j + 1;
	//     else
	//         swap a[i - 1] and a[i]
    //        i = i - 1;
    //        if i == 0
    //            i = j;
    //            j = j + 1;
	public function arrayGnomeSort(){
		$i = 1;
		$j = 2;
		$count = count($this->array);
		while($i < $count-1){
			if($this->array[$i-1] <= $this->array[$i]){
				$i = $j;
				$j = $j + 1;
			}
			else{
				$temp = $this->array[$i];
				$this->array[$i] 	= $this->array[$i-1];
				$this->array[$i-1] 	= $temp;
				if($i == 0){
					$i = $j;
					$j = $j + 1;
				}
			}
		}
		return $this->array;
	}
	public function arrayChoiceSort(){
		$count = count($this->array);
		for ($i = 0; $i < $count; $i++){
			$min = $i;
			for ($j = $i + 1; $j < $count; $j++){
				if ($this->array[$j] < $this->array[$min]){
					$min = $j;
				}
			}
			$temp = $this->array[$i];
			$this->array[$i] = $this->array[$min];
			$this->array[$min] = $temp;
		}
		return $this->array;
	}

	public function arrayInsertSort(){
		for ($i = 1; $i < count($this->array); $i++) {
			$x = $this->array[$i];
			for ($j = $i - 1; $j >= 0 && $this->array[$j] > $x; $j--) {
			  $this->array[$j + 1] = $this->array[$j];
			}
			$this->array[$j + 1] = $x;
		}
		return $this->array;
	}
	public function arrayShakerSort(){
		$count = count($this->array);
		for($ii=0; $ii<$count/2; $ii++){	
			for($i=0; $i<$count-1; $i++){
				if($this->array[$i] >= $this->array[$i+1]){
					$temp = $this->array[$i];
					$this->array[$i] 	= $this->array[$i+1];
					$this->array[$i+1] 	= $temp;
				}
			}
			for($i=$count-1; $i>0; $i--){
				if($this->array[$i] <= $this->array[$i-1]){
					$temp = $this->array[$i];
					$this->array[$i] 	= $this->array[$i-1];
					$this->array[$i-1] 	= $temp;
				}
			}
		}
		return $this->array;
	}
	public function arrayBubbleSort(){
		$count = count($this->array);
		for($ii=0; $ii<$count-1; $ii++){	
			for($i=0; $i<$count-1; $i++){
				if($this->array[$i] >= $this->array[$i+1]){
					$temp = $this->array[$i];
					$this->array[$i] 	= $this->array[$i+1];
					$this->array[$i+1] 	= $temp;
				}
			}
		}
		return $this->array;
	}

	public function arrayFastSort(){
		$count = count($this->array);

		
		
		
		
		return $this->array;
	}
}
?>
