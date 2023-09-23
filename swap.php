<?php
$a = 10;
$b = 40;
$c = 30;
$dis = $b * $b - 4 * $a * $c;
echo "discriminant is : ", $dis, "<br>";
if ($dis < 0) {
    echo "roots are imaginary";
} else {
    $root1 = (-$b + sqrt($dis)) / (2 * $a);
    $root2 = (-$b - sqrt($dis)) / (2 * $a);
    echo "roots are real and they are : ", $root1, " and ", $root2;
}
