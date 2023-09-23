<?php
$n = 121;
$sum = 0;
$tem = $n;
while ($tem != 0) {
    $r = $tem % 10;
    $sum = $sum * 10 + $r;
    $tem = (int)($tem / 10);
}

if ($n == $sum) {
    echo "Palindrome";
} else {
    echo "Not Palindrome";
}
