<?php

// https://www.hackerrank.com/challenges/divisible-sum-pairs/problem

function divisibleSumPairs($arraySize, $divisor, $array)
{
    [$count, $sum] = [0, 0];
    for ($i = 0; $i < $arraySize - 1; $i++) {
        for ($j = $i + 1; $j < $arraySize ; $j++) {
            $sum = $array[$i] + $array[$j];
            if ($sum % $divisor == 0) {
                $count++;
            }
        }
    }

    return $count;
}

echo divisibleSumPairs(6, 3, [1, 3, 2, 6, 1, 2]);
