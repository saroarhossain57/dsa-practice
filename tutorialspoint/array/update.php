<?php

$arr = [20, 45, 93, 67, 10, 97, 52, 88, 33, 92];

function update_item(array &$arr, int|string $position, mixed $item): array {
    $count = count($arr);
    if ($position === 'first') {
        $arr[0] = $item;
    } 
    elseif ($position === 'last') {
        $arr[$count - 1] = $item;
    } 
    elseif (is_int($position) && $position >= 0 && $position < $count) {
        $arr[$position] = $item;
    } 
    else {
        throw new InvalidArgumentException("Invalid position: $position.");
    }

    return $arr;
}


update_item($arr, 3, 100);

print_r($arr);