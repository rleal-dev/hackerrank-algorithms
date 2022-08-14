<?php

// https://www.hackerrank.com/challenges/staircase/problem

function staircase($number)
{
    $output = '';
    for ($i = 1; $i <= $number; $i++) {
        $string = str_repeat('#', $i);
        $formatedString = str_pad($string, $number, ' ', STR_PAD_LEFT);

        $output .= $formatedString . PHP_EOL;
    }

    echo $output;
}

staircase(10);
