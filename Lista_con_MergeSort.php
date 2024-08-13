<?php
function mergeSort($arr) {
    if (count($arr) <= 1) {
        return $arr;
    }

    $mid = floor(count($arr) / 2);
    $left = array_slice($arr, 0, $mid);
    $right = array_slice($arr, $mid);

    $left = mergeSort($left);
    $right = mergeSort($right);

    return merge($left, $right);
}

function merge($left, $right) {
    $result = [];

    while (count($left) > 0 && count($right) > 0) {
        if ($left[0] < $right[0]) {
            $result[] = array_shift($left);
        } else {
            $result[] = array_shift($right);
        }
    }

    return array_merge($result, $left, $right);
}

$words = ["apple", "orange", "banana", "grape", "cherry"];
echo "Lista original: " . implode(", ", $words) . "\n";
$sortedWords = mergeSort($words);
echo "Lista ordenada alfabéticamente: " . implode(", ", $sortedWords) . "\n";
?>