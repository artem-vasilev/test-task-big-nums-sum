<?php

function bigNumSum(string $num1, string $num2) : string {
    $result = '';
    $extraDigit = 0;
    $length = strlen($num1) > strlen($num2) ? strlen($num1) : strlen($num2);
    $reversed1 = strrev($num1);
    $reversed2 = strrev($num2);
    for($i = 0; $i < $length; $i++) {
        $currentDigit1 = $reversed1[$i] ?? 0;
        $currentDigit2 = $reversed2[$i] ?? 0;
        $sum = $currentDigit1 + $currentDigit2 + $extraDigit;
        $extraDigit = 0;
        if ($sum > 9) {
            $extraDigit = 1;
            $sum = $sum - 10;
        }
        $result[$i] = $sum;
    }

    return strrev($result);
}

echo bigNumSum('109990000000000000000000000', '1110000000000000000000000');