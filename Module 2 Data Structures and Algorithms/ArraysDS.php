<?php

/**
 * @param  array  $array
 * @return array
 */
function arrayReverse(array $array): array
{
    $size = sizeof($array);
    $newArray = [];

    for ($i = $size - 1; $i >= 0; $i--) {

        $newArray[] = $array[$i];
    }
    return $newArray;

}

$array = [9, 8, 7, 6, 5, 4, 3, 2, 1, 0];

$arrayReversed = arrayReverse($array);

print_r($arrayReversed);