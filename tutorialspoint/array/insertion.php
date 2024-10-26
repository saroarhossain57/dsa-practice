<?php

$arr = [20, 45, 93, 67, 10, 97, 52, 88, 33, 92];

function insert_item( array &$arr, int | string $position, mixed $item) : array {
    
    $count = count($arr);

    if( $position === 'first') {
        array_unshift($arr, $item);
    } else if( $position === 'last') {
        array_push($arr, $item);
    } else {
        for( $i = 0; $i < $count; $i++) {
            
        }
    }

    return $arr;
}