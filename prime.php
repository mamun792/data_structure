<?php

function prime($prime)
{
    $count = 0;
    for ($i = 2; $i < $prime; $i++) {
        if ($prime % $i == 0) {
            $count++;
        }
    }
    if ($count == 0) {
        echo "Prime";
    } else {
        echo "Not Prime";
    }
}


$prime = 100;
prime($prime);
