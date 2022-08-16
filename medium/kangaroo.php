<?php

// https://www.hackerrank.com/challenges/kangaroo/problem

function kangaroo($x1, $v1, $x2, $v2)
{
    if ($x1 > $x2 && $v1 > $v2) {
        return 'NO';
    }

    if ($x1 < $x2 && $v1 < $v2) {
        return 'NO';
    }

    if ($v1 === $v2) {
        return 'NO';
    }


    if (($x2 - $x1) % ($v1 - $v2) === 0) {
        return 'YES';
    }

    return 'NO';
}

echo kangaroo(0, 3, 4, 2);
