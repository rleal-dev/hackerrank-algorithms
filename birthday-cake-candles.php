<?php

// https://www.hackerrank.com/challenges/birthday-cake-candles/problem

function birthdayCakeCandles($candles)
{
    [$tallest, $countTallest, $arraySize] = [0, 0, count($candles)];
    for ($i = 0; $i < $arraySize; $i++) {
        if ($candles[$i] > $tallest) {
            $countTallest = 0;
            $tallest = $candles[$i];
        }

        if ($candles[$i] === $tallest) {
            $countTallest++;
        }
    }

    return $countTallest;
}

echo birthdayCakeCandles([3, 2, 1, 3, 3]);
