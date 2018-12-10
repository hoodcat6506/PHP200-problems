<?php
function sum($num1, $num2)
{
    return $num1 + $num2;
}

echo sum(5, 10);

$plus = sum(5, 10);
echo '<br>' . PHP_EOL;
echo $plus + 20;
