<?php

// https://www.hackerrank.com/challenges/diagonal-difference/problem

function diagonalDifference($array)
{
    [$ltrDiagonal, $rtlDiagonal, $arraySize] = [0, 0, count($array)];
    for ($i = 0; $i < $arraySize; $i++) {
        $ltrDiagonal += $array[$i][$i];
        $rtlDiagonal += $array[$i][$arraySize - $i - 1];
    }

    return abs($ltrDiagonal - $rtlDiagonal);
}

$array = [
    [1, 2, 3],
    [4, 5, 6],
    [9, 8, 9],
];

echo diagonalDifference($array);
