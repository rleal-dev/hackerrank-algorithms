<?php

// https://www.hackerrank.com/challenges/mini-max-sum/problem

function miniMaxSum($array)
{
    [$sum, $minSum, $maxSum, $arraySize] = [0, 0, 0, count($array)];
    for ($i = 0; $i < $arraySize; $i++) {
        $sum += $array[$i];
    }

    for ($i = 0; $i < $arraySize; $i++) {
        $diffSum = $sum - $array[$i];

        if ($minSum == 0 || $diffSum < $minSum) {
            $minSum = $diffSum;
        }

        if ($diffSum > $maxSum) {
            $maxSum = $diffSum;
        }
    }

    echo $minSum . ' ' . $maxSum;
}

miniMaxSum([1, 3, 5, 7, 9]);
