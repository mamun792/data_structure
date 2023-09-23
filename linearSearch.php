<?php
$arr = array(10, 12, 13, 14, 15, 16, 17, 18, 19, 20);
$n = 18;
$c = 0;
for ($i = 0; $i < count($arr); $i++) {
    if ($arr[$i] == $n) {
        $c++;
        break;
    }
}
if ($c == 0) {
    echo "Not found";
} else {
    echo " search index is :" . $i;
}

//time complexity O(n)
//space complexity O(1)