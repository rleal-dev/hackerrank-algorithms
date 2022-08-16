<?php

// https://www.hackerrank.com/challenges/extra-long-factorials/problem

function extraLongFactorials($number)
{
    $result = 1;

    while ($number >= 1) {
        $result = bcmul($result, $number);
        $number--;
    }

    echo $result;
}

extraLongFactorials(25);
