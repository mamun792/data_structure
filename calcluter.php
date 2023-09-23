<?php
$op = '*';
$a = 10;
$b = 5;
switch ($op) {
    case '+':
        echo "addition is : ", $a + $b;
        break;
    case '-':
        echo "subtraction is : ", $a - $b;
        break;
    case '*':
        echo "multiplication is : ", $a * $b;
        break;
    case '/':
        echo "division is : ", $a / $b;
        break;
    case '%':
        echo "modulus is : ", $a % $b;
        break;
    default:
        echo "invalid operator";
        break;
}
