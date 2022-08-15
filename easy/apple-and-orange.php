<?php

// https://www.hackerrank.com/challenges/apple-and-orange/problem

function countApplesAndOranges($s, $t, $a, $b, $apples, $oranges)
{
    [$applesCount, $orangeCount] = [0, 0];
    for ($i = 0; $i < count($apples); $i++) {
        $temp = $apples[$i] + $a;
        if ($temp >= $s && $temp <= $t) {
            $applesCount++;
        }
    }

    for ($j = 0; $j < count($oranges); $j++) {
        $temp = $oranges[$j] + $b;
        if ($temp >= $s && $temp <= $t) {
            $orangeCount++;
        }
    }

    echo $applesCount . PHP_EOL;
    echo $orangeCount . PHP_EOL;
}

countApplesAndOranges(7, 11, 5, 15, [-2, 2, 1], [5, -6]);
