<?php

function isValid($s) {
        
    $stack = new SplStack();
    $valid = true;


    $len = strlen($s);
    for($i = 0; $i < $len; $i++){

        $char = $s[$i];

        switch($char){
            case '(':
            case '{':
            case '[':
                $stack->push($char);
                break;

            case ")":
            case "}":
            case "]":
                if($stack->isEmpty()){
                    $valid = false;
                } else {
                    $last = $stack->pop();
                    if (
                        ($char == ")" && $last != "(") || 
                        ($char == "}" && $last != "{") || 
                        ($char == "]" && $last != "[")
                    ) {
                        $valid = false;
                    }
                }
                break;
        }

        if(!$valid) {
            break;
        }

    }

    if (!$stack->isEmpty()) {
        $valid = false;
    }


    return $valid;

}


var_dump(isValid('()[]{}'));