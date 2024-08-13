<?php
function insertionSort($arr) {
    for ($i = 1; $i < count($arr); $i++) {
        $currentVal = $arr[$i];
        $j = $i - 1;
        while ($j >= 0 && $arr[$j] > $currentVal) {
            $arr[$j + 1] = $arr[$j];
            $j--;
        }
        $arr[$j + 1] = $currentVal;
    }
    return $arr;
}

$names = ["Victor", "Manuel", "Taylor", "Eve", "Charlie"];
echo "Lista original: " . implode(", ", $names) . "\n";
$sortedNames = insertionSort($names);
echo "Lista ordenada alfabéticamente: " . implode(", ", $sortedNames) . "\n";
?>