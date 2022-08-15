<?php

// https://www.hackerrank.com/challenges/angry-professor/problem

function angryProfessor($limit, $array)
{
    [$count, $arraySize] = [0, count($array)];
    for ($i = 0; $i < $arraySize; $i++) {
        if ($array[$i] <= 0) {
            $count++;
        }
    }

    return $count >= $limit ? 'NO' : 'YES';
}

echo angryProfessor(3, [-1, -3, 4, 2]) . PHP_EOL;
echo angryProfessor(2, [0, -1, 2, 1]) . PHP_EOL;
