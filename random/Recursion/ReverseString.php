<?php

function reverseString($str) {

	if($str == ''){
		return;
	}

	return reverseString(substr($str, 1)) . $str[0];
}


echo reverseString('Hello');