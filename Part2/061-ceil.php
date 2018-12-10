<?php
/**
 * float ceil ( float $value )
 *
 * 실수를 무조건 올린다.
 * 입력받은 실수와 같거나 큰 정수라 생각하면 된다.
 */
$num = 16.78;
$ceil = ceil($num);
echo $ceil;

echo '<br>' . PHP_EOL;

$num = 16;
$floor = floor($num);
echo $floor;
