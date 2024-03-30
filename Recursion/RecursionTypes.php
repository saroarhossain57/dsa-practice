<?php

// Recursion Types

// 1. LINEAR RECURSION.
// When a function calls itself only once in each run thne it's called Linear Recursion.
// Example: 
function factorial($number){

    if($number == 1){
        return 1;
    }
    $fact = $number * factorial($number-1);

    return $fact;
}



// 2. BINARY RECURSION.
// When a function calls itself twice in each run thne it's called Binary Recursion. Calculate Fibonacci Series using this type of recursion is an common example of binary recursion.
function fibonacci($number){

    echo 'Num: ' . $number . "\n";


    if($number == 0){
        return 0;
    }
    if($number == 1){
        return 1;
    }

    return fibonacci($number-1) + fibonacci($number-2);
}


fibonacci(10);


// 3. Other Recursions
// Tail Recursion, Mutual Recursion and Nested Recursion.