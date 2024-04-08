<?php
function MergeSort(&$arr, $l, $r){
    
	if($l >= $r){
		return;
	}

    $mid = ($l + $r) / 2;
    MergeSort($arr, $l, $mid);
    MergeSort($arr, $mid+1, $r);


    merge($arr, $l, $mid, $r);
}

function merge(&$arr, $l, $mid, $r){
	$n1 = $mid - $l + 1;
    $n2 = $r - $mid;
 
    $L = array();
    $R = array();
   
    for ($i = 0; $i < $n1; $i++)
        $L[$i] = $arr[$l + $i];
    for ($j = 0; $j < $n2; $j++)
        $R[$j] = $arr[$mid + 1 + $j];
 
    $i = 0;
    $j = 0;
    $k = $l;
    while ($i < $n1 && $j < $n2) {
        if ($L[$i] <= $R[$j]) {
            $arr[$k] = $L[$i];
            $i++;
        }
        else {
            $arr[$k] = $R[$j];
            $j++;
        }
        $k++;
    }
 
    while ($i < $n1) {
        $arr[$k] = $L[$i];
        $i++;
        $k++;
    }
 
    while ($j < $n2) {
        $arr[$k] = $R[$j];
        $j++;
        $k++;
    }
}


$arr = [20, 45, 93, 67, 10, 97, 52, 88, 33, 92];
$arr_size = sizeof($arr);
MergeSort($arr, 0, $arr_size - 1);
echo implode(",", $arr);