<?php

abstract class Build {
    abstract function porch();
    abstract function floor();
}

//Если в здании одинаковое количество квартир на этажах
//Задаем массив = [искомая квартира, кол-во квартир на этаже, кол-во этажей]
class Build_same_floor extends Build{

	function __construct() {
		$this->buildArray = array();
	}

	function porch() {
		$porch = ceil($this->buildArray[0]/$this->buildArray[1]/$this->buildArray[2]);
		echo "Porch ";
		return $porch;
	}

	function floor() {
		$floor = ceil(($this->buildArray[0]-(((ceil($this->buildArray[0]/$this->buildArray[1]/$this->buildArray[2]))-1)*$this->buildArray[1]*$this->buildArray[2]))/$this->buildArray[1]);	
		echo "Floor ";
		return $floor;
	}

}

//Если в здании 1-ый этаж отличается от типового этажа
//Задаем массив = [искомая квартира, кол-во квартир на 1-ом этаже, кол-во квартир на типовом этаже, кол-во этажей]
class Build_different_floor extends Build_same_floor{

	function __construct() {
		$this->buildArray = array();
	}
	function porch() {
		$porch = ceil($this->buildArray[0]/($this->buildArray[1]+(($this->buildArray[3]-1)*$this->buildArray[2])));
		echo "Porch ";
		return $porch;
	}

	function floor() {
		$tmp = $this->buildArray[0]-((ceil($this->buildArray[0]/($this->buildArray[1]+(($this->buildArray[3]-1)*$this->buildArray[2])))-1)*($this->buildArray[1]+(($this->buildArray[3]-1)*$this->buildArray[2])));
		if ($tmp <= $this->buildArray[1]) {
			$floor = ceil($tmp/$this->buildArray[1]);
			echo "Floor ";
			return $floor;
		}
		elseif ($tmp > $this->buildArray[1]) {
			$floor = ceil(($tmp-$this->buildArray[1])/$this->buildArray[2])+1;
			echo "Floor ";
			return $floor;			
		}	
	}

}

$b1 = new Build_different_floor;
$b1 ->buildArray = [26, 2, 3, 4];

echo $b1 -> porch();
echo "\n";
echo $b1 -> floor();




?>