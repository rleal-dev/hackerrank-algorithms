<?php

// https://www.hackerrank.com/challenges/a-very-big-sum/problem

function aVeryBigSum($array)
{
    [$arraySum, $arraySize] = [0, count($array)];
    for ($i = 0; $i < $arraySize; $i++) {
        $arraySum += $array[$i];
    }

    return $arraySum;
}

$array = [
    1000000001,
    1000000002,
    1000000003,
    1000000004,
    1000000005,
];

echo aVeryBigSum($array);
