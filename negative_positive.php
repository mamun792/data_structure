<?php
$a = 30;
$b = 40;
$c = 210;
if ($a < $b && $c < $b) {

    //a thela b boro kina and c thela b boro kina
    echo "number is  b";
} else if ($a > $b &&  $a > $c) {

    //a thela b choto kina and a thela c choto kina
    echo "number is a";
} else {
    echo "number is c";
}
