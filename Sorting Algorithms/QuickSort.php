<?php

function QuickSort(&$arr, $p, $r){
    if($p < $r) {
        $q = partition($arr, $p, $r);
        quickSort($arr, $p, $q);
        quickSort($arr, $q+1, $r);
    }
}

function partition(&$arr, $p, $r){
    $pivot = $arr[$p];
    $i = $p-1;
    $j = $r+1;
    while(true) {
        do {
            $i++;
        } while($arr[$i] < $pivot && $arr[$i] != $pivot);
        do {
            $j--;
        } while($arr[$j] > $pivot && $arr[$j] != $pivot);
        
        if($i < $j) {
            $temp = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $temp;
        } else {
            return $j;
        }
    }
}


$arr = [20, 45, 93, 67, 10, 97, 52, 88, 33, 92];


QuickSort($arr, 0, count($arr)-1);
echo implode(",", $arr);