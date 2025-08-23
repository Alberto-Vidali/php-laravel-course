<?php

$set1 = [1,2,3,4,5];
$set2 = [3,4,5,6,7];

// Intersezione di due insiemi
var_dump(
    array_intersect($set1, $set2),
    array_intersect($set2, $set2)
);

// Elementi che ci sono nel primo insieme ma non nel secondo
var_dump(
    array_diff($set1, $set2),
    array_diff($set2, $set1),
);