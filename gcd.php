<?php
$n1 = 60;
$n2 = 24;
while ($n2 != 0) {
    $r = $n1 % $n2;
    $n1 = $n2;
    $n2 = $r;
}

$gcd = $n1;

$lcd = ($n1  * $n1) / $gcd;
echo "gcd" . $gcd . "<br>";
echo "lcd" . $lcd;
