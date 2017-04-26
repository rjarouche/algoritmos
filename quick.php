<?php

function quick($array)
{

    $len = count($array);
    if ($len <= 1) {
        return $array;
    }

    $left = array();
    $right = array();
    $pivot = $array[0];

    for ($i = 1; $i < $len; $i++) {
        if ($pivot > $array[$i]) {
            $left[] = $array[$i];
        } else {
            $right[] = $array[$i];
        }
    }

    return array_merge(quick($left), array($pivot), quick($right));

}

print_r(quick(array(10, 9, 8, 7, 80, 6, 5, 4, 3, 2, 13, 1)));
