<?php
$arr = array(10, 20, 30, 40, 50, 60, 70, 80, 90);
$search = 80;
$low = 0;
$high = count($arr);
while ($low <= $high) {
    $mid = (int)($low + $high) / 2;
    if ($arr[$mid] == $search) {
        echo "search index is : " . $mid;
        return 0;
    } else if ($arr[$mid] < $search) {
        $low = $mid + 1;
    } else {
        $high = $mid - 1;
    }
}
echo "Not found";
//time complexity O(log n)
//space complexity O(1)