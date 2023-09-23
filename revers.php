<?php
$n = 123;

$sum = 0;
while ($n != 0) {
    $r = $n % 10;
    $sum = $sum * 10 + $r;
    $n = (int)($n / 10);
    echo "check" . $n . "<br>";
}
echo $sum;
