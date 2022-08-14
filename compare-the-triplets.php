<?php

// https://www.hackerrank.com/challenges/compare-the-triplets/problem

function compareTripletsFor($arrayOne, $arrayTwo)
{
    [$arrayOneSum, $arrayTwoSum] = [0, 0];
    for ($i = 0; $i < 3; $i++) {
        if ($arrayOne[$i] === $arrayTwo[$i]) {
            continue;
        }

        if ($arrayOne[$i] > $arrayTwo[$i]) {
            $arrayOneSum++;
            continue;
        }

        $arrayTwoSum++;
    }

    return [$arrayOneSum, $arrayTwoSum];
}

function compareTripletsForeach($arrayOne, $arrayTwo)
{
    [$arrayOneSum, $arrayTwoSum] = [0, 0];
    foreach ($arrayOne as $key => $value) {
        if ($value === $arrayTwo[$key]) {
            continue;
        }

        if ($value > $arrayTwo[$key]) {
            $arrayOneSum++;
            continue;
        }

        $arrayTwoSum++;
    }

    return [$arrayOneSum, $arrayTwoSum];
}

$arrayOne = [17, 28, 30];
$arrayTwo = [99, 16, 8];

$result = compareTripletsFor($arrayOne, $arrayTwo);
echo implode('-', $result);

$result = compareTripletsForeach($arrayOne, $arrayTwo);
echo implode('-', $result);
