<?php

function factors($n) {
    $n = abs($n);
    $arr = [];
    for ($i = 2; $i <= $n / $i; $i++) {
        while($n % $i == 0) {
            $arr[] = $i;
            $n = $n / $i;
        }
    }
    if ($n > 1) $arr[] = $n;
    return implode(' * ', $arr) . " * 1"; 

}



function gcd($a, $b)
{
    $a = abs($a);
    $b = abs($b);
    while ($a != $b)
        if ($a > $b)
            $a -= $b;
        else
            $b -= $a;
    return $a;
}

function lcm($a, $b)
{
    $a = abs($a);
    $b = abs($b);
    return (($a * $b) / gcd($a, $b));
}

function multipNum($a, $b)
{
    $a = abs($a);
    $b = abs($b);
    return (int)$a * (int)$b;
}