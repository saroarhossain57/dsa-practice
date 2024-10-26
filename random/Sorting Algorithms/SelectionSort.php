<?php

function selectionSortA($arr){

	$count = count($arr);

	$loop = 0;

	for($i = 0; $i < $count; $i++){

		$min = $i;

		for($j = $i; $j < $count; $j++){

			

			if($min > $arr[$j]){
				$min = $j;
			}

			$loop++;
		}

		if ($min != $i) {
			$tmp = $arr[$i];
			$arr[$i] = $arr[$min];
			$arr[$min] = $tmp;
		}

	}

    echo "Loop: " . $loop . "\n";

	return $arr;
}


$arr = [20, 45, 93, 67, 10, 97, 52, 88, 33, 92];
$sortedArray = selectionSortA($arr);
echo implode(",", $sortedArray);