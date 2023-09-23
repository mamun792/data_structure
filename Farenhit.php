<?php
if (isset($_POST['submit'])) {
    $c = $_POST['celies'];
    $f = ($c * (9 / 5) + 32);
    echo "temperature to celies is : ", $f;
}
