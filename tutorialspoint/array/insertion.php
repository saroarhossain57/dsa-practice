<?php

$arr = [20, 45, 93, 67, 10, 97, 52, 88, 33, 92];

function insert_item(array &$arr, int|string $position, mixed $item): array {
    $count = count($arr);
    if ($position === 'first') {
        array_unshift($arr, $item);
    } 
    elseif ($position === 'last') {
        array_push($arr, $item);
    } 
    elseif (is_int($position) && $position >= 0 && $position <= $count) {
        $arr[] = null;
        for ($i = $count; $i > $position; $i--) {
            $arr[$i] = $arr[$i - 1];
        }

        $arr[$position] = $item;
    } 
    else {
        throw new InvalidArgumentException("Invalid position: $position.");
    }

    return $arr;
}

insert_item($arr, 3, 100);

print_r($arr);