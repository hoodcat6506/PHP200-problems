<?php
function sum($param1 = 50, $param2 = 100)
{
    return $param1 + $param2;
}

echo 'sum(5, 10) = ' . sum(5, 10);
echo '<br>' . PHP_EOL;

echo 'sum(5) = ' . sum(5);
echo '<br>' . PHP_EOL;

echo 'sum() = ' . sum();
echo '<br>' . PHP_EOL;
