<?php


$arr = [20, 45, 93, 67, 10, 97, 52, 88, 33, 92];

function delete_item(array &$arr, int|string $position): array {
    
    $count = count($arr);
    if ($position === 'first') {
        array_shift($arr);
    } 
    elseif ($position === 'last') {
        array_pop($arr);
    } 
    elseif (is_int($position) && $position >= 0 && $position < $count) {
        for ($i = $position; $i < $count - 1; $i++) {
            $arr[$i] = $arr[$i + 1];
        }
        array_pop($arr);
    } 
    else {
        throw new InvalidArgumentException("Invalid position: $position.");
    }

    return $arr;
}

delete_item($arr, 3);

print_r($arr);