<?php
$arr = array();
$top = -1;

function pop()
{
    global $arr, $top;
    if ($top == -1) {
        echo "Empty array" . "<br>";
    } else {
        $r = $arr[$top];

        $top--;
        echo "index is pop " . $top + 1 . "- " . $r . "<br>";
    }
}
function push($number)
{
    global $arr, $top;
    if ($top == 4) {
        echo "stack is full" . "<br>";
    } else {
        $top++;
        $arr[$top] = $number;
        echo "index is push " . $top . "- " . $arr[$top] . "<br>";
    }
}
push(10);
push(20);
push(30);
push(40);
push(50);

pop();
pop();
