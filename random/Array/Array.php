<?php

// Insert a new element at any position of the array:
function insertElementPosition(&$arr, $element, $position) {
    for($i = count($arr); $i > $position; $i--){
        $arr[$i] = $arr[$i-1];
    }
    $arr[$position] = $element;
}

// Insert a new element at the end of the array:
$arr = [20, 45, 93, 67, 10, 97, 52, 88, 33, 92];
insertElementPosition($arr, 100, 2);

print_r($arr);



// Insert Element in sorted Array PHP.