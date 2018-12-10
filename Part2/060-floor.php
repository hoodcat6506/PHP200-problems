<?php
/**
 * float floor ( float $value )
 *
 * 실수에 소수점 자리를 버린다.
 * round()와 달리 이건 무조건 내린다.
 *
 * 입력받은 실수와 같거나 작은 정수라고 생각하면 된다.
 */
$num = 16.78;
$floor = floor($num);
echo $floor;

echo '<br>' . PHP_EOL;

$num = 16;
$floor = floor($num);
echo $floor;
