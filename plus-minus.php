<?php

// https://www.hackerrank.com/challenges/plus-minus/problem

function plusMinus($array)
{
    [$sumPositives, $sumNegatives, $sumZero, $totalNumbers] = [0, 0, 0, count($array)];
    for ($i = 0; $i < $totalNumbers; $i++) {
        if ($array[$i] > 0) {
            $sumPositives++;
        }

        if ($array[$i] < 0) {
            $sumNegatives++;
        }

        if ($array[$i] === 0) {
            $sumZero++;
        }
    }

    $ratioPositives = number_format($sumPositives / $totalNumbers, 6);
    $ratioNegatives = number_format($sumNegatives / $totalNumbers, 6);
    $ratioZero = number_format($sumZero / $totalNumbers, 6);

    echo $ratioPositives . PHP_EOL;
    echo $ratioNegatives . PHP_EOL;
    echo $ratioZero . PHP_EOL;
}

echo plusMinus([-4, 3, -9, 0, 4, 1]);
