<?php

function decimalToRoman(int $number): void {

    $algarisms = [
        1 => 'I',
        4 => 'IV',
        5 => 'V',
        9 => 'IX',
        10 => 'X',
        40 => 'XL',
        50 => 'L',
        90 => 'XC',
        100 => 'C',
        400 => 'CD',
        500 => 'D',
        900 => 'CM',
        1000 => 'M',
    ];

    $result = '';

    echo "Number in decimal: {$number}" . PHP_EOL;

    foreach(array_reverse($algarisms, true) as $key => $value) {
        while($number / $key >= 1) {
            $result .= $algarisms[$key];
            $number -= $key;
        }
    }
    echo "Number converted to roman: {$result}" . PHP_EOL;
}

decimalToRoman(2020);
