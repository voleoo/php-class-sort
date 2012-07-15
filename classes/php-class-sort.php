<?php
class phpclasssort {
	public $array;

	public function arrayFastSort(){
		$count = count($this->array);

		
		
		
		
		return $this->array;
	}
	
	public function arrayGnomeSort(){
		$i = 1;
		$j = 2;
		while($i < count($this->array)){
			if($this->array[$i-1] <= $this->array[$i]){
				$i = $j;
				$j++;
			}
			else{
				$temp = $this->array[$i];
				$this->array[$i] 	= $this->array[$i-1];
				$this->array[$i-1] 	= $temp;
				$i = $i - 1;
				if($i == 0){
					$i = $j;
					$j++;				
				}
			}
		}
		return $this->array;
	}
	
	public function arrayCountSort(){
		$max = false;
		foreach ($this->array as $value){
			$count = strlen($value);
			if($max < $count) $max = $count;
		}
		for($i = 1; $i <= $max; $i++){
			foreach ($this->array as $value){
				$numb = substr($value, '-'.$i, 1);
				$tempArray[$numb][] = $value;
			}
			$this->array = false;
			for($ii = 0; $ii < 10; $ii++){
				if(isset($tempArray[$ii])){
					foreach($tempArray[$ii] as $value){
						$this->array[] = $value;
					}
				}
			}
			unset($tempArray);
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
		foreach ($this->array as $key => $nouse) {
			$x = $this->array[$key];
			for ($j = $key - 1; $j >= 0 && $this->array[$j] > $x; $j--) {
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
}
?>
