<?php

function binarySearch($numbers, $needle) {
    $low = 0;
    $high = count($numbers) - 1;
    while ($low <= $high) {
        $mid = (int) (($low + $high) / 2);
        if ($numbers[$mid] > $needle) {
            $high = $mid - 1;
        } else if ($numbers[$mid] < $needle) {
            $low = $mid + 1;
        } else {
            return $numbers[$mid];
        }
    }
    return false;
}


$arr = [20, 45, 93, 67, 10, 97, 52, 88, 33, 92];
echo binarySearch($arr, 45);