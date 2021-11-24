<?php

function middle($array, $target) {
    $start = 0;
    $end = count($array) - 1;
    while ($start <= $end) {
        $middle = floor(($start + $end) / 2);
        $val = $array[ $middle ];
        if ($val > $target) {
            $end = $middle - 1;
        } else if ($val < $target) {
            $start = $middle + 1;
        } else {
            return $middle;
        }
    }
    return false;
}