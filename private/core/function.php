<?php

function getRandomNumber()
{
    $arr = array();
    while (count($arr) != 4) {
        $var = rand(1, 4);
        if (in_array($var, $arr)) {
            continue;
        } else {
            array_push($arr, $var);
        }
    }

    return $arr;
}

function getRandomNumberForColor()
{
    $arr = array();
    while (count($arr) != 3) {
        $var = rand(1, 7);
        if (in_array($var, $arr)) {
            continue;
        } else {
            array_push($arr, $var);
        }
    }

    return $arr;
}