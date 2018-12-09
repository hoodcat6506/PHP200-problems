<?php
/**
 * string substr ( string $string , int $start [, int $length ] )
 *
 * 문자열을 자르는 함수.
 * 문자열, 시작위치, 자르는 길이 순으로 매개 값을 넘겨준다.
 *
 * 문자열을 자를시에 시작위치를 음력으로 넣어줄 수 있는 것을 보면 제일 마지막 위치는 -1인거 같음.
 * 파이썬과 비슷함.
 */
$str = 'everdevel';

$cutStr = substr($str, 0, 5);
echo $cutStr;

echo '<br>' . PHP_EOL;

$cutStr = substr($str, -5, 5);
echo $cutStr;
