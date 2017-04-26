<?php

function mmc($m, $n)
{
    $mult = $m * $n;

    if ($n > $m) {
        $temp = $n;
        $n = $m;
        $m = $temp;
    }

    do {

        $resto = $m % $n;
        $m = $n;
        $n = $resto;

    } while ($resto != 0);

    return $mult / $m;

}

echo mmc(20, 8);
