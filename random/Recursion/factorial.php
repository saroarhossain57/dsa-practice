<?php

function factorial($number){

    if($number == 1){
        return 1;
    }

    $fact = $number * factorial($number-1);

    return $fact;
}


echo factorial(6);