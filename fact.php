<?php
$fact = 1;
for ($i = 1; $i <= 5; $i++) {
    $fact = $fact * $i;
    echo "factorial " . $i . " of : ", $fact . "<br>";
}
