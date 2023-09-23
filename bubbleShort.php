<?php
$arry = array(10, 3, 9, 2, 8, 1, 7, 6, 5, 4);
$len = count($arry);
for ($i = 0; $i < $len; $i++) {
    for ($j = 0; $j < $len - 1; $j++) {
        if ($arry[$j] > $arry[$j + 1]) {
            $tem = $arry[$j];
            $arry[$j] = $arry[$j + 1];
            $arry[$j + 1] = $tem;
        }
    }
}

for ($i = 0; $i < $len; $i++) {
    echo $arry[$i] . " ";
}
//time complexity O(n^2)
//space complexity O(1)