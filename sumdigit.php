<?php
$a = 123;
$sum = 0;
while ($a != 0) {
    $r = $a % 10;
    $sum = $sum + $r;
    $a = $a / 10;
}
echo $sum;

