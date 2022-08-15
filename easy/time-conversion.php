<?php

// https://www.hackerrank.com/challenges/time-conversion/problem

function timeConversion($time)
{
    [$hour, $minutes, $seconds] = explode(':', $time);

    $isPM = strpos($time, 'PM');
    if ($isPM === false) {
        $hour = $hour == 12 ? '00' : $hour;
    } else {
        $hour = ($hour + 12) >= 24 ? '12' : $hour + 12;
    }

    $time = implode(':', [$hour, $minutes, $seconds]);

    return str_replace(['AM', 'PM'], '', $time);
}

echo timeConversion('07:45:54AM') . PHP_EOL;
echo timeConversion('07:45:54PM') . PHP_EOL;;
echo timeConversion('12:45:54PM') . PHP_EOL;;
