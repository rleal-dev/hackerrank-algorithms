<?php

// https://www.hackerrank.com/challenges/simple-array-sum/problem

function simpleArraySumForeach($array)
{
    $arraySum = 0;
    foreach ($array as $row) {
        $arraySum += $row;
    }

    return $arraySum;
}

function simpleArraySumFor($array)
{
    [$arraySum, $arraySize] = [0, count($array)];
    for ($i = 0; $i < $arraySize; $i++) {
        $arraySum += $array[$i];
    }

    return $arraySum;
}

echo array_sum([1, 2, 3, 4, 10, 11]);
echo simpleArraySumForeach([1, 2, 3, 4, 10, 11]);
echo simpleArraySumFor([1, 2, 3, 4, 10, 11]);
